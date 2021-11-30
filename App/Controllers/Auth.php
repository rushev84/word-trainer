<?php

namespace App\Controllers;

use App\Services\Router;

class Auth
{
    public function login($data)
    {
        $email = $data["email"];
        $password = $data["password"];

        $user = \R::findOne('users', 'email = ?', [$email]);

        if (!$user) {
            die('User not found');
        }

        if (password_verify($password, $user->password)) {
            session_start();
            $_SESSION["user"] = [
                "id" => $user->id,
                "full_name" => $user->full_name,
                "user_name" => $user->user_name,
                "email" => $user->email,
                "avatar" => $user->avatar
            ];

            Router::redirect('/profile');
        } else {
            die('Incorrect password');
        }
    }

    public function register($data, $files)
    {
        $email = $data["email"];
        $user_name = $data["user_name"];
        $full_name = $data["full_name"];
        $password = $data["password"];
        $password_confirm = $data["password_confirm"];

        $avatar = $files["user_avatar"]; // this is array

        $file_name = time() . '_' . $avatar["name"];
        $path = "uploads/avatars/" . $file_name;

        if (move_uploaded_file($avatar["tmp_name"], $path)) {

            $user = \R::dispense('users');

            $user->email = $email;
            $user->username = $user_name;
            $user->full_name = $full_name;
            $user->avatar = "/" . $path;
            $user->password = password_hash($password, PASSWORD_DEFAULT);

            \R::store($user);

            Router::redirect('/login');

        } else {
            Router::error(500);
        }
    }
}
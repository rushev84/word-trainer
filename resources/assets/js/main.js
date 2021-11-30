async function getWords() {
    let res = await fetch('http://api.word-trainer/words')
    let words = await res.json();

    console.log(words);

    words.forEach((word) => {
document.querySelector('.post-list').innerHTML += `
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">${post.title}</h5>
                        <p class="card-text">${post.body}</p>
                        <a href="#" class="card-link">Подробнее</a>
                        <a href="#" class="card-link" onclick="removePost(${post.id})">Удалить</a>
                        <a href="#" class="card-link" onclick="selectPost('${post.id}', '${post.title}', '${post.body}')">Редактировать</a>
                    </div>
                </div>
`
    })
}

getWords();
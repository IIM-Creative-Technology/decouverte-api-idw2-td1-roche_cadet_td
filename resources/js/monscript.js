const pic = document.getElementById("cours");
// const url = 'https://ghibliapi.herokuapp.com/films';

function createNode(element) {
    return document.createElement(element);
}

function append(parent, el) {
    let child = parent.appendChild(el);
    return child;
}

fetch(api.php)
    .then((resp) => resp.json())
    .then(function (data) {
        console.log(data);
        let cour = data;
        return cour.map(function (cour) {
            let articles=createNode('article');
            // articles.id=`${cour.id}`
            // let hTwo = createNode('h2');
            // let ps = createNode('p');
            articles.innerHTML = `${cour.nom}`;
            // ps.innerHTML = `${cour.description}`;
            append(pic, articles);
            // append(articles, hTwo);
            // append(articles, ps);
        });
    })
    .catch(function (error) {
        console.log(error);
    });
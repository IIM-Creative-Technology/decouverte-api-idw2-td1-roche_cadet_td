<?php

use Route\api;


const pic = document.getElementById("pictures");
const url = 'https://ghibliapi.herokuapp.com/films';

function createNode(element) {
    return document.createElement(element);
}

function append(parent, el) {
    let child = parent.appendChild(el);
    return child;
}

fetch(url)
    .then((resp) => resp.json())
    .then(function (data) {
        console.log(data);
        let titleP = data;
        return titleP.map(function (titleP) {
            let articles=createNode('article');
            articles.id=`${titleP.id}`
            let hTwo = createNode('h2');
            let ps = createNode('p');
            hTwo.innerHTML = `${titleP.title}`;
            ps.innerHTML = `${titleP.description}`;
            append(pic, articles);
            append(articles, hTwo);
            append(articles, ps);
        });
    })
    .catch(function (error) {
        console.log(error);
    });



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ghibli</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Studio Ghibli's pictures</h1>
    <section id="pictures"></section>

    <script src="monscript.js"></script>
</body>
</html>
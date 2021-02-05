<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>HEWWWO</h1>
    <section id="course">

    </section>



    <script>
        const pic = document.getElementById("course");
        // const url = 'https://ghibliapi.herokuapp.com/films';

        // let api = "../../routes/api.php";
        let api = 'http://127.0.0.1:8000/api/cours';

        function createNode(element) {
            return document.createElement(element);
        }

        function append(parent, el) {
            let child = parent.appendChild(el);
            return child;
        }

        fetch(api)
            .then((resp) => resp.json())
            .then(function(data) {
                console.log(data);
                let cour = data;
                return cour.map(function(cour) {
                    let articles = createNode('article');
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
            .catch(function(error) {
                console.log(error);
            });
    </script>


    <!-- <script src="../../routes/api.php"></script> -->
</body>

</html>
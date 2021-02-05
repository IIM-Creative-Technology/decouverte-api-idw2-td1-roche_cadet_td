<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            background-color: rgb(49, 49, 49);
            color: lightgray;
        }

        #course{
            margin: auto;
            display: flex;
            flex-wrap: wrap;
        }
        
        #arti_all{
            width: 32%;
            margin: 5px;
            border: double lightgray;
        }

        #arti_all article{
            padding: 3px;            
        }

        #arti_img, #arti_title, #arti_prog, #arti_year, #arti_date{
            border-block: inherit;
        }
        
        #arti_img{
            display: flex;
            justify-content: center;
            height: 20vh;
        }

        #arti_img img {
            height: 20vh;
        }
    </style>
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
                    let arti_all = createNode('article');

                    let arti_img = createNode('article');
                    let img_cour = createNode('img');

                    let arti_title = createNode('article');
                    let title_cour = createNode('h3');
                    let descr_cour = createNode('p');

                    let arti_prog = createNode('article');
                    let prog_cour = createNode('p');

                    let arti_year = createNode('article');
                    let year_cour = createNode('p');

                    let arti_date = createNode('article');
                    let date_cour = createNode('p');

                    arti_all.id = "arti_all";
                    arti_img.id = "arti_img";
                    arti_title.id = "arti_title";
                    arti_prog.id = "arti_prog";
                    arti_year.id = "arti_year";
                    arti_date.id = "arti_date";

                    img_cour.src = `${cour.image_url}`;
                    title_cour.innerHTML = `Cours : ${cour.nom}`;
                    descr_cour.innerHTML = `${cour.description}`;
                    prog_cour.innerHTML = `Programme : ${cour.programme}`;
                    year_cour.innerHTML = `Année : ${cour.year}`;
                    date_cour.innerHTML = `${cour.created_at} -  ${cour.updated_at}`;

                    append(pic, arti_all);

                    append(arti_all, arti_img);
                    append(arti_img, img_cour);

                    append(arti_all, arti_title);
                    append(arti_title, title_cour);
                    append(arti_title, descr_cour);

                    append(arti_all, arti_prog);
                    append(arti_prog, prog_cour);
                    
                    append(arti_all, arti_year);
                    append(arti_year, year_cour);

                    append(arti_all, arti_date);
                    append(arti_date, date_cour);

                    // articles.id=`${cour.id}`
                    // let hTwo = createNode('h2');
                    // let ps = createNode('p');
                    // articles.innerHTML = `${cour.nom}`;
                    // ps.innerHTML = `${cour.description}`;

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
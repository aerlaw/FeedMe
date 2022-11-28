<html lang="en">

<!-- Header -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="Styles.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- JavaScripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1253beb9d2.js" crossorigin="anonymous"></script>
    <script src="FeedMe.js"></script>

    <!-- Title -->
    <title>Feed Me</title>
</head>

<!-- Body -->

<body>

    <!-- Nav bar && Search bar && Sign in -->
    <nav class="d-inline container-fluid">
        <ul class="d-inline mx-1">
            <a href="Add.html"><button type="button" class="recette btn btn-danger align-middle"><span class="material-icons add align-middle">add</span>recette</button></a>
            <li class="material-icons resto align-middle d-inline">restaurant</li>
            <a id="feed" href="FeedMe.php">
                <li class="d-inline text-logo">Feed Me</li>
            </a>
            <li class="topnav d-inline">
                <input class="ph" type="text" placeholder="Lasagnes au saumon...">
                <i class="fa-solid fa-magnifying-glass text-dark"></i>
                <a href="Inscription.html"><button type="button" class="d-inline float-end mb-1 btn btn-danger p-1 text-center">
                    <i class="fa-regular fa-user d-inline"></i>
                    <div class="d-inline text-white">Sign in</div>
                </button></a>
            </li>
        </ul>
    </nav>
    <!-- All recettes button -->
    <div class="container-fluid">
        <div class="d-row" id="my-row">
            <button type="button" class="btn btn-light col-4"><i class="fa-solid fa-euro-sign"></i>   Recettes à petit prix</button>
            <button type="button" class="btn btn-light col-4"><i class="fa-regular fa-clock"></i>     Recettes rapides</button>
            <button type="button" class="btn btn-light col-4"><i class="fa-solid fa-shuffle"></i>     Recettes au hasard</button>
        </div>
    </div>

    <!-- Slideshow recette du jour
    <slideshow class="titre">Recette du jour</slideshow>-->

    <!-- Menu list button -->
    <p class="titre">Type de plats</p>
    <div class="container-fluid list-unstyled" id="Choix">
        <div class="row ml-4">
            <button class="col-4 text-center">
                <?php
                $link = new PDO('mysql:host=localhost;dbname=feed_me', 'root', '');
                $req = "select * from recette where categorie = petit_dejeuner";
                $stmt = $link->prepare($req);
                $stmt->execute();
                $recettes = $stmt->fetchAll();
                ?>
                <span class="material-icons croissant">bakery_dining</span>
                <li>Petit déjeuner</li>
            </button>
            <button class="col-4 text-center">
                <span class="material-icons vin">wine_bar</span>
                <li>Apéritifs</li>
            </button>
            <button class="col-4 text-center">
                <span class="material-icons bol">rice_bowl</span>
                <li>Entrées</li>
            </button>
            <button class="col-4 text-center mt-5">
                <span class="material-icons plat">dinner_dining</span>
                <li>Plats</li>
            </button>
            <button class="col-4 text-center mt-5">
                <span class="material-icons sauce">soup_kitchen</span>
                <li>Sauces</li>
            </button>
            <button class="col-4 text-center mt-5">
                <span class="material-icons dessert">icecream</span>
                <li>Desserts</li>
            </button>
        </div>
    </div>

    <!-- Slideshow recettes populaires && recettes de saison
    <div class="mt-5 d-grid">
        <slideshow class="titre">Recettes populaires</slideshow></div>-->

    <?php


    $link = new PDO('mysql:host=localhost;dbname=feed_me', 'root', '');
    $req = "select * from recette";
    $stmt = $link->prepare($req);
    $stmt->execute();
    $recettes = $stmt->fetchAll();
    ?>
    <slideshow class="titre">Les recettes</slideshow>
    <ul>
        <?php foreach ($recettes as $recette):  ?>
            <li>
                <ul class="end">
                    <li>Nom de la recette : <?php echo $recette['name'] ?></li>
                    <li>Origine du pays : <?php echo $recette['pays'] ?></li>
                    <li>Liste des ingrédients : <?php echo $recette['ingredients']?></li>
                    <li>La recette : <?php echo $recette['etape'] ?></li>
                    <li>Le cout : <?php echo $recette['prix'] ?> €</li>
                    <li>La catégorie : <?php echo $recette['categorie'] ?></li>
                    <li>Le nombre de couvert : <?php echo $recette['couvert'] ?> personnes</li>
                </ul>
            </li>
        <?php endforeach ?>
    </ul>

        <!-- Footer -->
        <footer class="text-center">
            <p class="mt-4">Codé avec passion par moi-même</p>
            <p>Tous droits réservés Feed Me® - 2022-2023</p>
            <p>
                <a class="foot text-decoration-none mention" href="mention.html"> Mentions légales </a><span> - </span>
                <a class="foot text-decoration-none mention" href="conditions.html"> Conditions Générales d'Utilisation </a>
            </p>
            <p>
                <a class="foot text-decoration-none mention " href="mailto:milanvicentijevic9@gmail.com?Subject= Contacted via Feed Me"> Nous contacter </a></a><span> - </span>
                <a class="foot text-decoration-none mention" href="Faq.html"> Foire aux questions </a></a>
            </p>
        </footer>
</body>

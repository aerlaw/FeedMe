<?php
    // Variables
    $name = $_POST['name'];
    $country = $_POST['country'];
    $ingredient = $_POST['ingredient'];
    $recipe = $_POST['recipe'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $number = $_POST['number'];

    // Connexion à la BDD
    $conn = new mysqli('feedme', 'root', '', 'feed_me');
    if ($conn->connect_error) {
        die('Connexion échouée : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into recette(name, pays, ingredients, etape, prix, categorie, couvert) values (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssisi",$name, $country, $ingredient, $recipe, $price, $type, $number);
        $stmt->execute();
        echo "Recette envoyée";
        $stmt->close();
        $conn->close();
    }
//header("Location: /bts/FeedMe.html");

/*if (isset($_POST['valider'])) {
            $stmt = $conn->prepare("insert into recette(name, pays, ingredients, etape, prix, categorie, couvert)
            values (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute($name, $country, $ingredient, $recipe, $price, $type, $number);
            echo "Inscription de la recette réussite";
            var_dump($stmt);
            $stmt->close();
            $conn->close();

        }*/
?>
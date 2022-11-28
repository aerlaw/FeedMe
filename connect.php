<?php
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    //Connexion à la BDD

    $conn = new mysqli('feedme', 'root', '', "feed_me");
    if ($conn->connect_error) {
        die('Connexion échouée : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into user(name, firstname, email, password)
            values (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $firstname, $email, $password);
        $stmt->execute();
        echo "Inscription réussite";
        $stmt->close();
        $conn->close();
    }
    header("Location: /bts/FeedMe.html");
?>
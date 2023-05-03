<?php

if (isset($_POST['submit'])) {

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    echo 'Hola' . "</br>" . $nombre . "</br>";
    echo $email . "</br>";
    if (!empty($_POST['select'])) {
        foreach ($_POST['select'] as $selected) {
            echo $selected . "</br>";
        }
    }
}
?>
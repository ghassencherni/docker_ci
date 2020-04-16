<?php

$host = 'mysql';
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');
$database = getenv('MYSQL_DATABASE');

$link = mysqli_connect("$host", "$user", "$pass", "$database");

/* Vérification de la connexion */
if (mysqli_connect_errno()) {
    printf("Echec de la connexion : %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT message FROM bar";

if ($result = mysqli_query($link, $query)) {

    /* Récupération du tableau associatif */
    while ($row = mysqli_fetch_row($result)) {
      printf ("%s\n", $row[0]);
    }

    /* Libération du jeu de résultats */
    mysqli_free_result($result);
}

/* Fermeture de la connexion */
mysqli_close($link);

?>

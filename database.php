<?php

$erreurs = "";
$db = new PDO('mysql:host=localhost;dbname=My_todoList;charset=utf8', 'root', 'root');

if (isset($_POST['creer_tache'])) { // On vérifie que la variable POST existe
    if (empty($_POST['creer_tache'])) {  // On vérifie qu'elle as une valeure
        $erreurs = 'Vous devez indiquer la valeure de la tâche';
    } else {
        $tache = $_POST['creer_tache'];
        $db->exec("INSERT INTO tache(tache) VALUES('$tache')"); // On insère la tâche dans la base de donnée
    }
}

if (isset($_GET['supprimer_tache'])) {
    $id = $_GET['supprimer_tache'];
    $db->exec("DELETE FROM tache WHERE id=$id");
}

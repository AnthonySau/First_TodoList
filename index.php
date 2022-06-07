<?php

require 'database.php'

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma todoList</title>
    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/b87194bec0.js" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <fieldset>
        <legend>Ma TodoList</legend>

        <form class="taches_input" method="post" action="index.php">
            <input id="inserer" type="text" name="creer_tache" />
            <button id="envoyer"> <i class="fa-solid fa-circle-plus"></i></button>
        </form>

        <?php
        require 'error.php'
        ?>

        <table class="taches">
            <tr>
                <th>
                    N°
                </th>
                <th>
                    Check
                </th>
                <th>
                    Name
                </th>
                <th>
                    Action
                </th>
            </tr>

            <?php
            require 'task.php';
            ?>

        </table>
    </fieldset>
</body>

</html>
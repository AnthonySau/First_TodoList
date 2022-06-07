            <?php
            // On exécute une requête visant à récupérer les tâches
            $reponse = $db->query('Select * from tache');
            while ($taches = $reponse->fetch()) { // On initialise une boucle
            ?>
                <tr>
                    <td><?php echo $taches['id'] ?></td>
                    <td> <input type="checkbox"></td>
                    <td><?php echo $taches['tache'] ?></td>
                    <td>
                        <a class="suppr" href="index.php?supprimer_tache=<?php echo $taches['id'] ?>">
                            <i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            <?php
            }
            ?>
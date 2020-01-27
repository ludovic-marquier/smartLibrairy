<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8"/>
        <title>Books</title>
    </head>

    <body>

        <h1>Liste livres</h1>

        <ul>
            <?php

                while($data = $livres->fetch()){
                    echo "<li>".$data['titre']."  -  ".$data['parution']."</li>";
                }

            ?>
        </ul>

    </body>

</html>



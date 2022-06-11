<?php

class Page {

    static function display_header($title) {
        ?>
        <html lang="en-GB">
            <head>
                <title><?php echo $title ?></title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                
            </head>
            <body>
                <h2>Realizacja zadania nr2 w ramach laboratorium TCh - Dariusz Knap</h2>
                <?php
            }

            static function display_navigation() {
                ?>
                </body>
                <br>
                <a href="index.php?page=home">Home</a><br>
                <a href="index.php?page=calc">GS Calc</a><br>
                <a href="index.php?page=doc">Documentation</a><br>
                <?php
    }

}

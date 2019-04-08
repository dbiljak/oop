<?php
    require("Class/Circle.php");
    require("Class/Triangle.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Krug i trokut - OOP</title>
    </head>
    <body style="text-align: center">
        <?php
            echo "<h2>Krug</h2>";
            if (!@$_GET["r"]) {
                echo "Unesite vrijednost polumjera!<br />";
            } elseif (!is_numeric($_GET["r"])) {
                echo "Polumjer mora biti broj!";
            } else {
                $circle = new Circle($_GET["r"]);
                echo "Površina kruga je: " . round($circle->getSurface(), 2) . "<br />";
                echo "Opseg kruga je: " . round($circle->getCircumference(), 2);
            }

            echo "<br /><br /><br />";

            echo "<h2>Trokut</h2>";
            if (!@$_GET["a"] || !@$_GET["b"] || !@$_GET["c"]) {
                echo "Unesite sve tri vrijednost (a, b, c)!<br />";
            } elseif (!is_numeric($_GET["a"]) || !is_numeric($_GET["b"]) || !is_numeric($_GET["c"])) {
                echo "Sve tri vrijednosti moraju biti broj!";
            } else {
                $triangle = new Triangle($_GET["a"], $_GET["b"], $_GET["c"]);
                echo "Površina trokuta je: " . round($triangle->getSurface(), 2) . "<br />";
                echo "Opseg trokuta je: " . round($triangle->getCircumference(), 2);
            }
        ?>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links/head.php' ?>
    <style>
        body{
            background-color:#4B56D2;
        }
    </style>
</head>
<body>
<?php include 'header.php' ?>   
<div class="container">
<table class="table text-light">
        <tr>
            <th>Name:</th>
            <td>CAGUICLA, ASHLEY DIANE, M.</td>
            <th>Topic</th>
            <td>Chapter 2 Functions and Control Structures</td>
        </tr>
        <tr>
            <th>Activity No.</th>
            <td>Activity 2</td>
            <th>Date</th>
            <td>06/26/2023</td>
        </tr>
    </table>

            <?php
                echo "<h1>SET B: EVEN numbers from 1-100</h1>";
                $number = 100;
                echo "<table class=table>";
                $ctr = 0;
                for($x=1; $x<=$number; $x++){
                    if($x % 20 == 1)
                        echo "<tr>";
                    if($x % 2 == 0){
                        echo "<td>" . $x . "</td>";
                        $ctr++;
                    }
                    if($ctr % 10 == 0)
                        echo "</tr>";   
                }
                echo "</table>";
            ?>

            <?php
                echo "<h1>Fahrenheit to Celsius (0 ° to 100 ° Fahrenheit)</h1>";
                $fahrenheit = 100;
                echo "<table class=table><tr><th>Celsius</th><th>Fahrenheit</th></tr>";
                for($x=0; $x<=$fahrenheit; $x++){
                    $celsius = ($x - 32) * 5/9;
                    $celsius = round($celsius, 2);
                    echo "<tr><td>$x °</td><td>$celsius °</td></tr>";
                }
                echo "</table>";
                echo "<h1>Celsius to Fahrenheit (0 ° to 100 ° Celsius)</h1>";
                $celsius = 100;
                echo "<table class=table><tr><th>Celsius</th><th>Fahrenheit</th></tr>";
                for($x=0; $x<=$celsius; $x++){
                    $fahrenheit = ($x * 9/5) + 32;
                    $fahrenheit = round($fahrenheit, 2);
                    echo "<tr><td>$x °</td><td>$fahrenheit °</td></tr>";
                }
                echo "</table>";
            ?>
</div>
    
    <?php include 'links/footer.php' ?>
</body>
</html>
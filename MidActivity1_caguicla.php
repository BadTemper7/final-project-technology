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
<table class="table">
        <tr>
            <th>Name:</th>
            <td>CAGUICLA, ASHLEY DIANE, M.</td>
            <th>Topic</th>
            <td>Chapter 1 Introduction to PHP</td>
        </tr>
        <tr>
            <th>Activity No.</th>
            <td>Activity 1</td>
            <th>Date</th>
            <td>06/26/2023</td>
        </tr>
    </table>
	
    <div class="activity d-sm-flex justify-content-between">
        <div>
            <h1>Problem 1</h1>
            <?php
                $Days = array(
                    "Sunday",
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday"
                );
                
                echo "<p style=color:white;><strong>The days of the week in English are: </strong></p>";
                

                for ($x = 0; $x < count($Days); $x++) {
                    echo "<p style=color:white;>$Days[$x]</p>";
                }

                $Days = array(
                    "Dimanche",
                    "Lundi",
                    "Mardi",
                    "Mercredi",
                    "Jeudi",
                    "Vendredi",
                    "Samedi"
                );
                
                echo "<p style=color:black;><strong>The days of the week in French are: </strong></p>";
                
                for ($x = 0; $x < count($Days); $x++) {
                    echo "<p style=color:white;>$Days[$x]</p>";
                }
            ?>
        </div>
        <div>
            <h1>Problem 2</h1>
            <?php
                $number = 3.7;
                echo "<p style=color:white;><strong>Number: </strong>$number </p>";
                echo "<p style=color:white;><strong>Rounded: </strong>", round($number) ."</p>";
                echo "<p style=color:white;><strong>Ceiled: </strong>", ceil($number) ."</p>";
                echo "<p style=color:white;><strong>Floored: </strong>", floor($number) ."</p>";
            ?>
        </div>
        <div>
            <h1>Problem 3</h3>
            <?php
                echo "";
                $number = 35;
                echo "<p style=color:white;><strong>Number:</strong> $number </p>";
                if (is_numeric($number)) {
                    $isEven = (round($number) % 2 == 0) ? true : false;
                    echo "A variable contains a number and it's an " . ($isEven ? "even" : "odd") . " number.";
                }
                else {
                    echo "It's not a number";
                }
            ?>
        </div>
    </div>
</div>
    
    <?php include 'links/footer.php' ?>
</body>
</html>
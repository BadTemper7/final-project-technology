<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 1</title>
    <style>
        body{
            font-family: sans-serif;
        }
        table, tr, th, td{
            border: 1px solid black;
        }
        table{
            border-collapse: collapse;
            margin: 20px auto;
            width: 80%;
        }
        th,td{
            padding: 20px;
        }
        .activity{
            width: 80%;
            display: flex;
            margin: 20px auto;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name:</th>
            <td>LEAL, RICKY ANDREW II, R.</td>
            <th>Topic</th>
            <td>Chapter 1 Introduction to PHP</td>
        </tr>
        <tr>
            <th>Activity No.</th>
            <td>Activity 1</td>
            <th>Date</th>
            <td>06/24/2023</td>
        </tr>
    </table>
    <div class="activity">
        <div>
            <h1>Problem 1</h1>
            <?php
                //Problem 1
                $Days = array(
                    "Sunday",
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday"
                );
                
                echo "<p><strong>The days of the week in English are: </strong></p>";
                

                for ($x = 0; $x < count($Days); $x++) {
                    echo "<p>$Days[$x]</p>";
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
                
                echo "<p><strong>The days of the week in French are: </strong></p>";
                
                for ($x = 0; $x < count($Days); $x++) {
                    echo "<p>$Days[$x]</p>";
                }
            ?>
        </div>
        <div>
            <h1>Problem 2</h1>
            <?php
                //Problem 2s
                $number = 3.7;
                echo "<p><strong>Number: </strong>$number </p>";
                echo "<p><strong>Rounded: </strong>", round($number) ."</p>";
                echo "<p><strong>Ceiled: </strong>", ceil($number) ."</p>";
                echo "<p><strong>Floored: </strong>", floor($number) ."</p>";
            ?>
        </div>
        <div>
            <h1>Problem 3</h3>
            <?php
                //Problem 3
                echo "";
                $number = 12.5;
                echo "<p><strong>Number:</strong> $number </p>";
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
</body>
</html>
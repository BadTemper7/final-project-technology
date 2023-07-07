<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links/head.php' ?>
    <style>
        body{
            background-color: #4B56D2;
        }

    </style>
</head>
<body>
<?php include 'header.php' ?>
<div class="container">
<table class="table text-light">
        <tr>
            <th>Name:</th>
            <td>CAGUICLA, ASHLEY DIANE M.</td>
            <th>Topic</th>
            <td>Chapter 2 Functions and Control Structures</td>
        </tr>
        <tr>
            <th>Activity No.</th>
            <td>Quiz Hands-on 1</td>
            <th>Date</th>
            <td>06/30/2023</td> 
        </tr>
    </table>
    
<?php

    $row = 10;
    $n = 1;
    echo "<table class=diamond>";
    for($i = 0; $i < $row; $i++){
        echo "<tr>";
        for($j = $i; $j < $row; $j++){
            echo "<td></td>";
        }
        for($k=0; $k < $n; $k++){
            echo "<td class=red>❖</td>";
        }
        echo "</tr>";
        $n += 2;
    }

    for($i = 0; $i <= $row; $i++){
        echo "<tr>";
        for($j = 0; $j < $i; $j++){
            echo "<td></td>";
        }
        for($k=0; $k < $n; $k++){
            echo "<td class=red>❖</td>";
        }
        $n -= 2;
        echo "</tr>";
    }
    echo "</table";
?>
</div>

<?php include 'links/footer.php' ?>
</body>
</html>
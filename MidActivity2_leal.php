<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'links/head.php' ?>
</head>
<body>
    <?php include 'header.php' ?>
    <table class="table container">
        <tr>
            <th>Name:</th>
            <td>LEAL, RICKY ANDREW II, R.</td>
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
    <div class="container">
        <div class="d-flex justify-content-between">
            <table class="table">
                <caption class="text-center text-primary display-6" style="caption-side: top;">Fahrenheit to Celsius (0 ° to 100 ° Fahrenheit)</caption>
                <tr>
                    <th>Fahrenheit</th>
                    <th>Celsius</th>
                </tr>
                <?php
                    $fahrenheit = 100;
                    for($x=0; $x<=$fahrenheit; $x++){
                        echo "<tr><td>$x °</td><td>". round(($x - 32) * 5/9, 2) ."°</td>";
                    }
                ?>
            </table>
            <table class="table">
                <caption class="text-center text-primary display-6" style="caption-side: top;">Celsius to Fahrenheit (0 ° to 100 ° Celsius)</caption>
                <tr>
                    <th>Celsius</th>
                    <th>Fahrenheit</th>
                </tr>
                <?php
                    $celsius = 100;

                    for($x=0; $x<=$celsius; $x++){
                        echo "<tr><td>$x °</td><td>" . round(($x * 9/5) + 32, 2) . "°</td></tr>";
                    }
                ?>
            </table>
        </div>
        <table class="table">
            <caption class="text-center text-primary display-6" style="caption-side: top;">ODD numbers from 1-100</caption>
            <?php
                $counter = 0;
                for($i = 1; $i<=100; $i++){
                    if($i % 2 == 1){
                        if($counter == 0){
                            echo "<tr>";
                        }
                        if($counter<5){
                            echo "<td>$i</td>";
                            $counter++;
                        }
                        else{
                            $counter = 0;
                            echo "</tr>";
                        }
                    }
                }
            ?>
        </table>
    </div>
    <?php include 'links/footer.php' ?>
</body>
</html>
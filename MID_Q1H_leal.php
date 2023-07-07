<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <td>Quiz Hands-on 1</td>
            <th>Date</th>
            <td>06/29/2023</td>
        </tr>
    </table>
    <?php
        $n = 10;
        echo "<table class=diamond>";
        for ($i = 0; $i <= $n; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $n - $i; $j++) {
                echo "<td></td>";
            }
            for ($k = 0; $k < $i * 2 - 1; $k++) {
                echo "<td class=red></td>";
            }
            echo "</tr>";
        }
        for ($i = $n - 1; $i >= 1; $i--){
            echo "<tr>";
            for ($j = 0; $j < $n - $i; $j++) {
                echo "<td></td>";
            }
            for ($k = 0; $k < $i * 2 - 1; $k++) {
                echo "<td class=red></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
    <?php include 'links/footer.php' ?>
</body>
</html>
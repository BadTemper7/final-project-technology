<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links/head.php' ?>
    </style>
</head>
<body>
    <?php include 'header.php' ?>
    <div class="container">
        <h1 class="text-center text-primary">
            Functions and Control Structures
        </h1>
    <?php
        echo "<h2>Calling Functions</h2>";
        function displayCompanyName($CompanyName) {
            echo "<p>$CompanyName</p>";
        }
        displayCompanyName("Course Technology");
        echo "<h2>Returning Values</h2>";
        function averageNumbers($a, $b, $c) {
            $SumOfNumbers = $a + $b + $c;
            $Result = $SumOfNumbers / 3;
            return $Result;
        }
        echo "<h2>The global Keyword</h2>";
        $GlobalVariable = "Global variable";
        function scopeExample() {
            global $GlobalVariable;
            echo "<p>$GlobalVariable</p>";
        }
        scopeExample();
        echo "<h2>if Statements</h2>";
        $ExampleVar = 5;
        if ($ExampleVar == 5) {
            echo " <p>The condition evaluates to true.</p> ";
            echo '<p>$ExampleVar is equal to ', " $ExampleVar.</p> ";
            echo " <p>Each of these lines will be printed.</p> ";
        }
        echo " <p>This statement always executes after the if statement.</p> ";
        echo "<h2>if...else Statements</h2>";
        $Today = " Tuesday ";
        if ($Today == " Monday ")
        echo " <p>Today is Monday</p> ";
        else
        echo " <p>Today is not Monday</p> ";
        echo "<h2>Nested if and if...else Statements</h2>";
        $SalesTotal = 57;
        if ($SalesTotal >= 50)
            if ($SalesTotal <= 100)
                echo " <p>The sales total is between 50 and 100, inclusive.</p> ";
                echo "<h1>While Statements</h1>";
        $Count = 1;
        while ($Count <= 5) {
            echo " $Count<br /> ";
            ++$Count;
        }
        echo " <p>You have printed 5 numbers.</p> ";
        echo "<h2>do...while Statements</h2>";
        $Count = 2;
        do {
            echo " <p>The count is equal to $Count</p> ";
            ++$Count;
        } while ($Count < 2);
        echo "<h2>for Statements</h2>";
        $FastFoods = array(" pizza", " burgers ", " french fries ", "tacos ", " fried chicken ");
        for ($Count = 0; $Count < 5; ++$Count) {
            echo $FastFoods[$Count], " <br /> ";
        }
        echo "<h2>foreach Statements</h2>";
        $DaysOfWeek = array("Monday", "Tuesday", "Wednesday", "Thursday",
        "Friday", "Saturday", "Sunday");
        foreach ($DaysOfWeek as $Day) {
            echo "<p>$Day</p>";
        }
        $DaysofWeek = array("Monday", "Tuesday", "Wednesday", "Thursday",
        "Friday", "Saturday", "Sunday");
        foreach ($DaysOfWeek as $DayNumber => $Day) {
            echo "<p>Day $DayNumber is $Day</p>";
        }

    ?>
    </div>
    <?php include 'links/footer.php' ?>
</body>
</html>
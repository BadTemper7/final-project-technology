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
        <h1 class="text-center text-primary">Multiple Script Sections</h1>
        <h2>First Script Section</h2>
        <?php echo "<p>Output from the first script section.</p>";?>
        <h2>Second Script Section</h2>
        <?php echo "<p>Output from the second script
        section.</p>";?>
        <?php
        /*
        This line is part of the block comment.
        This line is also part of the block comment.
        */
        echo "<h1>Comments Example</h1>"; // Line comments can follow code statements
        // This line comment takes up an entire line.
        # This is another way of creating a line comment.
        /* This is another way of creating
        a block comment. */
        echo "<h2>Modifying Variables</h2>";
        $SalesTotal = 40;
        echo "<p>Your sales total is $$SalesTotal</p>";
        $SalesTotal = 50;
        echo "<p>Your new sales total is $$SalesTotal</p>";
        echo "<h2>Accessing Element Information</h2>";
        $Provinces = array(
            "Newfoundland and Labrador",
            "Prince Edward Island",
            "Nova Scotia",
            "New Brunswick",
            "Quebec",
            "Ontario",
            "Manitoba",
            "Saskatchewan",
            "Alberta",
            "British Columbia"
        );
        echo "<p>Canada's smallest province is $Provinces[1].<br />";
        echo "Canada's largest province is $Provinces[4].</p>";
        echo "<h2>Using count() function</h2>";
        $Provinces = array("Newfoundland and Labrador", "Prince Edward Island",
        "Nova Scotia", "New Brunswick", "Quebec", "Ontario", " Manitoba", "Saskatchewan", "Alberta", "British Columbia");
        $Territories = array("Nunavut", "Northwest Territories", "Yukon
                                Territory");
        echo "<p>Canada has ", count($Provinces), " provinces and ", count($Territories), " territories.</p>";
        echo "<h2>Modifying Elements</h2>";
        $HospitalDepts = array(
        "Anesthesia", // first element(0)
        "Molecular Biology", // second element (1)
        "Neurology"); // third element (2)
        $HospitalDepts[0] = "Anesthesiology";
        echo $HospitalDepts[0];
        echo "<h2>Arithmetic Operators</h2>";
        $DivisionResult = 15 / 6;
        $ModulusResult = 15 % 6;
        echo "<p>15 divided by 6 is $DivisionResult.</p>"; //prints '2.5'
        echo "The whole number 6 goes into 15 twice, with a
        remainder of $ModulusResult.</p>"; // prints '3'
        echo "<h2>Assignment Operators</h2>";
        $MyFavoriteSuperHero = "Superman";
        $MyFavoriteSuperHero = "Batman";
        echo"<p>$MyFavoriteSuperHero</p>";
        echo "<h2>Conditional Operator</h2>";
        $BlackjackPlayer1 = 20;
        ($BlackjackPlayer1 <= 21) ? $Result =
        "Player 1 is still in the game. " : $Result =
        "Player 1 is out of the action.";
        echo "<p>", $Result, "</p>";
        ?>
    </div>
    <?php include 'links/footer.php' ?>
</body>
</html>
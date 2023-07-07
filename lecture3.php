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
            Manipulating Strings
        </h1>
    <?php
        echo "<h2>Constructing Text Strings</h2>";
        echo "<PHP literal text string</p>";
        $StringVariable = "<p>PHP literal text string</p>";
        echo $StringVariable;
        $LatinQuote = '<p>"Et tu, Brute!"</p>';
        echo $LatinQuote;
        echo "<h2 class=\"text-center text-primary\">Working with String Operators</h2>";
        echo "<h2>Concatenation operator</h2>";
        $City = "Paris";
        $Country = "France";
        $Destination = "<p>" . $City . " is in "
        . $Country . ".</p>";
        echo $Destination;
        echo "<h2>concatenation assignment operator</h2>";
        $Destination = "<p>Paris";
        $Destination .= "is in France.</p>";
        echo $Destination;
        echo "<h1 class=\"text-center text-primary\">Simple and Complex String Syntax</h1>";
        echo "<h2>Simple string syntax</h2>";
        $Vegetable = "broccoli";
        echo "<p>Do you have any $Vegetable?</p>";
        echo "<h2>complex string syntax</h2>";
        $Vegetable = "carrot";
        echo "<p>Do you have any {$Vegetable}s?</p>";
        echo "<h1 class=\"text-center text-primary\">Counting Characters and Words in a String</h1>";
        echo "<h2>strlen()</h2>";
        $BookTitle = "The Cask of Amontillado";
        echo "<p>The book title contains " .
        strlen($BookTitle) . " characters.</p>";
        echo "<h2>str_word_count()</h2>";
        $BookTitle = "The Cask of Amontillado";
        echo "<p>The book title contains " .
        str_word_count($BookTitle). " words.</p>";
        echo "<h2>substr()</h2>";
        $ExampleString = "woodworking project";
        echo substr($ExampleString,4) . "<br />\n";
        echo substr($ExampleString,4,7) . "<br />\n";
        echo substr($ExampleString,0,8) . "<br />\n";
        echo substr($ExampleString,-7) . "<br />\n";
        echo substr($ExampleString,-12,4) . "<br />\n";
        echo "<h2>Replacing Characters and Substrings</h2>";
        $Email = "president@whitehouse.gov";
        $NewEmail = str_replace("president", "vice.president", $Email);
        echo $NewEmail; // prints 'vice.president@whitehouse.gov'
        echo "<h2>strtok()</h2>";
        $Presidents = " George Washington;John Thomas Jefferson;James Madison;James Monroe";
        $President = strtok($Presidents, ";");
        while ($President != NULL) {
            echo "$President<br />";
            $President = strtok(";");
        }
        $Presidents = " George Washington;John Adams;Thomas Jefferson;James Madison;James Monroe";
        $President = strtok($Presidents, "; ");
        while ($President != NULL) {
            echo "$President<br />";
            $President = strtok("; ");
        }
        echo "<h2>Converting between Strings and Arrays</h2>";
        $Presidents = "George Washington;JohnAdams; Thomas Jefferson;James Madison;James Monroe";
        $PresidentArray = explode(";", $Presidents);
        foreach ($PresidentArray as $President) {
            echo "$President<br />";
        }
        $PresidentsArray = array("George Washington", "John Adams", "Thomas Jefferson", "James Madison", "James Monroe");
        $Presidents = implode(", ", $PresidentsArray);
        echo $Presidents;
        echo "<h2>Comparing Strings</h2>";
        $FirstLetter = "A";
        $SecondLetter = "B";
        if ($SecondLetter > $FirstLetter)
        echo "<p>The second letter is higher in the alphabet
        than the first letter.</p>";
        else
        echo "<p>The second letter is lower in the alphabet than
        The first letter.</p>";
        echo "<h2>Determining the Similarity of Two Strings</h2>";
        $FirstName = "Don";
        $SecondName = "Dan";
        echo "<p>The names \"$FirstName\“ and \"$SecondName\“ have “ .
        similar_text($FirstName, $SecondName) . “ characters in
        common.</p>";
        echo "<p>You must change “ . levenshtein($FirstName, $SecondName)
        . “ character(s) to make the names \"$FirstName\“ and
        \"$SecondName\“ the same.</p>";
        echo "<h2>Determining if Words are Pronounced Similarly</h2>";
        $FirstName = "Gosselin";
        $SecondName = "Gauselin";
        $FirstNameSoundsLike = metaphone($FirstName);
        $SecondNameSoundsLike = metaphone($SecondName);
        if ($FirstNameSoundsLike == $SecondNameSoundsLike)
        echo "<p>The names are pronounced the same.</p>";
        else
        echo "<p>The names are not pronounced the same.</p>";
        echo "<h2>Matching Any Character</h2>";
        $ZIP = "015";
        echo preg_match("/...../", $ZIP) ."<br>"; // returns 0
        $ZIP = "01562";
        echo preg_match("/...../", $ZIP) ."<br>"; // returns 1
        echo "<h2>Matching Characters at the Beginning or End of a String</h2>";
        $URL = "http://www.dongosselin.com";
        echo preg_match("/^http/", $URL) ."<br>"; // returns 1
        $URL = "http://www.dongosselin.com";
        echo preg_match("/^http/", $URL) ."<br>"; // returns 1;
        $Identifier = "http://www.dongosselin.com";
        echo preg_match("/com$/", $Identifier) ."<br>"; // returns 1
        echo "<h2>Matching Special Characters</h2>";
        $Identifier = "http://www.dongosselin.com";
        echo preg_match("/gov$/", $Identifier) ."<br>";//returns 0
        echo "<h2>Specifying Quantity</h2>";
        $URL = "http://www.dongosselin.com";
        echo preg_match("/^https?/", $URL) ."<br>"; // returns 1
        $Name = "Don";
        echo preg_match("/.+/", $Name) ."<br>"; // returns 1
        $NumberString = "00125";
        echo preg_match("/^0*/", $NumberString) ."<br>";//returns 1
        echo preg_match("/ZIP: .{5}$/", " ZIP: 01562") ."<br>"; // returns 1
        echo preg_match("/(ZIP: .{5,10})$/", "ZIP: 01562-2607") ."<br>";// returns 1
        echo "<h2>Defining Character Classes</h2>";
        echo preg_match("/analy[sz]e/", "analyse") ."<br>";//returns 1
        echo preg_match("/analy[sz]e/", "analyze") ."<br>";//returns 1
        echo preg_match("/analy[sz]e/", "analyce") ."<br>";//returns 0
        $LetterGrade = "B";
        echo preg_match("/[A-DF]/", $LetterGrade) ."<br>"; // returns true
        $LetterGrade = "A";
        echo preg_match("/[^EG-Z]/", $LetterGrade) ."<br>"; // returns true
    ?>
    </div>
    <?php include 'links/footer.php' ?>
</body>
</html>
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
            <td>Chapters 1 - 4</td>
        </tr>
        <tr>
            <th>Activity No.</th>
            <td>Midterm Examination</td>
            <th>Date</th>
            <td>06/30/2023</td> 
        </tr>
    </table>
    <div class="container">
        <?php
            $input = "name000";
            $valid = true;
            $err_message = "";
            $letter_count = 0;
            $num_count = 0;
            $input_arr = str_split($input);
            if(strlen($input) > 12 || strlen($input) == 0){
                $err_message .= "<p>MUST HAVE A MAXIMUM OF 12 CHARACTERS.</p>";
                $valid = false;
            }
            for($i = 0; $i < strlen($input); $i++){
                if(is_numeric($input_arr[$i]))
                    $num_count++;
                else if(preg_match("/[A-Za-z]/", $input_arr[$i]))
                    $letter_count++;
                else{
                    $valid = false;
                    $err_message .= "<p>The password must contain ALPHA AND NUMERIC characters only.</p>";
                    break;
                }
            }
            if($valid){
                echo "<p>INPUT:\t$input</p>";
                echo "<p>OUTPUT:\t$letter_count letter/s and $num_count number/s</p>";
            }
            else
                echo "<div>$err_message</div>";
                $number = 5000;
            if (preg_match("/[0-9]/", $number)){
            if(strlen($number)){
                echo "<p>Value:\t$number</p>";
                echo "<p>Output:\tThe Place Value is ";
                if(strlen($number) == 1)
                echo "One.</p>";
                else if(strlen($number) == 1)
                echo "One.</p>";
                else if(strlen($number) == 2)
                echo "Ten.</p>";
                else if(strlen($number) == 3)
                echo "Hundred.</p>";
                else if(strlen($number) == 4)
                echo "One Thousand.</p>";
                else if(strlen($number) == 5)
                echo "Ten Thousand.</p>";
                else if(strlen($number) == 6)
                echo "Hundred Thousand.</p>";
                else if(strlen($number) == 7)
                echo "Millions.</p>";
            }
            else{
                echo "The number must have a maximum of 7 characters";
            }
            }
        ?>
    </div>
    
    <?php include 'links/footer.php' ?>
</body>
</html>
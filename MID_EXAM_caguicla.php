<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm Examination</title>
    <?php include 'links/head.php' ?>
</head>
<body>
  <?php include 'header.php' ?>
  <div class="container">
    <table class="table">
          <tr>
              <th>Name:</th>
              <td>CAGUICLA, ASHLEY DIANE, M.</td>
              <th>Topics</th>
              <td>Chapters 1 - 4</td>
          </tr>
          <tr>
              <th>EXAM</th>
              <td>Midterm Examination</td>
              <th>Date</th>
              <td>06/30/2023</td>
          </tr>
      </table>
      <?php
        $alpha_numeric = "asdfjh12123";
        $alpha_numeric_arr = str_split($alpha_numeric);
        $letter_count = 0;
        $number_count = 0;
        $check = true;
        for($i = 0; $i < strlen($alpha_numeric);$i++){
          if(preg_match("/[A-Za-z]/", $alpha_numeric_arr[$i])){
            $letter_count++;
          }
          else if (preg_match("/[0-9]/", $alpha_numeric_arr[$i])){
            $number_count++;
          }
          else{
            $check = false;
            break;
          }
        }
        if($check){
          if(strlen($alpha_numeric) <= 12){
            echo "Value:\t$alpha_numeric<br>";
            echo "Output:\tThere are $letter_count letters and  $number_count.";
          }
          else{
            echo "The input should be 12 characters long.";
          }
        }
        else{
          echo "The input must contain only numbers and letters";
        }
        $number = 5000;
        if (preg_match("/[0-9]/", $number)){
          if(strlen($number)){
            echo "<br>Value:\t$number<br>";
            echo "Output:\tThe Place Value is ";
            if(strlen($number) == 1)
              echo "One.";
            else if(strlen($number) == 1)
              echo "One.";
            else if(strlen($number) == 2)
              echo "Ten.";
            else if(strlen($number) == 3)
              echo "Hundred.";
            else if(strlen($number) == 4)
              echo "One Thousand.";
            else if(strlen($number) == 5)
              echo "Ten Thousand.";
            else if(strlen($number) == 6)
              echo "Hundred Thousand.";
            else if(strlen($number) == 7)
              echo "Millions.";
          }
          else{
            echo "The number must have a maximum of 7 characters";
          }
        }
        else{
          
        }
      ?>
  </div>
    
<?php include 'links/footer.php' ?>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links/head.php' ?>
    <style>
        form{ 
            position: absolute;
            color: white;
            margin: 0 auto;
            padding: 20px;
            font-size: 30px;
            margin-top:110px;
        }
        input[type="submit"]{
            padding: 10px 20px;
            background-color: #182747;
            color: #fff;
            border: none;
            margin-left: 20px;
            cursor: pointer;
        }
        body{
            background-color:#4B56D2;
        }
    </style>
</head>
<body>
<?php include 'header.php' ?>
<div class="container">
<table class="table text-light">
        <tr>
            <th>Name:</th>
            <td>CAGUICLA, ASHLEY DIANE, M.</td>
            <th>Topic</th>
            <td>Chapter 4 Handling User Input</td>
        </tr>
        <tr>
            <th>Activity No.</th>
            <td>Activity 1</td>
            <th>Date</th>
            <td>07/05/2023</td>
        </tr>
    </table>
    <form class="container" action="FinActivity1_caguicla.php" method="post">
        <label for="phone">Phone Number</label>
        <input type="text" name="phone" id="phone"><br><br>
        <label for="username">UserName</label>
        <input type="text" name="username" id="username"><br><br>
        <label for="password">Password</label>
        <input type="text" name="password" id="password"><br><br> 
        <input type="submit"><br><br> 
    <?php
        $valid = false;
        $network = "";
        if(strlen($_POST['phone']) > 0){
            $phone = $_POST['phone'];
            $phone_code = "+63" . substr($phone, 1, 11);
            if(strlen($phone)==11 && (preg_match("/^09/", $phone) || preg_match("/^08/", $phone)) && is_numeric($phone))
                $valid = true;
            if($valid){
                echo "$phone_code<br><br>";
                if(preg_match("/^08/", $phone)){
                    if(preg_match("/[17]/", substr($phone,2,2)))
                        $network = "Globe";
                    else if (preg_match("/[95-98]/", substr($phone,2,2)))
                        $network = "DITO";
                }
                else if(preg_match("/^09/", $phone)){
                    if(preg_match("/[5-6]/", substr($phone,2,2)))
                        $network = "GLOBE/TM";
                    else if(preg_match("/[7]/", substr($phone,2,2)))
                        $network = "TNT";
                    else if(preg_match("/[8]/", substr($phone,2,2)))
                        $network = "Smart";
                    else if(preg_match("/[9-12]/", substr($phone,2,2)))
                        $network = "TNT";
                    else if(preg_match("/[15-17]/", substr($phone,2,2)))
                        $network = "GLOBE/TM";
                    else if(preg_match("/[18-21]/", substr($phone,2,2)))
                        $network = "Smart";
                    else if(preg_match("/[22-25]/", substr($phone,2,2)))
                        $network = "Sun";
                    else if(preg_match("/[26-27]/", substr($phone,2,2)))
                        $network = "GLOBE/TM";
                    else if(preg_match("/[28-29]/", substr($phone,2,2)))
                        $network = "Smart";
                    else if(preg_match("/[30]/", substr($phone,2,2)))
                        $network = "TNT";
                    else if(preg_match("/[31-34]/", substr($phone,2,2)))
                        $network = "Sun";
                    else if(preg_match("/[35-37]/", substr($phone,2,2)))
                        $network = "Smart";
                    else if(preg_match("/[38]/", substr($phone,2,2)))
                        $network = "Sun";
                    else if(preg_match("/[39]/", substr($phone,2,2)))
                        $network = "Smart";
                    else if(preg_match("/[40-43]/", substr($phone,2,2)))
                        $network = "Sun";
                    else if(preg_match("/[45]/", substr($phone,2,2)))
                        $network = "GLOBE/TM";
                    else if(preg_match("/[46]/", substr($phone,2,2)))
                        $network = "TNT";
                    else if(preg_match("/[47]/", substr($phone,2,2)))
                        $network = "Smart";
                    else if(preg_match("/48]/", substr($phone,2,2)))
                        $network = "TNT";
                    else if(preg_match("/[49]/", substr($phone,2,2)))
                        $network = "Smart";
                    else if(preg_match("/[50]/", substr($phone,2,2)))
                        $network = "TNT";
                    else if(preg_match("/[51]/", substr($phone,2,2)))
                        $network = "Smart";
                    else if(preg_match("/[53-56]/", substr($phone,2,2)))
                        $network = "GLOBE/TM";
                    else if(preg_match("/[61]/", substr($phone,2,2)))
                        $network = "Smart";
                    else if(preg_match("/[65-67]/", substr($phone,2,2)))
                        $network = "GLOBE/TM";
                    else if(preg_match("/[73-74]/", substr($phone,2,2)))
                        $network = "Sun";
                    else if(preg_match("/[75]/", substr($phone,2,2)))
                        $network = "GLOBE/TM";
                    else if(preg_match("/[76]/", substr($phone,2,2)))
                        $network = "GLOBE/GOMO";
                    else if(preg_match("/[77-79]/", substr($phone,2,2)))
                        $network = "GLOBE/TM";
                    else if(preg_match("/[91-94]/", substr($phone,2,2)))
                        $network = "DITO";
                    else if(preg_match("/[95-97]/", substr($phone,2,2)))
                        $network = "GLOBE/TM";
                    else if(preg_match("/[98-99]/", substr($phone,2,2)))
                        $network = "Smart";
                    else if(preg_match("/173]/", substr($phone,2,3)) ||
                    preg_match("/175-176]/", substr($phone,2,3)) ||
                    preg_match("/178]/", substr($phone,2,3)) ||
                    preg_match("/253]/", substr($phone,2,3)) ||
                    preg_match("/255-258]/", substr($phone,2,3)))
                        $network = "Globe Postpaid";
                }
                echo "<h4>$phone_code is a $network network</h4>";
            }
            else{
                echo "<p>It must be 11 numbers.</p>";
                echo "<p>It must be numeric characters only.</p>";
                echo "<p>It must starts with 08 or 09.</p>";
            }
            }
    ?>
    <?php
    if(strlen($_POST['password']) > 0 && strlen($_POST['username']) > 0 ){  
        $password = $_POST['password'];
        $username = $_POST['username'];
        $valid_pass = true;
        if(strlen($password) > 8 || str_word_count($password) > 1){
            echo "The password must be one word with 8 characters.<br>";
            $valid_pass = false;
        }
        $pass_arr = str_split($password);
        $uppercase_count = 0;
        for($i = 0; $i < strlen($password); $i++){
            if((preg_match("/[a-z]/", $pass_arr[$i]))
            || preg_match("/[A-Z]/", $pass_arr[$i])){
                if(preg_match("/[A-Z]/", $pass_arr[$i]))
                    $uppercase_count++;
                if($valid_pass)
                    $valid_pass = true;
            }
            else if(is_numeric($pass_arr[$i])){
                $valid_pass = true;
            }
            else{
                $valid_pass = false;
                echo "The password must contain alpha AND NUMERIC characters only.<br>";
                break;
            }
        }
        if($uppercase_count > 0 && $uppercase_count <= 2){
            if($valid_pass)
                $valid_pass = true;
        }
        else{
            $valid_pass = false;
            echo "Must contain an uppercase letter/s.(MAX 2 capital letters)<br>";
        }
        if($password == $username){
            $valid_pass = false;
            echo "MUST NOT BE SIMILAR TO THE USERNAME.<br>";
        }
        else{
            if($valid_pass)
                $valid_pass = true;
        }
        if($valid_pass){
            echo "The password is valid<br>";
        }
        else{
            echo "The password is invalid<br>";
        }
        echo "Password: $password";
    }
    ?>
    </form>
</div>
<?php include 'links/footer.php' ?>
</body>
</html>
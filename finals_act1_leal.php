<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links/head.php' ?>
</head>
<body>
    <?php include 'header.php' ?>
    <form class="container" action="finals_act1_leal.php" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="container">
    <?php
        if(strlen($_POST['password']) > 0 && strlen($_POST['username'])){ 
            
            $password = $_POST['password'];
            $username = $_POST['username'];
            $valid = true;
            $err_message = "";
            $num_count = 0;
            $max_letter = 0;
            if(strlen($password)>8){
                $valid = false;
                $err_message .= "<p>The password must be one word with 8 characters.</p>";
            }
            $pass_arr = str_split($password);
            for($i = 0; $i < strlen($password); $i++){
                if(is_numeric($pass_arr[$i]) || preg_match("/[A-Za-z]/", $pass_arr[$i])){
                    if(is_numeric($pass_arr[$i]))
                        $num_count++;
                    else if(preg_match("/[A-Z]/", $pass_arr[$i]))
                        $max_letter++;
                }
                else{
                    $valid = false;
                    $err_message .= "<p>The password must contain alpha AND NUMERIC characters only.</p>";
                    break;
                }
            }
            if($num_count == 0){
                $err_message .= "<p>The password must contain 1 or more number.</p>";
                $valid = false;
            }
            
            if($max_letter > 2 || $max_letter == 0){
                $err_message .= "<p>Must contain an uppercase letter/s.(MAX 2 capital letters)</p>";
                $valid = false;
            }
                
            if($password == $username){
                $err_message .= "<p>MUST NOT BE SIMILAR TO THE USERNAME.</p>";
                $valid = false;
            }
            echo "<p>$password</p>";
            if($valid){
                echo "<p class=text-success>The password is valid.</p>";
            }
            else{
                echo "<div class=text-danger>$err_message</div>";
            }
        }
    ?>
    </div>
    
    <?php include 'links/footer.php' ?>
</body>
</html>
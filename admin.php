<?php
session_start();
require_once 'database/data.php';
$default_aun = 'Admin';
$default_apw = '123';

try {
    if (isset($_POST["login"])) {
        if (empty($_POST["uname"]) || empty($_POST["pword"])) {
            $message = '<label>All Fields are required</label>';
        } else {
            $pdoQuery = "SELECT * FROM adminn WHERE uname = :uname AND pword = :pword";
            $pdoResult = $pdo->prepare($pdoQuery);
            $pdoResult->execute(
               array(
                    'uname' => $_POST["uname"],
                    'pword' => $_POST["pword"]
                )
           );
            $count = $pdoResult->rowCount();

            if ($count > 0) {
                $_SESSION["uname"] = $_POST["uname"];
                header("location: ahome.php");
            } elseif ($_POST["uname"] === $default_aun && $_POST["pword"] === $default_apw) {
             // Match the default account
                $_SESSION["uname"] = $default_aun;
                header("location: ahome.php");
            } else {
                $message = '<label>Wrong Data</label>';
            }
        }
    }
} catch (PDOException $error) {
    $message = $error->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Login</title>
    <link rel="stylesheet" href="assets/loginn.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
  
</head>
<body>
    <div class="context">
        <img src="assets/img/prison.png" alt="">
        <div class="form_hold">
        
        <h1> <i class='far fa-user'style='font-size:60px;'></i> 
        <br> LOGIN</h1>
        <form method="POST">
            <div class="uhold">
            <label for="username">
                <i class='fas fa-user-alt' ></i>
            </label>
            <input type="text" name="uname" id="username">
            </div>
            <br>
            <div class="phold">
            <label for="password">
                <i class='fas fa-lock'></i>
             </label>
            <input type="password" name="pword" id="password">
            </div>
            <br>
            <div class="sbtn">
                <input type="submit" name="login" value="LOGIN">
            </div>
            
          </form>
         </div>
    </div>
    
</body>
</html>
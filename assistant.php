
<?php
session_start();
require_once 'data.php';
try{
   if(isset($_POST["login"])){
       if(empty($_POST["cun"]) || empty($_POST["cpw"])){
      $message = '<label> All Fields are required </label>';
}else{
     $pdoQuery = "SELECT * FROM cdb WHERE cun = :cun AND cpw = :cpw";
    $pdoResult = $pdo->prepare($pdoQuery);
    $pdoResult->execute(
             array(
                    'cun'   => $_POST["cun"],
                    'cpw'    => $_POST["cpw"]
        )
);
$count = $pdoResult-> rowCount();
if($count > 0){
     $_SESSION["cun"] = $_POST["cun"];
     header("location:chome.php");
}else{
                 $message = '<label>Wrong Data</label>';
               }
          }
      }
}
catch(PDOException $error)
{
     $message = $error ->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="Design/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
  
</head>
<body>
    <div class="context">
        <img src="Design\prison.png" alt="">
        <div class="form_hold">
        
        <h1> <i class='far fa-user'style='font-size:60px;'></i> 
        <br> LOGIN</h1>
        <form method="POST">
            <div class="uhold">
            <label for="username">
                <i class='fas fa-user-alt' ></i>
            </label>
            <input type="text" name="cun" id="username">
            </div>
            <br>
            <div class="phold">
            <label for="password">
                <i class='fas fa-lock'></i>
             </label>
            <input type="password" name="cpw" id="password">
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
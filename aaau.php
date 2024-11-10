<?php
    session_start();
    include ('data.php');
    if(isset($_SESSION['aun'])){
        //echo '<script>alert("Welcome Admin!!!")</script>'; 
    }else{
        header("location: admin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Design/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
  
</head>
<body>
    <aside class="navbar">
        <header class="logo_hold">
            <a href="ahome.php">
                <img src="Design/logo.png">
                <h1>Bilang-Go</h1>
            </a>

        </header>
        <br>
        <a href="ahome.php"><button>Dashboard</button></a>
        <a href="aihome.php"><button>Inmate List</button></a>
        <a href="avhome.php"><button>Visitior List</button></a>
        <a href="acbhome.php"><button>Cell List</button></a>
        <a href="apbhome.php"><button>Prison List</button></a>
        <a href="aalhome.php"><button>Account List</button></a>

    </aside>
    <header class="navigation">
    <div class="head1">
                <a href="ahome.php"><i class="fa fa-home"></i></a>
                <label> Prison Management System </label>
            </div>
        <div class="adl">
        <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">
                    <i class='fas fa-user-circle' style='font-size:30px'></i>
                   Admin Admin
                </button>
                    <div id="myDropdown" class="dropdown-content">
                    <a href="avdetails.php"><i class='fas fa-user-alt'></i></a>
                        <a href="areport.php"><i class='fas fa-clipboard'></i></a>
                        <a href="alogout.php"><i class='fas fa-sign-out-alt'></i></a>
                    </div>
                </div>

            <script>
                function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
                }
                window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                    }
                }
                }
            </script>
        </div>

    </header>
    <main class="output">
    <?php
                     if(isset($_GET['id'])){
                        $uidd = $_GET['id'];

                        $query = "SELECT * FROM udb WHERE uidd=:id LIMIT 1";
                        $statement = $pdo->prepare($query);
                        $data = [':id' => $uidd];
                        $statement->execute($data);

                        $result = $statement->fetch(PDO::FETCH_OBJ); //ASSOC


                     }
                     ?>
                     <form action="cud.php" method="POST" class="form-container">
                                <br>
                                <h1>edit</h1>
                                <br>
                                <input type="hidden" name="uidd" value="<?= $result->uidd;?>">
                            <div class="name_hold">
                            <label for="uln">Last Name:</label>
                            <input type="text" name="uln" value="<?= $result->uln;?>">
                            </div>
                            <div class="name_hold">
                            <label for="ufn"> First Name:</label>
                            <input type="text" name="ufn" value="<?= $result->ufn;?>">
                            </div>              
                            <div class="name_hold">
                            <label for="umn">Middle Name:</label>
                            <input type="text" name="umn" value="<?= $result->umn;?>">
                            </div>
                            <div class="name_hold">
                            <label for="uun">Username:</label>
                            <input type="text" name="uun" value="<?= $result->uun;?>">
                            </div>
                            <div class="name_hold">
                            <label for="upw">Password:</label>
                            <input type="text" name="upw" value="<?= $result->upw;?>">
                            </div>
                            <div class="name_hold">
                            <label for="uem">Email:</label>
                            <input type="text" name="uem" value="<?= $result->uem;?>">
                            </div>
                            <br>
                <button type="submit" class="btn" name="update-user-btn">Save</button>
                <button type="button" class="btn cancel" onclick="closeReg()">Close</button>
            </form>
            </div>
    </main>
    
</body>
</html>
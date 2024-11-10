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
    <link rel="stylesheet" href="Design/aihome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
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

            
        </div>

    </header>
    <main class="output">
    
                <?php
                     if(isset($_GET['id'])){
                        $inid = $_GET['id'];

                        $query = "SELECT * FROM indb WHERE inid=:id LIMIT 1";
                        $statement = $pdo->prepare($query);
                        $data = [':id' => $inid];
                        $statement->execute($data);

                        $result = $statement->fetch(PDO::FETCH_OBJ); //ASSOC


                     }
                     ?>

    <div class="holder">
            <div class="button_hold">
            <h2>Inmate List</h2>    
            <a href="aihome.php"><button class="open-button" >Back</button></a>
            </div>         
            
            
           <form action="cud.php" method="POST" class="form-container">
                                <input type="hidden" name="inid" value="<?= $result->inid;?>">
                            <div class="name_hold">
                            <label for="inln">Last Name:</label>
                            <input type="text" name="inln" value="<?= $result->inln;?>" >
                            </div>
                            <div class="name_hold">
                            <label for="infn"> First Name:</label>
                            <input type="text" name="infn"value="<?= $result->infn;?>" >
                            </div>
                            <div class="name_hold">
                            <label for="inmn">Middle Name:</label>
                            <input type="text" name="inmn" value="<?= $result->inmn;?>" >
                            </div>
                            <div class="name_hold">
                            <label for="inbd">Username:</label>
                            <input type="text" name="inbd" value="<?= $result->inbd;?>" >
                            </div>
                            <div class="name_hold">
                            <label for="ingen">Choose gender:</label>
                            <select name="ingen" id="ingen">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>

                            </select>
                            </div>
                            <div class="name_hold">
                            <label for="insta">Email:</label>
                            <input type="text" name="insta"value="<?= $result->insta;?>" >
                            </div>
                            <div class="name_hold">
                            <label for="inprk">Last Name:</label>
                            <input type="text" name="inprk" value="<?= $result->inprk;?>">
                            </div>
                            <div class="name_hold">
                            <label for="inbr"> First Name:</label>
                            <input type="text" name="inbr"value="<?= $result->inbr;?>" >
                            </div>
                            <div class="name_hold">
                            <label for="inmu">Middle Name:</label>
                            <input type="text" name="inmu" value="<?= $result->inmn;?>">
                            </div>
                            <div class="name_hold">
                            <label for="inpro">Username:</label>
                            <input type="text" name="inpro" value="<?= $result->inpro;?>" >
                            </div>
                            <div class="name_hold">
                            <label for="inco">Password:</label>
                            <input type="text" name="inco" value="<?= $result->inco;?>">
                            </div>
                            <div class="name_hold">
                            <label for="inpc">Email:</label>
                            <input type="text" name="inpc" value="<?= $result->inpc;?>">
                            </div>
                            <div class="name_hold">
                            <label for="inpbcb"> First Name:</label>
                            <input type="text" name="inpbcb" value="<?= $result->inpbcb;?>">
                            </div>
                            <div class="name_hold">
                            <label for="incr">Middle Name:</label>
                            <input type="text" name="incr" value="<?= $result->incr;?>" >
                            </div>
                            <div class="name_hold">
                            <label for="insen">Username:</label>
                            <input type="text" name="insen"value="<?= $result->insen;?>" >
                            </div>
                            <div class="name_hold">
                            <label for="intds">Password:</label>
                            <input type="text" name="intds" value="<?= $result->intds;?>">
                            </div>
                            <div class="name_hold">
                            <label for="intde">Email:</label>
                            <input type="text" name="intde"value="<?= $result->intde;?>" >
                            </div>
                            <br>
                <button type="submit" class="btn" name="update-inmate-btn">Save</button>
                <button type="button" class="btn cancel" onclick="closeRegg()">Close</button>
            </form>

        </div>
       
    </main>
    
</body>
</html>
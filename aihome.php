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

<script>
            function openRegg() {
            document.getElementById("regFormm").style.display = "block";
            }

            function closeRegg() {
            document.getElementById("regFormm").style.display = "none";
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
    <div class="holder">
            <div class="button_hold">
            <h2>Inmate List</h2>    
            <a href="aic.php"><button class="open-button" >Create New</button></a>
            </div>         
            
            <div class="s_hold">
                <form action="ais.php" method="get">
                <input type="text" name="search_term" id="search_term" placeholder="Search" required>
                <button type="submit" value="Search" id="sbtn"><i class="fas fa-search"></i></button>   
                </form>
            </div>

            <button class="open-button" onclick="openRegg()">Open Form</button>
                       <div class="form-popup" id="regFormm">
                            
                <form action="cud.php" method="POST" class="form-container">                                
                                <div class="name_hold">
                                <label for="inln">Last Name:</label>
                                <input type="text" name="inln" id="m">
                                </div>
                                <div class="name_hold">
                                <label for="infn"> First Name:</label>
                                <input type="text" name="infn" id="m">
                                </div>
                                <div class="name_hold">
                                <label for="inmn">Middle Name:</label>
                                <input type="text" name="inmn" id="m">
                                </div>
                                <div class="name_hold">
                                <label for="inbd">Username:</label>
                                <input type="text" name="inbd" id="m">
                                </div>
                                <div class="name_hold">
                                <label for="cars">Choose a car:</label>
    
                                <select name="ingen" id="cars">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                
                                </select>
                                </div>
                                <div class="name_hold">
                                <label for="insta">Email:</label>
                                <input type="text" name="insta" id="m">
                                </div>
                                <div class="name_hold">
                                <label for="inprk">Last Name:</label>
                                <input type="text" name="inprk" id="m">
                                </div>
                                <div class="name_hold">
                                <label for="inbr"> First Name:</label>
                                <input type="text" name="inbr" id="m">
                                </div>
                                <div class="name_hold">
                                <label for="inmu">Middle Name:</label>
                                <input type="text" name="inmu" id="m">
                                </div>
                                <div class="name_hold">
                                <label for="inpro">Username:</label>
                                <input type="text" name="inpro" id="m">
                                </div>
                                <div class="name_hold">
                                <label for="inco">Password:</label>
                                <input type="text" name="inco" id="m">
                                </div>
                                <div class="name_hold">
                                <label for="inpc">Email:</label>
                                <input type="text" name="inpc" id="m">
                                </div>
                                <div class="name_hold">
                                <label for="inpbcb"> First Name:</label>
                                <input type="text" name="inpbcb" id="m">
                                </div>
                                <div class="name_hold">
                                <label for="incr">Middle Name:</label>
                                <input type="text" name="incr" id="m">
                                </div>
                                <div class="name_hold">
                                <label for="insen">Username:</label>
                                <input type="text" name="insen" id="m">
                                </div>
                                <div class="name_hold">
                                <label for="intds">Password:</label>
                                <input type="text" name="intds" id="m">
                                </div>
                                <div class="name_hold">
                                <label for="intde">Email:</label>
                                <input type="text" name="intde" id="m">
                                </div>
                                <br>
                    <button type="submit" class="btn" name="save-inmate-btn">Save</button>
                    <button type="button" class="btn cancel" onclick="closeRegg()">Close</button>
                </form>
            </div>
            <table class="prison_table">
                         <thead>
                            <tr>
                                <th>Prison Code</th>
                                <th>Full Name</th>
                                <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                            <?php

                            $query = "SELECT * FROM indb";
                            $statement = $pdo->prepare($query);
                            $statement->execute();
                            $result = $statement->fetchAll(PDO::FETCH_OBJ);
                            if($result){
                                foreach($result as $row ){
                                ?>
                            <tr>
                                <td><?= $row->inpc;?></td>
                               <td><?= $row->inln, ',',$row->infn, $row->inmn;?></td>
                                <td>
                                   <!-- <button class="open-button" onclick="openUpdate()"> </button>-->
                                    <a href="aiv.php?id=<?=$row->inid; ?>"><i class='fas fa-edit'></i></a>
                                    <form action="cud.php" method="POST">
                                        <button type="submit" name="delete-inmate-btn" value="<?=$row->inid; ?>"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                                    <?php
                                }
                            }else{
                                ?><?php                
                            } 
                            ?>
                         </tbody>
                    </table>

        </div>

    </main>
    
</body>
</html>
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
    <title>ADMIN</title>
    <link rel="stylesheet" href="Design/navbar.css">
    <link rel="stylesheet" href="Design/apbhome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script>
        function openReg() {
        document.getElementById("regForm").style.display = "block";
        }
        function closeReg() {
        document.getElementById("regForm").style.display = "none";
        }
    </script>
     
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
        <div class="holder">
            <div class="button_hold">
            <h2>Prison List</h2>    
            
            
            <button class="open-button" onclick="openReg()">Create New</button>
            </div>         
            <div class="form-popup" id="regForm">
                
                <form action="cud.php" method="POST" class="form-container">
                         <br>
                                <h1>Create Prison Block</h1>
                                <br>
                        <div class="prison_name">
                            <label for="pbnm">Prison Name:</label>
                            <select name="pbnm" id="m">
                                <option value="">=== Select ===</option>
                                <option value="Male Prison" name="pbnm">Male Prison</option>
                                <option value="Female Prison" name="pbsta">Female Prison</option>
                            </select>
                        </div>
                        <div class="prison_status">
                            <label for="pbsta">Status</label>
                            <select name="pbsta" id="m">
                                <option value="">=== Select ===</option>
                                <option value="Active" name="pbsta">Active</option>
                                <option value="Inactive" name="pbsta">Inactive</option>
                            </select>
                        </div>
                            <br><br>
                    <button type="submit" class="btn" name="save-pb-btn">Create</button>
                    <button type="button" class="btn cancel" onclick="closeReg()">Close</button>
                </form>
            </div>
            <div class="s_hold">
                <form action="apbs.php" method="get">
                <input type="text" name="search_term" id="search_term" placeholder="Search" required>
                <button type="submit" value="Search" id="sbtn"><i class="fas fa-search"></i></button>   
                </form>
            </div>
            <table class="prison_table">
                         <thead>
                            <tr>
                                <th>Prison Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                            <?php

                            $query = "SELECT * FROM pbdb";
                            $statement = $pdo->prepare($query);
                            $statement->execute();
                            $result = $statement->fetchAll(PDO::FETCH_OBJ);
                            if($result){
                                foreach($result as $row ){
                                ?>
                            <tr>
                                <td><?= $row->pbnm;?></td>
                                <td><?= $row->pbsta;?></td>
                                <td>
                                   <!-- <button class="open-button" onclick="openUpdate()"> </button>-->
                                    <a href="apbu.php?id=<?=$row->pbid; ?>"><i class='fas fa-edit'></i></a>
                                    <form action="cud.php" method="POST">
                                        <button type="submit" name="delete-pb-btn" value="<?=$row->pbid; ?>"><i class="fa fa-trash"></i></button>
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
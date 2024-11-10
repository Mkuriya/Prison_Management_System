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
    <link rel="stylesheet" href="Design/avhome.css">
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
    <div class="holder">
            <div class="button_hold">
            <h2>Visitor List</h2>    
            </div>
            <div class="s_hold">
                <form action="avs.php" method="get">
                <input type="text" name="search_term" id="search_term" placeholder="Search" required>
                <button type="submit" value="Search" id="sbtn"><i class="fas fa-search"></i></button>   
                </form>
            </div>
            <table class="prison_table">
                         <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Relationship</th>
                                <th>Prison Code</th>
                                <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                            <?php

                            $query = "SELECT * FROM vbdb";
                            $statement = $pdo->prepare($query);
                            $statement->execute();
                            $result = $statement->fetchAll(PDO::FETCH_OBJ);
                            if($result){
                                foreach($result as $row ){
                                ?>
                            <tr>
                                <td><?= $row->viln, ', ' ,$row->vifn, ', ' ,$row->vimn ;?></td>
                                <td><?= $row->virel;?></td>
                                <td><?= $row->viic;?></td>
                                <td>
                                    <form action="cud.php" method="POST">
                                        <button type="submit" name="delete-avi-btn" value="<?=$row->viid; ?>"><i class="fa fa-trash"></i></button>
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
<?php
    session_start();
    include ('data.php');
    if(isset($_SESSION['cun'])){
         
    }else{
        header("location: assistant.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assistant</title>
    <link rel="stylesheet" href="Design/navbar.css">
    <link rel="stylesheet" href="Design/cihome.css">
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
        function openReg() {
        document.getElementById("regForm").style.display = "block";
        }
        function closeReg() {
        document.getElementById("regForm").style.display = "none";
        }
    </script>
</head>
<body>
    <aside class="navbar">
        <header class="logo_hold">
            <a href="chome.php">
                <img src="Design/logo.png">
                <h1>Bilang-Go</h1>
            </a>

        </header>
        <br>
        <a href="chome.php"><button>
            <i class='fab fa-microsoft'></i> Dashboard</button></a>
        <a href="cihome.php"><button>
            <i class='fas fa-clipboard-list'></i> Inmate List</button></a>
        <a href="cvhome.php"><button>
        <i class='fas fa-id-badge'></i> Visitior List</button></a>

    </aside>
    <header class="navigation">
    <div class="head1">
                <a href="chome.php"><i class="fa fa-home"></i></a>
                <label> Prison Management System </label>
            </div>
        <div class="adl">
        <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">
                    <i class='fas fa-user-circle' style='font-size:30px'></i>
                   Assistant
                </button>
                    <div id="myDropdown" class="dropdown-content">
                    <a href="#"><i class='fas fa-user-alt'></i></a>
                        <a href="alogout.php"><i class='fas fa-sign-out-alt'></i></a>
                    </div>
                </div>

            
        </div>

    </header>
    <main class="output">
        <div class="table_hold">
            <div class="btn_hold">
                <h2>Visitor List</h2>
                <button class="open-button" onclick="openReg()">Create New</button>
                </div>         
                <div class="form-popup" id="regForm">

                    <form action="cud.php" method="POST" class="form-container">
                             <br>
                                    <h1>Visitor Form</h1>
                                    <br>
                            <div class="lastname">
                                <label for="viln">Last Name:</label>
                                <input type="text" name="viln" id="">
                            </div>
                            <div class="firstname">
                                <label for="vifn">First Name:</label>
                                <input type="text" name="vifn" id="">
                            </div>
                            <div class="lastname">
                                <label for="vimn">Middle Name:</label>
                                <input type="text" name="vimn" id="">
                            </div>
                            <div class="lastname">
                                <label for="virel">Relationship:</label>
                                <input type="text" name="virel" id="">
                            </div>
                            <div class="viic">
                                <label for="viic">Prison Code:</label>
                                <input type="text" name="viic" id="">
                            </div>
                            
                                <br><br>
                        <button type="submit" class="btn" name="save-vi-btn">Create</button>
                        <button type="button" class="btn cancel" onclick="closeReg()">Close</button>
                    </form>
                   
            </div>
                <div class="s_hold">
                    <form action="cvs.php" method="get">
                    <input type="text" name="search_term" id="search_term" placeholder="Search" required>
                    <button type="submit" value="Search" id="sbtn"><i class="fas fa-search"></i></button>   
                    </form>
                </div>
            <table>
             <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Relationship</th>
                    <th>Prison Code</th>
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
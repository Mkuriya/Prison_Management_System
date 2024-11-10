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
    <link rel="stylesheet" href="Design/Account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script>
        function openForm(formName) {
        var i;
        var x = document.getElementsByClassName("form");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        document.getElementById(formName).style.display = "block";  
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
    <script>
            function openReg() {
            document.getElementById("regForm").style.display = "block";
            }

            function closeReg() {
            document.getElementById("regForm").style.display = "none";
            }
    </script>
    <script>
            function openReg2() {
            document.getElementById("regForm2").style.display = "block";
            }

            function closeReg2() {
            document.getElementById("regForm2").style.display = "none";
            }
    </script>
    <script>
            function openReg3() {
            document.getElementById("regForm3").style.display = "block";
            }

            function closeReg3() {
            document.getElementById("regForm3").style.display = "none";
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
        <div class="account_hold">
            <div class="btn_hold">
                                    
                    <div class="btns">
                    <button class="button1" onclick="openForm('Admin')">Admin Account</button>
                    <button class="button2" onclick="openForm('Assistant')">Assistant Account</button>
                    <button class="button3" onclick="openForm('User')">User Account</button>
                    </div>
            </div>
                    <div id="Admin" class="w3-container form">
                        <div class="admin_header">
                            <h2>ADMIN</h2>
                    <button class="open-button" onclick="openReg()">Open Form</button>
                       <div class="form-popup" id="regForm">
                            <form action="cud.php" method="POST" class="form-container">
                                <br>
                                <h1>Admin Form</h1>
                                <br>
                            <div class="name_hold">
                            <label for="aln">Last Name:</label>
                            <input type="text" name="aln" id="m">
                            </div>
                            <div class="name_hold">
                            <label for="afn"> First Name:</label>
                            <input type="text" name="afn" id="m">
                            </div>
                            <div class="name_hold">
                            <label for="amn">Middle Name:</label>
                            <input type="text" name="amn" id="m">
                            </div>
                            <div class="name_hold">
                            <label for="aun">Username:</label>
                            <input type="text" name="aun" id="m">
                            </div>
                            <div class="name_hold">
                            <label for="apw">Password:</label>
                            <input type="text" name="apw" id="m">
                            </div>
                            <div class="name_hold">
                            <label for="aem">Email:</label>
                            <input type="text" name="aem" id="m">
                            </div>
                            <br>
                <button type="submit" class="btn" name="save-admin-btn">Save</button>
                <button type="button" class="btn cancel" onclick="closeReg()">Close</button>
            </form>
            </div>
                        </div>
                        <table class="admin_table">
                         <thead>
                            <tr>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                            <?php

                            $query = "SELECT * FROM adb";
                            $statement = $pdo->prepare($query);
                            $statement->execute();
                            $result = $statement->fetchAll(PDO::FETCH_OBJ);
                            if($result){
                                foreach($result as $row ){
                                ?>
                                
                            <tr>
                                <td><?= $row->aln;?></td>
                                <td><?= $row->afn;?></td>
                                <td><?= $row->amn;?></td>
                                <td><?= $row->aun;?></td>
                                <td><?= $row->aem;?></td>
                                <td>
                                    <a href="aaac.php?id=<?=$row->aid; ?>"><i class='fas fa-edit'></i></a>
                                    <form action="cud.php" method="POST">
                                        <button type="submit" name="delete-admin-btn" value="<?=$row->aid; ?>"><i class="fa fa-trash"></i></button>
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

                    <div id="Assistant" class="w3-container form" style="display:none">
                    <div class="assist_header">
                            <h2>ASSISTANT</h2>
                            <button class="open-button" onclick="openReg2()">Open Form</button>
                       <div class="form-popup" id="regForm2">
                            <form action="cud.php" method="POST" class="form-container">
                                <br>
                                <h1>Assistant Form</h1>
                                <br>
                                <div class="name_hold">
                            <label for="cln">Last Name:</label>
                            <input type="text" name="cln" id="m">
                            </div>
                            <div class="name_hold">
                            <label for="cfn"> First Name:</label>
                            <input type="text" name="cfn" id="m">
                            </div>
                            <div class="name_hold">
                            <label for="cmn">Middle Name:</label>
                            <input type="text" name="cmn" id="m">
                            </div>
                            <div class="name_hold">
                            <label for="cun">Username:</label>
                            <input type="text" name="cun" id="m">
                            </div>
                            <div class="name_hold">
                            <label for="cpw">Password:</label>
                            <input type="text" name="cpw" id="m">
                            </div>
                            <div class="name_hold">
                            <label for="cem">Email:</label>
                            <input type="text" name="cem" id="m">
                            </div>
                            <br>
                <button type="submit" class="btn" name="save-assistant-btn">Save</button>
                <button type="button" class="btn cancel" onclick="closeReg2()">Close</button>
            </form>
            </div>
                        </div>
                        <table class="assist_table">
                         <thead>
                            <tr>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                            <?php

                            $query = "SELECT * FROM cdb";
                            $statement = $pdo->prepare($query);
                            $statement->execute();
                            $result = $statement->fetchAll(PDO::FETCH_OBJ);
                            if($result){
                                foreach($result as $row ){
                                ?>
                                
                            <tr>
                                <td><?= $row->cln;?></td>
                                <td><?= $row->cfn;?></td>
                                <td><?= $row->cmn;?></td>
                                <td><?= $row->cun;?></td>
                                <td><?= $row->cem;?></td>
                                <td>
                                    <a href="aaas.php?id=<?=$row->cid; ?>"><i class='fas fa-edit'></i></a>
                                    <form action="cud.php" method="POST">
                                        <button type="submit" name="delete-assistant-btn" value="<?=$row->aid; ?>"><i class="fa fa-trash"></i></button>
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

                    <div id="User" class="w3-container form" style="display:none">
                    <div class="user_header">
                            <h2>USER</h2>
                            <button class="open-button" onclick="openReg3()">Open Form</button>
                       <div class="form-popup" id="regForm3">
                            <form action="cud.php" method="POST" class="form-container">
                                <br>
                                <h1>User Form</h1>
                                <br>
                                <div class="name_hold">
                            <label for="uln">Last Name:</label>
                            <input type="text" name="uln" id="m">
                            </div>
                            <div class="name_hold">
                            <label for="ufn"> First Name:</label>
                            <input type="text" name="ufn" id="m">
                            </div>
                            <div class="name_hold">
                            <label for="umn">Middle Name:</label>
                            <input type="text" name="umn" id="m">
                            </div>
                            <div class="name_hold">
                            <label for="uun">Username:</label>
                            <input type="text" name="uun" id="m">
                            </div>
                            <div class="name_hold">
                            <label for="upw">Password:</label>
                            <input type="text" name="upw" id="m">
                            </div>
                            <div class="name_hold">
                            <label for="uem">Email:</label>
                            <input type="text" name="uem" id="m">
                            </div>
                            <br>
                <button type="submit" class="btn" name="save-user-btn">Save</button>
                <button type="button" class="btn cancel" onclick="closeReg3()">Close</button>
            </form>
            </div>
                        </div>
                        <table class="user_table">
                         <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                            <?php

                            $query = "SELECT * FROM udb";
                            $statement = $pdo->prepare($query);
                            $statement->execute();
                            $result = $statement->fetchAll(PDO::FETCH_OBJ);
                            if($result){
                                foreach($result as $row ){
                                ?>
                                
                            <tr>
                                <td><?= $row->uln, ', ' , $row->ufn, $row->umn ;?></td>
                                <td><?= $row->uun;?></td>
                                <td><?= $row->uem;?></td>
                                <td>
                                    <a href="aaau.php?id=<?=$row->uidd; ?>"><i class='fas fa-edit'></i></a>
                                    <form action="cud.php" method="POST">
                                        <button type="submit" name="delete-user-btn" value="<?=$row->aid; ?>"><i class="fa fa-trash"></i></button>
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
        </div>
    </main>
    
</body>
</html>
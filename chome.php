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
         <div class="headheader">
            <h2>Welcome 
                <?php
                echo ' '.$_SESSION['cun']. ' !';
                ?>
            </h2>
        </div>
        <div class="totalinmate">
        <i class='fas fa-clipboard-list'></i>
        <?php 
             $query1 = "SELECT * FROM indb";
             $stmt1 = $pdo->prepare($query1);
             $stmt1->execute();
             $total1 = $stmt1->rowCount();
             echo "Total inmate: " . $total1;
        ?>
        </div>
        <div class="totalvisitor">
        <i class='fas fa-id-badge'></i>
            <?php
            $query2 = "SELECT * FROM vbdb";
            $stmt2 = $pdo->prepare($query2);
            $stmt2->execute();
            $total2 = $stmt2->rowCount();
            
            echo "Total visitor: " . $total2;
            ?>

        </div>

    </main>
    
</body>
</html>
<?php include ('template/a_nav.php');?>
<h2 class="text-white" style="position:absolute; top:5%; left:20%; font-size:50px;">Welcome to Prison Management System</h2>

<div class="totalinmate"><br>
        <i class='fas fa-user-alt'></i>
        <br>
        <?php 
             $query1 = "SELECT * FROM inmate";
             $stmt1 = $pdo->prepare($query1);
             $stmt1->execute();
             $total1 = $stmt1->rowCount();
             echo "Total inmate " . $total1;
        ?>
        </div>
        <div class="totalvisitor">
            <br>
            <i class='far fa-file-alt'></i>
            <br>
        <?php 
             $query2 = "SELECT * FROM visitor";
             $stmt2 = $pdo->prepare($query2);
             $stmt2->execute();
             $total2 = $stmt2->rowCount(); 
             echo "Total Visitor " . $total2;
        ?>
        </div>
        <div class="totalcell">
        <br><i class='fas fa-border-all'></i>
        <br>
            <?php 
             $query3 = "SELECT * FROM cell";
             $stmt3 = $pdo->prepare($query3);
             $stmt3->execute();
             $total3 = $stmt3->rowCount();
             echo "Total Cell Block " . $total3;
        ?>

        </div>
        <div class="totalprison">
        <br><i class='fas fa-list'></i>
        <br>
        <?php 
             $query4 = "SELECT * FROM prison";
             $stmt4 = $pdo->prepare($query4);
             $stmt4->execute();
             $total4 = $stmt4->rowCount();
             echo "Total Prison Block " . $total4;
        ?>
        </div>
        <div class="totaladminacc">
        <br>
        <i class='fas fa-user-cog'></i>
        <br>
        <?php 
             $query5 = "SELECT * FROM adminn";
             $stmt5 = $pdo->prepare($query5);
             $stmt5->execute();
             $total5 = $stmt5->rowCount();
             echo "Total Admin Account " . $total5;
        ?>
        </div>
        <div class="totalassistantacc">
        <br>
        <i class='fas fa-user-cog'></i>
        <br>
        <?php 
             $query6 = "SELECT * FROM officer";
             $stmt6 = $pdo->prepare($query6);
             $stmt6->execute();
             $total6 = $stmt6->rowCount();
             echo "Total Officer Account " . $total6;
        ?>
        </div>
        <div class="totaluseracc">
            <br><i class='fas fa-user-cog'></i>&ensp;
        <br>
        <?php 
             $query7 = "SELECT * FROM jailer";
             $stmt7 = $pdo->prepare($query7);
             $stmt7->execute();
             $total7 = $stmt7->rowCount();
             echo "Total Jailer Account " . $total7;
        ?>
        </div>

<?php include ('template/a_footer.php');?>


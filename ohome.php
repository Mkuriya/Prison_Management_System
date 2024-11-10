<?php include ('template/o_nav.php');?>
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
<?php include ('template/o_footer.php');?>
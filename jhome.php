<?php include ('template/j_nav.php');?>
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



<?php include ('template/j_footer.php');?>
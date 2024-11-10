<?php
include("database/data.php");
if(isset($_GET['id'])){
    $inmate_id = $_GET['id'];

    $query = "SELECT * FROM inmate WHERE inmate_id=:id LIMIT 1";
    $statement = $pdo->prepare($query);
    $data = [':id' => $inmate_id];
    $statement->execute($data);
    $result = $statement->fetch(PDO::FETCH_OBJ); //ASSOC
}
?>

<?php include ('template/o_nav.php');?>
<div class="in-main">
    <div class="inmate-form" >
        <form action="create.php" method="POST">
        <h4>Inmate Form</h4>
        <div class="form-row">
                <input type="hidden" name="cell_id" value="<?= $result->inmate_id;?>">
            <div class="form-group col-md-4">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control" id="lastname"  name="lastname" value="<?= $result->lastname;?>" readonly>
            </div>
            <div class="form-group col-md-4">
            <label for="inputPassword4">Firstname</label>
            <input type="text" class="form-control" id="inputPassword4" name="firstname" value="<?= $result->firstname;?>" readonly>
            </div>
            <div class="form-group col-md-4">
            <label for="inputPassword4">Middlename</label>
            <input type="text" class="form-control" id="inputPassword4" name="middlename" value="<?= $result->middlename;?>"readonly>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="inputEmail4">Birthday</label>
            <input type="date" class="form-control" id="inputEmail4" name="bday" value="<?= $result->bday;?>"readonly>
            </div>
            <div class="form-group col-md-4">
            <label for="gender">Gender</label>
         <!--   <select name="gender" id="gender" class="form-control"readonly>
                        <option value="Male" <?= ($result->gender === 'Male' ? 'selected' : '') ?>>Male</option>
                        <option value="Female" <?= ($result->gender === 'Female' ? 'selected' : '') ?>>Female</option>
                    </select>-->
                    
            <input type="text" name="gender" value="<?= $result->gender;?>" class="form-control" readonly>
            </div>
            <div class="form-group col-md-4">
            <label for="inputPassword4">Marital Status</label>
            <input type="text" name="statuss" value="<?= $result->statuss;?>" class="form-control" readonly>
                     
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="form-group col-md-2">
            <label for="inputEmail4">Street</label>
            <input type="text" name="street" class="form-control" id="inputEmail4" value="<?= $result->street;?>"readonly>
            </div>
            <div class="form-group col-md-3">
            <label for="inputEmail4">Barangay</label>
            <input type="text"  name="barangay"class="form-control" id="inputEmail4" value="<?= $result->barangay;?>"readonly>
            </div>
            <div class="form-group col-md-3">
            <label for="inputEmail4">Municipality</label>
            <input type="text" name="municipality" class="form-control" id="inputEmail4" value="<?= $result->municipality;?>"readonly>
            </div>
            <div class="form-group col-md-2">
            <label for="inputEmail4">Province</label>
            <input type="text" name="province" class="form-control" id="inputEmail4" value="<?= $result->province;?>"readonly>
            </div>
            <div class="form-group col-md-2">
            <label for="inputEmail4">Country</label>
            <input type="text" name="country" class="form-control" id="inputEmail4" value="<?= $result->country;?>"readonly>
            </div>
        </div>
        <hr>
        
        <div class="form-row">
            <div class="form-group col-md-2">
            <label for="inputEmail4">Prison Code</label>
            <input type="text" name="prison_code" class="form-control" id="inputEmail4" value="<?= $result->prison_code;?>"readonly>
            </div>
            <div class="form-group col-md-5">
                <label for="inputPassword4">Prison Block</label> 
            <input type="text" name="statuss" value="<?= $result->prisonname;?>" class="form-control" readonly>
           
          <!--      <select name="prisonname" id="dropdown" class="form-control " readonly>
                <?php 
                  /*  $stmt2 = $pdo->prepare("SELECT * FROM prison");
                    $stmt2->execute();
                    $result2 = $stmt2->fetchAll();
                    foreach ($result2 as $row2) {
                        $prisonid = $row2['prison_id'];
                        $prisonname = $row2['prison_name'];
                        ?>
                       <option value="<?= $prisonid ?>"><?= $prisonname ?> Prison</option>
                        <?php
                    }*/
                ?>
                </select>-->
            </div>
            <div class="form-group col-md-5">
            <label for="inputPassword4">Cell Block</label>
            
            <input type="text" name="cellname" value="<?= $result->cellname;?>" class="form-control" readonly>
         <!--   <select id="dropdown" name="cellname" class="form-control" readonly>          
                <?php 
        /*            $stmt1 = $pdo->prepare("SELECT * FROM cell");
                    $stmt1->execute();
                    $result1 = $stmt1->fetchAll();
                    foreach ($result1 as $row1) {
                        $cellid = $row1['cell_id'];
                        $cellname = $row1['cell_name'];
                        ?>
                       <option value="<?= $cellid ?>"><?= $cellname ?> Prison</option>
                        <?php
                    }*/
                ?>
                </select>-->
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
            <label for="inputEmail4">Crime</label>
            <input type="text" name="crime" class="form-control" id="inputEmail4" value="<?= $result->crime;?>"readonly>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
            <label for="inputEmail4">Sentence</label>
            <input type="text" name="sentence" class="form-control" id="inputEmail4" value="<?= $result->sentence;?>"readonly>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Time Date Start</label>
            <input type="date" name="tds" class="form-control" id="inputEmail4" value="<?= $result->tds;?>"readonly>
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Time Date End</label>
            <input type="date" name="tde" class="form-control" id="inputEmail4" value="<?= $result->tde;?>"readonly>
            </div>
        </div>
        <hr>
        
     <!--   <div class="form-row">
            <div class="form-group col-md-10">
            <form method='post' action='create.php'
                enctype='multipart/form-data'>
                <input type='file' name='files[]'class="form-control" multiple />
             <  <input type='submit' value='Submit' name='submit' />
            </form>
            <label for="inputEmail4">Select File:</label>
            <input type="file" class="form-control" name="file" id="file" >
            </div>

        </div>-->
       
        </form>
        <a href="o_in_home.php"><button type="submit" class="btn btn-primary col-md-12" >BACK</button></a>
       
    </div>
</div>

<?php include ('template/a_footer.php');?>
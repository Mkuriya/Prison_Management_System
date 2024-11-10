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
        <form action="update.php" method="POST">
        <h4>Inmate Form</h4>
        <div class="form-row">
                <input type="hidden" name="inmate_id" value="<?= $result->inmate_id;?>">
            <div class="form-group col-md-4">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control" id="lastname"  name="lastname" value="<?= $result->lastname;?>" >
            </div>
            <div class="form-group col-md-4">
            <label for="inputPassword4">Firstname</label>
            <input type="text" class="form-control" id="inputPassword4" name="firstname" value="<?= $result->firstname;?>" >
            </div>
            <div class="form-group col-md-4">
            <label for="inputPassword4">Middlename</label>
            <input type="text" class="form-control" id="inputPassword4" name="middlename" value="<?= $result->middlename;?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="inputEmail4">Birthday</label>
            <input type="date" class="form-control" id="inputEmail4" name="bday" value="<?= $result->bday;?>">
            </div>
            <div class="form-group col-md-4">
            <label for="gender">Gender</label>
           <select name="gender" id="gender" class="form-control">
                        <option value="Male" <?= ($result->gender === 'Male' ? 'selected' : '') ?>>Male</option>
                        <option value="Female" <?= ($result->gender === 'Female' ? 'selected' : '') ?>>Female</option>
                    </select>
                    
            </div>
            <div class="form-group col-md-4">
            <label for="inputPassword4">Marital Status</label>
            <select name="statuss" id="status" class="form-control">
                        <option value="Single" <?= ($result->statuss === 'Single' ? 'selected' : '') ?>>Single</option>
                        <option value="Married" <?= ($result->statuss === 'Married' ? 'selected' : '') ?>>Married</option>
                    </select>
                     
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="form-group col-md-2">
            <label for="inputEmail4">Street</label>
            <input type="text" name="street" class="form-control" id="inputEmail4" value="<?= $result->street;?>">
            </div>
            <div class="form-group col-md-3">
            <label for="inputEmail4">Barangay</label>
            <input type="text"  name="barangay"class="form-control" id="inputEmail4" value="<?= $result->barangay;?>">
            </div>
            <div class="form-group col-md-3">
            <label for="inputEmail4">Municipality</label>
            <input type="text" name="municipality" class="form-control" id="inputEmail4" value="<?= $result->municipality;?>">
            </div>
            <div class="form-group col-md-2">
            <label for="inputEmail4">Province</label>
            <input type="text" name="province" class="form-control" id="inputEmail4" value="<?= $result->province;?>">
            </div>
            <div class="form-group col-md-2">
            <label for="inputEmail4">Country</label>
            <input type="text" name="country" class="form-control" id="inputEmail4" value="<?= $result->country;?>">
            </div>
        </div>
        <hr>
        
        <div class="form-row">
            <div class="form-group col-md-2">
            <label for="inputEmail4">Prison Code</label>
            <input type="text" name="prison_code" class="form-control" id="inputEmail4" value="<?= $result->prison_code;?>">
            </div>
            <div class="form-group col-md-5">
                <label for="inputPassword4">Prison Block</label> 
                <select name="prisonname" id="dropdown" class="form-control " >
                    
                <?php 
                    $stmt2 = $pdo->prepare("SELECT * FROM inmate left join prison on inmate.prisonname = prison.prison_id");
                    $stmt2->execute();
                    $result2 = $stmt2->fetchAll();
                    foreach ($result2 as $row2) {
                        $prisonid = $row2['inmate_id'];
                        $prison_name = $row2['prison_name'];
                        $prisonname = $row2['prisonname'];
                        ?>
                       <option value="<?= $prisonid ?>" <?= $prisonid === $prisonname ? 'selected' : '' ?> ><?= $prison_name ?> Prison</option>
                        <?php
                    }
                ?>
                </select>
            </div>
            <div class="form-group col-md-5">
            <label for="inputPassword4">Cell Block</label>
            
            <select name="cellname" id="dropdown" class="form-control " >
                <?php 
                    $stmt3 = $pdo->prepare("SELECT * FROM inmate left join cell on inmate.cellname = cell.cell_id");
                    $stmt3->execute();
                    $result3 = $stmt3->fetchAll();
                    foreach ($result3 as $row3) {
                        $cellid = $row3['inmate_id'];
                        $cell_name = $row3['cell_name'];
                        $cellname = $row3['cellname'];
                        ?>
                       <option value="<?= $cellid ?>" <?= $cellid === $cellname ? 'selected' : '' ?> ><?= $cell_name ?> Cell</option>
                        <?php
                    }
                ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
            <label for="inputEmail4">Crime</label>
            <input type="text" name="crime" class="form-control" id="inputEmail4" value="<?= $result->crime;?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
            <label for="inputEmail4">Sentence</label>
            <input type="text" name="sentence" class="form-control" id="inputEmail4" value="<?= $result->sentence;?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Time Date Start</label>
            <input type="date" name="tds" class="form-control" id="inputEmail4" value="<?= $result->tds;?>">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Time Date End</label>
            <input type="date" name="tde" class="form-control" id="inputEmail4" value="<?= $result->tde;?>">
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
        <button type="submit" class="btn btn-primary col-md-12" name="update-in">UPDATE</button>
       
        </form>
    </div>
</div>

<?php include ('template/a_footer.php');?>
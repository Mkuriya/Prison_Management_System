<?php include ('template/o_nav.php');?>
<?php include ('database/data.php') ?>
<?php include ('template/forms.php') ?>

<div class="in-main">
    <div class="inmate-form" >
        <form action="create.php" method="POST">
        <h4>Inmate Form</h4>
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control" id="lastname"  name="lastname" placeholder="Lastname" required>
            </div>
            <div class="form-group col-md-4">
            <label for="inputPassword4">Firstname</label>
            <input type="text" class="form-control" id="inputPassword4" name="firstname" placeholder="Firstname" required>
            </div>
            <div class="form-group col-md-4">
            <label for="inputPassword4">Middlename</label>
            <input type="text" class="form-control" id="inputPassword4" name="middlename" placeholder="Middlename" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="inputEmail4">Birthday</label>
            <input type="date" class="form-control" id="inputEmail4" name="bday" placeholder="Birthday" required>
            </div>
            <div class="form-group col-md-4">
            <label for="inputPassword4">Gender</label>
                <select name="gender" id="inputState" class="form-control" required>
                    <option selected>Choose...</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group col-md-4">
            <label for="inputPassword4">Marital Status</label>
            <select id="inputState" name="statuss" class="form-control" required>
                    <option selected>Choose...</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                </select>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="form-group col-md-2">
            <label for="inputEmail4">Street</label>
            <input type="text" name="street" class="form-control" id="inputEmail4" placeholder="Street" required>
            </div>
            <div class="form-group col-md-3">
            <label for="inputEmail4">Barangay</label>
            <input type="text"  name="barangay"class="form-control" id="inputEmail4" placeholder="Barangay" required>
            </div>
            <div class="form-group col-md-3">
            <label for="inputEmail4">Municipality</label>
            <input type="text" name="municipality" class="form-control" id="inputEmail4" placeholder="Municipality" required>
            </div>
            <div class="form-group col-md-2">
            <label for="inputEmail4">Province</label>
            <input type="text" name="province" class="form-control" id="inputEmail4" placeholder="Province" required>
            </div>
            <div class="form-group col-md-2">
            <label for="inputEmail4">Country</label>
            <input type="text" name="country" class="form-control" id="inputEmail4" placeholder="Country" required>
            </div>
        </div>
        <hr>
        
        <div class="form-row">
            <div class="form-group col-md-2">
            <label for="inputEmail4">Prison Code</label>
            <input type="text" name="prison_code" class="form-control" id="inputEmail4" placeholder="Prison Code" required>
            </div>
            <div class="form-group col-md-5">
            <label for="inputPassword4">Prison Block</label>
                <select name="prisonname" id="dropdown" class="form-control " required>
                    <option selected>Choose...</option>
                <?php 
                    $stmt2 = $pdo->prepare("SELECT * FROM prison");
                    $stmt2->execute();
                    $result2 = $stmt2->fetchAll();
                    foreach ($result2 as $row2) {
                        $prisonid = $row2['prison_id'];
                        $prisonname = $row2['prison_name'];
                        ?>
                       <option value="<?= $prisonid ?>"><?= $prisonname ?> </option>
                        <?php
                    }
                ?>
                </select>
            </div>
            <div class="form-group col-md-5">
            <label for="inputPassword4">Cell Block</label>
            <select id="dropdown" name="cellname" class="form-control" required>    
            <option selected>Choose...</option>      
                <?php 
                    $stmt1 = $pdo->prepare("SELECT * FROM cell");
                    $stmt1->execute();
                    $result1 = $stmt1->fetchAll();
                    foreach ($result1 as $row1) {
                        $cellid = $row1['cell_id'];
                        $cellname = $row1['cell_name'];
                        ?>
                       <option value="<?= $cellid ?>"><?= $cellname ?> </option>
                        <?php
                    }
                ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
            <label for="inputEmail4">Crime</label>
            <input type="text" name="crime" class="form-control" id="inputEmail4" placeholder="Crime" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
            <label for="inputEmail4">Sentence</label>
            <input type="text" name="sentence" class="form-control" id="inputEmail4" placeholder="Sentence" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Time Date Start</label>
            <input type="date" name="tds" class="form-control" id="inputEmail4" placeholder="Time Date Start" required>
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Time Date End</label>
            <input type="date" name="tde" class="form-control" id="inputEmail4" placeholder="Time Date End" required>
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
        <button type="submit" class="btn btn-primary col-md-12" name="save-inmate">Save</button>
       
        </form>
    </div>
</div>

<?php include ('template/o_footer.php');?>
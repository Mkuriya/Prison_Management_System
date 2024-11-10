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
<?php include ('template/j_nav.php');?>
<div class="main">
        <div class="book-list-container">
            <div class="container-header row mb-3">
                <div class="col">
                    <h3>Visitor</h3>
                </div>
                
            </div>
            <div class="modal-body">
                <form action="create.php" method="POST">
                <div class="form-group">
                <input type="hidden" name="prison_id" value="<?= $result->inmate_id;?>">
                    <label for="prionName">Prison Code</label>
                    <input type="text" class="form-control" name="inmateid" value="<?= $result->prison_code;?>" readonly>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="lastname">Lastname</label>
                    <input type="text" class="form-control" id="lastname"  name="vi_last" placeholder="Lastname" required>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Firstname</label>
                    <input type="text" class="form-control" id="inputPassword4" name="vi_first" placeholder="Firstname" required>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Middlename</label>
                    <input type="text" class="form-control" id="inputPassword4" name="vi_middle" placeholder="Middlename" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="lastname">Relationship</label>
                    <input type="text" class="form-control" id="lastname"  name="relationship" placeholder="Relationship" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">contact</label>
                    <input type="text" class="form-control" id="inputPassword4" name="contact" placeholder="Contact" required>
                    </div>
                </div>
                <div class="form-group">
                </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="save-visitor">ADD</button>
                        <a href="j_in_home.php"><button type="button" class="btn btn-secondary m-5" >CANCEL</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include ('template/j_footer.php');?>
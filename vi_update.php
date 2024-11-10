<?php
include("database/data.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM visitor WHERE id=:id LIMIT 1";
    $statement = $pdo->prepare($query);
    $data = [':id' => $id];
    $statement->execute($data);

    $result = $statement->fetch(PDO::FETCH_OBJ); //ASSOC

 }
?>
<?php include ('template/j_nav.php');?>
<div class="main">
        <div class="book-list-container">
            <div class="container-header row mb-3">
                <div class="col">
                    <h3>Update Prison List</h3>
                </div>
                
            </div>
      
            <div class="modal-body">
                <form action="update.php" method="POST">
                <div class="form-group">
                <input type="hidden" name="id" value="<?= $result->id;?>">
                    <label for="prionName">Prison Code</label>
                    <input type="text" class="form-control" name="inmateid" value="<?= $result->inmateid;?>" readonly>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="lastname">Lastname</label>
                    <input type="text" class="form-control" id="lastname"  name="vi_last" value="<?= $result->vi_last;?>" required>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Firstname</label>
                    <input type="text" class="form-control" id="inputPassword4" name="vi_first" value="<?= $result->vi_first;?>" required>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Middlename</label>
                    <input type="text" class="form-control" id="inputPassword4" name="vi_middle" value="<?= $result->vi_middle;?>"required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="lastname">Relationship</label>
                    <input type="text" class="form-control" id="lastname"  name="relationship" value="<?= $result->relationship;?>" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">contact</label>
                    <input type="text" class="form-control" id="inputPassword4" name="contact" value="<?= $result->contact;?>" required>
                    </div>
                </div>
                <div class="form-group">
                </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="update-visitor">UPDATE</button>
                        <a href="j_vi_home.php"><button type="button" class="btn btn-secondary m-5" >CANCEL</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include ('template/j_footer.php');?>
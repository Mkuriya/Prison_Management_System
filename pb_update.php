<?php
include("database/data.php");
if(isset($_GET['id'])){
    $prison_id = $_GET['id'];

    $query = "SELECT * FROM prison WHERE prison_id=:id LIMIT 1";
    $statement = $pdo->prepare($query);
    $data = [':id' => $prison_id];
    $statement->execute($data);

    $result = $statement->fetch(PDO::FETCH_OBJ); //ASSOC

 }
?>
<?php include ('template/a_nav.php');?>
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
                <input type="hidden" name="prison_id" value="<?= $result->prison_id;?>">
                    <label for="prionName">Prison Name</label>
                    <input type="text" class="form-control" name="prison_name" value="<?= $result->prison_name;?>">
                </div>
                <div class="form-group">
                    <label for="prisonstatus">Prison Status</label>
                    <select name="prison_status" id="prisonStatus" class="form-control">
                        <option value="1" <?= ($result->prison_status == 1 ? 'selected' : '') ?>>Active</option>
                        <option value="0" <?= ($result->prison_status == 0 ? 'selected' : '') ?>>Inactive</option>
                    </select>
                </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-dark" name="update-prison">UPDATE</button>
                        <a href="a_pb_home.php"><button type="button" class="btn btn-secondary m-5" >CANCEL</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include ('template/a_footer.php');?>
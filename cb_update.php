<?php
include("database/data.php");
if(isset($_GET['id'])){
    $cell_id = $_GET['id'];

    $query = "SELECT * FROM cell WHERE cell_id=:id LIMIT 1";
    $statement = $pdo->prepare($query);
    $data = [':id' => $cell_id];
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
                <input type="hidden" name="cell_id" value="<?= $result->cell_id;?>">
                    <label for="cellName">Cell Name</label>
                    <input type="text" class="form-control" name="cell_name" value="<?= $result->cell_name;?>">
                </div>
                <div class="form-group">
                    <label for="prisonName">Prison Name</label>
                    <select class="form-control" name="prisonid" id="prisonid">
                    <option value="<?= $result->prisonid;?>">Select</option>
                    <?php 
                                $stmt1 = $pdo->prepare("SELECT * FROM prison");
                                $stmt1->execute();
                                $result1 = $stmt1->fetchAll();
                                foreach ($result1 as $row1) {
                                    $prisonid = $row1['prison_id'];
                                    $prisonname = $row1['prison_name'];
                                    ?>
                                   <option value="<?= $prisonid ?>"><?= $prisonname ?> Prison</option>
                                    <?php
                                }
                            ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="prisonstatus">Cell Status</label>
                    <select name="cell_status" id="prisonStatus" class="form-control">
                        <option value="1" <?= ($result->cell_status == 1 ? 'selected' : '') ?>>Active</option>
                        <option value="0" <?= ($result->cell_status == 0 ? 'selected' : '') ?>>Inactive</option>
                    </select>
                </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-dark" name="update-cell">UPDATE</button>
                        <a href="a_cb_home.php"><button type="button" class="btn btn-secondary m-5" >CANCEL</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include ('template/a_footer.php');?>
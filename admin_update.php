<?php
include("database/data.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM adminn WHERE id=:id LIMIT 1";
    $statement = $pdo->prepare($query);
    $data = [':id' => $id];
    $statement->execute($data);

    $result = $statement->fetch(PDO::FETCH_OBJ); //ASSOC

 }
?>
<?php include ('template/a_nav.php');?>
<div class="main">
        <div class="book-list-container">
            <div class="container-header row mb-3">
                <div class="col">
                    <h3>Update Admin Information</h3>
                </div>
                
            </div>
            <div class="modal-body">
                <form action="update.php" method="POST">
                <div class="form-group">
                <input type="hidden" name="id" value="<?= $result->id;?>">
                    <label for="prionName">First Name</label>
                    <input type="text" class="form-control" name="firstname" value="<?= $result->firstname;?>">
                </div>
                <div class="form-group">
                    <label for="prionName">Middle Name</label>
                    <input type="text" class="form-control" name="middlename" value="<?= $result->middlename;?>">
                </div>
                <div class="form-group">
                    <label for="prionName">Last Name</label>
                    <input type="text" class="form-control" name="lastname" value="<?= $result->lastname;?>">
                </div>
                <div class="form-group">
                    <label for="prionName">Email</label>
                    <input type="text" class="form-control" name="email" value="<?= $result->email;?>">
                </div>
                <div class="form-group">
                    <label for="prionName">Username</label>
                    <input type="text" class="form-control" name="uname" value="<?= $result->uname;?>">
                </div>
                <div class="form-group">
                    <label for="prionName">Password</label>
                    <input type="text" class="form-control" name="pword"  >
                </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="update-admin">UPDATE</button>
                        <a href="a_admin_home.php"><button type="button" class="btn btn-secondary ml-5" >CANCEL</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include ('template/a_footer.php');?>
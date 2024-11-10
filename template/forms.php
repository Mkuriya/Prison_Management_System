<?php include ('database/data.php') ?>

<!-- Add Jailer Form -->
<div class="modal fade mt-1" id="addJailer" tabindex="-1" aria-labelledby="addJailer" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addJailer">Add Jailer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="create.php" method="POST">
                <div class="form-group row">
                    <label for="lastname" class="col-sm-3 col-form-label">LastName</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
                </div>
                <div class="form-group row">
                    <label for="firstname" class="col-sm-3 col-form-label">FirstName</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
                </div>
                <div class="form-group row">
                    <label for="middlename" class="col-sm-3 col-form-label">MiddleName</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="middlename" name="middlename">
                </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                </div>
                <div class="form-group row">
                    <label for="uname" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="uname" name="uname">
                </div>
                </div>
                <div class="form-group row">
                    <label for="pword" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="pword" name="pword" minlength="8">
                </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-dark" name="save-jailer">CREATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add Officer Form -->
<div class="modal fade mt-1" id="addOfficer" tabindex="-1" aria-labelledby="addOfficer" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addOfficer">Add Officer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="create.php" method="POST">
                <div class="form-group row">
                    <label for="lastname" class="col-sm-3 col-form-label">LastName</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
                </div>
                <div class="form-group row">
                    <label for="firstname" class="col-sm-3 col-form-label">FirstName</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
                </div>
                <div class="form-group row">
                    <label for="middlename" class="col-sm-3 col-form-label">MiddleName</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="middlename" name="middlename">
                </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                </div>
                <div class="form-group row">
                    <label for="uname" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="uname" name="uname">
                </div>
                </div>
                <div class="form-group row">
                    <label for="pword" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="pword" name="pword" minlength="8">
                </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-dark" name="save-officer">CREATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add Admin Form -->
<div class="modal fade mt-1" id="addAdmin" tabindex="-1" aria-labelledby="addAdmin" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAdmin">Add Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="create.php" method="POST">
                <div class="form-group row">
                    <label for="lastname" class="col-sm-3 col-form-label">LastName</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
                </div>
                <div class="form-group row">
                    <label for="firstname" class="col-sm-3 col-form-label">FirstName</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
                </div>
                <div class="form-group row">
                    <label for="middlename" class="col-sm-3 col-form-label">MiddleName</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="middlename" name="middlename">
                </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                </div>
                <div class="form-group row">
                    <label for="uname" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="uname" name="uname">
                </div>
                </div>
                <div class="form-group row">
                    <label for="pword" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="pword" name="pword" minlength="8">
                </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-dark" name="save-admin">CREATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Add Prison Form -->
<div class="modal fade mt-5" id="addPrisonForms" tabindex="-1" aria-labelledby="addPrison" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPrison">Add Prison</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="create.php" method="POST">
                <div class="form-group">
                    <label for="prionName">Prison Name</label>
                    <input type="text" class="form-control" id="prisonName" name="prison_name">
                </div>
                <div class="form-group">
                    <label for="bookAuthor">Prison Status</label>
                    <select name="prison_status" id="prisonStatus" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-dark" name="save-prison">CREATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Add Cell -->
<div class="modal fade mt-5" id="addCell" tabindex="-1" aria-labelledby="addCell" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCell">Add Cell Block</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="create.php" method="POST">
                    <div class="form-group">
                       <label for="cellname">Cell Name</label>
                       <input type="text" class="form-control" id="cellName" name="cell_name">
                    </div>
                    <div class="form-group">
                       <label for="CellStatus">Cell Status</label>
                       <select name="cell_status" id="cellStatus" class="form-control">
                           <option value="1">Active</option>
                           <option value="0">Inactive</option>
                       </select>
                    </div>
                    <div class="form-group">
                        <label for="borrowedBook">Prison Name</label>
                        <select class="form-control" name="prisonid" id="prisonid">
                      
                            <?php 
                                $stmt = $pdo->prepare("SELECT * FROM prison");
                                $stmt->execute();
                                $result = $stmt->fetchAll();
                                foreach ($result as $row) {
                                    $prisonid = $row['prison_id'];
                                    $prisonname = $row['prison_name'];
                                    ?>
                                   <option value="<?= $prisonid ?>"><?= $prisonname ?> Prison</option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-dark" name="save-cell">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>






<?php include ('template/a_nav.php');?>
<?php include ('database/data.php') ?>
<?php include ('template/forms.php');?>

    <div class="main">
        <div class="book-list-container">
        <div class="container-header row mb-3">
                <div class="col">
                    <h3>Officer List</h3>
                </div>
                <div class="col">
                    <button type="button"  class="btn btn-secondary" id="addOfficer" data-toggle="modal" data-target="#addOfficer">
                        Add Officer</button>
                </div>
            </div>
            <table class="table table-sm" id="borrowedTable">
                <thead>
                    <tr>
                    <th scope="col">Last Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Middle Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Date Create</th>
                    <th scope="col" style="width: 100px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $stmt = $pdo->prepare("SELECT * FROM officer");
                    $stmt->execute();

                    $result = $stmt->fetchAll();

                    foreach ($result as $row) {
                        $officerid = $row['id']; 
                        $lastname = $row['lastname']; 
                        $middlename = $row['middlename'];
                        $firstname = $row['firstname']; 
                        $uname = $row['uname']; 
                        $datecreate = $row['date_create']; 
                        ?>
                        <tr>
                            <td id="prisonname-<?= $officerid ?>"><?= $lastname ?></td>
                            <td id="prisonname-<?= $officerid ?>"><?= $firstname ?></td>
                            <td id="prisonname-<?= $officerid ?>"><?= $middlename ?></td>
                            <td id="prisonname-<?= $officerid ?>"><?= $uname ?></td>
                            <td id="datecreate-<?= $officerid ?>"><?= $datecreate ?></td>
                            <td>
                            <a href="officer_update.php?id=<?=$officerid; ?>"><button class="btn btn-secondary"><i class="fa-solid fa-pencil"></i></button></a>
                               <button class="btn btn-danger" type="button" onclick="deleteOfficer(<?= $officerid ?>)"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    
<?php include ('template/a_footer.php');?>
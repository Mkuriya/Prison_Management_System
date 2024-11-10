<?php include ('template/j_nav.php');?>
<?php include ('database/data.php') ?>
<?php include ('template/forms.php') ?>

    <div class="main">
        <div class="book-list-container">
        <div class="container-header row mb-3">
                <div class="col">
                    <h3>Inmate List</h3>
                </div>
            </div>
            <table class="table table-sm" id="borrowedTable">
                <thead>
                    <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Cell Name</th>
                    <th scope="col">Prison Name</th>
                    <th scope="col">Date Create</th>
                    <th scope="col" style="width: 100px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $stmt = $pdo->prepare("SELECT * FROM inmate LEFT JOIN prison on inmate.prisonname = prison.prison_id
                    LEFT JOIN cell on inmate.cellname = cell.cell_id");
                    $stmt->execute();

                    $result = $stmt->fetchAll();

                    foreach ($result as $row) {
                        $inmateid = $row['inmate_id']; 
                        $prisonid = $row['prisonname']; 
                        $cellid = $row['cellname']; 
                        $prisonname = $row['prison_name']; 
                        $cellname = $row['cell_name'];
                        $lastname = $row['lastname']; 
                        $firstname = $row['firstname']; 
                        $middlename = $row['middlename']; 
                        $gender = $row['gender']; 
                        $datecreate = $row['in_date_create']; 
                        ?>
                        <tr>
                            <td id="prisonname-<?= $inmateid ?>"><?= $lastname ?>, <?= $firstname ?> <?= $middlename ?></td>
                            <td id="prisonname-<?= $inmateid ?>"><?= $gender ?></td>
                            <td id="prisonname-<?= $inmateid ?>"><?= $cellname ?></td>
                            <td id="prisonname-<?= $inmateid ?>"><?= $prisonname ?></td>
                            <td id="datecreate-<?= $inmateid ?>"><?= $datecreate ?></td>
                            <td>
                            <a href="vi_create.php?id=<?=$inmateid; ?>"><button class="btn btn-secondary"><i class="fa-solid fa-user-plus fa-lg"></i></button></a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    
<?php include ('template/j_footer.php');?>
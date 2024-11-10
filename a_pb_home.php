<?php include ('template/a_nav.php');?>
<?php include ('database/data.php') ?>
<?php include ('template/forms.php') ?>
<div class="main">
        <div class="book-list-container">
            <div class="container-header row mb-3">
                <div class="col">
                    <h3>Prison List</h3>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-secondary" id="addPrison" data-toggle="modal" data-target="#addPrisonForms">Add Prison</button>
                </div>
            </div>
            <table class="table table-sm" id="borrowedTable">
                <thead>
                    <tr>
                    <th scope="col">Prison Name</th>
                    <th scope="col">Prison Status</th>
                    <th scope="col">Date Created</th>
                    <th scope="col" style="width: 100px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $stmt = $pdo->prepare("SELECT * FROM prison");
                    $stmt->execute();

                    $result = $stmt->fetchAll();

                    foreach ($result as $row) {
                        $prisonid = $row['prison_id']; 
                        $prisonname = $row['prison_name']; 
                        $prisonstatus = $row['prison_status'];
                        $datecreate = $row['date_create']; 
                        ?>
                        <tr>
                            <td id="prisonname-<?= $prisonid ?>"><?= $prisonname ?></td>
                            <td id="prisonstatus-<?= $prisonid ?>">
                                <?php
                                if ($row['prison_status'] == 1) {
                                    echo "Active";
                                } else {
                                    echo "Inactive";
                                }
                                ?>
                            </td>
                            <td id="datecreate-<?= $prisonid ?>"><?= $datecreate ?></td>
                            <td>
                                <a href="pb_update.php?id=<?=$prisonid; ?>"><button class="btn btn-secondary"><i class="fa-solid fa-pencil"></i></button></a>
                                
                                <button class="btn btn-danger" type="button" onclick="deletePrison(<?= $prisonid ?>)"><i class="fa-solid fa-trash"></i></button>
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
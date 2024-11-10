<?php include ('template/a_nav.php');?>
<?php include ('database/data.php') ?>
<?php include ('template/forms.php') ?>

    <div class="main">
        <div class="book-list-container">
        <div class="container-header row mb-3">
                <div class="col">
                    <h3>Cell List</h3>
                </div>
                <div class="col">
                    <button type="button"  class="btn btn-secondary" id="addCell" data-toggle="modal" data-target="#addCell">
                        Add Cell</button>
                </div>
            </div>
            <table class="table table-sm" id="borrowedTable">
                <thead>
                    <tr>
                    <th scope="col">Cell Name</th>
                    <th scope="col">Cell Status</th>
                    <th scope="col">Prison Name</th>
                    <th scope="col">Date Create</th>
                    <th scope="col" style="width: 100px;">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                        $stmt = $pdo->prepare("SELECT * FROM cell 
                        LEFT JOIN prison
                         ON cell.prisonid = prison.prison_id");
                        $stmt->execute ();
                        $result = $stmt->fetchAll();

                        foreach ($result as $row) {
                            $cellid = $row['cell_id'];
                            $prisonid = $row['prisonid'];
                            $prisonName = $row['prison_name'];
                            $cellName = $row['cell_name'];
                            $borrowerContact = $row['date_create'];
                            ?> 
                            <tr>
                                <td id="cellName-<?= $cellid ?>"><?= $cellName ?></td>
                                <td id="cellstatus-<?= $cellid ?>">
                                <?php
                                if ($row['cell_status'] == 1) {
                                    echo "Active";
                                } else {
                                    echo "Inactive";
                                }
                                ?>
                            </td>
                                <td id="prisonName-<?= $prisonid ?>"><?= $prisonName ?></td>
                                <td id="borrowerContact-<?= $cellid ?>"><?= $borrowerContact ?></td>
                                <td>
                                <a href="cb_update.php?id=<?=$cellid; ?>"><button class="btn btn-secondary"><i class="fa-solid fa-pencil"></i></button></a>
                                <button class="btn btn-danger" type="button" onclick="deleteCell(<?= $cellid ?>)"><i class="fa-solid fa-trash"></i></button>
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
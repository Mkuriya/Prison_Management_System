<?php include ('template/o_nav.php');?>
<?php include ('database/data.php') ?>
<?php include ('template/forms.php') ?>

    <div class="main">
        <div class="book-list-container">
        <div class="container-header row mb-3">
                <div class="col">
                    <h3>Visitor List</h3>
                </div>
            </div>
            <table class="table table-sm" id="borrowedTable">
                <thead>
                    <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Inmate Code</th>
                    <th scope="col">Inmate Name</th>
                    <th scope="col">Date Create</th>
                    <!--<th scope="col" style="width: 100px;">Action</th>-->
                    </tr>
                </thead>
                <tbody>
                <?php
                    $stmt = $pdo->prepare("SELECT * FROM visitor LEFT JOIN inmate on visitor.inmateid = inmate.prison_code");
                    $stmt->execute();

                    $result = $stmt->fetchAll();

                    foreach ($result as $row) {
                        $visitorid = $row['id']; 
                        $inlast = $row['lastname']; 
                        $infirst = $row['firstname']; 
                        $inmiddle = $row['middlename']; 
                        $lastname = $row['vi_last']; 
                        $middlename = $row['vi_middle'];
                        $firstname = $row['vi_first']; 
                        $uname = $row['relationship']; 
                        $inmateid = $row['inmateid']; 
                        $datecreate = $row['vi_date_create']; 
                        ?>
                        <tr>
                            <td id="visitor-<?= $visitorid ?>"><?= $lastname ?>, <?= $firstname ?> <?= $middlename ?></td>
                            <td id="prisonname-<?= $visitorid ?>"><?= $uname ?></td>
                            <td id="prisonname-<?= $visitorid ?>"><?= $inmateid ?></td>
                            <td id="visitor-<?= $visitorid ?>"><?= $inlast ?>, <?= $infirst ?> <?= $inmiddle ?></td>
                            <td id="datecreate-<?= $visitorid ?>"><?= $datecreate ?></td>
                        <!--    <td>
                                <button class="btn btn-secondary" type="button" onclick="updateBook(<?= $visitorid ?>)"><i class="fa-solid fa-pencil"></i></button>
                                <button class="btn btn-danger" type="button" onclick="deleteBook(<?= $visitorid ?>)"><i class="fa-solid fa-trash"></i></button>
                            </td>-->
                        </tr>
                        <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    
<?php include ('template/o_footer.php');?>
<?php
include ('../database/data.php');?><?php


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $cell_id = $_GET['id'];

        try {
            $stmt = $pdo->prepare("DELETE FROM cell WHERE cell_id = :id");
            $stmt->bindParam(':id', $cell_id);
            $stmt->execute();

            echo "
                <script>
                    alert('Cell Deleted Successfully!');
                    window.location.href = 'http://localhost/bilanggo/a_cb_home.php';
                </script>
            ";
            exit();
        } catch (PDOException $e) {
            echo 'Database Error: ' . $e->getMessage();
        }
    } else {
        echo "
            <script>
                alert('Failed to Delete Cell!');
                window.location.href = 'http://localhost/bilanggo/a_cb_home.php';
            </script>
        ";
    }
}

?>
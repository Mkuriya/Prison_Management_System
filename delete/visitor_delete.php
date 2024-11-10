<?php
include ('../database/data.php');?><?php


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        try {
            $stmt = $pdo->prepare("DELETE FROM visitor WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            echo "
                <script>
                    alert('Visitor Data Deleted Successfully!');
                    window.location.href = 'http://localhost/bilanggo/j_vi_home.php';
                </script>
            ";
            exit();
        } catch (PDOException $e) {
            echo 'Database Error: ' . $e->getMessage();
        }
    } else {
        echo "
            <script>
                alert('Failed to Delete Visitor Data!');
                window.location.href = 'http://localhost/bilanggo/j_vi_home.php';
            </script>
        ";
    }
}

?>
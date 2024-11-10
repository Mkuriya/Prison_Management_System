<?php
include ('../database/data.php');?><?php


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        try {
            $stmt = $pdo->prepare("DELETE FROM officer WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            echo "
                <script>
                    alert('Account Deleted Successfully!');
                    window.location.href = 'http://localhost/bilanggo/a_off_home.php';
                </script>
            ";
            exit();
        } catch (PDOException $e) {
            echo 'Database Error: ' . $e->getMessage();
        }
    } else {
        echo "
            <script>
                alert('Failed to Delete Account!');
                window.location.href = 'http://localhost/bilanggo/a_off_home.php';
            </script>
        ";
    }
}

?>
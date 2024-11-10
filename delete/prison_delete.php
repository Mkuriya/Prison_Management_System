<?php
include ('../database/data.php');?><?php


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $prison_id = $_GET['id'];

        try {
            $stmt = $pdo->prepare("DELETE FROM prison WHERE prison_id = :id");
            $stmt->bindParam(':id', $prison_id);
            $stmt->execute();

            echo "
                <script>
                    alert('Prison Deleted Successfully!');
                    window.location.href = 'http://localhost/bilanggo/a_pb_home.php';
                </script>
            ";
            exit();
        } catch (PDOException $e) {
            echo 'Database Error: ' . $e->getMessage();
        }
    } else {
        echo "
            <script>
                alert('Failed to Delete Prison!');
                window.location.href = 'http://localhost/bilanggo/a_pb_home.php';
            </script>
        ";
    }
}

?>
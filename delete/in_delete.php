<?php
include ('../database/data.php');?><?php


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $inmate_id = $_GET['id'];

        try {
            $stmt = $pdo->prepare("DELETE FROM inmate WHERE inmate_id = :id");
            $stmt->bindParam(':id', $inmate_id);
            $stmt->execute();

            echo "
                <script>
                    alert('Inmate Information Deleted Successfully!');
                    window.location.href = 'http://localhost/bilanggo/o_in_home.php';
                </script>
            ";
            exit();
        } catch (PDOException $e) {
            echo 'Database Error: ' . $e->getMessage();
        }
    } else {
        echo "
            <script>
                alert('Failed to Delete Inmate Information!');
                window.location.href = 'http://localhost/bilanggo/o_in_home.php';
            </script>
        ";
    }
}

?>
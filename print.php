<!DOCTYPE html>
<?php
	require 'database/data.php';
?>
<html lang="en">
	<head>
		<style>	
		.table {
			width: 100%;
			margin-bottom: 20px;
		}	
		
		.table-striped tbody > tr:nth-child(odd) > td,
		.table-striped tbody > tr:nth-child(odd) > th {
			background-color: #f9f9f9;
		}
		
		@media print{
			#print {
				display:none;
			}
		}
		@media print {
			#PrintButton {
				display: none;
			}
		}
		
		@page {
			size: auto;
			width: 8.5 in;   /* auto is the initial value */
			margin: 0;  /* this affects the margin in the printer settings */
		}
	</style>
	</head>
<body class="main">
	<h2>Report List</h2>
	<br /> 
	<b style="color:blue;">Date Prepared:</b>
	<?php
		$date = date("Y-m-d", strtotime("+6 HOURS"));
		echo $date;
	?>
	<br /><br />
	<table class="table table-sm" id="borrowedTable">
                <thead>
                    <tr>
                    <th scope="col">Visitor Name</th>
                    <th scope="col">Inmate Code</th>
                    <th scope="col">Inmate Name</th>
                    <th scope="col">Date Create</th>
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
                        $datecreate = $row['vi_in']; 
                        ?>
                        <tr>
                            <td id="visitor-<?= $visitorid ?>">&emsp;<?= $lastname ?>, <?= $firstname ?> <?= $middlename ?></td>
                            <td id="prisonname-<?= $visitorid ?>">&emsp;<?= $inmateid ?></td>
                            <td id="visitor-<?= $visitorid ?>">&emsp;<?= $inlast ?>, <?= $infirst ?> <?= $inmiddle ?></td>
                            <td id="datecreate-<?= $visitorid ?>">&emsp;<?= $datecreate ?></td>
                            
                        </tr>
                        <?php
                    }
                ?>
                </tbody>
            </table>
	<center><button id="PrintButton" onclick="PrintPage()">Print</button></center>
</body>
<script type="text/javascript">
	function PrintPage() {
		window.print();
	}
	document.loaded = function(){
		
	}
	window.addEventListener('DOMContentLoaded', (event) => {
   		PrintPage()
		setTimeout(function(){ window.close() },750)
	});
</script>
</html>



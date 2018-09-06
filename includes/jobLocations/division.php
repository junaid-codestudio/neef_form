<?php

include '../credPDO.php';

$pdo = new PDO($dsn, $username, $password);

$rows = array();
if(isset($_GET['jobprovince'])) {
	$stmt = $pdo->prepare("SELECT Division as JobDivision FROM `tbl_location` where Province=? group by Division order by Division");
	$stmt->execute(array($_GET['jobprovince']));
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
echo json_encode($rows);

?>
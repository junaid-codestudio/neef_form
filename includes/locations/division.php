<?php

include '../credPDO.php';

$pdo = new PDO($dsn, $username, $password);

$rows = array();
if(isset($_GET['province'])) {
	$stmt = $pdo->prepare("SELECT Division FROM `tbl_location` where Province=? group by Division order by Division");
	$stmt->execute(array($_GET['province']));
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
echo json_encode($rows);

?>
<?php

include '../credPDO.php';

$pdo = new PDO($dsn, $username, $password);

$rows = array();
if(isset($_GET['district'])) {
	$params['prov'] = $_GET['province'];
	$params['div'] = $_GET['division'];
	$params['dist'] = $_GET['district'];

	$stmt = $pdo->prepare("SELECT Tehsil FROM `tbl_location` where Province=:prov and Division=:div and District=:dist group by Tehsil order by Tehsil");
	$stmt->execute($params);
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
echo json_encode($rows);

?>
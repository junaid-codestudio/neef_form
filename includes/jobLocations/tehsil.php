<?php

include '../credPDO.php';

$pdo = new PDO($dsn, $username, $password);

$rows = array();
if(isset($_GET['jobdistrict'])) {
	$params['jobprov'] = $_GET['jobprovince'];
	$params['jobdiv'] = $_GET['jobdivision'];
	$params['jobdist'] = $_GET['jobdistrict'];

	$stmt = $pdo->prepare("SELECT Tehsil as JT FROM `tbl_location` where Province=:jobprov and Division=:jobdiv and District=:jobdist group by Tehsil order by Tehsil");

	$stmt->execute($params);
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
echo json_encode($rows);

?>
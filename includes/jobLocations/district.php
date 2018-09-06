<?php

include '../credPDO.php';

$pdo = new PDO($dsn, $username, $password);

$rows = array();
if(isset($_GET['jobdivision'])) {
	$params['prov'] = $_GET['jobprovince'];
	$params['div'] = $_GET['jobdivision'];

	$stmt = $pdo->prepare("SELECT District as JobDistrict FROM `tbl_location` where Province=:prov and Division=:div group by District order by District");
	$stmt->execute($params);
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
echo json_encode($rows);

?>
<?php

include '../credPDO.php';

$pdo = new PDO($dsn, $username, $password);

$rows = array();
if(isset($_GET['division'])) {
	$params['prov'] = $_GET['province'];
	$params['div'] = $_GET['division'];

	$stmt = $pdo->prepare("SELECT District FROM `tbl_location` where Province=:prov and Division=:div group by District order by District");
	$stmt->execute($params);
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
echo json_encode($rows);

?>
<?php
//(\d+){4}-(\d){2}-(\d){2}
require_once 'mysql/connect.php';
$status = true;
$query = "select c.*
	from clients_cars cc
join cars c on
	cc.cars_id=c.id  where ";
// for type of query and date
if (isset($_POST['to'], $_POST['from']) and preg_match('/(\d+){4}-(\d){2}-(\d){2}/', $_POST['to']) and preg_match('/(\d+){4}-(\d){2}-(\d){2}/', $_POST['from'])) {
	if (isset($_POST['type']) and $_POST['type'] === 'rend') {
		//for taking cars
		$query = $query . "
	cc.`rent_date` NOT BETWEEN '" . $_POST['to'] . "' AND '" . $_POST['from'] . "'
		AND
	cc.`rent_date`<'" . $_POST['to'] . "'
	AND
	cc.`return_date` NOT BETWEEN '" . $_POST['to'] . "' AND '" . $_POST['from'] . "'
		AND
	cc.`rent_date`<'" . $_POST['from'] . "'
	;";
	} else {
		//for free cars
		$query = $query . "
	cc.`rent_date`  BETWEEN '" . $_POST['to'] . "' AND '" . $_POST['from'] . "'
		AND
	cc.`rent_date`<'" . $_POST['to'] . "'
	AND
	cc.`return_date`  BETWEEN '" . $_POST['to'] . "' AND '" . $_POST['from'] . "'
		AND
	cc.`rent_date`<'" . $_POST['from'] . "'
	";
	}
	$status = false;
}
//for create
if (isset($_POST['brand']) and is_array($_POST['brand']) and count($_POST['brand']) != 0) {

	!$status ? $query .= ' AND ' : $query .= ' ';
	$query .= ' `brand` in ' . buildString($_POST['brand']) . " ";
	$status = false;

}
//for model
if (isset($_POST['model']) and is_array($_POST['model']) and count($_POST['model']) != 0) {

	!$status ? $query .= ' AND ' : $query .= ' ';
	$query .= ' `model` in ' . buildString($_POST['model']) . " ";
	$status = false;

}
//for reg_num
if (isset($_POST['reg_num']) and is_array($_POST['reg_num']) and count($_POST['reg_num']) != 0) {

	!$status ? $query .= ' AND ' : $query .= ' ';
	$query .= ' `reg_num` in ' . buildString($_POST['reg_num']) . " ";
	$status = false;

}
//for horse_power
if (isset($_POST['horse_power']) and is_array($_POST['horse_power']) and count($_POST['horse_power']) != 0) {

	!$status ? $query .= ' AND ' : $query .= ' ';
	$query .= ' `horse_power` in ' . buildString($_POST['horse_power']) . " ";
	$status = false;

}
//for color
if (isset($_POST['color']) and is_array($_POST['color']) and count($_POST['color']) != 0) {

	!$status ? $query .= ' AND ' : $query .= ' ';
	$query .= ' `color` in ' . buildString($_POST['color']) . " ";
	$status = false;

}
//echo $query;
//on empty input
if ($status) {
	$query = "select c.*
	from clients_cars cc
join cars c on
	cc.cars_id=c.id";
}

$query .= ';';
$query = mysqli_query($conn, $query) or die(mysqli_error($conn));
if (mysqli_num_rows($query) != 0) {
	while ($result = mysqli_fetch_assoc($query)) {
		$data[] = $result;
	}

	echo json_encode($data);
}
//buidling string for IN clause
function buildString(array $array) {
	$string = '(';
	if (is_array($array) and count($array) != 0) {
		for ($i = 0, $c = count($array); $i < $c; $i++) {
			$string .= "'" . $array[$i] . "'";
			$i != count($array) - 1 ? $string .= ',' : $string .= ')';
		}
		return $string;
	}

}
?>
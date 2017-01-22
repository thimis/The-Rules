<?PHP
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
include_once(getcwd() . '/rules.php');
header('Content-Type: application/json');
echo json_encode($rules);
?>
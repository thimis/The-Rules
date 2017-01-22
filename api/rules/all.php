<?PHP
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
include_once(getcwd() . '/rules.php');
header('Content-Type: application/json');
echo json_encode($rules);
?>
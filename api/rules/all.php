<?PHP
include_once(getcwd() . '/rules.php');
header('Content-Type: application/json');
echo json_encode($rules);
?>
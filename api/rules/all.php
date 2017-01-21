<?PHP
include_once('/home/ubuntu/workspace/rules.php');
$data = $rules;
header('Content-Type: application/json');
echo json_encode($data);
?>
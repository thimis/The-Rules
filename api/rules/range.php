<?PHP
include_once('/home/ubuntu/workspace/rules.php');
$data = 'all range place holder';
header('Content-Type: application/json');
echo json_encode($data);
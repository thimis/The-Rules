<?PHP
include_once('/home/ubuntu/workspace/rules.php');
$randomnumber = rand(0,87);
$data = $rules[$randomnumber];
header('Content-Type: application/json');
echo json_encode($data);




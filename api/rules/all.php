<?PHP
include_once(getcwd() . '/rules.php');
$data = $rules;
header('Content-Type: application/json');
echo json_encode($data);
print_r('Hello world')
?>
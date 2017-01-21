<?PHP
include_once(getcwd() . '/rules.php');
$randomnumber = rand(0,87);
$data = $rules[$randomnumber];
print json_encode($data);




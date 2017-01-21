<?PHP
include_once(getcwd() . '/rules.php');
$id = $_GET['id'];

function search($array, $key, $value)
{
    $results = array();

    if (is_array($array)) {
        if (isset($array[$key]) && $array[$key] == $value) {
            $results[] = $array;
        }

        foreach ($array as $subarray) {
            $results = array_merge($results, search($subarray, $key, $value));
        }
    }

    return $results;
}
$rulenumber = (search($rules, 'id', $id));
$data = $rulenumber;
header('Content-Type: application/json');
echo json_encode($data);



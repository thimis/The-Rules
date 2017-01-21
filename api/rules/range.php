<?PHP
include_once(getcwd() . '/rules.php');
$beg = $_GET['start'];
$stop = $_GET['end'];
// 0-286
//print_r('Start:'.$start.'  End:'.$end);
//print_r(array_slice($rules, 0));

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

//echo json_encode($);

function searchrulerange($array, $key, $start, $stop)
{
    $results = array();
    foreach (range($start, $stop) as $value) {
        if (is_array($array)) {
            if (isset($array[$key]) && $array[$key] == $value) {
            $results[] = $array;
        }

        foreach ($array as $subarray) {
            $results = array_merge($results, search($subarray, $key, $value));
        }
    }
    }
    return $results;
}
$rulenumber = (searchrulerange($rules, 'id', $beg, $stop));
echo json_encode($rulenumber);

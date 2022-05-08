<?php
$str = file_get_contents('formdata.json');
$json_arr = json_decode($str, true);

$arr_index = array();
foreach ($json_arr as $key => $value) {
    if ($value['id'] == $_GET['id']) 
    {
        $arr_index[] = $key;
    }
}

// delete data
foreach ($arr_index as $i) 
{
    unset($json_arr[$i]);
}

// rebase array
$json_arr = array_values($json_arr);

// encode array to json and save to file
file_put_contents('formdata.json', json_encode($json_arr));

header("Location: view.php");
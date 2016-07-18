<?php

//method 1
$data = file_get_contents("empdata.json");
$json = json_decode($data, true);
foreach($json as $key => $value) {
    if (!is_array($value)) {
        echo $key.
        '=>'.$value.
        '<br/>';
    }
    else {
        foreach($value as $key => $val) {
            echo $key.
            '=>'.$val.
            '<br/>';
        }
    }
}


?>
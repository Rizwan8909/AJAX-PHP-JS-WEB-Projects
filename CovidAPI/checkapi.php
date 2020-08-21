<?php
    $data = file_get_contents('https://api.covid19api.com/summary');
    $coivd_data = json_decode($data);

    echo '<pre>';
    print_r($coivd_data);
?>
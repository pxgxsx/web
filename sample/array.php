<?php
    $numbers = array();
    $numbers[] = 7;
//    echo $numbers[0];
    array_push($numbers, 9);
//    print_r($numbers);
    $sport = array("Hockey", "Jumping");
    $sport[] = 17;
//    print_r($sport);
    $info = array(
        "name" => "Bob",
        "age" => 25,
        "sport" => "Baseball"
    );
    $info["work"] = "programmer";
    print_r($info);
    echo $info["name"];
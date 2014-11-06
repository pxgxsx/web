<?php
    function printInfo($info)
    {
        $data = "<label>Name:</label>" .
        "<strong>" . $info["name"] . "</strong>" .
        "<br>" . 
        "<lable> Age: </lable>" . 
        "<span>" . $info["age"] . "</span>";
        echo $data;
    }
<?php
function printSinTable()
{
    $table = "<table>";
    $table = $table . getSinTableHead();
    $table = $table . getSinTableBody();
    $table = $table . "</table>";
    echo $table;
}

function getSinTableHead()
{
    $html = "<tr>";
    $html .= "<th>Degree/Minutes</th>";
    $html .= "<th>0</th>";
    $html .= "<th>30</th>";
    $html .= "<th>60</th>";
    $html .= "</tr>";
    return $html;
}

function getSinTableBody()
{
    $html = '';
    for ($degree = 0; $degree <= 360; $degree +=10)
    {
        $html .= '<tr>';
        $html .= "<td>{$degree}</td>";
        for ($minute = 0; $minute <= 60; $minute += 6)
        {
            $sin = calcSin($degree, $minute);
            $html .= "<td>{$sin}</td>";
        }
        $html .= '<tn>';
    }
    return $html;
}

function calcSin()
{
    
}
<?php

$grades = [85, 92, 78, 88, 95];

function descendingOrder($arr){
    arsort ($arr);
    print_r($arr);
}

descendingOrder($grades);
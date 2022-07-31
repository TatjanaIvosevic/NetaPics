<?php

require_once 'database.php';

function dataExists($id, $table, $fieldSearch, $fieldWhere)
{

    $database = new Database();

    $data = $database->select("SELECT $fieldSearch FROM $table WHERE $fieldWhere = '$id'");

    return $data;
}


function getData($fieldArray, $table, $fieldWhere, $id)
{

    $fields = implode(',',$fieldArray);

    $database = new Database();

    $data = $database->select("SELECT $fields FROM $table WHERE $fieldWhere = '$id'");

    return $data;
}
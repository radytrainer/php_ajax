<?php 

require ("class/Ajax.php");

// insert data in sql response 

if (isset($_REQUEST['form']))
{
    $data = $_REQUEST['form'];

    $insertStudent = new Ajax();

    $fname = $data['fname'];
    $lname = $data['lname'];
    $email = $data['email'];
    $address = $data['address'];

    $message = $insertStudent->insertData($fname, $lname, $email, $address);

    echo $message;
}

if (isset($_REQUEST['bool'])) 
{
    $getInfo = new Ajax();
    $getDataAsArray = $getInfo->getData();

    echo json_encode($getDataAsArray);
}
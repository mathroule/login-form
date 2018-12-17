<?php

$errors = array();
$form = array();

if (empty($_POST["username"])) {
    $errors['username'] = "Username is required";
} else {
    $form['username'] = test_input($_POST["username"]);
}

if (empty($_POST["password"])) {
    $errors['password'] = "Password is required";
} else {
    $form['password'] = test_input($_POST["password"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (!empty($errors) && empty($form)) {
    $data['success'] = false;
    $data['errors'] = $errors;
    $data['data'] = array();
} else {
    $data['success'] = true;
    $data['data'] = $form;
}

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
echo json_encode($data);

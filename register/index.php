<?php
require_once('fields.php');
require_once('validate.php');
include'functions.php';

// Add fields with optional initial message
$validate = new Validate();
$fields = $validate->getFields();
$fields->addField('first_name');
$fields->addField('last_name');
$fields->addField('password', 'Use new format.');
$fields->addField('email', 'Must be a valid email address.');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = 'reset';
} else {
    $action = strtolower($action);
}

switch ($action) {
    case 'reset':
        // Reset values for variables
        $first_name = '';
        $last_name = '';
        $password = '';
        $email = '';

        // Load view
        include 'register.php';
        break;
    case 'register':
        // Copy form values to local variables
        $first_name = trim(filter_input(INPUT_POST, 'first_name'));
        $last_name = trim(filter_input(INPUT_POST, 'last_name'));
        $password = trim(filter_input(INPUT_POST, 'password'));
        $email = trim(filter_input(INPUT_POST, 'email'));

        // Validate form data
        $validate->text('first_name', $first_name);
        $validate->text('last_name', $last_name);
        $validate->password('password', $password);
        $validate->email('email', $email);

        add_admin($first_name, $last_name, $email, $password);
        // Load appropriate view based on hasErrors
        if ($fields->hasErrors()) {
            include 'register.php';
        } else {
            include 'success.php';
        }
        break;
}
?>
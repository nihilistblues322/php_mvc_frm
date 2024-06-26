<?php

use Core\Database;
use Core\Validator;

$errors = [];

$config = require_once base_path("config.php");
$db = new Database($config['database']);

if (!Validator::string($_POST['body'], 1, 100)) {
    $errors['body'] = 'A body of no more then 255 char is required';
}

if (!empty($errors)) {
    return view('notes/create.view.php', [
        'heading' => 'Create Note',
        'errors' => $errors,
    ]);
}

$db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
    'body' => $_POST['body'],
    'user_id' => 5,
]);

header('location: /notes');
die();
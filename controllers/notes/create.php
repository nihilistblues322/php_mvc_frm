<?php

require_once 'Validator.php';

$config = require_once "config.php";
$db = new Database($config['database']);

$heading = 'Create Note';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    if (!Validator::string($_POST['body'], 1, 100)) {
        $errors['body'] = 'A body of no more then 255 char is required';
    }

    if (empty($errors)) {

        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 5,
        ]);
    }
}

require_once 'views/notes/create.view.php';

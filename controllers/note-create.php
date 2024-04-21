<?php

$config = require_once "config.php";
$db = new Database($config['database']);

$heading = 'Create Note';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    if (strlen($_POST['body']) == 0) {
        $errors['body'] = 'A body is required';
    }

    if (empty($errors)) {

        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 5,
        ]);
    }
}

require_once 'views/note-create.view.php';

<?php

use Core\Database;

$config = require_once base_path("config.php");
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();
    authorize($note['user_id'] == 5);

    $db->query('delete from notes where id = :id', [
        'id' => $_GET['id'],
    ]);

    header('location: /notes');
    exit();

} else {

    $note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();
    authorize($note['user_id'] == 5);

    view('notes/show.view.php', [
        'heading' => 'Note',
        'note' => $note,
    ]);
}

<?php

$config = require_once base_path("config.php");
$db = new Database($config['database']);

$notes = $db->query('select * from notes where user_id = 5')->get();

view('notes/index.view.php', [
    'heading' => 'Notes',
    'notes' => $notes,
]);

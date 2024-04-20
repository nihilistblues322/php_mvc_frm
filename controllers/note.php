<?php

$config = require_once "config.php";
$db = new Database($config['database']);
$heading = 'Note';

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->fetch();

if (!$note) {
    abort();
}

if ($note['user_id'] !== 4) {
    abort(Response::FORBIDDEN);
}

require "views/note.view.php";
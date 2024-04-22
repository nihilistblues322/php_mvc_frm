<?php

$config = require_once "config.php";
$db = new Database($config['database']);
$heading = 'Note';

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();
authorize($note['user_id'] ==  5);



require "views/notes/show.view.php";
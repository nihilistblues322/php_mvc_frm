<?php

$config = require_once "config.php";
$db = new Database($config['database']);


$heading = 'Notes';
$notes = [];
$notes = $db->query('select * from notes where user_id = 5')->get();



require "views/notes.view.php";
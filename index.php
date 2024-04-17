<?php

require_once "functions.php";
require_once "Database.php";
// require_once "router.php";

$config = require_once "config.php";

$db = new Database($config['database']);
$posts = $db->query("select * from posts where id")->fetchAll(PDO::FETCH_ASSOC);

dd($posts);

<?php

require_once "functions.php";
require_once "Database.php";

// require_once "router.php";

$db = new Database();
$posts = $db->query("select * from posts where id")->fetchAll(PDO::FETCH_ASSOC);

dd($posts);
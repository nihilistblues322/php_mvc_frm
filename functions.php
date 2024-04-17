<?php

function dd($v)
{
    echo '<pre>';
    var_dump($v);
    echo '</pre>';
    die();
}

function urlIs($url)
{
    return $_SERVER['REQUEST_URI'] == $url;
}


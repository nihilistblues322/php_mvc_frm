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

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attr = [])
{
    extract($attr);
    require base_path('views/' . $path);
}

function abort($code = 404)
{
    http_response_code($code);
    require_once base_path("views/{$code}.php");
    exit;

}

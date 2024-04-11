<?php


$books = [
    ['name' => 'Android',
        'author' => 'Dick',
        'releaseYear' => '1958',
        'purchaseUrl' => 'http://example.com'],

    ['name' => 'ass',
        'author' => 'Didsck',
        'releaseYear' => '1978',
        'purchaseUrl' => 'http://example.com'],

    ['name' => 'Anddswgroid',
        'author' => 'Didfck',
        'releaseYear' => '1988',
        'purchaseUrl' => 'http://example.com'],
];

$filteredBooks = array_filter($books, function ($book) use ($books) {
    return $book['releaseYear'] >= 1960;
});

require_once 'index.view.php';
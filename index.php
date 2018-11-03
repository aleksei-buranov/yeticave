<?php
require_once 'functions.php';
$is_auth = (bool)rand(0, 1);

$user_name = 'Константин';
$user_avatar = 'img/user.jpg';

$cat = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];
$lots = [
    [
        'title' => '2014 Rossignol District Snowboard',
        'category' => 'Доски и лыжи',
        'cost' => 10999,
        'imgurl' => 'img/lot-1.jpg',
    ],
    [
        'title' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => 'Доски и лыжи',
        'cost' => 15999,
        'imgurl' => 'img/lot-2.jpg',
    ],
    [
        'title' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => 'Крепления',
        'cost' => 8000,
        'imgurl' => 'img/lot-3.jpg',
    ],
    [
        'title' => 'Ботинки для сноуборда DC Mutiny Charcoal',
        'category' => 'Ботинки',
        'cost' => 10999,
        'imgurl' => 'img/lot-4.jpg',
    ],
    [
        'title' => 'Куртка для сноуборда DC Mutiny Charcoal',
        'category' => 'Одежда',
        'cost' => 7500,
        'imgurl' => 'img/lot-5.jpg',
    ],
    [
        'title' => 'Маска Oakley Canopy',
        'category' => 'Разное',
        'cost' => 5400,
        'imgurl' => 'img/lot-6.jpg',
    ],
];

function cost_format($cost)
{
    if ($cost >= 1000) $cost = ceil($cost);
    return number_format($cost, 0, '', ' ');
}

$content = include_template('templates/index.php', ['lots' => $lots]);
$layout = include_template('templates/layout.php', ['cat' => $cat, 'content' => $content, 'user_name' => $user_name, 'user_avatar' => $user_avatar, 'is_auth' => $is_auth]);
print($layout);

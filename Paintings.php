<?php
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$style = "css/Paintings.css";
$content = 'Paintings.html.twig';
$title = 'Paintings';

$gallery = [
    [
        'id' => "#mone",
        'name' => "Клод Моне",
        'imgs' => [
            [
                'src' => "img/mone1.jpg",
                'src_name' => "Клод Моне. Впечатление (1872)"
            ],[
                'src' => "img/mone2.jpg",
                'src_name' => "Клод Моне. Водяные лилии и японский мост (1899)"
            ],[
                'src' => "img/mone3.jpg",
                'src_name' => "Клод Моне. Вокзал Сен-Лазар (1877)"
            ],[
                'src' => "img/mone4.jpg",
                'src_name' => "Клод Моне. Дама с зонтиком, повернувшаяся налево (1886)"
            ]
        ]
    ],[
        'id' => "#mane",
        'name' => "Эдуард Мане",
        'imgs' => [
            [
                'src' => "img/mane1.jpg",
                'src_name' => "Эдуард Мане. Завтрак на траве (1863)"
            ],[
                'src' => "img/mane2.jpg",
                'src_name' => "Эдуард Мане. Бар в «Фоли-Бержер» (1882)"
            ],[
                'src' => "img/mane3.jpg",
                'src_name' => "Эдуард Мане. Олимпия (1863)"
            ],[
                'src' => "img/mane4.jpg",
                'src_name' => "Эдуард Мане. Слива (1877)"
            ]
        ]
    ],[
        'id' => "#pissarro",
        'name' => "Камиль Писсарро",
        'imgs' => [
            [
                'src' => "img/pissarro1.jpg",
                'src_name' => "Камиль Писсарро. Девочка с прутом (1881)"
            ],[
                'src' => "img/pissarro2.jpg",
                'src_name' => "Камиль Писсарро. Бульвар Монмартр в дождливую погоду (1897)"
            ],[
                'src' => "img/pissarro3.jpg",
                'src_name' => "Камиль Писсарро. Старая дорога из Аннери в Понтуаз. Заморозки (1873)"
            ]
        ]
    ],[
        'id' => "#renyar",
        'name' => "Огюст Ренуар",
        'imgs' => [
            [
                'src' => "img/renyar1.jpg",
                'src_name' => "Огюст Ренуар. Завтрак гребцов (1880)"
            ],[
                'src' => "img/renyar2.jpg",
                'src_name' => "Огюст Ренуар. Портрет актрисы Жанны Самари (1877)"
            ],[
                'src' => "img/renyar3.jpg",
                'src_name' => "Огюст Ренуар. Лягушатник (1869)"
            ]
        ]
    ],[
        'id' => "#morizo",
        'name' => "Берта Моризо",
        'imgs' => [
            [
                'src' => "img/morizo1.jpg",
                'src_name' => "Берта Моризо. Женщина у туалета (1875)"
            ],[
                'src' => "img/morizo2.jpg",
                'src_name' => "Берта Моризо. Le Berceau (1872)"
            ],[
                'src' => "img/morizo3.jpg",
                'src_name' => "Берта Моризо. В столовой (1869)"
            ]
        ]
    ],[
        'id' => "#dega",
        'name' => "Эдгар Дега",
        'imgs' => [
            [
                'src' => "img/dega1.jpg",
                'src_name' => "Эдгар Дега. Абсент (1876)"
            ],[
                'src' => "img/dega2.jpg",
                'src_name' => "Эдгар Дега. Голубые танцовщицы (1898)"
            ],[
                'src' => "img/dega3.jpg",
                'src_name' => "Эдгар Дега. Танцевальный класс (1874)"
            ]
        ]
    ],[
        'id' => "#sisley",
        'name' => "Альфред Сислей",
        'imgs' => [
            [
                'src' => "img/sisley1.webp",
                'src_name' => "Альфред Сислей. Плотина в Молси, Хэмптон Корт (1874)"
            ],[
                'src' => "img/sisley2.jpg",
                'src_name' => "Альфред Сислей. Вид на Сен-Мамес (1880)"
            ]
        ]
    ]

];

echo $twig->render("Base.html.twig", [
    'style' =>$style,
    'content' =>$content,
    'gallery' => $gallery,
    'title' => $title
]);
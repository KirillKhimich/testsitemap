<?php
/*
 * Некорректные данные:
$int = 0; - Ошибка создания карты сайта: параметр не является массивом
$str = ""; - Ошибка создания карты сайта: параметр не является массивом
$array1 = ["loc" => "https://site.ru/products/ps5",
    "lastmod"=> "2020-12-11",
    "priority"=>"0.1",
    "changefreq" =>"weekly"]; - Ошибка создания карты сайта: библиотека не работает с одномерным массивом
$array2 = [[
    "loc" => "https://site.ru/",
    "la121stmod"=> "2020-12-14",
    "priozcxrity"=>"1",
    "changefreq" =>"hourly",

],[
    "loc" => "https://site.ru/news",
    "lastasdamod"=> "2020-12-14",
    "priority"=>"1",
    "changefreq" =>"daily"
]] - Ошибка создания карты сайта: проверьте валидность данных массива.
 *Некорректные типы:
    $sitemap ->CreateSiteMap($array,"jsonp"); - Ошибка записи файла:проверьте переданный параметр типа
    $sitemap ->CreateSiteMap($array,"XSL"); - Ошибка записи файла:проверьте переданный параметр типа
*Дериктории:
 $sitemap ->CreateSiteMap($array,"json"); - "Корневая папка/sitemaps"
 $sitemap ->CreateSiteMap($array,"json","mydirectory"); - "Корневая папка/mydirectory"
 $sitemap ->CreateSiteMap($array,"json","$array2"); - Ошибка записи файла:путь должен быть строкой
*/
require_once __DIR__ . '/vendor/autoload.php';
$sitemap = new \Kirillkhimich\Sitemap\CreateSiteMap();
$array = [[
    "loc" => "https://site.ru/",
    "lastmod"=> "2020-12-14",
    "priority"=>"1",
    "changefreq" =>"hourly",

],[
    "loc" => "https://site.ru/news",
    "lastmod"=> "2020-12-14",
    "priority"=>"1",
    "changefreq" =>"daily"
],[
    "loc" => "https://site.ru/about",
    "lastmod"=> "2020-12-07",
    "priority"=>"0.1",
    "changefreq" =>"weekly"
],[
    "loc" => "https://site.ru/product",
    "lastmod"=> "2020-12-12",
    "priority"=>"0.5",
    "changefreq" =>"daily"
],[
    "loc" => "https://site.ru/products/ps5",
    "lastmod"=> "2020-12-11",
    "priority"=>"0.1",
    "changefreq" =>"weekly"
    ],[
    "loc" => "https://site.ru/products/xbox",
    "lastmod"=> "2020-12-12",
    "priority"=>"0.1",
    "changefreq" =>"weekly"
],[
    "loc" => "https://site.ru/products/wii5",
    "lastmod"=> "2020-12-11",
    "priority"=>"0.1",
    "changefreq" =>"weekly"
]];
$sitemap ->CreateSiteMap($array,"json");

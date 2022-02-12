<?php include '../include/header.php'?>
<?php
// $start = microtime(true);

// Напишите функцию, которая принимает первым обязательным аргументом адрес любой страницы в интернете. 
// Функция должна вернуть значение содержимого тега <title>, вложенного внутрь тега <head> переданной страницы. 
// Теги <title>, находящиеся вне тега <head> игнорируются. Если заданная страница не содержит искомый тег, то функция возвращает false. 
// В решении НЕ используйте регулярные выражения. Также следует пренебречь русскоязычными доменами, считать, что домен на латинице.

$adres = "https://www.php.net/";
// $adres = "https://www.php.net/manual/ru/ref.strings.php";

// function get_title(string $path)
// {   
//     // $chek_kirilic = 
//     // substr(
//     //     $path, 
//     //     stripos($path, '//')+2,
//     //     1
//     // );
//     // if( preg_match("/[А-Яа-я]/", $chek_kirilic) ) return false;
//     $text = file_get_contents($path);
//     $text = substr(
//         $text, 
//         stripos($text, "<head>")+6,
//         stripos($text, "</head>") - stripos($text, "<head>")-6
//     );
//     if (stripos($text, "<title>")){
//         return  substr(
//             $text, 
//             stripos($text, "<title>")+7 ,
//             stripos($text, "</title>") - stripos($text, "<title>")-7
//         );
//     } else{
//         return false;
//     }
// };
echo bin2hex('о');
echo '<br>';
var_dump(mb_detect_order('UTF-8'));
// var_dump(get_title($adres));
// echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 4).' сек.';
?>
<?php include '../include/footer.php'?>
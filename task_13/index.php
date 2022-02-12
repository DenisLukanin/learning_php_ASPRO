<?php include '../include/header.php'?>
<?php
// В файле содержится несколько собственных имен с возможными повторениями. Напишите несколько скриптов:.
// a) скрипт gen.php генерирует тестовый файл data.txt с случайной последовательностью повторяющихся имен. 
//     Минимальный размер генерируемого файла  100 Мб. На проверку по почте отправлять только скрипт.
// b) скрипт index.php подсчитывает, сколько раз встречается каждое из имен в файле data.txt. Постарайтесь найти наименьшую по времени выполнения скрипта реализацию задачи.


$path = "../gen.txt";
// $start = microtime(true);
// $result = [];
// $s = file_get_contents($path);
// $result["Denis"] = mb_substr_count($s, "Denis");
// $result["Alena"] = mb_substr_count($s, "Alena");
// $result["Liza"] = mb_substr_count($s, "Liza");
// foreach($result as $name => $count){
//     echo "Имя $name встречалось $count раз в файле get.txt <br>";
// }

// $end = microtime(true);
// echo "скрипт выполнялся". round($end - $start, 4) ."секунд";


$start = microtime(true);

$s = file_get_contents($path);
$s = explode(" ", $s);
array_pop($s);
echo array_search('', $s);
$result = array_count_values($s);
// uasort($result, fn ($a,$b) => $b - $a);
foreach($result as $name => $count){
    echo "Имя $name встречалось $count раз в файле get.txt <br>";
}

$end = microtime(true);
echo "скрипт выполнялся". round($end - $start, 4) ."секунд";



// $resource = fopen("../gen.txt", "r");
// fclose($resource);
// echo $end - $start;




// array_rand(arr, int); //рандомное значение из массива
// clearstatcache(true, filename); очищает кеш состояния файла 
// echo filesize($path); //узнать размер файла
// mb_substr_count(); //сколько раз в подстрока встречается в строке
?>
<?php include '../include/footer.php'?>
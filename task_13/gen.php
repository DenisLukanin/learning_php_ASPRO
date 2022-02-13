<?php include '../include/header.php'?>
<?php
// a) скрипт gen.php генерирует тестовый файл data.txt с случайной последовательностью повторяющихся имен. 
//     Минимальный размер генерируемого файла  100 Мб. На проверку по почте отправлять только скрипт.
ini_set('max_execution_time', '120');
// $names = ["Denis, ", "Alena, ", "Liza, "];
// $path = "../gen.txt";

// $size = 1024*1024*100;
// $start = microtime(true);

// $resource = fopen("../gen.txt", "w+");
// for ($i=0;$i <= $size;){
//     // echo $i;
//     fwrite($resource, implode('',$names));
//     // shuffle($names);
//     $i += filesize($path);
// }
// fclose($resource);

// $end = microtime(true);
// echo "скрипт выполнялся". round($end - $start, 4) ."секунд";



$names = ["Denis " => "", "Denis " => "", "Alena "=> "", "Liza "=> "", "Kostya "=> "", "Vova "=> "", "Kiril "=> "", "Sasha "=> "", 
"Sveta "=> "", "Grisha "=> "", "Valera "=> "", "Dima "=> "", "Anna "=> "", "Kristina "=> "", "Vlad "=> "", "Nrina "=> "", "Olya "=> "",
 "Mash "=> "", "Stas "=> "", "Pasha "=> "", "Ivan "=> "", "Natasha "=> "", "Marsel "=> "", "Ulyana "=> "", "Misha "=> "",
  "Albert "=> "", "Yana "=> "", "Linda "=> "", "Petr "=> "", "Ruslan "=> "", "Roza "=> ""];
$path = "../gen.txt";
$size = 1024*1024*100;

$start = microtime(true);
$count = count($names);

$resource = fopen($path, "w+");
for ($i = 0; filesize($path) <= $size;$i++){
    fwrite($resource, implode('', array_rand($names, rand($count-10,$count))));
    if(!($i%1000)){
        clearstatcache(true, $path);
    }
    ;
    
}
fclose($resource);

$end = microtime(true);
echo "размер файла ". round(filesize($path)/1024/1024, 2)." МБ<br>";
echo "скрипт выполнялся ". round($end - $start, 4) ." секунд";
?>
<?php include '../include/footer.php'?>
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



$names = ["Denis " => "", "Alena "=> "", "Liza "=> "", "Kostya "=> "", "Vova "=> ""];
$path = "../gen.txt";
$size = 1024*1024*1;


$names = array_merge($names,$names);
var_dump($names);

$start = microtime(true);

$resource = fopen($path, "w+");
for ($i = 0; filesize($path) <= $size;$i++){
    // echo filesize($path)."<br>";
    fwrite($resource, implode('', array_rand($names, rand(2,5))));
    if(!($i%1000)){
        clearstatcache(true, $path);
    }
    ;
    
}


$end = microtime(true);
echo "скрипт выполнялся". round($end - $start, 4) ."секунд";



// pre_start();
// print_r(array_rand($names, rand(2,5)));
// print_r(array_rand($names, rand(2,5)));
// pre_end();
?>
<?php include '../include/footer.php'?>
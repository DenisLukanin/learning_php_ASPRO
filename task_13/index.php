<?php include '../include/header.php'?>
<?php
// В файле содержится несколько собственных имен с возможными повторениями. Напишите несколько скриптов:.
// a) скрипт gen.php генерирует тестовый файл data.txt с случайной последовательностью повторяющихся имен. 
//     Минимальный размер генерируемого файла  100 Мб. На проверку по почте отправлять только скрипт.
// b) скрипт index.php подсчитывает, сколько раз встречается каждое из имен в файле data.txt. Постарайтесь найти наименьшую по времени выполнения скрипта реализацию задачи.


$path = "../gen.txt";
$result = [];
$s = file_get_contents($path);
$result["Vova "] = mb_substr_count($s, "Vova ");
echo "Вова встретился ".$result["Vova "]." раз ( для проверки )<br><br>";

/**
 * Undocumented function
 *
 * @param array $result
 * @param array $arr
 * @return array
 */
function arr_merge_custom(array $result, array $arr): array {
    if (!$result) return array_merge($result, $arr);
    foreach($result as $name => $value){
        $result[$name] += $arr[$name];
    }
    return $result;
};


$start_time = microtime(true);

$result = [];
$megabyt = 1024*1024*10 ;

for ($start = 0; $start <= filesize($path);$start += $megabyt ){
    do{
        $megabyt += 1;
        $s = file_get_contents($path,false, null, $start, $megabyt);
    } while($s[-1] != ' ');
    $s = explode(" ", $s);
    array_pop($s);
    $result = arr_merge_custom($result, array_count_values($s));

}
uasort($result, fn ($a,$b) => $b - $a); //дает нагрузку нагрузку если что можно отключить
foreach($result as $name => $count){
    echo "Имя $name встречалось $count раз в файле get.txt <br>";
}

$end = microtime(true);
echo "скрипт выполнялся". round($end - $start_time, 4) ."секунд";
?>
<?php include '../include/footer.php'?>
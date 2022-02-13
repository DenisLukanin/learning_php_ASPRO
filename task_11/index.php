<?php include '../include/header.php'?>
<?php
// Напишите несколько функций, каждая из которых принимает первым обязательным аргументом строку с путем к сканируемой директории, 
// вторым аргументом принимает целое число со значением по умолчанию 1, обозначающее максимальный уровень вложенности сканирования 
// дочерних разделов. Функции должны возвращать массив папок и файлов из указанной директории, включая скрытые, учитывая заданный уровень 
// вложенности, с указанием полного пути от корня диска системы. Значение 1 второго параметра означает , что нужно вернуть файлы и папки 
// только из переданного раздела. 2 - из переданного и вложенных поддиректорий. И т.д. Если значение второго параметра равно 0, то считать, 
// что максимальный уровень вложенности не ограничен. При написании функций постарайтесь максимально учесть и обработать ошибки, 
// чтобы не выводились сообщения с предупреждениями. 

// функция scan_dir_files() , использует функцию scandir() .
// функция read_dir_files() , использует функцию readdir() .
// функция glob_dir_files() , использует функцию glob() .


// a.
show_messege('функция scan_dir_files() , использует функцию scandir()');
$path_ftest = "../test/test.txt";
$path_dtest = "../test";

function scan_dir_files(string $path, int $level = 1): array {
    $result = scandir($path);
    array_shift($result);
    array_shift($result);
    if ($level < 0) $level = 1;
    if( $level !== 1){
        if ($level == 0) $level = 1;
        $sum =[];
        foreach($result as $item) {
            if ( is_dir("{$path}/{$item}")){
                $sum = array_merge($sum, scan_dir_files("{$path}/{$item}", $level - 1)) ;
            }
        }
        return array_merge($sum, $result) ;
    } else {
        return $result; 
    };
};
pre_start();
var_dump(scan_dir_files($path_dtest,0));
pre_end();



// b
show_messege('функция read_dir_files() , использует функцию readdir() .');
function read_dir_files(string $path, int $level = 1): array {
    $result = [];
    if($level < 0 ) $level = 1;

    $resource = opendir($path);
    while(false !== ($item = readdir($resource))){
        if($item[-1] == '.') continue;
        $result[] = $item;
        if( is_dir($path."/".$item) && ($level > 1 || $level == 0) ) {
            if ($level == 0) {
                $result = array_merge($result, read_dir_files($path.'/'.$item, $level));
            } else {
                $result = array_merge($result, read_dir_files($path.'/'.$item, $level -1));
            }
        } 
    }
    closedir($resource);

    return $result;
}
pre_start();
var_dump(read_dir_files($path_dtest,-1));
pre_end();










// c .
show_messege('функция glob_dir_files() , использует функцию glob()');
/**
 * Undocumented function
 *
 * @param string $path
 * @param integer $level
 * @return array
 */
function glob_dir_files(string $path, int $level = 1): array {
    $result_glob = array_merge(glob("$path/*"),array_filter(glob("$path/.*"), fn ($item) => $item[-1] != "."));
    if($level < 0 ) $level = 1;
    if ($level != 1){
        if($level == 0 ) $level = 1;
        $result = [];
        foreach($result_glob as $item){
            if(is_dir($item)){
                $result = array_merge($result, glob_dir_files($item, $level - 1)); 
            }
        }
        return array_map(fn ($item) => basename($item), array_merge($result, $result_glob)) ;
    } else {
        return array_map(fn ($item) => basename($item), $result_glob) ;
    }
}
pre_start();
var_dump(glob_dir_files($path_dtest,3));
pre_end();


?>
<?php include '../include/footer.php'?>
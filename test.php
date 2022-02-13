<?php 
// $path = "gen.txt";
// echo filesize($path);
// $resource = fopen($path, 'r+');
// ftruncate( $resource,  194);
// fclose($resource);



// fseek — Устанавливает смещение в файловом указателе
// ftruncate — Урезает файл до указанной длины



$path_dtest = "test";
print_r(disk_total_space($path_dtest)) ;
// $path_dtest = array_map(fn ($item) => basename($item), glob("$path_dtest/*"));

disk_free_space($directory)




?>
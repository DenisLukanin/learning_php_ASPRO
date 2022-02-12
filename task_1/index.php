<?php include '../include/header.php'?>
<?php

// 1)
$title = "Aspro";


// 1.a)
pre_start();

echo $title;

pre_center();

print_r($title);

pre_center();

var_dump($title);

pre_end();


 // 1.b)
pre_start();

echo "$title the best company!";

pre_end();

// 1.c)
$GLOBALS['double'] = &$title;
pre_start();

echo $double;

pre_end();

// 1.c-1)
$title_wrap = 'title';

pre_start();

echo $$title_wrap;

pre_end();



?>
<?php include '../include/footer.php'?>

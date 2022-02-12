<?php include '../include/header.php'?>
<?php
// 2)
pre_start();
print_r($_SERVER);
pre_end();

// 2.a)
// в хроме в отличие от оперы есть ключ [HTTP_CACHE_CONTROL] со значением max-age=1 так же различаются [REMOTE_PORT] (опера 59519, хром 59450) еще разные [REQUEST_TIME]

// 2.b)
// В массив _GET создались пары ключ => значение, соответствующие введенным параметрам (ключ=значение)
pre_start();
print_r($GLOBALS);
pre_center();
echo $title;
pre_end();
?>
<?php include '../include/footer.php'?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Head</title>
  </head>
  <body>

<?php
  function pre_start()
  {
    echo '<pre>';
  };
  function pre_end()
  {
    echo '</pre>';
  };
  function pre_center()
  {
    echo '</pre>';
    echo '<pre>';
  };
 ?>
 <?php function show_messege($mess){ ?>
   <b>
     <?php echo $mess; ?>
   </b>
 <?php }; ?>

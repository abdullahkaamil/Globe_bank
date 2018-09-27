<?php
if (!isset($page_title)){
    $page_title ='Staff Area';
}

?>


<!doctype html>

<html lang="en">
  <head>

    <title>GBI - <?Php  echo $page_title;  ?></title>
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css');?>">
    <meta charset="utf-8">
  </head>

  <body>
<header>
<h1>GBI staff Area</h1>
</header>
<nav>
<ul>
<li><a href="<?php echo url_for('/staff/index.php');?>" >Menu</a></li></ul>
</nav>
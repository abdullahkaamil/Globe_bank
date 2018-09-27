<?php require_once('../../../private/initialize.php'); ?>
<?php

$id = $_GET['id'] ?? 1 ;

echo $id;

?>
<a href="show.php?name=<?php echo u('john Deo');?>">link</a><br>
<a href="show.php?company=<?php echo u('widget&more');?>">link</a><br>
<a href="show.php?query=<?php echo u('!#*?');?>">link</a><br>

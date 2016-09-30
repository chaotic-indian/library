

<?php
 $subject_id=$_REQUEST['id'];
require ('../connections/connect.php');

 mysql_query("DELETE FROM subject WHERE subject_id = '$subject_id' ")or die(mysql_error());
header("location:list_subject_process.php");

?>
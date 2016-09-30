<?php 
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library Management System</title>
<script language="javascript" src="../connections/add.js"></script>
<script language="javascript" src="../connections/add_subject.js"></script>

<link rel="stylesheet" type="text/css" href="../style.css" />
</head>

<body>
<div class="wrapper">
<?php include("top.php");?>  
  <!-- Main wrapper div starts here-->
  <div class="main_wrapper">
  
  <!-- Content wrapper div starts here-->
    <div class="content_wrapper">
   <p align="right"> <a href="javascript:history.go(-1)">previous page</a> || <a href="admin.php">admin</a></p>
      <h1>Library Administrator Portal</h1>
      <?php 
//session_start();
require ('../connections/connect.php');
if ($_SESSION['criteria'] == "null"){
echo "please select a criteria";
}
 elseif ($_SESSION['criteria'] == "author")
 {
echo '<a href="book_option_process.php?lett=a&letter=A">A</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=b&letter=B">B</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=c&letter=C">C</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=d&letter=D">D</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=e&letter=E">E</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=f&letter=F">F</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=g&letter=G">G</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=h&letter=H">H</a>&nbsp;&nbsp;
<a href="book_option_process.php?lett=i&letter=I">I</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=j&letter=J">J</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=k&letter=K">K</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=l&letter=L">L</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=m&letter=M">M</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=n&letter=N">N</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=o&letter=O">O</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=p&letter=P">P</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=q&letter=Q">Q</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=r&letter=R">R</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=s&letter=S">S</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=t&letter=T">T</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=u&letter=U">U</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=v&letter=V">V</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=w&letter=W">W</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=x&letter=X">X</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=y&letter=Y">Y</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=z&letter=Z">Z</a>';

$test=$_GET["lett"];
$test2=$_GET["letter"];
$sql="SELECT * FROM author " or die(mysql_error());
$result= mysql_query($sql)or die(mysql_error());
$count=mysql_num_rows($result);
// If result matched, table row must be greater than 1 row
$sn=1;
if($count>=1){
echo "<table border=1 cellspacing=0 cellpadding=3 style='width: 680px;'>";
echo "<tr><td>SERIAL</td><td> AUTHOR NAME</td><td>BOOK TITLE</td><td> PUBLISHER </td></tr>";

while($row1=mysql_fetch_array($result)){
$author_id= $row1['author_id'];		
$author_name= $row1['author_name'];

if 	($author_name[0]==$test || $author_name[0] == $test2){

echo "<tr><td>$sn</td><td>$author_name</td>";
$sql2="SELECT * FROM saved_author  where author_id=$author_id" or die(mysql_error());

$result2= mysql_query($sql2)or die(mysql_error());
$count2=mysql_num_rows($result2);
if($count2>=1){
while($row2=mysql_fetch_array($result2)){
$book_id= $row2['book_id'];


$sql3="SELECT * FROM book_details  where book_id=$book_id" or die(mysql_error());
$result3= mysql_query($sql3)or die(mysql_error());
$count3=mysql_num_rows($result3);
if($count3>=1){
while($row3=mysql_fetch_array($result3)){
$title= $row3['title'];
$publisher_id= $row3['publisher_id'];
$isbn= $row3['isbn'];
$edition= $row3['edition'];


$sql4="SELECT * FROM publisher  where publisher_id=$publisher_id" or die(mysql_error());
$result4= mysql_query($sql4)or die(mysql_error());
while($row4=mysql_fetch_array($result4)){
$publisher_name= $row4['publisher_name'];

 echo "<td>$title</td><td>$publisher_name</td></tr>";

}
}
echo "<tr><td></td><td></td>";
}

}
 $sn++;
}
}
}
}

echo "</table>";

}
// to display list by publisher.

elseif ($_SESSION['criteria'] == "publisher")
 {
echo '<a href="book_option_process.php?lett=a&letter=A">A</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=b&letter=B">B</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=c&letter=C">C</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=d&letter=D">D</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=e&letter=E">E</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=f&letter=F">F</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=g&letter=G">G</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=h&letter=H">H</a>&nbsp;&nbsp;
<a href="book_option_process.php?lett=i&letter=I">I</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=j&letter=J">J</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=k&letter=K">K</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=l&letter=L">L</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=m&letter=M">M</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=n&letter=N">N</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=o&letter=O">O</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=p&letter=P">P</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=q&letter=Q">Q</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=r&letter=R">R</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=s&letter=S">S</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=t&letter=T">T</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=u&letter=U">U</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=v&letter=V">V</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=w&letter=W">W</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=x&letter=X">X</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=y&letter=Y">Y</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=z&letter=Z">Z</a>';

$test=$_GET["lett"];
$test2=$_GET["letter"];
$sql="SELECT * FROM publisher " or die(mysql_error());
$result= mysql_query($sql)or die(mysql_error());
$count=mysql_num_rows($result);
// If result matched, table row must be greater than 1 row
$sn=1;
if($count>=1){
echo "<table border=1 cellspacing=0 cellpadding=3 style='width:680px;'>";
echo "<tr><td>SERIAL</td><td>BOOK TITLE</td><td> AUTHOR NAME</td><td> PUBLISHER </td></tr>";

while($row1=mysql_fetch_array($result)){
$publisher_id= $row1['publisher_id'];		
$publisher_name= $row1['publisher_name'];

if 	($publisher_name[0]==$test || $publisher_name[0] == $test2){
$sql3="SELECT * FROM book_details  where publisher_id=$publisher_id" or die(mysql_error());
$result3= mysql_query($sql3)or die(mysql_error());
$count3=mysql_num_rows($result3);
if($count3>=1){
while($row3=mysql_fetch_array($result3)){
$title= $row3['title'];
$book_id= $row3['book_id'];
$isbn= $row3['isbn'];
$edition= $row3['edition'];

 echo "<tr valign='top'><td>$sn</td><td>$title</td><td>";
$sql4="SELECT * FROM saved_author  where book_id=$book_id" or die(mysql_error());
$result4= mysql_query($sql4)or die(mysql_error());
while($row4=mysql_fetch_array($result4)){
$author_id= $row4['author_id'];
$sql5="SELECT * FROM author  where author_id=$author_id" or die(mysql_error());
$result5= mysql_query($sql5)or die(mysql_error());
while($row5=mysql_fetch_array($result5)){
$author_name= $row5['author_name'];

 echo "<img src='../list.png'> $author_name <br>";
 
}
}
echo "</td><td>$publisher_name</td></tr>";
$sn++;
}

}
}

}
}



echo "</table>";

}

// to display list by subject.

elseif ($_SESSION['criteria'] = "subject")
 {
echo '<a href="book_option_process.php?lett=a&letter=A">A</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=b&letter=B">B</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=c&letter=C">C</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=d&letter=D">D</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=e&letter=E">E</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=f&letter=F">F</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=g&letter=G">G</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=h&letter=H">H</a>&nbsp;&nbsp;
<a href="book_option_process.php?lett=i&letter=I">I</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=j&letter=J">J</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=k&letter=K">K</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=l&letter=L">L</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=m&letter=M">M</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=n&letter=N">N</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=o&letter=O">O</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=p&letter=P">P</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=q&letter=Q">Q</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=r&letter=R">R</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=s&letter=S">S</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=t&letter=T">T</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=u&letter=U">U</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=v&letter=V">V</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=w&letter=W">W</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=x&letter=X">X</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=y&letter=Y">Y</a> &nbsp;&nbsp;
<a href="book_option_process.php?lett=z&letter=Z">Z</a>';

$test=$_GET["lett"];
$test2=$_GET["letter"];
$sql="SELECT * FROM subject " or die(mysql_error());
$result= mysql_query($sql)or die(mysql_error());
$count=mysql_num_rows($result);
// If result matched, table row must be greater than 1 row
$sn=1;
if($count>=1){
echo "<table border=1 cellspacing=0 cellpadding=3 style='width:680px;'>";
echo "<tr><td>SERIAL</td><td>SUBJECT</td><td>BOOK TITLE</td><td> AUTHOR NAME</td><td> PUBLISHER </td></tr>";

while($row= mysql_fetch_array($result)){
$subject_id= $row['subject_id'];		
$subject_name= $row['subject_name'];

if 	($subject_name[0]==$test || $subject_name[0] == $test2){


$sql2="SELECT * FROM saved_subject  where subject_id = $subject_id" or die(mysql_error());

$result2= mysql_query($sql2)or die(mysql_error());
$count2=mysql_num_rows($result2);
if($count2>=1){

while($row2=mysql_fetch_array($result2)){
$book_id = $row2['book_id'];



//$sql2="SELECT * FROM publisher  where publisher_id=$publisher_id" or die(mysql_error());

//$result2= mysql_query($sql2)or die(mysql_error());
//$count2=mysql_num_rows($result2);
//if($count2>=1){
//while($row2=mysql_fetch_array($result2)){
//$book_id= $row2['book_id'];


$sql3="SELECT * FROM book_details  where book_id = $book_id" or die(mysql_error());
$result3= mysql_query($sql3)or die(mysql_error());
$count3=mysql_num_rows($result3);
if($count3>=1){
while($row3=mysql_fetch_array($result3)){
$title= $row3['title'];
//$book_id= $row3['book_id'];
$isbn= $row3['isbn'];
$edition= $row3['edition'];
$publisher_id= $row3['publisher_id'];


$sql6="SELECT * FROM publisher  where publisher_id = $publisher_id" or die(mysql_error());
$result6= mysql_query($sql6)or die(mysql_error());
$count6=mysql_num_rows($result6);
if($count6>=1){
while($row6=mysql_fetch_array($result6)){
$publisher_name= $row6['publisher_name'];

 echo "<tr valign='top'><td>$sn</td><td>$subject_name</td><td>$title</td><td>";
$sql4="SELECT * FROM saved_author  where book_id = $book_id" or die(mysql_error());
$result4= mysql_query($sql4)or die(mysql_error());
while($row4=mysql_fetch_array($result4)){
$author_id= $row4['author_id'];
$sql5="SELECT * FROM author  where author_id=$author_id" or die(mysql_error());
$result5= mysql_query($sql5)or die(mysql_error());
while($row5=mysql_fetch_array($result5)){
$author_name= $row5['author_name'];

 echo "<img src='../list.png'>$author_name <br>";
 
}
}
echo "</td><td>$publisher_name</td></tr>";

}
}
$sn++;
}
}
}
}
}
}
}
echo "</table>";

}
?>
      </span>
      <p>&nbsp;</p><p><!-- Content wrapper div ends here-->
  
  <!-- Right wrapper div starts here-->
</p>
    </div><div id="side_bar">
	<?php include("admin2.php");?>      
    </div>
    <!-- Right wrapper div ends here-->
<div class="clr"></div>
        <div><img src="../images/edge_bottom.jpg" border="0" /></div>
  </div>
  <p>

  <!-- Main wrapper div ends here-->
</div>
</body>

</html>

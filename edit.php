
<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library Management System</title>
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
      <h1>Library Administrator Portal<br />
      </h1>
          <p><?php echo '<a href="list_book_process.php?lett=a&letter=A">BOOK</a>' ?></p>
          <p><?php echo '<a href="list_author_process.php?lett=a&letter=A">AUTHOR</a>' ?></p>
          <p><?php echo '<a href="list_publisher_process.php?lett=a&letter=A">PUBLISHER</a>' ?></p>
          <p><?php echo '<a href="list_subject_process.php?lett=a&letter=A">CATEGORY</a>' ?></p>
    </div>
    <!-- Content wrapper div ends here-->
    
    <!-- Right wrapper div starts here-->
      <div id="side_bar">
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
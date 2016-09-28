<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library Management System</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div class="wrapper">
<?php include("top.php");?> 
 
  <!-- Main wrapper div starts here-->
  <div class="main_wrapper">
  
  <!-- Content wrapper div starts here-->
    <div class="content_wrapper">
    <h1>Acharya Online</h1>
<p> Welcome to Acharya Online, a resource center for all Acharyans. This is a free utiliy provided to all students studying in AIGS.</p>
<p> This library is a project created by final year students as a partial fulfillment of their BCA course. We hope you find this site useful!</p> 
<li> FOR NEW USERS : Please contact the administrator of the library system to get your own account.</li> 
<li> Existing users: You may login using the form provided at the right corner.</li>
<li>  Teachers who wish to submit any notes or question papers may submit them to the admin or chief librarian for approval.</li> 
</div>
    <!-- Content wrapper div ends here-->
    
    <!-- Right wrapper div starts here-->
      <div id="side_bar">
        <?php include('index_subject.php'); ?>
      </div>
    <!-- Right wrapper div ends here-->
                  <div class="clr"></div>
        <div><img src="images/edge_bottom.jpg" border="0" /></div>
  </div>
  <p>

  <!-- Main wrapper div ends here-->
</div>
</body>

</html>

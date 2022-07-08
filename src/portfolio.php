<?php
//Connect to database
require_once("connect.php");
//Connect to the Page html head
require_once("head.php");?>
<body>
  <!---Connect to navbar---> 
<?php include_once("header.php");?>
<!---Websites portfolio--->
<div class="container contain">
  <h3 id="certs" ><img src="icons/folder-document-icon.png" alt="certificates icon">Image Folder</h3>  
  <h3 class="name">Websites</h3>
 
<a href="portfolio2.php" style="color:orangered">View Designs</a>
<?php require_once("footer.php");?>
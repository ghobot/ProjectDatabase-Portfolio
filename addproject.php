<?php 
require "info.php";
if(isset($_REQUEST['submit'])) {
	$title = $_REQUEST['title'];
	$url = $_REQUEST['url'];
	$abstract = $_REQUEST['abstract'];
	$description = $_REQUEST['description'];
	
	$dbc = mysql_connect($host,$un,$pw,$db);
	if (!$connection) {
		die("ERROR!!! No Connection: ".mysql_errno() . ", ".mysql_error());
	}
	
	$db_selected = mysql_select_db($db,$connection);
	if (!$db_selected) {
		die("ERROR!!! No database with that name: ".mysql_errno() . ", ".mysql_error());
	}
	
	$query = "INSERT INTO PDB_test (title,abstract,description,url) VALUES('$title','$abstract','$description','$url');";
	$result = mysql_query($query,$dbc);
	if (!$result) {
		die("ERROR!!! This was a crummy query.".mysql_errno() . ", ".mysql_error());
	}
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="../bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>

    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="#">Project DataBase Form</a>
          <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
      <form >
      
      <p>Project Name</p>
      <input style="width:400px" type="text" name="title">
      
      <p>Project URL</p>
	  <input style="width:400px" type="text" name="url">      
      
      <p>Abstract</p>
      <textarea style="width:400px" name="abstract" cols="400" rows="5"></textarea>
      
      <p>Description</p>
      <textarea style="width:400px;" name="description" cols="400" rows="5"></textarea>
      <p>*Visual: upload functionality</p>
     
     <p>*Keywords, Venues and Classes will be pulled from the Project Database and other ITP Databases. </p>
	       <input type="submit" name="submit" value="submit" class="btn primary large" />     
      </form>
      
      
        <h1>ITP Project Database Form</h1>
        <p style="padding:3px;">This demo takes the information you add the the database about your project and formats it into a portfolio page of all your work. </p>
       
      </div>

         <footer>
        <p>&copy; Company 2011</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>

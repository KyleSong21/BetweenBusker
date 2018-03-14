<!doctype html>
<html>
<head>
 <title>Between Busker</title>
 <meta charset="utf-8">
</head>
<body>
  <h1><a href="index.php">Between Busker</a></h1>
   <ol>
     <li><a href="1.php?id=Band소개">Band소개</a></li>
     <li><a href="2.php?id=Band영상">Band영상</a></li>
     <li><a href="comparison.php?id=comparison">comparison</a></li>
</ol>
<h2><u>Band영상</u></h2><p>
<iframe width="1108" height="633" src="https://www.youtube.com/embed/2f1Ny74_ou0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<?php
echo $_GET['id'];

 ?>
</h2>

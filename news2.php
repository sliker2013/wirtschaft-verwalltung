﻿<!doctype html>

<html>

<head>

	<meta charset="UTF-8" />

  	<link href="css/style.css" rel="stylesheet" type="text/css" />

	<link href='http://fonts.googleapis.com/css?family=Tauri' rel='stylesheet' type='text/css'>

   	<title>W&V 2015 - Forum</title>

</head>

<body>	

  <header class="banner">

    <ul class='menu_top clearfix'>

      <li><a href="index.php">Home</a></li>

      <li><a href="forum.html">Forum</a></li>

      <li><a href="info.html">Infos</a></li>

      <li><a href="live.html">Live Stream</a></li>

    </ul>



    <h1 class='logo_wrapper'>

      <a href="index.php">

        <img src="img/Design02-logo-blue.png" onMouseOver="this.src='img/Design02-logo-orange.png'" onMouseOut="this.src='img/Design02-logo-blue.png'" alt="Startseite" title="Startseite">

      </a>

    </h1>

	</header>





		<!-- CONTENT -->

<main role="main">

<article>

     

	<h1><b><?php
				require_once('inc/config.php');
				$sql = "SELECT * FROM w_news ORDER BY id DESC LIMIT 1,1";
				$rs = mysql_query($sql);
				while($row = mysql_fetch_assoc($rs)) {
				echo $row['title'] . "<br />";

				}
?></h1>

 

<section>

	<h2>Erstellt am: <?php
				require_once('inc/config.php');
				$sql = "SELECT * FROM w_news ORDER BY id DESC LIMIT 1,1";
				$rs = mysql_query($sql);
				while($row = mysql_fetch_assoc($rs)) {
				echo $row['date'] . "<br />";

				}
?></h2>

    <p><center>

<?php
				require_once('inc/config.php');
				$sql = "SELECT * FROM w_news ORDER BY id DESC LIMIT 1,1";
				$rs = mysql_query($sql);
				while($row = mysql_fetch_assoc($rs)) {
				echo $row['cat'] . "<br />";

				}
?>
    </center></p>
<br>Autor: <?php
				require_once('inc/config.php');
				$sql = "SELECT * FROM w_news ORDER BY id DESC LIMIT 1,1";
				$rs = mysql_query($sql);
				while($row = mysql_fetch_assoc($rs)) {
				echo $row['autor'] . "<br />";

				}
?>
</section>



<aside class="contact">

    <h2>weitere Informationen</h2>

	<ul class="bullets">

		<li><a href="#" >Werbung 1</a></li>

		<li><a href="#" >Werbung 2</a></li>

		<li><a href="#" >Werbung 3</a></li>

		<li><a href="#" >Werbung 4</a></li>

		<li><a href="#" >Werbung 5</a></li>

		<li><a href="#" >Werbung 6</a></li>

	</ul>

</aside>

</article> 

</main>





<footer>

  <nav>

    <ul>

      <li><a href="index.php">Home</a></li>

      <li><a href="forum.html">Forum</a></li>

      <li><a href="info.html">Infos</a></li>

      <li><a href="live.html">Live Stream</a></li>

    </ul>



    <ul>

      <li><a href="#">Sitemap</a></li>

      <li><a href="#">Kontakt</a></li>

      <li><a href="#">Disclaimer</a></li>

      <li><a href="#">Impressum</a></li>

    </ul>

  </nav>



  <div class='kontakt'>

    &copy; 2015 Thomas Reitz - Alle Rechte vorhanden<br />

    Email: <a href="mailto:slikerdev27@gmail.com">slikerdev27@gmail.com</a><br />

    <a href="index.html">Homepage</a>

  </div>

</footer>



</body>

</html>
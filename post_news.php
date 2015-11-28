<?php
require_once('auth.php');
?>

<!doctype html>

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
	<?php
	require_once('inc/config.php');
	require_once('inc/bbcode.php');
if(isset($_GET['id'])){ // Sofern ID uebergeben wurde

 $id = $_GET['id']; // Variable definieren

	// DB Abfrage der Daten
	$abfrage = mysql_query("SELECT title, news, cat FROM news WHERE id='$id'");
	$row = mysql_fetch_object($abfrage);
}

	
if(isset($_POST['submit'])){

	$title = $_POST['title']; 
	$news = $_POST['news'];   
	$cat = $_POST['cat'];
	$autor = $_SESSION['SESS_FIRST_NAME'];
	
	if(empty($title) || empty($news) || empty($autor)){

		echo get_error('Bitte Danke alle benoetigten Felder ausfuellen!');

	
		}else{ 

			$eintragen = mysql_query("INSERT INTO w_news (autor, title, news, cat, date) VALUES ('$autor','$title','$news','$cat', now())");
			
		}
	
		if($eintragen){ 
		
			header("Location: member-index.php");
		
		}else{
			echo get_error('Der Eintrag war leider nicht erfolgreich! ".mysql_error()."');
		}
		
	}
		

	?>
<script type="text/javascript">
/* Funtionn BBCode */
var n = 1;
function add(code) {
         document.getElementById('bbcode').news.value += " " + code ;
}
</script>



		<!-- CONTENT -->

<main role="main">

<article>

     

	<h1>Erstelle eine Neue News</h1>

 

<section>

	<h2>Eingeloggt als: <?php echo $_SESSION['SESS_FIRST_NAME'];?></h2>

    <p><center>
	<a href="#"><font color="#FF0000">Mein Profile</font></a>   <a href="post_news.php"><font color="#FF0000">News Posten</font>   <a href="logout.php"><font color="#FF0000">Logout</font></a>
	</br>
<form action="" method="post" id="bbcode">
	<fieldset>
		<legend><?php echo $headline; ?></legend>
		
		<label><b>Titel</b></label>
		</br>
		<input type="text" name="title" value="<?php echo $row->title; ?>" />
		<br /><br />
		<b>Kutz (Startseite):</b>
		<?php get_bbcode('admin'); /* BBCode ausgeben */ ?>
		
		<textarea rows="10" cols="85" name="cat"><?php echo $row->cat;?></textarea>
		<br /><br />
		<b>Komplet:</b>
		<?php get_bbcode('admin'); /* BBCode ausgeben */ ?>
		
		<textarea rows="10" cols="85" name="news"><?php echo $row->news;?></textarea>
		<br /><br />

		<input type="submit" value="Eintragen" name="submit" class="button"/>
	</fieldset>
</form>
    </center></p>

</section>



<aside class="contact">

    <h2>weitere Informationen</h2>

	<ul class="bullets">

		<li><a href="#" >link 1</a></li>

		<li><a href="#" >link 2</a></li>

		<li><a href="#" >link 3</a></li>

		<li><a href="#" >link 4</a></li>

		<li><a href="#" >link 5</a></li>

		<li><a href="#" >link 6</a></li>

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
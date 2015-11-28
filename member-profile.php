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





		<!-- CONTENT -->

<main role="main">

<article>

    <div class='smallteaser clearfix'>
        <section>
          <header>
            <img src="img/icon/Design02-icon-big-hand.png" alt="">
            <h2>Member: <?php echo $_SESSION['SESS_FIRST_NAME'];?></h2>

            <h3>Deine Account Daten</h3>
		  </header>
          
		  <p>
			<center>Accoun ID: <?php echo $_SESSION['SESS_MEMBER_ID'];?>
			<br>
			<br>
			Account Name: <?php echo $_SESSION['SESS_LOGIN_NAME'];?>
			<br>
			<br>
			Vorname: <?php echo $_SESSION['SESS_FIRST_NAME'];?>
			<br>
			<br>
			Nachname: <?php echo $_SESSION['SESS_LAST_NAME'];?>
			<br>
			<br>
			Email: <?php echo $_SESSION['SESS_EMAIL_NAME'];?>
			
          </p>
<br />
			<a class="more" href="member-index.php">Member Start</a>
        </section>  
	

        <section>

          <header>

            <img src="img/icon/Design02-icon-big-people.png" alt="">

            <h2>Meine Einstellungen</h2>
<br>
            <h3></h3>

          </header>
<p>
<b>Account L&ocirc;schen:<br>
<?php
include ('inc/config.php');
if (isset($_POST["Absenden"])){
      $user  = $_POST['u_name'];
      $pass  = $_POST['pwd'];
	  
if(!$user){
echo "Bitte gebe dein Username ein. <br>";
}
if(!$pass){
	echo "Bitte gebe dein Passwort ein.";
	header('Refresh: 9; member-profile.php');
	}
if ($user && $pass){
	   $sql= ("DELETE FROM w_members WHERE username = '$user' AND password = '$pass' ");
	   $res = mysql_query($sql);
	   echo"Dein Account wurde Gelöscht.";
	   } ELSE {
		   echo"Falscher User und Passwort!";
	  } 
		  
}
?>
    <tr>

      <th>Username:</th>

      <td><input name="u_name" type="text" class="textfield" id="u_name" /></td>

    </tr>
<br>
    <tr>

      <th width="124">Password:</th>

      <td width="168"><input name="pwd" type="text" class="textfield" id="pwd" /></td>

    </tr>
	<br><td><input type="submit" name="Absenden" value="Account L&ocirc;schen" /></td>
</p>
</center>
</section>
</div>
 

</main>





<footer>

  <nav>

    <ul>

      <li><a href="index.html">Home</a></li>

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
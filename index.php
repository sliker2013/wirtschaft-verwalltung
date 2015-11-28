<!doctype html>

<html>

<head>

  <meta charset="UTF-8" />

  <link href="css/style.css" rel="stylesheet" type="text/css" />

  <link href='http://fonts.googleapis.com/css?family=Tauri' rel='stylesheet' type='text/css'>

   <title>W&V 2015 - Demo Seite</title>

</head>

<body>  

  <header class="banner">

    <ul class='menu_top clearfix'>

      <li><a id="active" href="index.php">Home</a></li>

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



    <main>

      <div class='smallteaser clearfix'>

        <section>

          <header>

            <img src="img/icon/Design02-icon-big-hand.png" alt="">

            <h2><?php
				require_once('inc/config.php');
				$sql = "SELECT * FROM w_news ORDER BY id DESC LIMIT 1";
				$rs = mysql_query($sql);
				while($row = mysql_fetch_assoc($rs)) {
				echo $row['title'] . "<br />";

				}
?></h2>

            <h3>Erstellt am: <?php
				require_once('inc/config.php');
				$sql = "SELECT * FROM w_news ORDER BY id DESC LIMIT 1";
				$rs = mysql_query($sql);
				while($row = mysql_fetch_assoc($rs)) {
				echo $row['date'] . "<br />";

				}
?></h3>

          </header>



          <p>

<?php
				require_once('inc/config.php');
				$sql = "SELECT * FROM w_news ORDER BY id DESC LIMIT 1";
				$rs = mysql_query($sql);
				while($row = mysql_fetch_assoc($rs)) {
				echo $row['cat'] . "<br />";

				}
?><br />

            <a class="more" href="news.php">weiter lesen</a>

          </p>

        </section>



        <section>

          <header>

            <img src="img/icon/Design02-icon-big-globe.png" alt="">

            <h2><?php
				require_once('inc/config.php');
				$sql = "SELECT * FROM w_news ORDER BY id DESC LIMIT 1,1";
				$rs = mysql_query($sql);
				while($row = mysql_fetch_assoc($rs)) {
				echo $row['title'] . "<br />";

				}
?></h2>

            <h3>Erstellt am: <?php
				require_once('inc/config.php');
				$sql = "SELECT * FROM w_news ORDER BY id DESC LIMIT 1,1";
				$rs = mysql_query($sql);
				while($row = mysql_fetch_assoc($rs)) {
				echo $row['date'] . "<br />";

				}
?><br /></h3>

          </header>



          <p>

<?php
				require_once('inc/config.php');
				$sql = "SELECT * FROM w_news ORDER BY id DESC LIMIT 1,1";
				$rs = mysql_query($sql);
				while($row = mysql_fetch_assoc($rs)) {
				echo $row['cat'] . "<br />";

				}
?><br />

            <a class="more" href="news2.php">weiter lesen</a>

          </p>

        </section>



        <section>

          <header>

            <img src="img/icon/Design02-icon-big-people.png" alt="">

            <h2>Member Bereich</h2>
<br>
            <h3></h3>

          </header>



          <p>

		  <form id="loginForm" name="loginForm" method="post" action="login-exec.php" class="form form--login">

  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">

    <tr>
		<center>
        <div class="form__field">

          <label class="fontawesome-user" for="login__username"><span class="hidden">Username</span></label>
		<br>
          <input name="login" type="text" class="textfield" id="login" />

        </div>



        <div class="form__field">

          <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>
		<br>
		  <input name="password" type="password" class="textfield" id="password" /></td>

	    </div>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td><input type="submit" name="Submit" value="Login" /></td>
		</center>
    </tr>

  </table>
<br>
  </form>

            <a class="more" href="register.php">Regestrieren.</a>

          </p>

        </section>

      </div>



      <div class="bigteaser clearfix">

        <section>

          <img src="img/icon/Design02-icon-small-wave.png" alt="">

          <h2><font color="#000000">Ideen und Vorschleage</font></h2>



          <p>

            Schreiben sie mir eine E-Mail.<br />

            <a clas="more" href="info.html">zu den Infos</a>

          </p>

        </section>



        <section>

          <img src="img/icon/Design02-icon-small-light.png" alt="">

          <h2><font color="#000000">Neuste Member</font></h2>



          <p>

			<b><?php
				require_once('inc/config.php');
				$sql = "SELECT * FROM w_members ORDER BY member_id DESC LIMIT 1";
				$rs = mysql_query($sql);
				while($row = mysql_fetch_assoc($rs)) {
				echo $row["firstname"].' - '.$row["lastname"].'<br />';
				}?></b>
			
            <a class="more" href="#">weiter lesen</a>

          </p>

        </section>

      </div>

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
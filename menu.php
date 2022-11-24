<?php 
	error_reporting(0);
	SESSION_START();
	include 'config.php';
?>


<div class="logo">
<a href="index.php"><img src="images/logo.png"/></a>

<?php if (!isset($_SESSION["felhasznalonev"])) {?>
<div class="regisztracio"><a href="login.php">Bejelentkezés</a></div>
<?php } ?>
<?php if (!isset($_SESSION["felhasznalonev"])) {?>
<div class="regisztracio"><a href="reg.php">Regisztráció</a></div>
<?php } ?>

<?php if (isset($_SESSION["felhasznalonev"])) {?>
<div class="regisztracio"><a href="exit.php">Kijelentkezés</a></div>
<?php } ?>
<?php if (isset($_SESSION["felhasznalonev"])) {?>
<div class="regisztracio"><a href="#">Profil</a></div>
<?php } ?>

</div>





<div class="menu">

<div id="sub-navigation">
      <ul>
		<li><a href="index.php">Főoldal</a> </li>
		<li><a href="elso.php">Első</a> </li>	
		<li><a href="masodik.php">Második</a> </li>

        
		
      </ul>
      <div id="search">
        <form action="#" method="get" accept-charset="utf-8">
          <label  for="search-field">Keresés</label>
          <input type="text" name="search field" placeholder="Mit keresel?" id="search-field" class="blink search-field"  />
          <input type="submit" value="GO!" class="search-button" />
        </form>
      </div>
    </div>
</div>
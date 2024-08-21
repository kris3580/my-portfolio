<?php 

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$phone_num = $_POST['phone_num'];
$e_mail = $_POST['e_mail'];
$experience = $_POST['experience'];
$program = $_POST['program'];
$education = $_POST['education'];
$restaurant = $_POST['restaurant'];

$message = 
"FORMULAR ANGAJARE LA ÎNVÂRTITE"." (RO)".".\r\n".
"======================================".".\r\n".
"Nume: ".$name.".\r\n".
"Prenume: ".$lastname.".\r\n".
"Telefon: ".$phone_num.".\r\n".
"Poșta Electronică: ".$e_mail.".\r\n".
"Are experiență? : ".$experience.".\r\n".
"Program: ".$program .".\r\n".
"Nivel de educație: ".$education.".\r\n".
"Restaurant: ".$restaurant.".\r\n";

$subject = "FORMULAR ANGAJARE ".$name." ".$lastname;

$mailheader = $name." ".$lastname." <".$e_mail.">";

$recipient = "balan.cristian030@gmail.com";

mail($recipient, $subject, $message, $mailheader);

echo '

<!DOCTYPE html>
<html>
<head>
	<title>La Învârtite</title>
	<link rel="icon" type="image/x-icon" href="../imagini/favicon.ico">
	<link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
</head>
<body>

<div id="navbar">
	<div id="logo"><a href="../Pagina Principală/index_ro.html"><img id="logo_img" src="../imagini/logo2.png"></a></div>	
	<div id="menu">
		<a href="../Pagina Principală/index_ro.html">Pagina Principală</a>
		<a href="../Meniu/index_ro.html">Meniu</a>
		<a href="../Restaurante/index_ro.html">Restaurante</a>
		<a href="../Despre noi/index_ro.html">Despre noi</a>
		<a href="../Carieră/index_ro.html">Carieră</a>
	</div>
	<a href="https://glovoapp.com/md/ro/" target="_blank"><div id="glovo"><img src="../imagini/cart.png">Comandă prin Glovo</div></a>
	<div id="lang_menu">
		<a href="index_ro.html"><img src="../imagini/ro_icon.png"></a>
		<a href="index_ru.html"><img src="../imagini/ru_icon.png"></a>
		<a href="index_en.html"><img src="../imagini/en_icon.png"></a>
	</div>
</div>




<div id="form_background">

<center>
<div id="form" align="center">

	<center>
		<div id="form_info">
			<p id="form_title">FORMULAR APLICARE POSTURI DISPONIBILE <br>"LA ÎNVÂRTITE"<p>
			<p id="form_description">Dacă eşti interesat să lucrezi alături de oameni exact aşa cum eşti şi tu, completează formularul de mai jos!
			Înțelegem importanța datelor personale și de aceea, în scopul selecției candidaților pentru posturile disponibile în cadrul companiei noastre, vom procesa datele dumneavoastră personale: nume, prenume, adresa de e-mail, orașul, și numărul de telefon (mobil). Pentru a putea procesa datele mai sus menționate avem nevoie de consimțământul dumneavoastră expres în acest sens.</p>
		</div>
	</center>

	<form method="POST" action="mail.php">
		<label for="name">Nume: &nbsp; &nbsp;</label>
		<input type="text" name="name" id="name" required><br>

		<label for="lastname">Prenume: &nbsp; &nbsp;</label>
		<input type="text" name="lastname" id="lastname" required><br>

		<label for="phone_num">Telefon: &nbsp; &nbsp;</label>
		<input type="tel" name="phone_num" id="phone_num" required><br>

		<label for="e_mail">Poșta electronică: &nbsp; &nbsp;</label>
		<input type="email" name="e_mail" id="e_mail" required><br>

		<label for="experience">Aveți experiență în domeniu? &nbsp; &nbsp;</label>
        <select id="experience" name="experience" required>
        <option value="" selected>⬇ Selectați ⬇</option>
		<option value="Da">Da</option>
        <option value="Nu">Nu</option>
		</select><br>

		<label for="program">Alegeți programul dorit: &nbsp; &nbsp;</label>
        <select id="program" name="program" required>
        <option value="" selected>⬇ Selectați ⬇</option>
		<option value="8 ore">8 ore</option>
        <option value="6 ore">6 ore</option>
        <option value="4 ore">4 ore</option>
		</select><br>

		<label for="education">Nivelul de studii absolvite: &nbsp; &nbsp;</label>
        <select id="education" name="education" required>
        <option value="" selected>⬇ Selectați ⬇</option>
		<option value="Liceu">Liceu</option>
        <option value="Studii Post-Liceale"> Studii Post-Liceale</option>
        <option value="Universitate">Universitate</option>
        <option value="Master">Master</option>
        <option value="Doctorat">Doctorat</option>
		</select><br>

		<label for="restaurant">Restaurant: &nbsp; &nbsp;</label>
        <select id="restaurant" name="restaurant" required>
        <option value="" selected>⬇ Selectați ⬇</option>
		<option value="La Învârtite Centru">La Învârtite Centru</option>
        <option value="La Învârtite Ciocana">La Învârtite Ciocana</option>
        <option value="La Învârtite Botanica">La Învârtite Botanica</option>
        <option value="La Învârtite Buiucani">La Învârtite Buiucani</option>
        <option value="La Învârtite Rîșcani">La Învârtite Rîșcani</option>
        <option value="La Învârtite Bălți">La Învârtite Bălți</option>
        <option value="La Învârtite Cahul">La Învârtite Cahul</option>
        <option value="La Învârtite Ungheni">La Învârtite Ungheni</option>
        <option value="La Învârtite Soroca">La Învârtite Soroca</option>
        <option value="La Învârtite Orhei">La Învârtite Orhei</option>
		</select><br>

		<input type="checkbox" name="confirmation1" required>
		<label for="confirmation1"> &nbsp; Sunt de acord cu colectarea și procesarea datelor mele cu caracter personal în scopul participării la procesul de selecție al candidaților.</label><br>

		<input type="checkbox" name="confirmation2" required>
		<label for="confirmation2"> &nbsp; Confirm că datele introduse sunt corecte.</label><br><br>

		<input type="submit" name="submit" value="Trimiteți formularul ✓">
	</form>
</div>
</div>
</center>
</div>

<div id="footer">
	<div id="rights">&copy; 2022 La Învârtite. Niciun drept rezervat.</div>
	<div id="socials">
		<a href="#"><img src="../imagini/instagram.png" class="s_images"></a>
		<a href="#"><img src="../imagini/facebook.png" class="s_images"></a>
		<a href="#"><img src="../imagini/youtube.png" class="s_images"></a>
	</div>
	<div id="phone"><a href="tel:+373022121212"><img id="phone_img" src="../imagini/call.png">&nbsp; +373 022-12-12-12</div></a>
</div>

<script type="text/javascript">
alert("V-ați înregistrat cu succes.");
</script>

</body>
</html>

'

?>
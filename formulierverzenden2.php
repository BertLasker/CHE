<?php 

	#**********************************************
	#*****  Contact Formulier vanBetty        *****
	#**********************************************

if(isset($_POST['email'])) {
	
	// Pas deze twee regels aan.
	$email_to = "computerhulpeersel@gmail.com";
	$email_subject = "Aanvraag Service Contract";
	
	
	function died($error) {
		// je foutbericht staat hier
		echo "Het spijt ons, vanwege een fout is het formulier niet verzonden. ";
		echo "Deze fout(en) tonen zich hieronder.<br /><br />";
		echo $error."<br /><br />";
		echo "Ga aub terug om de velden correct in te vullen.<br /><br />";
		die();
	}
	
	// validation expected data exists
	if(!isset($_POST['voornaam']) ||
		!isset($_POST['achternaam']) ||
		!isset($_POST['adres']) ||
		!isset($_POST['postcode']) ||
		!isset($_POST['plaats']) ||
		!isset($_POST['email']) ||
		!isset($_POST['Telefoonnummer'])) {
		died('Het spijt ons, er is een probleem opgetreden bij het verzenden van het formulier.');		
	}
	
	$voornaam = $_POST['voornaam']; // verplicht
	$achternaam = $_POST['achternaam']; // verplicht
	$adres = $_POST['adres']; // verplicht
	$postcode = $_POST['postcode']; // verplicht
	$plaats = $_POST['plaats']; // verplicht
	$email_from = $_POST['email']; // verplicht
	$Telefoonnummer = $_POST['Telefoonnummer']; // verplicht
	
	$error_message = "";
	$email_exp = "^([a-zA-Z0-9]+[a-zA-Z0-9._%\-\+]*@(?:[a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4})$";
  if(!mb_ereg($email_exp,$email_from)) {
  	$error_message .= 'Het emailadres is niet geldig.<br />';
  }  
	$string_exp = "^[a-zA-Z0-9 .'-]+$";
  if(!mb_ereg($string_exp,$voornaam)) {
  	$error_message .= 'De voornaam is niet geldig.<br />';
  }
  if(!mb_ereg($string_exp,$achternaam)) {
  	$error_message .= 'De achternaam is niet geldig.<br />';
  }
  if(!mb_ereg($string_exp,$adres)) {
  	$error_message .= 'Het adres is niet geldig.<br />';
  }
  if(!mb_ereg($string_exp,$postcode)) {
  	$error_message .= 'De postcode is niet geldig.<br />';
  }
  if(!mb_ereg($string_exp,$plaats)) {
  	$error_message .= 'De plaats is niet geldig.<br />';
  }
  $string_exp = "^[0-9 .-]+$";
  if(!mb_ereg($string_exp,$Telefoonnummer)) {
  	$error_message .= 'Het telefoonnummer is niet geldig.<br />';
  }
  if(strlen($error_message) > 0) {
  	died($error_message);
  }
	$email_message = "Gegevens formulier.\n\n";
	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}
	
	$email_message .= "Voornaam: ".clean_string($voornaam)."\n";
	$email_message .= "Achternaam: ".clean_string($achternaam)."\n";
	$email_message .= "Adres: ".clean_string($adres)."\n";
	$email_message .= "Postcode: ".clean_string($postcode)."\n";
	$email_message .= "Plaats: ".clean_string($plaats)."\n";
	$email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "Telefoon: ".clean_string($Telefoonnummer)."\n";
	
	
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>

<!-- Creeer je eigen succes pagina hier -->
<html>
<head>
</head>
	<body style="background: rgb(255, 255, 255); margin: 0pt; " onload="onPageLoad();" onunload="onPageUnload();">
                <p class="paragraph_style"><br /></p>
                <p class="paragraph_style"><br /></p>
                <p class="paragraph_style"><br /></p>
		<div style="height: 133px; width: 236px;  height: 133px; left: 450px; position: absolute; top: 50px; width: 236px; z-index: 1; " class="tinyText style_SkipStroke_1">
            <img src="images/CHE_klein.jpg" alt="" style="border: none; height: 64px; width: 113px; " />
        </div>
		<div style="text-align: center; ">
		<div class="graphic_textbox_layout_style_default">
                <p class="paragraph_style"><br /></p>
                <p class="paragraph_style"><br /></p>
                <p class="paragraph_style"><br /></p>
                <p class="paragraph_style"><br /></p>
                <p class="paragraph_style"><br /></p>
                <p class="paragraph_style">Bedankt voor je bericht. We sturen zo snel mogelijk de gegevens naar je toe.</p>
                <p class="paragraph_style"><br /></p>
				<p class="paragraph_style">Computer Hulp Eersel</p>
                <p class="paragraph_style"><br /></p>
                <p class="paragraph_style"><br /></p>
        <form method="post" action="http://www.computerhulpeersel.nl">
        		<p class="paragraph_style"><input type="submit" name="versturen" value="Terug" /></p>
        </form>
		</div>	
		</div>
	</body>
</html>
<?
}
?>
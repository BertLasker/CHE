<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service Contract</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style-menu.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
   <div class="container">
      <div class="row">
          <div class="col-sm-12 col-md-12">
              <img src="images/Logo_Handyman.jpg" class="img-responsive">
          </div>
      </div>
       <div class="col-sm-4 col-md-3"><br>
       <?php include 'inc/vert-menu.php' ?>
       </div>
       <div class="col-sm-8 col-md-8 col-sm-offset-1 col-md-offset-1">
            <br>
            <ol class="breadcrumb">
                <li><a href="index.php"><small>Welkom</small></a></li>
                <li class="active"><small>Service Contract Aanvraag</small></li>
            </ol><br>
            <h2>Aanvraag service contract</h2><br><br>
            <p class="text-justify">
                Je kunt een email sturen naar: <a title="mailto:computerhulpeersel@gmail.com" href="mailto:computerhulpeersel@gmail.com">computerhulpeersel@gmail.com</a>
                met daarin je adres gegevens, waarna je via de email een bevestiging van ons krijgt met een factuur.<br><br>
                Je kunt ook hierbeneden je gegevens invullen en naar ons opsturen. Ook dan krijg je zo snel mogelijk per email de bevestiging en factuur van ons.<br><br>
                * Alle velden zijn verplicht.<br><br>
	    <form method="post" action="formulierverzenden2.php" class="form-horizontal">
	        <div class="form-group">
                <label for="voornaam" class="col-sm-3 control-label">Voornaam</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="voornaam" placeholder="Voornaam">
                    </div>
            </div>
            <div class="form-group">
                <label for="achternaam" class="col-sm-3 control-label">Achternaam</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="achternaam" placeholder="Achternaam">
                    </div>
            </div>
            <div class="form-group">
                <label for="adres" class="col-sm-3 control-label">Adres</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="adres" placeholder="Adres">
                    </div>
            </div>
            <div class="form-group">
                <label for="postcode" class="col-sm-3 control-label">Postcode</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="postcode" placeholder="Postcode">
                    </div>
            </div>
            <div class="form-group">
                <label for="plaats" class="col-sm-3 control-label">Plaats</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="plaats" placeholder="Plaats">
                    </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email adres</label>
                    <div class="col-sm-6">
                      <input type="email" class="form-control" id="email" placeholder="Email adres">
                    </div>
            </div>
            <div class="form-group">
                <label for="Telefoonnummer" class="col-sm-3 control-label">Telefoonnummer</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="Telefoonnummer" placeholder="Telefoonnummer">
                    </div>
            </div>
            <div class="col-md-6 col-md-offset-3">
               <button type="reset" class="btn btn-danger">Alles leegmaken</button>
    	       <button type="submit" name="versturen" class="btn btn-success">Verstuur aanvraag</button>
    	    </div><br><br><br>
		</form>
		</div>
       
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
   <br><br><br></div>
    <?php include 'inc/footer.php' ?>
</body>
</html>
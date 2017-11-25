<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="refresh" content="30";>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KrankenNet Insert</title>

    <!-- Bootstrap core CSS -->
    <link href="https://blackrockdigital.github.io/startbootstrap-bare/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        body {
            padding-top: 54px;
        }
        @media (min-width: 992px) {
            body {
                padding-top: 56px;
            }
        }

    </style>

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="img/krake.ico" height="20%" width ="20%"> KrakenNet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Search  <span class="glyphicon glyphicon-search"></span>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> <span class="glyphicon glyphicon-plus-sign"></span> Add Net</a>
                </li>
            </ul>
        </div>
    </div>
  </nav>

  <form class="form-horizontal" action="handler/insertH.php" method="GET">
    <fieldset>

    <!-- Form Name -->
    <legend>Form Name</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="network_name">Netzwerk</label>  
      <div class="col-md-4">
        <input id="textinput" name="network_name" placeholder="Name des Netzwerks" class="form-control input-md" required="" type="text">
        <span class="help-block">help</span>  
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="network_url">Link</label>  
      <div class="col-md-4">
        <input id="Link" name="network_url" placeholder="Link" class="form-control input-md" type="text">
        <span class="help-block">help</span>  
      </div>
    </div>

    <!-- Multiple Checkboxes (inline) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="checkboxes">Daten</label>
      <div class="col-md-4">

        <input name="data_photos" id="data_photos" type="checkbox">
        <label class="checkbox-inline" for="data_photos">Fotos</label>

        <input name="data_names" id="data_names" type="checkbox">
        <label class="checkbox-inline" for="data_names">Namen</label>

        <input name="data_contacts" id="data_contacts" type="checkbox">
        <label class="checkbox-inline" for="data_contacts">Kontakte</label>

      </div>
    </div>

    <!-- Multiple Checkboxes (inline) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="checkboxes">Android</label>
      <div class="col-md-4">
        
        <input name="android_gps" id="android_gps" type="checkbox"> 
        <label class="checkbox-inline" for="android_gps">GPS</label>

        <input name="android_photos" id="android_photos" type="checkbox">
        <label class="checkbox-inline" for="android_photos">Fotos</label>
        
        <input name="android_camera" id="android_camera" type="checkbox">
        <label class="checkbox-inline" for="android_camera">Kamara</label>
        
        <label class="checkbox-inline" for="checkboxes-3">
        <input name="checkboxes" id="checkboxes-3" type="checkbox">Kontakte</label>
      </div>
    </div>

    <!-- Multiple Checkboxes (inline) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="checkboxes">IOS</label>
      <div class="col-md-4">

          <input name="checkboxes" id="checkboxes-0" value="1" type="checkbox">
          <label class="checkbox-inline" for="checkboxes-0">GPS</label>
      
          <input name="checkboxes" id="checkboxes-1" value="2" type="checkbox">
          <label class="checkbox-inline" for="checkboxes-1">Galarie</label>
                
          <input name="checkboxes" id="checkboxes-2" value="3" type="checkbox">
          <label class="checkbox-inline" for="checkboxes-2">Kamera</label>

          <input name="checkboxes" id="checkboxes-3" value="4" type="checkbox">
          <label class="checkbox-inline" for="checkboxes-3">Kontakte</label>

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Beziehungen</label>  
      <div class="col-md-4">
        <input id="textinput" name="textinput" placeholder="Bsp.: Facebook, Instagram" class="form-control input-md" type="text">
        <span class="help-block">help</span>  
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Impressum link:</label>  
      <div class="col-md-4">
        <input id="textinput" name="textinput" placeholder="https://" class="form-control input-md" type="text">
        <span class="help-block">help</span>  
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">AGB link:</label>  
      <div class="col-md-4">
        <input id="textinput" name="textinput" placeholder="https://" class="form-control input-md" type="text">
        <span class="help-block">help</span>  
      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="singlebutton"></label>
      <div class="col-md-4">
        <button id="singlebutton" name="singlebutton" class="btn btn-success">SAVE</button>
      </div>
    </div>

    </fieldset>
  </form>

  <script src="https://blackrockdigital.github.io/startbootstrap-bare/vendor/jquery/jquery.min.js"></script>
  <script src="https://blackrockdigital.github.io/startbootstrap-bare/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
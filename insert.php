
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>KrakenNet</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/3.3/examples/starter-template/starter-template.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">KrakenNet</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Search <span class="glyphicon glyphicon-search"></span></a></li>
                <li class="active"><a href="insert.php">Add Network <span class="glyphicon glyphicon-plus-sign"></span></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<style type='text/css'>
    body {<!--from  w w  w . ja  va  2 s.  c  o m-->
    margin: 10px;
    }

    .input-group-m>.form-control, .input-group-m>.input-group-addon,
    .input-group-m>.input-group-btn>.btn {
        height: 25px;
    }
    .form-group input[type="checkbox"] {
        display: none;
    }

    .form-group input[type="checkbox"] + .btn-group > label span {
        width: 10px;
    }

    .form-group input[type="checkbox"] + .btn-group > label span:first-child {
        display: none;
    }
    .form-group input[type="checkbox"] + .btn-group > label span:last-child {
        display: inline-block;
    }

    .form-group input[type="checkbox"]:checked + .btn-group > label span:first-child {
        display: inline-block;
    }
    .form-group input[type="checkbox"]:checked + .btn-group > label span:last-child {
        display: none;
    }
</style>

<div class="container">
    <br/><br/>
    <div class="jumbotron">


        <form class="form-horizontal" action="handler/insertH.php" method="GET">
            <fieldset>
                <!-- Form Name -->
                <h2>Add new Network </h2>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="network_name">Netzwerk</label>
                    <div class="col-md-4">
                        <input id="textinput" name="network_name" placeholder="Name des Netzwerks" class="form-control input-md" required="" type="text">
                     </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="network_url">Link</label>
                    <div class="col-md-4">
                        <input id="Link" name="network_url" placeholder="Link" class="form-control input-md" type="text">
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

                        <label class="checkbox-inline" for="android_contacts">
                            <input name="android_contacts" id="android_contacts" type="checkbox">Kontakte</label>

                    </div>
                </div>

                <!-- Multiple Checkboxes (inline) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="checkboxes">IOS</label>
                    <div class="col-md-4">

                        <input name="ios_gps" id="ios_gps" type="checkbox">
                        <label class="checkbox-inline" for="ios_gps">GPS</label>

                        <input name="ios_photos" id="ios_photos" type="checkbox">
                        <label class="checkbox-inline" for="ios_photos">Fotos</label>

                        <input name="ios_camera" id="ios_camera" type="checkbox">
                        <label class="checkbox-inline" for="ios_camera">Kamara</label>

                        <label class="checkbox-inline" for="ios_contacts">
                            <input name="ios_contacts" id="ios_contacts" type="checkbox">Kontakte</label>

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Beziehungen <a data-toggle="tooltip" data-placement="top" title="Comma seperated!"><span class="glyphicon glyphicon-question-sign"></span></a>
                    </label>
                    <div class="col-md-4">
                        <input id="textinput" name="relations" placeholder="Bsp.: Facebook, Instagram" class="form-control input-md" type="text">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="imprint_url">Impressum link:</label>
                    <div class="col-md-4">
                        <input id="textinput" name="imprint_url" placeholder="https://" class="form-control input-md" type="text">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="tos_url">AGB link:</label>
                    <div class="col-md-4">
                        <input id="textinput" name="tos_url" placeholder="https://" class="form-control input-md" type="text">
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
    </div>




    <div class="form-group badge-checkboxes">
        <label>Select some options - inline checkboxes</label>
        <div>
            <label class="checkbox-inline">
                <input type="checkbox" value="">
                <span class="badge">Option 1</span>
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" value="" checked="">
                <span class="badge">Option 2</span>
            </label>
            <label class="checkbox-inline disabled">
                <input type="checkbox" value="" disabled="">
                <span class="badge">Option 3</span>
            </label>
            <label class="checkbox-inline disabled">
                <input type="checkbox" value="" disabled="" checked="">
                <span class="badge">Option 4</span>
            </label>
        </div>
    </div>


</div><!-- /.container -->



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://getbootstrap.com/docs/3.3/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>



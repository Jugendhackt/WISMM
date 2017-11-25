
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

  <script type="text/javascript">
    
    function trigger_theft() {
      
      cB = document.getElementById("theft_group");

      if (cB.style.display == "none") {
        cB.style.display = "";
      }else{
        cB.style.display = "none";
      }

    }

  </script>

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

    .badge-checkboxes .checkbox input[type="checkbox"],
    .badge-checkboxes label.checkbox-inline input[type="checkbox"] {
        /*  Hide the checkbox, but keeps tabbing to it possible. */
        position: absolute;
        clip: rect(0 0 0 0);
    }

    .badge-checkboxes .checkbox label,
    .badge-checkboxes label.checkbox-inline {
        padding-left:0; /* Remove space normally used for the checkbox */
    }

    .badge-checkboxes .checkbox input[type="checkbox"]:checked:focus + .badge,
    .badge-checkboxes label.checkbox-inline input[type="checkbox"]:checked:focus + .badge {
        box-shadow:0 0 2pt 1pt #333;  /* Outline when checkbox is focused/tabbed to */
    }

    .badge-checkboxes .checkbox input[type="checkbox"]:focus + .badge,
    .badge-checkboxes label.checkbox-inline input[type="checkbox"]:focus + .badge {
        box-shadow:0 0 2pt 1pt #999;  /* Outline when checkbox is focused/tabbed to */
    }

    .badge-checkboxes .checkbox input[type="checkbox"] + .badge,
    .badge-checkboxes label.checkbox-inline input[type="checkbox"] + .badge {
        border:1px solid #999; /* Add outline to badge */
        
        /* Make text in badge not selectable */
       -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Give badges for disabled checkboxes an opacity of 50% */
    .badge-checkboxes .checkbox input[type="checkbox"]:disabled + .badge,
    .badge-checkboxes label.checkbox-inline input[type="checkbox"]:disabled + .badge
    {
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
      filter: alpha(opacity=50);
      -moz-opacity: 0.5;
      -khtml-opacity: 0.5;
      opacity: 0.5;   
    }

    /* Remove badge background-color and set text color for not checked options */
    .badge-checkboxes .checkbox input[type="checkbox"]:not(:checked) + .badge,
    .badge-checkboxes label.checkbox-inline input[type="checkbox"]:not(:checked) + .badge{
        background-color:Transparent;
        color:#999;
    }

    /*The following css only required for Bootstrap <= 3.1.0 */
    .badge-checkboxes .checkbox {
        padding-left:0; /* Remove space normally used for the checkbox */
    }
    .badge-checkboxes .disabled label,
    .badge-checkboxes label.checkbox-inline.disabled {
        cursor:not-allowed
    }

    .custom-checkbox {
  min-height: 1rem;
  padding-left: 0;
  margin-right: 0;
  cursor: pointer; 
}
  .custom-checkbox .custom-control-indicator {
    content: "";
    display: inline-block;
    position: relative;
    width: 30px;
    height: 10px;
    background-color: #818181;
    border-radius: 15px;
    margin-right: 10px;
    -webkit-transition: background .3s ease;
    transition: background .3s ease;
    vertical-align: middle;
    margin: 0 16px;
    box-shadow: none; 
  }
    .custom-checkbox .custom-control-indicator:after {
      content: "";
      position: absolute;
      display: inline-block;
      width: 18px;
      height: 18px;
      background-color: #f1f1f1;
      border-radius: 21px;
      box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
      left: -2px;
      top: -4px;
      -webkit-transition: left .3s ease, background .3s ease, box-shadow .1s ease;
      transition: left .3s ease, background .3s ease, box-shadow .1s ease; 
    }
  .custom-checkbox .custom-control-input:checked ~ .custom-control-indicator {
    background-color: #84c7c1;
    background-image: none;
    box-shadow: none !important; 
  }
    .custom-checkbox .custom-control-input:checked ~ .custom-control-indicator:after {
      background-color: #84c7c1;
      left: 15px; 
    }
  .custom-checkbox .custom-control-input:focus ~ .custom-control-indicator {
    box-shadow: none !important; 
  }


</style>

<div class="container">
    <br/><br/>
    <div class="jumbotron">


        <form class="form-horizontal" action="" method="GET">
            <fieldset>
                <!-- Form Name -->
                <h2>Add new Network </h2>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="network_name">Network</label>
                    <div class="col-md-4">
                        <input id="textinput" name="network_name" placeholder="Name of the Network" class="form-control input-md" required="" type="text">
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
                <div class="form-group badge-checkboxes">
                    <label class="col-md-4 control-label" for="checkboxes">Data</label>
                    <div class="col-md-4">

                        <label class="checkbox-inline">
                            <input type="checkbox" name="data_photos">
                            <span class="badge">Pictures</span>
                        </label>
                                
                        <label class="checkbox-inline">
                            <input type="checkbox" name="data_names">
                            <span class="badge">Contacts</span>
                        </label>

                        <label class="checkbox-inline">
                            <input type="checkbox" name="data_contacts">
                            <span class="badge">Messages</span>
                        </label>

                    </div>
                </div>

                <!-- Multiple Checkboxes (inline) -->
                <div class="form-group badge-checkboxes">
                    <label class="col-md-4 control-label" for="checkboxes">Android</label>
                    <div class="col-md-4">

                        <label class="checkbox-inline">
                            <input type="checkbox" name="android_gps">
                            <span class="badge">GPS</span>
                        </label>
                                
                        <label class="checkbox-inline">
                            <input type="checkbox" name="android_photos">
                            <span class="badge">Pictures</span>
                        </label>

                        <label class="checkbox-inline">
                            <input type="checkbox" name="android_camera">
                            <span class="badge">Camera</span>
                        </label>
                                
                        <label class="checkbox-inline">
                            <input type="checkbox" name="android_contacts">
                            <span class="badge">Contacts</span>
                        </label>

                    </div>
                </div>

                <!-- Multiple Checkboxes (inline) -->
                <div class="form-group badge-checkboxes">
                    <label class="col-md-4 control-label" for="checkboxes">IOS</label>
                    <div class="col-md-4">

                        <label class="checkbox-inline">
                            <input type="checkbox" name="ios_gps">
                            <span class="badge">GPS</span>
                        </label>
                                
                        <label class="checkbox-inline">
                            <input type="checkbox" name="ios_photos">
                            <span class="badge">Pictures</span>
                        </label>

                        <label class="checkbox-inline">
                            <input type="checkbox" name="ios_camera">
                            <span class="badge">Camera</span>
                        </label>
                                
                        <label class="checkbox-inline">
                            <input type="checkbox" name="ios_contacts">
                            <span class="badge">Contacts</span>
                        </label>

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Relations <a data-toggle="tooltip" data-placement="top" title="Comma seperated!"><span class="glyphicon glyphicon-question-sign"></span></a>
                    </label>
                    <div class="col-md-4">
                        <input id="textinput" name="relations" placeholder="Example: Facebook, Instagram" class="form-control input-md" type="text">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="imprint_url">Imprint link:</label>
                    <div class="col-md-4">
                        <input id="textinput" name="imprint_url" placeholder="https://" class="form-control input-md" type="text">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="tos_url">terms and conditions link:</label>
                    <div class="col-md-4">
                        <input id="textinput" name="tos_url" placeholder="https://" class="form-control input-md" type="text">
                        <span class="help-block">help</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="checkboxes">previous data thefts?</label>
                    <div class="col-md-4">

                    <label class="custom-control custom-checkbox">
                        <input onchange="trigger_theft()" type="checkbox" class="custom-control-input" hidden="hidden">
                        <span class="custom-control-indicator"></span>
                    </label>

                    </div>
                </div>

                <div class="form-group" id="theft_group" style="display: none">
                    <label class="col-md-4 control-label" for="tos_url">source url:</label>
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



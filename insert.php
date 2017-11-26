
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

    <title>WISMM</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/3.3/examples/starter-template/starter-template.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">


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
            <a class="navbar-brand" href="#">WISMM</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Search <span class="glyphicon glyphicon-search"></span></a></li>
                <li class="active"><a href="insert.php">Add Network <span class="glyphicon glyphicon-plus-sign"></span></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    <br/><br/>
    <div class="jumbotron">


        <form class="form-horizontal" action="handler/insertH.php" method="GET">
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
                        <input name="theft_trigger" onchange="trigger_theft()" type="checkbox" class="custom-control-input" hidden="hidden">
                        <span class="custom-control-indicator"></span>
                    </label>

                    </div>
                </div>

                <div class="form-group" id="theft_group" style="display: none">
                    <label class="col-md-4 control-label" for="theft_desc">theft desc:</label>
                    <div class="col-md-4">

                        <textarea class="form-control input-md" name="theft_desc"></textarea>

                        <label class="col-md-4 control-label" for="theft_url">theft url:</label>


                        <input id="textinput" name="theft_url" placeholder="https://" class="form-control input-md" type="text">

                        <label class="col-md-4 control-label" for="theft_url">
                            theft date:</label>


                        <input name="theft_date" type="date">



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
    </div>b

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



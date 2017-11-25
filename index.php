<?php

    require "handler/dbH.php";


    $out_sq = "Please search";

    if(isset($_GET['search']) AND !empty($_GET['search'])){
        
        $sq = $_GET['search'];

        $result = $db->sendQuery("SELECT * FROM `network` WHERE `name` = '$sq'");

        $rows = mysqli_num_rows($result);

        //echo "<script type='text/javascript'>alert('$rows');</script>";

        if ($rows > 0) {
            $found = true;
            $out_sq = "Search results for " . $sq;
        }else{
            $found = false;
            $out_sq = "There are no search results for " . $sq;
        }

    }else{
         echo '<p>GET empty</p>';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

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
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">KrakenNet</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Search <span class="glyphicon glyphicon-search"></span></a></li>
                <li><a href="insert.php">Add Network <span class="glyphicon glyphicon-plus-sign"></span></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<!-- Custom Accordion Style-->
<style>
    .panel-group .panel-heading + .panel-collapse > .panel-body {
        border: 1px solid #ddd;
    }
    .panel-group,
    .panel-group .panel,
    .panel-group .panel-heading,
    .panel-group .panel-heading a,
    .panel-group .panel-title,
    .panel-group .panel-title a,
    .panel-group .panel-body,
    .panel-group .panel-group .panel-heading + .panel-collapse > .panel-body {
        border-radius: 2px;
        border: 0;
    }
    .panel-group .panel-heading {
        padding: 0;
    }
    .panel-group .panel-heading a {
        display: block;
        background: #668bb1;
        color: #ffffff;
        padding: 15px;
        text-decoration: none;
        position: relative;
    }
    .panel-group .panel-heading a.collapsed {
        background: #9eceff;;
        color: inherit;
    }
    .panel-group .panel-heading a:after {
        content: '-';
        position: absolute;
        right: 20px;
        top:5px;
        font-size:30px;
    }
    .panel-group .panel-heading a.collapsed:after {
        content: '+';
    }
    .panel-group .panel-collapse {
        margin-top: 5px !important;
    }
    .panel-group .panel-body {
        background: #F5F5F5;
        padding: 15px;
    }
    .panel-group .panel {
        background-color: transparent;
    }
    .panel-group .panel-body p:last-child,
    .panel-group .panel-body ul:last-child,
    .panel-group .panel-body ol:last-child {
        margin-bottom: 0;
    }
</style>


<div class="container">

    <div class="starter-template">


        <!-- <img src="./images/KrakenNetz.png" class="img-responsive" alt="KrakenNetzKrake"> -->

        <h2>Stay transparent - Stay safe - Stay alpacas!</h2>
        <div class="row">
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <form method="get">
                        <div class="input-group input-group-lg">
                            <input type="text" name="search" class="form-control" placeholder="Search Network...">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <br/>
                <br/>
                <div class="jumbotron">

                    <?php if ($found){?>

                    <br/>
                <h2><?php echo $out_sq ?> <a href="" <span class="glyphicon glyphicon-new-window"></span></h2>
                <br/>
                <br/>
                

        <div class="panel-group" role="tablist" aria-multiselectable="true">

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Data
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <ul>
                            <li>Pictures</li>
                            <li>Name</li>
                            <li>Location</li>
                            <li>...</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Relations
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Permissions
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Previous Data Thefts
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>


    </div>

                    <?php } else {?>

                        <h1>Search empty or no result found!</h1>

                    <?php } ?>

</div><!-- /.jumbo -->
            </div>
        </div>
    </div>
</div><!-- /.container-->


<!-- Bootstrap core JavaScript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://getbootstrap.com/docs/3.3/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
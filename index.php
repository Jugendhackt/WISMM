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
        #imaginary_container{
                                  margin-top:20%; /* Don't copy this */
                              }
        .stylish-input-group .input-group-addon{
            background: white !important;
        }
        .stylish-input-group .form-control{
            border-right:0;
            box-shadow:0 0 0;
            border-color:#ccc;
        }
        .stylish-input-group button{
            border:0;
            background:transparent;
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

<div class="jumbotron">

    <div class="container">

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div id="imaginary_container">
                    <div class="input-group stylish-input-group">
                        <input type="text" class="form-control"  placeholder="Search" >
                        <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<script src="https://blackrockdigital.github.io/startbootstrap-bare/vendor/jquery/jquery.min.js"></script>
<script src="https://blackrockdigital.github.io/startbootstrap-bare/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
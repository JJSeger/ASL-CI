<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Profile Page</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        p{
            font-size: large;
            font-weight: 300;
        }
        body {
            text-align: center;
            background-color: white;
        }


        input{
            width:80%;
            font-size: x-large;
            height:1em;
            width:5em:
        }
        select{font-size: x-large;
            height:1.3em;
            width:5em:
        }

        #vid1,#vid4{
            margin-left: .1%;
            float:left;
        }
        #vid2,#vid5{
            margin-left: .8%;
            float:left;
        }
        #vid3,#vid6{

            float:right;
        }
        #vid4,#vid5,#vid6{
            margin-top: .8%;
        }

    </style>
</head>
<body>

<h1> The Wooden Nickel Profile Page:</h1>
<div id="div1" class="col-lg-8 col-lg-offset-2">



    <?php if(isset($_SESSION['success'])){?>
        <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
    <?php

    } ?>
    Hello, <?php echo $_SESSION['username']; ?>! This is your profile page. Please feel free to view
    any of our in house movies or you can browse any of our premium titles within the members only store.
    Thank you and welcome!!

    <br><br>


</div>

<a href="http://localhost:8888/ASL-CI/index.php/auth/login">Logout</a><br>
<h2>Wooden Nickel In House Movies<br>
    <!----------------------Embedded videos------------------------->
    <iframe id="vid1" width="541" height="315" src="https://www.youtube.com/embed/FxLOloOPCZI" frameborder="0" allowfullscreen></iframe>
    <iframe id="vid2" width="541" height="315" src="https://www.youtube.com/embed/6qpudAhYhpc" frameborder="0" allowfullscreen></iframe>
    <iframe id="vid3" width="541" height="315" src="https://www.youtube.com/embed/RMx8FIT89tA" frameborder="0" allowfullscreen></iframe><br>

    <iframe id="vid4" width="541" height="315" src="https://www.youtube.com/embed/K5mnqxwErTk" frameborder="0" allowfullscreen></iframe>
    <iframe id="vid5" width="541" height="315" src="https://www.youtube.com/embed/OtzhxdK6Iuw" frameborder="0" allowfullscreen></iframe>
    <iframe id="vid6" width="541" height="315" src="https://www.youtube.com/embed/tfTaplg8n0I" frameborder="0" allowfullscreen></iframe><br>

</h2>











<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>
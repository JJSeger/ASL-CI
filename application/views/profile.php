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
        #div1{
            font-size: x-large;
            padding-top: 5%;
            text-align: center;
            margin-left:38%;
            height:auto;
            width:25%;
            background-color: lightslategray;
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
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


        #but{
            margin-top: 9%;
            margin-bottom: 4%;
            color:white;
            font-size:larger;
            text-align: center;
            background-color:#2b669a;
        }
        #but:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }{

        }
    </style>
</head>
<body>

<h1>Welcome to your Wooden Nickel Profile Page:</h1>
<div id="div1" class="col-lg-8 col-lg-offset-2">








    <?php if(isset($_SESSION['success'])){?>
        <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
    <?php

    } ?>
    Hello, <?php echo $_SESSION['username']; ?>

    <br><br>


</div>

<a href="http://localhost:8888/ASL-CI/index.php/auth/login">Logout</a>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Members Page</title>

    <!-- Bootstrap -->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>




        p {
            font-size: large;
            font-weight: 300;
        }

        body {
            text-align: center;
            background-color: white;
        }

        select {
            font-size: x-large;
            height: 1.3em;
            width: 5em:
        }

        #vid1, #vid4 {
            margin-left: .1%;
            float: left;
        }

        #vid2, #vid5 {
            margin-left: .8%;
            float: left;
        }

        #vid3, #vid6 {

            float: right;
        }

        #vid4, #vid5, #vid6 {
            margin-top: .8%;
        }

        #vid6 {
            margin-bottom: 3%;
        }

        #vid5 {
            margin-bottom: 1.5%;
        }

        img {
            width: 250px;
            height: 175px;
        }



        #input1 {
            margin-left: 18%;
            text-align: center;
            font-size: xx-large;
            height: auto;
            width: 10em;
            float: left;
            display: inline;

        }

        #input2 {
            margin-left: 1%;
            margin-top: -1.3%;
            text-align: center;
            font-size: xx-large;
            float: left;
            height: auto;
            width: 10em;
            display: inline;
        }
        section{
            margin-left: 0;
            margin-right: 0;
            padding-top: 2%;
            height: 9em;
            width: 100%;
            background-color:#e5ebeb;
        }

        #but {
            height: auto;
            width: 5em;
            float: left;
            margin-left: 1%;
            margin-top: -2.8%;
            color: white;
            font-size: xx-large;
            text-align: center;
            background-color: #2b669a;
        }

        #but:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);

        {


    </style>
</head>
<body>
<section>
    <input id="input1" name="username" type="text" placeholder="Enter Username">
    <br/>
    <input id="input2" name="password" type="password" placeholder="Enter Password">
    <br/>
    <button id="but" name="submit" type="submit" class="btn btn-default">Login</button>
</section>


<h1> The Wooden Nickel Members Area:</h1>
<div id="div1">


    <?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
        <?php

    } ?>
    Hello, <?php echo $_SESSION['username']; ?>! This is your members only page. Please feel free to view
    any of our in house movies or you can browse any of our premium titles within the members only store.
    Thank you and welcome!!

    <br><br>


</div>

<a href="http://localhost:8888/ASL-CI/index.php/auth/login">Logout</a><br>
<h2>Wooden Nickel In House Movies<br></h2>
<!----------------------Embedded videos------------------------->
<iframe id="vid1" width="541" height="315" src="https://www.youtube.com/embed/FxLOloOPCZI" frameborder="0"
        allowfullscreen></iframe>
<iframe id="vid2" width="541" height="315" src="https://www.youtube.com/embed/6qpudAhYhpc" frameborder="0"
        allowfullscreen></iframe>
<iframe id="vid3" width="541" height="315" src="https://www.youtube.com/embed/RMx8FIT89tA" frameborder="0"
        allowfullscreen></iframe>
<br>

<iframe id="vid4" width="541" height="315" src="https://www.youtube.com/embed/K5mnqxwErTk" frameborder="0"
        allowfullscreen></iframe>
<iframe id="vid5" width="541" height="315" src="https://www.youtube.com/embed/I1uRsYWetrc" frameborder="0"
        allowfullscreen></iframe>
<iframe id="vid6" width="541" height="315" src="https://www.youtube.com/embed/tfTaplg8n0I" frameborder="0"
        allowfullscreen></iframe>
<br>

<br/>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="cart-block">
                <form action="cart/update" method="post">
                    <table cellpadding="6" cellspacing="1" style="width:100%" border="0">
                        <tr>
                            <th>QTY</th>
                            <th>Item Description</th>
                            <th style="text-align:right">Item Price</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="right"><strong>Total</strong></td>
                            <td class="right" style="text-align:right">$</td>
                        </tr>
                    </table>
                    <br>
                    <p><button class="btn btn-default" type="submit">Update Cart</button>
                    <a class="btn btn-default" href="cart">Go To Cart</a></p>
                </form>
            </div>
        </div>
    </div>
</div>




<div class="panel panel-default panel-list">
    <div class="panel-heading panel-heading-dark">
        <h3 class="panel-title">
            Categories
        </h3>
    </div>
                    <!-----List Group-------->

    <ul class="list-group">
        <li class="list-group-item"> <a href="#">Horror</a></li>
        <li class="list-group-item"> <a href="#">Action</a></li>
        <li class="list-group-item"> <a href="#">Drama</a></li>
        <li class="list-group-item"> <a href="#">Comedy</a></li>
        <li class="list-group-item"> <a href="#">Mystery</a></li>
    </ul>

</div>


                            <!----------Premium products-------->

<div class="panel panel-default">
    <div class="panel-heading panel-heading-dark">
        <h3 class="panel-title">Our Premium Titles</h3>
    </div>
    <div class="panel-body">
        <div class="row">



            <div class="col-md-4 game">
                <div class="'movie-price">$20.99</div>
                <a href="product.html">
                    <img src="http://localhost:8888/ASL-CI/assets/images/void.jpg"/>
                </a>
                <div class="movie-title">
                    The Void
                </div>
                <div class="movie-add">
                    <button class="btn btn-primary" type="submit">Add To Cart</button>
                </div>
            </div>



            <div class="col-md-4 game">
                <div class="'movie-price">$20.99</div>
                <a href="product.html">
                    <img src="http://localhost:8888/ASL-CI/assets/images/ghost.jpg"/>
                </a>
                <div class="movie-title">
                    The Void
                </div>
                <div class="movie-add">
                    <button class="btn btn-primary" type="submit">Add To Cart</button>
                </div>
            </div>



            <div class="col-md-4 game">
                <div class="'movie-price">$20.99</div>
                <a href="product.html">
                    <img src="http://localhost:8888/ASL-CI/assets/images/norman.jpg"/>
                </a>
                <div class="movie-title">
                    The Void
                </div>
                <div class="movie-add">
                    <button class="btn btn-primary" type="submit">Add To Cart</button>
                </div>
            </div>



            <div class="col-md-4 game">
                <div class="'movie-price">$20.99</div>
                <a href="product.html">
                    <img src="http://localhost:8888/ASL-CI/assets/images/captain.jpg"/>
                </a>
                <div class="movie-title">
                    The Void
                </div>
                <div class="movie-add">
                    <button class="btn btn-primary" type="submit">Add To Cart</button>
                </div>
            </div>



            <div class="col-md-4 game">
                <div class="'movie-price">$20.99</div>
                <a href="product.html">
                    <img src="http://localhost:8888/ASL-CI/assets/images/disme.jpg"/>
                </a>
                <div class="movie-title">
                    The Void
                </div>
                <div class="movie-add">
                    <button class="btn btn-primary" type="submit">Add To Cart</button>
                </div>
            </div>




            <div class="col-md-4 game">
                <div class="'movie-price">$20.99</div>
                <a href="product.html">
                    <img src="http://localhost:8888/ASL-CI/assets/images/life.jpg"/>
                </a>
                <div class="movie-title">
                    The Void
                </div>
                <div class="movie-add">
                    <button class="btn btn-primary" type="submit">Add To Cart</button>
                </div>
            </div>

        </div>
    </div>



</div>





<br/>

<!--Products--->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>





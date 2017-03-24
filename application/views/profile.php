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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>


    <![endif]-->

    <style>


        p {
            text-align: center;

            font-size: x-large;
            font-weight: 300;
        }
        #p1 {
            margin-top: -1%;
            text-align: center;
            font-size: small;
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



        section {
            margin-left: 0;
            margin-right: 0;
            padding-top: 2%;
            height: 9em;
            width: 100%;
            background-color: #e5ebeb;
        }

        #th1{
            padding-left:1%;
        }

        #th2{
            padding-left:45%;
        }

        #th3{
            padding-left:45%;
        }

        #td1{
            padding-left:45%;
        }

        #td2{
            padding-left:45%;
        }







    </style>
</head>
<body>


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
<!----------------------Embedded videos----------------------->

<iframe id="vid1" width="541" height="315" src="https://www.youtube.com/embed/FxLOloOPCZI" frameborder="0"
        allowfullscreen></iframe>
<iframe id="vid2" width="541" height="315" src="https://www.youtube.com/embed/6qpudAhYhpc" frameborder="0"
        allowfullscreen></iframe>
<iframe id="vid3" width="541" height="315" src="https://www.youtube.com/embed/RMx8FIT89tA" frameborder="0"
        allowfullscreen></iframe>
<br>

<iframe id="vid4" width="541" height="315" src="https://www.youtube.com/embed/K5mnqxwErTk" frameborder="0"
        allowfullscreen></iframe>
<iframe id="vid5" width="541" height="315" src="https://www.youtube.com/embed/YwnVYzyAQoI" frameborder="0"
        allowfullscreen></iframe>
<iframe id="vid6" width="541" height="315" src="https://www.youtube.com/embed/tfTaplg8n0I" frameborder="0"
        allowfullscreen></iframe>


<!---------Categories section---------->

<div class="panel panel-default panel-list"
     style=" font-size: xx-large; float: left; width:25%; margin-left:3%; margin-top: 2%; ">
    <div class="panel-heading panel-heading-dark">
        <h3 class="panel-title">
            Categories
        </h3>
    </div>
    <!-----List Group-------->

    <ul class="list-group">
        <li class="list-group-item"><a href="#">Horror</a></li>
        <li class="list-group-item"><a href="#">Action</a></li>
        <li class="list-group-item"><a href="#">Drama</a></li>
        <li class="list-group-item"><a href="#">Comedy</a></li>
        <li class="list-group-item"><a href="#">Mystery</a></li>
    </ul>

</div>


<!----------Premium products-------->


<div class="panel panel-default" style="width:64%; float:right; margin-right: 3%; margin-top:.5%">
    <div class="panel-heading panel-heading-dark">
        <h3 class="panel-title">Our Premium Titles</h3>
    </div>
    <div class="panel-body" style="width:98%; float:right; margin-top:3%; ">
        <div class="row">


            <div class="col-md-4 movie">


                    <img src="http://localhost:8888/ASL-CI/assets/images/void.jpg"
                         style=" height: 25em; width: 20em; "/>

                <div class="movie-title">
                    The Void
                </div>
                <div class="'movie-price">$18.99</div>
                <div class="movie-add">
                    <button class="btn btn-primary" type="submit">Add To Cart</button>
                </div>
            </div>


            <div class="col-md-4 movie">


                    <img src="http://localhost:8888/ASL-CI/assets/images/ghost.jpg"
                         style=" height: 25em; width: 20em; "/>

                <div class="movie-title">
                    Ghost in the Shell
                </div>
                <div class="'movie-price">$20.99</div>
                <div class="movie-add">
                    <button class="btn btn-primary" type="submit">Add To Cart</button>
                </div>
            </div>


            <div class="col-md-4 movie">


                    <img src="http://localhost:8888/ASL-CI/assets/images/norman.jpg"
                         style=" height: 25em; width: 20em; "/>

                <div class="movie-title">
                    Norman
                </div>
                <div class="'movie-price">$15.99</div>
                <div class="movie-add">
                    <button class="btn btn-primary" type="submit">Add To Cart</button>
                </div>
            </div>


            <div class="col-md-4 movie" style="margin-top: 2%;">


                    <img src="http://localhost:8888/ASL-CI/assets/images/captain.jpg"
                         style=" height: 25em; width: 20em; "/>

                <div class="movie-title">
                    Captain Underpants: The First Epic Movie
                </div>
                <div class="'movie-price">$10.99</div>
                <div class="movie-add">
                    <button class="btn btn-primary" type="submit">Add To Cart</button>
                </div>
            </div>


            <div class="col-md-4 movie" style=" margin-top: 2%;" >


            <img src="http://localhost:8888/ASL-CI/assets/images/disme.jpg" style=" height: 25em; width: 20em; "/>

            <div class="movie-title">
                Despicable Me 3
            </div>
            <div class="'movie-price">$10.99</div>
            <div class="movie-add">
                <button class="btn btn-primary" type="submit">Add To Cart</button>
            </div>
        </div>


        <div class="col-md-4 movie" style=" margin-top: 2%;" >


        <img src="http://localhost:8888/ASL-CI/assets/images/life.jpg" style=" height: 25em; width: 20em; "/>

        <div class="movie-title">
            Life
        </div>
        <div class="'movie-price">$17.99</div>
        <div class="movie-add">
            <button class="btn btn-primary" type="submit">Add To Cart</button>
        </div>
    </div>

</div>

<br/>

<!----Shopping Cart features------->
<div class="container" style=" padding:0;">
    <div class="row" style="border: solid gray; float:left; margin-left: -45.5%; width: 35%; margin-top: -41.5%; height:15em; ">
        <div class="col-md-4">
            <div class="cart-block">
                <form action="cart/update" method="post">
                    <table cellpadding="6" cellspacing="5" style="width:100%" border="0">
                        <tr>
                            <th id="th1">QTY</th>
                            <th id="th2">Item Description</th>
                            <th id="th3"style="text-align:right">Item Price</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td id="td1" class="right"><strong>Total</strong></td>
                            <td id="td2" class="right" style="text-align:right">$</td>
                        </tr>
                    </table>
                    <br>
                    <p>
                        <button class="btn btn-default" type="submit" >Update Cart</button><br>
                        <a  class="btn btn-default" href="http://localhost:8888/ASL-CI/cart_cont/cart" >Go To Cart</a></p>
                </form>
                <img src="http://localhost:8888/ASL-CI/assets/images/logo.jpg" style="margin-top: 90%; margin-left:-22%; height: 20em; width: 30em; "/>
            </div>
        </div>
    </div>
</div>





</body><br>



<footer>
    <p id="p1">The Wooden Nickel est.2017, All Rights Reserved</p>

</footer>

</html>





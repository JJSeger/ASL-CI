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
<h2>Wooden Nickel Check Out Page<br></h2>


<!---------Categories section---------->

<div class="panel panel-default panel-list"
     style=" font-size: xx-large; float: left; width:25%; margin-left:3%; margin-top: .1%; ">
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


<!----Shopping Cart features------->
<div class="col-md-8" >
    <div class="panel panel-default">
        <div class="panel-heading panel-heading-green">
            <h3 class="panel-title">The Wooden Nickel</h3>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>

                <tr>
                    <td>Ghost in the Shell</td>
                    <td>1</td>
                    <td>$20.99</td>
                </tr>

                <tr>
                    <td>The Void</td>
                    <td>1</td>
                    <td>$18.99</td>
                </tr>

                <tr>
                    <td>Norman</td>
                    <td>1</td>
                    <td>$15.99</td>
                </tr>

                <tr>
                    <td>Captain Underpants: The First Epic Movie</td>
                    <td>1</td>
                    <td>$10.99</td>
                </tr>

                <tr>
                    <td>Despicable Me 3</td>
                    <td>1</td>
                    <td>$10.99</td>
                </tr>

                <tr>
                    <td>Life</td>
                    <td>1</td>
                    <td>$17.99</td>
                </tr>

                <tr>
                    <td colspan="3" class="cart-subtotal">
                        $179.97
                    </td>
                </tr>

                <tr>
                    <td colspan="3" class="cart-shipping">
                        $4.99
                    </td>
                </tr>

                <tr>
                    <td colspan="3" class="cart-total">
                        $179.97
                    </td>
                </tr>
            </table>

            <h3>Shipping Info</h3>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address">
            </div>

            <div class="form-group">
                <label>Address2</label>
                <input type="text" class="form-control" name="address2">
            </div>

            <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control" name="city">
            </div>

            <div class="form-group">
                <label>State</label>
                <input type="text" class="form-control" name="state">
            </div>

            <div class="form-group">
                <label>Zipcode</label>
                <input type="text" class="form-control" name="zipcode">
            </div>

            <p>
                <button class="btn btn-primary" type="submit" name="submit">Checkout</button>
            </p>

        </div>
    </div>
    <p id="p1">The Wooden Nickel est.2017, All Rights Reserved</p>
</div>


<img src="http://localhost:8888/ASL-CI/assets/images/logo.jpg"
     style="float:left; margin-left: 2.9%; margin-top: -20%; height: 20em; width: 30em; "/>

</body>
<br>


</html>





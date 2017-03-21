<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Members Page</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>


        #div5{

            text-align: center;
            font-size: xx-large;

            margin-right: auto;
            margin-left: 29%;
        }

        p{
            font-size: large;
            font-weight: 300;
        }
        body {
            text-align: center;
            background-color: white;
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

        #vid6{
            margin-bottom: 3%;
        }

        #vid5{
            margin-bottom:1.5%;
        }
        img{
            width:250px;
            height:175px;
        }
        #but{
            background-image: url("/assets/images/life.png");
            margin-top:-.5%;
            margin-bottom: 4%;
            margin-right: ;
            margin-left: .1%;
            float: left;
            text-align: center;
            }
        #but:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }

        #but1{
            background-image: url("/assets/images/life.png");
            margin-top: -.5%;
            margin-bottom: 4%;
            margin-left: .6%;

            float: left;
            text-align: center;
        }
        #but1:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }




        #but2{
              background-image: url("/assets/images/life.png");
              margin-top: -.5%;
              margin-bottom: 4%;
              margin-left: .6%;
              float: left;
              text-align: center;
          }
        #but2:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }




        #but3{
              background-image: url("/assets/images/life.png");
              margin-top: -.5%;
              margin-bottom: 4%;
              margin-left: .6%;
              float: left;
              text-align: center;
          }
        #but3:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }



        #but4{
              background-image: url("/assets/images/life.png");
              margin-top: -.5%;
              margin-bottom: 4%;

              margin-left: .6%;
              float: left;
              text-align: center;
          }
        #but4:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }




        #but5{
              background-image: url("/assets/images/life.png");
              margin-top: -.5%;
              margin-bottom: 4%;

              margin-left: .6%;
              float: right;
              text-align: center;
          }
        #but5:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }




    </style>
</head>
<body>

    <h1> The Wooden Nickel Members Area:</h1>
    <div id="div1" class="col-lg-8 col-lg-offset-2">



        <?php if(isset($_SESSION['success'])){?>
            <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
        <?php

        } ?>
        Hello, <?php echo $_SESSION['username']; ?>! This is your members only page. Please feel free to view
        any of our in house movies or you can browse any of our premium titles within the members only store.
        Thank you and welcome!!

        <br><br>


    </div>

    <a href="http://localhost:8888/ASL-CI/index.php/auth/login">Logout</a><br>
    <h2>Wooden Nickel In House Movies<br> </h2>
        <!----------------------this is the video player------------------------->

<?php
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $query = mysql_query("SELECT * FROM 'videos' WHERE id='$id'");
    while($row = mysql_fetch_assoc($query))
    {
        $name = $row['name'];
        $url = $row['url'];
    }

    echo "You are watching " .$name."<br />";
    echo "<video src='url' width='560' height='315'></video>";
}
else
{
    echo"Video List ";
}

?>

    <!---This will get all available videos from database---->










    


    <div id="div5">Our Premium Titles</div><br />

    <div  class="text-center">
        <button id="but" class="btn btn-primary" name="but"><img src="/assets/images/life.png" /></button>
    </div>



    <div  class="text-center">
        <button id="but1" class="btn btn-primary" name="but1"><img src="/assets/images/life.png" /></button>
    </div>


    <div  class="text-center">
        <button id="but2" class="btn btn-primary" name="but2"><img src="/assets/images/life.png" /></button>
    </div>



    <div  class="text-center">
        <button id="but3" class="btn btn-primary" name="but3"><img src="/assets/images/life.png" /></button>
    </div>



    <div  class="text-center">
        <button id="but4" class="btn btn-primary" name="but4"><img src="/assets/images/life.png" /></button>
    </div>


    <div  class="text-center">
        <button id="but5" class="btn btn-primary" name="but5"><img src="/assets/images/life.png" /></button>
    </div>







    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>
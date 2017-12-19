<?php


?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/bootstrap.min.css ">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<style>

    dimensions
       {
        text-align: center;
        color: black;
       }

   dimensions2
       {
        float:right;
        margin-right: 3em;
        }

    dimensions3
       {
        float:right;
        margin-right: 3em;
       }

    dimensions4
       {
        float:right;
        margin-right: 7em;
       }
       #zx
       {

        text-align: center;
        color: red
       }
     b
       {
        color: black;
       }

      h3
       {
          margin-left:27em ;
        }
      x
      {
          font-size: 20px;
          margin-left:36em ;
      }
      #qas
      {
          margin-left: 2em;

      }

    #cdiv
    {
        border:20px wheat;
        background-color: whitesmoke;
        border-style: solid;
        padding:40px 40px 40px 40px;
        width: 400px;

    }

</style>


<body style='background-color:lightblue'>



    <dimensions><h1>
         <?php
               //this how to print some data;
               echo $data['site_name'];
          ?>
        </h1></dimensions>



<!--<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>
<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>
-->

    <br>
    <br>




    <div class="container" id="cdiv">

        <form action="index.php?page=accounts&action=login" method="POST">


        <label id="qas"><b> Email Id : </b></label>
        <dimensions2><input  type="text" size="25px" placeholder="Enter Email Id" name="email" required></dimensions2>

        <br><br><br>

        <label id="qas"><b>Password : </b></label>
        <dimensions3><input type="password" size="25px" placeholder="Enter Password" name="password" required></dimensions3>

            <br><br><br>

        <dimensions4><button type="submit"><b>Login</b></button></dimensions4>

        <br>
        <br>
        <a href="index.php?page=accounts&action=register" id="zx"> Don't have an account ?? Create One </a>

        </form>

    </div>




    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <h3>IS 661</h3>
    <x> Developed By P_S </x>



<script src="js/scripts.js"></script>
</body>
</html>
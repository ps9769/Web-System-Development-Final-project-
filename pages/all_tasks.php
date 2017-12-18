<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>


   <?php
        include "header.php";
     ?>


   <br>
   <br>

   <a href="index.php?page=accounts&action=profile"><b>Profile</b></a>
   &nbsp;      &nbsp; &nbsp;
   <a href="index.php?page=accounts&action=profile"><b>Edit Your Profile<b></a>


   <br>
   <br>



   <?php

          if($data == false)
            {
              echo '<h3> No Task is Created </h3>';
             }
          else
            {
              print utility\htmlTable::genarateTableFromMultiArray($data);
             }

   ?>

     <br>
     <br>



  <style>

    dimensions
    {
        width:5em;
        float:right;
        text-align:left;
        margin-right :88.0em;
    }

  </style>


<form action="index.php?page=tasks&action=insert" method="post" id="formInsertTask">


    Owner Email: <dimensions> <input type="email" name="owneremail"> </dimensions><br><br>

    Owner Id: <dimensions> <input type="number" name="ownerid"> </dimensions><br><br>

    Created Date: <dimensions> <input type="text" name="createddate"> </dimensions><br><br>

    Due Date: <dimensions> <input type="text" name="duedate"> </dimensions><br><br>

    Message: <dimensions> <input type="text" name="message" > </dimensions><br><br>

    Is Done: <dimensions> <input type="number" name="isdone"> </dimensions><br><br>

    <input type="submit" form="formInsertTask" value="Insert Task">

</form>

   <script src="js/scripts.js"></script>
</body>
</html>
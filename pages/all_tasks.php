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
//this is how you print something


include "header.php";

print utility\htmlTable::genarateTableFromMultiArray($data);


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


<form action="index.php?page=tasks&action=insert" method="post">



    Owner Email: <dimensions> <input type="email" name="owneremail"> </dimensions><br><br>

    Owner Id: <dimensions> <input type="number" name="ownerid"> </dimensions><br><br>

    Created Date: <dimensions> <input type="text" name="createddate"> </dimensions><br><br>

    Due Date: <dimensions> <input type="text" name="duedate"> </dimensions><br><br>

    Message: <dimensions> <input type="text" name="message" > </dimensions><br><br>

    Is Done: <dimensions> <input type="number" name="isdone"> </dimensions><br><br>

    <input type="submit" value="Insert Task">

</form>


<script src="js/scripts.js"></script>
</body>
</html>
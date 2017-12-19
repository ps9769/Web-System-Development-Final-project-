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

  <br>
  <?php
        include "header.php";
    ?>


<body style='background-color:lightblue'>


  <b>First Name :</b> <?php echo $data->fname; ?> <br>
  <b>Last Name :</b> <?php echo $data->lname; ?> <br>
  <b>Email :</b> <?php echo $data->email; ?> <br>

 <br>

     <b> <?php
     //this is how you print something  $data contains the record that was selected on the table.
     print utility\htmlTable::generateTableFromOneRecord($data);
     ?> </b>

 <br>


<style>
    dimensions
       {
        width:12em;
        text-align:center;
        float:left;
        margin-left :6em;
       }
    div
       {
        border: 20px wheat;
        background-color: whitesmoke;
        border-style: solid;
        padding: 30px 30px 30px 30px;
        height: 550px;
        width: 500px;
        margin-left: 35em;
       }
    foo
       {
        font-size: 15px;
        margin-left: 7em;
       }
    A1
       {
        text-align: center;
       }

</style>


  <A1><h3><b> Update Account  </b></h3></A1> <br>


<div>

     <form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">

       <foo><b> First Name :</b></foo> <dimensions> <input type="text" name="fname" > </dimensions> <br><br><br>

       <foo><b> Last Name :</b></foo> <dimensions> <input type="text" name="lname" > </dimensions> <br><br><br>

       <foo><b> Email :</b></foo> <dimensions> <input type="email" name="email" > </dimensions> <br><br><br>

       <foo><b> Phone :</b></foo> <dimensions> <input type="number" name="phone" > </dimensions> <br><br><br>

       <foo><b> Birthday :</b></foo> <dimensions> <input type="date" name="birthday" > </dimensions> <br><br><br>

       <foo><b> Gender :</b></foo> <dimensions> <input type="text" name="gender" > </dimensions> <br><br><br>

       <foo><input type="submit" value="Update"></foo>


       <button type="submit" form="form1" value="delete">Delete</button>

     </form>

</div>


     <form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
     </form>


<script src="js/scripts.js"></script>
</body>
</html>

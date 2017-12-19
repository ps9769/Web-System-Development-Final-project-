<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body style='background-color:lightblue'>



    <br>
   <?php
        include "header.php";
     ?>
    <h1> Welcome User </h1>

   <br>
   <a href="index.php?page=accounts&action=profile"><b>Edit Your Profile<b></a>


   <br>
   <br>



   <?php
          if($data == false)
            {
              echo '<h4>  No Task Created </h4>';
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
    delta
       {
        font-size: 15px;
        margin-left: 11em;
       }
    A1
       {
        text-align: center;
       }

</style>

      <A1><h3><b>Insert New Task </b></h3></A1> <br>

<div>

    <form action="index.php?page=tasks&action=insert" method="post" id="formInsertTask">



       <foo>Owner Email :</foo> <dimensions> <input type="email" name="owneremail"> </dimensions><br><br><br>

       <foo>Owner Id :</foo> <dimensions> <input type="number" name="ownerid"> </dimensions><br><br><br>

       <foo>Created Date :</foo> <dimensions> <input type="date" name="createddate"> </dimensions><br><br><br>

       <foo>Due Date :</foo> <dimensions> <input type="date" name="duedate"> </dimensions><br><br><br>

       <foo>Message :</foo> <dimensions> <input type="text" name="message" > </dimensions><br><br><br>

       <foo>Is Done :</foo> <dimensions> <input type="number" name="isdone"> </dimensions><br><br><br>


       <delta><input type="submit" form="formInsertTask" value="Insert"> </delta>

     </form>

</div>


<script src="js/scripts.js"></script>
</body>
</html>
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

    <h3>List of Task</h3>

    <br>

   <?php
        //this is how you print something  $data contains the record that was selected on the table.
        print utility\htmlTable::generateTableFromOneRecord($data);

    ?>

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



    </style>



<form action="index.php?page=tasks&action=save&id=<?php echo $data->id; ?>" method="post">

    <div>

        <foo><b>Owner Email :</b></foo> <dimensions> <input type="email" name="owneremail" value="<?php echo $data->owneremail; ?>"></dimensions><br><br><br>

        <foo><b>Owner Id :</b></foo> <dimensions> <input type="number" name="ownerid" value="<?php echo $data->ownerid; ?>"></dimensions><br><br><br>

         <foo><b>Created Date :</b></foo> <dimensions> <input type="date" name="createddate" value="<?php echo $data->createddate; ?>"></dimensions><br><br><br>

          <foo><b>Due Date :</b></foo> <dimensions> <input type="date" name="duedate" value="<?php echo $data->duedate; ?>"></dimensions><br><br><br>

          <foo><b>Message :</b></foo> <dimensions> <input type="text" name="message" value="<?php echo $data->message; ?>"></dimensions><br><br><br>

           <foo><b>Is Done :</b></foo> <dimensions> <input type="number" name="isdone" value="<?php echo $data->isdone; ?>"></dimensions><br><br><br>

        <foo><input type="submit" value="Submit"></foo>



             <button type="submit" form="form1" value="delete">Delete</button>

    </div>

</form>



<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">

</form>




<script src="js/scripts.js"></script>
</body>
</html>
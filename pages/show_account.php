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

<h1>Email: <?php echo $data->email; ?></h1>
<h1>First Name: <?php echo $data->fname; ?></h1>
<h1>Last Name: <?php echo $data->lname; ?></h1>


<?php
//this is how you print something  $data contains the record that was selected on the table.

 include "header.php";
 print utility\htmlTable::generateTableFromOneRecord($data);


?>

<style>
    dimensions
    {
        width:5em;
        float:right;
        text-align:left;
        margin-right :88.0em;
    }
    </style>

<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">

    First Name: <dimensions> <input type="text" name="fname" value="<?php echo $data->fname; ?>"> </dimensions><br><br>

    Last Name: <dimensions> <input type="text" name="lname" value="<?php echo $data->lname; ?>"> </dimensions><br><br>

    Email: <dimensions> <input type="text" name="email" value="<?php echo $data->email; ?>"></dimensions><br><br>

    Phone: <dimensions> <input type="text" name="phone" value="<?php echo $data->phone; ?>"></dimensions><br><br>

    Birthday: <dimensions> <input type="text" name="birthday" value="<?php echo $data->birthday; ?>"></dimensions><br><br>

    Gender: <dimensions> <input type="text" name="gender" value="<?php echo $data->gender; ?>"></dimensions><br><br>

    <input type="submit" value="Submit form">
</form>


<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">

    <button type="submit" form="form1" value="delete">Delete</button>
</form>


<script src="js/scripts.js"></script>
</body>
</html>

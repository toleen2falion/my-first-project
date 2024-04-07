<?php
    session_start();
    
    ?>

    <!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Login</title>
    <style>
        body::before{
            content:'';
            display: block;
            height:200px;
        }
    </style>
</head>
<body>
<div class="navbar navbar-expand-md bg-dark navbar-dark text-white fixed-top ">
    <div class="container d-flex align-items-center justify-content-center">
    <h1 class="mb-3 py-3   d-flex align-items-center justify-content-center">Welcom <?php echo $_SESSION['employee_name']; ?></h1>
    </div>
 </div>
    
    
   
<form action="courses_veiw.php">
    <input type="submit" name="action" value="courses" >

    <input type="submit" name="action" value="students" >

    <input type="submit" name="action" value="instructors" >

    <input type="text" name="tag" value="1" hidden >

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="js.js"></script>
</body>
</html>
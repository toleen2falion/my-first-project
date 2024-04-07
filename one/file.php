
<?php
 session_start();
 include('config.php');?>
 
 

 <!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <title>Login</title>
    <style>
        body::before{
            content:'';
            display: block;
            height:130px;
        }
    </style>
</head>
<body>
<div class="navbar navbar-expand-md bg-dark navbar-dark text-white fixed-top">
    <div class="container">
    <h1 ><?php echo $_SESSION['student_first_name']; ?></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav ms-auto">


            <li class="nav-item"><a href="view_student_courses.php?" class="nav-link">Back</a></li>
                <li class="nav-item"><a href="file.php?logout=logout" class="nav-link">logout</a></li>
               
  
                
            </ul>
        </div>
    </div>
   </div>

   <?php
        if(isset($_GET['logout'])){
            // unset($_SESSION['instructor_id']);
            // unset($_SESSION['instructor_first_name']);
            header('location:index.php');
        }
       
        ?>



 <?php
$Type_File=$_GET['Type_File'];
echo ' <div class="nnq"><h2 >'.$Type_File."<br>".'</h2>'.'</div>';
if( $Type_File == "HTML_File"){
    $dir_type="uploads_html/";
    $dir = __DIR__.'/uploads_html/';

}

else if( $Type_File == "CSS_File"){
    $dir_type="uploads_css/";
    $dir = __DIR__.'/uploads_css/';}

    else if( $Type_File == "JS_File"){
        $dir_type="uploads_js/";
        $dir = __DIR__.'/uploads_js/';}

        else if( $Type_File == "PHP_File"){
            $dir_type="uploads_php/";
            $dir = __DIR__.'/uploads_php/';}

            else if( $Type_File == "Python_File"){
                $dir_type="uploads_python/";
                $dir = __DIR__.'/uploads_python/';}


// echo $dir;
?>
 <div class="s_file">

<ol>
    <?php
foreach(scandir($dir) as $file){
    if(pathinfo($file,PATHINFO_EXTENSION) ==='pdf' || pathinfo($file,PATHINFO_EXTENSION) ==='png' || pathinfo($file,PATHINFO_EXTENSION) ==='jpg') {?>

<li><a download="" href="<?php echo $dir_type.$file ?>">  <?php echo $file ?></a><br></li>
<?php
    // echo $file . "<br>";
}
}
?>
</ol>
<img src="img/book.svg"  class="d-block w-100% "/>
</div>

<!-- footer -->

<footer class="py-4 bg-dark text-white text-center position-relative">
    <div class="container">
        <p class="lead">
            Copyright &copy; 2022 Toleen Falion
        </p>
        <a href="#" class="position-absolute bottom-0 end-0 p-3" >
            <i class="bi bi-arrow-up-circle h2 text-warning"></i>
           

        </a>
    </div>
</footer>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <!-- <script src="js.js"></script> -->
</body>
</html>

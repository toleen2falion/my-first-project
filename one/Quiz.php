<?php
 session_start();
 
//  if(isset($_GET['action'])){
//      $action = $_GET['action'];
//      $_SESSION['action']=$action;
//  }else{
//     $action=$_SESSION['course_name'];
//  }
$action=$_SESSION['course_name'];
 include('config.php');
 ?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <title>Login</title>
    <style>
        body::before{
            content:'';
            display: block;
            height:80px;
        }
    </style>
</head>
<body>
<div class="navbar navbar-expand-md bg-dark navbar-dark text-white fixed-top">
    <div class="container text-warning">
    <h1 ><?php echo $_SESSION['instructor_first_name']; ?></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav ms-auto">
               
                <li class="nav-item"><a href="view_instructor_courses.php?tag=i" class="nav-link">Back</a></li>

                <li class="nav-item"><a href="view_instructor_courses.php?logout=logout" class="nav-link">logout</a></li>
  
                
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
if($action == 'HTML' ){
   
?>



 
 <form action="HTML_Q.php">
        <!-- //////////// -->
       
 <!-- <img src="img/quiz5.svg"  class="d-block"> -->
 
        <div>
        <input type="text" name="p" value="i" hidden><br>    
        <h3>Q1:</h3>
            <input type="text" name="HTML_Q1" required><br><br>
            <input type="text" name="HTML_Q11" required><br>

            <input type="radio" name="R_HTML_Q11" value=true id="HTML_Q11" required> true
            <input type="radio" name="R_HTML_Q11" value=false id="HTML_Q11" required> false
            <br>
            <br>
        
        
            <input type="text" name="HTML_Q12" required><br>
            <input type="radio" name="R_HTML_Q12" value=true id="HTML_Q12" required> true
            <input type="radio" name="R_HTML_Q12" value=false id="HTML_Q12" required> false

    <br><br>
            <input type="text" name="HTML_Q13" required><br>
            <input type="radio" name="R_HTML_Q13" value=true id="HTML_Q13" required> true
            <input type="radio" name="R_HTML_Q13" value=false id="HTML_Q13" required> false
<br><br>
            <input type="text" name="HTML_Q14" required><br>
            <input type="radio" name="R_HTML_Q14" value=true id="HTML_Q14" required> true
            <input type="radio" name="R_HTML_Q14" value=false id="HTML_Q14" required> false
<br><br>
        </div>
        <div>
        <br>
<h3>Q2:</h3>
 
            <input type="text" name="HTML_Q2" required><br><br>
            <input type="text" name="HTML_Q21" required><br>
            <input type="radio" name="R_HTML_Q21" value=true id="HTML_Q21" required> true
            <input type="radio" name="R_HTML_Q21" value=false id="HTML_Q21" required> false
            <br><br>

            <input type="text" name="HTML_Q22" required><br>
            <input type="radio" name="R_HTML_Q22" value=true id="HTML_Q22" required> true
            <input type="radio" name="R_HTML_Q22" value=false id="HTML_Q22" required> false
    <br><br>
            <input type="text" name="HTML_Q23" required><br>
            <input type="radio" name="R_HTML_Q23" value=true id="HTML_Q23" required> true
            <input type="radio" name="R_HTML_Q23" value=false id="HTML_Q23" required> false
<br><br>
            <input type="text" name="HTML_Q24" required><br>
            <input type="radio" name="R_HTML_Q24" value=true id="HTML_Q24" required> true
            <input type="radio" name="R_HTML_Q24" value=false id="HTML_Q24" required> false
<br><br>
</div>
<div>
<h3>Q3:</h3>
 
            <input type="text" name="HTML_Q3" required><br><br>
            <input type="text" name="HTML_Q31" required><br>
            <input type="radio" name="R_HTML_Q31" value=true id="HTML_Q31" required> true
            <input type="radio" name="R_HTML_Q31" value=false id="HTML_Q31" required> false
            <br><br>

            <input type="text" name="HTML_Q32" required><br>
            <input type="radio" name="R_HTML_Q32" value=true id="HTML_Q32" required> true
            <input type="radio" name="R_HTML_Q32" value=false id="HTML_Q32" required> false
    <br><br>
            <input type="text" name="HTML_Q33" required><br>
            <input type="radio" name="R_HTML_Q33" value=true id="HTML_Q33" required> true
            <input type="radio" name="R_HTML_Q33" value=false id="HTML_Q33" required> false
<br><br>
            <input type="text" name="HTML_Q34" required><br>
            <input type="radio" name="R_HTML_Q34" value=true id="HTML_Q34" required> true
            <input type="radio" name="R_HTML_Q34" value=false id="HTML_Q34" required> false
<br>
</div>
<div>
<h3>Q4:</h3>
 
            <input type="text" name="HTML_Q4" required><br><br>
            <input type="text" name="HTML_Q41" required><br>
            <input type="radio" name="R_HTML_Q41" value=true id="HTML_Q41" required> true
            <input type="radio" name="R_HTML_Q41" value=false id="HTML_Q41" required> false
            <br><br>

            <input type="text" name="HTML_Q42" required><br>
            <input type="radio" name="R_HTML_Q42" value=true id="HTML_Q42" required> true
            <input type="radio" name="R_HTML_Q42" value=false id="HTML_Q42" required> false
    <br><br>
            <input type="text" name="HTML_Q43" required><br>
            <input type="radio" name="R_HTML_Q43" value=true id="HTML_Q43" required> true
            <input type="radio" name="R_HTML_Q43" value=false id="HTML_Q43" required> false
<br><br>
            <input type="text" name="HTML_Q44" required><br>
            <input type="radio" name="R_HTML_Q44" value=true id="HTML_Q44" required> true
            <input type="radio" name="R_HTML_Q44" value=false id="HTML_Q44" required> false
<br><br>
</div>
<div>
<h3>Q5:</h3>
 
            <input type="text" name="HTML_Q5" required><br><br>
            <input type="text" name="HTML_Q51" required><br>
            <input type="radio" name="R_HTML_Q51" value=true id="HTML_Q51" required> true
            <input type="radio" name="R_HTML_Q51" value=false id="HTML_Q51" required> false
            <br><br>

            <input type="text" name="HTML_Q52" required><br>
            <input type="radio" name="R_HTML_Q52" value=true id="HTML_Q52" required> true
            <input type="radio" name="R_HTML_Q52" value=false id="HTML_Q52" required> false
    <br><br>
            <input type="text" name="HTML_Q53" required><br>
            <input type="radio" name="R_HTML_Q53" value=true id="HTML_Q53" required> true
            <input type="radio" name="R_HTML_Q53" value=false id="HTML_Q53" required> false
<br><br>
            <input type="text" name="HTML_Q54" required><br>
            <input type="radio" name="R_HTML_Q54" value=true id="HTML_Q54" required> true
            <input type="radio" name="R_HTML_Q54" value=false id="HTML_Q54" required> false
<br><br>
        </div>
 <div class="i">
            <input type="submit"  name="action" value="HTML_Q"> 
</div>



 </form>
            
<?php }

///css quiz
else if($action == 'CSS' ){
   
        ?>
       
         
         <form action="CSS_Q.php">
         <div>
         <input type="text" name="p" value="i" hidden><br>  
         <h3>Q1:</h3>
                    <input type="text" name="CSS_Q1" required><br><br>
                    <input type="text" name="CSS_Q11" required><br>
                    <input type="radio" name="R_CSS_Q11" value=true id="CSS_Q11" required> true
                    <input type="radio" name="R_CSS_Q11" value=false id="CSS_Q11" required> false
                    <br><br>
        
                    <input type="text" name="CSS_Q12" required><br>
                    <input type="radio" name="R_CSS_Q12" value=true id="CSS_Q12" required> true
                    <input type="radio" name="R_CSS_Q12" value=false id="CSS_Q12" required> false
            <br><br>
                    <input type="text" name="CSS_Q13" required><br>
                    <input type="radio" name="R_CSS_Q13" value=true id="CSS_Q13" required> true
                    <input type="radio" name="R_CSS_Q13" value=false id="CSS_Q13" required> false
        <br><br>
                    <input type="text" name="CSS_Q14" required><br>
                    <input type="radio" name="R_CSS_Q14" value=true id="CSS_Q14" required> true
                    <input type="radio" name="R_CSS_Q14" value=false id="CSS_Q14" required> false
        <br><br>
</div>

<div>
<br>
        <h3>Q2:</h3>
         
                    <input type="text" name="CSS_Q2" required><br><br>
                    <input type="text" name="CSS_Q21" required><br>
                    <input type="radio" name="R_CSS_Q21" value=true id="CSS_Q21" required> true
                    <input type="radio" name="R_CSS_Q21" value=false id="CSS_Q21" required> false
                    <br><br>
        
                    <input type="text" name="CSS_Q22" required><br>
                    <input type="radio" name="R_CSS_Q22" value=true id="CSS_Q22" required> true
                    <input type="radio" name="R_CSS_Q22" value=false id="CSS_Q22" required> false
            <br><br>
                    <input type="text" name="CSS_Q23" required><br>
                    <input type="radio" name="R_CSS_Q23" value=true id="CSS_Q23" required> true
                    <input type="radio" name="R_CSS_Q23" value=false id="CSS_Q23" required> false
        <br><br>
                    <input type="text" name="CSS_Q24" required><br>
                    <input type="radio" name="R_CSS_Q24" value=true id="CSS_Q24" required> true
                    <input type="radio" name="R_CSS_Q24" value=false id="CSS_Q24" required> false
        <br><br>
        </div>
        <div>
        <h3>Q3:</h3>
         
                    <input type="text" name="CSS_Q3" required><br><br>
                    <input type="text" name="CSS_Q31" required><br>
                    <input type="radio" name="R_CSS_Q31" value=true id="CSS_Q31" required> true
                    <input type="radio" name="R_CSS_Q31" value=false id="CSS_Q31" required> false
                    <br><br>
        
                    <input type="text" name="CSS_Q32" required><br>
                    <input type="radio" name="R_CSS_Q32" value=true id="CSS_Q32" required> true
                    <input type="radio" name="R_CSS_Q32" value=false id="CSS_Q32" required> false
            <br><br>
                    <input type="text" name="CSS_Q33" required><br>
                    <input type="radio" name="R_CSS_Q33" value=true id="CSS_Q33" required> true
                    <input type="radio" name="R_CSS_Q33" value=false id="CSS_Q33" required> false
        <br><br>
                    <input type="text" name="CSS_Q34" required><br>
                    <input type="radio" name="R_CSS_Q34" value=true id="CSS_Q34" required> true
                    <input type="radio" name="R_CSS_Q34" value=false id="CSS_Q34" required> false
        <br><br>
        </div>
        <div>
        <h3>Q4:</h3>
         
                    <input type="text" name="CSS_Q4" required><br><br>
                    <input type="text" name="CSS_Q41" required><br>
                    <input type="radio" name="R_CSS_Q41" value=true id="CSS_Q41" required> true
                    <input type="radio" name="R_CSS_Q41" value=false id="CSS_Q41" required> false
                    <br><br>
        
                    <input type="text" name="CSS_Q42" required><br>
                    <input type="radio" name="R_CSS_Q42" value=true id="CSS_Q42" required> true
                    <input type="radio" name="R_CSS_Q42" value=false id="CSS_Q42" required> false
            <br><br>
                    <input type="text" name="CSS_Q43" required><br>
                    <input type="radio" name="R_CSS_Q43" value=true id="CSS_Q43" required> true
                    <input type="radio" name="R_CSS_Q43" value=false id="CSS_Q43" required> false
        <br><br>
                    <input type="text" name="CSS_Q44" required><br>
                    <input type="radio" name="R_CSS_Q44" value=true id="CSS_Q44" required> true
                    <input type="radio" name="R_CSS_Q44" value=false id="CSS_Q44" required> false
        <br><br>
        </div>
        <div>
        <h3>Q5:</h3>
         
                    <input type="text" name="CSS_Q5" required><br><br>
                    <input type="text" name="CSS_Q51" required><br>
                    <input type="radio" name="R_CSS_Q51" value=true id="CSS_Q51" required> true
                    <input type="radio" name="R_CSS_Q51" value=false id="CSS_Q51" required> false
                    <br><br>
        
                    <input type="text" name="CSS_Q52" required><br>
                    <input type="radio" name="R_CSS_Q52" value=true id="CSS_Q52" required> true
                    <input type="radio" name="R_CSS_Q52" value=false id="CSS_Q52" required> false
            <br><br>
                    <input type="text" name="CSS_Q53" required><br>
                    <input type="radio" name="R_CSS_Q53" value=true id="CSS_Q53" required> true
                    <input type="radio" name="R_CSS_Q53" value=false id="CSS_Q53" required> false
        <br><br>
                    <input type="text" name="CSS_Q54" required><br>
                    <input type="radio" name="R_CSS_Q54" value=true id="CSS_Q54" required> true
                    <input type="radio" name="R_CSS_Q54" value=false id="CSS_Q54" required> false
        <br><br>
        </div>
        <div class="i">
                    <input type="submit"  name="action" value="CSS_Q"> 
        </div>
        
         </form>
                    
        <?php }

        ///JS quiz
else if($action == 'JS' ){
   
       ?>
       
        
         <form action="JS_Q.php">
         <div>
         <input type="text" name="p" value="i" hidden><br>  
         <h3>Q1:</h3>
                    <input type="text" name="JS_Q1" required><br><br>
                    <input type="text" name="JS_Q11" required><br>
                    <input type="radio" name="R_JS_Q11" value=true id="JS_Q11" required> true
                    <input type="radio" name="R_JS_Q11" value=false id="JS_Q11" required> false
                    <br><br>
        
                    <input type="text" name="JS_Q12" required><br>
                    <input type="radio" name="R_JS_Q12" value=true id="JS_Q12" required> true
                    <input type="radio" name="R_JS_Q12" value=false id="JS_Q12" required> false
            <br><br>
                    <input type="text" name="JS_Q13" required><br>
                    <input type="radio" name="R_JS_Q13" value=true id="JS_Q13" required> true
                    <input type="radio" name="R_JS_Q13" value=false id="JS_Q13" required> false
        <br><br>
                    <input type="text" name="JS_Q14" required><br>
                    <input type="radio" name="R_JS_Q14" value=true id="JS_Q14" required> true
                    <input type="radio" name="R_JS_Q14" value=false id="JS_Q14" required> false
        <br><br>
</div>
<div>
<br>
        <h3>Q2:</h3>
         
                    <input type="text" name="JS_Q2" required><br><br>
                    <input type="text" name="JS_Q21" required><br>
                    <input type="radio" name="R_JS_Q21" value=true id="JS_Q21" required> true
                    <input type="radio" name="R_JS_Q21" value=false id="JS_Q21" required> false
                    <br><br>
        
                    <input type="text" name="JS_Q22" required><br>
                    <input type="radio" name="R_JS_Q22" value=true id="JS_Q22" required> true
                    <input type="radio" name="R_JS_Q22" value=false id="JS_Q22" required> false
            <br><br>
                    <input type="text" name="JS_Q23" required><br>
                    <input type="radio" name="R_JS_Q23" value=true id="JS_Q23" required> true
                    <input type="radio" name="R_JS_Q23" value=false id="JS_Q23" required> false
        <br><br>
                    <input type="text" name="JS_Q24" required><br>
                    <input type="radio" name="R_JS_Q24" value=true id="JS_Q24" required> true
                    <input type="radio" name="R_JS_Q24" value=false id="JS_Q24" required> false
        <br><br>
        </div>
<div>
        <h3>Q3:</h3>
         
                    <input type="text" name="JS_Q3" required><br><br>
                    <input type="text" name="JS_Q31" required><br>
                    <input type="radio" name="R_JS_Q31" value=true id="JS_Q31" required> true
                    <input type="radio" name="R_JS_Q31" value=false id="JS_Q31" required> false
                    <br><br>
        
                    <input type="text" name="JS_Q32" required><br>
                    <input type="radio" name="R_JS_Q32" value=true id="JS_Q32" required> true
                    <input type="radio" name="R_JS_Q32" value=false id="JS_Q32" required> false
            <br><br>
                    <input type="text" name="JS_Q33" required><br>
                    <input type="radio" name="R_JS_Q33" value=true id="JS_Q33" required> true
                    <input type="radio" name="R_JS_Q33" value=false id="JS_Q33" required> false
        <br><br>
                    <input type="text" name="JS_Q34" required><br>
                    <input type="radio" name="R_JS_Q34" value=true id="JS_Q34" required> true
                    <input type="radio" name="R_JS_Q34" value=false id="JS_Q34" required> false
        <br><br>
        </div>
<div>
        <h3>Q4:</h3>
         
                    <input type="text" name="JS_Q4" required><br><br>
                    <input type="text" name="JS_Q41" required><br>
                    <input type="radio" name="R_JS_Q41" value=true id="JS_Q41" required> true
                    <input type="radio" name="R_JS_Q41" value=false id="JS_Q41" required> false
                    <br><br>
        
                    <input type="text" name="JS_Q42" required><br>
                    <input type="radio" name="R_JS_Q42" value=true id="JS_Q42" required> true
                    <input type="radio" name="R_JS_Q42" value=false id="JS_Q42" required> false
            <br><br>
                    <input type="text" name="JS_Q43" required><br>
                    <input type="radio" name="R_JS_Q43" value=true id="JS_Q43" required> true
                    <input type="radio" name="R_JS_Q43" value=false id="JS_Q43" required> false
        <br><br>
                    <input type="text" name="JS_Q44" required><br>
                    <input type="radio" name="R_JS_Q44" value=true id="JS_Q44" required> true
                    <input type="radio" name="R_JS_Q44" value=false id="JS_Q44" required> false
        <br><br>
        </div>
<div>
        <h3>Q5:</h3>
         
                    <input type="text" name="JS_Q5" required><br><br>
                    <input type="text" name="JS_Q51" required><br>
                    <input type="radio" name="R_JS_Q51" value=true id="JS_Q51" required> true
                    <input type="radio" name="R_JS_Q51" value=false id="JS_Q51" required> false
                    <br><br>
        
                    <input type="text" name="JS_Q52" required><br>
                    <input type="radio" name="R_JS_Q52" value=true id="JS_Q52" required> true
                    <input type="radio" name="R_JS_Q52" value=false id="JS_Q52" required> false
            <br><br>
                    <input type="text" name="JS_Q53" required><br>
                    <input type="radio" name="R_JS_Q53" value=true id="JS_Q53" required> true
                    <input type="radio" name="R_JS_Q53" value=false id="JS_Q53" required> false
        <br><br>
                    <input type="text" name="JS_Q54" required><br>
                    <input type="radio" name="R_JS_Q54" value=true id="JS_Q54" required> true
                    <input type="radio" name="R_JS_Q54" value=false id="JS_Q54" required> false
        <br><br>
</div>
<div class="i">
                    <input type="submit"  name="action" value="JS_Q"> 
</div>
         </form>
                    
        <?php }


   ///PHP quiz
   else if($action == 'PHP' ){
   
        ?>
        
         <form action="PHP_Q.php">
                <div>
                <input type="text" name="p" value="i" hidden><br>  
                 <h3>Q1:</h3>
                    <input type="text" name="PHP_Q1" required><br><br>
                    <input type="text" name="PHP_Q11" required><br>
                    <input type="radio" name="R_PHP_Q11" value=true id="PHP_Q11" required> true
                    <input type="radio" name="R_PHP_Q11" value=false id="PHP_Q11" required> false
                    <br><br>
        
                    <input type="text" name="PHP_Q12" required><br>
                    <input type="radio" name="R_PHP_Q12" value=true id="PHP_Q12" required> true
                    <input type="radio" name="R_PHP_Q12" value=false id="PHP_Q12" required> false
            <br><br>
                    <input type="text" name="PHP_Q13" required><br>
                    <input type="radio" name="R_PHP_Q13" value=true id="PHP_Q13" required> true
                    <input type="radio" name="R_PHP_Q13" value=false id="PHP_Q13" required> false
        <br><br>
                    <input type="text" name="PHP_Q14" required><br>
                    <input type="radio" name="R_PHP_Q14" value=true id="PHP_Q14" required> true
                    <input type="radio" name="R_PHP_Q14" value=false id="PHP_Q14" required> false
        <br><br>
   </div>
   <div>
   <br>
        <h3>Q2:</h3>
         
                    <input type="text" name="PHP_Q2" required><br><br>
                    <input type="text" name="PHP_Q21" required><br>
                    <input type="radio" name="R_PHP_Q21" value=true id="PHP_Q21" required> true
                    <input type="radio" name="R_PHP_Q21" value=false id="PHP_Q21" required> false
                    <br><br>
        
                    <input type="text" name="PHP_Q22" required><br>
                    <input type="radio" name="R_PHP_Q22" value=true id="PHP_Q22" required> true
                    <input type="radio" name="R_PHP_Q22" value=false id="PHP_Q22" required> false
            <br><br>
                    <input type="text" name="PHP_Q23" required><br>
                    <input type="radio" name="R_PHP_Q23" value=true id="PHP_Q23" required> true
                    <input type="radio" name="R_PHP_Q23" value=false id="PHP_Q23" required> false
        <br><br>
                    <input type="text" name="PHP_Q24" required><br>
                    <input type="radio" name="R_PHP_Q24" value=true id="PHP_Q24" required> true
                    <input type="radio" name="R_PHP_Q24" value=false id="PHP_Q24" required> false
        <br><br>
        </div>
   <div>
        <h3>Q3:</h3>
         
                    <input type="text" name="PHP_Q3" required><br><br>
                    <input type="text" name="PHP_Q31" required><br>
                    <input type="radio" name="R_PHP_Q31" value=true id="PHP_Q31" required> true
                    <input type="radio" name="R_PHP_Q31" value=false id="PHP_Q31" required> false
                    <br><br>
        
                    <input type="text" name="PHP_Q32" required><br>
                    <input type="radio" name="R_PHP_Q32" value=true id="PHP_Q32" required> true
                    <input type="radio" name="R_PHP_Q32" value=false id="PHP_Q32" required> false
            <br><br>
                    <input type="text" name="PHP_Q33" required><br>
                    <input type="radio" name="R_PHP_Q33" value=true id="PHP_Q33" required> true
                    <input type="radio" name="R_PHP_Q33" value=false id="PHP_Q33" required> false
        <br><br>
                    <input type="text" name="PHP_Q34" required><br>
                    <input type="radio" name="R_PHP_Q34" value=true id="PHP_Q34" required> true
                    <input type="radio" name="R_PHP_Q34" value=false id="PHP_Q34" required> false
        <br><br>
        </div>
   <div>
        <h3>Q4:</h3>
         
                    <input type="text" name="PHP_Q4" required><br><br>
                    <input type="text" name="PHP_Q41" required><br>
                    <input type="radio" name="R_PHP_Q41" value=true id="PHP_Q41" required> true
                    <input type="radio" name="R_PHP_Q41" value=false id="PHP_Q41" required> false
                    <br><br>
        
                    <input type="text" name="PHP_Q42" required><br>
                    <input type="radio" name="R_PHP_Q42" value=true id="PHP_Q42" required> true
                    <input type="radio" name="R_PHP_Q42" value=false id="PHP_Q42" required> false
            <br><br>
                    <input type="text" name="PHP_Q43" required><br>
                    <input type="radio" name="R_PHP_Q43" value=true id="PHP_Q43" required> true
                    <input type="radio" name="R_PHP_Q43" value=false id="PHP_Q43" required> false
        <br><br>
                    <input type="text" name="PHP_Q44" required><br>
                    <input type="radio" name="R_PHP_Q44" value=true id="PHP_Q44" required> true
                    <input type="radio" name="R_PHP_Q44" value=false id="PHP_Q44" required> false
        <br><br>
        </div>
   <div>
        <h3>Q5:</h3>
         
                    <input type="text" name="PHP_Q5" required><br><br>
                    <input type="text" name="PHP_Q51" required><br>
                    <input type="radio" name="R_PHP_Q51" value=true id="PHP_Q51" required> true
                    <input type="radio" name="R_PHP_Q51" value=false id="PHP_Q51" required> false
                    <br><br>
        
                    <input type="text" name="PHP_Q52" required><br>
                    <input type="radio" name="R_PHP_Q52" value=true id="PHP_Q52" required> true
                    <input type="radio" name="R_PHP_Q52" value=false id="PHP_Q52" required> false
            <br><br>
                    <input type="text" name="PHP_Q53" required><br>
                    <input type="radio" name="R_PHP_Q53" value=true id="PHP_Q53" required> true
                    <input type="radio" name="R_PHP_Q53" value=false id="PHP_Q53" required> false
        <br><br>
                    <input type="text" name="PHP_Q54" required><br>
                    <input type="radio" name="R_PHP_Q54" value=true id="PHP_Q54" required> true
                    <input type="radio" name="R_PHP_Q54" value=false id="PHP_Q54" required> false
        <br><br>
</div>
<div class="i">
                    <input type="submit"  name="action" value="PHP_Q"> 
   </div>
         </form>
                    
        <?php }
        
///Python quiz
else if($action == 'Python' ){
   
        ?>
        
         <form action="Python_Q.php">
                <div>
                <input type="text" name="p" value="i" hidden><br>  
                         <h3>Q1:</h3>
                    <input type="text" name="Python_Q1" required><br><br>
                    <input type="text" name="Python_Q11" required><br>
                    <input type="radio" name="R_Python_Q11" value=true id="Python_Q11" required> true
                    <input type="radio" name="R_Python_Q11" value=false id="Python_Q11" required> false
                    <br>
                    <br>
                    <input type="text" name="Python_Q12" required><br>
                    <input type="radio" name="R_Python_Q12" value=true id="Python_Q12" required> true
                    <input type="radio" name="R_Python_Q12" value=false id="Python_Q12" required> false
            <br><br>
                    <input type="text" name="Python_Q13" required><br>
                    <input type="radio" name="R_Python_Q13" value=true id="Python_Q13" required> true
                    <input type="radio" name="R_Python_Q13" value=false id="Python_Q13" required> false
        <br><br>
                    <input type="text" name="Python_Q14" required><br>
                    <input type="radio" name="R_Python_Q14" value=true id="Python_Q14" required> true
                    <input type="radio" name="R_Python_Q14" value=false id="Python_Q14" required> false
        <br><br>
</div>
<div>
<br>
        <h3>Q2:</h3>
         
                    <input type="text" name="Python_Q2" required><br><br>
                    <input type="text" name="Python_Q21" required><br>
                    <input type="radio" name="R_Python_Q21" value=true id="Python_Q21" required> true
                    <input type="radio" name="R_Python_Q21" value=false id="Python_Q21" required> false
                    <br>
                    <br>
                    <input type="text" name="Python_Q22" required><br>
                    <input type="radio" name="R_Python_Q22" value=true id="Python_Q22" required> true
                    <input type="radio" name="R_Python_Q22" value=false id="Python_Q22" required> false
            <br><br>
                    <input type="text" name="Python_Q23" required><br>
                    <input type="radio" name="R_Python_Q23" value=true id="Python_Q23" required> true
                    <input type="radio" name="R_Python_Q23" value=false id="Python_Q23" required> false
        <br><br>
                    <input type="text" name="Python_Q24" required><br>
                    <input type="radio" name="R_Python_Q24" value=true id="Python_Q24" required> true
                    <input type="radio" name="R_Python_Q24" value=false id="Python_Q24" required> false
        <br><br>
        </div>
<div>
        <h3>Q3:</h3>
         
                    <input type="text" name="Python_Q3" required><br><br>
                    <input type="text" name="Python_Q31" required><br>
                    <input type="radio" name="R_Python_Q31" value=true id="Python_Q31" required> true
                    <input type="radio" name="R_Python_Q31" value=false id="Python_Q31" required> false
                    <br><br>
        
                    <input type="text" name="Python_Q32" required><br>
                    <input type="radio" name="R_Python_Q32" value=true id="Python_Q32" required> true
                    <input type="radio" name="R_Python_Q32" value=false id="Python_Q32" required> false
            <br><br>
                    <input type="text" name="Python_Q33" required><br>
                    <input type="radio" name="R_Python_Q33" value=true id="Python_Q33" required> true
                    <input type="radio" name="R_Python_Q33" value=false id="Python_Q33" required> false
        <br><br>
                    <input type="text" name="Python_Q34" required><br>
                    <input type="radio" name="R_Python_Q34" value=true id="Python_Q34" required> true
                    <input type="radio" name="R_Python_Q34" value=false id="Python_Q34" required> false
        <br><br>
        </div>
<div>
        <h3>Q4:</h3>
         
                    <input type="text" name="Python_Q4" required><br><br>
                    <input type="text" name="Python_Q41" required><br>
                    <input type="radio" name="R_Python_Q41" value=true id="Python_Q41" required> true
                    <input type="radio" name="R_Python_Q41" value=false id="Python_Q41" required> false
                    <br><br>
        
                    <input type="text" name="Python_Q42" required><br>
                    <input type="radio" name="R_Python_Q42" value=true id="Python_Q42" required> true
                    <input type="radio" name="R_Python_Q42" value=false id="Python_Q42" required> false
            <br><br>
                    <input type="text" name="Python_Q43" required><br>
                    <input type="radio" name="R_Python_Q43" value=true id="Python_Q43" required> true
                    <input type="radio" name="R_Python_Q43" value=false id="Python_Q43" required> false
        <br><br>
                    <input type="text" name="Python_Q44" required><br>
                    <input type="radio" name="R_Python_Q44" value=true id="Python_Q44" required> true
                    <input type="radio" name="R_Python_Q44" value=false id="Python_Q44" required> false
        <br><br>
        </div>
<div>
        <h3>Q5:</h3>
         
                    <input type="text" name="Python_Q5" required><br><br>
                    <input type="text" name="Python_Q51" required><br>
                    <input type="radio" name="R_Python_Q51" value=true id="Python_Q51" required> true
                    <input type="radio" name="R_Python_Q51" value=false id="Python_Q51" required> false
                    <br>
                    <br>
                    <input type="text" name="Python_Q52" required><br>
                    <input type="radio" name="R_Python_Q52" value=true id="Python_Q52" required> true
                    <input type="radio" name="R_Python_Q52" value=false id="Python_Q52" required> false
            <br><br>
                    <input type="text" name="Python_Q53" required><br>
                    <input type="radio" name="R_Python_Q53" value=true id="Python_Q53" required> true
                    <input type="radio" name="R_Python_Q53" value=false id="Python_Q53" required> false
        <br><br>
                    <input type="text" name="Python_Q54" required><br>
                    <input type="radio" name="R_Python_Q54" value=true id="Python_Q54" required> true
                    <input type="radio" name="R_Python_Q54" value=false id="Python_Q54" required> false
        <br><br>
</div>
        <div class="i">
                    <input type="submit"  name="action" value="Python_Q"> 
</div>
         </form>
                    
        <?php }?>
        
        <!-- footer -->

        <footer class="py-4 bg-dark text-white text-center position-relative">
            <div class="container">
                <p class="lead">
                    Copyright &copy; 2022 Toleen Falion
                </p>
                <a href="#" class="position-absolute bottom-0 end-0 p-3 text-warning" >
                    <i class="bi bi-arrow-up-circle h2"></i>
                   
        
                </a>
            </div>
        </footer>
        
        <script src="bootstrap5/js/bootstrap.js"></script>
           <script src="js.js"></script>
        </body>
        </html>
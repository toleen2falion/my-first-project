<?php
 session_start();
//  echo "LLL";
 
 if(isset($_GET['action'])){
    // unset($_SESSION['HTML_Q1']);
     $action = $_GET['action'];
     $_SESSION['action']=$action;
 }else{
    $action=$_SESSION['action'];
 }
 include('config.php');
 if($action == 'JS_Q' ){?><?php
//////////// q1///////////////////

// if(!$_SESSION['HTML_Q1'] && !isset($_GET['HTML_Q1'])){
//     echo "<h1>No New Quiz</h1>";
//     // break;
// }else{
    // unset($_SESSION['HTML_Q1']);?>
    
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
    <!-- <link rel="stylesheet" href="fontawesome/css/all.css"> -->
    <title>Login</title>
    <style>
        body::before{
            content:'';
            display: block;
            height:60px;
        }
    </style>
</head>
<body>
<div class="navbar navbar-expand-md bg-dark navbar-dark text-white fixed-top">
    <div class="container">
    <h1>JS</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav ms-auto">
            <?php if(isset($_GET['p'])){?>
                <li class="nav-item"><a href="Quiz.php?" class="nav-link">Back</a></li>
                <?php 
                }
                else{?>
            <li class="nav-item"><a href="view_student_courses.php?" class="nav-link">Back</a></li>
         <?php     
           }
  ?>
                 <li class="nav-item"><a href="index.php?" class="nav-link">Logout</a></li>
               
  
                
            </ul>
        </div>
    </div>
   </div>
   

    <?php
    if($_SESSION['JS_Q1'] || isset($_GET['JS_Q1'])){  
    if(isset($_GET['JS_Q1'])){
        $JS_Q1 = $_GET['JS_Q1'];
        $_SESSION['JS_Q1']=$JS_Q1;
    }else{
       $JS_Q1=$_SESSION['JS_Q1'];
    }

    if(isset($_GET['JS_Q11'])){
        $JS_Q11 = $_GET['JS_Q11'];
        $_SESSION['JS_Q11']=$JS_Q11;
    }else{
       $JS_Q11=$_SESSION['JS_Q11'];
    }

    
    if(isset($_GET['JS_Q12'])){
        $JS_Q12 = $_GET['JS_Q12'];
        $_SESSION['JS_Q12']=$JS_Q12;
    }else{
       $JS_Q12=$_SESSION['JS_Q12'];
    }

    if(isset($_GET['JS_Q13'])){
        $JS_Q13 = $_GET['JS_Q13'];
        $_SESSION['JS_Q13']=$JS_Q13;
    }else{
       $JS_Q13=$_SESSION['JS_Q13'];
    }
    
    if(isset($_GET['JS_Q14'])){
        $JS_Q14 = $_GET['JS_Q14'];
        $_SESSION['JS_Q14']=$JS_Q14;
    }else{
       $JS_Q14=$_SESSION['JS_Q14'];
    }

    if(isset($_GET['R_JS_Q11'])){
        $R_JS_Q11 = $_GET['R_JS_Q11'];
        $_SESSION['R_JS_Q11']=$R_JS_Q11;
    }else{
       $R_JS_Q11=$_SESSION['R_JS_Q11'];
    }

    if(isset($_GET['R_JS_Q12'])){
        $R_JS_Q12 = $_GET['R_JS_Q12'];
        $_SESSION['R_JS_Q12']=$R_JS_Q12;
    }else{
       $R_JS_Q12=$_SESSION['R_JS_Q12'];
    }

    if(isset($_GET['R_JS_Q13'])){
        $R_JS_Q13 = $_GET['R_JS_Q13'];
        $_SESSION['R_JS_Q13']=$R_JS_Q13;
    }else{
       $R_JS_Q13=$_SESSION['R_JS_Q13'];
    }
    
    if(isset($_GET['R_JS_Q14'])){
        $R_JS_Q14 = $_GET['R_JS_Q14'];
        $_SESSION['R_JS_Q14']=$R_JS_Q14;
    }else{
       $R_JS_Q14=$_SESSION['R_JS_Q14'];
    }

    $R_JS_Q1=[$R_JS_Q11,$R_JS_Q12,$R_JS_Q13,$R_JS_Q14];
    $v1=0;
    foreach($R_JS_Q1 as $R_JS_Q){
        // echo $R_JS_Q;
        
        if($R_JS_Q=="true")
        $v1++;
    }
    

    // echo $v1 ?>
    <form id="form1">
    <input type="number" name="v1" value=<?php echo $v1 ;?> hidden><br>
    </form>
    <!-- ////////////////////q1////////////////// -->
<?php
    //////////// q2///////////////////
    // $HTML_Q2 = $_GET['HTML_Q2'];
    // $_SESSION['HTML_Q2']=$HTML_Q2;
    if(isset($_GET['JS_Q2'])){
        $JS_Q2 = $_GET['JS_Q2'];
        $_SESSION['JS_Q2']=$JS_Q2;
    }else{
       $JS_Q2=$_SESSION['JS_Q2'];
    }

    // $JS_Q21 = $_GET['JS_Q21'];
    // $_SESSION['JS_Q21']=$JS_Q21;
    if(isset($_GET['JS_Q21'])){
        $JS_Q21 = $_GET['JS_Q21'];
        $_SESSION['JS_Q21']=$JS_Q21;
    }else{
       $JS_Q21=$_SESSION['JS_Q21'];
    }

    // $JS_Q22 = $_GET['JS_Q22'];
    // $_SESSION['JS_Q22']=$JS_Q22;
    if(isset($_GET['JS_Q22'])){
        $JS_Q22 = $_GET['JS_Q22'];
        $_SESSION['JS_Q22']=$JS_Q22;
    }else{
       $JS_Q22=$_SESSION['JS_Q22'];
    }

    // $JS_Q23 = $_GET['JS_Q23'];
    // $_SESSION['JS_Q23']=$JS_Q23;
    if(isset($_GET['JS_Q23'])){
        $JS_Q23 = $_GET['JS_Q23'];
        $_SESSION['JS_Q23']=$JS_Q23;
    }else{
       $JS_Q23=$_SESSION['JS_Q23'];
    }
    
    // $JS_Q24 = $_GET['JS_Q24'];
    // $_SESSION['JS_Q24']=$JS_Q24;
    if(isset($_GET['JS_Q24'])){
        $JS_Q24 = $_GET['JS_Q24'];
        $_SESSION['JS_Q24']=$JS_Q24;
    }else{
       $JS_Q24=$_SESSION['JS_Q24'];
    }

    // $R_JS_Q21 = $_GET['R_JS_Q21'];
    // $_SESSION['R_JS_Q21']=$R_JS_Q21;
    if(isset($_GET['R_JS_Q21'])){
        $R_JS_Q21 = $_GET['R_JS_Q21'];
        $_SESSION['R_JS_Q21']=$R_JS_Q21;
    }else{
       $R_JS_Q21=$_SESSION['R_JS_Q21'];
    }
    

    // $R_JS_Q22 = $_GET['R_JS_Q22'];
    // $_SESSION['R_JS_Q22']=$R_JS_Q22;
    if(isset($_GET['R_JS_Q22'])){
        $R_JS_Q22 = $_GET['R_JS_Q22'];
        $_SESSION['R_JS_Q22']=$R_JS_Q22;
    }else{
       $R_JS_Q22=$_SESSION['R_JS_Q22'];
    }

    // $R_JS_Q23 = $_GET['R_JS_Q23'];
    // $_SESSION['R_JS_Q23']=$R_JS_Q23;
    if(isset($_GET['R_JS_Q23'])){
        $R_JS_Q23 = $_GET['R_JS_Q23'];
        $_SESSION['R_JS_Q23']=$R_JS_Q23;
    }else{
       $R_JS_Q23=$_SESSION['R_JS_Q23'];
    }



    // $R_JS_Q24 = $_GET['R_JS_Q24'];
    // $_SESSION['R_JS_Q24']=$R_JS_Q24;
    if(isset($_GET['R_JS_Q24'])){
        $R_JS_Q24 = $_GET['R_JS_Q24'];
        $_SESSION['R_JS_Q24']=$R_JS_Q24;
    }else{
       $R_JS_Q24=$_SESSION['R_JS_Q24'];
    }

    $R_JS_Q2=[$R_JS_Q21,$R_JS_Q22,$R_JS_Q23,$R_JS_Q24];
    $v2=0;
    foreach($R_JS_Q2 as $R_JS_q){
        // echo $R_JS_q;
        
        if($R_JS_q=="true")
        $v2++;
    }
    

    // echo $v2 ?>
    <form id="form2">
    <input type="number" name="v2" value=<?php echo $v2 ;?> hidden><br>
    </form>
    <!-- ////////////////////q2////////////////// -->
<?php
    //////////// q3///////////////////

    if(isset($_GET['JS_Q3'])){
        $JS_Q3 = $_GET['JS_Q3'];
        $_SESSION['JS_Q3']=$JS_Q3;
    }else{
       $JS_Q3=$_SESSION['JS_Q3'];
    }

    if(isset($_GET['JS_Q31'])){
        $JS_Q31 = $_GET['JS_Q31'];
        $_SESSION['JS_Q31']=$JS_Q31;
    }else{
       $JS_Q31=$_SESSION['JS_Q31'];
    }

    
    if(isset($_GET['JS_Q32'])){
        $JS_Q32 = $_GET['JS_Q32'];
        $_SESSION['JS_Q32']=$JS_Q32;
    }else{
       $JS_Q32=$_SESSION['JS_Q32'];
    }

    if(isset($_GET['JS_Q33'])){
        $JS_Q33 = $_GET['JS_Q33'];
        $_SESSION['JS_Q33']=$JS_Q33;
    }else{
       $JS_Q33=$_SESSION['JS_Q33'];
    }
    
    if(isset($_GET['JS_Q34'])){
        $JS_Q34 = $_GET['JS_Q34'];
        $_SESSION['JS_Q34']=$JS_Q34;
    }else{
       $JS_Q34=$_SESSION['JS_Q34'];
    }

    if(isset($_GET['R_JS_Q31'])){
        $R_JS_Q31 = $_GET['R_JS_Q31'];
        $_SESSION['R_JS_Q31']=$R_JS_Q31;
    }else{
       $R_JS_Q31=$_SESSION['R_JS_Q31'];
    }

    if(isset($_GET['R_JS_Q32'])){
        $R_JS_Q32 = $_GET['R_JS_Q32'];
        $_SESSION['R_JS_Q32']=$R_JS_Q32;
    }else{
       $R_JS_Q32=$_SESSION['R_JS_Q32'];
    }

    if(isset($_GET['R_JS_Q33'])){
        $R_JS_Q33 = $_GET['R_JS_Q33'];
        $_SESSION['R_JS_Q33']=$R_JS_Q33;
    }else{
       $R_JS_Q33=$_SESSION['R_JS_Q33'];
    }
    
    if(isset($_GET['R_JS_Q34'])){
        $R_JS_Q34 = $_GET['R_JS_Q34'];
        $_SESSION['R_JS_Q34']=$R_JS_Q34;
    }else{
       $R_JS_Q34=$_SESSION['R_JS_Q34'];
    }

    $R_JS_Q3=[$R_JS_Q31,$R_JS_Q32,$R_JS_Q33,$R_JS_Q34];
    $v3=0;
    foreach($R_JS_Q3 as $R_JS_Q){
        // echo $R_JS_Q;
        
        if($R_JS_Q=="true")
        $v3++;
    }
    

    // echo $v3 ?>
    <form id="form3">
    <input type="number" name="v3" value=<?php echo $v3 ;?> hidden><br>
    </form>
    <!-- ////////////////////q3////////////////// -->

    <?php
    //////////// q4///////////////////

    if(isset($_GET['JS'])){
        $JS_Q4 = $_GET['JS_Q4'];
        $_SESSION['JS_Q4']=$JS_Q4;
    }else{
       $JS_Q4=$_SESSION['JS_Q4'];
    }

    if(isset($_GET['JS_Q41'])){
        $JS_Q41 = $_GET['JS_Q41'];
        $_SESSION['JS_Q41']=$JS_Q41;
    }else{
       $JS_Q41=$_SESSION['JS_Q41'];
    }

    
    if(isset($_GET['JS_Q42'])){
        $JS_Q42 = $_GET['JS_Q42'];
        $_SESSION['JS_Q42']=$JS_Q42;
    }else{
       $JS_Q42=$_SESSION['JS_Q42'];
    }

    if(isset($_GET['JS_Q43'])){
        $JS_Q43 = $_GET['JS_Q43'];
        $_SESSION['JS_Q43']=$JS_Q43;
    }else{
       $JS_Q43=$_SESSION['JS_Q43'];
    }
    
    if(isset($_GET['JS_Q44'])){
        $JS_Q44 = $_GET['JS_Q44'];
        $_SESSION['JS_Q44']=$JS_Q44;
    }else{
       $JS_Q44=$_SESSION['JS_Q44'];
    }

    if(isset($_GET['R_JS_Q41'])){
        $R_JS_Q41 = $_GET['R_JS_Q41'];
        $_SESSION['R_JS_Q41']=$R_JS_Q41;
    }else{
       $R_JS_Q41=$_SESSION['R_JS_Q41'];
    }

    if(isset($_GET['R_JS_Q42'])){
        $R_JS_Q42 = $_GET['R_JS_Q42'];
        $_SESSION['R_JS_Q42']=$R_JS_Q42;
    }else{
       $R_JS_Q42=$_SESSION['R_JS_Q42'];
    }

    if(isset($_GET['R_JS_Q43'])){
        $R_JS_Q43 = $_GET['R_JS_Q43'];
        $_SESSION['R_JS_Q43']=$R_JS_Q43;
    }else{
       $R_JS_Q43=$_SESSION['R_JS_Q43'];
    }
    
    if(isset($_GET['R_JS_Q44'])){
        $R_JS_Q44 = $_GET['R_JS_Q44'];
        $_SESSION['R_JS_Q44']=$R_JS_Q44;
    }else{
       $R_JS_Q44=$_SESSION['R_JS_Q44'];
    }

    $R_JS_Q4=[$R_JS_Q41,$R_JS_Q42,$R_JS_Q43,$R_JS_Q44];
    $v4=0;
    foreach($R_JS_Q4 as $R_JS_Q){
        // echo $R_JS_Q;
        
        if($R_JS_Q=="true")
        $v4++;
    }
    

    // echo $v4 ?>
    <form id="form4">
    <input type="number" name="v4" value=<?php echo $v4 ;?> hidden><br>
    </form>
    <!-- ////////////////////q4////////////////// -->

    <?php
    //////////// q5///////////////////

    if(isset($_GET['JS_Q5'])){
        $JS_Q5 = $_GET['JS_Q5'];
        $_SESSION['JS_Q5']=$JS_Q5;
    }else{
       $JS_Q5=$_SESSION['JS_Q5'];
    }

    if(isset($_GET['JS_Q51'])){
        $JS_Q51 = $_GET['JS_Q51'];
        $_SESSION['JS_Q51']=$JS_Q51;
    }else{
       $JS_Q51=$_SESSION['JS_Q51'];
    }

    
    if(isset($_GET['JS_Q52'])){
        $JS_Q52 = $_GET['JS_Q52'];
        $_SESSION['JS_Q52']=$JS_Q52;
    }else{
       $JS_Q52=$_SESSION['JS_Q52'];
    }

    if(isset($_GET['JS_Q53'])){
        $JS_Q53 = $_GET['JS_Q53'];
        $_SESSION['JS_Q53']=$JS_Q53;
    }else{
       $JS_Q53=$_SESSION['JS_Q53'];
    }
    
    if(isset($_GET['JS_Q54'])){
        $JS_Q54 = $_GET['JS_Q54'];
        $_SESSION['JS_Q54']=$JS_Q54;
    }else{
       $JS_Q54=$_SESSION['JS_Q54'];
    }

    if(isset($_GET['R_JS_Q51'])){
        $R_JS_Q51 = $_GET['R_JS_Q51'];
        $_SESSION['R_JS_Q51']=$R_JS_Q51;
    }else{
       $R_JS_Q51=$_SESSION['R_JS_Q51'];
    }

    if(isset($_GET['R_JS_Q52'])){
        $R_JS_Q52 = $_GET['R_JS_Q52'];
        $_SESSION['R_JS_Q52']=$R_JS_Q52;
    }else{
       $R_JS_Q52=$_SESSION['R_JS_Q52'];
    }

    if(isset($_GET['R_JS_Q53'])){
        $R_JS_Q53 = $_GET['R_JS_Q53'];
        $_SESSION['R_JS_Q53']=$R_JS_Q53;
    }else{
       $R_JS_Q53=$_SESSION['R_JS_Q53'];
    }
    
    if(isset($_GET['R_JS_Q54'])){
        $R_JS_Q54 = $_GET['R_JS_Q54'];
        $_SESSION['R_JS_Q54']=$R_JS_Q54;
    }else{
       $R_JS_Q54=$_SESSION['R_JS_Q54'];
    }

    $R_JS_Q5=[$R_JS_Q51,$R_JS_Q52,$R_JS_Q53,$R_JS_Q54];
    $v5=0;
    foreach($R_JS_Q5 as $R_JS_Q){
        // echo $R_JS_Q;
        
        if($R_JS_Q=="true")
        $v5++;
    }
    

    // echo $v5 ?>
    <form id="form5">
    <input type="number" name="v5" value=<?php echo $v5 ;?> hidden><br>
    </form>
    <!-- ////////////////////q5////////////////// -->

<div class="h2nq"><h2> Start New Quiz:</h2></div>
    
   
    <nav class="snq">
        <section>
        <ol>
      <!-- q1      -->
    <li><?php echo $JS_Q1 ?></li>
       
        <div class="QQQQ">
    <div class="qqq">

    <label for="c1"> <input type="checkbox" name="q1" value=<?php echo $_SESSION['R_JS_Q11'] ?> id="c1"><?php echo $JS_Q11 ?></label><br>
    <label for="c2"><input type="checkbox" name="q1" value=<?php echo $R_JS_Q12 ?> id="c2"><?php echo $JS_Q12 ?></label>

    </div>
            <div>

    <label for="c3"><input type="checkbox" name="q1" value=<?php echo $R_JS_Q13 ?> id="c3"><?php echo $JS_Q13 ?></label><br>
    <label for="c4"><input type="checkbox" name="q1" value=<?php echo $R_JS_Q14 ?> id="c4"><?php echo $JS_Q14 ?></label>
    </div>
        </div>
    
    
    <br>
 <!-- q2     -->
 <li><?php echo $JS_Q2 ?></li>
       
       <div class="QQQQ">
   <div class="qqq">

   <label for="c5"> <input type="checkbox" name="q2" value=<?php echo $R_JS_Q21 ?> id="c5"><?php echo $JS_Q21 ?></label><br>
   <label for="c6"><input type="checkbox" name="q2" value=<?php echo $R_JS_Q22 ?> id="c6"><?php echo $JS_Q22 ?></label>

   </div>
           <div>

   <label for="c7"><input type="checkbox" name="q2" value=<?php echo $R_JS_Q23 ?> id="c7"><?php echo $JS_Q23 ?></label><br>
   <label for="c8"><input type="checkbox" name="q2" value=<?php echo $R_JS_Q24 ?> id="c8"><?php echo $JS_Q24 ?></label>
   </div>
       </div>
   
   
   <br>

   <!-- q3     -->
 <li><?php echo $JS_Q3 ?></li>
       
       <div class="QQQQ">
   <div class="qqq">

   <label for="c9"> <input type="checkbox" name="q3" value=<?php echo $R_JS_Q31 ?> id="c9"><?php echo $JS_Q31 ?></label><br>
   <label for="c10"><input type="checkbox" name="q3" value=<?php echo $R_JS_Q32 ?> id="c10"><?php echo $JS_Q32 ?></label>

   </div>
           <div>

   <label for="c11"><input type="checkbox" name="q3" value=<?php echo $R_JS_Q33 ?> id="c11"><?php echo $JS_Q33 ?></label><br>
   <label for="c12"><input type="checkbox" name="q3" value=<?php echo $R_JS_Q34 ?> id="c12"><?php echo $JS_Q34 ?></label>
   </div>
       </div>
   
   
   <br>

 <!-- q4     -->
 <li><?php echo $JS_Q4 ?></li>
       
       <div class="QQQQ">
   <div class="qqq">

   <label for="c13"> <input type="checkbox" name="q4" value=<?php echo $R_JS_Q41 ?> id="c13"><?php echo $JS_Q41 ?></label><br>
   <label for="c14"><input type="checkbox" name="q4" value=<?php echo $R_JS_Q42 ?> id="c14"><?php echo $JS_Q42 ?></label>

   </div>
           <div>

   <label for="c15"><input type="checkbox" name="q4" value=<?php echo $R_JS_Q43 ?> id="c15"><?php echo $JS_Q43 ?></label><br>
   <label for="c16"><input type="checkbox" name="q4" value=<?php echo $R_JS_Q44 ?> id="c16"><?php echo $JS_Q44 ?></label>
   </div>
       </div>
   
   
   <br>
   <!-- q5     -->
 <li><?php echo $JS_Q5 ?></li>
       
       <div class="QQQQ">
   <div class="qqq">

   <label for="c17"> <input type="checkbox" name="q5" value=<?php echo $R_JS_Q51 ?> id="c17"><?php echo $JS_Q51 ?></label><br>
   <label for="c18"><input type="checkbox" name="q5" value=<?php echo $R_JS_Q52 ?> id="c18"><?php echo $JS_Q52 ?></label>

   </div>
           <div>

   <label for="c19"><input type="checkbox" name="q5" value=<?php echo $R_JS_Q53 ?> id="c19"><?php echo $JS_Q53 ?></label><br>
   <label for="c20"><input type="checkbox" name="q5" value=<?php echo $R_JS_Q54 ?> id="c20"><?php echo $JS_Q54 ?></label>
   </div>
       </div>
   
   
   <br>
    <br>
    
<p>
       <a href="#r_q">     <button id="btn">Result</button>     </a>
             
        </p>
        </section>

 
<div id='div_js'>
    <h4 id="r_q"></h4>
        <h2 id='h2'>you got ${c}</h2>
        <img src="img/img5.jpg" id="img5">
        <img src="img/img4.jpg" id="img4">
        <img src="img/img3.jpg" id="img3">
        <img src="img/img2.jpg" id="img2" >
        <img src="img/img1.jpg" id="img1">
        <!-- <img src="img/img3.jpg" id="img2"> -->
        </div></nav>
        
        
    <!-- <img src="images/img15.JPG" id="img" >
    <img src="images/img1.jpg" id="img1"> -->
    <?php
}
else {?>
<div class="nnq">
   <h2>NO New Quiz</h2>
    <img class="imgnq" src="img/img1.jpg" alt="">
    </div>
<?php
}?>

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
    
    <script src="bootstrap5/js/bootstrap.js"></script>
    <script src="QUIZ.js"></script>
<?php
 }
?>

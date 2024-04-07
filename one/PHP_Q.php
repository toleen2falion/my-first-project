<?php
 session_start();
//  echo "LLL";
 
 if(isset($_GET['action'])){
    // unset($_SESSION['PHP_Q1']);
     $action = $_GET['action'];
     $_SESSION['action']=$action;
 }else{
    $action=$_SESSION['action'];
 }
 include('config.php');
 if($action == 'PHP_Q' ){?><?php
//////////// q1///////////////////

// if(!$_SESSION['PHP_Q1'] && !isset($_GET['PHP_Q1'])){
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
    <h1>PHP</h1>
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
    if($_SESSION['PHP_Q1'] || isset($_GET['PHP_Q1'])){  
    if(isset($_GET['PHP_Q1'])){
        $PHP_Q1 = $_GET['PHP_Q1'];
        $_SESSION['PHP_Q1']=$PHP_Q1;
    }else{
       $PHP_Q1=$_SESSION['PHP_Q1'];
    }

    if(isset($_GET['PHP_Q11'])){
        $PHP_Q11 = $_GET['PHP_Q11'];
        $_SESSION['PHP_Q11']=$PHP_Q11;
    }else{
       $PHP_Q11=$_SESSION['PHP_Q11'];
    }

    
    if(isset($_GET['PHP_Q12'])){
        $PHP_Q12 = $_GET['PHP_Q12'];
        $_SESSION['PHP_Q12']=$PHP_Q12;
    }else{
       $PHP_Q12=$_SESSION['PHP_Q12'];
    }

    if(isset($_GET['PHP_Q13'])){
        $PHP_Q13 = $_GET['PHP_Q13'];
        $_SESSION['PHP_Q13']=$PHP_Q13;
    }else{
       $PHP_Q13=$_SESSION['PHP_Q13'];
    }
    
    if(isset($_GET['PHP_Q14'])){
        $PHP_Q14 = $_GET['PHP_Q14'];
        $_SESSION['PHP_Q14']=$PHP_Q14;
    }else{
       $PHP_Q14=$_SESSION['PHP_Q14'];
    }

    if(isset($_GET['R_PHP_Q11'])){
        $R_PHP_Q11 = $_GET['R_PHP_Q11'];
        $_SESSION['R_PHP_Q11']=$R_PHP_Q11;
    }else{
       $R_PHP_Q11=$_SESSION['R_PHP_Q11'];
    }

    if(isset($_GET['R_PHP_Q12'])){
        $R_PHP_Q12 = $_GET['R_PHP_Q12'];
        $_SESSION['R_PHP_Q12']=$R_PHP_Q12;
    }else{
       $R_PHP_Q12=$_SESSION['R_PHP_Q12'];
    }

    if(isset($_GET['R_PHP_Q13'])){
        $R_PHP_Q13 = $_GET['R_PHP_Q13'];
        $_SESSION['R_PHP_Q13']=$R_PHP_Q13;
    }else{
       $R_PHP_Q13=$_SESSION['R_PHP_Q13'];
    }
    
    if(isset($_GET['R_PHP_Q14'])){
        $R_PHP_Q14 = $_GET['R_PHP_Q14'];
        $_SESSION['R_PHP_Q14']=$R_PHP_Q14;
    }else{
       $R_PHP_Q14=$_SESSION['R_PHP_Q14'];
    }

    $R_PHP_Q1=[$R_PHP_Q11,$R_PHP_Q12,$R_PHP_Q13,$R_PHP_Q14];
    $v1=0;
    foreach($R_PHP_Q1 as $R_PHP_Q){
        // echo $R_PHP_Q;
        
        if($R_PHP_Q=="true")
        $v1++;
    }
    

    // echo $v1 ?>
    <form id="form1">
    <input type="number" name="v1" value=<?php echo $v1 ;?> hidden><br>
    </form>
    <!-- ////////////////////q1////////////////// -->
<?php
    //////////// q2///////////////////
    // $PHP_Q2 = $_GET['PHP_Q2'];
    // $_SESSION['PHP_Q2']=$PHP_Q2;
    if(isset($_GET['PHP_Q2'])){
        $PHP_Q2 = $_GET['PHP_Q2'];
        $_SESSION['PHP_Q2']=$PHP_Q2;
    }else{
       $PHP_Q2=$_SESSION['PHP_Q2'];
    }

    // $PHP_Q21 = $_GET['PHP_Q21'];
    // $_SESSION['PHP_Q21']=$PHP_Q21;
    if(isset($_GET['PHP_Q21'])){
        $PHP_Q21 = $_GET['PHP_Q21'];
        $_SESSION['PHP_Q21']=$PHP_Q21;
    }else{
       $PHP_Q21=$_SESSION['PHP_Q21'];
    }

    // $PHP_Q22 = $_GET['PHP_Q22'];
    // $_SESSION['PHP_Q22']=$PHP_Q22;
    if(isset($_GET['PHP_Q22'])){
        $PHP_Q22 = $_GET['PHP_Q22'];
        $_SESSION['PHP_Q22']=$PHP_Q22;
    }else{
       $PHP_Q22=$_SESSION['PHP_Q22'];
    }

    // $PHP_Q23 = $_GET['PHP_Q23'];
    // $_SESSION['PHP_Q23']=$PHP_Q23;
    if(isset($_GET['PHP_Q23'])){
        $PHP_Q23 = $_GET['PHP_Q23'];
        $_SESSION['PHP_Q23']=$PHP_Q23;
    }else{
       $PHP_Q23=$_SESSION['PHP_Q23'];
    }
    
    // $PHP_Q24 = $_GET['PHP_Q24'];
    // $_SESSION['PHP_Q24']=$PHP_Q24;
    if(isset($_GET['PHP_Q24'])){
        $PHP_Q24 = $_GET['PHP_Q24'];
        $_SESSION['PHP_Q24']=$PHP_Q24;
    }else{
       $PHP_Q24=$_SESSION['PHP_Q24'];
    }

    // $R_PHP_Q21 = $_GET['R_PHP_Q21'];
    // $_SESSION['R_PHP_Q21']=$R_PHP_Q21;
    if(isset($_GET['R_PHP_Q21'])){
        $R_PHP_Q21 = $_GET['R_PHP_Q21'];
        $_SESSION['R_PHP_Q21']=$R_PHP_Q21;
    }else{
       $R_PHP_Q21=$_SESSION['R_PHP_Q21'];
    }
    

    // $R_PHP_Q22 = $_GET['R_PHP_Q22'];
    // $_SESSION['R_PHP_Q22']=$R_PHP_Q22;
    if(isset($_GET['R_PHP_Q22'])){
        $R_PHP_Q22 = $_GET['R_PHP_Q22'];
        $_SESSION['R_PHP_Q22']=$R_PHP_Q22;
    }else{
       $R_PHP_Q22=$_SESSION['R_PHP_Q22'];
    }

    // $R_PHP_Q23 = $_GET['R_PHP_Q23'];
    // $_SESSION['R_PHP_Q23']=$R_PHP_Q23;
    if(isset($_GET['R_PHP_Q23'])){
        $R_PHP_Q23 = $_GET['R_PHP_Q23'];
        $_SESSION['R_PHP_Q23']=$R_PHP_Q23;
    }else{
       $R_PHP_Q23=$_SESSION['R_PHP_Q23'];
    }



    // $R_PHP_Q24 = $_GET['R_PHP_Q24'];
    // $_SESSION['R_PHP_Q24']=$R_PHP_Q24;
    if(isset($_GET['R_PHP_Q24'])){
        $R_PHP_Q24 = $_GET['R_PHP_Q24'];
        $_SESSION['R_PHP_Q24']=$R_PHP_Q24;
    }else{
       $R_PHP_Q24=$_SESSION['R_PHP_Q24'];
    }

    $R_PHP_Q2=[$R_PHP_Q21,$R_PHP_Q22,$R_PHP_Q23,$R_PHP_Q24];
    $v2=0;
    foreach($R_PHP_Q2 as $R_PHP_q){
        // echo $R_PHP_q;
        
        if($R_PHP_q=="true")
        $v2++;
    }
    

    // echo $v2 ?>
    <form id="form2">
    <input type="number" name="v2" value=<?php echo $v2 ;?> hidden><br>
    </form>
    <!-- ////////////////////q2////////////////// -->
<?php
    //////////// q3///////////////////

    if(isset($_GET['PHP_Q3'])){
        $PHP_Q3 = $_GET['PHP_Q3'];
        $_SESSION['PHP_Q3']=$PHP_Q3;
    }else{
       $PHP_Q3=$_SESSION['PHP_Q3'];
    }

    if(isset($_GET['PHP_Q31'])){
        $PHP_Q31 = $_GET['PHP_Q31'];
        $_SESSION['PHP_Q31']=$PHP_Q31;
    }else{
       $PHP_Q31=$_SESSION['PHP_Q31'];
    }

    
    if(isset($_GET['PHP_Q32'])){
        $PHP_Q32 = $_GET['PHP_Q32'];
        $_SESSION['PHP_Q32']=$PHP_Q32;
    }else{
       $PHP_Q32=$_SESSION['PHP_Q32'];
    }

    if(isset($_GET['PHP_Q33'])){
        $PHP_Q33 = $_GET['PHP_Q33'];
        $_SESSION['PHP_Q33']=$PHP_Q33;
    }else{
       $PHP_Q33=$_SESSION['PHP_Q33'];
    }
    
    if(isset($_GET['PHP_Q34'])){
        $PHP_Q34 = $_GET['PHP_Q34'];
        $_SESSION['PHP_Q34']=$PHP_Q34;
    }else{
       $PHP_Q34=$_SESSION['PHP_Q34'];
    }

    if(isset($_GET['R_PHP_Q31'])){
        $R_PHP_Q31 = $_GET['R_PHP_Q31'];
        $_SESSION['R_PHP_Q31']=$R_PHP_Q31;
    }else{
       $R_PHP_Q31=$_SESSION['R_PHP_Q31'];
    }

    if(isset($_GET['R_PHP_Q32'])){
        $R_PHP_Q32 = $_GET['R_PHP_Q32'];
        $_SESSION['R_PHP_Q32']=$R_PHP_Q32;
    }else{
       $R_PHP_Q32=$_SESSION['R_PHP_Q32'];
    }

    if(isset($_GET['R_PHP_Q33'])){
        $R_PHP_Q33 = $_GET['R_PHP_Q33'];
        $_SESSION['R_PHP_Q33']=$R_PHP_Q33;
    }else{
       $R_PHP_Q33=$_SESSION['R_PHP_Q33'];
    }
    
    if(isset($_GET['R_PHP_Q34'])){
        $R_PHP_Q34 = $_GET['R_PHP_Q34'];
        $_SESSION['R_PHP_Q34']=$R_PHP_Q34;
    }else{
       $R_PHP_Q34=$_SESSION['R_PHP_Q34'];
    }

    $R_PHP_Q3=[$R_PHP_Q31,$R_PHP_Q32,$R_PHP_Q33,$R_PHP_Q34];
    $v3=0;
    foreach($R_PHP_Q3 as $R_PHP_Q){
        // echo $R_PHP_Q;
        
        if($R_PHP_Q=="true")
        $v3++;
    }
    

    // echo $v3 ?>
    <form id="form3">
    <input type="number" name="v3" value=<?php echo $v3 ;?> hidden><br>
    </form>
    <!-- ////////////////////q3////////////////// -->

    <?php
    //////////// q4///////////////////

    if(isset($_GET['PHP_Q4'])){
        $PHP_Q4 = $_GET['PHP_Q4'];
        $_SESSION['PHP_Q4']=$PHP_Q4;
    }else{
       $PHP_Q4=$_SESSION['PHP_Q4'];
    }

    if(isset($_GET['PHP_Q41'])){
        $PHP_Q41 = $_GET['PHP_Q41'];
        $_SESSION['PHP_Q41']=$PHP_Q41;
    }else{
       $PHP_Q41=$_SESSION['PHP_Q41'];
    }

    
    if(isset($_GET['PHP_Q42'])){
        $PHP_Q42 = $_GET['PHP_Q42'];
        $_SESSION['PHP_Q42']=$PHP_Q42;
    }else{
       $PHP_Q42=$_SESSION['PHP_Q42'];
    }

    if(isset($_GET['PHP_Q43'])){
        $PHP_Q43 = $_GET['PHP_Q43'];
        $_SESSION['PHP_Q43']=$PHP_Q43;
    }else{
       $PHP_Q43=$_SESSION['PHP_Q43'];
    }
    
    if(isset($_GET['PHP_Q44'])){
        $PHP_Q44 = $_GET['PHP_Q44'];
        $_SESSION['PHP_Q44']=$PHP_Q44;
    }else{
       $PHP_Q44=$_SESSION['PHP_Q44'];
    }

    if(isset($_GET['R_PHP_Q41'])){
        $R_PHP_Q41 = $_GET['R_PHP_Q41'];
        $_SESSION['R_PHP_Q41']=$R_PHP_Q41;
    }else{
       $R_PHP_Q41=$_SESSION['R_PHP_Q41'];
    }

    if(isset($_GET['R_PHP_Q42'])){
        $R_PHP_Q42 = $_GET['R_PHP_Q42'];
        $_SESSION['R_PHP_Q42']=$R_PHP_Q42;
    }else{
       $R_PHP_Q42=$_SESSION['R_PHP_Q42'];
    }

    if(isset($_GET['R_PHP_Q43'])){
        $R_PHP_Q43 = $_GET['R_PHP_Q43'];
        $_SESSION['R_PHP_Q43']=$R_PHP_Q43;
    }else{
       $R_PHP_Q43=$_SESSION['R_PHP_Q43'];
    }
    
    if(isset($_GET['R_PHP_Q44'])){
        $R_PHP_Q44 = $_GET['R_PHP_Q44'];
        $_SESSION['R_PHP_Q44']=$R_PHP_Q44;
    }else{
       $R_PHP_Q44=$_SESSION['R_PHP_Q44'];
    }

    $R_PHP_Q4=[$R_PHP_Q41,$R_PHP_Q42,$R_PHP_Q43,$R_PHP_Q44];
    $v4=0;
    foreach($R_PHP_Q4 as $R_PHP_Q){
        // echo $R_PHP_Q;
        
        if($R_PHP_Q=="true")
        $v4++;
    }
    

    // echo $v4 ?>
    <form id="form4">
    <input type="number" name="v4" value=<?php echo $v4 ;?> hidden><br>
    </form>
    <!-- ////////////////////q4////////////////// -->

    <?php
    //////////// q5///////////////////

    if(isset($_GET['PHP_Q5'])){
        $PHP_Q5 = $_GET['PHP_Q5'];
        $_SESSION['PHP_Q5']=$PHP_Q5;
    }else{
       $PHP_Q5=$_SESSION['PHP_Q5'];
    }

    if(isset($_GET['PHP_Q51'])){
        $PHP_Q51 = $_GET['PHP_Q51'];
        $_SESSION['PHP_Q51']=$PHP_Q51;
    }else{
       $PHP_Q51=$_SESSION['PHP_Q51'];
    }

    
    if(isset($_GET['PHP_Q52'])){
        $PHP_Q52 = $_GET['PHP_Q52'];
        $_SESSION['PHP_Q52']=$PHP_Q52;
    }else{
       $PHP_Q52=$_SESSION['PHP_Q52'];
    }

    if(isset($_GET['PHP_Q53'])){
        $PHP_Q53 = $_GET['PHP_Q53'];
        $_SESSION['PHP_Q53']=$PHP_Q53;
    }else{
       $PHP_Q53=$_SESSION['PHP_Q53'];
    }
    
    if(isset($_GET['PHP_Q54'])){
        $PHP_Q54 = $_GET['PHP_Q54'];
        $_SESSION['PHP_Q54']=$PHP_Q54;
    }else{
       $PHP_Q54=$_SESSION['PHP_Q54'];
    }

    if(isset($_GET['R_PHP_Q51'])){
        $R_PHP_Q51 = $_GET['R_PHP_Q51'];
        $_SESSION['R_PHP_Q51']=$R_PHP_Q51;
    }else{
       $R_PHP_Q51=$_SESSION['R_PHP_Q51'];
    }

    if(isset($_GET['R_PHP_Q52'])){
        $R_PHP_Q52 = $_GET['R_PHP_Q52'];
        $_SESSION['R_PHP_Q52']=$R_PHP_Q52;
    }else{
       $R_PHP_Q52=$_SESSION['R_PHP_Q52'];
    }

    if(isset($_GET['R_PHP_Q53'])){
        $R_PHP_Q53 = $_GET['R_PHP_Q53'];
        $_SESSION['R_PHP_Q53']=$R_PHP_Q53;
    }else{
       $R_PHP_Q53=$_SESSION['R_PHP_Q53'];
    }
    
    if(isset($_GET['R_PHP_Q54'])){
        $R_PHP_Q54 = $_GET['R_PHP_Q54'];
        $_SESSION['R_PHP_Q54']=$R_PHP_Q54;
    }else{
       $R_PHP_Q54=$_SESSION['R_PHP_Q54'];
    }

    $R_PHP_Q5=[$R_PHP_Q51,$R_PHP_Q52,$R_PHP_Q53,$R_PHP_Q54];
    $v5=0;
    foreach($R_PHP_Q5 as $R_PHP_Q){
        // echo $R_PHP_Q;
        
        if($R_PHP_Q=="true")
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
    <li><?php echo $PHP_Q1 ?></li>
       
        <div class="QQQQ">
    <div class="qqq">

    <label for="c1"> <input type="checkbox" name="q1" value=<?php echo $_SESSION['R_PHP_Q11'] ?> id="c1"><?php echo $PHP_Q11 ?></label><br>
    <label for="c2"><input type="checkbox" name="q1" value=<?php echo $R_PHP_Q12 ?> id="c2"><?php echo $PHP_Q12 ?></label>

    </div>
            <div>

    <label for="c3"><input type="checkbox" name="q1" value=<?php echo $R_PHP_Q13 ?> id="c3"><?php echo $PHP_Q13 ?></label><br>
    <label for="c4"><input type="checkbox" name="q1" value=<?php echo $R_PHP_Q14 ?> id="c4"><?php echo $PHP_Q14 ?></label>
    </div>
        </div>
    
    
    <br>
 <!-- q2     -->
 <li><?php echo $PHP_Q2 ?></li>
       
       <div class="QQQQ">
   <div class="qqq">

   <label for="c5"> <input type="checkbox" name="q2" value=<?php echo $R_PHP_Q21 ?> id="c5"><?php echo $PHP_Q21 ?></label><br>
   <label for="c6"><input type="checkbox" name="q2" value=<?php echo $R_PHP_Q22 ?> id="c6"><?php echo $PHP_Q22 ?></label>

   </div>
           <div>

   <label for="c7"><input type="checkbox" name="q2" value=<?php echo $R_PHP_Q23 ?> id="c7"><?php echo $PHP_Q23 ?></label><br>
   <label for="c8"><input type="checkbox" name="q2" value=<?php echo $R_PHP_Q24 ?> id="c8"><?php echo $PHP_Q24 ?></label>
   </div>
       </div>
   
   
   <br>

   <!-- q3     -->
 <li><?php echo $PHP_Q3 ?></li>
       
       <div class="QQQQ">
   <div class="qqq">

   <label for="c9"> <input type="checkbox" name="q3" value=<?php echo $R_PHP_Q31 ?> id="c9"><?php echo $PHP_Q31 ?></label><br>
   <label for="c10"><input type="checkbox" name="q3" value=<?php echo $R_PHP_Q32 ?> id="c10"><?php echo $PHP_Q32 ?></label>

   </div>
           <div>

   <label for="c11"><input type="checkbox" name="q3" value=<?php echo $R_PHP_Q33 ?> id="c11"><?php echo $PHP_Q33 ?></label><br>
   <label for="c12"><input type="checkbox" name="q3" value=<?php echo $R_PHP_Q34 ?> id="c12"><?php echo $PHP_Q34 ?></label>
   </div>
       </div>
   
   
   <br>

 <!-- q4     -->
 <li><?php echo $PHP_Q4 ?></li>
       
       <div class="QQQQ">
   <div class="qqq">

   <label for="c13"> <input type="checkbox" name="q4" value=<?php echo $R_PHP_Q41 ?> id="c13"><?php echo $PHP_Q41 ?></label><br>
   <label for="c14"><input type="checkbox" name="q4" value=<?php echo $R_PHP_Q42 ?> id="c14"><?php echo $PHP_Q42 ?></label>

   </div>
           <div>

   <label for="c15"><input type="checkbox" name="q4" value=<?php echo $R_PHP_Q43 ?> id="c15"><?php echo $PHP_Q43 ?></label><br>
   <label for="c16"><input type="checkbox" name="q4" value=<?php echo $R_PHP_Q44 ?> id="c16"><?php echo $PHP_Q44 ?></label>
   </div>
       </div>
   
   
   <br>
   <!-- q5     -->
 <li><?php echo $PHP_Q5 ?></li>
       
       <div class="QQQQ">
   <div class="qqq">

   <label for="c17"> <input type="checkbox" name="q5" value=<?php echo $R_PHP_Q51 ?> id="c17"><?php echo $PHP_Q51 ?></label><br>
   <label for="c18"><input type="checkbox" name="q5" value=<?php echo $R_PHP_Q52 ?> id="c18"><?php echo $PHP_Q52 ?></label>

   </div>
           <div>

   <label for="c19"><input type="checkbox" name="q5" value=<?php echo $R_PHP_Q53 ?> id="c19"><?php echo $PHP_Q53 ?></label><br>
   <label for="c20"><input type="checkbox" name="q5" value=<?php echo $R_PHP_Q54 ?> id="c20"><?php echo $PHP_Q54 ?></label>
   </div>
       </div>
   
   
   <br>
    <br>
    
<p>
    <a href="#r_q">   <button id="btn">Result</button>     </a>
             
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
</body>
</html>
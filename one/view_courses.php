<?php
  $course_name = $_GET['course_name'];
  include('config.php');
$sql = " SELECT courses.course_id,courses.course_name,courses.num_stu,rooms.capacity,instructors.first_name,instructors.last_name,time.days,time.Time,time.date,rooms.room_id
         FROM courses,time,instructors,rooms
         WHERE courses.instructor_id=instructors.instructor_id AND courses.room_id=rooms.room_id AND courses.time_id=time.time_id AND courses.course_name = '$course_name'
        ";
$result = mysqli_query($con , $sql); 
$courses = mysqli_fetch_all($result , MYSQLI_ASSOC);
    // echo'<pre>';
    // print_r($result);
    // echo'<pre>';
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
    <link rel="stylesheet" href="style1.css">
    <!-- <link rel="stylesheet" href="fontawesome/css/all.css"> -->
    <title>Login</title>
    <style>
        body::before{
            content:'';
            display: block;
            height:120px;
        }
    </style>
</head>
<body>

<div class="navbar navbar-expand-md bg-dark navbar-dark text-white fixed-top">
    <div class="container">
    <h1><?php echo $course_name;?> </h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="index.php?" class="nav-link">Back</a></li>
               
  
                
            </ul>
        </div>
    </div>
   </div>
   <div class="nnq"><h2>View Courses</h2></div>

<?php if(mysqli_num_rows($result) != 0){?>

 <!-- <div class="navbar navbar-expand-md bg-dark navbar-dark text-white fixed-top ">
    <div class="container d-flex align-items-center justify-content-center">
    <h1><?php echo $courses[0]['course_name'];?>  Courses</h1>
    </div>
    </div>  -->
    
    <!-- <h2><?php echo $courses[0]['course_name'];?></h2> -->

    <table >
  <thead>
    <tr class="bg-dark text-warning">
     <th scope="col">ID</th>
      <th scope="col">Course Name</th>
      <th scope="col" colspan="2">Instructore Name</th>
      <th scope="col"> Days</th>
      <th scope="col"> Time</th>
      <th scope="col"> Date</th>
      <th scope="col"> Capacity</th>
      <th scope="col"> Num_Stu</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($courses as $course){?>
            <tr>
                <td ><?php echo $course['course_id']?></td>
                <td ><?php echo $course['course_name']?></td>
                <td ><?php echo $course['first_name']?></td>
                <td><?php echo $course['last_name']?></td>
                <td><?php echo $course['days']?></td>
                <td><?php echo $course['Time']?></td>
                <td><?php echo $course['date']?></td>
                <td><?php echo $course['capacity']?></td>
                <td><?php echo $course['num_stu']?></td>
             
                
            </tr>
        <?php }?>
  </tbody>
</table>


 <!-- JavaScript Bundle with Popper -->
 
<?php }
 else{
    echo '<h3 >'.'No Courses'.'</h3><br>';
    ?>
   
    <img  src="img/loading.svg"  class="d-block w-100%  imglo"/>
    <?php
}?>
<br>
<div class="line"></div>


<!-- //QUZ -->

<br>
<br>
<div class="nnq"><h2 id="test"> Test Yourself ")</h2></div> 
<br>
<?php
if(isset($_GET['action_one'])){
     $action_one = $_GET['action_one'];
     $_SESSION['action_one']=$action_one;
 }else{
    $action_one=$_SESSION['action_one'];
 }
 if($action_one == 'HTML'){?>




    <nav>
    <section>
    <ol>
    <li>The HTML language:</li>
   
    <div class="QQQQ">
<div class="qqq">
    <label for="c1"> <input type="checkbox" name="q1" value="software" id="c1"> software</label><br>
    <label for="c2"><input type="checkbox" name="q1" value="descriptive" id="c2"> descriptive</label>
</div>

<div>
    <label for="c3"><input type="checkbox" name="q1" value="formatting" id="c3"> formatting</label><br>
    <label for="c4"><input type="checkbox" name="q1" value="software&descriptive" id="c4"> software&descriptive</label>
</div>
</div>
<br><br>

    <li>What property determines the destination for sending form data?</li>
    <div class="QQQQ">
        <div class="qqq">
            <label for="c5"> <input type="checkbox" name="q2" value="action" id="c5"> action</label><br>
            <label for="c6"><input type="checkbox" name="q2" value="method" id="c6"> method</label>
        </div>
        
        <div >
            <label for="c7"><input type="checkbox" name="q2" value="destination" id="c7"> destination</label><br>
            <label for="c8"><input type="checkbox" name="q2" value="target" id="c8"> target</label>
        </div>
    </div>

<br><br>
    <li>What property determines the number of characters for a text box?</li>
    <div class="QQQQ">
        <div class="qqq">
            <label for="c9"> <input type="checkbox" name="q3" value="size" id="c9"> size</label><br>
            <label for="c10"><input type="checkbox" name="q3" value="len" id="c10"> len</label>
        </div>
        <div>
            <label for="c11"><input type="checkbox" name="q3" value="length" id="c11"> length</label><br>
            <label for="c12"><input type="checkbox" name="q3" value="max" id="c12"> max</label>
        </div>
    </div>
<br><br>
    <li>From the target attribute values:</li>
    <div class="QQQQ">
        <div class="qqq">
            <label for="c11"> <input type="checkbox" name="q4" value="_blank" id="c11">_blank</label><br>
            <label for="c12"><input type="checkbox" name="q4" value="_empty" id="c12">_empty</label>
        </div>
        <div>

            <label for="c13"><input type="checkbox" name="q4" value="_top" id="c13">_top</label><br>
            <label for="c14"><input type="checkbox" name="q4" value="_self" id="c14">_self</label>
        </div>
    </div>

<br><br>
    <li>What is the tag of the largest header?</li>
    <div class="QQQQ">
        <div class="qqq">
            <label for="c15"> <input type="checkbox" name="q5" value="<h6>" id="c15"> h6</label><br>
            <label for="c16"><input type="checkbox" name="q5" value="<headings>" id="c16"> headings</label>
        </div>
        <div>
            <label for="c17"><input type="checkbox" name="q5" value="<head>" id="c17"> head</label><br>
            <label for="c18"><input type="checkbox" name="q5" value="<h1>" id="c18"> h1</label>
        </div>
    </div>


    <br><br>
    <li>From the table tags:</li>
    <div class="QQQQ">
        <div class="qqq">
            <label for="c19"> <input type="checkbox" name="q6" value="<tt>" id="c19"> tt</label><br>
            <label for="c20"><input type="checkbox" name="q6" value="<table>" id="c20"> table</label>
        </div>
        <div>
            <label for="c21"><input type="checkbox" name="q6" value="<th>" id="c21"> th</label><br>
            <label for="c22"><input type="checkbox" name="q6" value="<col>" id="c22"> col</label>
        </div>
    </div>

    <br><br>
    <li>For any effect, you can add colspan?</li>
    <div class="QQQQ">
        <div class="qqq">
            <label for="c23"> <input type="checkbox" name="q7" value="table" id="c23"> table</label><br>
            <label for="c24"><input type="checkbox" name="q7" value="tr" id="c24"> tr</label>
        </div>
        <div>
            <label for="c25"><input type="checkbox" name="q7" value="td" id="c25"> td</label><br>
            <label for="c26"><input type="checkbox" name="q7" value="tt" id="c26"> tt</label>
        </div>
    </div>


    <br><br>
    <li>List insert tag:</li>
    <div class="QQQQ">
        <div class="qqq">
            <label for="c27"> <input type="checkbox" name="q8" value="<ol>" id="c27"> ol</label><br>
            <label for="c28"><input type="checkbox" name="q8" value="<dl>" id="c28"> dl</label>
        </div>
        <div>
            <label for="c29"><input type="checkbox" name="q8" value="<list>" id="c29"> list</label><br>
            <label for="c30"><input type="checkbox" name="q8" value="<ul>" id="c30"> ul</label>
        </div>
    </div>


<br>
<br>

    <p>
      <a href="#r_q">    <button id="btn">Result</button>     </a>
         
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


<br>
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
<script src="js_html.js"></script>

  <?php
   




// echo 'quz html';
 }


 else if($action_one == 'CSS'){?>

        <nav>
        <section>
        <ol>
        <li>The CSS language:</li>
       
        <div class="QQQQ">
    <div class="qqq">
        <label for="c1"> <input type="checkbox" name="q1" value="software" id="c1"> software</label><br>
        <label for="c2"><input type="checkbox" name="q1" value="descriptive" id="c2"> descriptive</label>
    </div>
    
    <div>
        <label for="c3"><input type="checkbox" name="q1" value="formatting" id="c3"> formatting</label><br>
        <label for="c4"><input type="checkbox" name="q1" value="software&descriptive" id="c4"> software&descriptive</label>
    </div>
    </div>
    <br><br>
    
        <li>Whate is the attribute used in HTML to directly add the CSS format of the element itself?</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c5"> <input type="checkbox" name="q2" value="style" id="c5"> style</label><br>
                <label for="c6"><input type="checkbox" name="q2" value="font" id="c6"> font</label>
            </div>
            
            <div >
                <label for="c7"><input type="checkbox" name="q2" value="class" id="c7"> class</label><br>
                <label for="c8"><input type="checkbox" name="q2" value="color" id="c8"> color</label>
            </div>
        </div>
    
    <br><br>
        <li>Which of the following properties is used to change the font type?</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c9"> <input type="checkbox" name="q3" value="font-style" id="c9"> font-style</label><br>
                <label for="c10"><input type="checkbox" name="q3" value="font-variant" id="c10"> font-variant</label>
            </div>
            <div>
                <label for="c11"><input type="checkbox" name="q3" value="font-weight" id="c11"> font-weight</label><br>
                <label for="c12"><input type="checkbox" name="q3" value="font-family" id="c12"> font-family</label>
            </div>
        </div>
    <br><br>
        <li>Which of the following properties is used to set the background color of an element?</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c11"> <input type="checkbox" name="q4" value="background-image" id="c11"> background-image</label><br>
                <label for="c12"><input type="checkbox" name="q4" value="background-color" id="c12"> background-color</label>
            </div>
            <div>
    
                <label for="c13"><input type="checkbox" name="q4" value="background-repeat" id="c13"> background-repeat</label><br>
                <label for="c14"><input type="checkbox" name="q4" value="background-position" id="c14"> background-position</label>
            </div>
        </div>
    
    <br><br>
        <li>How do you create "rounded" conrners with CSS3?</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c15"> <input type="checkbox" name="q5" value="border[round]:30px;" id="c15"> border[round]:30px;</label><br>
                <label for="c16"><input type="checkbox" name="q5" value="corner-effect:round;" id="c16"> corner-effect:round;</label>
            </div>
            <div>
                <label for="c17"><input type="checkbox" name="q5" value="border-radius:30px;" id="c17"> border-radius:30px;</label><br>
                <label for="c18"><input type="checkbox" name="q5" value="alpha-effect:round;" id="c18"> alpha-effect:round;</label>
            </div>
        </div>
    
    
        <br><br>
        <li>Which of the following properties is used to set border width of an image?</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c19"> <input type="checkbox" name="q6" value="border" id="c19"> border</label><br>
                <label for="c20"><input type="checkbox" name="q6" value="height" id="c20"> height</label>
            </div>
            <div>
                <label for="c21"><input type="checkbox" name="q6" value="width" id="c21"> width</label><br>
                <label for="c22"><input type="checkbox" name="q6" value="moz-opacity" id="c22"> moz-opacity</label>
            </div>
        </div>
    
        <br><br>
        <li>What is the proper code structure in CSS?</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c23"> <input type="checkbox" name="q7" value="{body:color=black}" id="c23"> {body:color=black}</label><br>
                <label for="c24"><input type="checkbox" name="q7" value="body:color=black" id="c24"> body:color=black</label>
            </div>
            <div>
                <label for="c25"><input type="checkbox" name="q7" value="body{color:black;}" id="c25"> body{color:black;}</label><br>
                <label for="c26"><input type="checkbox" name="q7" value="{body:color:black}" id="c26"> {body:color:black}</label>
            </div>
        </div>
    
    
        <br><br>
        <li>What does CSS mean?</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c27"> <input type="checkbox" name="q8" value="Creative Style Sheets" id="c27"> Creative Style Sheets</label><br>
                <label for="c28"><input type="checkbox" name="q8" value="Cascading Style Sheets" id="c28"> Cascading Style Sheets</label>
            </div>
            <div>
                <label for="c29"><input type="checkbox" name="q8" value="Computer Style Sheets" id="c29"> Computer Style Sheets</label><br>
                <label for="c30"><input type="checkbox" name="q8" value="Colorful Style Sheets" id="c30"> Colorful Style Sheets</label>
            </div>
        </div>
    
    
    <br>
    <br>
    
        <p>
            <a href="#r_q"> <button id="btn">Result</button>  </a>   
             
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
    
    
    <br>
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
    <script src="js_css.js"></script>
    
      <?php
       
    
    
    
    
    // echo 'quz html';
     }
    //js
    else if($action_one == 'JS'){?>

        <nav>
        <section>
        <ol>
        <li>The JavaScript language:</li>
       
        <div class="QQQQ">
    <div class="qqq">
        <label for="c1"> <input type="checkbox" name="q1" value="software" id="c1"> software</label><br>
        <label for="c2"><input type="checkbox" name="q1" value="descriptive" id="c2"> descriptive</label>
    </div>
    
    <div>
        <label for="c3"><input type="checkbox" name="q1" value="formatting" id="c3"> formatting</label><br>
        <label for="c4"><input type="checkbox" name="q1" value="descriptive&formatting" id="c4"> descriptive&formatting</label>
    </div>
    </div>
    <br><br>
    
        <li>From output statements in JavaScript:</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c5"> <input type="checkbox" name="q2" value="alert()" id="c5"> alert()</label><br>
                <label for="c6"><input type="checkbox" name="q2" value="prompt()" id="c6"> prompt()</label>
            </div>
            
            <div >
                <label for="c7"><input type="checkbox" name="q2" value="confirm()" id="c7"> confirm()</label><br>
                <label for="c8"><input type="checkbox" name="q2" value="console.log()" id="c8"> console.log()</label>
            </div>
        </div>
    
    <br><br>
        <li>From input statements in JavaScript:</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c9"> <input type="checkbox" name="q3" value="alert()" id="c9"> alert()</label><br>
                <label for="c10"><input type="checkbox" name="q3" value="prompt()" id="c10"> prompt()</label>
            </div>
            <div>
                <label for="c11"><input type="checkbox" name="q3" value="confirm()" id="c11"> confirm()</label><br>
                <label for="c12"><input type="checkbox" name="q3" value="console.log()" id="c12"> console.log()</label>
            </div>
        </div>
    <br><br>
        <li>How many parameters can i add to the function?</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c11"> <input type="checkbox" name="q4" value="1" id="c11"> 1</label><br>
                <label for="c12"><input type="checkbox" name="q4" value="2" id="c12"> 2</label>
            </div>
            <div>
    
                <label for="c13"><input type="checkbox" name="q4" value="3" id="c13"> 3</label><br>
                <label for="c14"><input type="checkbox" name="q4" value="the number you want" id="c14"> the number you want</label>
            </div>
        </div>
    
    <br><br>
        <li>JavaScript insert tag:</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c15"> <input type="checkbox" name="q5" value="<script>" id="c15"> script</label><br>
                <label for="c16"><input type="checkbox" name="q5" value="<java>" id="c16"> java</label>
            </div>
            <div>
                <label for="c17"><input type="checkbox" name="q5" value="<js>" id="c17"> js</label><br>
                <label for="c18"><input type="checkbox" name="q5" value="<javascript>" id="c18"> javascript</label>
            </div>
        </div>
    
    
        <br><br>
        <li>Conditional statements in JavaScript:</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c19"> <input type="checkbox" name="q6" value="for" id="c19"> for</label><br>
                <label for="c20"><input type="checkbox" name="q6" value="if" id="c20"> if</label>
            </div>
            <div>
                <label for="c21"><input type="checkbox" name="q6" value="switch-case" id="c21"> switch-case</label><br>
                <label for="c22"><input type="checkbox" name="q6" value="else" id="c22"> else</label>
            </div>
        </div>
    
        <br><br>
        <li>What is the correct form of writing?</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c23"> <input type="checkbox" name="q7" value="response.write()" id="c23"> response.write("Hi")</label><br>
                <label for="c24"><input type="checkbox" name="q7" value="document.write()" id="c24"> document.write("Hi")</label>
            </div>
            <div>
                <label for="c25"><input type="checkbox" name="q7" value="output()" id="c25"> output("Hi")</label><br>
                <label for="c26"><input type="checkbox" name="q7" value="request.writ()" id="c26"> request.writ("Hi")</label>
            </div>
        </div>
    
    
        <br><br>
        <li>From JavaScript instructions</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c27"> <input type="checkbox" name="q8" value="getElementById" id="c27"> getElementById</label><br>
                <label for="c28"><input type="checkbox" name="q8" value="getElementsByName" id="c28"> getElementsByName</label>
            </div>
            <div>
                <label for="c29"><input type="checkbox" name="q8" value="getElementByName" id="c29"> getElementByName</label><br>
                <label for="c30"><input type="checkbox" name="q8" value="document.write" id="c30"> document.write</label>
            </div>
        </div>
    
    
    <br>
    <br>
    
        <p>
           <a href="#r_q"> <button id="btn">Result</button>     </a>
             
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
    
    
    <br>
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
    <script src="js_js.js"></script>
    
      <?php
       
    
    
    
    
    // echo 'quz html';
     }
    //PHP
    else if($action_one == 'PHP'){?>
       
        <nav>
        <section>
        <ol>
        <li>The PHP language:</li>
       
        <div class="QQQQ">
    <div class="qqq">
        <label for="c1"> <input type="checkbox" name="q1" value="software" id="c1"> software</label><br>
        <label for="c2"><input type="checkbox" name="q1" value="descriptive" id="c2"> descriptive</label>
    </div>
    
    <div>
        <label for="c3"><input type="checkbox" name="q1" value="formatting" id="c3"> formatting</label><br>
        <label for="c4"><input type="checkbox" name="q1" value="descriptive&formatting" id="c4"> descriptive&formatting</label>
    </div>
    </div>
    <br><br>
    
        <li>When using $_GET, the data is visible to:</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c5"> <input type="checkbox" name="q2" value="none" id="c5"> none</label><br>
                <label for="c6"><input type="checkbox" name="q2" value="only you" id="c6"> only you</label>
            </div>
            
            <div >
                <label for="c7"><input type="checkbox" name="q2" value="every one" id="c7"> every one</label><br>
                <label for="c8"><input type="checkbox" name="q2" value="selected few" id="c8"> selected few</label>
            </div>
        </div>
    
    <br><br>
        <li>When using $_POST, the data is visible to:</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c9"> <input type="checkbox" name="q3" value="none" id="c9"> none</label><br>
                <label for="c10"><input type="checkbox" name="q3" value="only you" id="c10"> only you</label>
            </div>
            <div>
                <label for="c11"><input type="checkbox" name="q3" value="every one" id="c11"> every one</label><br>
                <label for="c12"><input type="checkbox" name="q3" value="selected few" id="c12"> selected few</label>
            </div>
        </div>
    <br><br>
        <li>What variable is used with data sent by both get and post methods?</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c11"> <input type="checkbox" name="q4" value="$BOTH" id="c11"> $BOTH</label><br>
                <label for="c12"><input type="checkbox" name="q4" value="$_BOTH" id="c12"> $_BOTH</label>
            </div>
            <div>
    
                <label for="c13"><input type="checkbox" name="q4" value="$REQUEST" id="c13"> $REQUEST</label><br>
                <label for="c14"><input type="checkbox" name="q4" value="$_REQUEST" id="c14"> $_REQUEST</label>
            </div>
        </div>
    
    <br><br>
        <li>What method should not be used to send a password?</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c15"> <input type="checkbox" name="q5" value="get" id="c15"> get</label><br>
                <label for="c16"><input type="checkbox" name="q5" value="post" id="c16"> post</label>
            </div>
            <div>
                <label for="c17"><input type="checkbox" name="q5" value="request" id="c17"> request</label><br>
                <label for="c18"><input type="checkbox" name="q5" value="next" id="c18"> next</label>
            </div>
        </div>
    
    
        <br><br>
        <!-- <li>Conditional statements in JavaScript:</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c19"> <input type="checkbox" name="q6" value="for" id="c19"> for</label><br>
                <label for="c20"><input type="checkbox" name="q6" value="if" id="c20"> if</label>
            </div>
            <div>
                <label for="c21"><input type="checkbox" name="q6" value="switch-case" id="c21"> switch-case</label><br>
                <label for="c22"><input type="checkbox" name="q6" value="else" id="c22"> else</label>
            </div>
        </div>
    
        <br><br> -->
        <!-- <li>What is the correct form of writing?</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c23"> <input type="checkbox" name="q7" value="response.write()" id="c23"> response.write("Hi")</label><br>
                <label for="c24"><input type="checkbox" name="q7" value="document.write()" id="c24"> document.write("Hi")</label>
            </div>
            <div>
                <label for="c25"><input type="checkbox" name="q7" value="output()" id="c25"> output("Hi")</label><br>
                <label for="c26"><input type="checkbox" name="q7" value="request.writ()" id="c26"> request.writ("Hi")</label>
            </div>
        </div>
    
    
        <br><br> -->
        <!-- <li>From JavaScript instructions</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c27"> <input type="checkbox" name="q8" value="getElementById" id="c27"> getElementById</label><br>
                <label for="c28"><input type="checkbox" name="q8" value="getElementsByName" id="c28"> getElementsByName</label>
            </div>
            <div>
                <label for="c29"><input type="checkbox" name="q8" value="getElementByName" id="c29"> getElementByName</label><br>
                <label for="c30"><input type="checkbox" name="q8" value="document.write" id="c30"> document.write</label>
            </div>
        </div>
    
    
    <br>
    <br> -->
    
        <p>
          <a href="#r_q">  <button id="btn">Result</button>     </a>
             
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
    
    
    <br>
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
    <script src="js_php.js"></script>
    
      <?php
       
    
    
    
    
    // echo 'quz html';
     }
    
     ////python//
     else if($action_one == 'Python'){?>
       
        <nav>
        <section>
        <ol>
        <li>The PHP language:</li>
       
        <div class="QQQQ">
    <div class="qqq">
        <label for="c1"> <input type="checkbox" name="q1" value="software" id="c1"> software</label><br>
        <label for="c2"><input type="checkbox" name="q1" value="descriptive" id="c2"> descriptive</label>
    </div>
    
    <div>
        <label for="c3"><input type="checkbox" name="q1" value="formatting" id="c3"> formatting</label><br>
        <label for="c4"><input type="checkbox" name="q1" value="descriptive&formatting" id="c4"> descriptive&formatting</label>
    </div>
    </div>
    <br><br>
    
        <li>When using $_GET, the data is visible to:</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c5"> <input type="checkbox" name="q2" value="none" id="c5"> none</label><br>
                <label for="c6"><input type="checkbox" name="q2" value="only you" id="c6"> only you</label>
            </div>
            
            <div >
                <label for="c7"><input type="checkbox" name="q2" value="every one" id="c7"> every one</label><br>
                <label for="c8"><input type="checkbox" name="q2" value="selected few" id="c8"> selected few</label>
            </div>
        </div>
    
    <br><br>
        <li>When using $_POST, the data is visible to:</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c9"> <input type="checkbox" name="q3" value="none" id="c9"> none</label><br>
                <label for="c10"><input type="checkbox" name="q3" value="only you" id="c10"> only you</label>
            </div>
            <div>
                <label for="c11"><input type="checkbox" name="q3" value="every one" id="c11"> every one</label><br>
                <label for="c12"><input type="checkbox" name="q3" value="selected few" id="c12"> selected few</label>
            </div>
        </div>
    <br><br>
        <li>What variable is used with data sent by both get and post methods?</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c11"> <input type="checkbox" name="q4" value="$BOTH" id="c11"> $BOTH</label><br>
                <label for="c12"><input type="checkbox" name="q4" value="$_BOTH" id="c12"> $_BOTH</label>
            </div>
            <div>
    
                <label for="c13"><input type="checkbox" name="q4" value="$REQUEST" id="c13"> $REQUEST</label><br>
                <label for="c14"><input type="checkbox" name="q4" value="$_REQUEST" id="c14"> $_REQUEST</label>
            </div>
        </div>
    
    <br><br>
        <li>What method should not be used to send a password?</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c15"> <input type="checkbox" name="q5" value="get" id="c15"> get</label><br>
                <label for="c16"><input type="checkbox" name="q5" value="post" id="c16"> post</label>
            </div>
            <div>
                <label for="c17"><input type="checkbox" name="q5" value="request" id="c17"> request</label><br>
                <label for="c18"><input type="checkbox" name="q5" value="next" id="c18"> next</label>
            </div>
        </div>
    
    
        <br><br>
        <!-- <li>Conditional statements in JavaScript:</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c19"> <input type="checkbox" name="q6" value="for" id="c19"> for</label><br>
                <label for="c20"><input type="checkbox" name="q6" value="if" id="c20"> if</label>
            </div>
            <div>
                <label for="c21"><input type="checkbox" name="q6" value="switch-case" id="c21"> switch-case</label><br>
                <label for="c22"><input type="checkbox" name="q6" value="else" id="c22"> else</label>
            </div>
        </div>
    
        <br><br> -->
        <!-- <li>What is the correct form of writing?</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c23"> <input type="checkbox" name="q7" value="response.write()" id="c23"> response.write("Hi")</label><br>
                <label for="c24"><input type="checkbox" name="q7" value="document.write()" id="c24"> document.write("Hi")</label>
            </div>
            <div>
                <label for="c25"><input type="checkbox" name="q7" value="output()" id="c25"> output("Hi")</label><br>
                <label for="c26"><input type="checkbox" name="q7" value="request.writ()" id="c26"> request.writ("Hi")</label>
            </div>
        </div>
    
    
        <br><br> -->
        <!-- <li>From JavaScript instructions</li>
        <div class="QQQQ">
            <div class="qqq">
                <label for="c27"> <input type="checkbox" name="q8" value="getElementById" id="c27"> getElementById</label><br>
                <label for="c28"><input type="checkbox" name="q8" value="getElementsByName" id="c28"> getElementsByName</label>
            </div>
            <div>
                <label for="c29"><input type="checkbox" name="q8" value="getElementByName" id="c29"> getElementByName</label><br>
                <label for="c30"><input type="checkbox" name="q8" value="document.write" id="c30"> document.write</label>
            </div>
        </div>
    
    
    <br>
    <br> -->
    
        <p>
          <a href="#r_q">  <button id="btn">Result</button>     </a>
             
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
    
    
    <br>
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
    <script src="js_python.js"></script>
    
      <?php
       
    
    
    
    
    // echo 'quz html';
     }
    
?>

<!-- footer -->

<!-- <footer class="py-4 bg-dark text-white text-center position-relative">
    <div class="container">
        <p class="lead">
            Copyright &copy; 2022 Toleen Falion
        </p>
        <a href="#" class="position-absolute bottom-0 end-0 p-3" >
            <i class="bi bi-arrow-up-circle h2"></i>

        </a>
    </div>
</footer>

<script src="bootstrap5/js/bootstrap.js"></script>
<script src="sss.js"></script> -->
</body>
</html>
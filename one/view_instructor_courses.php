<?php
    session_start();
    include('config.php');
    $instructor_id = $_SESSION['instructor_id'];
    $instructor_first_name=$_SESSION['instructor_first_name'];

    $sql = " SELECT courses.course_id,courses.course_name,courses.num_stu,time.days,time.Time,time.date,rooms.room_id
         FROM courses,time,instructors,rooms
         WHERE instructors.instructor_id=$instructor_id AND courses.instructor_id=instructors.instructor_id AND courses.room_id=rooms.room_id AND courses.time_id=time.time_id 
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
    <link rel="stylesheet" href="fontawesome/css/all.css">

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
    <h1 ><?php echo $_SESSION['instructor_first_name']; ?></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav ms-auto">



            <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Search</a>
                    <ul class="dropdown-menu">
                        <li><a href="#ViewCourses" class="dropdown-item">View Courses</a></li>
                        <li><a href="#AddNewQuiz" class="dropdown-item">Add New Quiz</a></li>
                        <li><a href="#AddNewFile" class="dropdown-item">Add New File</a></li>
                    </ul>
                </li>

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
          <img src="img/welcome.svg"  class="d-block w-100% ">
          
          <br id="ViewCourses"><br>
         <div class="nnq"><h2>View Courses</h2></div>
        
        <table >
         <thead>
            <tr class="bg-dark text-warning">
                <th scope="col">ID</th>
                <th scope="col">course Name</th>
                <th scope="col">Days</th>
                <th scope="col">Time</th> 
                <th scope="col">Date</th> 
                <th scope="col">Room</th>
                <th scope="col">Num_Stu</th>
               
                     
            </tr>
         </thead>
         <tbody>
            <?php foreach($courses as $course){?>
                <tr>
                    <td><?php echo $course['course_id']?></td>
                    <td><?php echo $course['course_name']?></td>
                    <td><?php echo $course['days']?></td>
                    <td><?php echo $course['Time']?></td>
                    <td><?php echo $course['date']?></td>
                    <td><?php echo $course['room_id']?></td>
                    <td><?php echo $course['num_stu']?></td>
                   
                </tr>
            <?php }?>
            </tbody>
    </table>
  <?php  if(isset($_GET['tag'])){
            unset($_SESSION['msg_HTML']);
            unset($_SESSION['msg_CSS']);
            unset($_SESSION['msg_JS']);
            unset($_SESSION['msg_PHP']);
            unset($_SESSION['msg_Python']);
            unset($_SESSION['msg_file']);
            
           
        }
            ?>
<br id="AddNewQuiz"><br>
<div class="line"></div>
<br><br>
<div class="nnq"><h2> Add New Quiz</h2></div>
    <div  class="form1i">
    
    <a href="CRUD_operations.php?course_name=HTML&instructor_id=<?php echo $_SESSION['instructor_id']?>" >HTML</a>
    
    <?php if(isset($_SESSION['msg_HTML'])){?>
    
   <h1><?php echo $_SESSION['msg_HTML']?></h1>
  <?php }?>

    <!-- <input type="submit" name="action" value="HTML" -->
<a href="CRUD_operations.php?course_name=CSS&instructor_id=<?php echo $_SESSION['instructor_id']?>" >CSS</a>
<?php if(isset($_SESSION['msg_CSS'])){?>
   <h1><?php echo $_SESSION['msg_CSS']?></h1>
  <?php }?>
<a href="CRUD_operations.php?course_name=JS&instructor_id=<?php echo $_SESSION['instructor_id']?>" >JS</a>
<?php if(isset($_SESSION['msg_JS'])){?>
   <h1><?php echo $_SESSION['msg_JS']?></h1>
  <?php }?>

  <a href="CRUD_operations.php?course_name=PHP&instructor_id=<?php echo $_SESSION['instructor_id']?>" >PHP</a>  
  <?php if(isset($_SESSION['msg_PHP'])){?>
   <h1><?php echo $_SESSION['msg_PHP']?></h1>
  <?php }?>


  <a href="CRUD_operations.php?course_name=	Python&instructor_id=<?php echo $_SESSION['instructor_id']?>" >Python</a>  
  <?php if(isset($_SESSION['msg_Python'])){?>
   <h1><?php echo $_SESSION['msg_Python']?></h1>
  <?php }?>

  
  <!-- <input type="submit" name="action" value="CSS" >

    <input type="submit" name="action" value="JS" >

    <input type="submit" name="action" value="PHP" >

    <input type="submit" name="action" value="Python" >  -->


    <!-- <input type="text" name="tag" value="1" hidden > -->

  </div>

    <!-- /////// file-->

    <br id="AddNewFile"> 
<div class="line"></div>
<br>
<br>

    <div class="nnq"><h2> Add New File</h2></div>
    
        <div class="file">
   

  
  <form action="folder.php?instructor_id=<?php echo $_SESSION['instructor_id']?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input class="form-control" type="file" name="file" id="file"/>
  </div>
  <input type="submit"  name="upload"  value="HTML" class="btn "/>

  

  <input type="submit"  name="upload"  value="CSS" class="btn "/>

  

  <input type="submit"  name="upload"  value="JS" class="btn "/>

  

  <input type="submit"  name="upload"  value="PHP" class="btn "/>

  

  <input type="submit"  name="upload"  value="Python" class="btn "/>



  <?php if(isset($_SESSION['msg_file'])){?>
   <h6><?php echo $_SESSION['msg_file']?></h6>
  <?php }?>


  </form>

  <img src="img/file.svg"  class="d-block w-100% "/>

  </div>
   
<!-- //file -->

    
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
<?php
    session_start();
    include('config.php');
    $student_id =  $_SESSION['student_id'];
    $student_first_name= $_SESSION['student_first_name'];
    //يوجد خطا في الاستعلام

    $sql = "SELECT courses.course_id,courses.course_name,instructors.first_name,instructors.last_name,time.days,time.Time,time.date,rooms.room_id
            FROM courses,course_stu,instructors,time,rooms
            WHERE courses.room_id=rooms.room_id AND courses.time_id=time.time_id AND courses.instructor_id=instructors.instructor_id AND courses.course_id=course_stu.course_id AND course_stu.stu_id= $student_id" ;
    $result = mysqli_query($con , $sql); 
    
    $courses = mysqli_fetch_all($result , MYSQLI_ASSOC);
    //     echo'<pre>';
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
    <h1 ><?php echo $_SESSION['student_first_name']; ?></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav ms-auto">


            <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Search</a>
                    <ul class="dropdown-menu">
                        <li><a href="#ViewCourses" class="dropdown-item">View Courses</a></li>
                        <li><a href="#NewQuiz" class="dropdown-item">New Quiz</a></li>
                        <li><a href="#DownloadFile" class="dropdown-item">Download File</a></li>
                        <li><a href="#OnlineRegistration" class="dropdown-item">Online Registration</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a href="view_student_courses.php?logout=logout" class="nav-link">logout</a></li>
               
  
                
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
          <div class="nnq"><h2 >View Courses</h2></div>
        <table >
         <thead>
            <tr class="bg-dark text-warning">
                <th scope="col">ID</th>
                <th scope="col">course Name</th>
                <th scope="col" colspan="2">Instructore Name</th>
                <th scope="col">Days</th>
                <th scope="col">Time</th> 
                <th scope="col">Date</th> 
                <th scope="col">Room</th>
               
                     
            </tr>
         </thead>
         <tbody>
            <?php foreach($courses as $course){?>
                <tr>
                    <td><?php echo $course['course_id']?></td>
                    <td><?php echo $course['course_name']?></td>
                    <td><?php echo $course['first_name']?></td>
                    <td><?php echo $course['last_name']?></td>
                    <td><?php echo $course['days']?></td>
                    <td><?php echo $course['Time']?></td>
                    <td><?php echo $course['date']?></td>
                    <td><?php echo $course['room_id']?></td>
                 
                   
                </tr>
            <?php }?>
            </tbody>
    </table>

    <?php  if(isset($_GET['tag'])){
            unset( $_SESSION['msg_close']);
           
           
        }
            ?>
    <br id="NewQuiz"><br>
<div class="line"></div>
<br><br>
<div class="nnq"><h2>New Quiz</h2></div>
    <div class="form1s">

    <form action="HTML_Q.php" class="fs">
    <input type="submit" name="action" value="HTML_Q" >
    </form>

    <form action="CSS_Q.php" class="fs">
    <input type="submit" name="action" value="CSS_Q" >
    </form>

    <form action="JS_Q.php" class="fs">
    <input type="submit" name="action" value="JS_Q" >
    </form>

    <form action="PHP_Q.php" class="fs">
    <input type="submit" name="action" value="PHP_Q" >
    </form>

    <form action="Python_Q.php" class="fs">
    <input type="submit" name="action" value="Python_Q" >
    </form>
    
    <!-- <input type="text" name="tag" value="1" hidden > -->
    </div>



    <br id="DownloadFile"> 
    
<div class="line"></div>
<br>
<br>
    <div class="nnq"><h2>Download Files</h2></div><br>
    <div class="download_file">

    <form action="file.php">
    <input type="submit"  name="Type_File"  value="HTML_File"  class="btn "/>
    <input type="submit"  name="Type_File"  value="CSS_File"  class="btn "/>
    <input type="submit"  name="Type_File"  value="JS_File"  class="btn "/>
    <input type="submit"  name="Type_File"  value="PHP_File"  class="btn "/>
    <input type="submit"  name="Type_File"  value="Python_File"  class="btn "/>
            </form>

            <img src="img/downloadFile.svg"  class="d-block w-100% "/>

</div>


<!-- ////////registration onlin -->
<br>

<div class="line"></div>
<br>
<br>
    <div class="nnq" id="OnlineRegistration"><h2>Online registration</h2></div><br>
    <div class="onlin">
    <a href="Online_view_courses.php?stu_id=<?php echo  $student_id ?>&course_name=HTML &tag='1'" class="my-3">HTML</a>
    <a href="Online_view_courses.php?stu_id=<?php echo  $student_id ?>&course_name=CSS &tag='1' " class="my-3">CSS</a>
    <a href="Online_view_courses.php?stu_id=<?php echo  $student_id ?>&course_name=JS &tag='1'" class="my-3">JS</a>
    <a href="Online_view_courses.php?stu_id=<?php echo  $student_id ?>&course_name=PHP &tag='1'">PHP</a>
    <a href="Online_view_courses.php?stu_id=<?php echo  $student_id ?>&course_name=Python &tag='1'">Python</a>
    </div>
    <img id="Online_close" src="img/online.svg"  class="d-block w-100% "/>
    <?php if(isset($_SESSION['msg_close'])){?>
   <h3><?php echo $_SESSION['msg_close']?></h3>
  <?php }?>

    <br>
<!-- ////////registration onlin////////////// -->





    
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

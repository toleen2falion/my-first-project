<?php
    session_start();  
    $action = $_GET['action'];
    if($action =='v_c_s'){
    if(isset($_GET['student_id'])){
        $student_id = $_GET['student_id'];
        $_SESSION['student_id'] = $_GET['student_id'];
    }else{
        $student_id = $_SESSION['student_id'] ;
    } 
   
    // echo $action;
    
    include('config.php');
    // 3- Prepare Query
   $sql = "SELECT courses.course_id,courses.course_name
            FROM courses,course_stu
            WHERE courses.course_id=course_stu.course_id AND course_stu.stu_id= $student_id" ;
    // 4- Execute Query
    $result = mysqli_query($con , $sql);
    // 5- fetch resulting rows as an array
    $courses = mysqli_fetch_all($result , MYSQLI_ASSOC);
    // echo '<pre>';
    // print_r($courses);
    // echo '</pre>';

    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Document</title>
    <style>
        body::before{
            content:'';
            display: block;
            height:150px;
        }
    </style>
</head>
<body>
<div class="navbar navbar-expand-md bg-dark navbar-dark text-white fixed-top">
    <div class="container">
    <h1 >View Courses</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav ms-auto">
                <!-- tag=1 لكي عندما ننتقل على صفحة ال courses_veiw.php يتم افراغ السيشن من اجل اخفاء الرسالة -->
                <li class="nav-item"><a href="courses_veiw.php?tag='1'" class="nav-link">Back to students</a></li>
                <li class="nav-item"><a href="view.php?" class="nav-link">Back</a></li>
                <li class="nav-item"><a href="index.php?logout=logout" class="nav-link">Logout</a></li>
                </ul>
        </div>
    </div>
   </div>
    <?php

    }
    else if($action =='v_c_i'){
        if(isset($_GET['instructor_id'])){
            $instructor_id = $_GET['instructor_id'];
            $_SESSION['instructor_id'] = $_GET['instructor_id'];
        }else{
            $instructor_id = $_SESSION['instructor_id'] ;
        } 
       
        // echo $action;
        
        include('config.php');
        // 3- Prepare Query
       $sql = "SELECT courses.course_id,courses.course_name
                FROM courses
                WHERE courses.instructor_id=$instructor_id" ;
        // 4- Execute Query
        $result = mysqli_query($con , $sql);
        // 5- fetch resulting rows as an array
        $courses = mysqli_fetch_all($result , MYSQLI_ASSOC);
        // echo '<pre>';
        // print_r($courses);
        // echo '</pre>';
        ?>
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Document</title>
    <style>
        body::before{
            content:'';
            display: block;
            height:150px;
        }
    </style>
</head>
<body>
<div class="navbar navbar-expand-md bg-dark navbar-dark text-white fixed-top">
    <div class="container">
    <h1 >View Courses</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav ms-auto">
                <!-- tag=1 لكي عندما ننتقل على صفحة ال courses_veiw.php يتم افراغ السيشن من اجل اخفاء الرسالة -->
                <li class="nav-item"><a href="courses_veiw.php?tag='1'" class="nav-link">Back to instructors</a></li>
                <li class="nav-item"><a href="view.php?" class="nav-link">Back</a></li>
                <li class="nav-item"><a href="index.php?logout=logout" class="nav-link">Logout</a></li>
                </ul>
        </div>
    </div>
   </div>
        <?php
        }
?>


   <table >
            <tr>
                <th>Course_ID</th>
                <th>Course_Name</th>        
            </tr>
            <?php foreach($courses as $course){?>
                <tr>
                    <td><?php echo $course['course_id']?></td>
                    <td><?php echo $course['course_name']?></td>
                </tr>

            <?php }?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
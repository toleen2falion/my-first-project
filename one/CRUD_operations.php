<?php
session_start();
$course_name=$_GET['course_name'];
$instructor_id=$_GET['instructor_id'];
$_SESSION['course_name']=$course_name;
$action=$_SESSION['course_name'];
// if(isset($_GET['action'])){
//     $action = $_GET['action'];
//     $_SESSION['action']=$action;
// }else{
//    $action=$_SESSION['action'];
// }
echo $course_name.$instructor_id;
include('config.php');
    $sqlt="SELECT * FROM courses WHERE course_name='$course_name' AND instructor_id= '$instructor_id'";
    $resultt = mysqli_query($con , $sqlt);
        echo '<pre>';
        print_r( $resultt);
        echo '</pre>';
    if(mysqli_num_rows($resultt) >= 1){

        header('location:Quiz.php');
        // $c_i = mysqli_fetch_all($resultt , MYSQLI_ASSOC);
        // echo '<pre>';
        // print_r($c_i);
        // echo '</pre>';
    }
    else if($course_name=="HTML"){
        $_SESSION['msg_HTML'] =  "you can't add HTML Quiz";
        header('location:view_instructor_courses.php?#AddNewQuiz');


    }
    else if($course_name=="CSS"){
        $_SESSION['msg_CSS'] =  "you can't add CSS Quiz";
        header('location:view_instructor_courses.php?#AddNewQuiz');


    }
    else if($course_name=="JS"){
        $_SESSION['msg_JS'] = "you can't add JS Quiz";
        header('location:view_instructor_courses.php?#AddNewQuiz');


    }
    else if($course_name=="PHP"){
        $_SESSION['msg_PHP'] ="you can't add PHP Quiz";
        header('location:view_instructor_courses.php?#AddNewQuiz');


    }
    else if($course_name=="Python"){
        $_SESSION['msg_Python'] = "you can't add Python Quiz";
        header('location:view_instructor_courses.php?#AddNewQuiz');


    }

?>
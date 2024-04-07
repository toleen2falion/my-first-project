<?php
session_start();
$course_name=$_POST['upload'];
$instructor_id=$_GET['instructor_id'];
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
        // echo '<pre>';
        // print_r( $resultt);
        // echo '</pre>';
    if(mysqli_num_rows($resultt) >= 1){

        $type=$_POST['upload'];
        if( isset($_FILES['file'])){
            $file_name = $_FILES["file"]["name"];
            $file_size = $_FILES["file"]["size"];
            $tmp_file = $_FILES["file"]["tmp_name"];
            // echo "file name:".$file_name."<br>";
            // echo "file size:".$file_size."<br>";
            // echo "file size:".$tmp_file."<br>";
    echo $type.'<br>';
            $ext = explode(".",$file_name);
            $extension = end($ext);
            $array_extensions = array("png","jpg","pdf");
            if($type=="HTML"){
            $target ="uploads_html/"; }
    
            else if($type=="CSS"){
                $target ="uploads_css/"; }
    
                else if($type=="JS"){
                    $target ="uploads_js/"; }
    
                    else if($type=="PHP"){
                        $target ="uploads_php/"; }
    
                        else if($type=="Python"){
                            $target ="uploads_python/"; }
    
            $error = "";
            if(!in_array( $extension,$array_extensions)){
                $error = "error 1 <br>";
            }
    
            // if($file_size > 3000000){
            //     $error .="error 2 <br>";
            // }
            if(empty($error)){
                move_uploaded_file($tmp_file, $target.$file_name);
                // echo "ok";
                $_SESSION['msg_file'] =  "$type file added Successfully";
            }
            else{
                $_SESSION['msg_file'] =  "$type file added Failed";
            }
            
        }
        header('location:view_instructor_courses.php?#AddNewFile');
      }
      
      
else{
     $_SESSION['msg_file'] =  "you can't add $course_name File";
     header('location:view_instructor_courses.php?#AddNewFile');
}
    
    // else if($course_name=="HTML"){
    //     $_SESSION['msg_HTML_file'] =  "you can't add HTML File";
    //     header('location:view_instructor_courses.php?#AddNewFile');


    // }
    // else if($course_name=="CSS"){
    //     $_SESSION['msg_CSS_file'] =  "you can't add CSS File";
    //     header('location:view_instructor_courses.php?#AddNewFile');


    // }
    // else if($course_name=="JS"){
    //     $_SESSION['msg_JS_file'] =  "you can't add JS File";
    //     header('location:view_instructor_courses.php?#AddNewFile');


    // }
    // else if($course_name=="PHP"){
    //     $_SESSION['msg_PHP_file'] =  "you can't add PHP File";
    //     header('location:view_instructor_courses.php?#AddNewFile');


    // }
    // else if($course_name=="Python"){
    //     $_SESSION['msg_Python_file'] = "you can't add Python File";
    //     header('location:view_instructor_courses.php?#AddNewFile');


    // }

// ?>
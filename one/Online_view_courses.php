<?php
session_start();
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
<?php
if(isset($_GET['course_name'])){
         $course_name = $_GET['course_name'];
         $_SESSION['course_name']=$course_name;
     }else{
        $course_name=$_SESSION['course_name'];
     }
//   $course_name = $_GET['course_name'];
if(isset($_GET['stu_id'])){
    $stu_id = $_GET['stu_id'];
    $_SESSION['stu_id']=$stu_id;
}else{
   $stu_id=$_SESSION['stu_id'];
}
//   $stu_id=$_GET['stu_id'];
  
?>


<div class="navbar navbar-expand-md bg-dark navbar-dark text-white fixed-top">
    <div class="container">
    <h1><?php echo $course_name?> </h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="view_student_courses.php?&tag=i" class="nav-link">Back</a></li>
                <li class="nav-item"><a href="Online_view_courses.php?logout=logout" class="nav-link">logout</a></li>
  
                
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
include('config.php');
$sql="SELECT courses.course_id,courses.course_name,instructors.instructor_id ,instructors.first_name,instructors.last_name,time.days,time.Time,time.date,rooms.room_id,rooms.capacity,courses.num_stu,time.time_id,courses.p_id
FROM courses,instructors,time,rooms,instructor_time,room_time,price
WHERE courses.instructor_id=instructors.instructor_id AND courses.room_id=rooms.room_id AND courses.time_id=time.time_id AND instructors.instructor_id=instructor_time.instructor_id AND time.time_id=instructor_time.time_id AND rooms.room_id=room_time.room_id AND time.time_id=room_time.time_id  AND courses.p_id=price.p_id AND courses.course_name='$course_name'" ;





$result = mysqli_query($con , $sql); 
$courses = mysqli_fetch_all($result , MYSQLI_ASSOC);
  // echo'<pre>';
  // print_r($result);
  // echo'<pre>';
  if(isset($_GET['tag'])){
    unset($_SESSION['online_msg']);}

$sql__s="SELECT * FROM online_registration WHERE state='open'";
$result__s = mysqli_query($con , $sql__s);
    // echo '<h5><pre>';
    // print_r( $result__s);
    // echo '</pre></h5>';

  
    
if(mysqli_num_rows($result__s) == 1){
    // echo  '<h5>'.'open'.'</h5>';
  














// $sql = " SELECT courses.course_id,courses.course_name,courses.num_stu,rooms.capacity,instructors.first_name,instructors.last_name,time.days,time.Time,time.date,rooms.room_id
//          FROM courses,time,instructors,rooms
//          WHERE courses.instructor_id=instructors.instructor_id AND courses.room_id=rooms.room_id AND courses.time_id=time.time_id AND courses.course_name = $course_name
//         ";

 ?>

<body>
<?php if(mysqli_num_rows($result) != 0){?>
    <div class="nnq"><h2>View Courses <?php echo $stu_id ?> </h2></div> 

    <table >
            <tr class="bg-dark text-warning">
                <th>ID</th>
                <th>course Name</th>
                <th colspan='2'>instructor Name</th> 
                <th>Days</th>
                <th >Time</th> 
                <th >Date</th> 
                <th>Room</th>
                <th>capacity</th>
                <th>Num_Stu</th>
                <th >Action</th>  
                     
            </tr>
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
                    <td><?php echo $course['capacity']?></td>
                    <td><?php echo $course['num_stu']?></td>
                    <td><a href="CRUD_Online.php?course_id=<?php echo $course['course_id']?>&room_id=<?php echo $course['room_id']?>&time_id=<?php echo $course['time_id']?>&p_id=<?php echo $course['p_id']?>&stu_id=<?php echo $stu_id ?>">Add Course</a></td>
                    
                </tr>
            <?php }?>
    </table>

<?php

    if(isset($_SESSION['online_msg'])){?>
   <h3><?php echo $_SESSION['online_msg']?></h3>
  <?php }?>
<br>
  <img  src="img/code8.svg"  class="d-block w-100% " id="p_r_o" />
 <!-- JavaScript Bundle with Popper -->
 <br>
<?php }
 else{
   
  echo '<h3 >'.'No Courses'.'</h3><br>';
  ?>
 
  <img  src="img/loading.svg"  class="d-block w-100%  imglo"/>
  <?php
  
} ?>



<!-- footer -->

<footer class="py-4 bg-dark text-white text-center position-relative   mt-1 fixed-bottom">
    <div class="container">
        <p class="lead">
            Copyright &copy; 2022 Toleen Falion
        </p>
        <a href="#" class="position-absolute bottom-0 end-0 p-3" >
            <i class="bi bi-arrow-up-circle h2 text-warning"></i>
           

        </a>
    </div>
</footer>

<?php }
else{
    // echo  '<h5>'.'close'.'</h5>';
    $_SESSION['msg_close'] =  'close';
    header('location:view_student_courses.php?#Online_close');
}
?>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <!-- <script src="js.js"></script> -->
</body>
</html>

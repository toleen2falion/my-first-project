<?php
    session_start();  
    // roomcapacity
    if(isset($_GET['room_id'])){
    $room = $_GET['room_id'] ;
    $_SESSION['room_id'] = $_GET['room_id'];
    // echo $_SESSION['room_id'].'<br>' ;
    }
//timestu
//price
if(isset($_GET['p_id'])){
    $price = $_GET['p_id'] ;
    $_SESSION['p_id'] = $_GET['p_id'];
    // echo $_SESSION['p_id'].'<br>' ;
    }
//price
    if(isset($_GET['time_id'])){
        $time_id = $_GET['time_id'] ;
        $_SESSION['time_id'] = $_GET['time_id'];
        // echo $_SESSION['time_id'] ;
        }

    if(isset($_GET['course_id'])){
        $course_id = $_GET['course_id'];
        $_SESSION['course_id'] = $_GET['course_id'];
    }else{
        $course_id = $_SESSION['course_id'] ;
    }    
    include('config.php');
    // 3- Prepare Query
    $sql = "SELECT course_stu.stu_id , students.first_name,students.last_name,courses.num_stu,students.financial_account
            FROM course_stu , students,courses
            WHERE course_stu.stu_id = students.student_id AND course_stu.course_id = $course_id AND courses.course_id = $course_id" ;
    // 4- Execute Query
    $result = mysqli_query($con , $sql);
    // 5- fetch resulting rows as an array
    
    $students = mysqli_fetch_all($result , MYSQLI_ASSOC);
    if(mysqli_num_rows($result) != 0){
//    echo '<pre>';
//    print_r($students);
//    echo '</pre>';
   
   $_SESSION['num_stu'] = $students[0]['num_stu'];
// echo  $_SESSION['num_stu'] ;
    }
    else{
        $_SESSION['num_stu']=0;
    }

    if(isset($_GET['tag'])){
        unset($_SESSION['msg']);
    }
    
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
    <h1 >View Students</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav ms-auto">
                <!-- tag=1 لكي عندما ننتقل على صفحة ال courses_veiw.php يتم افراغ السيشن من اجل اخفاء الرسالة -->
                <li class="nav-item"><a href="courses_veiw.php?tag='1'" class="nav-link">Back to courses</a></li>
                <li class="nav-item"><a href="view.php?" class="nav-link">Back</a></li>
                <li class="nav-item"><a href="index.php?logout=logout" class="nav-link">Logout</a></li>
                <!-- <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Learn</a>
                    <ul class="dropdown-menu">
                        <li><a href="#learn" class="dropdown-item">Learn Boots</a></li>
                        <li><a href="#next" class="dropdown-item">where to go next</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#faq" class="nav-link">Ask Me</a></li> -->
                
            </ul>
        </div>
    </div>
   </div>

<!-- <div class="navbar navbar-expand-md bg-dark navbar-dark text-white fixed-top ">
    <div class="container d-flex align-items-center justify-content-center">
    <h1 class=" py-3   d-flex align-items-center justify-content-center">View Students</h1>
    </div>
 </div> -->
<!-- <body>
    <h1>View Students</h1> -->
    <table >
            <tr>
                <th>ID</th>
                <th colspan='2'>Student Name</th> 
                <th>Action</th>       
            </tr>
            <?php foreach($students as $student){?>
                <tr>
                    <td><?php echo $student['stu_id']?></td>
                    <td><?php echo $student['first_name']?></td>
                    <td><?php echo $student['last_name']?></td>
                    <td><a href="CRUD_operations.php?course_id=<?php echo $course_id;?>&stu_id=<?php echo $student['stu_id']?>&action=Delete_stu">Delete</a></td>
                </tr>

            <?php }?>
    </table>
    
    <form action="CRUD_operations.php">
    <h2>Add Student</h2>
        <input type="text" name="stu_id" required><br>
        <input type="text" name="course_id" value="<?php echo $course_id ;?>" hidden><br>
        <input type="text" name="time_id" value="<?php echo $time_id ;?>" hidden><br>
        
        <input type="submit" name="action" value="Add_stu"> <?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];}?>     
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
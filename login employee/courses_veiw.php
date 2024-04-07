<?php
 session_start();
 
 if(isset($_GET['action'])){
     $action = $_GET['action'];
     $_SESSION['action']=$action;
 }else{
    $action=$_SESSION['action'];
 }

if($action == 'courses' || $action == 'search_'){
    include('config.php');
    $sql='SELECT courses.course_id,courses.course_name,instructors.instructor_id ,instructors.first_name,instructors.last_name,time.days,time.Time,time.date,rooms.room_id,rooms.capacity,courses.num_stu,time.time_id,courses.p_id
    FROM courses,instructors,time,rooms,instructor_time,room_time,price
    WHERE courses.instructor_id=instructors.instructor_id AND courses.room_id=rooms.room_id AND courses.time_id=time.time_id AND instructors.instructor_id=instructor_time.instructor_id AND time.time_id=instructor_time.time_id AND rooms.room_id=room_time.room_id AND time.time_id=room_time.time_id  AND courses.p_id=price.p_id';
    $result=mysqli_query($con,$sql);
   
    $courses=mysqli_fetch_all($result,MYSQLI_ASSOC);
    // mjjh
    
        
            
    //  echo '<pre>';
    // print_r($courses);
    // echo '</pre>';
    // عند الدخول مرة اخرى تحذف الرسالة
if(isset($_GET['tag'])){
    unset($_SESSION['msg']);
       // عند الضغط على العودة اى الطلاب يقوم بعرض جميع الطلاب
       $_SESSION['action']='courses';
       $action=$_SESSION['action'];
}



// mjjh

// $sql = " SELECT id , first_name
// FROM employee
// WHERE email = '$email'
// AND password = '$password'" ;
// // 4- Execute Query
// $result = mysqli_query($con , $sql);    

// if(mysqli_num_rows($result) == 1){
// header('location:view.php');
// $employees = mysqli_fetch_all($result , MYSQLI_ASSOC);
// $_SESSION['employee_name'] = $employees[0]['first_name'];                          
// }else{
// echo 'Incorrect Email or Password';


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Document</title>
    <style>
        body::before{
            content:'';
            display: block;
            height:90px;
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
                <li class="nav-item"><a href="view.php?" class="nav-link">Back</a></li>
                <li class="nav-item"><a href="courses_veiw.php?logout=logout" class="nav-link">Logout</a></li>
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


<?php
if(isset($_GET['logout'])){
    session_destroy();
    header('location:index.php');
}
?>

<!-- <div class="navbar navbar-expand-md bg-dark navbar-dark text-white fixed-top ">
    <div class="container d-flex align-items-center justify-content-center">
    <h1 >View Courses</h1>
    </div>
    </div> -->
    <!-- <h2 class="mb-5 py-3   d-flex align-items-center justify-content-center">Welcom <?php echo $_SESSION['employee_name']; ?></h2> -->
    
<!-- searsh    -->
         <div class="addd">
<form action="courses_veiw.php" >
         
         <h3>Course ID:</h3>
         <input type="number" name="search_by_ID" required>
         <input type="submit" name="action" value="search_"> 
         <!-- <?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];}?>        -->

  </form>
  <p>
  <a href="courses_veiw.php?&action1=edit&tag='1'&#add_c">ADD New Course</a>
  <?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];}?>
</p>
  </div>
    
  <?php
  // $_SESSION['search_by_first_name'] = 'oo';
 
  if($action == 'search_' ){ 
      if(isset($_GET['search_by_ID'])){
          $search_by_ID = $_GET['search_by_ID'];
          $_SESSION['search_by_ID']=$search_by_ID;
      }else{
         $search_by_ID=$_SESSION['search_by_ID'];
      }
      // include('config.php');
      // if(isset($_POST['login']))
     
      // echo $search_by_first_name;
      $sql="SELECT courses.course_id,courses.course_name,instructors.instructor_id ,instructors.first_name,instructors.last_name,time.days,time.Time,time.date,rooms.room_id,rooms.capacity,courses.num_stu,time.time_id,courses.p_id
      FROM courses,instructors,time,rooms,instructor_time,room_time,price
      WHERE courses.instructor_id=instructors.instructor_id AND courses.room_id=rooms.room_id AND courses.time_id=time.time_id AND instructors.instructor_id=instructor_time.instructor_id AND time.time_id=instructor_time.time_id AND rooms.room_id=room_time.room_id AND time.time_id=room_time.time_id  AND courses.p_id=price.p_id AND courses.course_id=$search_by_ID" ;
    // $sql = " SELECT *
    // FROM courses
    // WHERE course_id = $search_by_ID";  

      $result=mysqli_query($con,$sql);
     
      $courses=mysqli_fetch_all($result,MYSQLI_ASSOC);
    
   
      // echo'<pre>';
      // print_r($result) ;
      // echo '</pre>';
    //   $courses=mysqli_fetch_all($result,MYSQLI_ASSOC);

      // $_SESSION['search_by_first_name'] = 'ooo';
      $_SESSION['action']='search_';
   }
      ?>
   <!-- /searsh -->



<table >
            <tr>
                <th>ID</th>
                <th>course Name</th>
                <th colspan='2'>instructor Name</th> 
                <th>Days</th>
                <th >Time</th> 
                <th >Date</th> 
                <th>Room</th>
                <th>capacity</th>
                <th>Num_Stu</th>
                <th colspan='2'>Action</th>  
                     
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
                    <td><a href="view_students.php?course_id=<?php echo $course['course_id']?>&tag='1'&room_id=<?php echo $course['room_id']?>&time_id=<?php echo $course['time_id']?>&p_id=<?php echo $course['p_id']?>">Show Students</a></td>
                    <td><a href="CRUD_operations.php?course_id=<?php echo $course['course_id']?>&time_id=<?php echo $course['time_id']?>&room_id=<?php echo $course['room_id']?>&instructor_id=<?php echo $course['instructor_id']?>&action=Delete">Delete</a></td>
                </tr>
            <?php }?>
    </table>
    <div class="add" id="add_c">
    <!-- <a href="#toto">yyy</a> -->
    <!-- <a href="courses_veiw.php?&action1=edit&tag='1'&#add_c">ADD</a> -->
    <!-- </div> --><br><br>
    <!-- <?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];}?>    -->
    <?php if(isset($_GET['action1'])){?>
   

<br> <br>
   
    <form action="CRUD_operations.php">
        <h3>Course Name:</h3>
            <input type="text" name="course_name" required><br>
        <h3>First Name:</h3>
        <input type="text" name="first_name" required><br>
        <h3>Last Name:</h3>
            <input type="text" name="last_name" required><br>
        <h3>Days:</h3>
            <select name="Days" required>
                <option  selected >Saturday/Mondy/Wednesday</option>
                <!-- <option>Saturday/Mondy/Wednesday</option> -->
                <option>Sunday/Tuesday/Thursday</option>
            
            </select>
        <h3>Time:</h3>
        <select name="Time" required>
                <option  selected >3:00 pm to 4:30 pm</option>
                <!-- <option>3:00 pm to 4:30 pm</option> -->
                <option>5:00 pm to 6:30 pm</option>
        </select> 
        
        <h3>Date:</h3>
        <input type="text" name="date" required><br>

        <h3>Room:</h3>
        <select name="Room" required>
                <option  selected >101</option>
                <!-- <option>101</option> -->
                <option>102</option>
                <option>201</option>
                <option>202</option>
        </select> 

<br><br>
        <input type="submit" name="action" value="add"> 
        <br>
        <?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];}?>  <br>
    </div>
    </form>
    <?php } ?>
  
   <?php }
  ?>
<!-- //students bage -->
       <?php
        if($action == 'students' || $action == 'search'){
            include('config.php');
            $sql='SELECT students.*FROM students';
            $result=mysqli_query($con,$sql);
           
            $students=mysqli_fetch_all($result,MYSQLI_ASSOC);
            // mjjh
            
                
                    
            //  echo '<pre>';
            // print_r($students);
            // echo '</pre>';
            // عند الدخول مرة اخرى تحذف الرسالة
        if(isset($_GET['tag'])){
            unset($_SESSION['msg']);
            // عند الضغط على العودة اى الطلاب يقوم بعرض جميع الطلاب
            $_SESSION['action']='students';
            $action=$_SESSION['action'];
            // $_SESSION['action']=='students';
            
            
        }
    
        // echo $action;
        
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
            <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
          
            <link rel="stylesheet" href="style2.css">
            <link rel="stylesheet" href="fontawesome/css/all.css">
            <title>Document</title>
            <style>
                body::before{
                    content:'';
                    display: block;
                    height:90px;
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
                        <li class="nav-item"><a href="view.php?" class="nav-link">Back</a></li>
                        <li class="nav-item"><a href="courses_veiw.php?logout=logout" class="nav-link">Logout</a></li>
                       
                        
                    </ul>
                </div>
            </div>
           </div>
        
        
        <?php
        if(isset($_GET['logout'])){
            session_destroy();
            header('location:index.php');
        }
        ?>
        
       
           
         <!-- searsh    -->
         <div class="addd">
         <form action="courses_veiw.php" >
         
               <h3>First Name:</h3>
               <input type="text" name="search_by_first_name" required>
               <input type="submit" name="action" value="search"> 
               <!-- <?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];}?>        -->
    
        </form>
       
            <div class="online">
            <!-- /////////////onlin -->
            <a  href="o_c_online.php?&state=open">open</a>
            <a href="o_c_online.php?&state=close">close</a>
            <?php if(isset($_SESSION['msg_o_c'])){echo $_SESSION['msg_o_c'];}?>
            </div>
            <!-- onlin//////////// -->
    <p> 
        <a href="courses_veiw.php?&action1=edit&tag='1'&#add_s">ADD New Student</a>
        <?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];}?>
    </p>
        </div>
        <?php
        // $_SESSION['search_by_first_name'] = 'oo';
       
        if($action == 'search' ){ 
            if(isset($_GET['search_by_first_name'])){
                $search_by_first_name = $_GET['search_by_first_name'];
                $_SESSION['search_by_first_name']=$search_by_first_name;
            }else{
               $search_by_first_name=$_SESSION['search_by_first_name'];
            }
            // include('config.php');
            // if(isset($_POST['login']))
           
            // echo $search_by_first_name;
           
          
            $sql = " SELECT *
                     FROM students
                     WHERE first_name = '$search_by_first_name'";
                    
        // 4- Execute Query
            $result = mysqli_query($con , $sql);  
            // echo'<pre>';
            // print_r($result) ;
            // echo '</pre>';
            $students=mysqli_fetch_all($result,MYSQLI_ASSOC);

            // $_SESSION['search_by_first_name'] = 'ooo';
            $_SESSION['action']='search';
         }
            ?>
         <!-- /searsh -->
       
        <!-- <?php echo $action;
            echo $_SESSION['action'];?> -->

        <table >
                    <tr>
                        <th>ID</th>
                        <th colspan='2'>Student Name</th> 
                        <th>email</th>
                        <th >password</th> 
                        <th >phone</th> 
                        <th colspan='2'>financial_account</th>
                        
                        <th colspan='2' >Action</th>  
                             
                    </tr>
                    <?php foreach( $students as  $student){?>
                        <tr>
                            <td><?php echo  $student['student_id']?></td>
                            <td><?php echo  $student['first_name']?></td>
                            <td><?php echo  $student['last_name']?></td>
                            <td><?php echo  $student['email']?></td>
                            <td><?php echo  $student['password']?></td>
                            <td><?php echo  $student['phone']?></td>
                            <td><?php echo  $student['financial_account']?></td>
                            <td><a href="courses_veiw.php?student_id=<?php echo $student['student_id']?>&financial_account=<?php echo $student['financial_account']?>&update_FC=update_FC&#update">Update</a></td>
                            <td><a href="view_courses.php?student_id=<?php echo $student['student_id']?>&tag='1'&action=v_c_s">Show Courses</a></td>
                             <td><a href="CRUD_operations.php?student_id=<?php echo $student['student_id']?>&action=D_stu">Delete</a></td> 
                        </tr>
                    <?php }?>
            </table>
           
            <div class="add" id="add_s">
                
            <!-- <a href="courses_veiw.php?&action1=edit&tag='1'&#add_s">ADD</a> -->
            <br><br>
            <!-- ... -->
<!-- <div class="update_FC"> -->
            <?php if(isset($_GET['update_FC'])){?>
                
               <?php unset($_SESSION['msg']);?>
               
        <h2 id="update">Add financial_account</h2>
        <form action="CRUD_operations.php">
        <input type="text" name="student_id" value="<?php echo $_GET['student_id'];?>" hidden>
        <input type="number" name="Add_financial_account" required><br><br>
        <input type="NUMBER" name="financial_account" value="<?php echo $_GET['financial_account'];?>"hidden>
        <input type="submit" name="action" value="update_FC"><br> <?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];}?>       
    </form>
    <?php } ?>
            <!-- </div> -->
<!-- ... -->
            <!-- <?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];}?>    -->
            <?php if(isset($_GET['action1'])){?>
           
        
        <br><br>
           
            <form action="CRUD_operations.php">
               
                <h3>First Name:</h3>
                <input type="text" name="first_name" required><br>
                <h3>Last Name:</h3>
                    <input type="text" name="last_name" required><br>
                <h3>Email:</h3>
                    <input type="email" name="email" required placeholder="Enter email"><br>
                <h3>Password:</h3>
                    <input type="password" name="password" id="input" required placeholder="Enter password"><br>
                <h3>Phone:</h3>
                    <input type="text" name="phone" required><br>
                <h3>financial_account:</h3>
                    <input type="number" name="financial_account" required><br>

                
        
        <br>
                <input type="submit" name="action" value="New_stu"> 
                <br>
                <?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];}?>  <br>
            </div>
            </form>
            <?php } ?>
          
           <?php }
          ?>
<!-- ////student bage -->



<!-- //instructors bage -->
<?php
        if($action == 'instructors' || $action == 'Search'){
            include('config.php');
            $sql='SELECT instructors.*FROM instructors';
            $result=mysqli_query($con,$sql);
           
            $instructors=mysqli_fetch_all($result,MYSQLI_ASSOC);
            // mjjh
            
                
                    
            //  echo '<pre>';
            // print_r($instructors);
            // echo '</pre>';
            // عند الدخول مرة اخرى تحذف الرسالة
        if(isset($_GET['tag'])){
            unset($_SESSION['msg']);
            // عند الضغظ على العودة الى الاساتذة يقوم بعرض جميع الاساتذة
            $_SESSION['action']='instructors';
            $action=$_SESSION['action'];
            
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
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Document</title>
    <style>
        body::before{
            content:'';
            display: block;
            height:90px;
        }
    </style>
</head>
<body>

<div class="navbar navbar-expand-md bg-dark navbar-dark text-white fixed-top">
    <div class="container">
    <h1 >View instructors</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="view.php?" class="nav-link">Back</a></li>
                <li class="nav-item"><a href="courses_veiw.php?logout=logout" class="nav-link">Logout</a></li>
               
                
            </ul>
        </div>
    </div>
   </div>


<?php
if(isset($_GET['logout'])){
    session_destroy();
    header('location:index.php');
}
?>


<!-- searsh    -->
        <div class="addd">
<form action="courses_veiw.php">
         
         <h3>First Name:</h3>
         <input type="text" name="search_by_first_name" required>
         <input type="submit" name="action" value="Search"> 
         <!-- <?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];}?>        -->

  </form>
  <p>
  <a href="courses_veiw.php?&action1=edit&tag='1'&#add_i">ADD New Instructor</a>
  
  <?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];}?>   
</p>
  </div> 
  <?php
  // $_SESSION['search_by_first_name'] = 'oo';
 
  if($action == 'Search' ){ 
    if(isset($_GET['search_by_first_name'])){
        $search_by_first_name = $_GET['search_by_first_name'];
        $_SESSION['search_by_first_name']=$search_by_first_name;
    }else{
       $search_by_first_name=$_SESSION['search_by_first_name'];
    }
      // include('config.php');
      // if(isset($_POST['login']))
      
      // echo $search_by_first_name;
     
    
      $sql = " SELECT *
               FROM instructors
               WHERE first_name = '$search_by_first_name'";
              
  // 4- Execute Query
      $result = mysqli_query($con , $sql);  
      // echo'<pre>';
      // print_r($result) ;
      // echo '</pre>';
      $instructors=mysqli_fetch_all($result,MYSQLI_ASSOC);

      // $_SESSION['search_by_first_name'] = 'ooo';
      $_SESSION['action']='Search';

   }
      ?>
   <!-- /searsh -->

         <table >
                    <tr>
                        <th>ID</th>
                        <th colspan='2'>Instructor Name</th> 
                        <th>Email</th>
                        <th >Password</th> 
                        <th >Phone</th> 
                       
                        
                         <th colspan='2' >Action</th>   
                             
                    </tr>
                    <?php foreach( $instructors as $instructor){?>
                        <tr>
                            <td><?php echo $instructor['instructor_id']?></td>
                            <td><?php echo $instructor['first_name']?></td>
                            <td><?php echo $instructor['last_name']?></td>
                            <td><?php echo $instructor['email']?></td>
                            <td><?php echo $instructor['password']?></td>
                            <td><?php echo $instructor['phone']?></td>
                            <td><a href="view_courses.php?instructor_id=<?php echo $instructor['instructor_id']?>&tag='1'&action=v_c_i">Show Courses</a></td> 
                             <td><a href="CRUD_operations.php?instructor_id=<?php echo $instructor['instructor_id']?>&action=D_inst">Delete</a></td>  
                        </tr>
                    <?php }?>
            </table>

   
    <div class="add" id="add_i">
    <!-- <a href="courses_veiw.php?&action1=edit&tag='1'&#add_i">ADD</a> -->
    <!-- </div> --><br><br>
    <!-- <?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];}?>    -->
    <?php if(isset($_GET['action1'])){?>

        <form action="CRUD_operations.php">
               
               <h3>First Name:</h3>
               <input type="text" name="first_name" required><br>
               <h3>Last Name:</h3>
                   <input type="text" name="last_name" required><br>
               <h3>Email:</h3>
                   <input type="email" name="email" required placeholder="Enter email"><br>
               <h3>Password:</h3>
                   <input type="password" name="password" id="input" required placeholder="Enter password"><br>
               <h3>Phone:</h3>
                   <input type="text" name="phone" required><br>

               
       
       <br>
               <input type="submit" name="action" value="New_inst"> 
               <br>
               <?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];}?>  <br>
           </div>
           </form>
           <?php } ?>

<?php } ?>

<!-- ////instructors bage -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    
</body>
</html>

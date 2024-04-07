<?php
session_start();
$action = $_GET['action'];
// $course_name=$_GET['course_name'];
// $first_name=$_GET['first_name'];
// $last_name=$_GET['last_name'];
// $Time=$_GET['Time'];
// $days=$_GET['Days'];
// $room=$_GET['Room'];
// $date=$_GET['date'];


if($action== 'add'){  
    $course_name=$_GET['course_name'];
    $first_name=$_GET['first_name'];
    $last_name=$_GET['last_name'];
    $Time=$_GET['Time'];
    $days=$_GET['Days'];
    $room=$_GET['Room'];
    $date=$_GET['date'];

     echo $first_name.$last_name; 

    include('config.php');
    $sqlt="SELECT * FROM time WHERE days='$days' AND Time= '$Time' AND date= '$date'";
    $resultt = mysqli_query($con , $sqlt);
        echo '<pre>';
        print_r( $resultt);
        echo '</pre>';
    if(mysqli_num_rows($resultt) == 1){
        $time = mysqli_fetch_all($resultt , MYSQLI_ASSOC);
        $_SESSION['id_time'] = $time[0]['time_id'];
        $t= $_SESSION['id_time'];  
        // echo '<pre>';
        // print_r($time);
        // print_r($t);

        // echo '</pre>';
    } else{
        $sql3="INSERT INTO time(days,Time,date) VALUES ('$days','$Time','$date')" ;
        $result3 = mysqli_query($con , $sql3);
        $sqltf="SELECT * FROM time WHERE days='$days' AND Time= '$Time' AND date= '$date'";
        $resulttf = mysqli_query($con , $sqltf);
        $time1 = mysqli_fetch_all($resulttf , MYSQLI_ASSOC);
        $_SESSION['id_time'] = $time1[0]['time_id'];
        $t= $_SESSION['id_time'];
        // echo '<pre>';
        // print_r($time1);
        // print_r($t);

        // echo '</pre>';      

    }
    
    $sql="SELECT *
          from instructors
          WHERE first_name='$first_name' AND last_name='$last_name'";

           $result = mysqli_query($con , $sql);  
           $instructors = mysqli_fetch_all($result , MYSQLI_ASSOC);
        //    echo '<pre>';
        //     print_r($instructors);
        //     echo '</pre>';

            $_SESSION['id_instructor'] = $instructors[0]['instructor_id'];
            $i= $_SESSION['id_instructor'];

            // echo '<pre>';
            // print_r($i);
            // echo '</pre>';

    

    $sqlr="SELECT * FROM rooms WHERE room_id=$room";
  
              $resultr = mysqli_query($con , $sqlr);  
              $room = mysqli_fetch_all($resultr , MYSQLI_ASSOC);
              echo '<pre>';
               print_r($room);
               echo '</pre>';
   
               $_SESSION['id_room'] = $room[0]['room_id'];
               $r= $_SESSION['id_room'];
            
               echo '<pre>';
               print_r($r);
               echo '</pre>';

     
    $sql0="INSERT INTO room_time( room_id,time_id) VALUES ($r,$t)" ;     
    $sql2 = "INSERT INTO instructor_time( instructor_id,time_id) VALUES ($i,$t)" ;


    // uuu $sql1 = "INSERT INTO courses( course_name, instructor_id, room_id, time_id) VALUES ('$course_name',$i,$r,$t)" ;



    // 4- Execute Query
    $result0 = mysqli_query($con , $sql0);
    $result2 = mysqli_query($con , $sql2);

    if($result0 && $result2  ){
        // $sql1 = "INSERT INTO courses( course_name, instructor_id, room_id, time_id) VALUES ('$course_name',$i,$r,$t)" ;
        // $result1 = mysqli_query($con , $sql1);
        
// price
    if($course_name=='HTML' || $course_name=='CSS' ){
        $price=100000;}
        // $sql_p = "INSERT INTO courses( course_name, instructor_id, room_id, time_id, p_id) VALUES ('$course_name',$i,$r,$t,$price)"  ;
        // $result_p = mysqli_query($con , $sql_p);
        // $sql_p1 = "SELECT * FROM  courses" ;
        // $result_p1 = mysqli_query($con , $sql_p1);
        // $price = mysqli_fetch_all($result_p1 , MYSQLI_ASSOC);
        // echo '<pre>';
        // print_r($price);
        // echo '</pre>';}
        
       else if($course_name=='JS'){
            $price=150000;
            // $sql_p = "INSERT INTO courses( course_name, instructor_id, room_id, time_id, p_id) VALUES ('$course_name',$i,$r,$t,$price)"  ;
            // $result_p = mysqli_query($con , $sql_p);
            // $sql_p1 = "SELECT * FROM  courses" ;
            // $result_p1 = mysqli_query($con , $sql_p1);
            // $price = mysqli_fetch_all($result_p1 , MYSQLI_ASSOC);
            // echo '<pre>';
            // print_r($price);
            // echo '</pre>';
        }
        else if($course_name=='PHP' || $course_name=='Python'){
            $price=200000;
            // $sql_p = "INSERT INTO courses( course_name, instructor_id, room_id, time_id, p_id) VALUES ('$course_name',$i,$r,$t,$price)"  ;
            // $result_p = mysqli_query($con , $sql_p);
            // $sql_p1 = "SELECT * FROM  courses" ;
            // $result_p1 = mysqli_query($con , $sql_p1);
            // $price = mysqli_fetch_all($result_p1 , MYSQLI_ASSOC);
            // echo '<pre>';
            // print_r($price);
            // echo '</pre>';
        }
        $sql_p = "INSERT INTO courses( course_name, instructor_id, room_id, time_id, p_id) VALUES ('$course_name',$i,$r,$t,$price)"  ;
        $result_p = mysqli_query($con , $sql_p);
        $sql_p1 = "SELECT * FROM  courses" ;
        $result_p1 = mysqli_query($con , $sql_p1);
        $price = mysqli_fetch_all($result_p1 , MYSQLI_ASSOC);
        echo '<pre>';
        print_r($price);
        echo '</pre>';
        if($result_p){
            // echo 'Add Successfully';
            $_SESSION['msg'] =  'Add Successfully';
           
        }
        else if(!$result_p){
            $sqldit = "DELETE FROM instructor_time WHERE time_id = $t AND instructor_id=$i ";
            $resultit = mysqli_query($con , $sqldit);
            $sqldr = "DELETE FROM room_time WHERE room_id = $r AND time_id=$t" ;
            $resultr = mysqli_query($con , $sqldr);
            $_SESSION['msg'] =  'No Course';
        }

    }



    else if($result2 && !$result0){
            $sqldit = "DELETE FROM instructor_time WHERE time_id = $t AND instructor_id=$i ";
            $resultit = mysqli_query($con , $sqldit);
            $_SESSION['msg'] =  'No Room';
        }
    else if(!$result2 && $result0){
         $sqldr = "DELETE FROM room_time WHERE room_id = $r AND time_id=$t" ;
         $resultr = mysqli_query($con , $sqldr);
         $_SESSION['msg'] =  'No Time or name ';
        }
        else if(!$result2 && !$result0){
            $_SESSION['msg'] =  'add faild';

        }

        
   

    header('location:courses_veiw.php');

    } 
    

    //Add course

   else if($action== 'Delete'){    
        include('config.php');
        $course_id=$_GET['course_id'];
        $room_id=$_GET['room_id'];
        $time_id=$_GET['time_id'];
        $instructor_id=$_GET['instructor_id'];
    


        $sqldc = "DELETE FROM courses WHERE course_id = $course_id " ;
        $resultc = mysqli_query($con , $sqldc);
        if( $resultc ){
            $sqldr = "DELETE FROM room_time WHERE room_id = $room_id AND time_id=$time_id" ;
        $resultr = mysqli_query($con , $sqldr);
    
        $sqldit = "DELETE FROM instructor_time WHERE time_id = $time_id AND instructor_id=$instructor_id ";
        $resultit = mysqli_query($con , $sqldit);
        if($resultit && $resultr ){
                $_SESSION['msg'] =  'Delete Successfully';
            }else{
                $_SESSION['msg'] =  'Delete Failed';
            }
            }else{
                $_SESSION['msg'] =  'Delete Failed';
            }
            header('location:courses_veiw.php');
    }
    
   


    //Add Student in course
  
    else if($action== 'Add_stu'){ 

        include('config.php');
        $stu_id = $_GET['stu_id'];
        $course_id = $_GET['course_id'];
        $room= $_SESSION['room_id'];
        $price=$_SESSION['p_id'];
        $time_id = $_GET['time_id'];
        ///
        $sqlsp = " SELECT financial_account
                   FROM students
                   WHERE student_id = '$stu_id'" ;
        // 4- Execute Query
        $resultsp = mysqli_query($con , $sqlsp);    
        //للحصول على قيمة رصيد الطالب
        if(mysqli_num_rows($resultsp) == 1){
            $students = mysqli_fetch_all($resultsp , MYSQLI_ASSOC);
            // echo'<pre>';
            // print_r($students);
            // echo'</pre>';
            $_SESSION['financial_account'] = $students[0]['financial_account'];  
        }
        ////

        $f_a= $_SESSION['financial_account'];
        echo  $price.'  '.$f_a .'   ';

        $sql2 = " SELECT room_id , capacity
                  FROM rooms
                  WHERE room_id = '$room'" ;
    
        $result2 = mysqli_query($con , $sql2); 
        
        //للحصول على قيمة سعة القاعة
        if(mysqli_num_rows($result2) == 1){
            $rooms = mysqli_fetch_all($result2 , MYSQLI_ASSOC);
            $_SESSION['capacity'] = $rooms[0]['capacity'];                          
            
        }
        ////

        $capacity=$_SESSION['capacity'];

        include('config.php');
        $num_stu=$_SESSION['num_stu'];
        // echo $num_stu.'  ';
        // echo $capacity;
        $time_id=$_SESSION['time_id'];

       
        $sql6 = " SELECT stu_time.*
                  FROM stu_time
                  WHERE stu_id = '$stu_id'
                  AND time_id ='$time_id' " ;


        $sql7 = " SELECT stu_id 
                  FROM course_stu
                  WHERE stu_id = $stu_id 
                  AND course_id =$course_id " ;

        $result7 = mysqli_query($con , $sql7); 
        $result6 = mysqli_query($con , $sql6);    

            // echo '<pre>';
            // print_r($result6);
            // echo '</pre>';
            // echo $stu_id.'  '.$time_id;
        //لمعرفة اذا كان الطالب لديه كورس بنفس الوقت وبالتالي عدم امكانية التسجيل
            if(mysqli_num_rows($result6) == 1){
                $_SESSION['msg'] =  'no time';
                }

// stu add
                  
        //لمعرفة اذا كان الطالب مسجل في الكورس سابقا
               if(mysqli_num_rows($result7) == 1 && mysqli_num_rows($result6) == 1){
                $_SESSION['msg'] =  'students add';
                }
//stu add 

         else if(mysqli_num_rows($result6) != 1){
            $sql3 = "INSERT INTO stu_time VALUES ($stu_id ,$time_id)" ;
            $result3 = mysqli_query($con , $sql3);
                if(($num_stu < $capacity) && ($f_a >= $price) && $result3 ){
                    // echo "yes";
            
            $sql = "INSERT INTO course_stu VALUES ($course_id,$stu_id )" ;
            $result = mysqli_query($con , $sql);

            if($result ){
                
                $s= ++$num_stu;
                $sql1 = "UPDATE courses SET num_stu = $s WHERE course_id =$course_id " ;
                $result1 = mysqli_query($con , $sql1);
                if($result1 ){
                        ///
                        $sqlps = "UPDATE students SET financial_account =$f_a - $price WHERE student_id =$stu_id " ;
                        $resultps = mysqli_query($con , $sqlps);
                        ///
                        $_SESSION['msg'] =  'Add Successfully';

                    }
                // else{
                //     $_SESSION['msg'] =  'Add Failed';
                //     $sql2 = "DELETE FROM stu_time WHERE stu_id = $stu_id AND time_id = $time_id " ;
                //     $result2 = mysqli_query($con , $sql2);
                
                // }
            }
        }
        
            else if($num_stu >= $capacity){
            $_SESSION['msg'] =  'NO Capacity';
            $sql2 = "DELETE FROM stu_time WHERE stu_id = $stu_id AND time_id = $time_id " ;
            $result2 = mysqli_query($con , $sql2);
            }
            else if($f_a < $price){
                $_SESSION['msg'] =  'NO price';
                $sql2 = "DELETE FROM stu_time WHERE stu_id = $stu_id AND time_id = $time_id " ;
                $result2 = mysqli_query($con , $sql2);
                }

            // else{
            //     $_SESSION['msg'] =  'Add Faild,no time';
            // $sql2 = "DELETE FROM stu_time WHERE stu_id = $stu_id AND time_id = $time_id " ;
            // $result2 = mysqli_query($con , $sql2);
            // }
        }

    header('location:view_students.php');
 }
    

 //Delete Student From Course

 else if($action== 'Delete_stu'){ 
    include('config.php');
    $stu_id = $_GET['stu_id'];
    $course_id = $_GET['course_id'];
    $time_id=$_SESSION['time_id'];
  
   $sql = "DELETE FROM course_stu WHERE course_id = $course_id AND stu_id = $stu_id " ;
   $result = mysqli_query($con , $sql);
    //timestu
   $sql2 = "DELETE FROM stu_time WHERE stu_id = $stu_id AND time_id = $time_id " ;
   $result2 = mysqli_query($con , $sql2);

   if($result && $result2){
        $num_stu=$_SESSION['num_stu'];
        echo $num_stu;
        $s= --$num_stu;
        echo $s;

        $sql1 = "UPDATE courses SET num_stu = $s WHERE course_id =$course_id " ;
        $result1 = mysqli_query($con , $sql1);
    

        if($result1 ){
            $_SESSION['msg'] =  'Delete Successfully';

        }else{
            $_SESSION['msg'] =  'Delete Failed';
        
        }
    }
   header('location:view_students.php');
}


// new student
else if($action== 'New_stu'){ 

//     
    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
    $email= $_GET['email'];
    $password=$_GET['password'];
    $phone=$_GET['phone'];
    $financial_account=$_GET['financial_account'];
    include('config.php');
    

    $sql = "INSERT INTO students(first_name,last_name,email,password,phone,financial_account) VALUES ('$first_name','$last_name','$email','$password','$phone',$financial_account)" ;


    $result = mysqli_query($con , $sql);

        if($result ){
                    $_SESSION['msg'] =  'Add Successfully';

                }
            else{
                 $_SESSION['msg'] =  'Add Failed';
        }
    
    
        header('location:courses_veiw.php');
}

//delet student from students table
else if($action== 'D_stu'){ 
    include('config.php');
    $student_id = $_GET['student_id'];
   
  
   $sql = "DELETE FROM students WHERE student_id = $student_id " ;
   $result = mysqli_query($con , $sql);
   
   if($result ){
            $_SESSION['msg'] =  'Delete Successfully';

        }else{
            $_SESSION['msg'] =  'Delete Failed';
        
        }
    
        header('location:courses_veiw.php');
}


// Add_financial_account
else if($action== 'update_FC'){ 
    include('config.php');
    $student_id = $_GET['student_id'];
    $Add_financial_account=$_GET['Add_financial_account'];
    $financial_account=$_GET['financial_account'];
    $NEW_F_A= $Add_financial_account+$financial_account;
  echo $NEW_F_A;
    $sql = "UPDATE students SET financial_account = '$NEW_F_A' WHERE student_id = $student_id " ;
   $result = mysqli_query($con , $sql);
   
   if($result ){
            $_SESSION['msg'] =  'Add Many Successfully';

        }else{
            $_SESSION['msg'] =  'Add Many Failed';
        
        }
    
        header('location:courses_veiw.php');
}



// new inst
else if($action== 'New_inst'){ 

    //     
        $first_name = $_GET['first_name'];
        $last_name = $_GET['last_name'];
        $email= $_GET['email'];
        $password=$_GET['password'];
        $phone=$_GET['phone'];

        include('config.php');
        
    
        $sql = "INSERT INTO instructors(first_name,last_name,email,password,phone) VALUES ('$first_name','$last_name','$email','$password','$phone')" ;
    
    
        $result = mysqli_query($con , $sql);
    
            if($result ){
                        $_SESSION['msg'] =  'Add Successfully';
    
                    }
                else{
                     $_SESSION['msg'] =  'Add Failed';
            }
        
        
            header('location:courses_veiw.php');
    }

    //delet instructor from instructors table
else if($action== 'D_inst'){ 
    include('config.php');
    $instructor_id = $_GET['instructor_id'];
   
  
   $sql = "DELETE FROM instructors WHERE instructor_id = $instructor_id " ;
   $result = mysqli_query($con , $sql);
   
   if($result ){
            $_SESSION['msg'] =  'Delete Successfully';

        }else{
            $_SESSION['msg'] =  'Delete Failed';
        
        }
    
        header('location:courses_veiw.php');
}



   
?>
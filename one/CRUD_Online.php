
<?php
//Add Student in course
session_start();

    

        include('config.php');
        $stu_id = $_GET['stu_id'];
        $course_id = $_GET['course_id'];
        $room= $_GET['room_id'];
        $price=$_GET['p_id'];
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

        // include('config.php');
// للحصول على سعة الكورس
        $sqlo = "SELECT course_stu.stu_id , students.first_name,students.last_name,courses.num_stu,students.financial_account
        FROM course_stu , students,courses
        WHERE course_stu.stu_id = students.student_id AND course_stu.course_id = $course_id AND courses.course_id = $course_id" ;
        // 4- Execute Query
        $resulto = mysqli_query($con , $sqlo);
        // 5- fetch resulting rows as an array

        $students_o = mysqli_fetch_all($resulto , MYSQLI_ASSOC);
        if(mysqli_num_rows($resulto) != 0){
        //    echo '<pre>';
        //    print_r($students_o);
        //    echo '</pre>';

        $_SESSION['num_stu'] = $students_o[0]['num_stu'];
        // echo  $_SESSION['num_stu'] ;
        }
        else{
            $_SESSION['num_stu']=0;
        }

        $num_stu=$_SESSION['num_stu'];
        // echo $num_stu.'  ';
        // echo $capacity;
        // $time_id=$_SESSION['time_id'];

       
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
                $_SESSION['online_msg'] =  'no time';
                }

// stu add
                  
        //لمعرفة اذا كان الطالب مسجل في الكورس سابقا
               if(mysqli_num_rows($result7) == 1 && mysqli_num_rows($result6) == 1){
                $_SESSION['online_msg'] =  'The student is already added';
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
                        $_SESSION['online_msg'] =  'Add Successfully';

                    }
                // else{
                //     $_SESSION['online_msg'] =  'Add Failed';
                //     $sql2 = "DELETE FROM stu_time WHERE stu_id = $stu_id AND time_id = $time_id " ;
                //     $result2 = mysqli_query($con , $sql2);
                
                // }
            }
        }
        
            else if($num_stu >= $capacity){
            $_SESSION['online_msg'] =  'NO Capacity';
            $sql2 = "DELETE FROM stu_time WHERE stu_id = $stu_id AND time_id = $time_id " ;
            $result2 = mysqli_query($con , $sql2);
            }
            else if($f_a < $price){
                $_SESSION['online_msg'] =  'NO price';
                $sql2 = "DELETE FROM stu_time WHERE stu_id = $stu_id AND time_id = $time_id " ;
                $result2 = mysqli_query($con , $sql2);
                }

            // else{
            //     $_SESSION['online_msg'] =  'Add Faild,no time';
            // $sql2 = "DELETE FROM stu_time WHERE stu_id = $stu_id AND time_id = $time_id " ;
            // $result2 = mysqli_query($con , $sql2);
            // }
        }

    header('location:Online_view_courses.php?#p_r_o');
 ?>
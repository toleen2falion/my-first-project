<?php
session_start();
$state = $_GET['state'];
echo $state;
include('config.php');
$sql = "UPDATE online_registration SET state = '$state' WHERE o_id =1" ;
$result = mysqli_query($con , $sql);
if($result){
    $_SESSION['msg_o_c'] =  $state.' Successfully';
}else {
    $_SESSION['msg_o_c'] = 'error';
}
header('location:courses_veiw.php');
?>

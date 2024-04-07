<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <title>Login</title>
</head>

<body class="bg-dark text-light">
<section  class="py-5   text-light">
    <div class="container">
        <div class="row align-items-center justify-content-center ">
            <div class="col-md">
                <img class="px-4 pt-4 " src="img/img2.svg" alt="" class="img-fluid">
            </div>
            <div class="col-md py-4 ">
                <h2 class="pb-4">Login</h2>

                <form method="post" class="pt-4">
                    <div class="e">
                    <input type="email" name="email" required placeholder="Enter email">
            </div><br>
                    <div class="wrapper">
                    <input type="password" name="password" id="input" required placeholder="Enter password">
                    <i class="fas fa-eye-slash" id="icon"></i>
            </div>


            <br>
            <!-- check login -->
            <?php
    if(isset($_POST['login'])){
        session_start();
        $email = $_POST['email'];
        $password = $_POST['password'];
        // 1- Create DB Connection
        include('config.php');
        // 3- Prepare Query
        $sql = " SELECT id , first_name
                FROM employee
                WHERE email = '$email'
                AND password = '$password'" ;
        // 4- Execute Query
        $result = mysqli_query($con , $sql);    
         
        if(mysqli_num_rows($result) == 1){
           header('location:view.php');
            $employees = mysqli_fetch_all($result , MYSQLI_ASSOC);
            $_SESSION['employee_name'] = $employees[0]['first_name'];                          
        }else{
           echo 'Incorrect Email or Password';
           ?>
           <br><br>
    <?php     }
        
    }
?>
   <input id="button" class="px-3 py-1 " type="submit" name="login" value="Login">
                </form>
                

            </div>
        </div>
    </div>
</section>


       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="js.js"></script>
</body>
</html>



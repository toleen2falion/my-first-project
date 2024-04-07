
<?php
 session_start();
 include('config.php');
if(isset($_POST['login'])){
                      
    $email=$_POST['email'];
    $password=$_POST['password'];
  
    $sql=" SELECT instructor_id,first_name
    FROM instructors
    WHERE email='$email'
    AND password='$password'";

    $result=mysqli_query($con,$sql);
    // echo '<pre>';
    // print_r($result);
    // echo '</pre>';
    if(mysqli_num_rows($result)==1){
    header('location:view_instructor_courses.php?&tag=i');
    $instructors = mysqli_fetch_all($result , MYSQLI_ASSOC);
    $_SESSION['instructor_id'] = $instructors[0]['instructor_id'];  //set                     
    $_SESSION['instructor_first_name'] = $instructors[0]['first_name'];  //set 
    // $_SESSION['instructor_last_name'] = $instructors[0]['last_name'];  //set 
        //
        
        //
    // echo '<pre>';
    // print_r( $instructors);
    // echo '</pre>';
    }
}

    //login student
    if(isset($_POST['login_'])){
                      
        $email=$_POST['email'];
        $password=$_POST['password'];
    $sql_s=" SELECT student_id,first_name
    FROM students
    WHERE email='$email'
    AND password='$password'";
    $result_s=mysqli_query($con,$sql_s);
    if(mysqli_num_rows($result_s)==1){
        header('location:view_student_courses.php?&tag=i');
        $students = mysqli_fetch_all($result_s , MYSQLI_ASSOC);
        $_SESSION['student_id'] = $students[0]['student_id'];  //set                     
        $_SESSION['student_first_name'] = $students[0]['first_name'];  //set 
        // $_SESSION['student_last_name'] = $students[0]['last_name'];  //set 
    
        // echo '<pre>';
        // print_r( $students);
        // echo '</pre>';
        }
    
     ?>
<!-- <br> <br> -->

<?php  }      
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Bootstrap</title>

    <!-- <style>
        body::before{
            content:'';
            display: block;
            height:60px;
        }
    </style> -->

</head>
<body>
   <div class="navbar navbar-expand-md bg-dark navbar-dark text-white fixed-top">
    <div class="container">
        <a href="#" class="navbar-brand">Web Design</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="#hero" class="nav-link">Get Started</a></li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Languages</a>
                    <ul class="dropdown-menu">
                        <li><a href="#Frontend" class="dropdown-item">Frontend Languages</a></li>
                        <li><a href="#Backend" class="dropdown-item">Backend Languages</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Login</a>
                    <ul class="dropdown-menu">
                        <li><a href="#instructor" class="dropdown-item">instructor</a></li>
                        <li><a href="#student" class="dropdown-item">student</a></li>
                    </ul>
                </li>


                <!-- ll -->
                


                <li class="nav-item"><a href="#faq" class="nav-link">Ask Me</a></li>
                
            </ul>
        </div>
    </div>
   </div>




   <!-- hero -->
<!-- 
   <section id="hero" class="bg-dark text-light text-center text-sm-start py-5">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-center">
            <div class="py-3">
                <h1 class="display-5">Learn <span class="text-info">Bootstrap</span> </h1>
                <p class="py-1 lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, cum atque. Exercitationem quo nemo eius architecto nihil unde delectus dolores.</p>
                <button class="btn-info">Get Started</button>
                
            </div>
            <img class="d-none d-sm-block img-fluid w-50" src="img/hero-img.svg" alt="">
        </div>
    </div>
   </section> -->
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel" >

  <!-- Indicators/dots -->
  <div class="carousel-indicators" >
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner "  id="hero">
    <div class="carousel-item active">
      <img src="img/s7.svg" alt="Los Angeles" class="d-block w-100% py-5">
    </div>
    <div class="carousel-item">
      <img src="img/s8.svg" alt="Chicago" class="d-block w-100% py-5">
    </div>
    <div class="carousel-item">
      <img src="img/s9.svg" alt="New York" class="d-block w-100% py-5" >
    </div>
    <div class="carousel-item">
      <img src="img/s10.svg" alt="New York" class="d-block w-100% py-5" >
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<!-- ///////////////////////// -->

<!-- services -->
<section id="Frontend" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">
            Frontend Languages
        </h2>
        <div class="row text-center">
            <div class="col-sm ">
                <div class="card bg-dark text-light mb-3">
                    <!-- <img src="https://picsum.photos/300/200" alt="" class="card-img-top"> -->
                    <div class="h1 mt-3">
                        <i class=" fab fa-html5"></i>
                    </div>
                    <div class="card-body text-center">
                        <h4 class="card-title text-warning">HTML</h4>
                        <p class="card-text">stands for HyperText Markup Language. You create all the content and structure of a webpage using semantic HTML.<br> <a href="view_courses.php?course_name=HTML&action_one=HTML&#test">test yourself</a></p>
                        <a href="view_courses.php?course_name=HTML&action_one=HTML" class="btn btn-secondary">View Courses</a>
                    </div>
                </div>
            </div>


           <div class="col-sm ">
                <div class="card bg-dark text-light mb-3">
                    <!-- <img src="https://picsum.photos/300/200" alt="" class="card-img-top"> -->
                    <div class="h1 mt-3">
                        <i class="fab fa-css3-alt"></i>
                    </div>
                    <div class="card-body text-center">
                        <h4 class="card-title text-warning">CSS</h4>
                        <p class="card-text">stands for Cascading Style Sheets. CSS styles the HTML elements. It adds colors, fonts, it determines the layouts of web pages.<br> <a href="view_courses.php?course_name=CSS&action_one=CSS&#test">test yourself</a></p>
                        <a href="view_courses.php?course_name=CSS&action_one=CSS" class="btn btn-secondary">View Courses</a>
                    </div>
                </div>
            </div>


           <div class="col-sm ">
                <div class="card bg-dark text-light mb-3">
                    <!-- <img src="https://picsum.photos/300/200" alt="" class="card-img-top"> -->
                    <div class="h1 mt-3">
                        <i class="fab fa-js-square"></i>
                    </div>
                    <div class="card-body text-center">
                        <h4 class="card-title text-warning">JS</h4>
                        <p class="card-text">is how you add functionality and interactivity to elements. It's how you make web pages have dynamic behavior.<br> <a href="view_courses.php?course_name=JS&action_one=JS&#test">test yourself</a></p>
                        <a href="view_courses.php?course_name=JS&action_one=JS" class="btn btn-secondary">View Courses</a>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>




<!-- services -->
<section id="Backend" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">
            Backend Languages
        </h2>
        <div class="row text-center">
            <div class="col-sm ">
                <div class="card bg-dark text-light mb-3">
                    <!-- <img src="https://picsum.photos/300/200" alt="" class="card-img-top"> -->
                    <div class="h1 mt-3">
                        <i class=" fab fa-php"></i>
                    </div>
                    <div class="card-body text-center">
                        <h4 class="card-title text-warning">PHP</h4>
                        <p class="card-text">PHP ( Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.<br> <a href="view_courses.php?course_name=PHP&action_one=PHP&#test">test yourself</a></p>
                        <a href="view_courses.php?course_name=PHP&action_one=PHP" class="btn btn-secondary ">View Courses</a>
                    </div>
                </div>
            </div>


           <div class="col-sm ">
                <div class="card bg-dark text-light mb-3">
                    <!-- <img src="https://picsum.photos/300/200" alt="" class="card-img-top"> -->
                    <div class="h1 mt-3">
                        <i class="fab fa-python"></i>
                    </div>
                    <div class="card-body text-center">
                        <h4 class="card-title text-warning">Python</h4>
                        <p class="card-text">Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation.<br> <a href="view_courses.php?course_name=Python&action_one=Python&#test">test yourself</a></p>
                        <a href="view_courses.php?course_name=Python&action_one=Python" class="btn btn-secondary ">View Courses</a>
                    </div>
                </div>
            </div>

 </section>



<!-- whate to learn -->
<section id="instructor" class="py-5 " >
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md">
                <img src="img/login1.svg" alt="" class="img-fluid">
            </div>
            <div class="col-md py-4 ">
                <h2>Login Instructor</h2>
                <form method="post" class="pt-4">
                    <div class="e">
                    <input type="email" name="email" required placeholder="Enter email">
            </div><br>
                    <div class="wrapper">
                    <input type="password" name="password" id="input" required placeholder="Enter password">
                    <i class="fas fa-eye-slash" id="icon"></i>
            </div><br>

                         <!-- check login -->
                         <?php 
                         if(isset($_POST['login'])){
                      
                            $email=$_POST['email'];
                            $password=$_POST['password'];
                          
                            $sql=" SELECT instructor_id,first_name
                            FROM instructors
                            WHERE email='$email'
                            AND password='$password'";
                        
                            $result=mysqli_query($con,$sql);
                         if(mysqli_num_rows($result)!=1){
                            echo 'Incorrect Email or Password';
                         }?>
                         <br><br>
                         <?php
                        }
                        ?>
                        

                    <input id="button" type="submit" name="login" value="Login">
                    
                </form>
            </div>
        </div>
    </div>
</section>


<!-- Next -->
<section id="student" class="py-5 bg-dark text-warning">
    <div class="container">
        <div class="row align-items-center justify-content-center flex-row-reverse">
            <div class="col-md">
                <img src="img/login2.svg" alt="" class="img-fluid">
            </div>
            <div class="col-md py-4">
                <h2>Login Student</h2>
                <form method="post" class="pt-4">
                    <div class="e">
                    <input type="email" name="email" required placeholder="Enter email">
            </div><br>
                    <div class="wrapper">
                    <input type="password" name="password" id="input2" required placeholder="Enter password">
                    <i class="fas fa-eye-slash" id="icon2"></i>
            </div><br>
                             <!-- check login -->
                         <?php 
                         if(isset($_POST['login_'])){
                      
                            $email=$_POST['email'];
                            $password=$_POST['password'];
                          
                            $sql_s=" SELECT student_id,first_name
                            FROM students
                            WHERE email='$email'
                            AND password='$password'";
                        
                            $result_s=mysqli_query($con,$sql_s);
                         if(mysqli_num_rows($result_s)!=1){
                            echo 'Incorrect Email or Password';
                         }?>
                         <br><br>
                         <?php
                        }
                        ?>






                    <input id="button1" type="submit" name="login_" value="Login">
                    
                </form>
            </div>
        </div>
    </div>
</section>




<!-- FAQ -->
<section id="faq" class="py-5">
    <div class="container">
        <h2 class="text-center mb-3">
            Frequently Asked Questions
        </h2>
        <div class="accordion accordion-flush" id="bt-faq">
            <div class="accordion-item">
                <h5 class="accordion-header" id="question-one">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer-one">
                      What is Frontend?
                    </button>
                </h5>
                <div class="accordion-collapse collapse px-4 py-3" id="answer-one" data-bs-parent="#bt-faq">
                    The frontend is everything a user sees and interacts with when they click on a link or type in a web address. The web address is also known as at URL, or Uniform Resource Locator, and it tells what webpage should load and appear in your browser.
                    <br><br>
                    The frontend is anything and everything visual that a user comes in contact with.
                    <br><br>
                    It is the client-side part of a web application.
                    <br><br>
                    You need to make sure websites look good, are optimally displayed, and are usable on a variety of devices and screen widths.
                    <br><br>An Overview of Frontend Tools and Technologies:<br>
                    the most fundamental frontend technologies are <h5>HTML, CSS, and JavaScript.</h5>
                    
                    Besides those three, there are many frontend libraries and frameworks.
                    <br>
                    Some of the most popular ones are:<br>
                    <ul>
                   <li> React </li>
                    <li> Redux </li>
                    <li> Vue </li>
                    <li> Angular </li>
                    </ul>
                    <br>
                    You will learn HTML and modern CSS techniques alongside the best accessibility practices. You will also learn to create responsive web pages that accommodate each screen size.
                    <br><br>
                    Following the Responsive Web Design Certification, learn the JavaScript programming language with the JavaScript Algorithms and Data Structures Certification, where you will learn how to make web pages interactive.

                </div>
            </div>

            <div class="accordion-item">
                <h5 class="accordion-header" id="question-two">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer-two">
                        What is Backend?
                    </button>
                </h5>
                <div class="accordion-collapse collapse px-4 py-3" id="answer-two" data-bs-parent="#bt-faq">
                   Backend development deals with the technologies responsible for storing and securely manipulating user data.
                   <br>
                   Backend is all the hidden inner workings and the behind-the-scenes processes in a web application.
                   <br>
                   Backend is considered the server-side part of an application.
                   <br><br>
                   Essentially, the backend is what the users don't have direct access to or don't directly interact with and are most likely unaware of when using an application.
                   <br><br>
                   The back-end is responsible for receiving requests from a client.
                   <br>
                   It processes the incoming request and makes sure it fetches the appropriate data associated with the correct user.
                   <br>
                   The main focus of a backend developer's work is to create and maintain services and programs that help the front end function.
                   <br><br>
                   An Overview of Backend Tools and Technologies:
                   <br>
                   Some of the most frequently used ones are:
                   <ul>
                   <li> PHP</li>
                    <li>Ruby</li>
                    <li>Python</li>
                    <li>Java</li>
                   </ul>
                   Besides backend programming languages, backend frameworks and libraries are used to provide extra functionality to create web applications.
                    <br>
                    Some of the most popular ones are:
                    <ul>
                       <li> Ruby on Rails</li>
                       <li> Django</li>
                        <li>Flask</li>
                        <li>Express</li>
                    </ul>
                    <br>
                    Interacting with databases is a big part of a backend developer's job, so knowledge of databases is paramount.
                    <br><br>
                    Databases fall into two categories, relational and non-relational.
                    <br>
                    Some of the most oftenly used ones are:
                    <ul>
                      <li>  MySQL </li>
                      <li>  PostgreSQL </li>
                      <li> MongoDB </li>
                      <li> Oracle </li>
                    </ul>



                </div>
            </div>

            <div class="accordion-item">
                <h5 class="accordion-header" id="question-three">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer-three">
                        What are the courses prices?
                    </button>
                </h5>
                <div class="accordion-collapse collapse px-4 py-3" id="answer-three" data-bs-parent="#bt-faq">
                    <table>
                        <tr class="bg-dark text-warning">
                            <th>Course </th>
                            <th>Price</th>
                    </tr>
                    <tr>
                        <td>HTML</td>
                        <td>100000</td>
                    </tr>
                    <tr>
                        <td>CSS</td>
                        <td>100000</td>
                    </tr>
                    <tr>
                        <td>JS</td>
                        <td>150000</td>
                    </tr>
                    <tr>
                        <td>PHP</td>
                        <td>200000</td>
                    </tr>
                    <tr>
                        <td>Python</td>
                        <td>200000</td>
                    </tr>

                    </table>
                </div>
            </div>

            <!-- <div class="accordion-item">
                <h5 class="accordion-header" id="question-four">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer-four">
                        Question four
                    </button>
                </h5>
                <div class="accordion-collapse collapse px-4 py-3" id="answer-four" data-bs-parent="#bt-faq">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et delectus reprehenderit labore.
                </div>
            </div> -->


            
        </div>
    </div>
</section>



<!-- footer -->

<footer class="py-4 bg-dark text-white text-center position-relative">
    <div class="container">
        <p class="lead">
            Copyright &copy; 2022 Toleen Falion
        </p>
        <a href="#" class="position-absolute bottom-0 end-0 p-3 text-warning" >
            <i class="bi bi-arrow-up-circle h2"></i>

        </a>
    </div>
</footer>

   <!-- JavaScript Bundle with Popper -->
   <script src="bootstrap5/js/bootstrap.js"></script>
   <script src="js.js"></script>
</body>
</html>
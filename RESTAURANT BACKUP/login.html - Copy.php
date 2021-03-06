<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chopotino Deli Restaurant </title>
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!--custom Css file link-->
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
    <!--header section start-->

    <header class="header">

        <a href="" class="logo"><i class="fas fa-utensils"></i>Chopotino </a>

        <nav class="navbar">
            <a href="#Home">Home</a>
            <a href="#popular">Popular</a>
            <a href="#menu">Menu</a>
            <a href="#about us">About Us</a>
            <a href="#blog">Blog</a>
        </nav>
        
        <div class="icons">
            <div id="search-btn" class="fa fa-search"></div>
           <!--<div id="search-btn" class="fa fa-bars"></div>--> 
            <div id="login-btn" class="fa fa-user"></div>
        </div>

    </header>

    <!--header section ends-->

    <!--search form strt-->
    <section class="search-form-container">
         <form action="">
            <input type="search" name="" id="search-box" placeholder="search here..">
            <label for="search-box" class="fas fa-search"></label>
         </form>
    </section>
       
    <!--search form ends-->


<!--login form start -->
<div class="login-form-container">

    <form action="transaction.html.php" method="post" class="login-form">
        <h3>login form</h3>
        <input type="email" name="" placeholder="enter your email" id="" class="box">
        <input type="password" name="" placeholder="enter your password" id="" class="box">
        <div class="reminder">
            <input type="checkbox" name="" id="Remember-me">
            <label for="remember-me">Remember Me</label>
        </div>
        <input type="submit" value="suubmit" name="login" class="btn">
        <p>forget password? <a href="">click here</a></p>
        <p>Don't have an account? <a href="">creat one</a></p>
    </form>
</div>

<!--login form ends -->


    <!--custome js file link-->
    <link rel="stylesheet" href="js/script.js">
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal porfolio</title>
    <link rel="icon" type="image/x-icon" href="Media/logo.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!--    <style>
    
    button{
        border-radius: 50%;
        padding: 5px;
        color: darkgoldenrod;
        font-size: 8px;
        font-weight: bold;
        background-color: white;
        border: 4px ridge violet;
    }
        </style>-->
</head>
<body>
    <header class="header">

       <div id="menu-btn" class="fas fa-bars"></div>

       <a href="#home" class="log">Portfolio</a>
       <img src="Media/logo.jpg" alt="" class="logo">

       <nav class="navbar">

        <a href="Home.php" class="active"> <i class="fa fa-home"></i> Home</a>
        <a href="about.php"><i class="fa fa-user"></i>About</a>
        <a href="Service.php"><i class="fa fa-list"></i>Service</a>
        <a href="Portfolio.php"><i class="fa fa-briefcase"></i>Portfolio</a>
        <a href="contact.php"><i class="fa fa-comments"></i>Contact</a>
       </nav>

       <div class="follow">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-github"></a>
       </div>
       <!--
        <div class="right">
         <nav>
             <ul>
                 <button onclick="changeBackgroundColor('yellow')">Yellow</button>
                 <button onclick="changeBackgroundColor('lightblue')">lightblue</button>
                 <button onclick="changeBackgroundColor('purple')">Purple</button>
                 <button onclick="changeBackgroundColor('darkgreen')">Green</button>
                 <button onclick="changeBackgroundColor('pink')">Pink</button>
                 <button onclick="changeBackgroundColor('darkred')">Red</button>
             </ul> 
         </nav>
        </div>
    -->
    </header>

    <section class="home" id="home">
        <div class="image">
            <img src="Media/user.jpg" alt="">
        </div>

        <div class="content">
            <h3>Assalamu-alaikum, <br> I am <span class="dec">Siema</span> </h3>
            <span class="doe">Web developer & designer.</span>
            <p>My actual name is Sayma Abdul Kader. I'm currently doing my Bachelors in Computer Science and Engineering A.K.A B.Sc in CSE.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat fugit libero velit, hic quas odit. Iste aperiam atque perspiciatis, omnis deleniti
                 exercitationem in, excepturi cupiditate saepe veritatis ducimus quibusdam quaerat!
            </p>
            <a href="contact.php" class="btn hire-me">Hire Me</a>
        </div>
    </section>
 
    <div class="credit">&copy; copyright @ <?php echo date('Y'); ?> by <span>Ms. Web Designer</span></div> 

    <script src="file.js">
        
    </script>
</body>
</html>
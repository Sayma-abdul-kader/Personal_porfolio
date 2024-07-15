<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "shammy";

// Create connectiosn
$conn = new mysqli($servername, $username, $password, $databaseName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "            Connected successfully <br>";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contacts` (`Name`,`Number`,`E-mail`,`Message`) VALUES ('$name','$number','$email','$message');";
    $result = mysqli_query($conn, $sql);
if($result){
    echo "<script>alert('Inserted')</script>";
}
else{
    echo "<script>alert('Not Inserted')</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal porfolio</title>
    <link rel="icon" type="image/x-icon" href="Media/logo.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
    </header>

    <section class="contact" id="contact">
        <div class="container">
           <div class="tile">
            <h2>Contact Me</h2>
           </div>
           <p style="text-align:center; font-size:20px; color: violet;">Feel free to contact me any time!</p>
        </div>
        <form action="" method="POST">
            <label for="name">Name : </label>
            <input type="text" id="name" name="name" placeholder="Enter your name" class="box" required>
            <label for="email">E-mail : </label>
            <input type="email" id="email" name="email" placeholder="Enter your e-mail" class="box" required>
            <label for="number">Phone Number : </label>
            <input type="number" id="number" name="number" min="0" placeholder="Enter your number" class="box" required>
            <label for="message"> Message box : </label>
            <textarea name="message" class="box" required placeholder="Enter your message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" name="submit" class="btn">
        </form>
    </section>

    <div class="credit">&copy; copyright @ <?php echo date('d-m-Y'); ?> by <span>Ms. Web Designer</span></div> 
    <script src="file.js">

    </script>

    
</body>
</html>
<?php
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "shammy";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link rel="icon" type="image/x-icon" href="Media/logo.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .logg{
            float: right;
            padding: 20px;
            size: 30px;
        }
        .low:hover{
            transform: scale(1.2);
        }
    </style>
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
    <div class="logg">
        <a href="log-in.php" class="low"><i class="fa-solid fa-right-to-bracket fa-2xl"></i></a>
    </div>
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="tile">
                <h2>Portfolio</h2>
            </div>
        </div>
        <div class="box-container">
            <?php
            $sql = "SELECT * FROM portfolio";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="box">
                    <img src="' . $row['image_url'] . '" alt="">
                    <h3>' . $row['title'] . '</h3>
                    <span>(' . $row['date'] . ')</span>
                </div>';
            }
            ?>
            <div class="box">
                <a href="https://www.thebizbud.com/"><img src="Media/p3.jpg" alt=""></a>
                <h3>Web development</h3>
                <span>(2020-2022)</span>
            </div>
            <div class="box">
                <img src="Media/portfolio1.jpg" alt="">
                <h3>Web development</h3>
                <span>(2020-2022)</span>
            </div>
            <div class="box">
                <a href="https://www.freepik.com/photos/fruit"><img src="Media/p7.jpg" alt=""></a>
                <h3>Web development</h3>
                <span>(2023)</span>
            </div>
            <div class="box">
                <a href="file:///C:/Users/Admin/Documents/WBCLASSRESOURCE/ASSIGNMENT-3/index.html"><img src="Media/p4.jpg" alt=""></a>
                <h3>Web development</h3>
                <span>(2023)</span>
            </div>
            <div class="box">
                <a href="file:///C:/Users/Admin/Documents/5th_semester/CSE-3532/Assignment-1/as.html"><img src="Media/p5.jpg" alt=""></a>
                <h3>Web development</h3>
                <span>(2024)</span>
            </div>
            
            <div class="box">
                <img src="Media/team.jpg" alt="">
                <h3>Web development</h3>
                <span>(2023)</span>
            </div>
            <div class="box">
                <img src="Media/p8.jpg" alt="">
                <h3>Web development</h3>
                <span>(2020-2022)</span>
            </div>
            <div class="box">
                <h3>Web development</h3>
                <a href="Js-calculator/index.html"> <img src="Media/p6.jpg" alt=""></a>
                <span>(2024)</span>
            </div>

        </div>
    </section>

    <div class="credit">&copy; copyright @ <?php echo date('Y'); ?> by <span>Ms. Web Designer</span></div>
    <script src="file.js"></script>
</body>
</html>
<?php
mysqli_close($conn);
?>

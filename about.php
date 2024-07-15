<?php
$servername = "localhost"; 
$username = "root";
$password = ""; 
$databaseName = "shammy";

// Create connection
$conn = new mysqli($servername, $username, $password, $databaseName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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
    <style>
        .edu-exp .container {
    max-width: 1000px;
    margin: auto;
    padding: 20px;
}
.heading span{
    color:rgb(0, 213, 255);
}
.edu-exp .heading {
    text-align: center;
    margin-bottom: 20px;
    font-size: 22px;
}

.timeline {
    position: relative;
    padding: 10px 0;
}

.timeline::before {
    content: '';
    position: absolute;
    width: 4px;
    background-color: #ddd;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -2px;
}

.timeline-item {
    padding: 10px 40px;
    position: relative;
    background: inherit;
    width: 50%;
}

.timeline-item:nth-child(odd) {
    left: 0;
}

.timeline-item:nth-child(even) {
    left: 50%;
}

.timeline-item::before {
    content: '';
    position: absolute;
    width: 25px;
    height: 25px;
    right: -17px;
    background-color: white;
    border: 4px solid #FF9F55;
    top: 15px;
    border-radius: 50%;
    z-index: 1;
}

.timeline-item:nth-child(even)::before {
    left: -16px;
}

.timeline-item h3 {
    margin: 0 0 10px 0;
    font-size: 16px;
    color: #FF9F55;
}

.timeline-item p {
    margin: 0;
    color: white;
    font-size: 14px;
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

    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="title">
                    <h2>About Me</h2>
                </div>
                <div class="row">
                    <div class="abt">
                        <div class="row">
                            <div class="about-txt">
                                <h3>I'm Sayma A.Kader and <span>Web developer</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quasi in recusandae quis esse, ut enim dolorem sit, vel autem molestiae doloremque ullam distinctio obcaecati. Et molestiae aut dolorum maxime rem quam id? Facilis, cum enim expedita aliquid voluptatum doloribus tenetur saepe culpa, atque adipisci debitis! Labore nisi est architecto.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="personal-info">
                               <div class="row">
                                <div class="info-t">
                                    <p>Birthday : <span> 31 march 2000</span></p>
                                </div>
                                <div class="info-t">
                                    <p>Age : <span> 23 </span></p>
                                </div>
                                <div class="info-t">
                                    <p>Website : <span> WWW.domain.COM</span></p>
                                </div>
                                <div class="info-t">
                                    <p>E-mail : <span> saymaabdulkader@gmail.com</span></p>
                                </div>
                                <div class="info-t">
                                    <p>Degree : <span> CS</span></p>
                                </div>
                                <div class="info-t">
                                    <p>Phone : <span> 01306744469</span></p>
                                </div>
                                <div class="info-t">
                                    <p>City : <span> Chittagong</span></p>
                                </div>
                                <div class="info-t">
                                    <p>Freelance : <span> Available</span></p>
                                </div>
                               </div>
                               <div class="row">
                                <div class="button">
                                    <a href="BIO-DATA.pdf" download="BIO-DATA.pdf" class="btn"> Download CV</a>
                                </div>
                               </div>
                            </div>

                            <div class="skills">
                                <div class="row">
                                    <div class="skl-it">
                                        <h5>CSS</h5>
                                        <div class="prog">
                                            <div class="progs" style="width: 92%">
                                                <div class="percent">92%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skl-it">
                                        <h5>JS</h5>
                                        <div class="prog">
                                            <div class="progs" style="width: 86%">
                                                <div class="percent">86%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skl-it">
                                        <h5>Html</h5>
                                        <div class="prog">
                                            <div class="progs" style="width: 80%">
                                                <div class="percent">80%%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skl-it">
                                        <h5>Python</h5>
                                        <div class="prog">
                                            <div class="progs" style="width: 78%">
                                                <div class="percent">78%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skl-it">
                                        <h5>PHP</h5>
                                        <div class="prog">
                                            <div class="progs" style="width: 56%">
                                                <div class="percent">56%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skl-it">
                                        <h5>Bootstrap</h5>
                                        <div class="prog">
                                            <div class="progs" style="width: 76%">
                                                <div class="percent">76%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="edu-exp" id="education-experience">
        <div class="container">
            <h1 class="heading"><span>Education & Experience</span></h1>
            <div class="timeline">
                <div class="timeline-item">
                    <h3>Bachelor of Science in Computer Science</h3>
                    <p>University of XYZ, 2018 - 2022</p>
                    <p>Achieved a first-class degree in Computer Science, focusing on web development, data structures, and algorithms. Completed several projects and a final-year thesis on machine learning applications in web security.</p>
                </div>
                <div class="timeline-item">
                    <h3>Junior Web Developer</h3>
                    <p>ABC Tech Solutions, 2022 - Present</p>
                    <p>Worked on developing and maintaining the company's client websites. Implemented responsive design and improved user interface, leading to a 20% increase in user engagement.</p>
                </div>
                <div class="timeline-item">
                    <h3>Intern Web Developer</h3>
                    <p>WebDev Inc., Summer 2021</p>
                    <p>Assisted in developing e-commerce websites and web applications. Gained experience in PHP, JavaScript, and MySQL. Improved the performance of existing applications by optimizing the codebase.</p>
                </div>
                <div class="timeline-item">
                    <h3>High School Diploma</h3>
                    <p>Chittagong High School, 2016 - 2018</p>
                    <p>Graduated with honors, excelling in mathematics and computer science. Participated in various programming competitions and workshops.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="credit">&copy; copyright @ <?php echo date('d-m-Y'); ?> by <span>Ms. Web Designer</span></div>
    </footer>
    <script src="file.js"></script>
</body>
</html>
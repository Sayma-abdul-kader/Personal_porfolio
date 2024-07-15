<?php
session_start();
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "shammy";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['usname']) && isset($_POST['password'])) {
    function validate($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    $usname = validate($_POST['usname']);
    $pass = validate($_POST['password']);

    if (empty($usname)) {
        header("Location: log-in.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: log-in.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM user WHERE user_name=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $usname);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $usname && $row['password'] === $pass) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: edit-portfol.php");
                exit();
            } else {
                header("Location: log-in.php?error=Incorrect User name or password");
                exit();
            }
        } else {
            header("Location: log-in.php?error=User not found");
            exit();
        }
    }
}

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_portfolio'])) {
        $user_id = $_SESSION['id'];
        $image_url = $_POST['image_url'];
        $title = $_POST['title'];
        $date = $_POST['date'];

        $sql = "INSERT INTO portfolio (user_id, image_url, title, date) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isss", $user_id, $image_url, $title, $date);

        if ($stmt->execute()) {
            header("Location: edit-portfol.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_portfolio'])) {
        $portfolio_id = $_POST['portfolio_id'];

        $sql = "DELETE FROM portfolio WHERE id = ? AND user_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $portfolio_id, $_SESSION['id']);

        if ($stmt->execute()) {
            header("Location: edit-portfol.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Portfolio</title>
    <link rel="icon" type="image/x-icon" href="Media/logo.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .h2 {
            text-align: center;
            color: #fff;
            margin-bottom: 10px;
            font-size: 20px;
        }
        .cad {
            text-align: center;
            padding: 20px;
        }
        .am {
            background: #555;
            padding: 10px 15px;
            color: #fff;
            border-radius: 5px;
            margin-right: 10px;
            border: none;
            font-size: 16px;
            display: inline-block;
        }
        .am:hover {
            opacity: .7;
        }
        .custom-form {
            display: none;
            flex-direction: column;
            margin-top: 20px;
        }
        .custom-form input, .custom-form button {
            margin: 5px 0;
            padding: 10px;
            font-size: 16px;
            color: black;
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
    <div class="cad">
        <h1 class="h2">Hello, <?php echo $_SESSION['user_name']; ?></h1>
        <a href="logout.php" class="am">Logout <i class="fa-regular fa-circle-xmark fa-bounce"></i></a>
    </div>
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="tile">
                <h2>Portfolio</h2>
            </div>
            <div class="add">
                <button class="btn" id="add-btn">Add</button>
            </div>
            <div class="custom-form" id="custom-form">
                <form method="POST" action="">
                    <input type="text" name="image_url" id="image-url" placeholder="Image URL" required>
                    <input type="text" name="title" id="title" placeholder="Title" required>
                    <input type="text" name="date" id="date" placeholder="Date (e.g., 2024)" required>
                    <button type="submit" name="add_portfolio" class="btn">Submit</button>
                </form>
            </div>
        </div>
        <div class="box-container" id="box-container">
            <?php
            if (isset($_SESSION['id'])) {
                $user_id = $_SESSION['id'];
                $sql = "SELECT * FROM portfolio WHERE user_id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $user_id);
                $stmt->execute();
                $result = $stmt->get_result();

                while ($row = $result->fetch_assoc()) {
                    echo '<div class="box">
                        <img src="' . $row['image_url'] . '" alt="">
                        <h3>' . $row['title'] . '</h3>
                        <span>(' . $row['date'] . ')</span> <br>
                        <form method="POST" action="" style="display:inline;">
                            <input type="hidden" name="portfolio_id" value="' . $row['id'] . '">
                            <button type="submit" name="delete_portfolio" class="btn delete-btn">Delete</button>
                        </form>
                    </div>';
                }
            }
            ?>
        </div>
        <!-- Removed the static portfolio items with delete buttons not linked to the form -->
    </section>

    <div class="credit">&copy; copyright @ <?php echo date('Y'); ?> by <span>Ms. Web Designer</span></div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const addBtn = document.getElementById('add-btn');
            const customForm = document.getElementById('custom-form');

            addBtn.addEventListener('click', function() {
                customForm.style.display = 'flex';
            });

            document.querySelectorAll('.delete-btn').forEach(function(deleteBtn) {
                deleteBtn.addEventListener('click', function(e) {
                    if (!confirm("Are you sure you want to delete this portfolio item?")) {
                        e.preventDefault();
                    }
                });
            });
        });
    </script>
</body>
</html>

<?php
mysqli_close($conn);
?>

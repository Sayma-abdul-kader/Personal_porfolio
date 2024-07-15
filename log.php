<?php
session_start();

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "shammy"; // Ensure this is the correct database name

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully <br>";

if (isset($_POST['usname']) && isset($_POST['password'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $usname = validate($_POST['usname']);
    $pass = validate($_POST['password']); // This is still being validated for security purposes

    if (empty($usname)) {
        header("Location: log-in.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: log-in.php?error=Password is required");
        exit();
    } else {
        // Using prepared statements to prevent SQL injection
        $sql = "SELECT * FROM user WHERE user_name=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $usname);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if($row['user_name'] === $usname && $row['password'] === $pass) {
                $_SESSION['user_name'] = $row['user_name'];                
                $_SESSION['name'] = $row['name'];                
                $_SESSION['id'] = $row['id'];

                header("Location: edit-portfol.php");
                exit();
            }
        } else {
            header("Location: log-in.php?error=User not found");
            exit();
        }
    }
} else {
    header("Location: log-in.php");
    exit();
}

mysqli_close($conn);
?>

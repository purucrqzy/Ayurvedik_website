<?php
session_start();
require 'config.php'; // Include the database configuration file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Validate inputs
    if (empty($email)) {
        echo "Please enter the email.";
    } else if (empty($password)) {
        echo "Please enter the password.";
    } else {
        // Prepare and execute the query
        $sql = "SELECT email, password FROM `add_data` WHERE email = ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();

            // Check if email exists
            if ($stmt->num_rows > 0) {
                $stmt->bind_result($email, $hashed_password);
                $stmt->fetch();
                
                // Verify password
                if (password_verify($password, $hashed_password)) {
                    // Start a new session and save the email to the session
                    $_SESSION["loggedin"] = true;
                    $_SESSION["email"] = $email;

                    // Insert the email into the SQL table
                    $insert_sql = "INSERT INTO `login_record` (email) VALUES (?)";
                    if ($insert_stmt = $conn->prepare($insert_sql)) {
                        $insert_stmt->bind_param("s", $email);
                        $insert_stmt->execute();
                        $insert_stmt->close();
                    } else {
                        echo "Error: Could not prepare insert statement.";
                    }

                    // Redirect user to the welcome page
                    header("Location:../feespage.php");
                    exit;
                } else {
                    echo "Invalid password.";
                }
            } else {
                echo "No account found with that email.";
            }
            $stmt->close();
        } else {
            echo "Error: Could not prepare select statement.";
        }
    }
    
    $conn->close();
}

// Logout functionality
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    // Unset all session variables
    $_SESSION = array();
    
    // Destroy the session
    session_destroy();
    
    // Redirect to login page
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students Login - SYCET</title>
  <link rel="shortcut icon" href="../image/favicon.ico" type="image/svg+xml">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>
  <section class="header">
  <nav>
            <a href="../index.html"><img src="../image/favicon.ico" id="logo-img"></a>
            
            <div class="nav-links" id="navLinks">

                <span class="icon" onclick="hidemenu()">&#10005;</span>
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../Admission_page.php">Admission</a></li>
                    <li><a href="../hospital_page.html">Hospital</a></li>
                    <li><a href="../Contact_page.html">Contact</a></li>
                    <li><a href="../index.html#course_call">Course</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div> 
            <span class="icon" onclick="showmenu()">&#9776;</span>
        </nav> 
  
    <form id="loginForm" method="POST">
      <div class="wrapper">
        <div class="r_form_wrap">
          <div class="title">
            <p id="header_fees">Login</p>
          </div>
          <div class="r_form">
            <div class="input_wrap">
              <label for="email">Email Address</label>
              <div class="input_item">
                <i class="fa fa-envelope" id="icon"></i>
                <input type="email" name="email" class="input" id="email" placeholder="Enter the Email ID" required>
              </div>
            </div>
            <div class="input_wrap">
              <label for="password">Password</label>
              <div class="input_item">
                <i class="fa fa-key" id="icon"></i>
                <input type="password" name="password" class="input" id="password" placeholder="Enter the password" required>
              </div>
            </div>
            <button type="submit" class="button">Login</button>
          </div>
        </div>
      </div>
    </form>
  </section>
  <div class="none_div"></div>
</body>
</html>

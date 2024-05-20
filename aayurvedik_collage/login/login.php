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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
                    <li><a href="../hospital_page.php">Hospital</a></li>
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
            <p id="header_fees">Student Login</p>
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
  
  <!--Footer-->
  <style>
          /* Footer */

footer {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    /*background: linear-gradient(135deg, #fb71db, #10f263); /* Blue to Purple gradient */
    background-color: azure;
    padding: 20px;
    color: rgb(0, 0, 0); /* Ensure text is readable on the gradient background */
}

.footer-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    max-width: 1200px;
    margin: 0 auto;
}

.logo-address {
    flex: 1;
}

.logo {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
}

.logo-img {
    width: 150px;
    height: 130px;
}

.address {
    margin-bottom: 10px;
}

.social-icons a {
    margin-right: 10px;
    text-decoration: none;
    font-size: 20px;
    color: #2e27ff;
}

.social-icons a:hover {
    color: #3ae13d;
}

.links {
    display: flex;
    flex: 2;
    justify-content: space-between;
}
.other-links{
    flex: 1;
}
.quick-links{
    flex: 1;
    margin-left: 100px;
}
.contact-us{
    flex: 1;
    margin-left: 100px;
}
.quick-links h3{
    text-decoration: underline;
}
.other-links h3{
    text-decoration: underline;
}
h3 {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 18px;
    margin-bottom: 10px;
}

ul {
    list-style: none;
    padding: 0;
}

li {
    margin-bottom: 8px;
}

a {
    text-decoration: none;
    color: #0d0d0e;
}

a:hover {
    text-decoration: underline;
}

.copyright{
    padding: 10px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: black;
    background-color: lightgreen;
    margin-top: 20px;
    text-align: center;

}

.copyright p {
    
    color:#777;
    font-size: 14px;
    font-weight: 300;
    line-height: 22px;
    padding: 10px;
    
}
        </style>
  <footer>
    <div class="footer-container">
        <div class="logo-address">
        <div class="logo"><a href="index.html"><img src="../image/favicon.ico" alt="Logo" class="logo-img" ></a></div>
            <div class="address">
                Gut No.258(P),<br>
                Satara Parisar,<br>
                Aurangabad (MS) - 431010
            </div>
           
        </div>
        <div class="links">
            <div class="other-links">
                <h3>Other useful Links</h3>
                <br>
                <ul>
                    <li><a href="https://sycet.org/" target="_blank">SYCET - Engineering</a></li>
                    <li><a href="https://www.sypoly.org/" target="_blank">SYPOLY - Polytechnique</a></li>
                    <li><a href="https://www.simsr.org/" target="_blank">SIMSR - MBA</a></li>
                    <li><a href="https://en.syppharmacy.org/" target="_blank">SYIPER - Pharmacy</a></li>
                    <li><a href="https://www.syp.ac.in/" target="_blank">Shreeyash Pratishthan</a></li>
                    
                </ul>
            </div>
            <div class="quick-links">
                <h3>Quick Links</h3>
                <br>
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../Admission_page.php">Admission</a></li>
                    <li><a href="../hospital_page.php">Hospital</a></li>
                    <li><a href="../Contact_page.html">Contact</a></li>
                    <li><a href="../index.html#course">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
            <div class="contact-us">
                <h3>Contact Us</h3>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-phone" style="color: red;"></i> <span>Phone</span>
                        <p>+0240 6608772 / 701 / 713</p>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope" style="color: red;"></i> <span>Email</span>
                        <p>sycet@yahoo.com</p>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt" style="color: red;"></i> <span>Address</span>
                        <p>Gut No.258, Satara Parisar, Beed By Pass, Aurangabad, MH</p>
                    </div>
                </div>
                <div class="social-icons">
                    <a href="https://www.facebook.com/shreeyashengineering/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/sycetadmin/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/shreeyashcollege/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://twitter.com/shreeyashcoe/" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <h4>About Us</h4>
        <p><i class="fa fa-copyright"></i> Purushottam & Shubham , All Right Reserved.<br>
            Designed By<br> <i class="fa fa-heart" style="color: red;"></i> Purushottam Garad<br>
            <i class="fa fa-heart" style="color: red;"></i> Shubham Gangane
        </p>
</div>
</footer>

<button id="scrollToTopButton">TOP</button>
<script src="../javascript/scrolltotop.js"></script>
</body>
</html>

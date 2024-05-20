<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login/login.php");
    exit;
}

// Database connection
$server = "localhost";
$username = "root";
$password = "";
$database = "ayurvedik";

// Create connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ensure session email is set
if (!isset($_SESSION['email'])) {
    die("No email set in session");
}

$email = $_SESSION['email'];
$sql = "SELECT email, course, name, year, id FROM `add_data` WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $email = $row['email'];
    $course = $row['course'];
    $name = $row['name'];
    $year = $row['year'];
    $id = $row['id'];
} else {
    echo "No user data found";
    exit;
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Pay Fees - GGU</title>
  <link rel="shortcut icon" href="image/favicon.ico" type="image/svg+xml">
  <link rel="stylesheet" href="css/fees_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</head>

<body>
  <section class="header">
    <nav>
      <a href="index.html"><img src="image/favicon.ico" id="logo-img"></a>

      <div class="nav-links" id="navLinks">
        <span class="icon" onclick="hidemenu()">&#10005;</span>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="Admission_page.php">Admission</a></li>
          <li><a href="hospital_page.php">Hospital</a></li>
          <li><a href="Contact_page.html">Contact</a></li>
          <li><a href="index.html#course_call">Course</a></li>
          <li><a href="login/login.php">Login</a></li>
        </ul>
      </div>
      <span class="icon" onclick="showmenu()">&#9776;</span>
    </nav>

    <form method="post" action="payment_page.php">
      <div class="wrapper">
        <div class="r_form_wrap">
          <div class="title">
            <p id="header_fees">Online Pay Fees</p>
            <button type="button" id="out-btn" onclick="location.href='login/logout.php'">Logout</button>
          </div>

          <div class="r_form">
            <div class="input_wrap">
              <label for="emailaddress">Email Address</label>
              <div class="input_item">
                <i class="fa fa-envelope" id="icon"></i>
                <input type="email" name="email" class="input" id="email" value="<?php echo htmlspecialchars($email); ?>" required>
              </div>
            </div>
            <div class="input_wrap">
              <label for="course">Course</label>
              <div class="input_item">
                <i class="fa fa-caret-square-o-down" aria-hidden="true" id="icon"></i>
                <select id="course" name="course" class="input" required onchange="updateTotal()">
                  <option value="select">Select the Course</option>
                  <option value="Ayurvedic Medicine and Rasayana">Ayurvedic Medicine and Rasayana</option>
                  <option value="Ayurvedic Nutrition and Dietetics">Ayurvedic Nutrition and Dietetics</option>
                  <option value="Ayurvedic Herbology and Botany">Ayurvedic Herbology and Botany</option>
                  <option value="Ayurvedic Pharmacology and Formulation">Ayurvedic Pharmacology and Formulation</option>
                  <option value="Ayurvedic Clinical Diagnosis and Case Studies">Ayurvedic Clinical Diagnosis and Case Studies</option>
                  <option value="Ayurvedic Psychology and Mind-Body Medicine">Ayurvedic Psychology and Mind-Body Medicine</option>
                </select>
              </div>
            </div>
            <div class="input_wrap">
              <label for="yourname">Your Name</label>
              <div class="input_item">
                <i class="fa fa-user" id="icon"></i>
                <input type="text" name="name" class="input" id="name" value="<?php echo htmlspecialchars($name); ?>" required>
              </div>
            </div>
            <div class="input_wrap">
              <label for="year">Year</label>
              <div class="input_item">
                <i class="fa fa-user" id="icon"></i>
                <input type="text" name="year" class="input" id="year" value="<?php echo htmlspecialchars($year); ?>" required>
              </div>
            </div>
            <div class="input_wrap">
              <label for="id">Your UID/Enrollment no</label>
              <div class="input_item">
                <i class="fa fa-list-ol" aria-hidden="true" id="icon"></i>
                <input type="text" name="id" class="input" id="id" value="<?php echo htmlspecialchars($id); ?>" required>
                <p id="uid_detail">Ex: FCAB2101101001 to enter the: 01</p>
              </div>
            </div>
            <div class="input_wrap">
              <label for="total">Total</label>
              <div class="input_item">
                <i class="fa fa-user" id="icon"></i>
                <input type="text" name="total" class="input" id="total" placeholder="Total fees" required readonly>
              </div>
            </div>
            <input type="submit" class="button" value="Pay Fees">
          </div>
        </div>
      </div>
    </form>
  </section>

  <div class="none_div">
  </div>
  
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
            <div class="logo"><img src="image/favicon.ico" alt="Logo" class="logo-img"></div>
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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="Admission_page.php">Admission</a></li>
                    <li><a href="hospital_page.php">Hospital</a></li>
                    <li><a href="Contact_page.html">Contact</a></li>
                    <li><a href="index.html#course">Contact</a></li>
                    <li><a href="login/login.php">Login</a></li>
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
  <script src="javascript/scrolltotop.js"></script>
</body>
<script src="javascript/fees_script.js"></script>
<script>
  var navLinks = document.getElementById("navLinks");

  function showmenu() {
    navLinks.style.right = "0";
  }
  function hidemenu() {
    navLinks.style.right = "-200px";
  }

  // Array to store course fees
  const courseFees = {
    "Ayurvedic Medicine and Rasayana": 100000,
    "Ayurvedic Nutrition and Dietetics": 120000,
    "Ayurvedic Herbology and Botany": 110000,
    "Ayurvedic Pharmacology and Formulation": 130000,
    "Ayurvedic Clinical Diagnosis and Case Studies": 140000,
    "Ayurvedic Psychology and Mind-Body Medicine": 150000
  };

  function updateTotal() {
    var courseSelect = document.getElementById("course");
    var selectedCourse = courseSelect.value;
    var totalInput = document.getElementById("total");
    if (courseFees.hasOwnProperty(selectedCourse)) {
      totalInput.value = courseFees[selectedCourse];
    } else {
      totalInput.value = "";
    }
  }
</script>

</html>

<?php
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "ayurvedik"; 

    $conn = mysqli_connect($server, $username, $password, $database);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    // Generate a random alphanumeric ID
    $id = uniqid('', true);
    $year = $_POST['year'];
    $name = $_POST['name'];
    $image = $_FILES['image']['name']; // To get the name of the uploaded file
    $course = $_POST['course'];
    $DOB = $_POST['dob'];
    $mno = $_POST['mno'];
    $email = $_POST['email'];
    $gender = $_POST['gender']; // Added this to capture the gender input
    $pass = $_POST['password'];
    $confirm_pass = $_POST['confirm_password'];
    $hash = password_hash($confirm_pass,PASSWORD_BCRYPT);

    // Password confirmation check
    if($pass !== $confirm_pass) {
        echo "<script>alert('ERROR: Password and Confirm Password do not match.');</script>";
    } else {
        // Moving the uploaded file to the desired directory
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

        // Using prepared statements to prevent SQL injection
        $sql = "INSERT INTO `add_data` (`id`, `name`, `email`, `mobile no`, `gender`, `dob`, `image`, `course`, `year`, `password`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssssssssss", $id, $name, $email, $mno, $gender, $DOB, $target_file, $course, $year, $hash);

        if(mysqli_stmt_execute($stmt)){
            echo "<script>alert('Thanks for filling the form!');</script>";
        } else{
            echo "<script>alert('ERROR: Could not execute the query.');</script>";
        }

        mysqli_stmt_close($stmt);
    }

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admission form- SYCET</title>
  <link rel="shortcut icon" href="image/favicon.ico" type="image/svg+xml">
  <link rel="stylesheet" href="css/admission_style.css">
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

  <div class="wrapper">
    <div class="r_form_wrap">
      <div class="title">
        <p>Admission form</p>
      </div>
      <!-- Admission form -->
      <div class="r_form">
        <form method="post" action="" enctype="multipart/form-data">
        <div class="input_wrap">
            <label>Year of Education</label>
            <div class="input_radio">
              <div class="input_radio_item">
                <input type="radio" id="First" name="year" class="radio" value="1" checked>
                <label for="First" class="radio_mark">
                  First Year
                </label>
              </div>
              <div class="input_radio_item">
                <input type="radio" id="Second" name="year" class="radio" value="2">
                <label for="Second" class="radio_mark">
                  Second Year
                </label>
              </div>
              <div class="input_radio_item">
                <input type="radio" id="Third" name="year" class="radio" value="3">
                <label for="Third" class="radio_mark">
                  Third Year
                </label>
              </div>
              <div class="input_radio_item">
                <input type="radio" id="Fourth" name="year" class="radio" value="4">
                <label for="Fourth" class="radio_mark">
                  Fourth Year
                </label>
              </div>
            </div>
          </div>
          <div class="input_wrap">
            <label for="yourname">Your Name</label>
            <div class="input_item">
              <i class="fa fa-user" id="icon"></i>
              <input type="text" name="name" class="input" id="name" placeholder="Enter the name" required>
            </div>
          </div>
          <div class="input_wrap">
            <label for="emailaddress">Email Address</label>
            <div class="input_item">
              <i class="fa fa-envelope" id="icon"></i>
              <input type="email" name="email" class="input" id="email" placeholder="Enter the Email ID" required>
            </div>
          </div>
          <div class="input_wrap">
            <label for="phone">Phone</label>
            <div class="input_item">
              <i class="fa fa-phone-square" id="icon"></i>
              <input type="number" name="mno" class="input" id="mno" placeholder="Enter the Mobile number" required>
            </div>
          </div>
          <div class="input_wrap">
            <label>Gender</label>
            <div class="input_radio">
              <div class="input_radio_item">
                <input type="radio" id="male" name="gender" class="radio" value="male" checked>
                <label for="male" class="radio_mark">
                  <ion-icon class="i" name="male-sharp"></ion-icon>
                  Male
                </label>
              </div>
              <div class="input_radio_item">
                <input type="radio" id="female" name="gender" class="radio" value="female">
                <label for="female" class="radio_mark">
                  <ion-icon class="i" name="female-sharp"></ion-icon>
                  Female
                </label>
              </div>
              <div class="input_radio_item">
                <input type="radio" id="other" name="gender" class="radio" value="other">
                <label for="other" class="radio_mark">
                  <ion-icon class="i" name="male-other-sharp"></ion-icon>
                  Other
                </label>
              </div>
            </div>
          </div>
          <div class="input_wrap">
            <label for="dob">Date Of Birth</label>
            <div class="input_item">
              <i class="fa fa-calendar" id="icon"></i>
              <input type="date" name="dob" class="input" id="dob" required>
            </div>
          </div>
          <div class="input_wrap">
            <label for="course">Course</label>
            <div class="input_item">
              <i class="fa fa-caret-square-o-down" aria-hidden="true" id="icon"></i>
              <select id="course" name="course" class="input" required>
                <option value="select">Select the Course</option>
                <option value="Ayurvedic Medicine and Rasayana" >Ayurvedic Medicine and Rasayana</option>
                    <option value="Ayurvedic Nutrition and Dietetics" >Ayurvedic Nutrition and Dietetics</option>
                    <option value="Ayurvedic Herbology and Botany">Ayurvedic Herbology and Botany</option>
                    <option value="Ayurvedic Pharmacology and Formulation">Ayurvedic Pharmacology and Formulation</option>
                    <option value="Ayurvedic Clinical Diagnosis and Case Studies">Ayurvedic Clinical Diagnosis and Case Studies</option>
                    <option value="Ayurvedic Psychology and Mind-Body Medicine">Ayurvedic Psychology and Mind-Body Medicine</option>
              </select>
            </div>
          </div>
          <div class="input_wrap">
            <label for="image">12th Marksheet</label>
            <div class="input_item">
              <i class="fa fa-file" id="icon"></i>
              <input type="file" name="image" class="input" id="image" required>
            </div>
          </div>
          <div class="input_wrap">
            <label for="password">Password</label>
            <div class="input_item">
              <i class="fa fa-key" id="icon"></i>
              <input type="password" name="password" class="input" id="password" placeholder="Enter the password" required>
            </div>
          </div>
          <div class="input_wrap">
            <label for="confirmpassword">Confirm Password</label>
            <div class="input_item">
              <i class="fa fa-check-circle" id="icon"></i>
              <input type="password" name="confirm_password" class="input" id="confirmpassword" placeholder="Enter the confirm password" required>
            </div>
          </div>
          <input type="submit" class="button" value="Register Now">
          <div></div>
          <input type="reset" class="clear_ad" value="Clear">
        </form>
      </div>
    </div>
  </div>
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
        <div class="logo"><a href="index.html"><img src="image/favicon.ico" alt="Logo" class="logo-img" ></a></div>
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
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
function sendmail() {
  Email.send({}).then(
    message => alert("Thanks for filling out our form!")
  );
}
</script>
<script>
var navLinks = document.getElementById("navLinks");
function showmenu(){
    navLinks.style.right="0";
}   
function hidemenu(){
    navLinks.style.right="-200px";
}
</script>
</html>

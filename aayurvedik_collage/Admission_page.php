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
  <title>Admission form- GGU</title>
  <link rel="shortcut icon" href="image/favicon.ico" type="image/svg+xml">
  <link rel="stylesheet" href="css/admission_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <li><a href="login/login.php">Login</a></li>
        <li><a href="hospital_page.html">Hospital</a></li>
        <li><a href="Contact_page.html">Contact</a></li>
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
                <option value="bca">BCA</option>
                <option value="bscit">Bsc IT</option>
                <option value="bscca&it">Bsc CA & IT</option>
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

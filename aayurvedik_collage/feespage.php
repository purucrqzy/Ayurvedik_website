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
$sql = "SELECT email, course, name, year, id, image FROM `add_data` WHERE email = ?";
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
    $imagePath = $row['image'];
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
  <link rel="stylesheet" href="css/fees_style.CSS">
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
          <li><a href="hospital_page.php">Hospital</a></li>
          <li><a href="Contact_page.html">Contact</a></li>
          <li><a href="index.html#course_call">Course</a></li>
          <li><a href="login/login.php">Login</a></li>
        </ul>
      </div>
      <span class="icon" onclick="showmenu()">&#9776;</span>
    </nav>
    <div class="main_body">
    <aside class="sidebar">
            <div class="profile_wrap">
                <label for="image" style="margin-left: 40%;
                font-weight: 800;">Your Image</label>
                <div class="profile_item">
                  <?php if ($imagePath): ?>
                    <img src="<?php echo htmlspecialchars($imagePath, ENT_QUOTES, 'UTF-8'); ?>" alt="User Image" class="profile_img">
                  <?php else: ?>
                    <p>Image not found.</p>
                  <?php endif; ?>
                </div>
            <input type="text" name="name" class="input" id="name" value="<?php echo htmlspecialchars($name); ?>" required>
            <input type="text" name="course" class="input" id="course" value="<?php echo htmlspecialchars($course); ?>" required>
            <div class="input_item">
              <label for="year" style="margin-left: 12%;
                                        font-weight: 800;">Year</label>
            <input type="text" name="year" class="input" id="year" value="<?php echo htmlspecialchars($year); ?>" required>
            <button type="button" id="out-btn" onclick="location.href='login/logout.php'">Logout</button>
            </div>
                  </div>
    </aside>
    <main class="form">
        <form method="post" action="payment_page.php" class="form_input">
          <div class="wrapper">
            <div class="r_form_wrap">
              <div class="title">
                <p id="header_fees">Online Pay Fees</p>
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
                      <option value="Ayurvedic Nutrition and Dietetics" >Ayurvedic Nutrition and Dietetics</option>
                      <option value="Ayurvedic Herbology and Botany" >Ayurvedic Herbology and Botany</option>
                      <option value="Ayurvedic Pharmacology and Formulation" >Ayurvedic Pharmacology and Formulation</option>
                      <option value="Ayurvedic Clinical Diagnosis and Case Studies"> Ayurvedic Clinical Diagnosis and Case Studies</option>
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
      </main>
      </div>
  </section>

  <div class="none_div">
  </div>
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

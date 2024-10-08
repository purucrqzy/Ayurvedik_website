
<?php
                    $server = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "ayurvedik_hospital";

                    $conn = mysqli_connect($server,$username,$password,$database);
                    if(!$conn){
                        echo "connection failed";
                     }
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital - SYCET</title>
    <link rel="shortcut icon" href="image/favicon.ico" type="image/svg+xml">
    <link rel="stylesheet" href="css/hospital_style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

</head>

<body>
    <!--Header-->

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
        <div class="text-box">
            <h1>SHREEYASH AYURVEDIC HOSPITAL AND RESEARCH CENTER, CHHATRAPATI SAMBHAJI NAGAR</h1>
            <p>The shreeyash Institute at chh. Sambhajinagar provide one of the earliest form of technical
                studies,<br>which has been vital in setting up the standard of brilliance.</p>
        </div>
    </section>
    <!--Hospital-->
    <div class="container">
        <div class="sidebar">
            <div class="tab active" onclick="showContent('vision')">Vision / Mission</div>
            <div class="tab" onclick="showContent('notice')">News & Notices</div>
            <div class="tab" onclick="showContent('about')">About Hospital</div>
            <div class="tab" onclick="showContent('infrastructure')">Infrastructure</div>
            <div class="tab" onclick="showContent('clinical')">Clinical Material</div>
            <div class="tab" onclick="showContent('patients')">IPD-OPD Patients</div>
            <div class="tab" onclick="showContent('staff')">Hospital Staff</div>
            <div class="tab" onclick="showContent('activities')">Social Activities</div>
            <div class="tab" onclick="showContent('republicday')">Republic Day</div>
            <div class="tab" onclick="showContent('camp1')">Medical Camp DEC-2023</div>
            <div class="tab" onclick="showContent('camp2')">Medical Camp JAN-2024</div>
            <div class="tab" onclick="showContent('camp3')">Medical Camp MAR-2024</div>
    <style>
        .contact-us1{
            border: 1px white solid;
            border-radius: 10px;
            margin: auto;
            width: 108.1%;
            margin-top: 10%;
            margin-right: auto;
            margin-left: -4.9%;
            padding: auto;
            background-color: #0d0d0e;
            color: white;
            align-items: center;
            text-align: center;
        }
        .line{
            border: 1px solid white;
            width: 80%;
            margin-top: 10%;
            margin-left: 10%;
            margin-bottom: 10%;
        }
    </style>
    <div class="contact-us1">

        <i class="fas fa-headset" style="font-size: 35px;margin-top:15%; margin-bottom:7%;"></i>
        <h3>How Can We Help You ?</h3>
        <h2>lets get in touch !!</h2>
        <div class="line"></div>
        <i class="fas fa-phone" style="font-size: 12px;"> (+91) 0240-6608708 / 778</i>
        <br><br>
        
        <i class="fas fa-envelope" style="font-size: 12px; margin-bottom:10%;"></i> shreeyashayurved@gmail.com
               
    </div>
    <style>
        .para5{
            border: 1px solid black;
            border-radius: 10px;
            margin: auto;
            width: 108.1%;
            margin-top: 10%;
            margin-right: auto;
            margin-left: -4.9%;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: medium;
            color: #0d0d0e;
            background-color: azure;

        }
        .para5 p{
            margin: 10%;
        }
    </style>
    <div class="para5">
        <p>Web-baesed Centralize Hospital System
            <br>
            Digital Management System</p>
    </div>
</div>
        
        
        <div class="main-content">
            <div class="top-containers">
            <div class="other-content">
                <h2
                    style="font-size: 28px; font-family: Verdana, Geneva, Tahoma, sans-serif; color: rgb(7, 136, 0);margin-top: 1%; margin-left: auto;margin-bottom: auto; text-align:center;">
                    SHREEYASH AYURVEDIC COLLEGE AND HOSPITAL</h2>

                <section class="hsp1">
                    <div class="hsp-col">
                        <img src="image/hospitalpage/ss6.jpg">
                        <div class="lyr">
                            <li><a href="index.html">
                                    <h2>SHREEYASH AYURVEDIC COLLEGE AND HOSPITAL RESEARCH CENTER</h2>
                                </a>
                            </li>
                            <p>
                                Shreeyash Ayurvedic College and Hospital Research Center
                            </p>
                        </div>
                    </div>
                </section>

                <div class="para2">
                    <p>
                        Shreeyash Ayurvedic College and Hospital is successfully serving the Patients with Ayurved as
                        well as Modern System of Medicine. Health Services to every person at very Low or No cost is our
                        vision which gives opportunities to build up skilled Doctors serving to the Patients Best
                        Hospital in Chhatrapati Sambhaji Nagar city with Ayurvedic , Allopathy, Dental treatment centers
                        under one roof. 10 OPD, 100 Beds with Fully equipped Operation theater, and Advance Panchkarma &
                        Physiotherapy Unit gives a strength to Health system . In-house X ray , ultrasound, Pathology
                        Center meets the needs of patients at center. Hospital Setup established in area of 4578.06 Sq.
                        Mtr.
                    </p>
                </div>

            </div>
            <div class="content">
                <div id="vision" class="content-item active">
                    <div class="vimi">
                        <i class="fas fa-sticky-note note-icon"> Vision & Mission</i>
                        <p>Shreeyash Ayurvedic College & Hospital Research Center, Satara Tanda, Aurangbad. Shreeyash
                            Ayurvedic College & Hospital Research Center was established in 2023. The 100 bedded
                            hospital compromises of a well-equipped Panchakarma centre, Operation Theater, well stocked
                            dispensing unit and state-of-the-art hospital and college building and 2500 sq. mts. of
                            botanical garden which holds more than 200 species of medicinal plants,. The hospital is
                            also equipped with X-Ray unit and a high-tech pathology laboratory. We have already bagged
                            No Objection Certificate from the Department of AYUSH, Govt. of India and we are looking
                            forward to be awarded with Letter of Permission for Ayurved College with an intake capacity
                            of 60 for Under Graduate program prescribed by Dept. of AYUSH, Govt. of India

                        </p>
                    </div>
                    <div class="column">
                        <i class="fas fa-sticky-note note-icon"> Vision</i>
                        <br>
                        <p>
                            To establish an institution to provide Health Services and Training in the field of AYURVEDA
                            to serve the society, keeping pace with Modern Medicine and Techniques. To engrave
                            Professionals with profound knowledge of AYURVEDA supplemented with knowledge of scientific
                            advances in modern medicine along with extensive practical training to become efficient
                            Physicians and surgeons fully competent to serve the HEALTHCARE domain. To be an academic
                            initiation par excellence in the field of Ayurved. To provide opportunities to teach, to
                            learn, to innovate the principles of Ayurved in the interest of mankind. To promote the
                            researches in the field of Ayurved. To provide highest quality education of Ayurved.
                        </p>
                    </div>
                    <br>
                    <div class="column2">
                        <i class="fas fa-sticky-note note-icon"> Mission</i>
                        <ul class="ult1">
                            <br>
                            <i class="fas fa-check"></i> To produce knowledgeable, affectionate and competent doctors by
                            imparting knowledge and skills to reinforce ethical practice and scientifically empowered
                            health care system.<br><br>
                            <i class="fas fa-check"></i> To create professional teaching and learning platform that
                            helps students to develop their own and innovative learning styles and ability.<br><br>
                            <i class="fas fa-check"></i> To compile the knowledge gained from several disciplines and
                            transform it into a creditable experience to tackle clinically related problems or
                            situations and develop effective wellness strategies.<br>
                        </ul>

                    </div>
                </div>
                <div id="notice" class="content-item">
    
<br>
                <div class="image-view-class">
                    <h2>Notice</h2><br>
                <br>
                    <div class="image-viewer2">
                        <img id="thumbnail" src="image/notice1.jpeg" alt="Thumbnail Image">
                    </div>
                <br>
                 
                
                </div>

            
        </div>
                <div id="about" class="content-item">

                    <!--Image Gallary-->
                    <center class="cnter1">
                        <h2
                            style="font-size: 28px; font-family: Verdana, Geneva, Tahoma, sans-serif; color: rgb(7, 136, 0);margin-top: 1%; margin-left: 5%;margin-bottom: 2%;">
                            Images Gallary</h2>
                        <table class="tbl1">
                            <tr>
                                <td class="td1">
                                    <img src="image/hospitalpage/h3.jpg" alt="image1">
                                </td>
                                <td class="td1">
                                    <img src="image/hospitalpage/h4.jpg" alt="image1">
                                </td>
                            </tr>
                            <tr>
                                <td class="td1">
                                    <img src="image/hospitalpage/hh11.jpg" alt="image1">
                                </td>
                                <td class="td1">
                                    <img src="image/hospitalpage/h21.jpg" alt="image1">
                                </td>
                            </tr>
                        </table>
                    </center>

                    <center class="cnter1">
                        <table class="tbl1">
                            <tr>
                                <td class="td2">
                                    <img src="image/hospitalpage/h12.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/hospitalpage/h23.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/hospitalpage/hh9.jpg" alt="image1">
                                </td>
                            </tr>

                        </table>
                    </center>

                    <center class="cnter1">
                        <table class="tbl1">
                            <tr>
                                <td class="td2">
                                    <img src="image/hospitalpage/hh7.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/hospitalpage/hh5.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/hospitalpage/hh3.jpg " alt="image1">
                                </td>
                            </tr>
                        </table>
                    </center>


                </div>
                <div id="infrastructure" class="content-item">
                    <center class="cnter1">
                        <table class="tbl1">
                            <tr>
                                <td class="td2">
                                    <img src="image/hospitalpage/h3.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/hospitalpage/h4.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/hospitalpage/h11.jpg" alt="image1">
                                </td>
                            </tr>

                        </table>
                    </center>

                    <center class="cnter1">
                        <table class="tbl1">
                            <tr>
                                <td class="td3">
                                    <img src="image/hospitalpage/h6.jpg" alt="image1">
                                </td>
                                <td class="td3">
                                    <img src="image/hospitalpage/h23.jpg" alt="image1">
                                </td>
                                <td class="td3">
                                    <img src="image/hospitalpage/h15.jpg " alt="image1">
                                </td>
                            </tr>
                        </table>
                    </center>
                    <center class="cnter1">
                        <table class="tbl1">
                            <tr>
                                <td class="td2">
                                    <img src="image/hospitalpage/h5.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/hospitalpage/h12.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/hospitalpage/h21.jpg " alt="image1">
                                </td>
                            </tr>
                        </table>
                    </center>
                    <h2>Details of the Hospital</h2>
                    <h3>REQUIREMENT OF AN ATTACHED HOSPITAL OF AYURVEDA COLLEGE</h3>
                    <table class="tab-1">
                        <tr class="head">
                            <th class="col-1">Sr no.</th>
                            <th class="col-2">Particular</th>
                            <th class="col-3">Area Sq.m</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total constructed area of Hospital</td>
                            <td>6246.72</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Hospital Administration desk</td>
                            <td>156.49</td>

                        </tr>
                        <?php
                            $sql = "SELECT * FROM `table5_data`";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["sr no"] . "</td><td>" . $row["Particulars"] . "</td><td>" . $row["Area"] . "</td></tr>";
                                }
                            } else {
                                echo "<tr><td colspan='5'>0 results</td></tr>";
                            }
                        ?>
                    </table>
                    <table class="tab-1">
                        <tr class="head">
                            <th class="col-1">Sr no.</th>
                            <th class="col-2">Particular</th>
                            <th class="col-3">Area Sq.m</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Our patient department(OPD)</td>
                            <td>506.75</td>
                        </tr>
                        <?php
                            $sql = "SELECT * FROM `table6_data`";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                        echo "<tr><td>" . $row["sr no"] . "</td><td>" . $row["Particulars"] . "</td><td>" . $row["Area"] . "</td></tr>";
                                }
                            } else {
                                        echo "<tr><td colspan='5'>0 results</td></tr>";
                            }
                        ?>
                    </table>
                    <table class="tab-1">
                        <tr class="head">
                            <th class="col-1">Sr no.</th>
                            <th class="col-2">Particular</th>
                            <th class="col-3">Area Sq.m</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>In Patients Department(IPD)</td>
                            <td>1716.54</td>
                        </tr>
                        <?php
                            $sql = "SELECT * FROM `table7_data`";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                            echo "<tr><td>" . $row["sr no"] . "</td><td>" . $row["Particulars"] . "</td><td>" . $row["Area"] . "</td></tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='5'>0 results</td></tr>";
                                    }
                ?>
                    </table>

                    <table class="tab-1">
                        <tr class="head">
                            <th class="col-1">Sr no.</th>
                            <th class="col-2">Particular</th>
                            <th class="col-3">Area Sq.m</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Operation Theature Block</td>
                            <td></td>
                        </tr>
                        <?php
        $sql = "SELECT * FROM `table8_data`";
        $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["sr no"] . "</td><td>" . $row["Particulars"] . "</td><td>" . $row["Area"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>0 results</td></tr>";
                }
                ?>
                    </table>
                    <table class="tab-1">
                        <tr class="head">
                            <th class="col-1">Sr no.</th>
                            <th class="col-2">Particular</th>
                            <th class="col-3">Area Sq.m</th>
                        </tr>
                        <?php
        $sql = "SELECT * FROM `table9_data`";
        $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["sr no"] . "</td><td>" . $row["Particulars"] . "</td><td>" . $row["Area"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>0 results</td></tr>";
                }
                ?>
                    </table>
                </div>
                <div id="clinical" class="content-item">
                    <center class="cnter1">
                        <table class="tbl1">
                            <tr>
                                <td class="td2">
                                    <img src="image/hospitalpage/h3.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/hospitalpage/h4.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/hospitalpage/h11.jpg" alt="image1">
                                </td>
                            </tr>

                        </table>
                    </center>

                    <center class="cnter1">
                        <table class="tbl1">
                            <tr>
                                <td class="td3">
                                    <img src="image/hospitalpage/h8.jpg" alt="image1">
                                </td>
                                <td class="td3">
                                    <img src="image/hospitalpage/h23.jpg" alt="image1">
                                </td>
                                <td class="td3">
                                    <img src="image/hospitalpage/h7.jpg " alt="image1">
                                </td>
                            </tr>
                        </table>
                    </center>
                    <center class="cnter1">
                        <table class="tbl1">
                            <tr>
                                <td class="td2">
                                    <img src="image/hospitalpage/h5.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/hospitalpage/h12.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/hospitalpage/h21.jpg " alt="image1">
                                </td>
                            </tr>
                        </table>
        </center>
                    
                    <table class="tab-1">
                        <tr class="head">
                            <th class="col-1">Sr no.</th>
                            <th class="col-2">Essential Instruments and Equipments</th>
                            <th class="col-3">Number of Instruments and Equipments available</th>
                        </tr>
                        <?php
        $sql = "SELECT * FROM `table1_data`";
        $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["sr no"] . "</td><td>" . $row["Essential Instruments and Equipments"] . "</td><td>" . $row["Number of Instruments and Equipments available"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>0 results</td></tr>";
                }
                ?>
                    </table>
                    <h2>List of Instruments and Equipments ETC available at Labour Room</h2>
                    <table class="tab-1">
                        <tr class="head">
                            <th class="col-1">Sr no.</th>
                            <th class="col-2">Essential Instruments and Equipments</th>
                            <th class="col-3">Number of Instruments and Equipments available</th>
                        </tr>
                        <?php
        $sql = "SELECT * FROM `table2_data`";
        $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["sr no"] . "</td><td>" . $row["Essential Instruments and Equipments"] . "</td><td>" . $row["Number of Instruments and Equipments available"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>0 results</td></tr>";
                }
                ?>
                    </table>
                    <h2>List of Instruments and Equipments ETC available at Operation Theatre</h2>
                    <table class="tab-1">
                        <tr class="head">
                            <th class="col-1">Sr no.</th>
                            <th class="col-2">Essential Instruments and Equipments</th>
                            <th class="col-3">Number of Instruments and Equipments available</th>
                        </tr>
                        <?php
        $sql = "SELECT * FROM `table3_data`";
        $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["sr no"] . "</td><td>" . $row["Essential Instruments and Equipments"] . "</td><td>" . $row["Number of Instruments and Equipments available"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>0 results</td></tr>";
                }
                ?>
                    </table>

                    <h2>List of Instruments and Equipments Objects available at Panchakarma</h2>
                    <table class="tab-1">
                        <tr class="head">
                            <th class="col-1">Sr no.</th>
                            <th class="col-2">Essential Instruments and Equipments</th>
                            <th class="col-3">Number of Instruments and Equipments available</th>
                        </tr>
                        <?php
        $sql = "SELECT * FROM `table4_data`";
        $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["sr no"] . "</td><td>" . $row["Essential Instruments and Equipments"] . "</td><td>" . $row["Number of Instruments and Equipments available"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>0 results</td></tr>";
                }
                ?>
                    </table>
                    </div>
        <div id="patients" class="content-item">
    
        <br>
                <div class="image-view-class">
                    <h2>OPD Patients Details</h2><br>
                    <h3> Monthwise Data - 2024</h3>
                <br>
                    <div class="image-viewer">
                        <img id="thumbnail" src="image/data2024.jpg" alt="Thumbnail Image">
                    </div>
                <br>
                    <h3> Monthwise Data - 2023</h3>
                    <div class="image-viewer">
                        <img id="thumbnail" src="image/data2023.jpg" alt="Thumbnail Image">
                    </div>
                <br>
                    <h2>IPD Patients Details</h2><br>
                    <h3> Monthwise Data - 2024</h3>
                <br>
                    <div class="image-viewer">
                        <img id="thumbnail" src="image/IPDdata2024.jpg" alt="Thumbnail Image">
                    </div>
                <br>
                    <h3> Monthwise Data - 2023</h3>
                    <div class="image-viewer">
                        <img id="thumbnail" src="image/IPDdata2023.jpg" alt="Thumbnail Image">
                    </div>
                
                </div>

            
        </div>
        <div id="staff" class="content-item">
        <div class="pdf-viewer">
        <h2>Doctor Staff List</h2>
        <iframe src="pdflists/doctor_list.pdf" frameborder="0"></iframe>
        </div>
        <div class="pdf-viewer">
        <h2>Nursing Staff List</h2>
        <iframe src="pdflists/nurse_list.pdf" frameborder="0"></iframe>
        </div>
        <div class="pdf-viewer">
        <h2>Other Staff List</h2>
        <iframe src="pdflists/other_staff_list.pdf" frameborder="0"></iframe>
        </div>
        </div>

   

        <div id="activities" class="content-item">

    <center class="cnter1">
                        <h2
                            style="font-size: 28px; font-family: Verdana, Geneva, Tahoma, sans-serif; color: rgb(7, 136, 0);margin-top: 1%; margin-left: 5%;margin-bottom: 2%;">
                            Social Activities</h2>
                        <table class="tbl1">
                            <tr>
                                <td class="td1">
                                    <img src="image/activities/other_activities/1.jpg" alt="image1">
                                </td>
                                <td class="td1">
                                    <img src="image/activities/other_activities/2.jpg" alt="image1">
                                </td>
                            </tr>
                            <tr>
                                <td class="td1">
                                    <img src="image/activities/other_activities/3.jpg" alt="image1">
                                </td>
                                <td class="td1">
                                    <img src="image/activities/other_activities/4.jpg" alt="image1">
                                </td>
                            </tr>
                        </table>
                    </center>

                    <center class="cnter1">
                        <table class="tbl1">
                            <tr>
                                <td class="td2">
                                    <img src="image/activities/other_activities/5.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/activities/other_activities/6.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/activities/other_activities/7.jpg" alt="image1">
                                </td>
                            </tr>

                        </table>
                    </center>

                    <center class="cnter1">
                        <table class="tbl1">
                            <tr>
                                <td class="td2">
                                    <img src="image/activities/other_activities/8.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/activities/other_activities/9.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/activities/other_activities/10.jpg " alt="image1">
                                </td>
                            </tr>
                        </table>
                    </center>           
            
        </div>
        <div id="republicday" class="content-item">

        <center class="cnter1">
                        <h2
                            style="font-size: 28px; font-family: Verdana, Geneva, Tahoma, sans-serif; color: rgb(7, 136, 0);margin-top: 1%; margin-left: 5%;margin-bottom: 2%;">
                            Republic Day Celebration</h2>
                        <table class="tbl1">
                            <tr>
                                <td class="td1">
                                    <img src="image/activities/republicday/j1.webp" alt="image1">
                                </td>
                                <td class="td1">
                                    <img src="image/activities/republicday/j2.webp" alt="image1">
                                </td>
                            </tr>
                            <tr>
                                <td class="td1">
                                    <img src="image/activities/republicday/j3.webp" alt="image1">
                                </td>
                                <td class="td1">
                                    <img src="image/activities/republicday/j4.webp" alt="image1">
                                </td>
                            </tr>
                        </table>
                    </center>

                    <center class="cnter1">
                        <table class="tbl1">
                            <tr>
                                <td class="td2">
                                    <img src="image/activities/republicday/j5.webp" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/activities/republicday/j6.webp" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/activities/republicday/j7.webp" alt="image1">
                                </td>
                            </tr>

                        </table>
                    </center>

                    <center class="cnter1">
                        <table class="tbl1">
                            <tr>
                                <td class="td2">
                                    <img src="image/activities/republicday/j8.webp" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/activities/republicday/j9.webp" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/activities/republicday/j10.webp " alt="image1">
                                </td>
                            </tr>
                        </table>
                    </center>           
            
        </div>
        <div id="camp1" class="content-item">

        <center class="cnter1">
                        <h2
                            style="font-size: 28px; font-family: Verdana, Geneva, Tahoma, sans-serif; color: rgb(7, 136, 0);margin-top: 1%; margin-left: 5%;margin-bottom: 2%;">
                            Free Medical Camp December - 2023</h2>
                        <table class="tbl1">
                            <tr>
                                <td class="td1">
                                    <img src="image/activities/camp1/c37.jpeg" alt="image1">
                                </td>
                                <td class="td1">
                                    <img src="image/activities/camp1/c38.jpeg" alt="image1">
                                </td>
                            </tr>
                            <tr>
                                <td class="td1">
                                    <img src="image/activities/camp1/c39.jpeg" alt="image1">
                                </td>
                                <td class="td1">
                                    <img src="image/activities/camp1/c26.jpg" alt="image1">
                                </td>
                            </tr>
                        </table>
                    </center>

                    <center class="cnter1">
                        <table class="tbl1">
                            <tr>
                                <td class="td2">
                                    <img src="image/activities/camp1/c1.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/activities/camp1/c4.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/activities/camp1/c6.jpg" alt="image1">
                                </td>
                            </tr>

                        </table>
                    </center>

                    <center class="cnter1">
                        <table class="tbl1">
                            <tr>
                                <td class="td3">
                                    <img src="image/activities/camp1/c31.jpeg" alt="image1">
                                </td>
                                <td class="td3">
                                    <img src="image/activities/camp1/c33.jpeg" alt="image1">
                                </td>
                                <td class="td3">
                                    <img src="image/activities/camp1/c35.jpeg " alt="image1">
                                </td>
                            </tr>
                        </table>
                    </center>   
                    <center class="cnter1">
                        <table class="tbl1">
                            <tr>
                                <td class="td2">
                                    <img src="image/activities/camp1/c7.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/activities/camp1/c8.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/activities/camp1/c9.jpg" alt="image1">
                                </td>
                            </tr>

                        </table>
                    </center>  
                    <center class="cnter1">
                        <table class="tbl1">
                            <tr>
                                <td class="td2">
                                    <img src="image/activities/camp1/c11.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/activities/camp1/c13.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/activities/camp1/c14.jpg" alt="image1">
                                </td>
                            </tr>

                        </table>
                    </center>     
                    <center class="cnter1">
                        <table class="tbl1">
                            <tr>
                                <td class="td3">
                                    <img src="image/activities/camp1/c32.jpeg" alt="image1">
                                </td>
                                <td class="td3">
                                    <img src="image/activities/camp1/c34.jpeg" alt="image1">
                                </td>
                                <td class="td3">
                                    <img src="image/activities/camp1/c36.jpeg " alt="image1">
                                </td>
                            </tr>
                        </table>
                    </center>    
                    <center class="cnter1">
                        <table class="tbl1">
                            <tr>
                                <td class="td2">
                                    <img src="image/activities/camp1/c21.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/activities/camp1/c22.jpg" alt="image1">
                                </td>
                                <td class="td2">
                                    <img src="image/activities/camp1/c23.jpg" alt="image1">
                                </td>
                            </tr>
                        </table>
                    </center>
                    <center class="center2"><img src="image/activities/camp1/c24.jpg" alt="image2"></center>
                    
            
        </div>
        <div id="camp2" class="content-item">


        <center class="cnter1">
        <h2
        style="font-size: 28px; font-family: Verdana, Geneva, Tahoma, sans-serif; color: rgb(7, 136, 0);margin-top: 1%; margin-left: 5%;margin-bottom: 2%;">
        Free Medical Camp - January - 2024</h2>
        <table class="tbl1">
        <tr>
            <td class="td1">
                <img src="image/activities/camp2/mcap1.jpg" alt="image1">
            </td>
            <td class="td1">
                <img src="image/activities/camp2/mcap2.jpg" alt="image1">
            </td>
        </tr>
        <tr>
            <td class="td1">
                <img src="image/activities/camp2/mcap3.jpg" alt="image1">
            </td>
            <td class="td1">
                <img src="image/activities/camp2/mcap4.jpg" alt="image1">
            </td>
        </tr>
        </table>
        </center>
        <center class="cnter1">
        <table class="tbl1">
        <tr>
            <td class="td3">
                <img src="image/activities/camp2/mcap8.jpg" alt="image1">
            </td>
            <td class="td3">
                <img src="image/activities/camp2/mcap10.jpg" alt="image1">
            </td>
            <td class="td3">
                <img src="image/activities/camp2/mcap12.jpg " alt="image1">
            </td>
        </tr>
           </table>
        </center>   
        <center class="cnter1">
        <table class="tbl1">
        <tr>
            <td class="td2">
                <img src="image/activities/camp2/mcap5.jpg" alt="image1">
            </td>
            <td class="td2">
                <img src="image/activities/camp2/mcap6.jpg" alt="image1">
            </td>
            <td class="td2">
                <img src="image/activities/camp2/mcap7.jpg" alt="image1">
            </td>
        </tr>

     </table>
        </center>
        <center class="cnter1">
        <table class="tbl1">
        <tr>
            <td class="td3">
                <img src="image/activities/camp2/mcap9.jpg" alt="image1">
            </td>
            <td class="td3">
                <img src="image/activities/camp2/mcap11.jpg" alt="image1">
            </td>
            <td class="td3">
                <img src="image/activities/camp2/mcap13.jpg " alt="image1">
            </td>
        </tr>
        </table>
        </center>         
            
        </div>
        <div id="camp3" class="content-item">

        <center class="cnter1">
                        <h2
                            style="font-size: 28px; font-family: Verdana, Geneva, Tahoma, sans-serif; color: rgb(7, 136, 0);margin-top: 1%; margin-left: 5%;margin-bottom: 2%;">
                            Free Medical Camp March - 2024</h2>
                        <table class="tbl1">
                            <tr>
                                <td class="td1">
                                    <img src="image/activities/camp3/camp1.jpg" alt="image1">
                                </td>
                                <td class="td1">
                                    <img src="image/activities/camp3/camp2.jpg" alt="image1">
                                </td>
                            </tr>
                            <tr>
                                <td class="td5">
                                    <img src="image/activities/camp3/camp4.jpg" alt="image1">
                                </td>
                                <td class="td5">
                                    <img src="image/activities/camp3/camp6.jpg" alt="image1">
                                </td>
                            </tr>
                            <tr>
                                <td class="td5">
                                    <img src="image/activities/camp3/camp7.jpg" alt="image1">
                                </td>
                                <td class="td5">
                                    <img src="image/activities/camp3/camp8.jpg" alt="image1">
                                </td>
                            </tr>
                            <tr>
                                <td class="td5">
                                    <img src="image/activities/camp3/camp9.jpg" alt="image1">
                                </td>
                                <td class="td5">
                                    <img src="image/activities/camp3/camp10.jpg" alt="image1">
                                </td>
                            </tr>

                        </table>
                    </center>
                </div>
            </div>
            </div>
            <style>

    /* Footer */
    
    
    
    footer {
        width: 100%;
        background-color: #f0f0f0;
        padding: 10px;
        box-sizing: border-box;
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
    color: red;
}

.links {
    display: flex;
    flex: 2;
    justify-content: space-between;
}
.other-links{
    flex: 1;
    margin-left: -30px;
}
.quick-links{
    flex: 1;
    margin-left: 100px;
}
.contact-us{
    flex: 1;
    margin-left: 70px;
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
 <!--Footer-->
         
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
            <i class="fa fa-heart" style="color: red;"></i>Shubham Gangane
        </p>
</div>
</footer>
        </div>
       
    </div>
    
   
    
 

<button id="scrollToTopButton">TOP</button>
<script src="javascript/scrolltotop.js"></script>         
</body>



</html>
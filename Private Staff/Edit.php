<?php
include 'connect.php';
error_reporting(0);
?>

<?php
$id = $_GET["personId"];
$Loc = $_GET['loc'];
$previousPage = $_GET['previouspage'];
$data = $_GET['data'];
$sql = "select * from `register` where id='$id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$certificate = $row['certificate_number'];
$firstName = $row['first_name'];
$lastName = $row['last_name'];
$birthday = $row['birthday'];
$address = $row['address'];
$province = $row['province'];
$postalCode = $row['postal_code'];
$email = $row['email'];
$phone = $row['phone'];
$employer = $row['employer'];
$courseOne = $row['course_one'];
$instructor = $row['instructor'];
$certificationDate = $row['certification_date'];
$renewalDate     = $row['renewal_date'];
$courseTwo = $row['course_two'];
$courseThree = $row['course_three'];

$firstName = ucwords($firstName);
$lastName = ucwords($lastName);
?>

<?php
$id = $_GET["personId"];
$sql = "select * from `register` where id='$id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$certificate = $row['certificate_number'];
$firstName = $row['first_name'];
$lastName = $row['last_name'];
$birthday = $row['birthday'];
$address = $row['address'];
$province = $row['province'];
$postalCode = $row['postal_code'];
$email = $row['email'];
$phone = $row['phone'];
$employer = $row['employer'];
$courseOne = $row['course_one'];
$instructor = $row['instructor'];
$certificationDate = $row['certification_date'];
$renewalDate     = $row['renewal_date'];
$courseTwo = $row['course_two'];
$courseThree = $row['course_three'];

$firstName = ucwords($firstName);
$lastName = ucwords($lastName);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Detailed Certification Lookup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
           
            background-color: #ececea;
        }

        h1 {
            text-align: center;
            color: #ff7c0a;
            margin-bottom: 50px;
        }

        .form {
            
            background-color: #ffffff;
            border: 1px solid #f1f1f1;
            padding: 1em;
            box-shadow: 0 4px 6px rgba(22, 22, 26, .18);
            overflow: hidden;
            height: 50vh;

        }


        @media screen and (min-width: 768px) {
            .form {
                width: 50%;
                margin: 0 auto;
            }
        }
        
        .form-control{
            margin-top: 20px;
        }

        .form-floating .form-control,
        .form-floating .form-select {
            border: none;
            border-bottom: 1px solid #000;
            border-radius: 0;
        }

        .form-floating .form-control:focus,
        .form-floating .form-select:focus {
            box-shadow: none;
            border-bottom: 1px solid orange;
        }

        .form-floating .form-control:focus+label,
        .form-floating .form-select:focus+label {
            color: black;
        }

        .form-floating .form-control+label,
        .form-floating .form-select+label {
            padding-left: 0;
            transition: all 0.5s;
        }

        .mainForm {
            transform: translateX(5%);
        }
    </style>
</head>

<body>
    <div>
        <div class="form my-5">
            <h1>EDIT RECORD</h1>

            <form action="" method="post" class="mainForm">
                <div class="row row-space" style="transform: translateX(10%)">
                    <?php if ($data == "certificate") {
                        echo '
                    <div class="form-floating mb-3" style="width: 300px;">
                    <input type="text" name="certificate" class="form-control" id="floatingInput" placeholder="Enter the certificate number here"  />
                    <label for="floatingInput" style="padding-left: 11px;">Certificate #</label>
                    </div>
                    ';
                    } ?>

                    <?php if ($data == "firstname") {
                        echo '
                <div class="form-floating mb-3" style="width: 300px">
                <input type="text" name="first_name" value="' . $firstName . '" class="form-control" id="floatingInput" placeholder="Enter First Name" />
                <label for="floatingInput" style="padding-left: 11px;">Participant First Name </label>
                </div>
                
                    ';
                    } ?>

                    <?php if ($data == "lastname") {
                        echo '
                <div class="form-floating mb-3" style="width: 300px">
                <input type="text" name="last_name" value="' . $lastName . '" class="form-control" id="floatingInput" placeholder="Enter Last Name" />
                <label for="floatingInput" style="padding-left: 11px;">Participant Last Name </label>
            </div>                
                    ';
                    } ?>

                    <?php if ($data == "birthday") {
                        echo '
                <div class="form-floating mb-3" style="width: 300px">
                <input type="date" name="birthday" value="' . $birthday . '" class="form-control" id="floatingInput" placeholder="Enter Date Of Birth" />
                <label for="floatingInput">Date of Birth</label>
            </div>
                
                    ';
                    } ?>

                    <?php if ($data == "address") {
                        echo '
                <div class="form-floating mb-3" style="width: 300px">
                        <input type="text" name="address" value="' . $address . '" class="form-control" id="floatingInput" placeholder="Enter Address" />
                        <label for="floatingInput" style="padding-left: 11px;">Participant Address #</label>
                    </div>
                    ';
                    } ?>

                    <?php if ($data == "province") {
                        echo '
                <div class="form-floating mb-3" style="width: 300px">
                <select class="form-select" name="province" value="' . $province . '" id="floatingSelect" aria-label="Floating label select example">
                    <option value="' . $province . '" selected>' . $province . '</option>
                    <option value="AB">AB</option>
                    <option value="BC">BC</option>
                    <option value="MB">MB</option>
                    <option value="NB">NB</option>
                    <option value="NL">NL</option>
                    <option value="NS">NS</option>
                    <option value="NT">NT</option>
                    <option value="NU">NU</option>
                    <option value="ON">ON</option>
                    <option value="PE">PE</option>
                    <option value="QC">QC</option>
                    <option value="SK">SK</option>
                    <option value="YT">YT</option>
                </select>
                <label for="floatingInput" style="padding-left: 11px;">Province</label>
            </div>                
                    ';
                    } ?>

                    <?php if ($data == "postalcode") {
                        echo '
                <div class="form-floating mb-3" style="width: 300px">
                <input type="text" name="postal_code" value="' . $postalCode . '" class="form-control" id="floatingInput" placeholder="Enter Postal Code" />
                <label for="floatingInput" style="padding-left: 11px;">Postal Code </label>
            </div>
                    ';
                    } ?>

                    <?php if ($data == "email") {
                        echo '
                <div class="form-floating mb-3" style="width: 300px">
                    <input type="email" name="email" value="' . $email . '" class="form-control" id="floatingInput" placeholder="Enter Your Email" />
                    <label for="floatingInput">Participant Email</label>
                </div>
                    ';
                    } ?>

                    <?php if ($data == "phone") {
                        echo '
                <div class="form-floating mb-3" style="width: 300px">
                        <input type="text" name="phone" value="' . $phone . '" class="form-control" id="floatingInput" placeholder="Enter Your Phone" />
                        <label for="floatingInput" style="padding-left: 11px;">Phone Number</label>
                    </div>                
                    ';
                    } ?>

                    <?php if ($data == "employer") {
                        echo '
                <div class="form-floating mb-3" style="width: 300px">
                <input type="text" name="employee_name" value="' . $employer . '" class="form-control" id="floatingInput" placeholder="Enter Your Name" />
                <label for="floatingInput" style="padding-left: 11px;">Employer Name</label>
            </div>
                
                    ';
                    } ?>

                    <?php if ($data == "courseone") {
                        echo '
                <div class="form-floating mb-3" style="width: 300px">
                <select class="form-select" name="first_course" value="' . $courseOne . '" id="floatingSelect" aria-label="Floating label select example">
                    <option value="' . $courseOne . '" selected>' . $courseOne . '</option>
                    <option value="CPR-A">CPR-A</option>
                    <option value="CPR-B">CPR-B</option>
                    <option value="CPR-C">CPR-C</option>
                    <option value="ECC - Emergency Child Care">ECC - Emergency Child Care</option>
                    <option value="EFA - Emergency First Aid">EFA - Emergency First Aid</option>
                    <option value="SFA - STANDARD FIRST AID">SFA - STANDARD FIRST AID</option>
                    <option value="Forklift Safe Operator">Forklift Safe Operator</option>
                    <option value="Powered Pallet Jack Safe Operator">Powered Pallet Jack Safe Operator</option>
                    <option value="Skid Steer Loader Safe Operator Training">Skid Steer Loader Safe Operator Training</option>
                    <option value="Rough Terrain Telehandler Safe Operator Training">Rough Terrain Telehandler Safe Operator Training</option>
                    <option value="Boom Lift Safe Operator Training">Boom Lift Safe Operator Training</option>
                    <option value="Scissor Lift Safe Operator Training">Scissor Lift Safe Operator Training</option>
                    <option value="Mobile Elevating Equipment Safe Operator Training">Mobile Elevating Equipment Safe Operator Training</option>
                    <option value="H2S Survive™">H2S Survive™</option>
                    <option value="Mask Fit Testing">Mask Fit Testing</option>
                    <option value="TDG - Transportation of Dangerous Goods">TDG - Transportation of Dangerous Goods</option>
                    <option value="Fall Protection">Fall Protection</option>
                    <option value="WHMIS 2015 Awareness - Workplace Hazardous Material Information Systems">WHMIS 2015 Awareness - Workplace Hazardous Material Information Systems</option>
                    <option value="Confined Spaces Awareness">Confined Spaces Awareness</option>
                    <option value="Food Safe Level 1">Food Safe Level 1</option>
                    <option value="WCB Young & New Workers">WCB Young & New Workers</option>
                    <option value="JHSC - Joint Health & Safety Committee Training">JHSC - Joint Health & Safety Committee Training</option>
                    <option value="Wired For Success™">Wired For Success™</option>
                    <option value="Customer Savvy™">Customer Savvy™</option>
                    <option value="Money Magnets™">Money Magnets™</option>
                    <option value="Boss Forge™">Boss Forge™</option>
                    <option value="Rent Smart™">Rent Smart™</option>
                </select>
            </div>
                
                    ';
                    } ?>

                    <?php if ($data == "instructor") {
                        echo '
                <div class="form-floating mb-3" style="width: 300px;">
                <input type="text" name="course_instructor" value="' . $instructor . '" class="form-control" id="floatingInput" placeholder="Course Instructor" />
                <label for="floatingInput">Course Instructor</label>
            </div>
                    ';
                    } ?>

                    <?php if ($data == "certificationdate") {
                        echo '
                <div class="form-floating mb-3" style="width: 300px">
                        <input type="date" name="certification_date" value="' . $certificationDate . '" class="form-control" id="floatingInput" placeholder="Enter Certificate Date" />
                        <label for="floatingInput" style="padding-left: 11px;">Certification Date</label>
                    </div>
                    ';
                    } ?>

                    <?php if ($data == "renewaldate") {
                        echo '
                <div class="form-floating mb-3" style="width: 300px">
                <input type="date" name="renewval_date" value="' . $renewalDate . '" class="form-control" id="floatingInput" placeholder="Enter Your Name" />
                <label for="floatingInput" style="padding-left: 11px;">Renewval Date</label>
            </div>
                
                    ';
                    } ?>

                    <?php if ($data == "coursetwo") {
                        echo '
                <div class="form-floating mb-3" style="width: 300px">
                <select class="form-select" name="second_course" id="floatingSelect" aria-label="Floating label select example">
                    <?php
                    if ($courseTwo != null) {
                        echo "<option value="' . $courseTwo . '" selected>' . $courseTwo . '</option>";
                    } else {
                        echo "<option value="" selected desabled>Course Two</option>";
                    }

                    ?>
                    <option value="CPR-A">CPR-A</option>
                    <option value="CPR-B">CPR-B</option>
                    <option value="CPR-C">CPR-C</option>
                    <option value="ECC - Emergency Child Care">ECC - Emergency Child Care</option>
                    <option value="EFA - Emergency First Aid">EFA - Emergency First Aid</option>
                    <option value="SFA - STANDARD FIRST AID">SFA - STANDARD FIRST AID</option>
                    <option value="Forklift Safe Operator">Forklift Safe Operator</option>
                    <option value="Powered Pallet Jack Safe Operator">Powered Pallet Jack Safe Operator</option>
                    <option value="Skid Steer Loader Safe Operator Training">Skid Steer Loader Safe Operator Training</option>
                    <option value="Rough Terrain Telehandler Safe Operator Training">Rough Terrain Telehandler Safe Operator Training</option>
                    <option value="Boom Lift Safe Operator Training">Boom Lift Safe Operator Training</option>
                    <option value="Scissor Lift Safe Operator Training">Scissor Lift Safe Operator Training</option>
                    <option value="Mobile Elevating Equipment Safe Operator Training">Mobile Elevating Equipment Safe Operator Training</option>
                    <option value="H2S Survive™">H2S Survive™</option>
                    <option value="Mask Fit Testing">Mask Fit Testing</option>
                    <option value="TDG - Transportation of Dangerous Goods">TDG - Transportation of Dangerous Goods</option>
                    <option value="Fall Protection">Fall Protection</option>
                    <option value="WHMIS 2015 Awareness - Workplace Hazardous Material Information Systems">WHMIS 2015 Awareness - Workplace Hazardous Material Information Systems</option>
                    <option value="Confined Spaces Awareness">Confined Spaces Awareness</option>
                    <option value="Food Safe Level 1">Food Safe Level 1</option>
                    <option value="WCB Young & New Workers">WCB Young & New Workers</option>
                    <option value="JHSC - Joint Health & Safety Committee Training">JHSC - Joint Health & Safety Committee Training</option>
                    <option value="Wired For Success™">Wired For Success™</option>
                    <option value="Customer Savvy™">Customer Savvy™</option>
                    <option value="Money Magnets™">Money Magnets™</option>
                    <option value="Boss Forge™">Boss Forge™</option>
                    <option value="Rent Smart™">Rent Smart™</option>
                </select>
            </div>
                
                    ';
                    } ?>

                    <?php if ($data == "coursethree") {
                        echo '
                <div class="form-floating mb-3" style="width: 300px">
                <select class="form-select" name="second_course" id="floatingSelect" aria-label="Floating label select example">
                    <?php
                    if ($coursethree != null) {
                        echo "<option value="' . $coursethree . '" selected>' . $coursethree . '</option>";
                    } else {
                        echo "<option value="" selected desabled>Course Two</option>";
                    }

                    ?>
                    <option value="CPR-A">CPR-A</option>
                    <option value="CPR-B">CPR-B</option>
                    <option value="CPR-C">CPR-C</option>
                    <option value="ECC - Emergency Child Care">ECC - Emergency Child Care</option>
                    <option value="EFA - Emergency First Aid">EFA - Emergency First Aid</option>
                    <option value="SFA - STANDARD FIRST AID">SFA - STANDARD FIRST AID</option>
                    <option value="Forklift Safe Operator">Forklift Safe Operator</option>
                    <option value="Powered Pallet Jack Safe Operator">Powered Pallet Jack Safe Operator</option>
                    <option value="Skid Steer Loader Safe Operator Training">Skid Steer Loader Safe Operator Training</option>
                    <option value="Rough Terrain Telehandler Safe Operator Training">Rough Terrain Telehandler Safe Operator Training</option>
                    <option value="Boom Lift Safe Operator Training">Boom Lift Safe Operator Training</option>
                    <option value="Scissor Lift Safe Operator Training">Scissor Lift Safe Operator Training</option>
                    <option value="Mobile Elevating Equipment Safe Operator Training">Mobile Elevating Equipment Safe Operator Training</option>
                    <option value="H2S Survive™">H2S Survive™</option>
                    <option value="Mask Fit Testing">Mask Fit Testing</option>
                    <option value="TDG - Transportation of Dangerous Goods">TDG - Transportation of Dangerous Goods</option>
                    <option value="Fall Protection">Fall Protection</option>
                    <option value="WHMIS 2015 Awareness - Workplace Hazardous Material Information Systems">WHMIS 2015 Awareness - Workplace Hazardous Material Information Systems</option>
                    <option value="Confined Spaces Awareness">Confined Spaces Awareness</option>
                    <option value="Food Safe Level 1">Food Safe Level 1</option>
                    <option value="WCB Young & New Workers">WCB Young & New Workers</option>
                    <option value="JHSC - Joint Health & Safety Committee Training">JHSC - Joint Health & Safety Committee Training</option>
                    <option value="Wired For Success™">Wired For Success™</option>
                    <option value="Customer Savvy™">Customer Savvy™</option>
                    <option value="Money Magnets™">Money Magnets™</option>
                    <option value="Boss Forge™">Boss Forge™</option>
                    <option value="Rent Smart™">Rent Smart™</option>
                </select>
            </div>
                
                    ';
                    } ?>
                </div>

                <input type="submit" name="submit" class="btn btn-warning" value="Update" style="width: 25%; font-weight: 700; transform: translateX(45%); margin-block:20px;">
            </form>
        </div>
    </div>
</body>

</html>
<?php
if (isset($_POST['submit'])) {

    if ($data == "certificate") {
        $sql = "update `register` set certificate_number='$certificate' ,first_name='$firstName',last_name='$lastName', birthday='$birthday', address='$address', province='$province', postal_code='$postalCode', email='$email', phone='$phone', employer='$employeeName', course_one='$firstCourse', instructor='$courseInstructor', certification_date='$completionDate', renewal_date='$renewvalDate', course_two='$secondCourse', course_three='$thirdCourse' where id=$id";
        $certificate = $_POST['certificate'];
        $firstName = $firstName;
        $lastName = $lastName;

        $certificate = strtolower(($certificate));
        $firstName = strtolower($firstName);
        $lastName = strtolower($lastName);

        $errors = array();
        $u = "select * from `register` where certificate_number = '$certificate'";
        $uu = mysqli_query($conn, $u);
        if (empty($certificate)) {
            $errors['u'] = "Enter Cetificate Id";
            // echo "<script>alert('Please Enter Certificate Number')</script>";
            echo "<p id='Test' style='text-align:center;position: absolute; top:15%;left:0;right:0; color:red'> Please Enter Certificate Number </p>
            <script>
            
            var checkRec = setTimeout(Anim , 1000);
            
            function Anim(){
                var Target = document.getElementById('Test');
                Target.style.display = 'none';
            }
            
            </script>
            ";
        } elseif (mysqli_num_rows($uu) > 0) {
            $errors['u'] = "Certificate Number Already Exist or Not Filled";
            // echo "<script>alert('Certificate Number Already Exist')</script>";
            echo "
            <p id='Test' style='text-align:center;position: absolute; top:15%;left:0;right:0; color:red'> Certificate Number Already Exist </p>
            
            <script>
            
            var checkRec = setTimeout(Anim , 1000);
            
            function Anim(){
                var Target = document.getElementById('Test');
                Target.style.display = 'none';
            }
            
            </script>
            ";
        } else {
            $sql = "update `register` set certificate_number='$certificate' where id=$id";

            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>window.location.href = '$previousPage.php?personId=$id&certificate=$certificate&firstname=$firstName&lastname=$lastName&loc=$Loc' </script>";
            } else {
                die(mysqli_error($conn));
            }
        }
    } elseif ($data == "firstname") {
        $certificate = $certificate;
        $lastName = $lastName;
        $firstName = $_POST['first_name'];

        $certificate = strtolower(($certificate));
        $firstName = strtolower($firstName);
        $lastName = strtolower($lastName);
        $sql = "update `register` set first_name='$firstName' where id=$id";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>window.location.href = '$previousPage.php?personId=$id&certificate=$certificate&firstname=$firstName&lastname=$lastName&loc=$Loc' </script>";
        } else {
            die(mysqli_error($conn));
        }
    } elseif ($data == "lastname") {
        $certificate = $certificate;
        $firstName = $firstName;
        $lastName = $_POST['last_name'];
        $certificate = strtolower(($certificate));
        $firstName = strtolower($firstName);
        $lastName = strtolower($lastName);
        $sql = "update `register` set last_name='$lastName' where id=$id";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>window.location.href = '$previousPage.php?personId=$id&certificate=$certificate&firstname=$firstName&lastname=$lastName&loc=$Loc' </script>";
        } else {
            die(mysqli_error($conn));
        }
    } elseif ($data == "address") {
        $certificate = $certificate;
        $firstName = $firstName;
        $lastName = $lastName;
        $address = $_POST['address'];
        $certificate = strtolower(($certificate));
        $firstName = strtolower($firstName);
        $lastName = strtolower($lastName);
        $sql = "update `register` set address='$address' where id=$id";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>window.location.href = '$previousPage.php?personId=$id&certificate=$certificate&firstname=$firstName&lastname=$lastName&loc=$Loc' </script>";
        } else {
            die(mysqli_error($conn));
        }
    } elseif ($data == "birthday") {
        $certificate = $certificate;
        $firstName = $firstName;
        $lastName = $lastName;
        $birthday = $_POST['birthday'];

        $certificate = strtolower(($certificate));
        $firstName = strtolower($firstName);
        $lastName = strtolower($lastName);
        $sql = "update `register` set birthday='$birthday' where id=$id";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>window.location.href = '$previousPage.php?personId=$id&certificate=$certificate&firstname=$firstName&lastname=$lastName&loc=$Loc' </script>";
        } else {
            die(mysqli_error($conn));
        }
    } elseif ($data == "province") {
        $certificate = $certificate;
        $firstName = $firstName;
        $lastName = $lastName;
        $province = $_POST['province'];

        $certificate = strtolower(($certificate));
        $firstName = strtolower($firstName);
        $lastName = strtolower($lastName);
        $sql = "update `register` set province='$province' where id=$id";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>window.location.href = '$previousPage.php?personId=$id&certificate=$certificate&firstname=$firstName&lastname=$lastName&loc=$Loc' </script>";
        } else {
            die(mysqli_error($conn));
        }
    } elseif ($data == "postalcode") {
        $certificate = $certificate;
        $firstName = $firstName;
        $lastName = $lastName;
        $postalCode = $_POST['postal_code'];

        $certificate = strtolower(($certificate));
        $firstName = strtolower($firstName);
        $lastName = strtolower($lastName);
        $sql = "update `register` set postal_code='$postalCode' where id=$id";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>window.location.href = '$previousPage.php?personId=$id&certificate=$certificate&firstname=$firstName&lastname=$lastName&loc=$Loc' </script>";
        } else {
            die(mysqli_error($conn));
        }
    } elseif ($data == "email") {
        $certificate = $certificate;
        $firstName = $firstName;
        $lastName = $lastName;
        $email = $_POST['email'];

        $certificate = strtolower(($certificate));
        $firstName = strtolower($firstName);
        $lastName = strtolower($lastName);
        $sql = "update `register` set email='$email' where id=$id";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>window.location.href = '$previousPage.php?personId=$id&certificate=$certificate&firstname=$firstName&lastname=$lastName&loc=$Loc' </script>";
        } else {
            die(mysqli_error($conn));
        }
    } elseif ($data == "phone") {
        $certificate = $certificate;
        $firstName = $firstName;
        $lastName = $lastName;
        $phone = $_POST['phone'];
        $certificate = strtolower(($certificate));
        $firstName = strtolower($firstName);
        $lastName = strtolower($lastName);
        $sql = "update `register` set phone='$phone' where id=$id";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>window.location.href = '$previousPage.php?personId=$id&certificate=$certificate&firstname=$firstName&lastname=$lastName&loc=$Loc' </script>";
        } else {
            die(mysqli_error($conn));
        }
    } elseif ($data == "employer") {
        $certificate = $certificate;
        $firstName = $firstName;
        $lastName = $lastName;
        $employeeName = $_POST['employee_name'];

        $certificate = strtolower(($certificate));
        $firstName = strtolower($firstName);
        $lastName = strtolower($lastName);
        $sql = "update `register` set employer='$employeeName' where id=$id";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>window.location.href = '$previousPage.php?personId=$id&certificate=$certificate&firstname=$firstName&lastname=$lastName&loc=$Loc' </script>";
        } else {
            die(mysqli_error($conn));
        }
    } elseif ($data == "courseone") {
        $certificate = $certificate;
        $firstName = $firstName;
        $lastName = $lastName;
        $firstCourse = $_POST['first_course'];

        $certificate = strtolower(($certificate));
        $firstName = strtolower($firstName);
        $lastName = strtolower($lastName);
        $sql = "update `register` set course_one='$firstCourse' where id=$id";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>window.location.href = '$previousPage.php?personId=$id&certificate=$certificate&firstname=$firstName&lastname=$lastName&loc=$Loc' </script>";
        } else {
            die(mysqli_error($conn));
        }
    } elseif ($data == "coursetwo") {
        $certificate = $certificate;
        $firstName = $firstName;
        $lastName = $lastName;
        $secondCourse = $_POST['second_course'];

        $certificate = strtolower(($certificate));
        $firstName = strtolower($firstName);
        $lastName = strtolower($lastName);
        $sql = "update `register` set course_two='$secondCourse' where id=$id";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>window.location.href = '$previousPage.php?personId=$id&certificate=$certificate&firstname=$firstName&lastname=$lastName&loc=$Loc' </script>";
        } else {
            die(mysqli_error($conn));
        }
    } elseif ($data == "coursethree") {
        $certificate = $certificate;
        $firstName = $firstName;
        $lastName = $lastName;
        $thirdCourse = $_POST['third_course'];

        $certificate = strtolower(($certificate));
        $firstName = strtolower($firstName);
        $lastName = strtolower($lastName);
        $sql = "update `register` set course_three='$thirdCourse' where id=$id";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>window.location.href = '$previousPage.php?personId=$id&certificate=$certificate&firstname=$firstName&lastname=$lastName&loc=$Loc' </script>";
        } else {
            die(mysqli_error($conn));
        }
    } elseif ($data == "certificationdate") {
        $certificate = $certificate;
        $firstName = $firstName;
        $lastName = $lastName;
        $completionDate = $_POST['certification_date'];

        $certificate = strtolower(($certificate));
        $firstName = strtolower($firstName);
        $lastName = strtolower($lastName);
        $sql = "update `register` set certification_date='$completionDate' where id=$id";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>window.location.href = '$previousPage.php?personId=$id&certificate=$certificate&firstname=$firstName&lastname=$lastName&loc=$Loc' </script>";
        } else {
            die(mysqli_error($conn));
        }
    } elseif ($data == "renewaldate") {
        $certificate = $certificate;
        $firstName = $firstName;
        $lastName = $lastName;
        $renewvalDate = $_POST['renewval_date'];

        $certificate = strtolower(($certificate));
        $firstName = strtolower($firstName);
        $lastName = strtolower($lastName);
        $sql = "update `register` set renewal_date='$renewvalDate' where id=$id";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>window.location.href = '$previousPage.php?personId=$id&certificate=$certificate&firstname=$firstName&lastname=$lastName&loc=$Loc' </script>";
        } else {
            die(mysqli_error($conn));
        }
    } else {
        $certificate = $certificate;
        $firstName = $firstName;
        $lastName = $lastName;
        $courseInstructor = $_POST['course_instructor'];

        $certificate = strtolower(($certificate));
        $firstName = strtolower($firstName);
        $lastName = strtolower($lastName);
        $sql = "update `register` set instructor='$courseInstructor' where id=$id";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>window.location.href = '$previousPage.php?personId=$id&certificate=$certificate&firstname=$firstName&lastname=$lastName&loc=$Loc' </script>";
        } else {
            die(mysqli_error($conn));
        }
    }
}

?>
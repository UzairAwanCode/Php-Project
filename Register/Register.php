<?php
include 'connect.php';
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="Register.css"> -->
    <link rel="stylesheet" href="registerStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Register</title>

</head>



<body style="background-color: #EFF3F6;">
    <div class="registerContainer">
        <div class="registerSubContainer">
            <div class="header">
                <h4>Formvio</h4>
            </div>

            <div class="mainContent">
                <h3 class="title">Student Certificate Registration Form</h3>
                <form action="" method="POST">
                    <div class="inputField">
                        <label for="" class="label">Certificate #</label>
                        <input type="text" class="input" placeholder="Enter the certificate's number here" name="certificate">
                    </div>

                    <div class="inputField">
                        <label for="" class="label">Participant's First Name #</label>
                        <input type="text" class="input" placeholder="Enter the certificate's number here" name="first_name">
                    </div>


                    <div class="inputField">
                        <label for="" class="label">Participant's Legal Last Name #</label>
                        <input type="text" class="input" placeholder="Enter the certificate's number here" name="last_name">
                    </div>

                    <div class="inputField">
                        <label for="" class="label">Date of Birth #</label>
                        <input type="date" class="input" placeholder="Enter the certificate's number here" name="birthday">
                    </div>

                    <div class="inputField">
                        <label for="" class="label">Participant's Address #</label>
                        <input type="text" class="input" placeholder="Enter the certificate's number here" name="address">
                    </div>

                    <div class="inputField">
                        <label for="" class="label">Province #</label>
                        <select id="selectlist_798311" name="province" data-alias="" class="input">
                            <option value="" disabled selected>Select province from this list</option>
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
                    </div>

                    <div class="inputField">
                        <label for="" class="label">Postal Code #</label>
                        <input type="text" class="input" placeholder="Enter the certificate's number here" name="postal_code">
                    </div>

                    <div class="inputField">
                        <label for="" class="label">Participant's Email #</label>
                        <input type="email" class="input" placeholder="Enter the certificate's number here" name="email">
                    </div>

                    <div class="inputField">
                        <label for="" class="label">Participant's Phone Number #</label>
                        <input type="text" class="input" placeholder="Enter the certificate's number here" name="phone">
                    </div>

                    <div class="inputField">
                        <label for="" class="label">Participant's Employer Name #</label>
                        <input type="text" class="input" placeholder="Enter the certificate's number here" name="employee_name">
                    </div>

                    <div class="inputField">
                        <label for="" class="label">Select Course #</label>
                        <select id="selectlist_4" name="first_course" data-alias="" class="input" required>
                            <option value="" disabled selected>Choose a course from this list</option>
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

                    <div class="inputField">
                        <label for="" class="label">Course Instructor #</label>
                        <input type="text" class="input" placeholder="Enter the certificate's number here" name="course_instructor">
                    </div>

                    <div class="inputField">
                        <label for="" class="label">Certification Date #</label>
                        <input type="date" class="input" placeholder="Enter the certificate's number here" name="completion_date">
                    </div>

                    <div class="inputField">
                        <label for="" class="label">Renewval Date #</label>
                        <input type="date" class="input" placeholder="Enter the certificate's number here" name="renewval_date">
                        <p class="helping-hand">All courses except below = 3 years Food Safe = 5 years Wired For Success = No Expiry Customer Savvy = No Expiry Money Magnets = No Expiry Boss Forge = No Expiry</p>
                    </div>

                    <div class="inputField">
                        <div class="checkbox">
                            <input type="checkbox" class="checkboxInput" id="checkboxInput" placeholder="Enter the certificate's number here">
                            <label for="" class="labelcheckbox">Check this box to add a second course to this certification</label>
                        </div>
                        <p>Note: ONLY add another course to the same certification; if the course has the same certificate number.</p>
                        <div class="secondCourse">
                            <label for="" class="label">Select Second Course #</label>
                            <select id="selectlist_4" name="second_course" data-alias="" class="input">
                                <option value="" disabled selected>Choose a course from this list</option>
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

                    </div>

                    <div class="inputField">
                        <div class="checkbox">
                            <input type="checkbox" class="checkboxInput" placeholder="Enter the certificate's number here">
                            <label for="" class="labelcheckbox">Check this box to add a third course to this certification</label>
                        </div>
                        <p>Note: ONLY add another course to the same certification; if the course has the same certificate number.</p>
                        <label for="" class="label">Select third Course #</label>
                        <select id="selectlist_4" name="third_course" data-alias="" class="input" required>
                            <option value="" disabled selected>Choose a course from this list</option>
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

                    <!-- Button -->
                    <div class="inputField">
                        <input type="submit" class="Btn Btn-primary" placeholder="Enter the certificate's number here" name="submit" value="Submit">
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="Register.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $certificate = $_POST['certificate'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $province = $_POST['province'];
    $postalCode = $_POST['postal_code'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $employeeName = $_POST['employee_name'];
    $firstCourse = $_POST['first_course'];
    $courseInstructor = $_POST['course_instructor'];
    $completionDate = $_POST['certification_date'];
    $renewvalDate = $_POST['renewval_date'];
    $secondCourse = $_POST['second_course'];
    $thirdCourse = $_POST['third_course'];

    $certificate = strtolower(($certificate));
    $firstName = strtolower($firstName);
    $lastName = strtolower($lastName);

    $errors = array();
    $u = "select * from `register` where certificate_number = '$certificate'";
    $uu = mysqli_query($conn, $u);

    if(empty($certificate)){
        $errors['u'] = "Enter Cetificate Id";
        echo "<script>alert('Please Enter Certificate Number')</script>";
    }
    elseif(mysqli_num_rows($uu)>0){
        $errors['u'] = "Certificate Number Already Exist or Not Filled";
        echo "<script>alert('Certificate Number Already Exist or Field is Empty')</script>";
    }
    else{

    }

    if(count($errors)==0){
        $sql = "insert into `register` (certificate_number , first_name, last_name, birthday, address, province, postal_code, email, phone, employer, course_one, instructor, certification_date, renewal_date, course_two, course_three) 
    values ('$certificate' , '$firstName' , '$lastName' , '$birthday' , '$address' , '$province' , $postalCode , '$email' , '$phone' , '$employeeName' , '$firstCourse' , '$courseInstructor' , '$completionDate' , '$renewvalDate' , '$secondCourse' , '$thirdCourse')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script> alert('Data Inserted Successfully') </script>";
    } else {
        die(mysqli_error($conn));
    }
    }
}

?>
<?php 
include'connect.php' ;
error_reporting(0);
?>

<?php  
    $id = $_GET["personId"];
    $sql = "select * from `register` where id='$id' ";
    $result = mysqli_query($conn , $sql);
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
	$renewalDate	 = $row['renewal_date'];
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
        body{
             background-color: #ececea;
        }
        section{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .table-responsive{
            background-color: #ffffff;
            padding: 30px;
            margin-block: 50px;
            width: 40%;
            border-style: solid;
            border-width: 2px;
            border-color: #f3f3f3;
            border-radius: 20px;
            box-shadow: 0 , 0 , 40px, -20px, rgba(0, 0, 0, 0.9);
        }

        h3{
            text-align: center;
        }

        .title{
            font-weight: bold;
        }

        @media screen and (max-width: 1280px){
            .table-responsive{
                width: 50%;
                padding: 0;
            }

            h3{
                text-align: center;
            }
        }

        @media screen and (max-width: 1024px){
            .table-responsive{
                width: 60%;
                padding: 0;
            }

            h3{
                text-align: center;
            }
        }

       

        @media  screen and (max-width:800px) {
            .table-responsive{
                width: 100%;
                padding: 0;
            }
            h3{
                text-align: center;
            }

            .title{
            /* font-weight: normal; */
        }

            #no-more-tables tbody,
            #no-more-tables tr,
            #no-more-tables td {
                /* display: block; */
            }
            #no-more-tables thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }
            #no-more-tables td {
                position: relative;
                /* padding-left: 50%; */
                /* border: none; */
                /* border-bottom: 1px solid #eee; */
            }
            #no-more-tables td:before {
                content: attr(data-title);
                position: absolute;
                left: 6px;
                font-weight: bold;
            }
            #no-more-tables tr {
                /* border-bottom: 1px solid #ccc; */
            }
        }

        @media  screen and (max-width:768px) {
            .table-responsive{
                width: 100%;
                padding: 0;
            }
            h3{
                text-align: center;
            }

            .title{
            /* font-weight: normal; */
        }

            #no-more-tables tbody,
            #no-more-tables tr,
            #no-more-tables td {
                /* display: block; */
            }
            #no-more-tables thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }
            #no-more-tables td {
                position: relative;
                /* padding-left: 50%; */
                /* border: none; */
                /* border-bottom: 1px solid #eee; */
            }
            #no-more-tables td:before {
                content: attr(data-title);
                position: absolute;
                left: 6px;
                font-weight: bold;
            }
            #no-more-tables tr {
                /* border-bottom: 1px solid #ccc; */
            }
        }

        @media  screen and (max-width:640px) {
            .table-responsive{
                width: 100%;
                padding: 0;
            }
            h3{
                text-align: center;
            }

            .title{
            /* font-weight: normal; */
        }

            #no-more-tables tbody,
            #no-more-tables tr,
            #no-more-tables td {
                /* display: block; */
            }
            #no-more-tables thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }
            #no-more-tables td {
                position: relative;
                /* padding-left: 50%; */
                /* border: none; */
                /* border-bottom: 1px solid #eee; */
            }
            #no-more-tables td:before {
                content: attr(data-title);
                position: absolute;
                left: 6px;
                font-weight: bold;
            }
            #no-more-tables tr {
                /* border-bottom: 1px solid #ccc; */
            }
        }

        


    </style>
</head>

<body>
    <section class="p-5">
        <div class="table-responsive" id="no-more-tables">
            <table class="table table-hover my-5">
                <h3 class="pb-2" style="color:#ff7c0a; margin-top:20px">Detailed Certification Lookup</h3>
                <tbody>
                    <tr>
                        <td  class="title">Certificate</td>
                        <td ><?php echo $certificate ?></td>
                    </tr>
                    <tr>
                        <td  class="title">First Name</td>
                        <td ><?php echo $firstName ?></td>
                        
                    </tr>
                    <tr>
                        <td  class="title">Last Name</td>
                        <td ><?php echo $lastName ?></td>
                        
                    </tr>
                    <tr>
                        <td  class="title">Date of Birth</td>
                        <td ><?php echo $birthday ?></td>
                        
                    </tr>
                    <tr>
                        <td  class="title">Address</td>
                        <td ><?php echo $address ?></td>
                        
                    </tr>

                    <tr>
                        <td  class="title">Province</td>
                        <td ><?php echo $postalCode ?></td>
                        
                    </tr>

                    <tr>
                        <td  class="title">Postal Code</td>
                        <td ><?php echo $postalCode ?></td>
                        
                    </tr>

                    <tr>
                        <td  class="title">Email</td>
                        <td ><?php echo $email ?></td>
                        
                    </tr>

                    <tr>
                        <td  class="title">Phone</td>
                        <td ><?php echo $phone ?></td>
                        
                    </tr>

                    <tr>
                        <td  class="title">Employer</td>
                        <td ><?php echo $employer ?></td>
                        
                    </tr>

                    <tr>
                        <td  class="title">Course 1</td>
                        <td ><?php echo $courseOne ?></td>
                        
                    </tr>

                    <?php 
                    if($courseTwo != null){
                    echo "
                    <tr>
                        <td  class='title'>Course 2</td>
                        <td >$courseTwo</td>
                        
                    </tr>";
                }
                ?>

                <?php 
                    if($courseThree != null){
                    echo "
                    <tr>
                        <td  class='title'>Course 3</td>
                        <td >$courseThree</td>
                        
                    </tr>";
                }
                ?>

                <tr>
                    <td  class="title">Certification Date</td>
                    <td ><?php echo $certificationDate ?></td>
                    
                </tr>

                <tr>
                    <td  class="title">Renewal Date</td>
                    <td ><?php echo $renewalDate ?></td>
                    
                </tr>

                <tr>
                    <td  class="title">Instructor</td>
                    <td ><?php echo $instructor ?></td>
                    
                </tr>
                </tbody>
            </table>
            <a href="showByLastName.php" class="btn btn-warning" style="width: 50%; font-weight: 700; transform: translateX(50%); margin-bottom: 20px;">Back</a>
        </div>
    </section>
</body>

</html>

<?php 
include'connect.php';
error_reporting(0);
?>

<?php  
    $certificate = $_GET["certificate"];
    $sql = "select * from `register` where certificate_number='$certificate' ";
    $result = mysqli_query($conn , $sql);
    $row = mysqli_fetch_assoc($result);
    $certificate = $row['certificate_number'];
	$firstName = $row['first_name'];
	$lastName = $row['last_name'];
	$courseOne = $row['course_one'];
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
    <title>Verification Ok</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #ececea;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .table-responsive {
            background-color: #ffffff;
            padding: 30px;
            margin-block: 50px;
            width: 50%;
            border-style: solid;
            border-width: 2px;
            border-color: #f3f3f3;
            border-radius: 20px;
            box-shadow: 0, 0, 40px, -20px, rgba(0, 0, 0, 0.9);
        }

        h3 {
            text-align: center;
        }

        .title {
            font-weight: bold;
        }
        
        #no-more-tables td {
                position: relative;
                padding-left: 15%;
            }

            #no-more-tables thead th {
                position: relative;
                padding-left: 2%;
                font-size: 20px;
            }
            
            td{
                font-size: 20px;
            }

        @media screen and (max-width: 1280px) {
            .table-responsive {
                width: 60%;
                padding-inline: 10px;
            }

            h3 {
                text-align: center;
            }
            
            #no-more-tables td {
                position: relative;
                padding-left: 15%;
            }

            #no-more-tables thead th {
                position: relative;
                padding-left: 2%;
                font-size: 20px;
            }
            
            td{
                font-size: 20px;
            }
        }

        @media screen and (max-width: 1024px) {
            .table-responsive {
                width: 70%;
                padding-inline: 10px;
            }

            h3 {
                text-align: center;
            }
            
            #no-more-tables td {
                position: relative;
                padding-left: 15%;
            }

            #no-more-tables thead th {
                position: relative;
                padding-left: 2%;
                font-size: 20px;
            }
            
            td{
                font-size: 20px;
            }
        }



        @media screen and (max-width:800px) {
            .table-responsive {
                width: 100%;
                padding-inline: 10px;
            }

            h3 {
                text-align: center;
            }
            
            #no-more-tables td {
                position: relative;
                padding-left: 15%;
            }

            #no-more-tables thead th {
                position: relative;
                padding-left: 15%;
                font-size: 20px;
            }
            
            td{
                font-size: 20px;
            }
        }

        @media screen and (max-width:768px) {
            
            section{
                display: inline;
                padding: 0;
            }
            .table-responsive {
                width: 100%;
                padding-inline: 10px;
            }

            h3 {
                text-align: center;
            }
            
            #no-more-tables td {
                position: relative;
                padding-left: 15%;
            }

            #no-more-tables thead th {
                position: relative;
                padding-left: 25%;
                font-size: 20px;
            }
            
            td{
                font-size: 20px;
            }
        }

        @media screen and (max-width:640px) {
            section {
            display: inline;
            padding: 0;
        }
            .table-responsive {
                background-color: #ffffff;
                width: auto;
                padding-inline: 2px;
            }

            h3 {
                text-align: center;
            }


            #no-more-tables td {
                position: relative;
                padding-left: 10%;
            }

            #no-more-tables thead th {
                position: relative;
                padding-left: 2%;
                font-size: 16px;
                
            }
            
            td{
                font-size: 16px;
                padding-right: 10px;
            }

            #no-more-tables td:before {
                content: attr(data-title);
                position: absolute;
                left: 6px;
                font-weight: bold;
            }
        }
    </style>
</head>

<body>
    <section class="p-5">
        <div class="table-responsive" id="no-more-tables">
            <table class="table table-hover my-5">
                <h3 class="pb-2" style="color:#ff7c0a; margin-top:20px">VERIFICATION OK</h3>
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
                </tbody>
            </table>
            <a href="search.php" class="btn btn-warning" style="width: 50%; font-weight: 700; transform: translateX(50%); margin-bottom: 20px;">Back</a>
        </div>
    </section>
</body>

</html>
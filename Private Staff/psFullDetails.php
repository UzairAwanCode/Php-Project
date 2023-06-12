<?php 
include'connect.php' ;
error_reporting(0);
?>

<?php  
    $id = $_GET["personId"];
    $Loc = $_GET["loc"];
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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
            width: 60%;
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

        @media screen and (max-width: 1280px) {
            .table-responsive {
                width: 70%;
                padding-inline: 20px;
            }

            h3 {
                text-align: center;
            }
            
            #no-more-tables td {
                position: relative;
                padding-left: 2%;
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
                padding-inline: 2px;
            }

            h3 {
                text-align: center;
            }
            
            #no-more-tables td {
                position: relative;
                padding-left: 2%;
            }

            #no-more-tables thead th {
                position: relative;
                padding-left: 1%;
                font-size: 20px;
            }
            
            td{
                font-size: 20px;
            }
        }



        @media screen and (max-width:800px) {
            .table-responsive {
                width: 90%;
                padding-inline: 2px;
            }

            h3 {
                text-align: center;
            }
            
            #no-more-tables td {
                position: relative;
                padding-left: 2%;
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
            
            .table-responsive {
                width: 98%;
                padding-inline: 2px;
            }

            h3 {
                text-align: center;
            }
            
            #no-more-tables td {
                position: relative;
                padding-left: 2%;
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
                padding-inline: 0px;
            }

            h3 {
                text-align: center;
            }


            #no-more-tables td {
                position: relative;
                padding-left: 2%;
            }

            #no-more-tables thead th {
                position: relative;
                padding-left: 1%;
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
                <h3 class="pb-2" style="color:#ff7c0a; margin-top:20px">DETAILED CERTIFICATION LOOKUP</h3>
                <tbody>
                    <tr>
                        <td  class="title">Certificate</td>
                        <td><?php echo $certificate ?></td>
                        <?php 
                        echo'
                        <td><a href="Edit.php?personId='.$id.'&loc='.$Loc.'&previouspage=psFullDetails&data=certificate" style="color:black"><span class="fa fa-pencil-square-o fa-lg"></span></a></td>
                    ';  
                        ?>
                    </tr>
                    <tr>
                        <td  class="title">First Name</td>
                        <td><?php echo $firstName ?></td>
                        <?php 
                        echo'
                        <td><a href="Edit.php?personId='.$id.'&loc='.$Loc.'&previouspage=psFullDetails&data=firstname" style="color:black"><span class="fa fa-pencil-square-o fa-lg"></span></a></td>
                    ';  
                        ?>
                        
                    </tr>
                    <tr>
                        <td  class="title">Last Name</td>
                        <td><?php echo $lastName ?></td>
                        <?php 
                        echo'
                        <td><a href="Edit.php?personId='.$id.'&loc='.$Loc.'&previouspage=psFullDetails&data=lastname" style="color:black"><span class="fa fa-pencil-square-o fa-lg"></span></a></td>
                    ';  
                        ?>
                        
                    </tr>
                    <tr>
                        <td  class="title">Date of Birth</td>
                        <td><?php echo $birthday ?></td>
                        <?php 
                        echo'
                        <td><a href="Edit.php?personId='.$id.'&loc='.$Loc.'&previouspage=psFullDetails&data=birthday" style="color:black"><span class="fa fa-pencil-square-o fa-lg"></span></a></td>
                    ';  
                        ?>
                        
                    </tr>
                    <tr>
                        <td  class="title">Address</td>
                        <td><?php echo $address ?></td>
                        <?php 
                        echo'
                        <td><a href="Edit.php?personId='.$id.'&loc='.$Loc.'&previouspage=psFullDetails&data=address" style="color:black"><span class="fa fa-pencil-square-o fa-lg"></span></a></td>
                    ';  
                        ?>
                        
                    </tr>

                    <tr>
                        <td  class="title">Province</td>
                        <td><?php echo $province ?></td>
                        <?php 
                        echo'
                        <td><a href="Edit.php?personId='.$id.'&loc='.$Loc.'&previouspage=psFullDetails&data=province" style="color:black"><span class="fa fa-pencil-square-o fa-lg"></span></a></td>
                    ';  
                        ?>
                        
                    </tr>

                    <tr>
                        <td  class="title">Postal Code</td>
                        <td><?php echo $postalCode ?></td>
                        <?php 
                        echo'
                        <td><a href="Edit.php?personId='.$id.'&loc='.$Loc.'&previouspage=psFullDetails&data=postalcode" style="color:black"><span class="fa fa-pencil-square-o fa-lg"></span></a></td>
                    ';  
                        ?>
                        
                    </tr>

                    <tr>
                        <td  class="title">Email</td>
                        <td><?php echo $email ?></td>
                        <?php 
                        echo'
                        <td><a href="Edit.php?personId='.$id.'&loc='.$Loc.'&previouspage=psFullDetails&data=email" style="color:black"><span class="fa fa-pencil-square-o fa-lg"></span></a></td>
                    ';  
                        ?>
                        
                    </tr>

                    <tr>
                        <td  class="title">Phone</td>
                        <td><?php echo $phone ?></td>
                         <?php 
                        echo'
                        <td><a href="Edit.php?personId='.$id.'&loc='.$Loc.'&previouspage=psFullDetails&data=phone" style="color:black"><span class="fa fa-pencil-square-o fa-lg"></span></a></td>
                    ';  
                        ?>
                        
                    </tr>

                    <tr>
                        <td  class="title">Employer</td>
                        <td><?php echo $employer ?></td>
                        <?php 
                        echo'
                        <td><a href="Edit.php?personId='.$id.'&loc='.$Loc.'&previouspage=psFullDetails&data=employer" style="color:black"><span class="fa fa-pencil-square-o fa-lg"></span></a></td>
                    ';  
                        ?>
                        
                    </tr>

                    <tr>
                        <td  class="title">Course 1</td>
                        <td><?php echo $courseOne ?></td>
                        <?php 
                        echo'
                        <td><a href="Edit.php?personId='.$id.'&loc='.$Loc.'&previouspage=psFullDetails&data=courseone" style="color:black"><span class="fa fa-pencil-square-o fa-lg"></span></a></td>
                    ';  
                        ?>
                        
                    </tr>

                    <?php
                    if ($courseTwo != null) {
                        echo '
                    <tr>
                        <td  class="title">Course 2</td>
                        <td >'.$courseTwo.'</td>
                        <td><a href="Edit.php?personId='.$id.'&loc='.$Loc.'&previouspage=psFullDetails&data=coursetwo" style="color:black"><span class="fa fa-pencil-square-o fa-lg"></span></a></td>
                    </tr>';
                    }
                    ?>

                <?php
                    if ($courseThree != null) {
                        echo '
                    <tr>
                        <td  class="title">Course 3</td>
                        <td >'.$courseThree.'</td>
                        <td><a href="Edit.php?personId='.$id.'&loc='.$Loc.'&previouspage=psFullDetails&data=coursethree" style="color:black"><span class="fa fa-pencil-square-o fa-lg"></span></a></td>
                    </tr>';
                    }
                    ?>

                <tr>
                    <td  class="title">Certification Date</td>
                    <td><?php echo $certificationDate ?></td>
                    <?php 
                        echo'
                        <td><a href="Edit.php?personId='.$id.'&loc='.$Loc.'&previouspage=psFullDetails&data=certificationdate" style="color:black"><span class="fa fa-pencil-square-o fa-lg"></span></a></td>
                    ';  
                        ?>
                </tr>

                <tr>
                    <td  class="title">Renewal Date</td>
                    <td><?php echo $renewalDate ?></td>
                     <?php 
                        echo'
                        <td><a href="Edit.php?personId='.$id.'&loc='.$Loc.'&previouspage=psFullDetails&data=renewaldate" style="color:black"><span class="fa fa-pencil-square-o fa-lg"></span></a></td>
                    ';  
                        ?>
                    
                </tr>

                <tr>
                    <td  class="title">Instructor</td>
                    <td><?php echo $instructor ?></td>
                    <?php 
                        echo'
                        <td><a href="Edit.php?personId='.$id.'&loc='.$Loc.'&previouspage=psFullDetails&data=instructor" style="color:black"><span class="fa fa-pencil-square-o fa-lg"></span></a></td>
                    ';  
                        ?>
                </tr>
                </tbody>
            </table>
            <form method="post">
                <input type="submit" name="submit" class="btn btn-warning" value="Back" style="width: 50%; font-weight: 700; transform: translateX(50%); margin-block:20px;">
            </form>
        </div>
    </section>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    echo "<script>window.location.href ='$Loc.php?certificate=$certificate&firstname=$firstName&lastname=$lastName' </script>";
}

?>

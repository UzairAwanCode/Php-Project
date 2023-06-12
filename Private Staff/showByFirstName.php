<?php
include 'connect.php';
error_reporting(0);
$certificate = $_GET["firstname"];
?>



<!doctype html>
<html lang="en">

<head>
    <title>DETAILED CERTIFICATION LOOKUP</title>
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
                width: 80%;
                padding: 0;
            }

            h3 {
                text-align: center;
            }
        }

        @media screen and (max-width: 1024px) {
            .table-responsive {
                width: 100%;
                padding: 0;
            }

            h3 {
                text-align: center;
            }
        }
        
        @media screen and (max-width:800px) {
            section {
            display: flex;
            justify-content: center;
            align-items: center;
        }
            .table-responsive {
                background-color: #ffffff;
                width: 100%;
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
                font-size: 15px;
                
            }
            
            td{
                font-size: 15px;
            }

            #no-more-tables td:before {
                content: attr(data-title);
                position: absolute;
                left: 6px;
                font-weight: bold;
            }
        }

        @media screen and (max-width:768px) {
            
            section{
                display: inline;
                padding: 0;
            }
            .table-responsive {
                background-color: #ffffff;
                width: 100%;
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
                font-size: 16px;
                
            }
            
            td{
                font-size: 16px;
            }

            #no-more-tables td:before {
                content: attr(data-title);
                position: absolute;
                left: 6px;
                font-weight: bold;
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
                
                
            }

            #no-more-tables thead th {
                position: relative;
                padding-left: 2%;
                font-size: 10px;
                
            }
            
            td{
                font-size: 10px;
            }

            #no-more-tables td:before {
                content: attr(data-title);
                position: absolute;
                left: 6px;
                font-weight: bold;
            }

        }
        
        @media screen and (max-width:500px) {
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
                
                
            }

            #no-more-tables thead th {
                position: relative;
                padding-left: 2%;
                font-size: 10px;
                
            }
            
            td{
                font-size: 10px;
            }

            #no-more-tables td:before {
                content: attr(data-title);
                position: absolute;
                left: 6px;
                font-weight: bold;
            }

        }
        
         @media screen and (max-width:420px) {
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
                
                
            }

            #no-more-tables thead th {
                position: relative;
                
                font-size: 7px;
                
            }
            
            td{
                font-size: 7px;
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
            <table class="table  my-5">
                <h3 class="pb-2" style="color:#ff7c0a; margin-top:20px">Detailed Certification Lookup</h3>
                <thead class="tableHead" style="border-bottom: #f3f3f3;">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Certificate number</th>
                        <th>Completion date</th>
                        <th>Show Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from `register` where first_name='$certificate' ";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // $certificate = $row['certificate_number'];
                            $id = $row['id'];
                            $firstName = $row['first_name'];
                            $lastName = $row['last_name'];

                            $firstName = ucwords($firstName);
                            $lastName = ucwords($lastName);
                            $cn = $row['certificate_number'];
                            $cd = $row['certification_date'];


                            echo'<tr>
                            <td class="title" style="font-weight: normal;">'.$firstName.'</td>
                            <td>'.$lastName.'</td>
                            <td>'.$cn.'</td>
                            <td>'.$cd.'</td>
                            <td><a href="psFullDetails.php?personId='.$id.'&loc=showByFirstName" class="fullDetails" onmouseover="this.style.color = "#ff7c0a" " onmouseout="this.style.color = "black" " style="text-decoration: none; color: black">View Details</a></td>
                        </tr>';  
                            
                        }
                    }



                    ?>
                    
                </tbody>
            </table>
            <a href="privateSearch.php" class="btn btn-warning" style="width: 50%; font-weight: 700; transform: translateX(50%); margin-bottom: 20px;">Back</a>
        </div>
    </section>
</body>

</html>
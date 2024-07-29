<?php require "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>
<body>
<header>
        <div class="header">
            <div class="head1">
                <img src="Anthem.jpg" alt="logo" id="imglogo" />
                <h1></h1>
            </div>
            <div class="navend">
                <ul class="navbar">
                    <li><a href="home">HOME</a></li>
                    <li><a href="about">ABOUT</a></li>
                    <li><a href="service">SERVICE</a></li>
                    <li><a href="contact">CONTACT</a></li>
                    <li><a href="index.php">BILLING</a></li>
                </ul>
            </div>
        </div>
</header>
    <hr>
    <section>
        <table>
            <tr>
                <th><h3>Sr No.</h3></th>
                <th><h3>Invoice No.</h3></th>
                <th><h3>Date</h3></th>
                <th><h3>Merchant Firm</h3></th>
                <th><h3>City</h3></th>
                <th><h3>Print</h3></th>
                <th><h3>Delete</h3></th>
            </tr>

            
            
            <?php 
            if(isset($iidate['date'])){
                $iidate = $idate['date'];
            }
            if(isset($iino['invoiceno'])){
                $iino = $ino['invoiceno'];
            }
            if(isset($iiname['cname1'])){
                $iiname = $iname['cname1'];
            }
            if(isset($iicity['ccity'])){
                $iicity = $icity['ccity'];
            }

            ?>
            
            <?php
                $select_query = "SELECT INVOICE_NO,INVOICE_DATE,CNAME,C_CITY from invoice";
                $result_query = mysqli_query($con, $select_query);
                
                $i = 1;
                while($row_data = mysqli_fetch_assoc($result_query)){
                    $idate = $row_data['INVOICE_DATE'];  
                    $ino = $row_data['INVOICE_NO'];
                    $iname = $row_data['CNAME'];
                    $icity = $row_data['C_CITY'];
                    echo "<tr><th>$i</th><th>$ino</th><th>$idate</th><th>$iname</th><th>$icity</th><th><button>Print</button></th><th><button>Print</button></th></tr>";                  
                    $i++;
                }


                
            ?>
        </table>
    </section>
</body>
</html>
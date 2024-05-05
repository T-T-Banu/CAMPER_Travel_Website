<?php
include_once 'admin/include/class.user.php'; 
$user=new User();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Hotel Booking</title>


    <link href="../css/main.css" rel="stylesheet">
    
    
    <style>
          
     .row
     {
        display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
     }

     .row .col-md-3
     {
        height: 25rem;
    overflow:hidden;
    width: 100%;
     }

     .col-md-6 well
     {
        height: 100%;
    object-fit: cover;
    width: 100%;
     }

     h4
     {
        text-transform: uppercase;
    font-size: 3.5rem;
    color:#fff;
     }

     h6
     {
        font-size: 1.5rem;
    color:#fff;
     }


    </style>
    
    
</head>

<body>
      
<!-- header section starts  -->

<header class="header">

<a href="#" class="logo">
    <img src="./images/camper.png" alt="">
</a>
      
      
        <nav class="navbar">
                    <a href="index.php">Home</a>
                    <a href="room.php">Room &amp; Facilities</a>
                   <a href="reservation.php">Online Reservation</a>
                    <a href="review.php">Review</a>
                    <a href="admin.php">Admin</a>
        </nav>
        </header>
        
<!-- header section ends -->

<!-- home section starts  -->
<br><br><br><br><br>

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> Room<span> &</span> Facilities </h1>

<div class="row">

</div>

</section>

<!-- about section ends -->





        
        
        
        <?php
        
        $sql="SELECT * FROM room_category";
        $result = mysqli_query($user->db, $sql);
        if($result)
        {
            if(mysqli_num_rows($result) > 0)
            {
//               ********************************************** Show Room Category***********************
                while($row = mysqli_fetch_array($result))
                {
                    
                    echo "
                            
                                                        
                            <section class='blogs' id='blogs'>

                            <h1 class='heading'>  <span></span> </h1>

                            <div class='box-container'>

                                <div class='box'>
                                    <div class='image'>
                                        <img src='../images/room1.jpg' alt=''>
                                    </div>
                                    <div class='content'>
                                    <h4>".$row['roomname']."</h4><hr> 
                                    <h6>No of Beds: ".$row['no_bed']." ".$row['bedtype']." bed.</h6>
                                    <h6>Facilities: ".$row['facility']."</h6>
                                    <h6>Price: ".$row['price']." tk/night.</h6>

                                    <a href='./booknow.php?roomname=".$row['roomname']."'><button class='btn btn-primary button'>Book Now</button> </a>

                                    </div>

                                </div>

                                </div>

                            </section>
                                                        
                            
                        
                    
                         "; //echo end
                    
                    
                }
                
                
                          
            }
            else
            {
                echo "NO Data Exist";
            }
        }
        else
        {
            echo "Cannot connect to server".$result;
        }
        
        
        
        
        
        ?>


    </div>
    
    
    
    
    
<!-- footer section starts  -->




<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#">home</a>
        <a href="#">about</a>
        <a href="#">menu</a>
        <a href="#">products</a>
        <a href="#">review</a>
        <a href="#">contact</a>
        <a href="#">blogs</a>
    </div>

    <div class="credit">created by <span> T. T Banu</span> | all rights reserved</div>

</section>

<!-- footer section ends -->




<!-- footer section ends -->





    
</body>

</html>
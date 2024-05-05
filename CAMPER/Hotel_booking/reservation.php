<?php
    include_once 'admin/include/class.user.php'; 
    $user=new User(); 



    if(isset($_REQUEST[ 'submit'])) 
    { 
        extract($_REQUEST); 
        $result=$user->check_available($checkin, $checkout);
        if(!($result))
        {
            echo $result;
        }


    }
        




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
     
  <script>
  $( function() {
    $( ".datepicker" ).datepicker({
                  dateFormat : 'yy-mm-dd'
                });
  } );
  </script>
     <br><br><br><br><br>
    
<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> us </h1>

<div class="row">


<!--<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1629452077891!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>-->
        
       
         <form action="" method="post" name="room_category">
         <h3>get in touch</h3>
              
              
               <div class="inputBox">
                    
                    <input type="text" class="datepicker" name="checkin" placeholder="Check In:">

                </div>
               
               <div class="inputBox">
                   
                    <input type="text" class="datepicker" name="checkout" placeholder="Check Out:">
                </div>
                 
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary button" name="submit">Check Availability</button>

            </form>
            </div>

</section>



<?php   
        
         if(isset($_REQUEST[ 'submit']))
         {
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_array($result))
                {
                    
                    $room_cat=$row['room_cat'];
                    $sql="SELECT * FROM room_category WHERE roomname='$room_cat'";
                    $query = mysqli_query($user->db, $sql);
                    $row2 = mysqli_fetch_array($query);
                    
                   echo "
                            

                              <section class='blogs' id='blogs'>

                              <h1 class='heading'>  <span></span> </h1>
  
                              <div class='box-container'>
  
                                  <div class='box'>
                                      <div class='image'>
                                          <img src='../images/room2.jpg' alt=''>
                                      </div>
                                      <div class='content'>
                                      <h4>".$row2['roomname']."</h4><hr>
                             <h6>No of Beds: ".$row2['no_bed']." ".$row2['bedtype']." bed.</h6>
                             <h6>Available Rooms: ".$row2['available']."</h6>
                             <h6>Facilities: ".$row2['facility']."</h6>
                             <h6>Price: ".$row2['price']." tk/night.</h6>

                             <a href='./booknow.php?roomname=".$row2['roomname']."'><button class='btn btn-primary button'>Book Now</button></a>
  
                                      </div>
  
                                  </div>
  
                                  </div>
  
                              </section>
                                                

                            
                            
                        
                    
                         ";
                    
                    
                }
                
                
                          
            }
         }
        
        
?>


    </div>
    
    
    
    
    





</body>

</html>
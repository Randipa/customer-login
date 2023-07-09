<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Monitor Work</title>
   <!--
       -favicon
   -->
   <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

   <!--
       custom css link
   -->
   <link rel="stylesheet" href="./work.css">


   <!--
       google font link(input markdown)
   -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link
     href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Source+Sans+Pro:wght@600;700&display=swap"
     rel="stylesheet">


     <!--Start of Tawk.to Script-->
   <script type="text/javascript">
   var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
   (function(){
   var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
   s1.async=true;
   s1.src='https://embed.tawk.to/646ed12bad80445890eef62f/1h18e255r';
   s1.charset='UTF-8';
   s1.setAttribute('crossorigin','*');
   s0.parentNode.insertBefore(s1,s0);
   })();
   </script>
   <!--End of Tawk.to Script-->


</head>

    <body style="background-image:var(--gradient-1);">
      
        <?php

    if (isset($_POST['submit_button'])) {
        // Check if the required fields exist in the $_POST array
        if (isset($_POST['empID'], $_POST['lname'], $_POST['workinghours'], $_POST['phone'])) {
            $empID = $_POST['empID'];
            $lname = $_POST['lname'];
            $workinghours = $_POST['workinghours'];
            $phone = $_POST['phone'];
    
            // Rest of your code
            try {
                $pdo = new PDO("mysql:host=localhost;dbname=crudsystem;charset=utf8mb4", "Avindi", "e4VUv)W*)LS/p*u(");
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                $stmt = $pdo->prepare('UPDATE crudtable SET lname=:l, workinghours=:w, phone=:p WHERE empID=:e');
                $stmt->bindValue(':e', $empID);
                $stmt->bindValue(':l', $lname);
                $stmt->bindValue(':w', $workinghours);
                $stmt->bindValue(':p', $phone);
    
                if ($stmt->execute()) {
                    echo 'Successfully updated the record!';
                } else {
                    echo 'Failed to update the record.';
                }
            } catch (PDOException $e) {
                echo 'Database error: ' . $e->getMessage();
            }
        } else {
            echo 'Please fill in all the form fields.';
        }
    } else {
        echo 'Start entering values!';
    }
    
        ?>



  


        
      
   
        <form class="signup-form" action="" method="POST">
          <div class="containerflex">
           
            
     
              </br>  </br><br><br><br><br>

            

            <label>&nbsp;&nbsp;&nbsp;Employee ID</label></br>
            <center><input type="text" placeholder="Enter Employee ID" name="empID" class="editthis"></center></br>
            <label>&nbsp;&nbsp;&nbsp;Employee Name</label></br>
            <center><input type="text" placeholder="Enter Employee Name" name="lname"></center>
          </br>
		  
		<label>&nbsp;&nbsp;&nbsp;Working Hours</label></br>
		  <center><input type="text" name="workinghours" placeholder= "Enter Employee working Hours"></center>
		  </br> 
	
          <label>&nbsp;&nbsp;&nbsp; Phone Number </label>
		  <center><input type="number" name="phone" id="phone" placeholder= "Enter Employee Phone Number"></center>
		  </br>  </br>

      

			
		
    </br>

		<center><label>
		  <input type="checkbox" checked="checked" name="read">I have read your privacy statment <a href="#">Privacy</a></lable></center> </br></br>
		<div class="buttonbox">
		  <center>  <button type ="submit" class="floatbutton" name="submit_button">Update</button></center>
			  
    </div>
    </div>
</form>

<script>
    //add alert sucessfu;;y submiited with onclick
</script>






<footer class="footer">

  <div class="footer-top section">
      <div class="container">
          <div class="footer-brand">
              <a href="#" class="logo">e-knolage</a>
              <p class="text">You will find exceptional academic mentoring, accommodations and services for students of all abilities, and people who care about your social and emotional well-being as much as your academic success.</p>

              <ul class="social-list">
                  <li>
                      <a href="#" class="social-link">
                          <ion-icon name="logo-facebook"></ion-icon>
                      </a>
                  </li>

                  <li>
                      <a href="#" class="social-link">
                          <ion-icon name="logo-instagram"></ion-icon>
                      </a>
                  </li>

                  <li>
                      <a href="#" class="social-link">
                          <ion-icon name="logo-twitter"></ion-icon>
                      </a>
                  </li>

                  <li>
                      <a href="#" class="social-link">
                          <ion-icon name="logo-whatsapp"></ion-icon>
                      </a>
                  </li>
              </ul>
          </div>

          <ul class="footer-list">
              <li>
                  <p class="footer_list_title">our Links</p>
              </li>

              <li>
                  <a href="#" class="footer-link">Home</a>
              </li>

              <li>
                  <a href="#" class="footer-link">About Us</a>
              </li>

              <li>
                  <a href="#" class="footer-link">Services</a>
              </li>

              <li>
                  <a href="#" class="footer-link">Team</a>
              </li>

              <li>
                  <a href="#" class="footer-link">Blog</a>
              </li>

          </ul>

          <ul class="footer-list">
              <li>
                  <p class="footer_list_title">Our Services</p>
              </li>

              <li>
                  <a href="#" class="footer-link">Academic Specializations</a>
              </li>

              <li>
                  <a href="#" class="footer-link">Professional Specializations</a>
              </li>

              <li>
                  <a href="#" class="footer-link">Vocational Specializations</a>
              </li>



          </ul>

          <ul class="footer-list">
              <li>
                  <p class="footer_list_title">Other links</p>
              </li>

              <li>
                  <a href="#" class="footer-link">FAQ</a>
              </li>

              <li>
                  <a href="#" class="footer-link">Portfolio</a>
              </li>

              <li>
                  <a href="#" class="footer-link">Privacy Policy</a>
              </li>

              <li>
                  <a href="#" class="footer-link">Terms & Conditions</a>
              </li>

              <li>
                  <a href="#" class="footer-link">Support</a>
              </li>

          </ul>


          <ul class="footer-list">
              <li>
                  <p class="footer_list_title">Contact Us</p>
              </li>

              <li class="footer-item">

                  <div class="footer-item-icon">
                      <ion-icon name="call"></ion-icon>
                  </div>

                  <a href="tel:+94761341023" class="footer-item-link">+94761341023</a>

              </li>

              <li class="footer-item">

                  <div class="footer-item-icon">
                      <ion-icon name="mail"></ion-icon>
                  </div>

                  <a href="mail:saliyapathum711@gmail.com" class="footer-item-link">saliyapathum711@gmail.com</a>

              </li>

        <!--   <li class="footer-item">

                  <div class="footer-item-icon">
                      <ion-icon name="location"></ion-icon>
                  </div>

                

              </li>

          </ul>
        -->
            </ul>
      </div>
  </div>

  <div class="footer-bottom">
    
  </div>







    <script src="./monitorperf.js"></script>

</footer>
<!--
link iconicon
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
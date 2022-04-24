<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link  rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>CSE ProCenter </title>
  </head>
  <script>

    function redirectStuAppointment(){
      window.location  = "student-schedual.php";
    }

  </script>
  <body>
    <!-- ----------------------------------------------------header part------------------------------------------------------ -->
    
    <header class="w3-container">
      <a href="index.php" class="w3-bar-item w3-button w3-left"
        ><img src="images/ProCenter-logo.png" class="logo" alt="ProCenter logo"
      /></a>

      <div class="w3-dropdown-hover w3-mobile w3-right">
        <button class="w3-button w3-padding-16 ">
          <img src="images/profile.png" alt="profile logo" class="icons" />
        </button>
        <div class="w3-dropdown-content w3-bar-block  w3-teal progile-right">
          <a
            href="profile.php"
            class="w3-bar-item w3-button w3-mobile  w3-hover-light-grey w3-hover-text-pink"
            ><i class="fa fa-edit w3-margin-right Edit-out-logo-size" ></i>Edit Profile</a
          >
          <a
            href="login.php"
            class="w3-bar-item w3-button  w3-mobile w3-hover-light-grey w3-hover-text-pink"
            ><i class="fa fa-sign-out w3-margin-right Edit-out-logo-size" ></i>Log out</a
          >
        </div>
      </div>
      <nav class="w3-navbar w3-text-grey w3-display-topmiddle w3-margin-top">
        <a
          href="index.php"
          class="w3-bar-item w3-button w3-hover-none w3-hover-text-pink w3-mobile"
          >Home</a
        >
        <div class="w3-dropdown-hover w3-mobile">
          <button
            class="w3-button w3-hover-none w3-hover-text-pink w3-padding-16"
          >
            Educator <i class="fa fa-caret-down"></i>
          </button>
          <div class="w3-dropdown-content w3-bar-block w3-teal">
            <a
              href="find-educator.php"
              class="w3-bar-item w3-button w3-mobile w3-hover-light-grey w3-hover-text-pink"
              >Find an Educator</a
            >
            <a
              href="be-educator.php"
              class="w3-bar-item w3-button w3-mobile w3-hover-light-grey w3-hover-text-pink"
              >Be an Educator</a
            >
          </div>
        </div>
        <div class="w3-dropdown-hover w3-mobile">
          <button class="w3-button w3-hover-text-pink w3-padding-16 w3-hover-none">
            Appointment <i class="fa fa-caret-down"></i>
          </button>
          <div class="w3-dropdown-content  w3-bar-block w3-teal">
            <a
              href="educator-appointment.php"
              class="w3-bar-item w3-button w3-mobile w3-hover-light-grey w3-hover-text-pink"
              >My Appointment</a
            >
            <a
              href="educator-schedule.php"
              class="w3-bar-item w3-button w3-mobile w3-hover-light-grey w3-hover-text-pink"
              >My Schedual</a
            >
            <a
            href="educator-materials.php"
            class="w3-bar-item w3-button w3-mobile w3-hover-light-grey w3-hover-text-pink"
            >My Materials</a
          >
          </div>
        </div>

        <a
          href="about.html"
          class="w3-bar-item w3-button w3-hover-white w3-hover-text-pink w3-padding-32"
          >About</a
        >
        <a
          href="contact.php"
          class="w3-bar-item w3-button w3-hover-white w3-hover-text-pink w3-padding-32"
          >Contact</a
        >
      </nav>
    </header>
     <!-- ---------------------------------------------- End of header part------------------------------------------------------ -->

  <!--  ---------------------------------------------- Educator card part------------------------------------------------------ -->

     <section class="section-margin ">
      <div class="w3-container w3-center ">
        <h1>Our Educators</h1>
      </div>
    <div class="center">
      <div class="wrapper">
        <div class=" box">
          

          <?php
            include 'dbCon.php';
            $query="select * from EduInformation"; // Fetch all the data from the table customers
            $result=mysqli_query($conn,$query);
            ?>
            <?php if ($result->num_rows > 0): ?>
            <?php while($array=mysqli_fetch_row($result)): ?>
            <div class=" w3-card-2 w3-center w3-mobile w3-hover-shadow ">
                <header class="w3-container w3-pale-red w3-block">
                  <h3 class="w3-padding-4 w3-larg"><?php echo $array[1];?></h3>
                </header>

              <div class="w3-container w3-center">
                <p><?php echo $array[2];?></p>
                <hr />
                <ul>
                  <li class="w3-button w3-hover-none w3-round-xlarge w3-pale-red ">
                  <?php echo $array[3];?>
                  </li>
                  <li class="w3-button w3-hover-none w3-round-xlarge w3-pale-red ">
                  <?php echo $array[4];?>
                  </li>
                </ul>
              </div>
                <button class="w3-button w3-hover-teal w3-block w3-pale-red" onclick="redirectStuAppointment()"> Book an Appointment
                </button>
          </div>
            <?php endwhile; ?>
            <?php else: ?>
                  <h3 colspan="4" rowspan="1" headers="" class="w3-center">No Educator is Found</h3>
            <?php endif; ?>
            <?php mysqli_free_result($result); ?>


          
        </div>
      </div>
    </div>
    
      
    </section>
    <!--  ---------------------------------------------- End of Educator card part------------------------------------------------------ -->

    <!--  ------------------------------------------------ footrt part part------------------------------------------------------ -->
    <footer class="w3-teal">
      <div class="w3-container">
        <br />
        <div class="w3-third w3-container w3-mobile w3-small">
          <img
            src="images/location.png"
            alt="location logo"
            class="social-icons"
          />
          <b>Our Address</b>
          <p>
            Yanbu University College (Female Campus)·<br />
            Department of Computer Science.
          </p>
        </div>
        <div class="w3-third w3-container w3-mobile w3-small">
          <img
            src="images/email.png"
            alt="location logo"
            class="social-icons"
          />
          <b>Email Us at</b>
          <p>ProCenter@gmail.com</p>
        </div>

        
      </div><br /><br />
      <div class="w3-display-bottom w3-container">
        <span>&#169;</span>2022 All Right Reserved by CSE ProCenter
      </div>
    </footer>
    <!--  ---------------------------------------------- End of footrt part part------------------------------------------------------ -->
  </body>
</html>
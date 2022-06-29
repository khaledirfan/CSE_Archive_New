<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />

    <!-- favicon link css  -->
    <link rel="shortcut icon" type="image/png" href="img/MIST.png" />

    <title>Activity_admin</title>
  </head>
  <body>
    <!-- navbar starts -->
    <nav
      class="navbar navbar-expand-xxl navbar-light border-bottom border-5 border-success"
    >
      <div class="container-fluid">
        <button
          class="navbar-toggler mb-3"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="home_admin.php">
          <img class="ms-md-5 ms-1" src="../img/navlogo.png" alt="logo"
        /></a>

        <div
          class="collapse navbar-collapse mx-5 fw-bold"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item mx-3">
              <a class="nav-link" href="home_admin.php">Home</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="projects_admin.php">Projects</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="achievements_admin.php">Achivements</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="publication_admin.php">Publications</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="thesis_admin.php">Thesis</a>
            </li>
            <li class="nav-item mx-3">
             <a
                class="nav-link active text-success fw-bolder"
                aria-current="page"
                href="activity_admin.php"
                >Activity</a
              >
            </li>
          </ul>
          <a href="adminprofile_admin.php">
            <img class="ms-3" src="../img/profile.png" alt="profile"
          /></a>
          <a href="adminprofile_admin.php" class="text-decoration-none text-black">
            <h6 class="mt-2 mx-3">Tanjim hossain</h6></a
          >

          <a href="../logout.php"
            ><button type="button" class="btn btn-danger mx-3">
              Log Out
            </button></a
          >
        </div>
      </div>
    </nav>
    <!-- navbar ends -->

    <div class="container-flex bg-light">
      <!-- Activity head -->
      
      <div class="container pt-5">
        <div class="card">
          <div class="card-body bg-primary p-4">
            <h1 class="d-inline-block text-white ms-4">ACTIVITIES</h1>
            <a href="add_activity_admin.php"
              ><button type="button" class="btn btn-light btn-lg float-end">
                + Add ACTIVITIES
              </button></a
            >
          </div>
        </div>
      </div>
      <!-- Activity head end -->

      <!-- carousel start  -->

      <div class="container px-4 pt-5">
      <div class="row bg-light border border-3">
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
 <div class="carousel-indicators">
    <?php
          include_once 'db_conn.php';
          $result = mysqli_query($conn,"SELECT * FROM addactivity");
          ?>
          <?php
          if (mysqli_num_rows($result) > 0) {
          ?>
          <?php
          $i=0;
          while($row = mysqli_fetch_array($result)) {
          ?>
      <?php if($i ==0) { ?>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo "$i" ;?>" class="active" aria-current="true" aria-label="Slide <?php echo "$i" ;?>"></button>
    <?php } else { ?>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo "$i" ;?>" aria-label="Slide <?php echo "$i" ;?>"></button>
    <?php } ?>
    <?php

          $i++;
          }
          ?>
          <?php
          }
          else{
          echo "No result found";
          }
          ?>
  </div>
  <div class="carousel-inner">
  <?php
          include_once 'db_conn.php';
          $result = mysqli_query($conn,"SELECT * FROM addactivity");
          ?>
          <?php
          if (mysqli_num_rows($result) > 0) {
          ?>
          <?php
          $i=0;
          while($row = mysqli_fetch_array($result)) {
          ?>
       <?php if ($i == 0) { ?>
    <div class="carousel-item active">
    <img <?php  echo "src='images/".$row['ActivityPhoto']."' " ;?> class="d-block  my-3 mx-auto"  style="width: 100%; height: 600px;" alt="..."></a>
        <div class="carousel-caption  d-md-block fw-bolder bg-black " >
          <h2 class=" fw-bolder text-white"><?php echo $row["EventName"]; ?></h2>
          <!-- <p class=" fw-bolder">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, error.</p> -->
        </div>
    </div>
    <?php } else { ?>

    <div class="carousel-item">
    <img <?php  echo "src='images/".$row['ActivityPhoto']."' " ;?> class="d-block  my-3 mx-auto"  style="width: 100%; height: 600px;" alt="..."></a>
        <div class="carousel-caption  d-md-block fw-bolder bg-black " >
          <h2 class=" fw-bolder text-white"><?php echo $row["EventName"]; ?></h2>
          <!-- <p class=" fw-bolder">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, error.</p> -->
        </div>
    </div>
    <?php } ?>
      <?php
          $i++;
          }
          ?>
          <?php
          }
          else{
          echo "No result found";
          }
          ?>
          
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      </div>
      </div>

      <!-- carousel end  -->

      <!-- Achivements card start  -->
      <div class="container px-4 pt-5">
        <div class="row bg-light border border-3 border border-info gx-4 p-3">


          <!-- 1 -->
          <?php
          include_once 'db_conn.php';
          $result = mysqli_query($conn,"SELECT * FROM addactivity");
          ?>
          <?php
          if (mysqli_num_rows($result) > 0) {
          ?>
          <?php
          $i=0;
          while($row = mysqli_fetch_array($result)) {
          ?>
<div class="col-sm-12 mb-5 mt-5">
       <div class="card w-100 mt-3 p-3 mb-3 border border-2 border-info">
              <div class="card-body">
                <h5 class="card-title fw-bolder text-center"><?php echo $row["EventName"]; ?></h5>
                <a href="activity_details_admin.php?id=<?php echo $row["id"];?>"
                              ><img
                              <?php  echo "src='images/".$row['ActivityPhoto']."' " ;?>
                                class="d-block my-3 mx-auto"
                                style="width: 50%; height: 300px"
                                alt="..."
                            /></a>
                
                <br><br><p class="card-text fw-normal text-wrap"><?php echo substr ($row["PostDetails"], 0, 305); ?>
                <a href="activity_details_admin.php?id=<?php echo $row["id"];?>"
                              >View More</a></p>
              <!-- <div class="button text-center mt-4"><a href="activity_details_admin.php" class="btn btn-primary">More details</a></div>
              </div> -->
              </div>
        </div>
</div>
<?php
          $i++;
          }
          ?>
          <?php
          }
          else{
          echo "No result found";
          }
          ?>


  <!-- 2 -->
 <!-- <div class="card w-100 mt-3 p-3 mb-3 border border-2 border-info">
  <div class="card-body">
    <h5 class="card-title fw-bolder text-center">Cyberthon</h5>
     <a href="activity_details_admin.php"
                  ><img
                    src="../img/act4.jpg"
                    class="d-block my-3 mx-auto"
                    style="width: 50%; height: 300px"
                    alt="..."
                /></a>
    <p class="card-text fw-normal text-center">An open discussion and opinion sharing session was held in the presence of Hon’ble State Minister of ICT Division, MR. Zunaid Ahmed Palak, MP on ways to incorporate and leverage Cyber Security as well as Data Analytics, Robotics, and Artificial intelligence in the academic domain.
    </p>
    <div class="button text-center mt-4"><a href="activity_details_admin.php" class="btn btn-primary">More details</a></div>
  </div>
</div>

 <div class="card w-100 mt-3 p-3 mb-3 border border-2 border-info">
  <div class="card-body">
    <h5 class="card-title fw-bolder text-center">Software exhibition</h5>
     <a href="activity_details_admin.php"
                  ><img
                    src="../img/act3.jpg"
                    class="d-block my-3 mx-auto"
                    style="width: 50%; height: 300px"
                    alt="..."
                /></a>
    <p class="card-text fw-normal text-center">The session was attended by the Commandant of MIST, Cyber Security Professionals, Technology Professionals from different banks and financial institutions, and the faculty members of CSE Department.
    </p>
  <div class="button text-center mt-4"><a href="activity_details_admin.php" class="btn btn-primary">More details</a></div>
  </div>
</div>


 <div class="card w-100 mt-3 p-3 mb-3 border border-2 border-info">
  <div class="card-body">
    <h5 class="card-title fw-bolder text-center">NCPC-2022</h5>
     <a href="activity_details_admin.php"
                  ><img
                    src="../img/act2.jpg"
                    class="d-block my-3 mx-auto"
                    style="width: 50%; height: 300px"
                    alt="..."
                /></a>
    <p class="card-text fw-normal text-center">The agenda of the meeting was to discuss on the syllabus and training method for the upcoming course at MIST cyber range. The suggestions by the qualified cybersecurity professionals, many of whom will be part of the teaching staff for the course, helped to formulate a syllabus and course content that's relevant to the demands of the current industry trends in cybersecurity.
    </p>
   <div class="button text-center mt-4"><a href="activity_details_admin.php" class="btn btn-primary">More details</a></div>
  </div>
</div>


 <div class="card w-100 mt-3 p-3 mb-3 border border-2 border-info">
  <div class="card-body">
    <h5 class="card-title fw-bolder text-center">Workshop on Cyber security</h5>
     <a href="activity_details_admin.php"
                  ><img
                    src="../img/act1.jpg"
                    class="d-block my-3 mx-auto"
                    style="width: 50%; height: 300px"
                    alt="..."
                /></a>
    <p class="card-text fw-normal text-center">The agenda of the meeting was to discuss on the syllabus and training method for the upcoming course at MIST cyber range. The suggestions by the qualified cybersecurity professionals, many of whom will be part of the teaching staff for the course, helped to formulate a syllabus and course content that's relevant to the demands of the current industry trends in cybersecurity.
    </p>
    <div class="button text-center mt-4"><a href="activity_details_admin.php" class="btn btn-primary">More details</a></div>
    
  </div>
</div>

        </div> -->
      </div>
      </div>

      <!-- Achivements card end -->

      <!-- footer -->

      <div class="container-fluid bg-black py-2 mt-5">
        <div class="row">
          <div class="col-md-4 col-12 pt-3">
            <p class="text-white-50 text-center">
              © 2022 MIST. All rights reserved
            </p>
            <p></p>
          </div>

          <div class="col-md-4 col-12 pt-3">
            <p class="text-white-50 text-center">
              <i class="bi bi-telephone"></i>+880 176 902 3806
            </p>
          </div>
          <div class="col-md-4 col-12 pt-3">
            <p class="text-white-50 text-center">
              <i class="bi bi-envelope"></i> info@mist.ac.bd
            </p>
          </div>
        </div>
      </div>

      <!-- footer -->
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>



<?php 

}else{

     header("Location: ../logout.php");

     exit();

}

 ?>

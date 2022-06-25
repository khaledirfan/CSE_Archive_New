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

    <title>Student List_Admin</title>
  </head>
  <body>
    <!-- navbar starts -->
    <nav class="navbar navbar-expand-xxl navbar-light border-bottom border-5 border-success">
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
              <a class="nav-link" href="achievements_admin.php">Achievements</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="publication_admin.php">Publications</a>
            </li>
            
            <li class="nav-item mx-3">
              <a class="nav-link" href="thesis_admin.php">Thesis</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="activity_admin.php">Activity</a>
            </li>
          </ul>
          <a href="adminprofile_admin.php"> <img class="ms-3" src="../img/profile.png" alt="profile" /></a> 
          <a href="adminprofile_admin.php" class="text-decoration-none text-black">   <h6 class="mt-2 mx-3  " >Tanjim Hasan</h6></a> 


          <a href="../logout.php"
            ><button type="button" class="btn btn-danger mx-3">
              Log Out
            </button></a
          >
        </div>
      </div>
    </nav>
    <!-- navbar ends -->

    <div class="bg-light">

      <div class="container px-4 pt-5">
        <div class="row gx-5">
           <!-- LEFT BAR -->
           <div class="col-xxl-3 col-12 mb-5 ">
            <div class="p-3 border bg-white border-3 border border-info  rounded ">
              <h4 class="ps-2">Stream</h4>
              <div class="p-2 mt-3  bg-white  ">
  
                <a href="studentadmin_admin.php">
                <button type="button" class="btn btn-outline-primary btn-lg border border-1 border border-info rounded text-black col-xxl-12 col-12">Dashboard</button>
              </a>
              
              
              </div>

              <div class="p-2 mt-3  bg-white  ">
  
                <a href="pending_admin.php">
                <button type="button" class="btn btn-outline-primary btn-lg border border-1 border border-info rounded text-black col-xxl-12 col-12">Pending</button>
              </a>
              
              
              </div>
  
              
              <div class="p-2 mt-3  bg-white ">
                <div class="dropdown">
                  <button
                    class="btn dropdown-toggle border border-1 border border-info rounded btn-lg btn-block col-xxl-12 col-12 btn-outline-primary text-black "
                    type="button"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Student
                  </button>
                  <ul
                    class="dropdown-menu "
                    aria-labelledby="dropdownMenuButton1"
                  >
                    <li><a class="dropdown-item" href="student_details_admin.php">Student</a></li>
                    <li>
                      <a class="dropdown-item" href="faculty_details_admin.php">Faculty</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="project_list_admin.php">Project</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="thesis_list_admin.php">Thesis</a>
                    </li>
                    
                  </ul>
                </div>
              </div>
  
  
  
              <div class="p-2 mt-3 border bg-white border-1 border border-info rounded ">
                <form action="" class="p-3">
                  
                  <input type="text" id="key" name="key" placeholder="Enter any keyword" class="p-2 border bg-white border-1 border border-info"><br><br>
            
                  <button type="button" class="btn btn-primary">Search</button>
                </form> 
              </div>
  
             
            </div>
          </div>
  
  
          <!-- LEFT BAR ENDS -->
  
  
          <!-- RIGHT BAR STARTS -->
          
          <div class="col-xxl-9 col-12">
            
            <div class="card mb-5 border border-3  border-info">
              <h5 class="card-header text-white bg-info ">Student Request</h5>
              <div class="card-body bg-white ">
                <a
                  href="studentprofile_pending_admin.php"
                  class="text-decoration-none text-black">
                  <div class="p-3  border border-2  border-info">
                    <h6 class="text-decoration-none text-black"><img class="ms-3" src="../img/sumon.jpg" style="width:50px;height:50px;"  alt="profile"/> &nbsp;&nbsp;201914055      :     Saheenur Islam Sumon   (BME-02)
                    <a href="student_details_admin.php">
                      <div class="btn-group float-end" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-success">Accept</button>
                        <button type="button" class="btn btn-outline-danger">Reject</button>
                      </div>
                    </a>
                  </h6> 
                  </div>
                </a>
              </div>
     
             
              
              
              
            </div>

            <div class="card mb-2 border border-3  border-info">
              <h5 class="card-header text-white bg-info">Current Students</h5>


              <?php
include_once 'db_conn.php';
$result = mysqli_query($conn,"SELECT * FROM student");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {



 


?>
<div class="card-body bg-white ">
                <a
                  href="studentprofile_admin.php? id= <?php echo $row["roll"];?>"
                  class="text-decoration-none text-black">
                  <div class="p-3  border border-2  border-info">
                    
                    <h6 class="text-decoration-none text-black"><img class="ms-3" src="img/profile.png" alt="profile"/>&nbsp;&nbsp;<?php echo $row["roll"]."      :          ".$row["name"]."    (".$row["batch"].")"; 
                    
                    ?> </h6> 
                  </div>

                </a>
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

              
            </div>
          </div>
  
          <!-- RIGHT BAR ENDS -->
  
        </div>
      </div>
      <!-- card section -->
      
      <!-- card section -->

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
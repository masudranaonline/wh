<?php
    include('../admin/db.php');

    if(isset($_POST['submit'])){
        if($_POST['submit'] == 'Data'){
            echo $name = $_POST['name'];
            $number = $_POST['number'];
            $education = $_POST['education'];
            $subject = $_POST['subject'];
            $address = $_POST['address'];

            echo $Query = "INSERT INTO teachers(name, number, education, subject, address) VALUES('$name', '$number', '$education', '$subject', '$address')";
            $Result = mysqli_query($Connection, $Query);
            if($Result){
                echo "Data stored successfully";
            }else{
                echo "something went rong";
            }

        }
    }


?>

<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <!-- <img src="assets/img/logo.png" alt=""> -->
                  <span class="d-none d-lg-block"></span>
                </a>
              </div>

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Insert Teacher Data</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" method="post" action="index.php?page=add_teacher" enctype="multipart/form-data" novalidate>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Teacher Name</label>
                      <input type="text" name="name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourRoll" class="form-label">Your Number</label>
                      <input type="number" name="number" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your Number</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEducation" class="form-label">Education</label>
                      <input type="text" name="education" class="form-control" id="yourEducation" required>
                      <div class="invalid-feedback">Please enter a valid Education</div>
                    </div>

                    <div class="col-12">
                      <label for="yourSubject" class="form-label">Subject</label>
                      <input type="text" name="subject" class="form-control" id="yourSubject" required>
                      <div class="invalid-feedback">Please enter a valid Subject</div>
                    </div>

                    <div class="col-12">
                      <label for="yourAddress" class="form-label">Your Address</label>
                      <textarea class="form-control" name="address" id="" cols="" rows="" required></textarea>
                      <div class="invalid-feedback">Please enter a valid Address</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="submit" value="Data" type="submit">Submit Data</button>
                    </div>
                    <!-- <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
                    </div> -->
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
    

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Captain VR</title>
</head>
<?php
 session_start();  
 $servername = "localhost";
 $username = "bit_academy";
 $password = "bit_academy";
 $dbname = "captain_vr";
 $charset = "utf8mb4";
try {  
      $connect = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
      catch (PDOException $error) {  
        $message = $error->getMessage();  
    }

$addME = "Sign-up";
if (!isset($_GET['firstname'])) {

} else {
    $firstname = $_GET['firstname'];
}
if (!isset($_GET['lastname'])) {

} else {
    $lastname = $_GET['lastname'];
}
if (!isset($_GET['email'])) {

} else {
    $email = $_GET['email'];
}
if (!isset($_GET['password'])) {
    $password = null;
} else {
    $password = $_GET['password'];
}

if ($email == null) {
  $sql = "INSERT INTO users VALUES ('value','$firstname', '$lastname', '$password')";
  if (isset($_GET['UserAdd']) == true && $_GET['UserAdd'] == $addME) {
    $movies = $connect->query($sql)
    ->fetchAll();
}
if(empty($firstname));
} else {
  $sql = "INSERT INTO coaches VALUES ('value','$firstname', '$lastname', '$email', '$password')";
  if (isset($_GET['UserAdd']) == true && $_GET['UserAdd'] == $addME) {
    $movies = $connect->query($sql)
    ->fetchAll();
  }
if(empty($firstname));
}
?>

<body class="doc-trainingtypes page">
  <nav class="navbar navbar-expand-xl navbar-light bg-light sticky-top navbar-bg-white py-0" style="height: 60px;">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="https://thevrcoaches.com/assets/vrimg/logo.png" class="img-fluid" alt="Logo VR Coach" width="450"
          xheight="25" srcset="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-id-1068 nav-item">
              <a href="/vr-coaches/" class="nav-link fw-semibold" style="color: #007277">VR Coaches</a>
            </li>
            <li class="nav-id-2051 nav-item">
              <a href="/metaverse-coaches/" class="nav-link fw-semibold" style="color: #007277">Metaverse Coaches</a>
            </li>
            <li class="nav-id-2213 nav-item  current">
              <a href="/xr-academy/" class="nav-link fw-semibold" style="color: #007277">XR Academy</a>
            </li>
            <li class="nav-id-2052 nav-item">
              <a href="/xr-products/" class="nav-link fw-semibold" style="color: #007277">XR Products</a>
            </li>
            <li class="nav-id-2053 nav-item">
              <a href="/sail-along/" class="btn btn-third mt-1 bg-warning rounded-pill fw-semibold" style="color: #007277">Sail
                Along</a>
            </li>
            <li class="nav-id-2338 nav-item">
              <a href="/contact/" class="nav-link  text-success  fw-semibold" style="color: #007277">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="pagecontainer text-light">
    <div class="header-container">
      <div>
      <img src="https://eventive.imgix.net/166292608349134d6798060cccc844cab.jpg" class="img-fluid" style="height: 1050px;">
        <div class="container" style="position: absolute; top: 50px; margin-left: 110px;">
          <div class="row">
            <div class="col-md-12 col-sm-12 text-center mt-5">
              <h1 class="fw-bold" style="color: #E0FCFF;">Sail Along</h1>
              <h3 class="fs-5" style="color: #E0FCFF;">Are you a coach, trainer, therapist or consultant and do you want to be involved or join
                forces?<br><br>Do you want to become future proof?<br>Do you want to Distinguish yourself?<br><br>Come
                on board and sail along with us into the future.<br><br></h3>
              <p class="fs-4" style="color: #E0FCFF;">The VR Coaches!<br><br><br><br></p>
              <section class="section-tekst">
                <div class="container">
                  <div class="row">
                    <div class="offset-md-2 col-md-8" style="background-color: rgba(29,155,165,.2); height: 310px">
                      <h3 class="fw-bold" style="text-align: center;">Sign Up and Sail</h3>
                      <div id="umbraco_form_e02c555b3676448bb962ba559c38112f"
                        class="umbraco-forms-form contact umbraco-forms-bootstrap5">

                        <form action='sign-up.php' method="GET">






                          <!-- starting bootstrap 5 forms theme -->
                          <div class="umbraco-forms-page form-horizontal">



                            <fieldset class="umbraco-forms-fieldset" id="5e84c306-3feb-476c-b7c1-e615860c5da2">


                              <div class="row form-row">

                                <div class="umbraco-forms-container col-md-6">

                                  <div class=" umbraco-forms-field name shortanswer mandatory mb-2">

                                    <label for="firstname"
                                      class="umbraco-forms-label form-label mb-0">
                                      Firstname
                                    </label>

                                    <div class="umbraco-forms-field-wrapper">

                                      <input type="text" name="firstname"
                                        id="firstname" class="form-control form-control text"
                                        value="" maxlength="500" required>





                                      <span class="field-validation-valid invalid-feedback"
                                        data-valmsg-for="firstname"
                                        data-valmsg-replace="true"></span>
                                    </div>


                                  </div>

                                </div>
                                <div class="umbraco-forms-container col-md-6">

                                  <div class=" umbraco-forms-field company shortanswer alternating mb-2">

                                    <label for="lastname"
                                      class="umbraco-forms-label form-label mb-0">
                                      Lastname
                                    </label>

                                    <div class="umbraco-forms-field-wrapper">

                                      <input type="text" name="lastname"
                                        id="lastname" class="form-control form-control text"
                                        value="" maxlength="500" required>





                                      <span class="field-validation-valid invalid-feedback"
                                        data-valmsg-for="lastname"
                                        data-valmsg-replace="true"></span>
                                    </div>


                                  </div>

                                </div>
                              </div>

                            </fieldset>
                            <fieldset class="umbraco-forms-fieldset" id="f6b24ec7-99b0-4884-9f51-f15116452e83">


                            </fieldset>
                            <fieldset class="umbraco-forms-fieldset" id="4121c92e-0c10-445c-9caf-54905f71e444">


                              <div class="row form-row">

                                <div class="umbraco-forms-container col-md-6">

                                  <div class=" umbraco-forms-field email shortanswer mandatory alternating mb-2">

                                    <label for="email"
                                      class="umbraco-forms-label form-label mb-0">
                                      E-mail
                                    </label>

                                    <div class="umbraco-forms-field-wrapper">

                                      <input type="text" name="email"
                                        id="email" class="form-control form-control text"
                                        value="" maxlength="500" data-val="true"
                                        data-val-required="Please provide a value for E-mail"
                                        data-val-regex="Please provide a valid value for E-mail"
                                        data-regex="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$">





                                      <span class="field-validation-valid invalid-feedback"
                                        data-valmsg-for="email"
                                        data-valmsg-replace="true"></span>
                                    </div>


                                  </div>

                                </div>
                                <div class="umbraco-forms-container col-md-6">

                                  <div class=" umbraco-forms-field password shortanswer mandatory mb-2">

                                    <label for="password"
                                      class="umbraco-forms-label form-label mb-0">
                                      Password
                                    </label>

                                    <div class="umbraco-forms-field-wrapper">

                                      <input type="password" name="password"
                                        id="password" class="form-control form-control text"
                                        value="" maxlength="500" required>





                                      <span class="field-validation-valid invalid-feedback"
                                        data-valmsg-for="password"
                                        data-valmsg-replace="true"></span>
                                    </div>


                                  </div>

                                </div>
                              </div>

                            </fieldset>


                            <div class="umbraco-forms-navigation row form-row">

                              <div class="col-sm-12 bg-warning rounded-pill w-50" style="margin-left: 215px;">
                                <input type="submit" name="UserAdd" class="btn btn-third btn-submit" value="<?php echo $addME ?>">
                              </div>


                            </div>

                          </div>
                          <!-- ending bootstrap 5 forms theme --><input name="ufprt" type="hidden"
                            value="18F94509CB0C5D21CCFFBB9AA7D27B4FA2382AD64882C4E8FC5B009EE8CA89E5F8FF50F51BD69688487ACA49BBA1AA9AEA4F578F221A49074AE16F383602518916F7E0666513E57521054F10EE45DA0F6B715D424B93F54BED709F02A8D1A0A1912A53A7959AD531220C22FE89997039F4B8D1C875191D97EDB9891E65E0125E8DAEDF98C52B409467C97B9703CCF35C">
                        </form>


                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>

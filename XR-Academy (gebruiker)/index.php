<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>XR-Academy - The VR Coaches</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- insert nav -->
    <div id="carouselSlides" class="carousel slide" data-bs-ride="carousel">
      <!-- The thumbnails are temporary examples, the best possible format are (at least;) 
      1k(1920x1080) images, due to the resolution being so high it doesn't get downscaled
      when minimizing the window. See difference between images 1 & 3 and image 2 -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="los-picos-de-montanas-8859.png"
            class="d-block w-100"
            alt="mountain range"
            height="350"
          />
          <div class="carousel-caption bg-info bg-opacity-75">
            <h1>XR-Academy</h1>
            <h4>
              What is XR-Education, Explanation. <br />
              What are you going to learn and how we will help.
            </h4>
            <img
              src="xr-education-icon.png"
              alt="xr education icon"
              class="img-fluid"
            />
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="metaverse.jpg"
            class="d-block w-100"
            alt="metaverse"
            height="350"
          />
          <div class="carousel-caption bg-info bg-opacity-50">
            <h1>XR-Academy</h1>
            <h4>
              What is XR-Education, Explanation. <br />
              What are you going to learn and how we will help.
            </h4>
            <img
              src="xr-education-icon.png"
              alt="xr education icon"
              class="img-fluid"
            />
          </div>
        </div>
        <div class="carousel-item">
          <img src="ship.png" class="d-block w-100" alt="ship" height="350" />
          <div class="carousel-caption bg-info bg-opacity-50">
            <h1>XR-Academy</h1>
            <h4>
              What is XR-Education, Explanation. <br />
              What are you going to learn and how we will help.
            </h4>
            <img
              src="xr-education-icon.png"
              alt="xr education icon"
              class="img-fluid"
            />
          </div>
        </div>
      </div>
    </div>
    <!-- added video example; this is mostly to show-off the style of when an actual video is added -->
    <div class="container d-grid mt-1">
      <div class="row g-1">
        <div class="card text-center" style="max-width: 50%">
          <div class="card-header bg-info-subtle">Video title</div>
          <div class="card-img">
            <img
              src="loading_video.gif"
              height="150px"
              width="150px"
              alt="loading_video"
            />
          </div>

          <div class="card-body">
            <p class="card-text">- description of the video.</p>
          </div>
          <div class="card-footer text-muted">
            a short summary (a tl;dr) of the video.
          </div>
        </div>
        <div class="card text-center" style="max-width: 50%">
          <div class="card-header bg-info-subtle">Video title</div>
          <div class="card-img">
            <img
              src="loading_video.gif"
              height="150px"
              width="150px"
              alt="loading_video"
            />
          </div>

          <div class="card-body">
            <p class="card-text">- description of the video.</p>
          </div>
          <div class="card-footer text-muted">
            a short summary (a tl;dr) of the video.
          </div>
        </div>
        <div class="card text-center" style="max-width: 50%">
          <div class="card-header bg-info-subtle">Video title</div>
          <div class="card-img">
            <img
              src="loading_video.gif"
              height="150px"
              width="150px"
              alt="loading_video"
            />
          </div>

          <div class="card-body">
            <p class="card-text">- description of the video.</p>
          </div>
          <div class="card-footer text-muted">
            a short summary (a tl;dr) of the video.
          </div>
        </div>
        <div class="card text-center" style="max-width: 50%">
          <div class="card-header bg-info-subtle">Video title</div>
          <div class="card-img">
            <img
              src="loading_video.gif"
              height="150px"
              width="150px"
              alt="loading_video"
            />
          </div>

          <div class="card-body">
            <p class="card-text">- description of the video.</p>
          </div>
          <div class="card-footer text-muted">
            a short summary (a tl;dr) of the video.
          </div>
        </div>
      </div>
    </div>
    <!-- end of added video example -->
    <!-- insert footer -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <?php include_once('footer.html'); ?>
  </body>
</html>

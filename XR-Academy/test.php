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
    <div class="container-sm text-center">
      <div class="row text-dark d-flex justify-center">
        <div class="col border bg-primary-subtle p-5">
          <button class="border bg-primary-subtle" type="submit">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="32"
              height="32"
              fill="currentColor"
              class="bi bi-cloud-plus-fill mx-sm-1"
              viewBox="0 0 16 16"
            >
              <path
                d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm.5 4v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z"
              />
            </svg>
            <h3>
              Add video file; <br />
              (.mp4, .webm, .mkv, etc)
            </h3>
          </button>
        </div>
      </div>
      <!-- After a video has been successfully added, a php program should add another "add video file" button and with (a) database(s) videos should be saved. -->
    </div>
<!-- insert footer -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <?php include_once('footer.html'); ?>
  </body>
</html>

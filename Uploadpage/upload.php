<?php
include("config.php");

if (isset($_POST['but_upload'])) {
    $maxsize = 2000000; // 2MB
    if (isset($_FILES['file']['name']) && $_FILES['file']['name'] != '') {
        $name = $_FILES['file']['name'];
        $target_dir = __DIR__ . '/videos/';
        $target_file = $target_dir . $_FILES["file"]["name"];

        // Select file type
        $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("mp4", "avi", "3gp", "mov", "mpeg");

        // Check extension
        if (in_array($extension, $extensions_arr)) {
            // Check file size
            if (($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                $_SESSION['message'] = "File too large. File must be less than 5MB.";
            } else {
                // Upload
                if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
                    // Insert record
                    $query = "INSERT INTO videos(name,location) VALUES(:name, :location)";

                    $stmt = $connect->prepare($query);
                    $stmt->execute([
                        'name' => $name,
                        'location' => $target_file
                    ]);
                    $_SESSION['message'] = "Upload successfully.";
                } else {
                    $_SESSION['message'] = 'upload unsuccess' . $_FILES['file']['tmp_name'];
                }
            }
        } else {
            $_SESSION['message'] = "Invalid file extension.";
        }
    } else {
        $_SESSION['message'] = "Please select a file.";
    }
    header('location: readfile.php');
    exit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>

<body>
    <!-- insert navbar -->
    <?php
    include("../navbar.html")
    ?>
    <!-- Upload response -->
    <?php
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>
    <div class="container mt-5">
        <div class="container d-grid">
            <div class="row g-3">
                <form style="max-height: 60px" class="d-flex flex-wrap">
                    <label for="video-title">Title:</label>
                    <input type="text" name="video-title" id="video-title" class="container-fluid" />
                </form>

                <form style=" max-height: 150px" class="d-flex flex-wrap">
                    <label for="video-desc">Description:</label>
                    <input type="text" name="video-desc" id="video-desc" class="container-fluid" style="height: 100px;"/>
                </form>

                <form style=" max-height: 60px" class="d-flex flex-wrap">
                    <label for="video-sum">Summary:</label>
                    <input type="text" name="video-sum" id="video-sum" class="container-fluid" />
                </form>

                <form style="max-height: 60px" class="d-flex flex-wrap">
                    <label for="video-thumb">Thumbnail:</label>
                    <input type="file" name="video-thumb" id="video-thumb" />
                </form>
            </div>
        </div>
        <form method="post" action="" enctype='multipart/form-data' style="max-width: 565px">
            <label for="-file-">Upload movie file (.mp4, .avi, .3gp, .mov, .mpeg)</label>
            <input type='file' name='file' id="-file-" />
            <input type='submit' value='Upload' name='but_upload' class="px-5 bg-dark-subtle border-dotted rounded-pill">
        </form>

    </div>
    <!-- insert footer -->
    <?php
    include("../footer.html")
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>

<?php
include_once("config.php");

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
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Upload and Store video to MySQL Database with PHP</title>
    <style>
        input::file-selector-button {
            border-radius: var(--bs-border-radius-pill)!important;
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-warning-rgb),var(--bs-bg-opacity))!important;
            padding: 2px 6px;
            border-width: 2px;
            border-style: outset;
            border-color: black;
            border-image: initial;
            width: 145px;
        }
    </style>
</head>

<body>
    <?php
    include('navbar.html');
    ?>
    <!-- Upload response -->
    <?php
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>
    <form method="post" action="" enctype='multipart/form-data' class="text-center">
        <input type='file' name='file' id="file_input" />
        <input type='submit' value='Upload' name='but_upload' class="col-sm-12 bg-warning rounded-pill" style="width: 140px;">
    </form>
    

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<?php
include('footer.html');
?>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Display Example</title>
</head>
<body>
    <h1>Image Display Example</h1>

    <div class="image-container">
        <?php
        // List of image filenames
        $imageFiles = array('OIP (1).jpeg', 'OIP (2).jpeg', 'OIP (3).jpeg', 'OIP (4).jpeg', 'OIP (5).jpeg', 'OIP (6).jpeg', 'OIP (7).jpeg');

        // Loop through the image files and display them
        foreach ($imageFiles as $imageFile) {
            echo '<img src="image/' . $imageFile . '" alt="Image" class="image">';
        }
        ?>
    </div>
</body>
</html>

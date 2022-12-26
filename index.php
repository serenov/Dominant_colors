<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Some AI Project</title>
</head>
<body>
    <h1>
        Dominant Colors Finder 
    </h1>
    <p> 
        An AI made using Python discovers the dominant colors in a given image.    
    </p>
    <?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="my_image">
        <input type="submit" value="Upload Image" name="submit">
      </form>
</body>
</html>
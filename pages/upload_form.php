<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title>File Upload</title>
</head>
<body>
    <header>
        <nav id="nav" class="nav">
            <a href="../index.html">Home</a>
            <a href="resources.php">Resources</a>
            <a href="resume.php">Portfolio</a>
            <a href="upload_form.php">Contact Us</a>
            
        </nav>
    </header>
    <h1>Upload Your Files</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple>
        <button type="submit">Upload</button>
    </form>
</body>
</html>

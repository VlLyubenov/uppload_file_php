<?php include("controler.php"); ?>
    
    <form action="/upload_file/controler.php" method='POST' enctype='multipart/form-data'>

    <label for='file'><h1>Upload File:</h1></label>
    <input  type='file' name='file'>
    <br><br>
    <button type='submit' name='submit'>Upload File</button>

    </form>
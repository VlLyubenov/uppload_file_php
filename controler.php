<?php
    
    if(isset($_POST["submit"])) {

        $file = $_FILES["file"];
        $filetemp = $_FILES['file']["tmp_name"];
        print_r($file);
        echo '<br>';
        echo $filetemp;

        echo "<br>Ready <br>";

        $filename = $_FILES['file']['name'];
        echo "Filename Validated -> ".$filename."<br>";

        $filedestination = "upload_file/uploads/".$filename;
        echo "Destination set -> ".$filedestination."<br>"; 

        chmod("/var/www/html/apps_exercise/upload_file/uploads", 0777);
        if(move_uploaded_file( $filetmp, $filedestination)){
        echo "Success!";}else{
            echo "Upload error";
        }
        // header("Location: form.php?fileuploaded");
    }
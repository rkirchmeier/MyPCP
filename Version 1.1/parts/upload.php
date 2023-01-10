<?php
// Include the database configuration file  
require("../shared/inc/db.inc.php"); 

$Employee_ID = 1; //from where can I get the Id?

// If file upload form is submitted 
if (isset($_POST['upload']) && isset ($_FILES['image'])) {

    echo $img_name = $_FILES['image']['name'];
    echo $img_size = $_FILES['image']['size'];
    echo $img_tmp_name = $_FILES['image']['tmp_name'];
    echo $img_error = $_FILES['image']['error'];

    if ($img_error === 0) {
        if ($img_size > 125000000){
            $e = "file is too big";
            header("Location: index.php?error=$e");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                
                $new_img_name = uniqid("IMG-", true).'.'."$img_ex_lc";
                $img_upload_path = "../src/img/profiles/".$new_img_name;
                move_uploaded_file($img_tmp_name, $img_upload_path);

                $sql = "INSERT images (image_path, Employee_ID) VALUES (:image_path, :Employee_ID)";

                $query = $pdo->prepare($sql);

                $query->execute([
                'image_path' => $img_upload_path, 
                'Employee_ID' => $Employee_ID,            
                ]);

                header("Location: ../index.php"); 


            } else {
                $e = "You can't upload files of this type";
                header("Location: index.php?error=$e");
            }    
        }

    } else {
        $e = "unknown error occurred! Please contact you administrator";
        header("Location: index.php?error=$e");
    }


} else {
        
    echo "nothing happened";

}



?>

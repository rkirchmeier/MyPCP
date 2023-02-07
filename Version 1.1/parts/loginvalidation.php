<?php 

session_start();

require("../shared/inc/db.inc.php"); 


if (isset($_POST['username']) && isset ($_POST['password'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    

    if (empty($username)) {
        header("Location: ../login.php?error=Username is required");
        exit();
    } elseif (empty($password)) {
        header("Location: ../login.php?error=Password is required");
        exit();
    } else {

        $sql = "SELECT * FROM user WHERE `username`= '$username' AND `password` = '$password' ";
		$targets = $pdo -> query($sql);
		$result = $targets-> rowCount();
        
        if ($result === 1) {
            foreach($targets as $validation) {
                if ($validation['username'] === $username && $validation['password'] === $password) {
                    $_SESSION['username'] = $validation['username'];
                    $_SESSION['Employee_ID'] = $validation['Employee_ID'];
                    $_SESSION['User_ID'] = $validation['User_ID'];
                    header("Location: ../index.php");
                    exit();
                };
            }
        } else {
            header("Location: ../login.php?error=Username or Password is not correct");
            exit();
        }
    }

} else {
    header("Location: index.php");

}

?>
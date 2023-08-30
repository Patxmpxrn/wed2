<?php
require("connect2.php");
if(isset($_POST) && !empty($_POST)){
    $user_wed = $_POST["user_web"];
    $pass_wed = $_POST["pass_web"]; // Corrected variable name
    $sql = "SELECT * FROM adminmywed WHERE user_wed='".$user_wed."' AND pass_wed='".$pass_wed."'";
    $result = mysqli_query($connect, $sql);
    $num = mysqli_num_rows($result);
    if($num > 0){
        header("location: showcomment2.php");
        exit(); // Ensure script execution stops after redirection
    } else {
        echo "<script type='text/javascript'>alert('ลองใหม่อีกครั้ง');</script>";
    }
}
?>
<!-- Rest of your HTML code -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="test2.js"></script>
</head>
<body>
    <table align="center" style="width: 60%">
        <tr>
            <td> 
                <form action="" method="post"> 
                    <div class="mb-3 mt-3">
                        <label for="username" class="form-label">username:</label>
                        <input type="text" class="form-control" placeholder="" name="user_web">
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Password:</label>
                        <input type="password" class="form-control" placeholder="" name="pass_web">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>

<?php
    require("connect2.php");
    if(!empty($_POST)){
        $fullname = $_POST["fullname"];
        $age = $_POST["age"];
        $sex = $_POST["sex"];
        $edu = $_POST["edu"];
        $pagelike = $_POST["pagelike"];
        $pagenolike = $_POST["pagenolike"];
        if (trim ($fullname)==''){
            $message = "กรุณาใส่ข้อความในช่องว่าง";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }elseif (trim ($age)==''){
            $message = "กรุณาใส่ข้อความในช่องว่าง";
            echo "<script type='text/javascript'>alert('$message');</script>";  
        } elseif (trim ($sex)==''){
        $message = "กรุณาใส่ข้อความในช่องว่าง";
        echo "<script type='text/javascript'>alert('$message');</script>";  
        }
        else{

            $sql = "INSERT INTO emp(fullname,age,sex,edu,pagelike,pagenolike) VALUES('$fullname','$age','$sex','$edu',' $pagelike',' $pagenolike')";
            $result=mysqli_query($connect,$sql);
        if ($result){
            $message = "ขอบคุณสำหรับการแสดงความคิดเห็น";
            echo "<script type='text/javascript'>alert('$message');</script>";  
        
        }

    }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<style>
#p10
{
    font-family: 'Noto Sans Thai Looped', sans-serif;
    font-size: 40px;
    text-align: center;
    text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
    color:#000000;
    
}
</style>

<!--ฟอนต์ -->

<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai+Looped:wght@800&display=swap" rel="stylesheet">



   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chonburi&display=swap" rel="stylesheet">


   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mali&display=swap" rel="stylesheet">
    <!-- ฟอนต์ -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>

<table class="table" width="100%" >
  <tr>
    <td><nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="page1.html">หน้าแรก </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="page2.html">ประวัติส่วนตัว</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="page3.html">ประวัติการศึกษา</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="page4.html">ความสามารถ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="page5.html">กิจกรรม</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="page6.php">แสดงความคิดเห็น</a>
              </li>
            </ul>
            <form class="d-flex">
            <a href="login2.php" class="btn btn-primary">ADMIN</a>
            </form>
          </div>
        </div>
      </nav> </td>
</tr>
   </table>
    <table  align="center" style="width: 60%" class="table-secondary">
    <div action="mb-3 mt-3" >
        <form  method="post">
        <tr> 
        <p id="p10">แสดงความคิดเห็น</p>
            <td> <label for="" class="form-label">ชื่อ-สกุล:</label> </td>
            <td> <input type="text" class="form-control" id=""  name="fullname">  </td>
            <td></td>
        </tr>
        <tr>
        <td> <label for="" class="form-label">อายุ:</label> </td>
        <td> <input type="text" class="form-control" id=""  name="age">  </td>
        </tr>
        <tr>
        <td> <label for="" class="form-label">เพศ:</label> </td>
        <td> <input type="text" class="form-control" id=""  name="sex">  </td>
        </tr>

        <tr>
        <td> <label for="" class="form-label">ระดับการศึกษา:</label> </td>
        <td> <select class="form-select" id="" name="edu">
                <option>ปวช.</option>
                <option>ปวส.</option>
                <option>ปริญาตรี</option>
                <option>ปริญญาโท</option>
         </select>  </td>
        </tr>
        <tr>
        <td> <label for="email" class="form-label">หน้าเว็ปที่ชอบที่สุด:</label> </td>
        <td> <select class="form-select" id="" name="pagelike">
                <option>ประวัติส่วนตัว</option>
                <option>ประวัติการศึกษา</option>
                <option>ความสามารถ</option>
                <option>กิจกรรม</option>
         </select>  </td>
        </tr>
        <tr>
        <td> <label for="email" class="form-label">หน้าเว็ปที่ไม่ชอบที่สุด:</label> </td>
        <td> <select class="form-select" id="" name="pagenolike">
                <option>ประวัติส่วนตัว</option>
                <option>ประวัติการศึกษา</option>
                <option>ความสามารถ</option>
                <option>กิจกรรม</option>
         </select>  </td>
        </tr>
        <tr> 
            <td  align="center" colspan="2">
            <button type="submit" class="btn btn-outline-warning" value="บันทึกข้อมูล">บันทึกข้อมูล</button>

            </td>
        </tr>
         
        

        </form>
        </div>
</table>
</body>
</html>
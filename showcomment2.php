<?php
  require("connect2.php"); 
  $sql = "SELECT * FROM emp";
  $result=mysqli_query($connect,$sql);
  $row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        #p12
{
    font-family: 'Noto Sans Thai Looped', sans-serif;
    font-size: 40px;
    text-align: center;
    text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
    color:#ED9E00;
    
}


    </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js">
    </script>
    
    <script src="test2.js">
    </script>
</head></html>
<body>
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
            <a href="showcomment2.php" class="btn btn-primary">ADMIN</a>
            </form>
          </div>
        </div>
      </nav> </td>
      <p id="p12">ความคิดเห็นทั้งหมด</p>
<table  class="table table-warning"  align="center" style="width: 90%" >
<tr>  
<td>ชื่อ-สกุล</td> 
<td>อายุ</td> 
<td>เพศ</td> 
<td>ระดับการศึกษา</td> 
<td>หน้าที่ชอบมากที่สุด</td> 
<td>หน้าไม่ชอบมากที่สุด</td>
</tr>
<?php foreach($result as $row) {?>
<tr>
    <td> <?php echo $row ["fullname"];?></td>
    <td> <?php echo $row ["age"];?> </td>
    <td> <?php echo $row ["sex"];?></td>
    <td> <?php echo $row ["edu"];?> </td>
    <td> <?php echo $row ["pagelike"];?></td>
    <td> <?php echo $row ["pagenolike"];?></td>
</tr>
<?php } ?>
</body>
</html>






</table>
</body>
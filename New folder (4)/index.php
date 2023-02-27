<?php
include "./inc/db.php";
include "./inc/form.php";

$sql='SELECT * FROM users';
$result=  mysqli_query($conn,$sql);
$users= mysqli_fetch_all($result,MYSQLI_ASSOC);




mysqli_free_result($result);
mysqli_close($conn);






?>

<!DOCTYPE html>
<html lang="en"  dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">n
    <meta name="viewport" content="width=device-width, initial-scale=1h.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css" >
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
    <div class="container">
      <!--
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 fw-normal">اربح معي</h1>
    <p class="lead fw-normal">باقي علي فتح التسجيل</p>
    <p class="lead fw-normal">للسحب علي نسخة مجانية</p>

    <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
    </div>

    <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر علي صفحتي فيسبوك  بالتاريخ المذكور</li>
  <li class="list-group-item">ساقوم  ببث  عبارة عن  سؤال وجوب </li>
  <li class="list-group-item">خلال فترة ساعة سيتم فتح صفحة التسجيل هنا</li>
  <li class="list-group-item">بنهاية البث سينم اختيار الربح بطريقة  من قاعدة البيانات </li>
  <li class="list-group-item">>الربح سيحصل علي نسخة مجانية</li>
</ul>-->


<form class="mt_5">
  <h3> الرجا.ادخل معلوماتك</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاول</label>
    <input text ="email" name="irstNamef" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"> <?php  echo $errors['firstNameError'] ?></div>
  </div> 



<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">الاسم الاخير</label>
    <input text ="email"name="lastName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php  echo $errors ['lastNameError'] ?></div>
  </div> 

<div class="mb-3" >

<label for="exampleInputEmail1" class="form-label">البريد الالكتروني</label>
    <input text="email"name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php  echo $errors ['emailNameError'] ?></div>
  </div> 
  <button type="submit" name="submit" class="btn btn_primary">ارسال المعلومان</button>

</form>



  <!-- Content here -->
   
</div>

<!--
    <form action="index.php" method="POST">
<input type="text" name="firstName" id="firstName" placeholder="firstName">
<input type="text" name="lastName" id="astName"placeholder="astName">
<input type="text" name="email" id="email"placeholder="email">
<input type="submit" name="submit" value="send">

</form>
-->
</head>
<body>
<?php  foreach($users as $user): ?>
<h1><?phphtmlspecialchars($user['firstName']).' '.phphtmlspecialchars($user['lastName']).' br '. phphtmlspecialchars($user['lastName']);?></h1>
<?php endforeach;?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="./js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  

   <script src="./js/script.js"></script>
</body>
</html>

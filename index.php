<?php 
include './inc/conn.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

<?php include_once './parts/header.php';  ?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto ">
      <img src="images/aziz-icon.JPEG"  alt="">
      <h1 class="display-4 fw-normal"> اربح مع عبدالعزيز</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h3 id="countdown"></h3>
      <p class="lead fw-normal">للسحب على الربح نسخه مجانيه من البرنامج</p>
      
    </div>
   
    <div class="container">
      <h3>للدخول في السحب يرجى اتباع التالي:</h3>
    <ul class="list-group list-group-flush">
  <li class="list-group-item"> تابع البث المباشر على صفحتي بالتاريخ المذكور اعلاه</li>
  <li class="list-group-item">ساقوم ببث مباشر لمدة نصف ساعة عبارة عن اسئله واجوبه حره للجميع</li>
  <li class="list-group-item">خلال فترةالنصف ساعه سيتم فتح صفحة التسجيل هنا </li>
  <li class="list-group-item">نهاية البث سيتم اختيار اسم واحد بشكل عشوائي</li>
  <li class="list-group-item">الرابح سيحصل على نسخه مجانيه من برنامج كامتازيا</li>
</ul>
    </div>
  </div>
 

<div class="container">
<div class="position-relative  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
    <h3>الرجاء ادخال معلوماتك</h3>
    <div class="mb-3">
    <label for="firstname" class="form-label">الاسم الاول</label>
    <input type="text" name="firstname" id="firstname" class="form-control"  value="<?php echo $firstname ?>" >
    <div  class="form-text error"> <?php echo $errors["firstnameError"] ?> </div>
  </div>

  <div class="mb-3">
    <label for="lastname" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastname" id="lastname" class="form-control"  value="<?php echo $lastname ?>" >
    <div  class="form-text error"><?php echo $errors["lastnameError"] ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">الايميل</label>
    <input type="text" name="email" id="email" class="form-control"  value="<?php echo $email ?>" >
    <div  class="form-text error"><?php echo $errors["emailError"] ?></div>
  </div>

  <button type="submit" name="submit" class="btn btn-primary" id="bu">ارسال المعلومات</button>
</form>
</div>
</div>

<div class= "loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>


<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button id= "winner" type="button" class="btn btn-primary" >
اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقه </h5></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user):?>
        <h1 class=" display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstname']).' '. htmlspecialchars($user['lastname']); ; ?></h1>
        <?php endforeach;?>
      </div>
     
    </div>
  </div>
</div>

<?php include_once './parts/footer.php';  ?>

<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>
<?php include_once './parts/header.php'; ?> 











  
<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <img src="images/camtasia.webp" alt="">
      <h1 class="display-4 fst-italic">اربح مع نور</h1>
      <p class="lead my-3">باقي على فتح التسجيل</p>
      <h3 id="countdown"></h3>
      <h1 class="lead mb-0">للسحب على ربح نسخة مجانية من برنامج</h1>
    </div>  
    
    <div class="container">
     
    <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر على صفحتي على فيسبوك بالتاريخ المذكور أعلاه</li>
  <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن اسئلة وأجوبة حرة للجميع</li>
  <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل إسمك وإيميلك</li>
  <li class="list-group-item">بنهاية البث سيتم إختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
  <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
</ul>
    </div>
      </div>
  


<div class="container">

<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-5 p-0">
<form  action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
  <h3>الرجاء أدخل معلوماتك</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الأول</label>
    <input type="text" name="firstName" class="form-control" id="firstName" value="<?php $firstName ?>">
    <div class="form-text error"><?php echo $errors['firstNameError'];?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الأخير</label>
    <input type="text" name="lastName" class="form-control" id="lastName" value="<?php $lastName ?>" >
    <div class="form-text error"><?php echo $errors['lastNameError']; ?></div>
  </div>
  
  <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php $email ?>">
    <div class="form-text error"><?php echo $errors['emailError']; ?></div>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">إرسال المعلومات</button>
</form>
</div>
      </div>


  


</form>
<div class="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary">
  اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
        <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstname']) . ' '. htmlspecialchars($user['lastname']) ?></h1>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>




      
<?php include_once './parts/footer.php'; ?> 
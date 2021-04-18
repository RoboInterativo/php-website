<?php
?>
<body>
<div class="container">
  <div class="row">
     <div class="col-1">
      
    </div>
    <div class="col-10">
     <div class="tab-content" id="pills-tabContent">
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"  type="button" role="tab" aria-controls="pills-home" aria-selected="true">Форма ввода</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Cписок всех фигур</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">О программе</button>
  </li>
</ul>



<?php
        include("form.php");
        include("mytable.php");
         include("about.php");
?>



     </div>
    </div>
    <div class="col-1">
    </div>
  </div>
</div>


<?php
include("js.php")
?>
</body>

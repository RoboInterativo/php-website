<?php
if(isset($_POST['figure_id']) && $_POST['figure_id'] != ''){
if( $_POST['figure_id']=='circle'){

echo '
<div class="input-group">
  <span class="input-group-text">Центр</span>
   <input type="text" class="form-control" placeholder="X" aria-label="X">
   <input type="text" class="form-control" placeholder="Y" aria-label="Y">
 
</div>

<div class="input-group">
  <span class="input-group-text">Радиус</span>
   <input type="text" class="form-control" aria-label="">
</div>
';
}  elseif (  $_POST['figure_id']=='triangle') {
echo '
<div class="input-group">
  <span class="input-group-text">Точка 1</span>
   <input type="text" class="form-control" placeholder="X" aria-label="X">
   <input type="text" class="form-control" placeholder="Y" aria-label="Y">
 
</div>
<div class="input-group">
<span class="input-group-text">Точка 2</span>
   <input type="text" class="form-control" placeholder="X" aria-label="X">
   <input type="text" class="form-control" placeholder="Y" aria-label="Y">
 
</div>
<div class="input-group">

<span class="input-group-text">Точка 3</span>
   <input type="text" class="form-control" placeholder="X" aria-label="X">
   <input type="text" class="form-control" placeholder="Y" aria-label="Y">
 
</div>


';

}  elseif (  $_POST['figure_id']=='parallelogram') {
echo '
<div class="input-group">
  <span class="input-group-text">Точка 1</span>
   <input type="text" class="form-control" placeholder="X" aria-label="X">
   <input type="text" class="form-control" placeholder="Y" aria-label="Y">
</div>
<div class="input-group">
  <span class="input-group-text">Точка 2</span>
   <input type="text" class="form-control" placeholder="X" aria-label="X">
   <input type="text" class="form-control" placeholder="Y" aria-label="Y">
</div>
<div class="input-group">
  <span class="input-group-text">Точка 3</span>
   <input type="text" class="form-control" placeholder="X" aria-label="X">
   <input type="text" class="form-control" placeholder="Y" aria-label="Y">
 </div>
<div class="input-group">
  <span class="input-group-text">Точка 4</span>
   <input type="text" class="form-control" placeholder="X" aria-label="X">
   <input type="text" class="form-control" placeholder="Y" aria-label="Y">
 </div> 

';
} else {
    echo "Ошибка";
}

}

?>


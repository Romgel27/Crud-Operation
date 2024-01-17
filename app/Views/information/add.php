<?php
$this->extend('layout/index');
$this->section('body');

?>

<h1> Add Information</h1>
<form action="/information/store"method="POST">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">ID</label>
  <input type="text" class="form-control" name="ID" value= "<?= $InfoNumber;?>" disabled>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" class="form-control" name="Name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Birthdate</label>
  <input type="date" class="form-control" name="Birthdate">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Contact No.</label>
  <input type="tel" class="form-control" name="Contact">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Gender</label>
  <input type="text" class="form-control" name="Gender">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>






<?php
$this->endSection();
?>
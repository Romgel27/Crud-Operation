<?php
$this->extend('layout/index');
$this->section('body');

?>

<h1> Edit Information</h1>
<form action="/information/update/<?= $information['Id']; ?>" method="POST">
<div class="mb-3">
  <label for="Id" class="form-label">ID</label>
  <input type="text" class="form-control" name="ID" value="<?= $information ['Id']; ?>"disabled>
</div>
<div class="mb-3">
  <label for="Name" class="form-label">Name</label>
  <input type="text" class="form-control" name="Name" value="<?= $information['name'];?>">
</div>>
<div class="mb-3">
  <label for="Birthdate" class="form-label">Birthdate</label>
  <input type="text" class="form-control" name="Birthdate" value="<?= $information['birthdate'];?>">
</div>
<div class="mb-3">
  <label for="contact" class="form-label">Contact No.</label>
  <input type="text" class="form-control" name="Contact" value="<?= $information['contact'];?>">
</div>
<div class="mb-3">
  <label for="Gender" class="form-label">Gender</label>
  <input type="text" class="form-control" name="Gender" value="<?= $information['gender'];?>">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>






<?php
$this->endSection();
?>
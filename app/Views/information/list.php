<?php
$this->extend('layout/index');
$this->section('body');

?>
<?php
if (session()->getFlashdata('success')):?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= session()->getFlashdata('success')?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif;?>
<h1>Information List</h1>
<a href="/information/create" class="btn btn-primary">Add Information</a>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Birthdate</th>
            <th>Contact No.</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($information as $informations): ?>
            <tr>
                <th scope= "row"><?= $informations ['Id']; ?></th>
                <td><?= $informations['name'];?></td>
                <td><?= $informations['birthdate'];?></td>
                <td><?= $informations['contact'];?></td>
                <td><?= $informations['gender'];?></td>
                <td>
                    <a href="/information/edit/<?= $informations['Id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="/information/delete/<?= $informations['Id']; ?>" class="btn btn-danger">Delete</a>
                </td>

            </tr>
    <?php endforeach; ?>
    </tbody>
</table>



<?php
$this->endSection();
?>
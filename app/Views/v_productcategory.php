<?= $this->extend('layout') ?>
<?= $this->section('content') ?> 

<?php
if (session()->getFlashData('success')) {
?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>
<?php
if (session()->getFlashData('failed')) {
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('failed') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
    Tambah Data
</button>

<!-- Table with stripped rows -->
<table class="table datatable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Kategori</th>
            <th scope="col">Nama Merk</th>
            <th scope="col">Nama Sepatu</th>
        </tr>
    </thead>
    <tbody>
        
        <?php foreach ($productcategory as $index => $productcategory) : ?>
            <tr>
                <th scope="row"><?php echo $index + 1 ?></th>
                <td><?php echo $productcategory['nama_kategori'] ?></td>
                <td><?php echo $productcategory['nama_merk'] ?></td>
                <td><?php echo $productcategory['nama_sepatu'] ?></td>
                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal-<?= $productcategory['id'] ?>">
                        Ubah
                    </button>
                    <a href="<?= base_url('productcategory/delete/' . $productcategory['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus data ini ?')">
                        Hapus
                    </a>
                </td>
            </tr>
            <!-- Edit Modal Begin -->
<div class="modal fade" id="editModal-<?= $productcategory['id'] ?>" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('productcategory/edit/' . $productcategory['id']) ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nama Kategori</label>
                        <input type="text" name="nama_kategori" class="form-control" id="nama_kategori"  placeholder="Nama Kategori" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Merk</label>
                        <input type="text" name="nama_merk" class="form-control" id="nama_merk"  placeholder="Nama Merk" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Sepatu</label>
                        <input type="text" name="nama_sepatu" class="form-control" id="nama_sepatu"  placeholder="Nama Sepatu" required>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit Modal End -->
        <?php endforeach ?>
    </tbody>
</table>
<!-- End Table with stripped rows --> 
 <!-- Add Modal Begin -->
<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('productcategory') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nama Kategori</label>
                        <input type="text" name="nama_kategori" class="form-control" id="nama_kateori"  placeholder="Nama Kategori" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Merk</label>
                        <input type="text" name="nama_merk" class="form-control" id="nama_merk" placeholder="Nama Merk" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Sepatu</label>
                        <input type="text" name="nama_sepatu" class="form-control" id="nama_sepatu"  placeholder="Nama Sepatu" required>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Add Modal End -->
 
<?= $this->endSection() ?>
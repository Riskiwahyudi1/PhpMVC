<div class="container">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title mb-3">Detail mahasiswa</h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['Nama']; ?></h6>
            <p class="card-text"><?= $data['mhs']['Nim']; ?></p>
            <p class="card-text"><?= $data['mhs']['Jurusan']; ?></p>
            <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>

        </div>
    </div>
</div>
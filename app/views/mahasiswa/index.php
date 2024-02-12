<div class="container mt-3">
    <div class="row">
        <?php Flasher::flash(); ?>
    </div>

    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Data Mahasiswa
    </button>
    <div class="row">
        <h3>Daftar Mahasiswa</h3>
        <ul class="list-group">
            <?php 
            foreach($data['mhs'] as $mhs) : ?>
            <li class="list-group-item d-flex justify-content-between align-items-end "><?= $mhs['Nama'];?>
                <div class="countainer">
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['Nim']; ?>" class="badge text-bg-primary ">Detail</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/delete/<?= $mhs['Nim']; ?>" class="badge text-bg-danger ">Delete</a>
                </div>
            </li>
            <?php  endforeach; ?>
        </ul>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="namaMahasiswa" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="namaMahasiswa" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">Nim</label>
                        <input type="number" class="form-control" id="nim" name="nim">
                    </div>
                    <div class="mb-3">
                        <label for="namaMahasiswa" class="form-label">Jurusan</label>
                        <select class="form-select" aria-label="Default select example" name="jurusan">
                            <option selected>Pilih Jurusan</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik multimedia">Teknik Multimedia</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
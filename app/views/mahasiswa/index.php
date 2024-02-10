<div class="container mt-4">
    <div class="row">
        <h3>Daftar Mahasiswa</h3>
        <?php 
        foreach($data['mhs'] as $mhs) : ?>
            <ul>
                <li><?= $mhs['Nama'] ?></li>
                <li><?= $mhs['Nim'] ?></li>
                <li><?= $mhs['Jurusan'] ?></li>
            </ul>
         <?php  endforeach; ?>
    </div>
</div>
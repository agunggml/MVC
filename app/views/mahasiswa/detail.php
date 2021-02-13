<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">Kelas : <?= $data['mhs']['kelas']; ?></h6>
            <p class="lead">"Halo perkenalkan nama saya <?= $data['mhs']['nama']; ?>. Saya berumur <?= $data['mhs']['umur']; ?> Tahun.</p>
            <a href="#" class="btn btn-primary">Kirim Pesan</a>
            <a href="<?= BASEURL ?>mahasiswa" class="btn btn-light">Kembali</a>
        </div>
    </div>
</div>
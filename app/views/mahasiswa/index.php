<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Daftar Mahasiswa</h3>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary my-3 btn-tambah-data" data-bs-toggle="modal" data-bs-target="#formInput">
                    <i class="fas fa-user-plus"></i> Tambah Data
                </button>
            </div>

            <form action="<?= BASEURL; ?>mahasiswa/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Mahasiswa..." autocomplete="off" name="keyword">
                    <button class="btn btn-primary" type="submit" id="btn-search"><i class="fas fa-search"></i></button>
                </div>
            </form>


            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mhs['nama']; ?>
                        <div class="d-flex">
                            <a href="<?= BASEURL ?>mahasiswa/detail/<?= $mhs['id'] ?>" class="text-decoration-none badge bg-primary mx-1"><i class="fas fa-info-circle"></i></a>
                            <a href="<?= BASEURL ?>mahasiswa/edit/<?= $mhs['id'] ?>" class="text-decoration-none badge bg-secondary mx-1 modalEdit" data-bs-toggle="modal" data-bs-target="#formInput" data-id=<?= $mhs['id']; ?>><i class="fas fa-edit"></i></a>
                            <a href="<?= BASEURL ?>mahasiswa/hapus/<?= $mhs['id'] ?>" onclick="confirm('yakin ?')" class="text-decoration-none badge bg-danger mx-1"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formInput" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambahkan Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>mahasiswa/tambah" method="POST">
                    <input type="hidden" name="id" id="id">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2">Nama</span>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Kelas</span>
                        <input type="text" class="form-control" id="kelas" name="kelas" required>
                        <span class="input-group-text">Umur</span>
                        <input type="number" class="form-control" id="umur" name="umur" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
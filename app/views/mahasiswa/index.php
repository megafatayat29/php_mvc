<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>

            <h3>Daftar Mahasiswa</h3>

            <ul class="list-group">
                <?php foreach( $data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="btn btn-primary badge">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama anda">
            </div>

            <div class="mb-3">
                <label for="nrp" class="form-label">NRP</label>
                <input type="number" class="form-control" id="nrp" name="nrp" placeholder="Masukkan NRP anda">
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan NRP anda">
            </div>
                    
            <div class="form-group">
                <label for="jurusan">Jurusan</label>    
                <select class="form-control" id="jurusan" name="jurusan">
                    <option selected>Jurusan</option>
                    <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Mekatronika">Teknik Mekatronika</option>
                    <option value="Teknik Elektronika">Teknik Elektronika</option>
                    <option value="Teknik Elektro Industri">Teknik Elektro Industri</option>
                </select>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
    </div>
  </div>
</div>
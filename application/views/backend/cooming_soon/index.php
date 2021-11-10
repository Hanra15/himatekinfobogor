<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Manajemen Cooming Soon</h1>

    <div class="row mb-4">
        <div class="col-md-4">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#coomingSoonModal"><i class="fas fa-plus"></i> Tambah Data</button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?php if ($this->session->flashdata('flashdata')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?= $this->session->flashdata('flashdata') ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="row text-center align-items-center">
        <div class="col">
            <table class="table table-hover tableCoomingSoon">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kegiatan</th>
                        <th scope="col">Deskripsi Kegiatan</th>
                        <th scope="col">Tema</th>
                        <th scope="col">Tempat</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Flayer</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($cooming_soon as $cs) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $cs['nama_kegiatan']; ?></td>
                            <td><?= $cs['deskripsi_kegiatan'] ?></td>
                            <td><?= $cs['tema_kegiatan']; ?></td>
                            <td><?= $cs['tempat_kegiatan']; ?></td>
                            <td><?= $cs['tanggal_kegiatan']; ?></td>
                            <td><?= $cs['flayer']; ?></td>

                            <?php if ($cs['is_active'] == 1) : ?>
                                <td><a href="<?= base_url() ?>cooming_soon/status_off/<?= $cs['id_cooming_soon'] ?>" class="badge badge-primary">Aktif</a></td>
                            <?php else : ?>
                                <td><a href="<?= base_url() ?>cooming_soon/status_on/<?= $cs['id_cooming_soon'] ?>" class="badge badge-danger">Tidak Aktif</a></td>
                            <?php endif; ?>
                            <td>
                                <a href="" class="badge badge-success tombolEditBarang" data-toggle="modal" data-target="#barangModal"><i class="fas fa-pen-square"></i> Edit</a>
                                <a href="" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data barang ?')"> <i class="fas fa-trash-alt fa-sm"></i> Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="coomingSoonModal" tabindex="-1" aria-labelledby="coomingSoonModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="coomingSoonModalLabel">Form Tambah Data Cooming Soon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Cooming_Soon/tambah" method="post" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" id="id_barang_masuk" name="id_barang_masuk">
                    <div class="form-group">
                        <label for="nama_kegiatan">Judul</label>
                        <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_kegiatan">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi_kegiatan" name="deskripsi_kegiatan" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tema_kegiatan">Tema</label>
                        <input type="text" class="form-control" id="tema_kegiatan" name="tema_kegiatan">
                    </div>
                    <div class="form-group">
                        <label for="tempat_kegiatan">Tempat</label>
                        <input type="text" class="form-control" id="tempat_kegiatan" name="tempat_kegiatan">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kegiatan">Tanggal</label>
                        <input type="text" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan">
                    </div>

                    <div class="form-group">
                        <label for="flayer">Poster</label>
                        <input type="file" class="form-control" id="flayer" name="flayer">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('.tableCoomingSoon').DataTable();
    });
</script>
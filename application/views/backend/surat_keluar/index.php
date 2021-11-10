<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">List Surat Keluar</h1>

    <div class="row mb-4">
        <div class="col-md-4">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#suratKeluarModal"><i class="fas fa-plus"></i> Tambah Data Surat Keluar</button>
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
    <div class="row text-center">
        <div class="col">
            <table class="table table-hover tableSuratKeluar">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Kode Surat</th>
                        <th scope="col">Perihal</th>
                        <th scope="col">Alamat Tujuan</th>
                        <th scope="col">Catatan</th>
                        <th scope="col">File Surat Keluar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($surat_keluar as $sk) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $sk['tanggal_keluar']; ?></td>
                            <td><?= $sk['kode_surat_keluar'] ?></td>
                            <td><?= $sk['perihal']; ?></td>
                            <td><?= $sk['tujuan_surat']; ?></td>
                            <td><?= $sk['catatan']; ?></td>
                            <td>File Surat Keluar</td>
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
<div class="modal fade" id="suratKeluarModal" tabindex="-1" aria-labelledby="suratKeluarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="suratKeluarModalLabel">Form Tambah Surat Keluar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>surat_keluar/tambah" method="post" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" id="id_barang_masuk" name="id_barang_masuk">
                    <div class="form-group">
                        <label for="tanggal_keluar">Tanggal surat keluar</label>
                        <input type="date" class="form-control" id="tanggal_keluar" name="tanggal_keluar">
                    </div>
                    <div class="form-group">
                        <label for="kode_surat_keluar">Kode surat keluar</label>
                        <input type="text" class="form-control" id="kode_surat_keluar" name="kode_surat_keluar">
                    </div>
                    <div class="form-group">
                        <label for="tujuan_surat">Tujuan surat</label>
                        <input type="text" class="form-control" id="tujuan_surat" name="tujuan_surat">
                    </div>
                    <div class="form-group">
                        <label for="perihal">Perihal</label>
                        <input type="text" class="form-control" id="perihal" name="perihal">
                    </div>
                    <div class="form-group">
                        <label for="catatan">Catatan</label>
                        <textarea class="form-control" id="catatan" name="catatan" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="file_surat_keluar">File surat keluar</label>
                        <input type="file" class="form-control" id="file_surat_keluar" name="file_surat_keluar">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah Surat Keluar</button>
            </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('.tableSuratKeluar').DataTable();
    });
</script>
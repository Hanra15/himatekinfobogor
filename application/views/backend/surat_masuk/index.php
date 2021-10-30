<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">List Surat Masuk</h1>

    <div class="row mb-4">
        <div class="col-md-4">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#suratMasukModal"><i class="fas fa-plus"></i> Tambah Data Surat Masuk</button>
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
    <div class="row">
        <div class="col">
            <table class="table table-hover tableSuratMasuk">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal Masuk Surat</th>
                        <th scope="col">Kode Surat</th>
                        <th scope="col">Asal Surat</th>
                        <th scope="col">Tujuan surat</th>
                        <th scope="col">File Surat Masuk</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($surat_masuk as $sm) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $sm['tanggal_masuk']; ?></td>
                            <td><?= $sm['kode_surat_masuk'] ?></td>
                            <td><?= $sm['asal_surat']; ?></td>
                            <td><?= $sm['tujuan_surat']; ?></td>
                            <td>File Surat Masuk</td>
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
<div class="modal fade" id="suratMasukModal" tabindex="-1" aria-labelledby="suratMasukModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="suratMasukModalLabel">Form Tambah Surat Masuk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>surat_masuk/tambah" method="post" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" id="id_barang_masuk" name="id_barang_masuk">
                    <div class="form-group">
                        <label for="tanggal_masuk">Tanggal masuk surat</label>
                        <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk">
                    </div>
                    <div class="form-group">
                        <label for="kode_surat_masuk">Kode surat masuk</label>
                        <input type="text" class="form-control" id="kode_surat_masuk" name="kode_surat_masuk">
                    </div>
                    <div class="form-group">
                        <label for="asal_surat">Asal surat</label>
                        <input type="text" class="form-control" id="asal_surat" name="asal_surat">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_acara">Tanggal kegiatan</label>
                        <input type="text" class="form-control" id="tanggal_acara" name="tanggal_acara">
                    </div>
                    <div class="form-group">
                        <label for="tujuan_surat">Tujuan surat</label>
                        <textarea class="form-control" id="tujuan_surat" name="tujuan_surat" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="file_surat_masuk">File surat masuk</label>
                        <input type="file" class="form-control" id="file_surat_masuk" name="file_surat_masuk">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah Surat Masuk</button>
            </div>
            </form>
        </div>
    </div>
</div>


<script src="">
    $(document).ready(function() {
        $('.tableSuratMasuk').DataTable();
    });
</script>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Manajemen Slider</h1>

    <div class="row mb-4">
        <div class="col-md-4">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sliderModal"><i class="fas fa-plus"></i> Tambah Data</button>
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
            <table class="table table-hover tableSlider">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Text</th>
                        <th scope="col">Slider</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($slider as $sl) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $sl['judul_slider']; ?></td>
                            <td><?= $sl['text'] ?></td>
                            <td><img src="<?= base_url() ?>assets/slider/<?= $sl['slider'] ?>" width="150px" alt=""></td>

                            <?php if ($sl['is_active'] == 1) : ?>
                                <td><a href="<?= base_url() ?>slider/status_off/<?= $sl['id_slider'] ?>" class="badge badge-primary">Aktif</a></td>
                            <?php else : ?>
                                <td><a href="<?= base_url() ?>slider/status_on/<?= $sl['id_slider'] ?>" class="badge badge-danger">Tidak Aktif</a></td>
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
<div class="modal fade" id="sliderModal" tabindex="-1" aria-labelledby="sliderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sliderModalLabel">Form Tambah Data Slider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Slider/tambah" method="post" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" id="id_barang_masuk" name="id_barang_masuk">
                    <div class="form-group">
                        <label for="judul_slider">Judul</label>
                        <input type="text" class="form-control" id="judul_slider" name="judul_slider">
                    </div>

                    <div class="form-group">
                        <label for="text">Deskripsi</label>
                        <textarea class="form-control" id="text" name="text" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="slider">Gambar</label>
                        <input type="file" class="form-control" id="slider" name="slider">
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
        $('.tableSlider').DataTable();
    });
</script>
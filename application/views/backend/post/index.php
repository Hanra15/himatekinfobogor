<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Manajemen Post</h1>

    <div class="row mb-4">
        <div class="col-md-4">
            <a href="<?= base_url() ?>post/tambah" type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
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
            <table class="table table-hover tablePost">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($post as $ps) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $ps['judul_post']; ?></td>
                            <td><button data-toggle="modal" data-target="#detailDeskripsiModal" data-deskripsi="<?= $ps['deskripsi_post'] ?>" class="btn btn-info btn-sm btnDeskripsi">Deskripsi</button></td>
                            <td><?= $ps['tanggal_post']; ?></td>
                            <td><?= $ps['penulis']; ?></td>
                            <td><img src="<?= base_url() ?>assets/post/<?= $ps['foto_post'] ?>" width="150px" alt=""></td>

                            <?php if ($ps['is_active'] == 1) : ?>
                                <td><a href="<?= base_url() ?>post/status_off/<?= $ps['id_post'] ?>" class="badge badge-primary">Aktif</a></td>
                            <?php else : ?>
                                <td><a href="<?= base_url() ?>post/status_on/<?= $ps['id_post'] ?>" class="badge badge-danger">Tidak Aktif</a></td>
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
<div class="modal fade" id="detailDeskripsiModal" tabindex="-1" aria-labelledby="detailDeskripsiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailDeskripsiModalLabel">Deskripsi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <p id="p-deskripsi"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('.tablePost').DataTable();
    });
</script>

<script>
    $('.btnDeskripsi').on('click', function(){
        console.log('ok');
        let desk = $(this).data('deskripsi');

        $('#p-deskripsi').text('');
        $('#p-deskripsi').text(desk);

    })
</script>
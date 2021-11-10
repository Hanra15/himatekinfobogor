<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Rekap Proposal Keluar</h1>

    <div class="row mb-4">
        <div class="col-md-4">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#proposalKeluarModal"><i class="fas fa-plus"></i> Tambah Data</button>
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
            <table class="table table-hover tableProposalKeluar">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Proposal</th>
                        <th scope="col">Tanggal Upload</th>
                        <th scope="col">File Proposal</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($proposal_keluar as $pk) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $pk['nama_proposal']; ?></td>
                            <td><?= $pk['tanggal_upload'] ?></td>
                            <td><a href="<?= base_url() ?>assets/proposal_keluar/<?= $pk['file_proposal'] ?>" class="btn btn-info" download type="button"><i class="fa fa-file-alt"></i></a></td>
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
<div class="modal fade" id="proposalKeluarModal" tabindex="-1" aria-labelledby="proposalKeluarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="proposalKeluarModalLabel">Form Tambah Data Proposal Keluar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Proposal_Keluar/tambah" method="post" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" id="id_barang_masuk" name="id_barang_masuk">
                    <div class="form-group">
                        <label for="nama_proposal">Nama Proposal</label>
                        <input type="text" class="form-control" id="nama_proposal" name="nama_proposal">
                    </div>

                    <div class="form-group">
                        <label for="file_proposal">File Proposal</label>
                        <input type="file" class="form-control" id="file_proposal" name="file_proposal">
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
        $('.tableProposalKeluar').DataTable();
    });
</script>
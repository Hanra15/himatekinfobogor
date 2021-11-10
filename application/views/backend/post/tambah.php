<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Form tambah post</h1>



    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="judul_post">Judul</label>
                    <input type="text" class="form-control" id="judul_post" name="judul_post">
                </div>

                <div class="form-group">
                    <label for="tanggal_post">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal_post" name="tanggal_post">
                </div>

                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis">
                </div>

                <div class="form-group">
                    <label for="foto_post">Post</label>
                    <input type="file" class="form-control" id="foto_post" name="foto_post">
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    <label for="deskripsi_post">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi_post" name="deskripsi_post" rows="14"></textarea>
                </div>
            </div>
        </div>

        <div class="row text-right">
            <div class="col">
                <button type="submit" class="btn btn-primary mb-2"> Tambah</button>
            </div>
        </div>
    </form>
</div>
</div>
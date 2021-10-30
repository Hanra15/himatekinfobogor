
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <img src="<?= base_url('assets/img/') ?>logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-5">
                <div class="row align-items-center">
                    <h1>Selamat datang</h1>
                    <div class="col-md-8">
                        <form action="<?= base_url('Auth') ?>" method="POST">
                            <div class="form-group">
                                <label for="email_user">Email</label>
                                <input type="text" name="email_user" class="form-control" id="email_user">
                            </div>
                            <div class="form-group">
                                <label for="password_user">Password</label>
                                <input type="password" name="password_user" class="form-control" id="password_user">
                            </div>
                            <button type="submit" name="btn_login" id="btn_login" class="btn btn-primary float-right">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

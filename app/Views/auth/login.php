<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Login Admin</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <?php
            if (!empty(session()->getFlashdata('success'))) { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('success'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>
            <?php
            if (!empty(session()->getFlashdata('gagal'))) { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('gagal'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>
            <?= form_open('loginadmin/login') ?>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <?= form_close(); ?>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
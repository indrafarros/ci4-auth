<?= $this->extend('auth/layouts/index') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <?= view('Myth\Auth\Views\_message_block') ?>
                                <form action="<?= route_to('register') ?>" method="post" class="user">
                                    <?= csrf_field() ?>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" name="first_name" class="form-control form-control-user <?php if (session('errors.first_name')) : ?>is-invalid<?php endif ?>" id="first_name" placeholder="First Name" value="<?= old('first_name') ?>">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="last_name" class="form-control form-control-user <?php if (session('errors.last_name')) : ?>is-invalid<?php endif ?>" id="last_name" placeholder="Last Name" value="<?= old('last_name') ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user<?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user<?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">

                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" name="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" name="pass_confirm" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </button>
                                    <hr>
                                    <a href="index.html" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Register with Google
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= route_to('login') ?>">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>
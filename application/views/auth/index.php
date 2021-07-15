<div class="limiter">
    <div class="container-login100" style="background-image: url(assets/images/bg-01.jpg);">
        <div class="wrap-login100 p-t-30 p-b-50">
            <span class="login100-form-title p-b-41">
                Login
            </span>
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('auth'); ?>" method="post" class="login100-form validate-form p-b-33 p-t-5">

                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input class="input100" type="text" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                </div>
                <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" id="password" name="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                <div class="container-login100-form-btn m-t-32">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>
            </form>
            <p class="text-center mt-3">
                <a href="<?php echo base_url('auth/registration'); ?>">don't have an account? Sign Up</a>
            </p>
        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>
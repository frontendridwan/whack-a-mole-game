<div class="limiter">
    <div class="container-login100" style="background-image: url(../assets/images/bg-01.jpg);">
        <div class="wrap-login100 p-t-30 p-b-50">
            <span class="login100-form-title p-b-41">
                Create Account
            </span>
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('auth/registration'); ?>" method="post" class="login100-form validate-form p-b-33 p-t-5">

                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input class="input100" type="username" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                </div>
                <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" id="password1" name="password1" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>
                <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" id="password2" name="password2" placeholder="Repeat Password">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>
                <div class="container-login100-form-btn m-t-32">
                    <button class="login100-form-btn">
                        Create Account
                    </button>
                </div>
            </form>
            <p class="text-center mt-3">
                <a href="<?php echo base_url('auth'); ?>">Have an account? Sign In</a>
            </p>
        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>
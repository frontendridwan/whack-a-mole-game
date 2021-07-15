<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Whace A Mole</b> GAME</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start game</p>

      <?= $this->session->flashdata('message'); ?>

      <form action="<?= base_url('auth'); ?>" method="post">
        <div class="input-group">
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
        <div class="input-group mt-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
        <div class="input-group mt-3">
          <div class="row">
            <div class="col">
              <span><?= $var_captcha; ?></span>
            </div>
            <div class="col">
              <div class="input-group-append">
                <div class="input-group-text" style="border: none;">
                  <a href="#" class="mt-1" onclick="parent.window.location.reload(true)"><i class="fas fa-redo-alt"></i> reload</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="input-group mt-3">
              <input type="text" class="form-control" id="captcha" name="captcha" placeholder="Captcha">
              <div class="input-group-append">
                <div class="input-group-text">
                </div>
              </div>
            </div>
            <?= form_error('captcha', '<small class="text-danger">', '</small>'); ?>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
      </form>

      <p class="mb-0 mt-3">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
  </div>
</div>
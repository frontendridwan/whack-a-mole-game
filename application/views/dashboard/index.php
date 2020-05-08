<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pukul Tikus Tanah</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

</head>

<body class="body">

    <form action="<?= base_url('dashboard/highscore/') . $user['id']; ?>" class="mt-3" method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <label class="col-sm-12 col-form-label">
                <h1>Whack-a-mole! <span class="papan-skor" id="highscore" name="highscore"> 0 </span><button type="submit" class="btn btn-light">Save!</button></h1>

            </label>
            <input type="hidden" class="form-control-plaintext mt-2" id="cobavalue" name="cobavalue" value="0">
            <input type="hidden" class="form-control-plaintext mt-2" id="hs" name="hs" value="<?= $user['highscore']; ?>">
        </div>
        <div class="form-group row" align="center">
            <label class="col-sm col-form-label">
                <h6>Countdown : <span id="timer"></span> sekon</h6>
            </label>
        </div>
    </form>

    <button type="submit" class="btn btn-dark" id="mulai" onclick="mulai()">Mulai!</button>

    <!-- </div> -->
    <div class="" align="center">
        <div class="col-8">
            <div class="row">
                <div class="col-lg">
                    <div class="tanah">
                        <div class="tikus"></div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="tanah">
                        <div class="tikus"></div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="tanah">
                        <div class="tikus"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <div class="tanah">
                        <div class="tikus"></div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="tanah">
                        <div class="tikus"></div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="tanah">
                        <div class="tikus"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="container" align="center">
        <div class="col-6">
            <table class="table table-bordered table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Highscore</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($highscore as $hs) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $hs['username']; ?></td>
                            <td><?= $hs['highscore']; ?></td>
                        </tr>
                    <?php $i++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
        <a href="<?= base_url('auth/logout'); ?>" class="btn btn-danger mb-3 mt-3"><i class="fas fa-cloud-upload-alt">&nbsp&nbsp</i>Logout</a>
    </div>

    <audio src="<?php echo base_url(); ?>assets/audio/Pop.mp3" id="pop"></audio>
    <script src="<?php echo base_url(); ?>assets/js/script.js"></script>
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

</body>

</html>
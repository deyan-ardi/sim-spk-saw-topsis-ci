<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <title>SPK - PEMILIHAN KOSENTRASI</title>
  </head>
  <body>
  <main>
  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Selamat Datang Sahabat PTI :D</h1>
        <p class="col-lg-10 fs-4">Sistem ini dapat membantu anda yang berada di semester peralihan (dari 5 ke 6) dalam menetukan konsentrasi mata kuliah mana yang sangat cocok dengan anda.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light" action="" method="post">
            <?php if ( validation_errors()) :?>
                <div class="alert alert-danger" role="alert">
                    <?=validation_errors();?>
                </div>
            <?php endif;?>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Ida Bagus Made Yudha Wirawan" name="nama">
            <label for="floatingInput">Masukan Nama Lengkap</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPassword" placeholder="1815051012" name="nim">
            <label for="floatingPassword">Masukan NIM</label>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="status" name="status"> Anda belum wisuda
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit" name="lanjut">LANJUT</button>
          <hr class="my-4">
          <small class="text-muted">Dengan menekan tombol lanjut, itu tandanya anda belum wisuda.</small>
        </form>
      </div>
    </div>
  </div>
</main>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
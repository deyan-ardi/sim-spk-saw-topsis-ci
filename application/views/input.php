<!--
SC          :   EBPS,   FKS,    GPS,    KDS,    SAS,    TATLS,  NPC
RPL         :   EBPR,   FKR,    GPR,    KDR,    SAR,    TATLR,  NPW
Jarkom      :   EBPJ,   FKJ,    GPJ,    KDJ,    SAJ,    TATLJ,  NJK
Multimedia  :   EBPM,   FKM,    GPM,    KDM,    SAM,    TATLM,  NML  
-->


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
  
  <div class="col-xl-12 col-xxl-12 px-1 py-5">
  <h1 class="display-4 fw-bold lh-1 mb-3 text-center">MENU INPUT DATA</h1>
  <p class="col-lg-12 fs-4 text-center">Halo <?=urldecode($nama);?> (NIM.<?=urldecode($nim);?>), silahkan menginputkan data yang valid.</p>
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-md-12 mx-auto col-lg-12">
        <?php if ( validation_errors()) :?>
            <div class="alert alert-danger text-center" role="alert">
                <p>Pastikan anda telah mengisi seluruh form dengan valid, Harap melakukan Input Data Kembali!</p>
                 <!--<?=validation_errors();?> -->
            </div>
        <?php endif;?>
        <form class="row p-2 p-md-4 border rounded-3 bg-light" action="" method="post">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header text-center fw-bold">
                        SISTEM CERDAS
                    </div>
                    <div class="card-body">
                        <h6 class="lh-1 mb-3 mt-3">Estimasi Biaya Pengadaan</h6><hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="EBPS" id="EBPS" value="1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="EBPS" id="EBPS" value="2">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="EBPS" id="EBPS" value="3">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="EBPS" id="EBPS" value="4">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="EBPS" id="EBPS" value="5">
                            <label class="form-check-label">5</label>
                        </div>
                        <h6 class="lh-1 mb-3 mt-3">Fasilitas Kampus</h6><hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="FKS" id="FKS" value="1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="FKS" id="FKS" value="2">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="FKS" id="FKS" value="3">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="FKS" id="FKS" value="4">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="FKS" id="FKS" value="5">
                            <label class="form-check-label">5</label>
                        </div>
                        <h6 class="lh-1 mb-3 mt-3">Gambaran Perkuliahan</h6><hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GPS" id="GPS" value="1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GPS" id="GPS" value="2">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GPS" id="GPS" value="3">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GPS" id="GPS" value="4">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GPS" id="GPS" value="5">
                            <label class="form-check-label">5</label>
                        </div>
                        <h6 class="lh-1 mb-3 mt-3">Ketegasan Dosen</h6><hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="KDS" id="KDS" value="1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="KDS" id="KDS" value="2">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="KDS" id="KDS" value="3">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="KDS" id="KDS" value="4">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="KDS" id="KDS" value="5">
                            <label class="form-check-label">5</label>
                        </div>
                        <h6 class="lh-1 mb-3 mt-3">Saran Alumni</h6><hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SAS" id="SAS" value="1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SAS" id="SAS" value="2">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SAS" id="SAS" value="3">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SAS" id="SAS" value="4">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SAS" id="SAS" value="5">
                            <label class="form-check-label">5</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="NPC" placeholder="1815051012" name="NPC">
                            <label for="NPC">Nilai Pengolahan Citra Digital</label>
                        </div>
                        <input type="hidden" class="form-control" id="nama" name="nama" value="<?=urldecode($nama);?>">
                        <input type="hidden" class="form-control" id="nim" name="nim" value="<?=urldecode($nim);?>">
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header text-center fw-bold">
                        REKAYASA PERANGKAT LUNAK
                    </div>
                    <div class="card-body">
                        <h6 class="lh-1 mb-3 mt-3">Estimasi Biaya Pengadaan</h6><hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="EBPR" id="EBPR" value="1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="EBPR" id="EBPR" value="2">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="EBPR" id="EBPR" value="3">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="EBPR" id="EBPR" value="4">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="EBPR" id="EBPR" value="5">
                            <label class="form-check-label">5</label>
                        </div>
                        <h6 class="lh-1 mb-3 mt-3">Fasilitas Kampus</h6><hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="FKR" id="FKR" value="1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="FKR" id="FKR" value="2">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="FKR" id="FKR" value="3">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="FKR" id="FKR" value="4">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="FKR" id="FKR" value="5">
                            <label class="form-check-label">5</label>
                        </div>
                        <h6 class="lh-1 mb-3 mt-3">Gambaran Perkuliahan</h6><hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GPR" id="GPR" value="1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GPR" id="GPR" value="2">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GPR" id="GPR" value="3">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GPR" id="GPR" value="4">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GPR" id="GPR" value="5">
                            <label class="form-check-label">5</label>
                        </div>
                        <h6 class="lh-1 mb-3 mt-3">Ketegasan Dosen</h6><hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="KDR" id="KDR" value="1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="KDR" id="KDR" value="2">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="KDR" id="KDR" value="3">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="KDR" id="KDR" value="4">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="KDR" id="KDR" value="5">
                            <label class="form-check-label">5</label>
                        </div>
                        <h6 class="lh-1 mb-3 mt-3">Saran Alumni</h6><hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SAR" id="SAR" value="1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SAR" id="SAR" value="2">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SAR" id="SAR" value="3">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SAR" id="SAR" value="4">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SAR" id="SAR" value="5">
                            <label class="form-check-label">5</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="NPW" placeholder="1815051012" name="NPW">
                            <label for="NPW">Nilai Pemrograman Web Lanjut</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header text-center fw-bold">
                        JARINGAN KOMPUTER
                    </div>
                    <div class="card-body">
                        <h6 class="lh-1 mb-3 mt-3">Estimasi Biaya Pengadaan</h6><hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="EBPJ" id="EBPJ" value="1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="EBPJ" id="EBPJ" value="2">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="EBPJ" id="EBPJ" value="3">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="EBPJ" id="EBPJ" value="4">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="EBPJ" id="EBPJ" value="5">
                            <label class="form-check-label">5</label>
                        </div>
                        <h6 class="lh-1 mb-3 mt-3">Fasilitas Kampus</h6><hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="FKJ" id="FKJ" value="1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="FKJ" id="FKJ" value="2">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="FKJ" id="FKJ" value="3">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="FKJ" id="FKJ" value="4">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="FKJ" id="FKJ" value="5">
                            <label class="form-check-label">5</label>
                        </div>
                        <h6 class="lh-1 mb-3 mt-3">Gambaran Perkuliahan</h6><hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GPJ" id="GPJ" value="1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GPJ" id="GPJ" value="2">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GPJ" id="GPJ" value="3">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GPJ" id="GPJ" value="4">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GPJ" id="GPJ" value="5">
                            <label class="form-check-label">5</label>
                        </div>
                        <h6 class="lh-1 mb-3 mt-3">Ketegasan Dosen</h6><hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="KDJ" id="KDJ" value="1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="KDJ" id="KDJ" value="2">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="KDJ" id="KDJ" value="3">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="KDJ" id="KDJ" value="4">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="KDJ" id="KDJ" value="5">
                            <label class="form-check-label">5</label>
                        </div>
                        <h6 class="lh-1 mb-3 mt-3">Saran Alumni</h6><hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SAJ" id="SAJ" value="1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SAJ" id="SAJ" value="2">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SAJ" id="SAJ" value="3">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SAJ" id="SAJ" value="4">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SAJ" id="SAJ" value="5">
                            <label class="form-check-label">5</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="NJK" placeholder="1815051012" name="NJK">
                            <label for="NJK">Nilai Jaringan Komputer Lanjut</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header text-center fw-bold">
                        MULTIMEDIA
                    </div>
                    <div class="card-body">
                        <h6 class="lh-1 mb-3 mt-3">Estimasi Biaya Pengadaan</h6><hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="EBPM" id="EBPM" value="1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="EBPM" id="EBPM" value="2">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="EBPM" id="EBPM" value="3">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="EBPM" id="EBPM" value="4">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="EBPM" id="EBPM" value="5">
                            <label class="form-check-label">5</label>
                        </div>
                        <h6 class="lh-1 mb-3 mt-3">Fasilitas Kampus</h6><hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="FKM" id="FKM" value="1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="FKM" id="FKM" value="2">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="FKM" id="FKM" value="3">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="FKM" id="FKM" value="4">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="FKM" id="FKM" value="5">
                            <label class="form-check-label">5</label>
                        </div>
                        <h6 class="lh-1 mb-3 mt-3">Gambaran Perkuliahan</h6><hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GPM" id="GPM" value="1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GPM" id="GPM" value="2">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GPM" id="GPM" value="3">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GPM" id="GPM" value="4">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GPM" id="GPM" value="5">
                            <label class="form-check-label">5</label>
                        </div>
                        <h6 class="lh-1 mb-3 mt-3">Ketegasan Dosen</h6><hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="KDM" id="KDM" value="1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="KDM" id="KDM" value="2">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="KDM" id="KDM" value="3">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="KDM" id="KDM" value="4">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="KDM" id="KDM" value="5">
                            <label class="form-check-label">5</label>
                        </div>
                        <h6 class="lh-1 mb-3 mt-3">Saran Alumni</h6><hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SAM" id="SAM" value="1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SAM" id="SAM" value="2">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SAM" id="SAM" value="3">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SAM" id="SAM" value="4">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SAM" id="SAM" value="5">
                            <label class="form-check-label">5</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="NML" placeholder="1815051012" name="NML">
                            <label for="NML">Nilai Multimedia Lanjut</label>
                        </div>
                    </div>
                </div>
            </div>
            
          <button class="w-100 btn btn-lg btn-primary" type="submit" nama="proses">PROSES</button>
          <hr class="my-4">
          <small class="text-muted">Dengan menekan tombol proses, itu tandanya anda memang belum wisuda.</small>
        </form>
      </div>
    </div>
  </div>
</main>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>



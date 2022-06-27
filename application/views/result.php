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
    <!-- <?=$EBPS;?>
    <?=$FKS;?>
    <?=$GPS;?>
    <?=$KDS;?>
    <?=$SAS;?>
    <?=$NPC;?>
    <?=$EBPR;?>
    <?=$FKR;?>
    <?=$GPR;?>
    <?=$KDR;?>
    <?=$SAR;?>
    <?=$NPW;?>
    <?=$EBPJ;?>
    <?=$FKJ;?>
    <?=$GPJ;?>
    <?=$KDJ;?>
    <?=$SAJ;?>
    <?=$NJK;?>
    <?=$EBPM;?>
    <?=$FKM;?>
    <?=$GPM;?>
    <?=$KDM;?>
    <?=$SAM;?>
    <?=$NML;?> 
    <?=$nama;?> 
    <?=$nim;?>   -->
  <main>
  
  <div class="container col-xl-12 col-xxl-12 px-1 py-5">
    <h1 class="display-4 fw-bold lh-1 mb-3 text-center">HASIL PENGAMBILAN KEPUTUSAN</h1>
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-md-12 mx-auto col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card text-center">
                        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.sSVEMKoWH5cHliaVDBHHDQHaEK%26pid%3DApi&f=1" style="height: 18rem;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">METODE TOPSIS</h5>
                            <p class="card-text">Menyatakan <?=urldecode($nama);?> (NIM.<?=urldecode($nim);?>) dengan poin score (<?=$indexTOPSIS;?>), Anda lebih cocok memilih konsentrasi <b><?=$hasilTOPSIS;?></b>.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card text-center">
                        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.collectabox.com%2Fwp-content%2Fuploads%2F2019%2F01%2FMortal-Kombat-11.jpg&f=1&nofb=1" style="height: 18rem;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">METODE SAW</h5>
                            <p class="card-text">Menyatakan <?=urldecode($nama);?> (NIM.<?=urldecode($nim);?>)dengan poin score (<?=$indexSAW;?>), Anda lebih cocok memilih konsentrasi <b><?=$hasilSAW;?></b>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
  </div>
</main>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>



<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view("includes/head"); ?>
    <title>Anasayfa</title>
</head>
<body>

    <?php $this->load->view("includes/navbar_girissiz");?>

    <!-- header start-->
    <header id="headerSection" class="py-0">
        <div class="overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h1 class="silogan display-4"><span> Öğrenci </span> için en iyisi</h1>

                    </div>
                </div>

                <div class="row">
                    <div class="col ">
                        <button class="btn btn-outline-light " type="submit">Ev arkadaşı bul</button>
                        <button class="btn btn-light" type="submit">Ev bul</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-10 ">
                        <input type="text" class="form-control-lg form-control  " placeholder="Ev veya ev arkadaşı arayın">

                    </div>
                    <div class="col col-md-2 btn-group ">

                        <button class="btn btn-light btn-lg btn-block " >Ara</button>

                    </div>
                </div>


            </div>
        </div>
    </header>
    <!-- header end-->

    <section id="ilanlar" class="mt-5">
        <?php

        for ($x = 0; $x <= 10; $x++) { ?>
            <div class="container ">
                <div class="card text-left ">
                    <div class="row ">
                        <div class="col-md-3 resim">
                            <img src="<?php echo base_url() ?>assets/images/arkaplan1.jpg" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">İlan Başlığı</h5>
                                <p>adres</p>

                                <p class="card-text">fiyat - ilan tarihi - adres - oda sayısı-</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>


        <footer>
        <?php $this->load->view("includes/footer");?>
    </footer>
</body>
</html>
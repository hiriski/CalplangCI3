<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

   
<div id="header-holder" class="innerpage about lighter">

    <div id="top-content" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title">
                    <?php if ($page->title_active == 1): ?>
                        <h1 class="pageTitle"><?php echo html_escape($page->title); ?></h1>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<div id="jajaran-direksi" class="features container-fluid">
    <div class="container">
        <div class="row">
            <div class="main-heading"><h2><img src="<?php echo base_url();?>assets/images/logo-small.png">Jajaran Direksi</h2></div>
            
            <div class="container">
                <div class="jajaran">
                    <div class="col-sm-5 section-jajaran">
                        <div class="img-holder">
                            <img src="<?php echo base_url();?>assets/images/new/ridho.jpg" alt="">
                        </div>
                    </div>
                <div class="col-sm-7 def-aligned">
                    <div class="feature-info">
                        <div class="feature-title">Muhammad Ridho Zulfadlin</div>
                            <div class="name">Direktur Utama</div>
                            <div class="feature-text desc">
                                Lahir pada 15 Juli 1989. Berdomisili di Banjarmasin, Indonesia. Lulus dari Al-Zaytun International School & University dan berhasil mengembangkan berbagai bisnis di Indonesia. Menjabat sebagai Direktur Utama PT. Caplang Energi Sejahtera sejak 2019 dan saat ini masih menjabat sebagai Penasehat Direktur PT. Giri Jaladhi Wana.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="jajaran">
                    <div class="col-sm-5 section-jajaran">
                        <div class="img-holder">
                            <img src="<?php echo base_url();?>assets/images/new/khairul.jpg" alt="">
                        </div>
                    </div>
                <div class="col-sm-7 def-aligned">
                    <div class="feature-info">
                            <div class="feature-title">Khairul Anshari</div>
                            <div class="name">Direktur</div>
                            <div class="feature-text desc">
                                Lahir pada 13 November 1988. Berdomisili di Banjarmasin, Indonesia. Lulus dari Universitas Lambung Mangkurat, pakar sistem transportasi moda darat dan laut serta berhasil mengembangkan berbagai bisnis di Indonesia. Menjabat sebagai Direktur PT. Caplang Energi Sejahtera sejak 2019 dan saat ini masih menjabat sebagai Direktur PT. Baramega Indonesia Suryaalam.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

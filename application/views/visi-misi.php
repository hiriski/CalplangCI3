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



<div id="visi-misi" class="sub-pricing container-fluid">
    <div class="container pull-top">
        <div class="pricing-holder">
            <div class="row">

            <div class="main-heading"><h2><img src="<?php echo base_url();?>assets/images/logo-small.png">Visi &amp; Misi</h2></div>

                <div class="col-sm-12 col-md-6">
                    <div class="pricing-box inner visi">
                        <div class="pricing-title">VISI</div>
                        <div class="pricing-price">
                        </div>
                        <div class="c">
                            <p>Untuk menjadi perusahaan perdagangan kelas dunia</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="pricing-box inner misi">
                        <div class="pricing-title">MISI</div>
                        <div class="pricing-price">
                        </div>
                        <div class="c">
                        <ol>
                            <li>Memperkuat kenaikan pangsa pasar dengan layanan solusi total.</li>
                            <li>Meningkatkan efisiensi perusahaan di semua lini.</li>
                            <li>Untuk meningkatkan kesejahteraan karyawan.</li>
                            <li>Memperoleh kebebasan finansial dalam mendukung semua kegiatan perusahaan dan investasi</li>
                            <li>Meningkatkan pencapaian laba perusahaan</li>
                        </ol>
                        </div>
                    </div>
                </div>

             
            </div>
        </div>
    </div>
</div>

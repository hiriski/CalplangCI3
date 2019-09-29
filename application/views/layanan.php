<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

   
<div id="header-holder" class="innerpage services lighter">

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

<div class="support-links">
<div class="container">
<div class="services">

<div class="main-heading"><h2><img src="<?php echo base_url();?>assets/images/logo-small.png">Layanan</h2></div>

    <div class="row">
        <div class="col-sm-12 hylink-holder">
            <div class="service-item">
                <div class="hylink-box">
                    <div class="icon"><img src="<?php echo base_url();?>assets/images/logo.png" alt=""></div>
                    <a href="<?php echo base_url();?>layanan" class="link">1. Locco</a>
                    <div class="text">Titik transfer Bahan Bakar Minyak di Depot Mitra.</div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 hylink-holder">
            <div class="service-item">
                <div class="hylink-box">
                    <div class="icon"><img src="<?php echo base_url();?>assets/images/logo.png" alt=""></div>
                    <a href="<?php echo base_url();?>/layanan" class="link">2. Franco</a>
                    <div class="text">Mengangkut bahan bakar ke lokasi pelanggan</div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 hylink-holder">
            <div class="service-item">
                <div class="hylink-box">
                    <div class="icon"><img src="<?php echo base_url();?>assets/images/logo.png" alt=""></div>
                    <a href="<?php echo base_url();?>/layanan" class="link">3. Vendor Holding Stock</a>
                    <div class="text">Mengelola stok bahan bakar minyak dari depot Mitra termasuk perawatan, penyimpanan, dan manajemen ke lokasi pelanggan</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
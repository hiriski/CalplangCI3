<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="header-holder" class="innerpage produk lighter">

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


<div id="produk-page">
<div class="support-links">
<div class="container">
<div class="services">

<div class="main-heading"><h2><img src="<?php echo base_url();?>assets/images/logo-small.png">Produk</h2></div>
    <div class="row">
        <div class="col-sm-12 hylink-holder">
            <div class="service-item produk">
                <div class="hylink-box">
                    <div class="icon"><img src="<?php echo base_url();?>assets/images/logo.png" alt=""></div>
                    <a href="<?php echo base_url();?>produk" class="link">Bahan Bakar Cair</a>
                    <div class="text">
                        <ol>
                            <li>High Speed Diesel B20</li>
                            <li>Research Octane Number 88 (Premium)</li>
                            <li>Crude Palm Oil (CPO)</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 hylink-holder">
            <div class="service-item produk">
                <div class="hylink-box">
                    <div class="icon"><img src="<?php echo base_url();?>assets/images/logo.png" alt=""></div>
                    <a href="<?php echo base_url();?>produk" class="link">Bahan Bakar Padat</a>
                    <div class="text">Coal</div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 hylink-holder">
            <div class="service-item produk">
                <div class="hylink-box">
                    <div class="icon"><img src="<?php echo base_url();?>assets/images/logo.png" alt=""></div>
                    <a href="<?php echo base_url();?>produk" class="link">Bahan Bakar Alternatif</a>
                    <div class="text">Cangkang Sawit</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
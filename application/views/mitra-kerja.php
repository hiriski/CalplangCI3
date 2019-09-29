<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

   
<div id="header-holder" class="innerpage mitrakerja lighter">

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



<div class="domain-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="main-heading"><h2><img src="<?php echo base_url();?>assets/images/logo-small.png">Mitra Kerja</h2></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <div class="dfeature-box">
                    <div class="ic_img"><img src="<?php echo base_url();?>assets/caplang-img/partnership/pertamina.png"/></div>
                    <div class="title">Pertamina</div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="dfeature-box">
                <div class="ic_img"><img src="<?php echo base_url();?>assets/caplang-img/partnership/pertamina-patra-niaga.png"/></div>
                    <div class="title">Pertamina Patra Niaga</div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="dfeature-box">
                <div class="ic_img"><img src="<?php echo base_url();?>assets/caplang-img/partnership/bni-syariah.png"/></div>
                    <div class="title">Bank BNI Syariah</div>
                </div>
            </div>
        </div>
    </div>
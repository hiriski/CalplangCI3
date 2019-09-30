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


<div id="jajaran-komisaris" class="features container-fluid">
    <div class="container">
        <div class="row">
            <div class="main-heading"><h2><img src="<?php echo base_url();?>assets/images/logo-small.png">Jajaran Komisaris</h2></div>
            <div class="col-sm-12 def-aligned">
                <div class="feature-info komisaris">
                <div class="col-sm-12">
                    <div class="single-img text-center">
                        <img class="img-responsive" src="<?php echo base_url();?>assets/images/new/adrin.jpg" alt="">
                    </div>
                </div>
                    <div>
                        <div class="feature-title">Adrin Saputra Alamsjah</div>
                        <div class="name">Komisaris Utama</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
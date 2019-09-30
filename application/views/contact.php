<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

   
<div id="header-holder" class="innerpage contact lighter">

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
<div class="support-details container-fluid ct">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="support-box">
                    <div class="icon green"><i class="hstb hstb-speech-bubble"></i></div>
                    <div class="details-holder">
                        <div class="title">Telepon</div>
                        <div class="details">
                            <a href="#">Tel: -</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="support-box">
                    <div class="icon blue"><i class="hstb hstb-speech"></i></div>
                    <div class="details-holder">
                        <div class="title">Email</div>
                        <div class="details">
                            <a href="#">commercial@caplang.co.id</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="support-box">
                    <div class="icon purple"><i class="hstb hstb-placeholder"></i></div>
                    <div class="details-holder">
                        <div class="title">Kantor</div>
                        <div class="details">
                            <a href="#">Jl. Ahmad Yani KM 7 Komplek Asdi Karya II No. 17 Banjarmasin, Kalimantan selatan 70654</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-us container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-holder">
                <div class="main-heading"><h2><img src="<?php echo base_url();?>assets/images/logo-small.png">Formulir Kontak</h2></div>
<div class="contactForm">
<!-- include message block -->
<?php $this->load->view('partials/_messages'); ?>

<!-- form start -->
<?php echo form_open('home_controller/contact_post', ['id' => 'form_validate', 'class' => 'validate_terms']); ?>

<div class="form-row">
    <div class="col-xs-12">
        <label for="inputMessage1">Nama</label>
        <input type="text" class="form-control form-input" name="name" placeholder="Nama" maxlength="199" minlength="1" pattern=".*\S+.*" value="<?php echo old('name'); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?> required>
    </div>
</div>

<div class="form-row">
    <div class="col-xs-12">
        <label for="inputMessage1">Email</label>
        <input type="email" class="form-control form-input" name="email" maxlength="199" placeholder="Email" value="<?php echo old('email'); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?> required>
    </div>
</div>
    
<div class="form-row">
    <div class="col-xs-12">
        <label for="inputMessage1">Pesan</label>
        <textarea class="form-control form-input form-textarea" name="message" placeholder="Pesan..." maxlength="4970" minlength="5" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?> required><?php echo old('message'); ?></textarea>
    </div>
</div>
    
<?php generate_recaptcha(); ?>
<div class="form-row">
    <div class="col-xs-12">
    <button id="submit" type="submit" class="btn">
        Kirim 
    </button>
    </div>
</div>

</form><!-- form end -->
</div>



</div>
</div>

</div>
</div>
</div>

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!--print error messages-->
<?php if ($this->session->flashdata('errors')): ?>
    <div class="message">
        <div class="errorMessage">
            <?php echo $this->session->flashdata('errors'); ?>
        </div>
    </div>
<?php endif; ?>

<!--print custom error message-->
<?php if ($this->session->flashdata('error')): ?>
    <?php if ($this->session->flashdata('error') == "Address in mailbox given [] does not comply with RFC 2822, 3.6.2."): ?>
        <div class="message">
            <div class="errorMessage">
                <p>
                    Please make your email settings from Email Settings Section!
                </p>
            </div>
        </div>
    <?php else: ?>
        <div class="message">
            <div class="errorMessage">
                <p>
                    <?php echo $this->session->flashdata('error'); ?>
                </p>
            </div>
        </div>
    <?php endif; ?>
    <!--print custom success message-->
<?php elseif ($this->session->flashdata('success')): ?>

    <div class="message">
        <div class="successMessage">
            <p>
                <i class="material-icons">check</i>
                <?php echo $this->session->flashdata('success'); ?>
                <span id="sucessMsg"></span>
            </p>
        </div>
    </div>

<?php endif; ?>

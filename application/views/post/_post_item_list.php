<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php if ($vsettings->post_list_style == "vertical"): ?>
        <?php $this->load->view("post/_post_item"); ?>
<?php else: ?>
    <?php $this->load->view("post/_post_item_horizontal"); ?>
<?php endif; ?>



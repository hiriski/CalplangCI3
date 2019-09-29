<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="riskiwebid">
<div id="latestPostStart">
<div class="latestPostContent">

<div class="section-content">
<div class="latest-articles">
<div class="_inlineBlock">
<div>
    <h1 class="page-title"><span> <?php echo trans("search"); ?>:</span>&nbsp;<strong><?php echo html_escape($q); ?></strong></h1>
</div>

<?php $count = 0; ?>
<?php foreach ($posts as $post): ?>

<?php if ($count != 0 && $count % 2 == 0): ?>
<?php endif; ?>

<!--include post item-->
<?php $this->load->view("post/_post_item_list", ["post" => $post, "show_label" => true]); ?>

<?php if ($count == 1): ?>
    <!--Include banner-->
    <?php $this->load->view("partials/_ad_spaces", ["ad_space" => "search_top", "class" => "p-b-30"]); ?>
<?php endif; ?>

    <?php $count++; ?>
<?php endforeach; ?>

<?php if ($count == 0): ?>
    <p class="text-center">
        <?php echo trans("search_noresult"); ?>
    </p>
<?php endif; ?>

<?php $this->load->view("partials/_ad_spaces", ["ad_space" => "search_bottom", "class" => ""]); ?>

<!-- Pagination -->
<div class="col-sm-12 col-xs-12">
    <?php echo $this->pagination->create_links(); ?>
</div>

</div>

</div>
</div>

</div>

<div id="sidebar NODISPLAYED Huhu Haha Hihi">
<?php
// include siebar ?
// $this->load->view('partials/_sidebar');
?>
</div>  

</div>
</div> <!-- #riskiwebid -->
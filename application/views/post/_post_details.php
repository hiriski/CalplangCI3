<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="postImg">
<?php if ($post_image_count > 0) : ?>
    <!-- owl-carousel -->
    <div class="owl-carousel post-slider" id="post-slider">

        <div class="post-slider-item">
            <div>
                <img
                    src="<?php echo base_url() . html_escape($post->image_small); ?>"
                    data-large="<?php echo base_url() . html_escape($post->image_default); ?>"
                    class="blurry-load"
                    alt="<?php echo html_escape($post->title); ?>"/>
            </div>
            <figcaption class="imgCaption"><?php echo html_escape($post->image_description); ?></figcaption>
        </div>
        <!--List  random slider posts-->
        <?php foreach ($post_images as $image): ?>
            <!-- slider item -->
            <div class="post-detail-slider-item">
                <img
                src="<?php echo base_url() . html_escape($post->image_small); ?>"
                data-large="<?php echo base_url() . html_escape($post->image_default); ?>"
                class="blurry-load"
                alt="<?php echo html_escape($post->title); ?>"/>
            </div>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <div>
        <img 
            src="<?php echo get_post_image($post, "small"); ?>"
            data-large="<?php echo get_post_image($post, "default"); ?>"
            class="blurry-load" 
            alt="<?php echo html_escape($post->title); ?>"/>
    </div>
    <?php if (!empty($post->image_description)): ?>
        <figcaption class="imgCaption"><?php echo html_escape($post->image_description); ?></figcaption>
    <?php endif; ?>
<?php endif; ?>
</div>
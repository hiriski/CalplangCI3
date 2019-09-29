<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="relatedPostOuter">
<div class="_inlineBlock">
    <div class="relatedPostItem boxShadow">
        <div class="relatedThumbnail">
            <a href="<?php echo post_url($post); ?>">
                <?php $this->load->view("post/_post_image", ["post" => $post, "icon_size" => "md", "bg_size" => "md", "blur_image" => "small", "image_size" => "mid", "class" => "blurry-load"]); ?>
            </a>
        </div>
        <div class="relatedPostTitle">
            <h5><a href="<?php echo post_url($post); ?>"><?php echo html_escape(character_limiter($post->title, 55, '...')); ?></a>
            </h5>
        </div>
    </div>
</div>
</div>
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<article>
<div class="indexPostOuter">
    <div class="indexPostContainer">
        <div class="indexPost boxShadow">

            <?php if (isset($show_label)): ?>
                <?php $post_category = get_post_category($post); ?>
                <?php if (!empty($post_category['id'])): ?>
                
                    <a class="indexCategory is-box-shadow"  style="background-color: <?php echo html_escape($post_category['color']); ?>" href="<?php echo lang_base_url(); ?>category/<?php echo html_escape($post_category['name_slug']); ?>">
                        <span class="category-label"><?php echo html_escape($post_category['name']); ?></span>
                    </a>
                <?php endif; ?>
            <?php endif; ?>

            <div class="thumbnailContainer">
                <div class="postThumbnail">
                    <a href="<?php echo post_url($post); ?>">
                        <?php $this->load->view("post/_post_image", ["post" => $post, "icon_size" => "md", "bg_size" => "md", "blur_image" => "small", "image_size" => "mid", "class" => "blurry-load"]); 
                        // option untuk "image_size" = "big", "mid" "default" dan "small"
                        ?>
                    </a>
                </div>
            </div>
            <div class="postContent">
                <h2 class="title">
                    <a class="__st" href="<?php echo post_url($post); ?>">
                        <?php echo html_escape(character_limiter($post->title, 55, '...')); ?>
                    </a>
                </h2>
                <!-- <div class="description __st">
                    <?php// echo html_escape(character_limiter($post->summary, 130, '...')); ?>
                </div> -->

                <div class="indexPostMeta">
                    <?php $this->load->view("post/_post_meta", ["post" => $post]); ?>
                </div>

            </div>
        </div>
    </div>
</div>
</article>
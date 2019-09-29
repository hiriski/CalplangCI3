<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="featuredPost">
<div class="_inlineBlock">

<div id="featuredLeft">
    <div class="single">
        <div class="content boxShadow">
            <div class="_inlineBlock">
                <?php $count = 1; ?>
                <?php foreach ($featured_posts as $item): ?>
                    <?php if ($count == 3): ?>
                        <a href="<?php echo post_url($item); ?>">
                            <?php
                                $this->load->view("post/_post_image",
                                ["post" => $item,
                                "icon_size" => "md",
                                "bg_size" => "sl",
                                "blur_image" => "small",
                                "image_size" => "default",
                                "class" => "blurry-load"]);
                            ?>
                            <div class="x"></div>
                            <div class="entry">
                                <h3><?php echo html_escape(character_limiter($item->title, 66, '...')); ?>
                                </h3>
                                <div class="featuredSummary">
                                    <?php echo html_escape(character_limiter($item->summary, 130, '...')); ?>
                                </div> 
                            </div>
                        </a>
                    <?php endif; ?>

                    <?php $count++; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>           
</div>

<div id="featuredRight">
    <div class="featuredRightA">
        <div class="content boxShadow">
            <div class="_inlineBlock">
                <?php $count = 1; ?>
                <?php foreach ($featured_posts as $item): ?>
                    <?php if ($count == 1): ?>
                        <a href="<?php echo post_url($item); ?>">
                            <?php
                                $this->load->view("post/_post_image",
                                ["post" => $item,
                                "icon_size" => "md",
                                "bg_size" => "sl",
                                "blur_image" => "small",
                                "image_size" => "mid",
                                "class" => "blurry-load"]);
                            ?>
                            <div class="x"></div>
                            <div class="entry">
                                <h3><?php echo html_escape(character_limiter($item->title, 66, '...')); ?>
                                </h3>
                            </div>
                        </a>
                    <?php endif; ?>

                    <?php $count++; ?>
                <?php endforeach; ?>
            </div>
        </div>    
    </div> <!-- featuredRightA -->

    <div class="featuredRightB">
        <div class="content boxShadow">
            <div class="_inlineBlock">
                <?php $count = 1; ?>
                <?php foreach ($featured_posts as $item): ?>
                    <?php if ($count == 2): ?>
                        <a href="<?php echo post_url($item); ?>">
                            <?php
                                $this->load->view("post/_post_image",
                                ["post" => $item,
                                "icon_size" => "md",
                                "bg_size" => "sl",
                                "blur_image" => "small",
                                "image_size" => "mid",
                                "class" => "blurry-load"]);
                            ?>
                            <div class="x"></div>
                            <div class="entry">
                                <h3><?php echo html_escape(character_limiter($item->title, 66, '...')); ?>
                                </h3>
                            </div>
                        </a>
                    <?php endif; ?>
                    <?php $count++; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div> <!-- featuredRightB -->
</div> <!-- featuredRight -->

</div>
</div>
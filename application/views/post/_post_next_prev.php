<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="blogPager">
<div id="bp">
    <div class="bp">
        <div class="prev">
            <a class="boxShadow" href="<?php echo post_url($previous_post); ?>">
            <?php if (!empty($previous_post)): ?>
                <p><?php echo trans("previous_article"); ?></p>
                <h5><?php echo html_escape(character_limiter($previous_post->title, 80, '...')); ?>
                </h5>
                <span class="arrow"><i class="material-icons">arrow_back</i></span>
            </a>
            <?php endif; ?>
        </div>
        <div class="next">
            <?php if (!empty($next_post)): ?>
            <a class="boxShadow" href="<?php echo post_url($next_post); ?>">
                <p><?php echo trans("next_article"); ?></p>
                <h5><?php echo html_escape(character_limiter($next_post->title, 80, '...')); ?>
                </h5>
                <span class="arrow"><i class="material-icons">arrow_forward</i></span>
            </a>
            <?php endif; ?>
        </div>
    </div>
</div>
</section>
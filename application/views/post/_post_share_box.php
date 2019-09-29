<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div>
<ul>
    <span>Share</span>
    <li>
        <a class="fb" href="javascript:void(0)"
           onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo post_url($post); ?>', 'Share This Post', 'width=640,height=450');return false"
           class="social-btn-lg facebook">
            <i class="icon-facebook"></i>
            <span>Facebook</span>
        </a>
    </li>

    <li>
        <a class="tw" href="javascript:void(0)"
           onclick="window.open('https://twitter.com/share?url=<?php echo post_url($post); ?>&amp;text=<?php echo html_escape($post->title); ?>', 'Share This Post', 'width=640,height=450');return false"
           class="social-btn-lg twitter">
            <i class="icon-twitter"></i>
            <span>Twitter</span>
        </a>
    </li>

    <li>
        <a class="lk" href="javascript:void(0)"
           onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo post_url($post); ?>', 'Share This Post', 'width=640,height=450');return false"
           class="linkedin">Linkedin
        </a>
    </li>
    <li class="whatsapp">
        <a class="wa" href="https://api.whatsapp.com/send?text=<?php echo html_escape($post->title); ?> - <?php echo post_url($post); ?>"
           class="whatsapp"
           target="_blank">Whatsapp
        </a>
    </li>

    <li>
        <a class="print" href="javascript:void(0)" id="print_post" class="btn-print">
            Print
        </a>
    </li>

</ul>
</div>
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="riski" class="singlePost">
<div class="content _inlineBlock">

<div id="content" class="<?php echo ($post->show_right_column == 1) ? 'sidebar_yes' : 'nosidebar'; ?> nosidebar">

<article id="postDetails">

<div id="headerPost">

<div id="breadcrumb">
    <ol>
        <li>
            <a href="<?php echo lang_base_url(); ?>"><?php echo trans("breadcrumb_home"); ?></a>
        </li> <span>/</span>
        <?php if (!empty($category)): ?>
        <li>
            <a href="<?php echo lang_base_url(); ?>category/<?php echo html_escape($category->name_slug); ?>">
                <?php echo html_escape($category->name); ?>
            </a>
        </li> <span>/</span>
        <?php endif; ?>

        <?php if (!empty($subcategory)): ?>
        <li>
            <a href="<?php echo lang_base_url(); ?>category/<?php echo html_escape($subcategory->name_slug); ?>">
                <?php echo html_escape($subcategory->name); ?>
            </a>
        </li> <span>/</span>
        <?php endif; ?>
        <li><?php echo html_escape($post->title); ?></li>
    </ol>
</div>

    <h1><?php echo html_escape($post->title); ?></h1>
    <div class="postMeta __st">
        <?php if ($general_settings->show_post_author == 1): ?>
        <span class="postAuthorMeta">
        <a class="__st" href="<?php echo lang_base_url(); ?>profile/<?php echo html_escape($post->user_slug); ?>">
        <img class="imgRound" src="<?php echo get_user_avatar_by_id($post->user_id); ?>"
        alt="<?php echo html_escape($post->username); ?>">
        <?php echo html_escape($post->username); ?>
        </a>
        </span>
        <?php endif; ?>

        <?php if ($general_settings->show_post_date == 1): ?>
        <span><?php echo " " . helper_date_format($post->created_at);?></span>
        <?php endif; ?>
    </div>

<?php if (!empty($post->summary)): ?>
<div class="postSummary">
    <p>
        <?php echo $post->summary; ?>
    </p>
</div>
<?php endif; ?>

</div> <!-- #headerPost -->

<?php if ($post->post_type == "video"):
    $this->load->view('post/_post_details_video', ['post' => $post]);
elseif ($post->post_type == "audio"):
    $this->load->view('post/_post_details_audio', ['post' => $post]);
elseif ($post->post_type == "gallery"):
    $this->load->view('post/_post_details_gallery.php', ['post' => $post]);
elseif ($post->post_type == "ordered_list"):
    $this->load->view('post/_post_details_ordered_list.php', ['post' => $post]);
else:
    $this->load->view('post/_post_details', ['post' => $post]);
endif; ?>

<?php $this->load->view("partials/_ad_spaces", ["ad_space" => "post_top", "class" => "bn-p-t-20"]); ?>

<div class="postText">
    <?php echo $post->content; ?>
</div>

<!--Optional Url Button -->
<?php if (!empty($post->optional_url)) : ?>
    <div class="optional-url-cnt">
        <a href="<?php echo html_escape($post->optional_url); ?>" class="btn btn-md btn-custom" target="_blank">
            <?php echo html_escape($settings->optional_url_button_name); ?>&nbsp;&nbsp;&nbsp;<i class="icon-long-arrow-right" aria-hidden="true"></i>
        </a>
    </div>
<?php endif; ?>

<!--Optional Url Button -->
<?php if (!empty($feed) && !empty($post->show_post_url)) : ?>
    <div class="optional-url-cnt">
        <a href="<?php echo $post->post_url; ?>" class="btn btn-md btn-custom" target="_blank">
            <?php echo htmlspecialchars($feed->read_more_button_text); ?>&nbsp;&nbsp;&nbsp;<i class="icon-long-arrow-right" aria-hidden="true"></i>
        </a>
    </div>
<?php endif; ?>

<div id="postTags">
    <?php if (!empty($post_tags)): ?>
        <h2 class="tagsTitle"><?php echo trans("post_tags"); ?></h2>
        <ul>
            <?php foreach ($post_tags as $tag) : ?>
                <li>
                    <a href="<?php echo lang_base_url() . 'tag/' . html_escape($tag->tag_slug); ?>">
                        <?php echo html_escape($tag->tag); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>


<div id="postShare">
    <!--include Social Share -->
    <?php $this->load->view('post/_post_share_box'); ?>
</div>

</article>

<!- #blog pager start mamang -->
<?php $this->load->view('post/_post_next_prev', ['previous_post' => $previous_post, 'next_post' => $next_post]); ?>

<!--Include banner-->
<?php $this->load->view("partials/_ad_spaces", ["ad_space" => "post_bottom", "class" => "bn-p-b"]); ?>

<section id="relatedPost">
<div class="start">
<div class="center-main-heading">
    <h4><?php echo trans("related_posts");?></h4>
</div>
<div class="_rt">

<div class="relatedPost _inlineBlock">
<?php $i = 0; ?>
<?php foreach ($related_posts as $item): ?>
    <?php if ($i > 0 && $i % 3 == 0): ?>
    <?php endif; ?>
    <?php $this->load->view("post/_related_post", ["post" => $item]); ?>
    <?php $i++; ?>
<?php endforeach; ?>
</div>
</div>
</div>
</section>


<section id="disqusComment">
<div class="start">

<div class="center-main-heading">
<h4>Komentar</h4>
</div>

<div id="disqus_thread"></div>
<script>
/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://riskiwebid.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</div>
</section>


<?php if ($general_settings->comment_system == 1 || $general_settings->facebook_comment_active == 1): ?>
    <section id="comments" class="section">
        <div class="col-sm-12 col-xs-12">
            <div class="row">
                <div class="comment-section">
                    <?php if ($general_settings->comment_system == 1 || $general_settings->facebook_comment_active == 1): ?>
                        <ul class="nav nav-tabs">
                            <?php if ($general_settings->comment_system == 1): ?>
                                <li class="active"><a data-toggle="tab" href="#site_comments"><?php echo trans("comments"); ?></a></li>
                            <?php endif; ?>
                            <?php if ($general_settings->facebook_comment_active == 1): ?>
                                <li class="<?php echo ($general_settings->comment_system != 1) ? 'active' : ''; ?>"><a data-toggle="tab" href="#facebook_comments"><?php echo trans("facebook_comments"); ?></a></li>
                            <?php endif; ?>
                        </ul>

                        <div class="tab-content">
                            <?php if ($general_settings->comment_system == 1): ?>
                                <div id="site_comments" class="tab-pane fade in active">
                                    <!-- include comments -->
                                    <?php $this->load->view('post/_make_comment', ['post' => $post]); ?>
                                    <div id="comment-result">
                                        <?php $this->load->view('post/_comments'); ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if ($general_settings->facebook_comment_active == 1): ?>
                                <div id="facebook_comments" class="tab-pane fade <?php echo ($general_settings->comment_system != 1) ? 'in active' : ''; ?>">
                                    <div class="fb-comments" data-href="<?php echo current_url(); ?>" data-width="100%" data-numposts="5"
                                            data-colorscheme="light"></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>



</div> <!-- #content -->

<?php if ($post->show_right_column == 1): ?>
    <div id="sidebar" class="col-sm-4 col-xs-12">
        <!--include sidebar -->
        <?php $this->load->view('partials/_sidebar'); ?>
    </div>
<?php endif; ?>

</div> <!-- .content -->


</div> <!-- #riski -->

<?php if (!empty($post->feed_id)): ?>

<?php endif; ?>

<style>
.post-text img {
    
}
.postSummary {
   
}
</style>

<!-- Disqus comment count -->
<script id="dsq-count-scr" src="//riskiwebid.disqus.com/count.js" async></script>
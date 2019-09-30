<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo html_escape($title); ?> <?php echo html_escape($settings->site_title); ?></title>
    <meta name="description" content="<?php echo addslashes(html_escape($description)); ?>"/>
    <meta name="keywords" content="<?php echo html_escape($keywords); ?>"/>
    <meta name="author" content="PT. Caplang Energi Sejahtera"/>
    <meta property="og:locale" content="id-ID"/>
    <meta property="og:site_name" content="<?php echo $settings->application_name; ?>"/>
<?php if (isset($post_type)): ?>
    <meta property="og:type" content="<?php echo $og_type; ?>"/>
    <meta property="og:title" content="<?php echo $og_title; ?>"/>
    <meta property="og:description" content="<?php echo addslashes(html_escape($description)); ?>"/>
    <meta property="og:url" content="<?php echo $og_url; ?>"/>
    <meta property="og:image" content="<?php echo $og_image; ?>"/>
    <meta property="og:image:width" content="<?php echo $og_width; ?>"/>
    <meta property="og:image:height" content="<?php echo $og_height; ?>"/>
    <meta property="article:author" content="<?php echo $og_author; ?>"/>
    <meta property="fb:app_id" content="<?php echo $this->general_settings->facebook_app_id; ?>"/>
<?php foreach ($og_tags as $tag): ?>
    <meta property="article:tag" content="<?php echo $tag->tag; ?>"/>
<?php endforeach; ?>
    <meta property="article:published_time" content="<?php echo $og_published_time; ?>"/>
    <meta property="article:modified_time" content="<?php echo $og_modified_time; ?>"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@<?php echo html_escape($settings->application_name); ?>"/>
    <meta name="twitter:creator" content="@<?php echo html_escape($og_creator); ?>"/>
    <meta name="twitter:title" content="<?php echo html_escape($post->title); ?>"/>
    <meta name="twitter:description" content="<?php echo addslashes(html_escape($description)); ?>"/>
    <meta name="twitter:image" content="<?php echo $og_image; ?>"/>
<?php else: ?>
    <meta property="og:image" content="<?php echo get_logo($general_settings); ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php echo html_escape($settings->site_title); ?>"/>
    <meta property="og:description" content="<?php echo addslashes(html_escape($description)); ?>"/>
    <meta property="og:url" content="<?php echo base_url(); ?>"/>
<?php endif; ?>
    <link rel="canonical" href="<?php echo current_url(); ?>"/>
<?php if ($general_settings->multilingual_system == 1):
foreach ($languages as $language):
if ($language->id == $site_lang->id):?>
    <link rel="alternate" href="<?php echo base_url(); ?>" hreflang="<?php echo $language->language_code ?>"/>
<?php else: ?>
    <link rel="alternate" href="<?php echo base_url() . $language->short_form . "/"; ?>" hreflang="<?php echo $language->language_code ?>"/>
<?php endif; endforeach; endif; ?>
    <link rel="shortcut icon" type="image/png" href="<?php echo get_favicon($vsettings); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dist/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dist/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dist/css/custom.css">
    <link href="<?php echo base_url();?>assets/newfonts/hk-grotesk/style.css" type="text/css" rel="stylesheet">

</head>
<body>

<nav id="nav" class="navbar navbar-full">
    <div class="container-fluid">
        <div class="container container-nav">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-header">
                        <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div id="logo">
                        <a class="navbar-brand" href="<?php echo base_url();?>">
                            <img src="<?php echo get_logo($vsettings); ?>" alt="logo" class="logo">
                            <span><?php echo $settings->application_name;?></span>
                        </a>
                        </div>
                        
                    </div>
                    <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse navbar-collapse-centered" id="bs">
                        <ul class="nav navbar-nav navbar-nav-centered">
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>">Beranda</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="<?php echo base_url();?>tentang-kami" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tentang Kami</a>
                                <ul class="dropdown-menu c">
                                    <li><a class="dropdown-item" href="<?php echo base_url();?>sambutan">Kata Sambutan</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url();?>visi-misi">Visi &amp; Misi</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url();?>jajaran-komisaris">Jajaran Komisaris</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url();?>jajaran-direksi">Jajaran Direktur</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url();?>legalitas">Legalitas</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>produk">Produk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>layanan">Layanan</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>mitra-kerja">Mitra Kerja</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right other-navbar">
                            <li class="nav-item">
                                <a href="contact"><span>Hubungi Kami</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
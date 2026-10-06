<?php Use App\Models\Category;
Use App\Models\News;
Use App\Models\News_views_Model;
?>
<!doctype html>
<html class="no-js" data-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">   
    <title>EYE CATCH தமிழ் - News &amp; Media</title>
    <meta name="author" content="EYE CATCH Tamil">
    <meta name="description" content="Today's headlines feature global updates on politics, economy, and technology. Stay informed with breaking news on international affairs, business trends, and scientific advancements.">
    <meta name="keywords" content="Global updates,Politics,Economy,Technology,Breaking news,International affairs,Business trends">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    <meta property="og:title" content="News Today Tamil"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{url('/')}}"/>
    <meta property="og:image" content="{{asset('assets/img/logo.svg')}}"/>
    <meta property="og:site_name" content="News Today Tamil"/>
    <meta property="og:description" content="Today's headlines feature global updates on politics, economy, and technology."/>

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/img/favicons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/img/favicons/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/img/favicons/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/favicons/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/img/favicons/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/img/favicons/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/img/favicons/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/img/favicons/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicons/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/img/favicons/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/img/favicons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicons/favicon-16x16.png')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;400;500;600;700;800;900&amp;family=Poppins:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/i18n.css')}}">

    <style>
        .hero-card-left {
            height: 250px;
        }
        .hero-card-main {
            height: 524px;
        }
        .hero-tab-container-wrap {
            height: 524px;
            display: flex;
            flex-direction: column;
        }
        .video-main-box {
            width: 100%;
            height: 380px;
            border-radius: 6px;
            overflow: hidden;
            position: relative;
            background-color: #1A1D26;
        }
        .playlist-scroll-wrap {
            position: relative;
            border-right: 1px solid #1A1D26;
            padding-right: 20px;
        }

        /* Laptop & Desktop Breakpoints (992px - 1199px) */
        @media (max-width: 1199px) {
            .hero-card-main {
                height: 440px !important;
            }
            .hero-tab-container-wrap {
                height: 440px !important;
            }
            .playlist-scroll-wrap {
                border-right: none !important;
                padding-right: 0 !important;
            }
        }

        /* Tablet Breakpoints (768px - 991px - iPad Mini, Surface) */
        @media (max-width: 991px) {
            .hero-card-main {
                height: 400px !important;
            }
            .hero-tab-container-wrap {
                height: 380px !important;
            }
            .video-main-box {
                height: 320px !important;
            }
        }

        /* Mobile Breakpoints (481px - 767px - iPhone 16 / Pixel / Samsung) */
        @media (max-width: 767px) {
            .hero-card-left {
                height: 220px !important;
            }
            .hero-card-main {
                height: 340px !important;
            }
            .hero-tab-container-wrap {
                height: auto !important;
            }
            .hero-tab-container-wrap .tab-content {
                min-height: auto !important;
            }
            .video-main-box {
                height: 260px !important;
            }
            .box-title-30 {
                font-size: 19px !important;
            }
            .box-title-22 {
                font-size: 15px !important;
            }
            .trending-news-section .row.align-items-center {
                flex-direction: column !important;
                align-items: flex-start !important;
                gap: 10px !important;
            }
            .trending-news-section .sec-title {
                margin-bottom: 0 !important;
            }
            .trending-news-section .blog-style1 {
                margin-top: 15px !important;
            }
        }

        /* Small Mobile Devices (iPhone SE 375px and below) */
        @media (max-width: 480px) {
            .space-top {
                padding-top: 15px !important;
            }
            .hero-card-left {
                height: 200px !important;
            }
            .hero-card-main {
                height: 280px !important;
            }
            .hero-tab-container-wrap {
                height: auto !important;
            }
            .hero-tab-container-wrap .tab-content {
                min-height: auto !important;
            }
            .video-main-box {
                height: 220px !important;
            }
            .box-title-30 {
                font-size: 17px !important;
            }
            .box-title-22 {
                font-size: 14px !important;
            }
            .video-playlist-item {
                margin-right: 0 !important;
            }
            .trending-news-section .row.align-items-center {
                flex-direction: row !important;
                align-items: center !important;
                justify-content: space-between !important;
                width: 100% !important;
            }
            .trending-news-section .sec-title {
                font-size: 18px !important;
                line-height: 1.2 !important;
            }
            .trending-news-section .blog-style1 {
                margin-top: 20px !important;
            }
        }
    </style>
</head>

<body>
    <!-- preloader -->
    @include('includes/preloader')
    <!-- preloader end -->

    <!-- header -->
    @include('includes/header')
    <!-- header end  -->

    <!-- Main Content Section -->
    <section class="space-top">
        <div class="container">
            <div class="row gx-4">
                <!-- Hero Left Column (2 Featured items) -->
                <div class="col-xl-3">
                    <div class="row gy-4">
                        <?php 
                        $hero_left = $slider->take(2);
                        foreach($hero_left as $item) {
                            $cat = Category::find($item->category);
                        ?>
                        <div class="col-xl-12 col-sm-6 dark-theme img-overlay2">
                            <div class="blog-style3 hero-card-left" style="overflow: hidden; position: relative; border-radius: 6px;">
                                <div class="blog-img" style="height: 100%; width: 100%;">
                                    <img src="{{asset('upload/admins/news/'.$item->image)}}" alt="{{$item->title}}" style="height: 100%; width: 100%; object-fit: cover;">
                                </div>
                                <div class="blog-content" style="position: absolute; bottom: 0; left: 0; right: 0; padding: 18px; z-index: 2; background: linear-gradient(transparent, rgba(0,0,0,0.85));">
                                    <a data-theme-color="#FF9500" href="{{url('category/'.$item->category)}}" class="category" style="background-color: #FF9500; color: #fff; padding: 3px 8px; border-radius: 3px; font-size: 11px; font-weight: 700; text-transform: uppercase; margin-bottom: 6px; display: inline-block;">{{$cat ? $cat->category_name : 'News'}}</a>
                                    <h3 class="box-title-22" style="font-size: 17px; line-height: 1.3; margin-top: 4px; margin-bottom: 6px; font-weight: 700;">
                                        <a class="hover-line" href="{{url('new-Detail/'.$item->id)}}" style="color: #fff; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">{{Str::limit($item->title, 50)}}</a>
                                    </h3>
                                    <div class="blog-meta" style="font-size: 11px; color: rgba(255,255,255,0.85); display: flex; align-items: center; gap: 6px; flex-wrap: wrap;">
                                        <a href="#" style="color: rgba(255,255,255,0.85); white-space: nowrap;"><i class="far fa-user" style="margin-right: 4px;"></i>By - News Today</a> 
                                        <a href="#" style="color: rgba(255,255,255,0.85); white-space: nowrap;"><i class="fal fa-calendar-days" style="margin-right: 4px;"></i>{{$item->created_at->format('d M, Y')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <!-- Hero Main Featured (Middle) -->
                <div class="col-xl-6 mt-4 mt-xl-0">
                    <?php 
                    $main_hero = $slider->skip(2)->first() ?? $slider->first();
                    if($main_hero) {
                        $main_cat = Category::find($main_hero->category);
                    ?>
                    <div class="dark-theme img-overlay2">
                        <div class="blog-style3 hero-card-main" style="overflow: hidden; position: relative; border-radius: 6px;">
                            <div class="blog-img" style="height: 100%; width: 100%;">
                                <img src="{{asset('upload/admins/news/'.$main_hero->image)}}" alt="{{$main_hero->title}}" style="height: 100%; width: 100%; object-fit: cover;">
                            </div>
                            <div class="blog-content" style="position: absolute; bottom: 0; left: 0; right: 0; padding: 24px; z-index: 2; background: linear-gradient(transparent, rgba(0,0,0,0.85));">
                                <a data-theme-color="#00D084" href="{{url('category/'.$main_hero->category)}}" class="category" style="background-color: #00D084; color: #fff; padding: 4px 10px; border-radius: 3px; font-size: 12px; font-weight: 700; text-transform: uppercase; margin-bottom: 8px; display: inline-block;">{{$main_cat ? $main_cat->category_name : 'Featured'}}</a>
                                <h3 class="box-title-30" style="font-size: 24px; line-height: 1.3; margin-top: 6px; margin-bottom: 10px; font-weight: 700;">
                                    <a class="hover-line" href="{{url('new-Detail/'.$main_hero->id)}}" style="color: #fff; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">{{$main_hero->title}}</a>
                                </h3>
                                <div class="blog-meta" style="font-size: 13px; color: rgba(255,255,255,0.85); display: flex; align-items: center; gap: 8px;">
                                    <a href="#" style="color: rgba(255,255,255,0.85); white-space: nowrap;"><i class="far fa-user" style="margin-right: 4px;"></i>By - News Today</a> 
                                    <a href="#" style="color: rgba(255,255,255,0.85); white-space: nowrap;"><i class="fal fa-calendar-days" style="margin-right: 4px;"></i>{{$main_hero->created_at->format('d M, Y')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <!-- Hero Tabs (Popular & Recent Sidebar) -->
                <div class="col-xl-3 mt-35 mt-xl-0">
                    <div class="hero-tab-container-wrap">
                        <style>
                            .hero-tab-container {
                                display: flex !important;
                                width: 100% !important;
                                height: 38px !important;
                                background-color: #F4F5F7 !important;
                                border-radius: 4px !important;
                                overflow: hidden !important;
                                margin-bottom: 16px !important;
                                padding: 0 !important;
                                border: none !important;
                            }
                            .hero-tab-container .tab-btn {
                                flex: 1 !important;
                                display: flex !important;
                                align-items: center !important;
                                justify-content: center !important;
                                font-weight: 800 !important;
                                font-size: 13px !important;
                                letter-spacing: 0.3px !important;
                                text-transform: uppercase !important;
                                border: none !important;
                                outline: none !important;
                                margin: 0 !important;
                                padding: 0 10px !important;
                                height: 100% !important;
                                background-color: #F4F5F7 !important;
                                color: #080809 !important;
                                cursor: pointer !important;
                                transition: background-color 0.2s ease, color 0.2s ease !important;
                                border-radius: 0 !important;
                                box-shadow: none !important;
                            }
                            .hero-tab-container .tab-btn:first-child {
                                border-top-left-radius: 4px !important;
                                border-bottom-left-radius: 4px !important;
                            }
                            .hero-tab-container .tab-btn:last-child {
                                border-top-right-radius: 4px !important;
                                border-bottom-right-radius: 4px !important;
                            }
                            .hero-tab-container .tab-btn.active {
                                background-color: #FF1D50 !important;
                                color: #FFFFFF !important;
                            }
                        </style>
                        <div class="nav hero-tab-container mb-3" role="tablist">
                            <button class="tab-btn active" id="nav-one-tab" data-bs-toggle="tab" data-bs-target="#nav-one" type="button" role="tab" aria-controls="nav-one" aria-selected="true">Top News</button>
                            <button class="tab-btn" id="nav-two-tab" data-bs-toggle="tab" data-bs-target="#nav-two" type="button" role="tab" aria-controls="nav-two" aria-selected="false">Recent News</button>
                        </div>
                        <div class="tab-content" style="min-height: 384px;">
                            <!-- Top/Popular Tab -->
                            <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                                <div class="d-flex flex-column">
                                    <?php
                                    $cat_colors = ['#FF9500', '#007BFF', '#00D084', '#4E4BD0'];
                                    $pop_items = [];
                                    $used_ids = [];
                                    foreach ($popular_news as $popular_all_news) {
                                        $m_news = News::where('id', $popular_all_news->news_id)->first();
                                        if(!empty($m_news) && count($pop_items) < 4) {
                                            $pop_items[] = $m_news;
                                            $used_ids[] = $m_news->id;
                                        }
                                    }
                                    if(count($pop_items) < 4) {
                                        foreach($recentNews as $f_news) {
                                            if(count($pop_items) >= 4) break;
                                            if(!in_array($f_news->id, $used_ids)) {
                                                $pop_items[] = $f_news;
                                                $used_ids[] = $f_news->id;
                                            }
                                        }
                                    }
                                    $total_pop = count($pop_items);
                                    foreach ($pop_items as $idx => $most_view_news) {
                                        $pop_cat = Category::find($most_view_news->category);
                                        $badge_color = $cat_colors[$idx % count($cat_colors)];
                                        $is_last = ($idx === $total_pop - 1);
                                    ?>
                                    <div class="py-2.5" style="margin-bottom: 8px; padding-bottom: 10px; {{ !$is_last ? 'border-bottom: 1px dashed #EFEFEF;' : '' }}">
                                        <div class="blog-style2 d-flex align-items-center w-100">
                                            <div class="blog-img flex-shrink-0" style="width: 80px; height: 80px; overflow: hidden; border-radius: 6px; margin-right: 12px; background-color: #f5f5f5;">
                                                <img src="{{asset('upload/admins/news/'.$most_view_news->image)}}" alt="{{$most_view_news->title}}" style="height: 100%; width: 100%; object-fit: cover;" onerror="this.src='{{asset('assets/img/blog/blog_3_1.jpg')}}'">
                                            </div>
                                            <div class="blog-content flex-grow-1" style="min-width: 0;">
                                                <a style="background-color: {{$badge_color}}; color: #fff; padding: 2px 8px; border-radius: 3px; font-size: 11px; font-weight: 700; text-transform: uppercase; margin-bottom: 5px; display: inline-block;" href="{{url('category/'.$most_view_news->category)}}">{{$pop_cat ? $pop_cat->category_name : 'News'}}</a>
                                                <h3 class="box-title-18" style="font-size: 14px; line-height: 1.4; margin-top: 1px; margin-bottom: 5px; font-weight: 700;">
                                                    <a class="hover-line" href="{{url('new-Detail/'.$most_view_news->id)}}" style="color: #080809; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">{{$most_view_news->title}}</a>
                                                </h3>
                                                <div class="blog-meta" style="font-size: 12px; color: #8B929C;">
                                                    <a href="#" style="color: #8B929C;"><i class="fal fa-calendar-days" style="margin-right: 4px;"></i>{{$most_view_news->created_at->format('d M, Y')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <!-- Recent Tab -->
                            <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                                <div class="d-flex flex-column">
                                    <?php
                                    $rec_items = $recentNews->take(4);
                                    $total_rec = count($rec_items);
                                    foreach ($rec_items as $idx => $rec_item) {
                                        $rec_cat = Category::find($rec_item->category);
                                        $badge_color = $cat_colors[$idx % count($cat_colors)];
                                        $is_last = ($idx === $total_rec - 1);
                                    ?>
                                    <div class="py-2.5" style="margin-bottom: 8px; padding-bottom: 10px; {{ !$is_last ? 'border-bottom: 1px dashed #EFEFEF;' : '' }}">
                                        <div class="blog-style2 d-flex align-items-center w-100">
                                            <div class="blog-img flex-shrink-0" style="width: 80px; height: 80px; overflow: hidden; border-radius: 6px; margin-right: 12px; background-color: #f5f5f5;">
                                                <img src="{{asset('upload/admins/news/'.$rec_item->image)}}" alt="{{$rec_item->title}}" style="height: 100%; width: 100%; object-fit: cover;" onerror="this.src='{{asset('assets/img/blog/blog_3_1.jpg')}}'">
                                            </div>
                                            <div class="blog-content flex-grow-1" style="min-width: 0;">
                                                <a style="background-color: {{$badge_color}}; color: #fff; padding: 2px 8px; border-radius: 3px; font-size: 11px; font-weight: 700; text-transform: uppercase; margin-bottom: 5px; display: inline-block;" href="{{url('category/'.$rec_item->category)}}">{{$rec_cat ? $rec_cat->category_name : 'News'}}</a>
                                                <h3 class="box-title-18" style="font-size: 14px; line-height: 1.4; margin-top: 1px; margin-bottom: 5px; font-weight: 700;">
                                                    <a class="hover-line" href="{{url('new-Detail/'.$rec_item->id)}}" style="color: #080809; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">{{$rec_item->title}}</a>
                                                </h3>
                                                <div class="blog-meta" style="font-size: 12px; color: #8B929C;">
                                                    <a href="#" style="color: #8B929C;"><i class="fal fa-calendar-days" style="margin-right: 4px;"></i>{{$rec_item->created_at->format('d M, Y')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trending News Carousel Section -->
    <div class="space-top trending-news-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="sec-title has-line">Trending News</h2>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slick-prev="#blog-slide1" class="slick-arrow default"><i class="far fa-arrow-left"></i></button>
                            <button data-slick-next="#blog-slide1" class="slick-arrow default"><i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #blog-slide1 {
                    display: block !important;
                }
                #blog-slide1 .slick-track {
                    display: flex !important;
                    flex-wrap: nowrap !important;
                }
                #blog-slide1 .slick-slide {
                    float: left !important;
                    height: auto !important;
                }
            </style>
            <div class="row th-carousel" id="blog-slide1" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2" data-autoplay="true" data-autoplay-speed="3500">
                <?php 
                $demo_carousel_imgs = [
                    'assets/img/blog/blog_s_1_1.jpg',
                    'assets/img/blog/blog_s_1_2.jpg',
                    'assets/img/blog/blog_s_1_3.jpg',
                    'assets/img/blog/blog_s_1_4.jpg',
                    'assets/img/blog/blog_s_1_5.jpg',
                    'assets/img/blog/blog_4_1.jpg',
                    'assets/img/blog/blog_4_3.jpg',
                    'assets/img/blog/blog_4_5.jpg'
                ];
                $used_carousel_imgs = [];
                foreach ($news->take(8) as $t_idx => $t_news) { 
                    $t_cat = Category::find($t_news->category);
                    $img_fn = $t_news->image;
                    $fallback_img = asset($demo_carousel_imgs[$t_idx % count($demo_carousel_imgs)]);
                    if (empty($img_fn) || in_array($img_fn, $used_carousel_imgs)) {
                        $card_img = $fallback_img;
                    } else {
                        $used_carousel_imgs[] = $img_fn;
                        $card_img = asset('upload/admins/news/'.$img_fn);
                    }
                ?>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-style1"> 
                        <div class="blog-img">
                            <img src="{{$card_img}}" alt="{{$t_news->title}}" style="height: 220px; width: 100%; object-fit: cover;" onerror="this.src='{{$fallback_img}}'">
                            <a data-theme-color="#00D084" href="{{url('category/'.$t_news->category)}}" class="category">{{$t_cat ? $t_cat->category_name : 'News'}}</a>
                        </div>
                        <h3 class="box-title-22">
                            <a class="hover-line" href="{{url('new-Detail/'.$t_news->id)}}">{{Str::limit($t_news->title, 50)}}</a>
                        </h3>
                        <div class="blog-meta">
                            <a href="#"><i class="far fa-user"></i>By - News Today</a> 
                            <a href="#"><i class="fal fa-calendar-days"></i>{{$t_news->created_at->format('d M, Y')}}</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <script>
            (function() {
                function initTrendingCarousel() {
                    if (typeof jQuery !== 'undefined' && jQuery.fn.slick) {
                        var $slider = jQuery('#blog-slide1');
                        if ($slider.length) {
                            if ($slider.hasClass('slick-initialized')) {
                                $slider.slick('unslick');
                            }
                            $slider.slick({
                                dots: false,
                                arrows: false,
                                autoplay: true,
                                autoplaySpeed: 3500,
                                speed: 800,
                                infinite: true,
                                slidesToShow: 4,
                                slidesToScroll: 1,
                                pauseOnHover: true,
                                pauseOnFocus: true,
                                responsive: [
                                    { breakpoint: 1200, settings: { slidesToShow: 3, autoplay: true, autoplaySpeed: 3500 } },
                                    { breakpoint: 992, settings: { slidesToShow: 2, autoplay: true, autoplaySpeed: 3500 } },
                                    { breakpoint: 576, settings: { slidesToShow: 1, autoplay: true, autoplaySpeed: 3500 } }
                                ]
                            });

                            jQuery(document).off('click.tPrev', '[data-slick-prev="#blog-slide1"]').on('click.tPrev', '[data-slick-prev="#blog-slide1"]', function(e) {
                                e.preventDefault();
                                $slider.slick('slickPrev');
                                $slider.slick('slickPause');
                                $slider.slick('slickPlay');
                            });

                            jQuery(document).off('click.tNext', '[data-slick-next="#blog-slide1"]').on('click.tNext', '[data-slick-next="#blog-slide1"]', function(e) {
                                e.preventDefault();
                                $slider.slick('slickNext');
                                $slider.slick('slickPause');
                                $slider.slick('slickPlay');
                            });

                            jQuery('[data-slick-prev="#blog-slide1"], [data-slick-next="#blog-slide1"]').on('mouseenter', function() {
                                $slider.slick('slickPause');
                            }).on('mouseleave', function() {
                                $slider.slick('slickPlay');
                            });
                        }
                    } else {
                        setTimeout(initTrendingCarousel, 150);
                    }
                }
                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', initTrendingCarousel);
                } else {
                    initTrendingCarousel();
                }
            })();
            </script>
        </div>
    </div>

    <!-- Latest Video Playlist Section -->
    <section class="space-top space-bottom" style="background-color: #08090C; color: #ffffff; padding: 50px 0; margin-top: 50px;">
        <div class="container">
            <!-- Section Header -->
            <div class="row align-items-center mb-4">
                <div class="col">
                    <h2 class="sec-title has-line" style="color: #ffffff; font-size: 24px; font-weight: 800; margin: 0;">Latest Video Playlist</h2>
                </div>
            </div>

            <?php 
            $video_items = $news->skip(1)->take(4);
            $cat_badge_colors = ['#00D084', '#007BFF', '#FF1D50', '#00D084'];
            $first_video = $video_items->first();
            $first_v_cat = $first_video ? Category::find($first_video->category) : null;
            ?>

            @if($first_video)
            <div class="row gy-4">
                <!-- Left Column: Playlist Items -->
                <div class="col-lg-5 col-xl-4">
                    <div class="d-flex flex-column gap-3" style="position: relative; border-right: 1px solid #1A1D26; padding-right: 20px;">
                        <?php 
                        foreach($video_items as $v_idx => $v_item) {
                            $v_cat = Category::find($v_item->category);
                            $v_badge_color = $cat_badge_colors[$v_idx % count($cat_badge_colors)];
                            $is_active_item = ($v_idx === 0);
                            $item_image = asset('upload/admins/news/'.$v_item->image);
                            $item_detail_url = url('new-Detail/'.$v_item->id);
                            $item_date = $v_item->created_at->format('d M, Y');
                            $item_cat_name = $v_cat ? $v_cat->category_name : 'News';
                        ?>
                        <div class="video-playlist-item d-flex align-items-center p-2 rounded {{ $is_active_item ? 'active' : '' }}" 
                             style="cursor: pointer; transition: background 0.2s ease, border-color 0.2s ease; border-right: 3px solid {{ $is_active_item ? '#FF1D50' : 'transparent' }}; margin-right: -23px;"
                             onclick="selectVideoItem(this, '{{ addslashes($v_item->title) }}', '{{ $item_image }}', '{{ addslashes($item_cat_name) }}', '{{ $v_badge_color }}', '{{ $item_date }}', '{{ $item_detail_url }}')">
                            
                            <!-- Thumbnail with Play Icon -->
                            <div class="flex-shrink-0" style="width: 90px; height: 80px; border-radius: 6px; overflow: hidden; position: relative; background-color: #1A1D26; margin-right: 14px;">
                                <img src="{{ $item_image }}" alt="{{ $v_item->title }}" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.src='{{asset('assets/img/blog/blog_3_1.jpg')}}'">
                                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 28px; height: 28px; border-radius: 50%; background: rgba(0,0,0,0.65); display: flex; align-items: center; justify-content: center; color: #ffffff;">
                                    <i class="fas fa-play" style="font-size: 10px; margin-left: 2px;"></i>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="flex-grow-1" style="min-width: 0;">
                                <span class="v-badge" style="background-color: {{ $v_badge_color }}; color: #ffffff; font-size: 10px; font-weight: 800; text-transform: uppercase; padding: 2px 7px; border-radius: 3px; display: inline-block; margin-bottom: 4px;">{{ $item_cat_name }}</span>
                                <h4 style="font-size: 14px; font-weight: 700; line-height: 1.35; margin: 0 0 4px 0; color: #ffffff; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                    {{ $v_item->title }}
                                </h4>
                                <div style="font-size: 12px; color: #8B929C;">
                                    <i class="fal fa-calendar-days" style="margin-right: 4px;"></i>{{ $item_date }}
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <!-- Right Column: Main Featured Video Display -->
                <div class="col-lg-7 col-xl-8">
                    <div style="background-color: transparent;">
                        <!-- Main Video Box -->
                        <div style="width: 100%; height: 380px; border-radius: 6px; overflow: hidden; position: relative; background-color: #1A1D26;">
                            <img id="main-video-img" src="{{ asset('upload/admins/news/'.$first_video->image) }}" alt="{{ $first_video->title }}" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.src='{{asset('assets/img/blog/blog_3_1.jpg')}}'">
                            
                            <!-- Large Central Play Button -->
                            <a id="main-video-play-link" href="{{ url('new-Detail/'.$first_video->id) }}" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 56px; height: 56px; border-radius: 50%; background: #ffffff; display: flex; align-items: center; justify-content: center; color: #000000; box-shadow: 0 4px 15px rgba(0,0,0,0.4); text-decoration: none; transition: transform 0.2s ease;">
                                <i class="fas fa-play" style="font-size: 18px; margin-left: 3px;"></i>
                            </a>
                        </div>

                        <!-- Main Video Info -->
                        <div style="margin-top: 18px;">
                            <h3 style="font-size: 22px; font-weight: 800; color: #ffffff; margin-top: 0; margin-bottom: 12px; line-height: 1.35;">
                                <a id="main-video-title-link" href="{{ url('new-Detail/'.$first_video->id) }}" style="color: #ffffff; text-decoration: none;">
                                    <span id="main-video-title">{{ $first_video->title }}</span>
                                </a>
                            </h3>
                            <div style="display: flex; align-items: center; gap: 12px; font-size: 13px; color: #9EA6B5; flex-wrap: wrap;">
                                <span id="main-video-cat" style="background-color: #FF1D50; color: #ffffff; font-size: 11px; font-weight: 800; text-transform: uppercase; padding: 4px 10px; border-radius: 3px; display: inline-block;">{{ $first_v_cat ? $first_v_cat->category_name : 'News' }}</span>
                                <span><i class="far fa-user" style="margin-right: 5px;"></i>By - I CATCH தமிழ்</span>
                                <span style="color: #333846;">|</span>
                                <span><i class="fal fa-calendar-days" style="margin-right: 5px;"></i><span id="main-video-date">{{ $first_video->created_at->format('d M, Y') }}</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>

    <script>
    function selectVideoItem(element, title, image, catName, catColor, date, detailUrl) {
        document.querySelectorAll('.video-playlist-item').forEach(function(item) {
            item.classList.remove('active');
            item.style.borderRight = '3px solid transparent';
        });
        element.classList.add('active');
        element.style.borderRight = '3px solid #FF1D50';
        
        var mainImg = document.getElementById('main-video-img');
        var mainTitle = document.getElementById('main-video-title');
        var mainTitleLink = document.getElementById('main-video-title-link');
        var mainPlayLink = document.getElementById('main-video-play-link');
        var mainCat = document.getElementById('main-video-cat');
        var mainDate = document.getElementById('main-video-date');

        if(mainImg) mainImg.src = image;
        if(mainTitle) mainTitle.innerText = title;
        if(mainTitleLink) mainTitleLink.href = detailUrl;
        if(mainPlayLink) mainPlayLink.href = detailUrl;
        if(mainCat) {
            mainCat.innerText = catName;
            mainCat.style.backgroundColor = catColor;
        }
        if(mainDate) mainDate.innerText = date;
    }
    </script>

    <!-- Category Wise News Section -->
    <section class="space">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <?php 
                    $allowed_cats = ['தமிழ்நாடு'];
                    foreach ($category as $categories) {
                        $cat_name_check = trim($categories->category_name);
                        $is_allowed = false;
                        foreach ($allowed_cats as $allowed) {
                            if ($cat_name_check === $allowed || strpos($cat_name_check, $allowed) !== false) {
                                $is_allowed = true;
                                break;
                            }
                        }
                        if (!$is_allowed) continue;
                        $cat_news = News::where('category', $categories->id)->orderBy('id', 'desc')->get();
                        if($cat_news->count() > 0) {
                    ?>
                    <div class="mb-40">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="sec-title has-line">{{$categories->category_name}}</h2>
                            </div>
                            <div class="col-auto">
                                <a href="{{url('category/'.$categories->id)}}" class="th-btn style2">View All <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                        <div class="row gy-4">
                            <?php foreach ($cat_news->take(4) as $cn_item) { ?>
                            <div class="col-sm-6 border-blog two-column">
                                <div class="blog-style1">
                                    <div class="blog-img">
                                        <img src="{{asset('upload/admins/news/'.$cn_item->image)}}" alt="{{$cn_item->title}}" style="height: 200px; width: 100%; object-fit: cover;">
                                        <a data-theme-color="#4E4BD0" href="{{url('category/'.$categories->id)}}" class="category">{{$categories->category_name}}</a>
                                    </div>
                                    <h3 class="box-title-24">
                                        <a class="hover-line" href="{{url('new-Detail/'.$cn_item->id)}}">{{Str::limit($cn_item->title, 55)}}</a>
                                    </h3>
                                    <div class="blog-meta">
                                        <a href="#"><i class="far fa-user"></i>By - News Today</a> 
                                        <a href="#"><i class="fal fa-calendar-days"></i>{{$cn_item->created_at->format('d M, Y')}}</a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } } ?>
                </div>

                <!-- Right Sidebar Widgets -->
                <div class="col-xl-4 mt-35 mt-xl-0 sidebar-wrap">
                    <aside class="sidebar-area">
                        <!-- Search Widget -->
                        <div class="widget widget_search">
                            <form class="search-form" action="{{url('search')}}" method="GET">
                                <input type="text" name="search" placeholder="Search news...">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>

                        <!-- Categories Widget -->
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <?php foreach($category as $cat_item) { 
                                    $item_name_check = trim($cat_item->category_name);
                                    $item_is_allowed = false;
                                    foreach ($allowed_cats as $allowed) {
                                        if ($item_name_check === $allowed || strpos($item_name_check, $allowed) !== false) {
                                            $item_is_allowed = true;
                                            break;
                                        }
                                    }
                                    if (!$item_is_allowed) continue;
                                ?>
                                <li>
                                    <a href="{{url('category/'.$cat_item->id)}}">{{$cat_item->category_name}}</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>

                        <!-- Recent Posts Widget -->
                        <div class="widget">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <?php foreach ($recentNews->take(4) as $r_item) { ?>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{url('new-Detail/'.$r_item->id)}}">
                                            <img src="{{asset('upload/admins/news/'.$r_item->image)}}" alt="{{$r_item->title}}" style="height: 70px; width: 80px; object-fit: cover;">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title">
                                            <a class="hover-line" href="{{url('new-Detail/'.$r_item->id)}}">{{Str::limit($r_item->title, 45)}}</a>
                                        </h4>
                                        <div class="recent-post-meta">
                                            <a href="#"><i class="fal fa-calendar-days"></i>{{$r_item->created_at->format('d M, Y')}}</a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

                        <!-- Social Follow Widget -->
                        <div class="widget">
                            <h3 class="widget_title">Follow Us</h3>
                            <div class="th-social style-black">
                                <a href="https://www.facebook.com/share/vz7XqaoGpgPGvjq8/?mibextid=qi2Omg" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://x.com/newstodaytami" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/newstodaytamilofficial?igsh=ZWhvaHdtamR1NGlj" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    @include('includes/footer')
    <!-- footer end  -->

    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102"><path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path></svg></div>

    <script src="{{asset('assets/js/vendor/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('assets/js/app.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/i18n.js')}}"></script>
</body>

</html>
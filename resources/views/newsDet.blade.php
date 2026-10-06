<?php Use App\Models\Category;
Use App\Models\News;
Use App\Models\News_views_Model;
?>
<!doctype html>
<html class="no-js" data-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>I CATCH தமிழ் - {{$newsDet->title}}</title>
    <meta name="author" content="News Today Tamil">
    <meta name="description" content="<?php echo strip_tags($newsDet->short_description); ?>">
    <meta name="keywords" content="Global updates,Politics,Economy,Technology,Breaking news">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    <meta property="og:title" content="{{$newsDet->title}}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:image" content="{{asset('upload/admins/news/'.$newsDet->image)}}"/>
    <meta property="og:site_name" content="News Today Tamil"/>
    <meta property="og:description" content="<?php echo strip_tags($newsDet->short_description); ?>"/>

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
</head>

<body>
    <!-- preloader -->
    @include('includes/preloader')
    <!-- preloader end -->

    <!-- header -->
    @include('includes/header')
    <!-- header end  -->

    <!-- Breadcrumb -->
    <div class="breadcumb-wrapper">
        <div class="container">
            <ul class="breadcumb-menu">
                <li><a href="{{url('/')}}">Home</a></li>
                <?php $cateDet = Category::find($newsDet->category); ?>
                <li><a href="{{url('category/'.$newsDet->category)}}">{{$cateDet ? $cateDet->category_name : 'News'}}</a></li>
                <li>Article Detail</li>
            </ul>
        </div>
    </div>

    <!-- Blog Details Section -->
    <section class="th-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="th-blog blog-single">
                        <a data-theme-color="#4E4BD0" href="{{url('category/'.$newsDet->category)}}" class="category">
                            {{$cateDet ? $cateDet->category_name : 'News'}}
                        </a>
                        <h2 class="blog-title">{{$newsDet->title}}</h2>
                        <div class="blog-meta">
                            <a class="author" href="#"><i class="far fa-user"></i>By - News Today</a> 
                            <a href="#"><i class="fal fa-calendar-days"></i><?php echo $newsDet->created_at->format('d M, Y')?></a>
                            <?php $news_views1 = News_views_Model::where('news_id',$newsDet->id)->first(); ?>
                            <span><i class="far fa-eye"></i> Views: <?php echo !empty($news_views1) ? $news_views1->view : '0'; ?></span>
                        </div>
                        <div class="blog-img mb-4" style="border-radius: 10px; overflow: hidden;">
                            <img src="{{asset('upload/admins/news/'.$newsDet->image)}}" alt="{{$newsDet->title}}" style="width: 100%; max-height: 500px; object-fit: cover;" onerror="this.src='{{asset('assets/img/blog/blog_3_1.jpg')}}'">
                        </div>

                        <div class="blog-content-wrap">
                            <div class="share-links-wrap">
                                <div class="share-links">
                                    <span class="share-links-title">Share Post:</span>
                                    <div class="multi-social">
                                        <a href="https://www.facebook.com/sharer.php?u={{url()->current()}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url={{url()->current()}}" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="whatsapp://send?text={{urlencode (url()->current())}}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-info-wrap">
                                    <button class="blog-info print_btn" onclick="window.print()">Print : <i class="fas fa-print"></i></button>
                                    <span class="blog-info ms-sm-auto"><i class="fas fa-eye"></i> <?php echo !empty($news_views1) ? $news_views1->view : '0'; ?></span>
                                </div>
                                <div class="content mt-4">
                                    <div class="lead-text font-weight-bold mb-3" style="font-size: 1.15rem; line-height: 1.7;">
                                        <?php echo nl2br($newsDet->short_description); ?>
                                    </div>
                                    <hr class="my-4">
                                    <div class="full-details-text" style="font-size: 1.05rem; line-height: 1.8;">
                                        <?php echo nl2br($newsDet->description); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Related Post Carousel -->
                    <div class="related-post-wrapper pt-30 mb-30">
                        <div class="row align-items-center">
                            <div class="col"><h2 class="sec-title has-line">Related News</h2></div>
                            <div class="col-auto">
                                <div class="sec-btn">
                                    <div class="icon-box">
                                        <button data-slick-prev="#related-post-slide" class="slick-arrow default"><i class="far fa-arrow-left"></i></button>
                                        <button data-slick-next="#related-post-slide" class="slick-arrow default"><i class="far fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row slider-shadow th-carousel" id="related-post-slide" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="2">
                            <?php foreach ($recentNews->take(6) as $r_item) { 
                                $r_cat = Category::find($r_item->category);
                            ?>
                            <div class="col-sm-6 col-xl-4">
                                <div class="blog-style1">
                                    <div class="blog-img" style="border-radius: 6px; overflow: hidden;">
                                        <img src="{{asset('upload/admins/news/'.$r_item->image)}}" alt="{{$r_item->title}}" style="height: 180px; width: 100%; object-fit: cover;" onerror="this.src='{{asset('assets/img/blog/blog_3_1.jpg')}}'">
                                        <a data-theme-color="#FF1D50" href="{{url('category/'.$r_item->category)}}" class="category" style="background-color: #FF1D50;">{{$r_cat ? $r_cat->category_name : 'News'}}</a>
                                    </div>
                                    <h3 class="box-title-22">
                                        <a class="hover-line" href="{{url('new-Detail/'.$r_item->id)}}">{{Str::limit($r_item->title, 45)}}</a>
                                    </h3>
                                    <div class="blog-meta">
                                        <a href="#"><i class="far fa-user"></i>By - News Today</a> 
                                        <a href="#"><i class="fal fa-calendar-days"></i>{{$r_item->created_at->format('d M, Y')}}</a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Area -->
                <div class="col-xxl-3 col-lg-4 sidebar-wrap">
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
                                <?php foreach($category as $cat_item) { ?>
                                <li>
                                    <a href="{{url('category/'.$cat_item->id)}}">{{$cat_item->category_name}}</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>

                        <!-- Popular News Widget -->
                        <div class="widget">
                            <h3 class="widget_title">Popular News</h3>
                            <div class="recent-post-wrap">
                                <?php
                                $pop_count = 0;
                                foreach ($popular_news as $popular_all_news) {
                                    $most_view_news = News::where('id', $popular_all_news->news_id)->first();
                                    if(!empty($most_view_news) && $pop_count < 4) {
                                        $pop_count++;
                                ?>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{url('new-Detail/'.$most_view_news->id)}}">
                                            <img src="{{asset('upload/admins/news/'.$most_view_news->image)}}" alt="{{$most_view_news->title}}" style="height: 70px; width: 80px; object-fit: cover;">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title">
                                            <a class="hover-line" href="{{url('new-Detail/'.$most_view_news->id)}}">{{Str::limit($most_view_news->title, 45)}}</a>
                                        </h4>
                                        <div class="recent-post-meta">
                                            <a href="#"><i class="fal fa-calendar-days"></i>{{$most_view_news->created_at->format('d M, Y')}}</a>
                                        </div>
                                    </div>
                                </div>
                                <?php } } ?>
                            </div>
                        </div>

                        <!-- Follow Us Widget -->
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
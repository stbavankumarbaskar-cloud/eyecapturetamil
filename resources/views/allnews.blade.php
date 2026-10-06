<?php Use App\Models\Category;
Use App\Models\News;
Use App\Models\News_views_Model;
?>
<!doctype html>
<html class="no-js" data-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>I CATCH தமிழ் - <?php echo $cate_det->category_name ?? 'Category'?></title>
    <meta name="author" content="News Today Tamil">
    <meta name="description" content="Today's headlines feature global updates on politics, economy, and technology. Stay informed with breaking news on international affairs, business trends, and scientific advancements.">
    <meta name="keywords" content="Global updates,Politics,Economy,Technology,Breaking news,International affairs,Business trends">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

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
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;400;500;600;700;800;900&amp;family=Noto+Sans+Tamil:wght@400;500;600;700&amp;family=Poppins:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/i18n.css')}}">

    <style>
        .category-page-banner {
            background-color: #08090C !important;
            padding: 30px 0 !important;
            border-bottom: 1px solid #1A1D26 !important;
            margin-bottom: 35px !important;
        }
        .cat-card-item {
            background: #FFFFFF !important;
            border: 1px solid #E2E8F0 !important;
            border-radius: 12px !important;
            padding: 18px !important;
            margin-bottom: 24px !important;
            transition: transform 0.25s ease, box-shadow 0.25s ease !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03) !important;
        }
        .cat-card-item:hover {
            transform: translateY(-3px) !important;
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.09) !important;
            border-color: #CBD5E1 !important;
        }
        .cat-card-img-wrap {
            width: 290px !important;
            height: 195px !important;
            flex-shrink: 0 !important;
            border-radius: 8px !important;
            overflow: hidden !important;
            position: relative !important;
        }
        .cat-card-img-wrap img {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
            transition: transform 0.4s ease !important;
        }
        .cat-card-item:hover .cat-card-img-wrap img {
            transform: scale(1.06) !important;
        }
        .cat-card-title {
            font-size: 19px !important;
            font-weight: 700 !important;
            line-height: 1.4 !important;
            margin: 8px 0 10px 0 !important;
            font-family: 'Poppins', 'Noto Sans Tamil', sans-serif !important;
        }
        .cat-card-title a {
            color: #0F172A !important;
            text-decoration: none !important;
            transition: color 0.2s ease !important;
        }
        .cat-card-title a:hover {
            color: #FF1D50 !important;
        }
        .cat-badge {
            background-color: #FF1D50 !important;
            color: #FFFFFF !important;
            padding: 4px 10px !important;
            border-radius: 4px !important;
            font-size: 11.5px !important;
            font-weight: 700 !important;
            text-transform: uppercase !important;
            text-decoration: none !important;
            display: inline-block !important;
        }
        .sidebar-card-widget {
            background: #FFFFFF !important;
            border: 1px solid #E2E8F0 !important;
            border-radius: 12px !important;
            padding: 22px !important;
            margin-bottom: 24px !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03) !important;
        }
        .sidebar-widget-title {
            color: #0F172A !important;
            font-size: 17px !important;
            font-weight: 700 !important;
            margin-bottom: 18px !important;
            padding-bottom: 8px !important;
            border-bottom: 2px dashed #E2E8F0 !important;
            position: relative !important;
        }
        .sidebar-widget-title::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: #FF1D50;
        }
        .th-pagination {
            display: flex !important;
            justify-content: center !important;
            width: 100% !important;
        }
        .th-pagination nav {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
        }
        .th-pagination nav > div {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 8px !important;
            flex-wrap: wrap !important;
        }
        .th-pagination nav p,
        .th-pagination .text-sm,
        .th-pagination .leading-5,
        .th-pagination div > div:first-child,
        .th-pagination small {
            display: none !important;
        }
        .custom-pagination-list {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 8px !important;
            list-style: none !important;
            padding: 0 !important;
            margin: 0 !important;
            flex-wrap: wrap !important;
        }
        .custom-pagination-list li {
            margin: 0 !important;
            padding: 0 !important;
            display: inline-block !important;
        }
        .custom-pagination-list li a,
        .custom-pagination-list li span {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 42px !important;
            height: 42px !important;
            border-radius: 50% !important;
            border: 1px solid #E2E8F0 !important;
            background: #FFFFFF !important;
            color: #334155 !important;
            text-decoration: none !important;
            font-weight: 700 !important;
            font-size: 14px !important;
            transition: all 0.2s ease !important;
            box-shadow: 0 2px 6px rgba(0,0,0,0.04) !important;
        }
        .custom-pagination-list li a:hover {
            border-color: #FF1D50 !important;
            color: #FF1D50 !important;
            transform: translateY(-2px) !important;
            box-shadow: 0 4px 10px rgba(255, 29, 80, 0.15) !important;
        }
        .custom-pagination-list li.active span {
            background-color: #FF1D50 !important;
            color: #FFFFFF !important;
            border-color: #FF1D50 !important;
            box-shadow: 0 4px 12px rgba(255, 29, 80, 0.35) !important;
        }
        .custom-pagination-list li.disabled span {
            opacity: 0.35 !important;
            cursor: not-allowed !important;
            background: #F1F5F9 !important;
            box-shadow: none !important;
        }

        /* Responsive Media Queries for Mobile & Tablet */
        @media (max-width: 767px) {
            .cat-card-img-wrap {
                width: 100% !important;
                height: 210px !important;
                margin-bottom: 14px !important;
            }
            .category-page-banner {
                padding: 24px 0 !important;
                margin-bottom: 24px !important;
            }
            .category-page-banner h1 {
                font-size: 22px !important;
            }
            .cat-card-title {
                font-size: 17px !important;
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

    <!-- Category Header Banner Section -->
    <div class="category-page-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <span class="cat-badge mb-2">பிரிவு / CATEGORY</span>
                    <h1 style="color: #ffffff; font-size: 28px; font-weight: 800; margin: 4px 0 8px 0; font-family: 'Poppins', 'Noto Sans Tamil', sans-serif;">
                        <?php echo $cate_det->category_name ?? 'செய்திகள் (News)'?>
                    </h1>
                    <ul style="display: flex; gap: 8px; align-items: center; list-style: none; padding: 0; margin: 0; font-size: 13.5px; color: #94A3B8;">
                        <li><a href="{{url('/')}}" style="color: #CBD5E1; text-decoration: none;"><i class="far fa-home me-1"></i>முகப்பு</a></li>
                        <li><i class="far fa-chevron-right" style="font-size: 10px; color: #64748B;"></i></li>
                        <li style="color: #FF1D50; font-weight: 600;"><?php echo $cate_det->category_name ?? 'News'?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Category Blog List Section -->
    <section class="space-extra-bottom">
        <div class="container">
            <div class="row gx-4">
                <div class="col-xxl-9 col-lg-8">

                    <!-- Sub-category pills if available -->
                    @if(isset($sub_category) && count($sub_category) > 0)
                    <div class="sub-category-pills mb-4" style="display: flex; gap: 8px; flex-wrap: wrap; align-items: center; background: #F8FAFC; padding: 14px 18px; border-radius: 10px; border: 1px solid #E2E8F0;">
                        <span style="font-size: 13.5px; font-weight: 700; color: #0F172A; margin-right: 6px;"><i class="far fa-filter me-1" style="color: #FF1D50;"></i>உள் பிரிவுகள்:</span>
                        @foreach($sub_category as $sub)
                            <a href="{{url('sub_category_ByNews/'.$sub->id)}}" style="padding: 6px 14px; background-color: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 20px; color: #334155; font-size: 13px; font-weight: 600; text-decoration: none; transition: all 0.2s;" onmouseover="this.style.backgroundColor='#FF1D50'; this.style.color='#FFFFFF'; this.style.borderColor='#FF1D50';" onmouseout="this.style.backgroundColor='#FFFFFF'; this.style.color='#334155'; this.style.borderColor='#CBD5E1';">
                                {{$sub->category_name}}
                            </a>
                        @endforeach
                    </div>
                    @endif

                    <!-- Category Items List -->
                    <div class="mb-4">
                        <?php 
                        if(count($news) > 0) {
                            foreach ($news as $allnews) { 
                                $cateDet = Category::find($allnews->category);
                                $img_url = !empty($allnews->image) ? asset('upload/admins/news/'.$allnews->image) : asset('assets/img/blog/blog_3_1.jpg');
                        ?>
                        <div class="cat-card-item">
                            <div class="d-md-flex align-items-center gap-4">
                                <div class="cat-card-img-wrap mb-3 mb-md-0">
                                    <a href="{{url('new-Detail/'.$allnews->id)}}">
                                        <img src="{{$img_url}}" alt="{{$allnews->title}}" onerror="this.src='{{asset('assets/img/blog/blog_3_1.jpg')}}'">
                                    </a>
                                </div>
                                <div style="flex: 1; min-width: 0;">
                                    <a href="{{url('category/'.$allnews->category)}}" class="cat-badge">
                                        {{$cateDet ? $cateDet->category_name : 'News'}}
                                    </a>
                                    <h3 class="cat-card-title">
                                        <a href="{{url('new-Detail/'.$allnews->id)}}"><?php echo $allnews->title ?></a>
                                    </h3>
                                    <p style="color: #64748B; font-size: 13.5px; line-height: 1.55; margin-bottom: 12px; font-family: 'Poppins', 'Noto Sans Tamil', sans-serif;">
                                        <?php echo Str::limit(strip_tags($allnews->short_description), 140); ?>
                                    </p>
                                    <div style="display: flex; align-items: center; gap: 16px; font-size: 12px; color: #94A3B8; margin-bottom: 14px; flex-wrap: wrap;">
                                        <span><i class="far fa-user me-1"></i>By - News Today</span> 
                                        <span><i class="fal fa-calendar-days me-1"></i><?php echo $allnews->created_at->format('d M, Y')?></span>
                                    </div>
                                    <a href="{{url('new-Detail/'.$allnews->id)}}" style="display: inline-flex; align-items: center; gap: 6px; padding: 7px 16px; background-color: #1E293B; color: #FFFFFF; border-radius: 6px; font-size: 12.5px; font-weight: 600; text-decoration: none; transition: background 0.2s;" onmouseover="this.style.backgroundColor='#FF1D50'" onmouseout="this.style.backgroundColor='#1E293B'">
                                        Read More <i class="fas fa-arrow-up-right" style="font-size: 11px;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } } else { ?>
                        <div class="text-center py-5 px-4" style="background: #F8FAFC; border-radius: 12px; border: 2px dashed #CBD5E1; margin-bottom: 30px;">
                            <i class="far fa-newspaper" style="font-size: 48px; color: #CBD5E1; margin-bottom: 14px;"></i>
                            <h4 style="color: #0F172A; font-weight: 700; font-size: 18px; margin-bottom: 6px;">தற்போது செய்திகள் இல்லை</h4>
                            <p style="color: #64748B; font-size: 14px; max-width: 400px; margin: 0 auto 18px auto;">இந்த பிரிவில் செய்திகள் ஏதும் கண்டறியப்படவில்லை. தயவுசெய்து மற்ற பிரிவுகளை பார்வையிடவும்.</p>
                            <a href="{{url('/')}}" style="background-color: #FF1D50; color: #fff; padding: 10px 22px; border-radius: 6px; font-weight: 600; text-decoration: none; display: inline-block;">முகப்பிற்கு செல்ல</a>
                        </div>
                        <?php } ?>
                    </div>

                    <!-- Horizontal Pagination -->
                    @if(isset($news) && $news->lastPage() > 1)
                    <div class="th-pagination mt-4 mb-4">
                        <ul class="custom-pagination-list">
                            {{-- Previous Page Link --}}
                            @if ($news->onFirstPage())
                                <li class="disabled"><span><i class="far fa-chevron-left"></i></span></li>
                            @else
                                <li><a href="{{ $news->previousPageUrl() }}"><i class="far fa-chevron-left"></i></a></li>
                            @endif

                            {{-- Pagination Numbers --}}
                            @for ($i = 1; $i <= $news->lastPage(); $i++)
                                @if ($i == $news->currentPage())
                                    <li class="active"><span>{{ $i }}</span></li>
                                @else
                                    <li><a href="{{ $news->url($i) }}">{{ $i }}</a></li>
                                @endif
                            @endfor

                            {{-- Next Page Link --}}
                            @if ($news->hasMorePages())
                                <li><a href="{{ $news->nextPageUrl() }}"><i class="far fa-chevron-right"></i></a></li>
                            @else
                                <li class="disabled"><span><i class="far fa-chevron-right"></i></span></li>
                            @endif
                        </ul>
                    </div>
                    @endif
                </div>

                <!-- Sidebar Area -->
                <div class="col-xxl-3 col-lg-4">
                    <aside class="sidebar-area">
                        <!-- Search Widget -->
                        <div class="sidebar-card-widget">
                            <h3 class="sidebar-widget-title">Search News</h3>
                            <form action="{{url('search')}}" method="GET" style="position: relative;">
                                <input type="text" name="search" placeholder="Search news..." style="width: 100%; padding: 10px 42px 10px 14px; border: 1px solid #E2E8F0; border-radius: 6px; font-size: 13.5px; outline: none;">
                                <button type="submit" style="position: absolute; right: 4px; top: 4px; bottom: 4px; width: 34px; background: #FF1D50; border: none; border-radius: 4px; color: #fff; cursor: pointer;"><i class="far fa-search" style="font-size: 13px;"></i></button>
                            </form>
                        </div>

                        <!-- Categories Widget -->
                        <div class="sidebar-card-widget">
                            <h3 class="sidebar-widget-title">Categories</h3>
                            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 4px;">
                                <?php foreach($category as $cat_item) { ?>
                                <li style="border-bottom: 1px solid #F1F5F9; padding-bottom: 4px;">
                                    <a href="{{url('category/'.$cat_item->id)}}" style="display: flex; align-items: center; justify-content: space-between; padding: 7px 8px; color: #334155; text-decoration: none; font-size: 13.5px; font-weight: 600; border-radius: 4px; transition: all 0.2s;" onmouseover="this.style.backgroundColor='#F8FAFC'; this.style.color='#FF1D50';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#334155';">
                                        <span>{{$cat_item->category_name}}</span>
                                        <i class="far fa-chevron-right" style="font-size: 10px; color: #94A3B8;"></i>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>

                        <!-- Popular News Widget -->
                        <div class="sidebar-card-widget">
                            <h3 class="sidebar-widget-title">Popular News</h3>
                            <div style="display: flex; flex-direction: column; gap: 14px;">
                                <?php
                                $pop_count = 0;
                                foreach ($popular_news as $popular_all_news) {
                                    $most_view_news = News::where('id', $popular_all_news->news_id)->first();
                                    if(!empty($most_view_news) && $pop_count < 4) {
                                        $pop_count++;
                                        $pop_img = !empty($most_view_news->image) ? asset('upload/admins/news/'.$most_view_news->image) : asset('assets/img/blog/blog_3_1.jpg');
                                ?>
                                <div style="display: flex; gap: 12px; align-items: center;">
                                    <a href="{{url('new-Detail/'.$most_view_news->id)}}" style="flex-shrink: 0; display: block;">
                                        <img src="{{$pop_img}}" alt="{{$most_view_news->title}}" style="height: 68px; width: 80px; object-fit: cover; border-radius: 6px;" onerror="this.src='{{asset('assets/img/blog/blog_3_1.jpg')}}'">
                                    </a>
                                    <div style="flex: 1; min-width: 0;">
                                        <h6 style="margin: 0 0 4px 0; font-size: 13px; font-weight: 700; line-height: 1.35; font-family: 'Poppins', 'Noto Sans Tamil', sans-serif;">
                                            <a href="{{url('new-Detail/'.$most_view_news->id)}}" style="color: #0F172A; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#FF1D50'" onmouseout="this.style.color='#0F172A'">
                                                {{Str::limit($most_view_news->title, 42)}}
                                            </a>
                                        </h6>
                                        <span style="font-size: 11.5px; color: #94A3B8; font-weight: 500;">
                                            <i class="fal fa-calendar-days me-1"></i>{{$most_view_news->created_at->format('d M, Y')}}
                                        </span>
                                    </div>
                                </div>
                                <?php } } ?>
                            </div>
                        </div>

                        <!-- Follow Us Widget -->
                        <div class="sidebar-card-widget">
                            <h3 class="sidebar-widget-title">Follow Us</h3>
                            <div style="display: flex; gap: 10px; align-items: center;">
                                <a href="https://www.facebook.com/share/vz7XqaoGpgPGvjq8/?mibextid=qi2Omg" target="_blank" style="width: 36px; height: 36px; border-radius: 50%; background-color: #1E293B; display: flex; align-items: center; justify-content: center; color: #ffffff; text-decoration: none; transition: background 0.2s;" onmouseover="this.style.backgroundColor='#FF1D50'" onmouseout="this.style.backgroundColor='#1E293B'"><i class="fab fa-facebook-f" style="font-size: 13px;"></i></a>
                                <a href="https://x.com/newstodaytami" target="_blank" style="width: 36px; height: 36px; border-radius: 50%; background-color: #1E293B; display: flex; align-items: center; justify-content: center; color: #ffffff; text-decoration: none; transition: background 0.2s;" onmouseover="this.style.backgroundColor='#FF1D50'" onmouseout="this.style.backgroundColor='#1E293B'"><i class="fab fa-twitter" style="font-size: 13px;"></i></a>
                                <a href="https://www.instagram.com/newstodaytamilofficial?igsh=ZWhvaHdtamR1NGlj" target="_blank" style="width: 36px; height: 36px; border-radius: 50%; background-color: #1E293B; display: flex; align-items: center; justify-content: center; color: #ffffff; text-decoration: none; transition: background 0.2s;" onmouseover="this.style.backgroundColor='#FF1D50'" onmouseout="this.style.backgroundColor='#1E293B'"><i class="fab fa-linkedin-in" style="font-size: 13px;"></i></a>
                                <a href="#" target="_blank" style="width: 36px; height: 36px; border-radius: 50%; background-color: #1E293B; display: flex; align-items: center; justify-content: center; color: #ffffff; text-decoration: none; transition: background 0.2s;" onmouseover="this.style.backgroundColor='#FF1D50'" onmouseout="this.style.backgroundColor='#1E293B'"><i class="fab fa-whatsapp" style="font-size: 13px;"></i></a>
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
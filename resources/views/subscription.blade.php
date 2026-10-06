<?php Use App\Models\Category;
Use App\Models\News;
Use App\Models\News_views_Model;
?>
<!doctype html>
<html class="no-js" data-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>I CATCH தமிழ் - Subscription</title>
    <meta name="author" content="News Today Tamil">
    <meta name="description" content="Subscribe to News Today Tamil newsletter and digital subscription to get unlimited breaking news, daily digests, and exclusive magazine articles.">
    <meta name="keywords" content="Subscription, Tamil News, Digital Magazine, Daily Newsletter, Breaking News">
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
        .sub-hero-banner {
            background-color: #08090C !important;
            padding: 35px 0 !important;
            border-bottom: 1px solid #1A1D26 !important;
            margin-bottom: 35px !important;
        }
        .sub-card {
            background: #FFFFFF !important;
            border: 1px solid #E2E8F0 !important;
            border-radius: 12px !important;
            padding: 24px !important;
            margin-bottom: 24px !important;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04) !important;
        }
        .qr-box {
            background: #F8FAFC !important;
            border: 2px dashed #CBD5E1 !important;
            border-radius: 12px !important;
            padding: 20px !important;
            text-align: center !important;
        }
        .qr-box img {
            max-width: 240px !important;
            width: 100% !important;
            height: auto !important;
            border-radius: 8px !important;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08) !important;
        }
        .pricing-card {
            background: #FFFFFF !important;
            border: 1px solid #E2E8F0 !important;
            border-radius: 12px !important;
            padding: 24px 20px !important;
            text-align: center !important;
            position: relative !important;
            transition: transform 0.25s, box-shadow 0.25s !important;
        }
        .pricing-card:hover {
            transform: translateY(-4px) !important;
            box-shadow: 0 12px 28px rgba(0,0,0,0.08) !important;
            border-color: #FF1D50 !important;
        }
        .pricing-card.featured {
            border: 2px solid #FF1D50 !important;
            background: linear-gradient(180deg, #FFF1F2 0%, #FFFFFF 100%) !important;
        }
        .badge-popular {
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            background: #FF1D50;
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            padding: 3px 12px;
            border-radius: 12px;
            text-transform: uppercase;
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
    </style>
</head>

<body>
    <!-- preloader -->
    @include('includes/preloader')
    <!-- preloader end -->

    <!-- header -->
    @include('includes/header')
    <!-- header end  -->

    <!-- Hero Banner -->
    <div class="sub-hero-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <span style="background: #FF1D50; color: #fff; padding: 4px 12px; border-radius: 4px; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">SUBSCRIPTION / சந்தா</span>
                    <h1 style="color: #ffffff; font-size: 28px; font-weight: 800; margin: 6px 0 8px 0; font-family: 'Poppins', 'Noto Sans Tamil', sans-serif;">
                        செய்திச் சந்தா (Digital News Subscription)
                    </h1>
                    <ul style="display: flex; gap: 8px; align-items: center; list-style: none; padding: 0; margin: 0; font-size: 13.5px; color: #94A3B8;">
                        <li><a href="{{url('/')}}" style="color: #CBD5E1; text-decoration: none;"><i class="far fa-home me-1"></i>முகப்பு</a></li>
                        <li><i class="far fa-chevron-right" style="font-size: 10px; color: #64748B;"></i></li>
                        <li style="color: #FF1D50; font-weight: 600;">Subscription</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Section -->
    <section class="space-extra-bottom">
        <div class="container">

            <!-- Flash Session Feedback -->
            @if(Session::has('success_message'))
                <div class="alert alert-success alert-dismissible fade show mb-4" role="alert" style="border-radius: 8px;">
                    <i class="far fa-check-circle me-2"></i> {{ Session::get('success_message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if(Session::has('error_message'))
                <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert" style="border-radius: 8px;">
                    <i class="far fa-exclamation-triangle me-2"></i> {{ Session::get('error_message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="row gx-4">
                <div class="col-xxl-9 col-lg-8">

                    <!-- QR Code & Newsletter Row -->
                    <div class="sub-card">
                        <div class="row align-items-center gy-4">
                            <!-- QR Code Section -->
                            <div class="col-md-6 text-center">
                                <div class="qr-box">
                                    <h5 style="color: #0F172A; font-size: 16px; font-weight: 700; margin-bottom: 12px; font-family: 'Poppins', 'Noto Sans Tamil', sans-serif;">
                                        <i class="far fa-qrcode me-2" style="color: #FF1D50;"></i>SCAN TO PAY - UPI QR CODE
                                    </h5>
                                    <p style="color: #64748B; font-size: 12.5px; margin-bottom: 14px;">GPay / PhonePe / PayTM வழியே கட்டணம் செலுத்த QR Code ஐ ஸ்கேன் செய்யவும்.</p>
                                    <img src="{{asset('images/qr_code1.jpeg')}}" alt="Subscription QR Code" onerror="this.src='{{asset('images/qr_code.jpeg')}}'">
                                </div>
                            </div>

                            <!-- Form Section -->
                            <div class="col-md-6">
                                <div style="padding: 10px 6px;">
                                    <h3 style="color: #0F172A; font-size: 22px; font-weight: 800; margin-bottom: 8px; font-family: 'Poppins', 'Noto Sans Tamil', sans-serif;">
                                        Don't Miss Out!
                                    </h3>
                                    <p style="color: #64748B; font-size: 14px; line-height: 1.6; margin-bottom: 20px;">
                                        எங்களின் பிரத்யேக செய்திகள் மற்றும் தினசரி இதழ்களை உடனுக்குடன் பெற மின்னஞ்சல் முகவரியை பதிவு செய்யவும.
                                    </p>

                                    <form action="{{url('add_subscription')}}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label style="font-size: 13px; font-weight: 600; color: #334155; margin-bottom: 6px; display: block;">மின்னஞ்சல் முகவரி (Email Address) *</label>
                                            <input type="email" name="emailid" required placeholder="Enter your email address" style="width: 100%; height: 50px; padding: 12px 16px; border: 1px solid #CBD5E1; border-radius: 8px; font-size: 14px; outline: none; transition: border-color 0.2s;" onfocus="this.style.borderColor='#FF1D50'" onblur="this.style.borderColor='#CBD5E1'">
                                        </div>
                                        <button type="submit" style="width: 100%; height: 48px; background-color: #FF1D50; color: #FFFFFF; border: none; border-radius: 8px; font-size: 15px; font-weight: 700; cursor: pointer; transition: background 0.2s;" onmouseover="this.style.backgroundColor='#E00034'" onmouseout="this.style.backgroundColor='#FF1D50'">
                                            Subscribe Now <i class="fas fa-arrow-right ms-2"></i>
                                        </button>
                                    </form>

                                    <!-- Benefits List -->
                                    <div class="mt-4 pt-2">
                                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px; font-size: 13px; color: #475569;">
                                            <li><i class="far fa-check-circle me-2" style="color: #10B981;"></i> பிரத்யேக தினசரி செய்திகள் (Daily Digest)</li>
                                            <li><i class="far fa-check-circle me-2" style="color: #10B981;"></i> விளம்பரமில்லா வேகமான செய்தி வாசிப்பு</li>
                                            <li><i class="far fa-check-circle me-2" style="color: #10B981;"></i> Instant Breaking News WhatsApp Updates</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Subscription Pricing Plans -->
                    <div class="mt-40 mb-30">
                        <div class="text-center mb-4">
                            <h3 style="color: #0F172A; font-size: 22px; font-weight: 800; font-family: 'Poppins', 'Noto Sans Tamil', sans-serif; margin-bottom: 6px;">
                                சந்தா திட்டங்கள் (Subscription Plans)
                            </h3>
                            <p style="color: #64748B; font-size: 14px;">உங்களுக்கு உகந்த சிறந்த சந்தா திட்டத்தை தேர்ந்தெடுக்கவும்.</p>
                        </div>

                        <div class="row gy-4 justify-content-center">
                            <!-- Plan 1 -->
                            <div class="col-md-4">
                                <div class="pricing-card">
                                    <h4 style="font-size: 16px; font-weight: 700; color: #334155; margin-bottom: 12px;">Monthly Plan</h4>
                                    <div style="font-size: 32px; font-weight: 800; color: #0F172A; margin-bottom: 4px;">₹99 <span style="font-size: 13px; color: #64748B; font-weight: 500;">/ மாதம்</span></div>
                                    <p style="font-size: 12.5px; color: #64748B; margin-bottom: 20px;">1 Month Unlimited Access</p>
                                    <ul style="list-style: none; padding: 0; margin: 0 0 20px 0; font-size: 13px; color: #475569; text-align: left; display: flex; flex-direction: column; gap: 8px;">
                                        <li><i class="far fa-check text-success me-2"></i> Digital Newspaper PDF</li>
                                        <li><i class="far fa-check text-success me-2"></i> Breaking News Alerts</li>
                                        <li><i class="far fa-check text-success me-2"></i> Mobile & Desktop Access</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Plan 2 (Featured) -->
                            <div class="col-md-4">
                                <div class="pricing-card featured">
                                    <span class="badge-popular">BEST VALUE</span>
                                    <h4 style="font-size: 16px; font-weight: 700; color: #FF1D50; margin-bottom: 12px;">Annual Pass</h4>
                                    <div style="font-size: 32px; font-weight: 800; color: #0F172A; margin-bottom: 4px;">₹899 <span style="font-size: 13px; color: #64748B; font-weight: 500;">/ வருடம்</span></div>
                                    <p style="font-size: 12.5px; color: #FF1D50; font-weight: 600; margin-bottom: 20px;">Save 25% Off Yearly</p>
                                    <ul style="list-style: none; padding: 0; margin: 0 0 20px 0; font-size: 13px; color: #475569; text-align: left; display: flex; flex-direction: column; gap: 8px;">
                                        <li><i class="far fa-check text-success me-2"></i> 1 Year Unlimited Access</li>
                                        <li><i class="far fa-check text-success me-2"></i> Premium Exclusive Articles</li>
                                        <li><i class="far fa-check text-success me-2"></i> E-Paper & PDF Downloads</li>
                                        <li><i class="far fa-check text-success me-2"></i> Ad-free Experience</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Plan 3 -->
                            <div class="col-md-4">
                                <div class="pricing-card">
                                    <h4 style="font-size: 16px; font-weight: 700; color: #334155; margin-bottom: 12px;">Half-Yearly</h4>
                                    <div style="font-size: 32px; font-weight: 800; color: #0F172A; margin-bottom: 4px;">₹499 <span style="font-size: 13px; color: #64748B; font-weight: 500;">/ 6 மாதம்</span></div>
                                    <p style="font-size: 12.5px; color: #64748B; margin-bottom: 20px;">6 Months Full Access</p>
                                    <ul style="list-style: none; padding: 0; margin: 0 0 20px 0; font-size: 13px; color: #475569; text-align: left; display: flex; flex-direction: column; gap: 8px;">
                                        <li><i class="far fa-check text-success me-2"></i> 6 Months E-Paper Access</li>
                                        <li><i class="far fa-check text-success me-2"></i> Instant News Notifications</li>
                                        <li><i class="far fa-check text-success me-2"></i> Priority Support</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

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
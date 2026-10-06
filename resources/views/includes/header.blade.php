<div class="popup-search-box" style="position: fixed !important; top: 0 !important; left: 0 !important; right: 0 !important; bottom: 0 !important; width: 100vw !important; height: 100vh !important; min-width: 100vw !important; min-height: 100vh !important; max-width: 100vw !important; max-height: 100vh !important; background: #08090C !important; background-color: #08090C !important; z-index: 9999999999 !important; display: flex !important; flex-direction: column !important; align-items: center !important; justify-content: center !important; opacity: 0; visibility: hidden; pointer-events: none; transition: opacity 0.25s ease, visibility 0.25s ease !important; padding: 20px !important; margin: 0 !important; box-sizing: border-box !important; transform: none !important; -webkit-transform: none !important; border-radius: 0 !important;">
    <button class="searchClose" type="button" style="position: fixed !important; top: 25px !important; right: 30px !important; left: auto !important; bottom: auto !important; background: #08090C !important; border: 1px solid #FF1D50 !important; color: #FF1D50 !important; width: 44px !important; height: 44px !important; border-radius: 50% !important; display: flex !important; align-items: center !important; justify-content: center !important; font-size: 18px !important; cursor: pointer !important; transition: all 0.2s ease !important; z-index: 10000000000 !important; transform: none !important; -webkit-transform: none !important; margin: 0 !important; padding: 0 !important; outline: none !important;">
        <i class="fal fa-times"></i>
    </button>
    <form action="{{url('search')}}" method="GET" style="position: relative !important; top: auto !important; left: auto !important; right: auto !important; bottom: auto !important; width: 90% !important; max-width: 620px !important; display: flex !important; align-items: center !important; justify-content: space-between !important; background: #08090C !important; border: 2px solid #FF1D50 !important; border-radius: 50px !important; padding: 6px 10px 6px 24px !important; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.9) !important; margin: 0 auto !important; box-sizing: border-box !important; transform: none !important; -webkit-transform: none !important;">
        <input type="text" name="search" placeholder="What are you looking for?" style="width: 100% !important; height: 48px !important; background: transparent !important; border: none !important; outline: none !important; color: #FFFFFF !important; font-size: 17px !important; font-weight: 400 !important; padding: 0 10px 0 0 !important; margin: 0 !important; font-family: 'Poppins', sans-serif !important; box-shadow: none !important;"> 
        <button type="submit" style="position: relative !important; top: auto !important; right: auto !important; left: auto !important; bottom: auto !important; background: transparent !important; border: none !important; color: #FFFFFF !important; width: 44px !important; height: 44px !important; display: flex !important; align-items: center !important; justify-content: center !important; font-size: 20px !important; cursor: pointer !important; flex-shrink: 0 !important; transition: color 0.2s, transform 0.2s !important; transform: none !important; -webkit-transform: none !important; margin: 0 !important; padding: 0 !important;">
            <i class="fal fa-search"></i>
        </button>
    </form>
</div>

<!-- Slide-Out Offcanvas Drawer (Right Side with White Background, Matching Reference Image 2) -->
<div class="th-menu-wrapper">
    <div class="th-menu-area text-start">
        <button class="th-menu-toggle" style="position: absolute; top: 22px; right: 22px; width: 36px; height: 36px; border-radius: 50%; border: 1px solid #E2E8F0; background: #FFFFFF; color: #0F172A; font-size: 15px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.2s;" onmouseover="this.style.backgroundColor='#F1F5F9'" onmouseout="this.style.backgroundColor='#FFFFFF'">
            <i class="fal fa-times"></i>
        </button>
        
        <div class="mobile-logo mb-3 mt-1">
            <a href="{{url('')}}">
                <img src="{{asset('assets/img/logo.jpg')}}" alt="I CATCH தமிழ்" style="max-height: 70px; width: auto; border-radius: 6px;">
            </a>
        </div>

        <p style="font-size: 13.5px; line-height: 1.6; color: #64748B; margin-bottom: 22px;">
            Magazines cover a wide subjects, including not limited to fashion, lifestyle, health, politics, business, Entertainment, sports, science,
        </p>

        <!-- Social Links (Dark Circular Buttons) -->
        <div class="footer-social mb-4" style="display: flex; gap: 10px; align-items: center;">
            <a href="https://www.facebook.com/share/vz7XqaoGpgPGvjq8/?mibextid=qi2Omg" target="_blank" style="width: 36px; height: 36px; border-radius: 50%; background-color: #1E293B; display: flex; align-items: center; justify-content: center; color: #ffffff; text-decoration: none; transition: background 0.2s;" onmouseover="this.style.backgroundColor='#FF1D50'" onmouseout="this.style.backgroundColor='#1E293B'"><i class="fab fa-facebook-f" style="font-size: 13px;"></i></a>
            <a href="https://x.com/newstodaytami" target="_blank" style="width: 36px; height: 36px; border-radius: 50%; background-color: #1E293B; display: flex; align-items: center; justify-content: center; color: #ffffff; text-decoration: none; transition: background 0.2s;" onmouseover="this.style.backgroundColor='#FF1D50'" onmouseout="this.style.backgroundColor='#1E293B'"><i class="fab fa-twitter" style="font-size: 13px;"></i></a>
            <a href="https://www.instagram.com/newstodaytamilofficial?igsh=ZWhvaHdtamR1NGlj" target="_blank" style="width: 36px; height: 36px; border-radius: 50%; background-color: #1E293B; display: flex; align-items: center; justify-content: center; color: #ffffff; text-decoration: none; transition: background 0.2s;" onmouseover="this.style.backgroundColor='#FF1D50'" onmouseout="this.style.backgroundColor='#1E293B'"><i class="fab fa-linkedin-in" style="font-size: 13px;"></i></a>
            <a href="#" target="_blank" style="width: 36px; height: 36px; border-radius: 50%; background-color: #1E293B; display: flex; align-items: center; justify-content: center; color: #ffffff; text-decoration: none; transition: background 0.2s;" onmouseover="this.style.backgroundColor='#FF1D50'" onmouseout="this.style.backgroundColor='#1E293B'"><i class="fab fa-whatsapp" style="font-size: 13px;"></i></a>
        </div>

        <!-- Recent Posts Section (Matching Reference Image 2) -->
        <div class="recent-posts-wrapper mb-4">
            <h4 style="color: #0F172A; font-size: 16px; font-weight: 700; margin-bottom: 16px; padding-bottom: 8px; border-bottom: 2px dashed #E2E8F0; position: relative;">
                Recent Posts
                <span style="position: absolute; bottom: -2px; left: 0; width: 45px; height: 2px; background-color: #FF1D50;"></span>
            </h4>
            <div class="recent-post-list" style="display: flex; flex-direction: column; gap: 16px;">
                <?php 
                $recent_items = isset($Breakingnews) ? collect($Breakingnews)->take(3) : [];
                foreach($recent_items as $item) { 
                    $img = !empty($item->image) ? asset('upload/admins/news/'.$item->image) : asset('assets/img/blog/blog_3_1.jpg');
                ?>
                <div class="recent-post-item" style="display: flex; gap: 14px; align-items: center;">
                    <a href="{{url('new-Detail/'.$item->id)}}" style="flex-shrink: 0; display: block;">
                        <img src="{{$img}}" alt="" style="width: 80px; height: 68px; object-fit: cover; border-radius: 6px;" onerror="this.src='{{asset('assets/img/blog/blog_3_1.jpg')}}'">
                    </a>
                    <div style="flex: 1; min-width: 0;">
                        <h6 style="margin: 0 0 4px 0; font-size: 13px; font-weight: 700; line-height: 1.35; font-family: 'Poppins', 'Noto Sans Tamil', sans-serif;">
                            <a href="{{url('new-Detail/'.$item->id)}}" style="color: #1E293B; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#FF1D50'" onmouseout="this.style.color='#1E293B'">
                                {{\Illuminate\Support\Str::limit($item->title, 42)}}
                            </a>
                        </h6>
                        <span style="font-size: 11.5px; color: #94A3B8; font-weight: 500; display: flex; align-items: center; gap: 4px;">
                            <i class="fal fa-calendar-days" style="color: #94A3B8;"></i> {{date('d F, Y', strtotime($item->created_at ?? date('Y-m-d')))}}
                        </span>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- Topics & Categories Navigation -->
        <div class="th-mobile-menu mt-2">
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 14px; padding-bottom: 8px; border-bottom: 2px dashed #E2E8F0; position: relative;">
                <h4 style="color: #0F172A; font-size: 16px; font-weight: 700; margin: 0; font-family: 'Poppins', 'Noto Sans Tamil', sans-serif;">
                    பிரிவுகள் <span style="font-size: 13px; color: #64748B; font-weight: 500;">(Categories)</span>
                </h4>
                <span style="position: absolute; bottom: -2px; left: 0; width: 45px; height: 2px; background-color: #FF1D50;"></span>
            </div>

            <ul class="offcanvas-cat-list" style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 2px;">
                <li style="margin: 0;">
                    <a href="{{url('')}}" class="offcanvas-cat-link">
                        <span style="display: flex; align-items: center; gap: 10px;">
                            <i class="far fa-chevron-right" style="font-size: 11px; color: #FF1D50;"></i>
                            <span>முகப்பு</span>
                        </span>
                    </a>
                </li>
                <?php foreach ($category as $categories) { ?>
                <li style="margin: 0;">
                    <a href="{{url('category/'.$categories->id)}}" class="offcanvas-cat-link">
                        <span style="display: flex; align-items: center; gap: 10px;">
                            <i class="far fa-chevron-right" style="font-size: 11px; color: #FF1D50;"></i>
                            <span>{{$categories->category_name}}</span>
                        </span>
                    </a>
                </li>
                <?php } ?>
                <li style="margin-top: 8px;">
                    <a href="{{url('subscription')}}" style="display: flex; align-items: center; gap: 10px; padding: 10px 14px; background-color: #FFF1F2; border-radius: 6px; color: #FF1D50; font-weight: 700; text-decoration: none; font-size: 14px; transition: background 0.2s;" onmouseover="this.style.backgroundColor='#FFE4E6'" onmouseout="this.style.backgroundColor='#FFF1F2'">
                        <i class="far fa-star" style="font-size: 13px;"></i>
                        <span>Subscription</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Main Header -->
<header class="th-header header-layout1">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <li><i class="fal fa-calendar-days"></i><a href="#">{{date('d F, Y')}}</a></li>
                            <li><a href="{{url('PrivacyPolicy')}}">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li>
                                <a class="theme-toggler" href="#">
                                    <span class="dark"><i class="fas fa-moon"></i>Dark Mode</span> 
                                    <span class="light"><i class="fas fa-sun-bright"></i>Light Mode</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li class="d-none d-sm-inline-block">
                                @if(Session::has('logged_user_name'))
                                    <span style="font-weight: 600; font-size: 13px; font-family: 'Poppins', sans-serif; color: #0F172A;">
                                        <i class="far fa-user-circle me-1" style="color: #FF1D50;"></i> Hi, {{ Session::get('logged_user_name') }}
                                        <a href="{{url('user_logout')}}" style="color: #FF1D50; text-decoration: none; margin-left: 8px; font-weight: 700;">(Logout)</a>
                                    </span>
                                @else
                                    <a href="#" id="open-login-modal-btn" style="color: inherit; text-decoration: none; font-weight: 600; font-size: 13px; font-family: 'Poppins', sans-serif;"><i class="far fa-user me-1" style="color: #FF1D50;"></i>Login / Register</a>
                                @endif
                            </li>
                            <li>
                                <div class="social-links">
                                    <a href="https://www.facebook.com/share/vz7XqaoGpgPGvjq8/?mibextid=qi2Omg" target="_blank"><i class="fab fa-facebook-f"></i></a> 
                                    <a href="https://x.com/newstodaytami" target="_blank"><i class="fab fa-twitter"></i></a> 
                                    <a href="https://www.instagram.com/newstodaytamilofficial?igsh=ZWhvaHdtamR1NGlj" target="_blank"><i class="fab fa-instagram"></i></a> 
                                    <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="header-logo">
                        <a href="{{url('')}}">
                            <img class="light-img" src="{{asset('assets/img/logo.jpg')}}" alt="I CATCH தமிழ்" style="max-height: 78px; width: auto; border-radius: 6px;">
                            <img class="dark-img" src="{{asset('assets/img/logo.jpg')}}" alt="I CATCH தமிழ்" style="max-height: 78px; width: auto; border-radius: 6px;">
                        </a>
                    </div>
                </div>
                <div class="col-auto d-none d-lg-block text-end">
                    <div class="header-ads">
                        <a href="#">
                            <img class="light-img" src="{{asset('assets/img/ads/ads_banner_1.jpg')}}" alt="ads">
                            <img class="dark-img" src="{{asset('assets/img/ads/ads_banner_1_dark.jpg')}}" alt="ads">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Bar with Priority Items & More Dropdown -->
    <div class="sticky-wrapper">
        <div class="menu-area custom-nav-wrapper">
            <style>
                .custom-nav-wrapper {
                    background-color: #08090C !important;
                    border-bottom: 1px solid #1A1D26;
                }
                .custom-nav-container {
                    display: flex !important;
                    align-items: center !important;
                    justify-content: space-between !important;
                    min-height: 52px !important;
                }
                .custom-main-menu {
                    display: flex !important;
                    align-items: center !important;
                    flex: 1 !important;
                }
                .custom-main-menu ul {
                    display: flex !important;
                    align-items: center !important;
                    list-style: none !important;
                    margin: 0 !important;
                    padding: 0 !important;
                    white-space: nowrap !important;
                }
                .custom-main-menu ul li {
                    display: inline-block !important;
                    margin: 0 !important;
                    padding: 0 !important;
                    position: relative !important;
                }
                .custom-main-menu > ul > li > a {
                    display: inline-block !important;
                    padding: 14px 11px !important;
                    color: #E2E8F0 !important;
                    font-weight: 600 !important;
                    font-size: 14px !important;
                    text-decoration: none !important;
                    transition: color 0.2s ease !important;
                    font-family: 'Poppins', 'Noto Sans Tamil', sans-serif !important;
                }
                .custom-main-menu > ul > li > a:not(.custom-sub-link):hover {
                    color: #FF1D50 !important;
                }
                .custom-main-menu ul li a.custom-sub-link,
                .custom-sub-link {
                    background-color: #FF1D50 !important;
                    color: #FFFFFF !important;
                    padding: 6px 14px !important;
                    border-radius: 20px !important;
                    font-weight: 700 !important;
                    margin-left: 8px !important;
                    display: inline-block !important;
                }
                .custom-main-menu ul li a.custom-sub-link:hover,
                .custom-sub-link:hover {
                    background-color: #E00034 !important;
                    color: #FFFFFF !important;
                }
                
                /* Dropdown Styling */
                .has-more-dropdown {
                    position: relative !important;
                }
                .more-dropdown-panel {
                    display: none;
                    position: absolute;
                    top: 100%;
                    right: 0;
                    min-width: 180px;
                    background-color: #0E0F15 !important;
                    border: 1px solid #1A1D26 !important;
                    border-radius: 8px !important;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.6) !important;
                    padding: 6px 0 !important;
                    z-index: 1000 !important;
                }
                .has-more-dropdown:hover .more-dropdown-panel {
                    display: flex !important;
                    flex-direction: column !important;
                }
                .custom-main-menu .more-dropdown-panel a,
                .more-dropdown-panel a {
                    display: block !important;
                    width: 100% !important;
                    padding: 10px 20px !important;
                    color: #CBD5E1 !important;
                    font-size: 14px !important;
                    font-weight: 600 !important;
                    text-decoration: none !important;
                    white-space: nowrap !important;
                    transition: background 0.2s ease, color 0.2s ease !important;
                    box-sizing: border-box !important;
                    border-bottom: 1px solid rgba(255, 255, 255, 0.06) !important;
                    background-color: transparent !important;
                }
                .more-dropdown-panel a:last-child {
                    border-bottom: none !important;
                }
                .custom-main-menu .more-dropdown-panel a:hover,
                .more-dropdown-panel a:hover {
                    background-color: #FF1D50 !important;
                    color: #FFFFFF !important;
                }
                
                /* Popup Search Box Overlay Styling - 100% Solid Full Screen Coverage */
                .popup-search-box {
                    position: fixed !important;
                    top: 0 !important;
                    left: 0 !important;
                    right: 0 !important;
                    bottom: 0 !important;
                    width: 100vw !important;
                    height: 100vh !important;
                    min-width: 100vw !important;
                    min-height: 100vh !important;
                    max-width: 100vw !important;
                    max-height: 100vh !important;
                    background: #08090C !important;
                    background-color: #08090C !important;
                    z-index: 9999999999 !important;
                    display: flex !important;
                    flex-direction: column !important;
                    align-items: center !important;
                    justify-content: center !important;
                    opacity: 0 !important;
                    visibility: hidden !important;
                    pointer-events: none !important;
                    transition: opacity 0.25s ease, visibility 0.25s ease !important;
                    padding: 20px !important;
                    margin: 0 !important;
                    box-sizing: border-box !important;
                    transform: none !important;
                    -webkit-transform: none !important;
                    border-radius: 0 !important;
                }
                .popup-search-box.show {
                    opacity: 1 !important;
                    visibility: visible !important;
                    pointer-events: auto !important;
                    display: flex !important;
                    width: 100vw !important;
                    height: 100vh !important;
                    transform: none !important;
                    -webkit-transform: none !important;
                }
                .popup-search-box form {
                    position: relative !important;
                    top: auto !important;
                    left: auto !important;
                    right: auto !important;
                    bottom: auto !important;
                    width: 90% !important;
                    max-width: 620px !important;
                    display: flex !important;
                    align-items: center !important;
                    justify-content: space-between !important;
                    background: #08090C !important;
                    border: 2px solid #FF1D50 !important;
                    border-radius: 50px !important;
                    padding: 6px 10px 6px 24px !important;
                    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.9) !important;
                    transform: scale(0.96) !important;
                    -webkit-transform: scale(0.96) !important;
                    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
                    margin: 0 auto !important;
                    box-sizing: border-box !important;
                }
                .popup-search-box.show form {
                    transform: scale(1) !important;
                    -webkit-transform: scale(1) !important;
                }
                .popup-search-box input,
                .popup-search-box form input {
                    width: 100% !important;
                    height: 48px !important;
                    background: transparent !important;
                    border: none !important;
                    outline: none !important;
                    color: #FFFFFF !important;
                    font-size: 17px !important;
                    font-weight: 400 !important;
                    padding: 0 10px 0 0 !important;
                    margin: 0 !important;
                    font-family: 'Poppins', sans-serif !important;
                    box-shadow: none !important;
                }
                .popup-search-box input::placeholder,
                .popup-search-box form input::placeholder {
                    color: #CBD5E1 !important;
                    opacity: 0.8 !important;
                }
                .popup-search-box form button,
                .popup-search-box form button[type="submit"] {
                    position: relative !important;
                    top: auto !important;
                    right: auto !important;
                    left: auto !important;
                    bottom: auto !important;
                    background: transparent !important;
                    border: none !important;
                    color: #FFFFFF !important;
                    width: 44px !important;
                    height: 44px !important;
                    display: flex !important;
                    align-items: center !important;
                    justify-content: center !important;
                    font-size: 20px !important;
                    cursor: pointer !important;
                    flex-shrink: 0 !important;
                    transition: color 0.2s, transform 0.2s !important;
                    transform: none !important;
                    -webkit-transform: none !important;
                    margin: 0 !important;
                    padding: 0 !important;
                }
                .popup-search-box form button[type="submit"]:hover {
                    color: #FF1D50 !important;
                    transform: scale(1.1) !important;
                    -webkit-transform: scale(1.1) !important;
                }
                .popup-search-box .searchClose,
                button.searchClose {
                    position: fixed !important;
                    top: 25px !important;
                    right: 30px !important;
                    left: auto !important;
                    bottom: auto !important;
                    background: #08090C !important;
                    border: 1px solid #FF1D50 !important;
                    color: #FF1D50 !important;
                    width: 44px !important;
                    height: 44px !important;
                    border-radius: 50% !important;
                    display: flex !important;
                    align-items: center !important;
                    justify-content: center !important;
                    font-size: 18px !important;
                    cursor: pointer !important;
                    transition: all 0.2s ease !important;
                    z-index: 10000000000 !important;
                    transform: none !important;
                    -webkit-transform: none !important;
                    margin: 0 !important;
                    padding: 0 !important;
                    outline: none !important;
                }
                .popup-search-box .searchClose:hover,
                button.searchClose:hover {
                    background: #FF1D50 !important;
                    color: #FFFFFF !important;
                    border-color: #FF1D50 !important;
                    transform: rotate(90deg) scale(1.05) !important;
                    -webkit-transform: rotate(90deg) scale(1.05) !important;
                }

                /* Offcanvas Drawer Styling (Right-side slide out with White Background, matching Reference Image 2) */
                .th-menu-wrapper {
                    position: fixed !important;
                    top: 0 !important;
                    left: 0 !important;
                    right: 0 !important;
                    bottom: 0 !important;
                    width: 100vw !important;
                    height: 100vh !important;
                    background: rgba(0, 0, 0, 0.65) !important;
                    backdrop-filter: blur(3px) !important;
                    z-index: 99999 !important;
                    opacity: 0 !important;
                    visibility: hidden !important;
                    transition: opacity 0.3s ease, visibility 0.3s ease !important;
                    display: flex !important;
                    justify-content: flex-end !important;
                }
                .th-menu-wrapper.th-body-visible {
                    opacity: 1 !important;
                    visibility: visible !important;
                }
                .th-menu-area {
                    position: relative !important;
                    width: 380px !important;
                    max-width: 90vw !important;
                    height: 100vh !important;
                    overflow-y: auto !important;
                    overflow-x: hidden !important;
                    background-color: #FFFFFF !important;
                    color: #1E293B !important;
                    padding: 30px 22px !important;
                    transform: translateX(100%) !important;
                    transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
                    box-shadow: -10px 0 35px rgba(0,0,0,0.2) !important;
                }
                .th-menu-wrapper.th-body-visible .th-menu-area {
                    transform: translateX(0) !important;
                }
                
                .offcanvas-cat-link {
                    display: flex !important;
                    align-items: center !important;
                    justify-content: space-between !important;
                    padding: 9px 12px !important;
                    color: #1E293B !important;
                    text-decoration: none !important;
                    font-size: 14px !important;
                    font-weight: 600 !important;
                    font-family: 'Poppins', 'Noto Sans Tamil', sans-serif !important;
                    border-radius: 6px !important;
                    border-bottom: 1px solid #F1F5F9 !important;
                    transition: background 0.2s, color 0.2s, transform 0.2s !important;
                    word-break: break-word !important;
                }
                .offcanvas-cat-link:hover {
                    background-color: #F8FAFC !important;
                    color: #FF1D50 !important;
                    padding-left: 16px !important;
                }

                /* Remove duplicate arrows from theme CSS ::before pseudo-elements */
                .th-mobile-menu ul li a::before,
                .th-mobile-menu li a::before,
                .th-mobile-menu a::before,
                .offcanvas-cat-link::before,
                .offcanvas-cat-list a::before {
                    display: none !important;
                    content: none !important;
                }

                /* Responsive Media Queries */
                @media (max-width: 991px) {
                    .header-middle {
                        display: none !important;
                    }
                    .custom-main-menu {
                        display: none !important;
                    }
                    .custom-nav-container {
                        padding: 6px 0 !important;
                        justify-content: space-between !important;
                        width: 100% !important;
                    }
                    .custom-nav-container .header-logo img {
                        max-height: 38px !important;
                    }
                }
                @media (max-width: 576px) {
                    .th-menu-area {
                        width: 100vw !important;
                        max-width: 100vw !important;
                        padding: 24px 16px !important;
                    }
                }
            </style>
            <div class="container">
                <div class="custom-nav-container">
                    <!-- Mobile Logo -->
                    <div class="d-lg-none d-block">
                        <div class="header-logo">
                            <a href="{{url('')}}">
                                <img src="{{asset('assets/img/logo.jpg')}}" alt="I CATCH தமிழ்" style="max-height: 55px; width: auto; border-radius: 6px;">
                            </a>
                        </div>
                    </div>

                    <?php 
                    if (isset($category) && count($category) > 0) {
                        $active_cats = $category->filter(function($c) {
                            return (string)$c->status !== '0' && strtolower((string)$c->status) !== 'in active';
                        });
                        $main_categories = $active_cats->take(6);
                        $more_categories = $active_cats->skip(6);
                    } else {
                        $main_categories = collect([]);
                        $more_categories = collect([]);
                    }
                    ?>

                    <!-- Clean Header Navigation Flow with More Dropdown -->
                    <nav class="custom-main-menu d-none d-lg-flex">
                        <ul>
                            <li><a href="{{url('')}}">முகப்பு</a></li>
                            <?php foreach ($main_categories as $main_cat) { ?>
                                <li><a href="{{url('category/'.$main_cat->id)}}">{{$main_cat->category_name}}</a></li>
                            <?php } ?>
                            
                            @if(count($more_categories) > 0)
                            <li class="has-more-dropdown">
                                <a href="#" style="color: #FF1D50 !important; font-weight: 700;">மேலும் <i class="fas fa-chevron-down" style="font-size: 10px; margin-left: 4px;"></i></a>
                                <div class="more-dropdown-panel">
                                    <?php foreach ($more_categories as $m_cat) { ?>
                                        <a href="{{url('category/'.$m_cat->id)}}">{{$m_cat->category_name}}</a>
                                    <?php } ?>
                                </div>
                            </li>
                            @endif

                            <li><a href="{{url('subscription')}}" class="custom-sub-link">Subscription</a></li>
                        </ul>
                    </nav>

                    <!-- Search Button & Red Square Offcanvas Hamburger Toggle -->
                    <div class="d-flex align-items-center gap-2 flex-shrink-0 ms-auto ms-lg-2">
                        <button type="button" class="simple-icon searchBoxToggler" style="width: 38px; height: 38px; border-radius: 50%; background-color: #1A1D26; border: none; color: #FFFFFF; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: background 0.2s;" onmouseover="this.style.backgroundColor='#FF1D50'" onmouseout="this.style.backgroundColor='#1A1D26'"><i class="far fa-search"></i></button>
                        
                        <!-- Red Square Hamburger Offcanvas Toggle Button -->
                        <button type="button" class="th-menu-toggle" style="width: 44px; height: 42px; background-color: #FF1D50; border: none; border-radius: 4px; color: #FFFFFF; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: background 0.2s;" onmouseover="this.style.backgroundColor='#E00034'" onmouseout="this.style.backgroundColor='#FF1D50'">
                            <i class="far fa-bars" style="font-size: 18px;"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Breaking News Marquee Section -->
<div class="container mt-3">
    <div class="news-area">
        <div class="title" style="background-color: #FF1D50; color: #fff; padding: 6px 15px; font-weight: 700; white-space: nowrap;">BREAKING NEWS :</div>
        <div class="news-wrap" style="overflow: hidden; flex: 1;">
            <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" style="padding-top: 5px;">
                <?php 
                foreach ($Breakingnews as $allNews) {
                    if($allNews->breaking_news == 'yes') {
                ?>
                    <a href="{{url('new-Detail/'.$allNews->id)}}" class="breaking-news" style="margin-right: 30px; font-weight: 600; color: inherit;">
                        {{$allNews->title}}
                    </a>
                <?php   }  
                }
                ?>
            </marquee>
        </div>
    </div>
</div>

<script>
(function() {
    function moveSearchToBody() {
        const searchBox = document.querySelector('.popup-search-box');
        if (searchBox && searchBox.parentElement !== document.body) {
            document.body.insertBefore(searchBox, document.body.firstChild);
        }
        const menuWrapper = document.querySelector('.th-menu-wrapper');
        if (menuWrapper && menuWrapper.parentElement !== document.body) {
            document.body.appendChild(menuWrapper);
        }
    }

    function openSearchOverlay() {
        const searchBox = document.querySelector('.popup-search-box');
        if (!searchBox) return;

        moveSearchToBody();

        searchBox.classList.add('show');
        searchBox.style.setProperty('opacity', '1', 'important');
        searchBox.style.setProperty('visibility', 'visible', 'important');
        searchBox.style.setProperty('pointer-events', 'auto', 'important');
        searchBox.style.setProperty('display', 'flex', 'important');
        searchBox.style.setProperty('position', 'fixed', 'important');
        searchBox.style.setProperty('top', '0px', 'important');
        searchBox.style.setProperty('left', '0px', 'important');
        searchBox.style.setProperty('right', '0px', 'important');
        searchBox.style.setProperty('bottom', '0px', 'important');
        searchBox.style.setProperty('width', '100vw', 'important');
        searchBox.style.setProperty('height', '100vh', 'important');
        searchBox.style.setProperty('min-width', '100vw', 'important');
        searchBox.style.setProperty('min-height', '100vh', 'important');
        searchBox.style.setProperty('max-width', '100vw', 'important');
        searchBox.style.setProperty('max-height', '100vh', 'important');
        searchBox.style.setProperty('transform', 'none', 'important');
        searchBox.style.setProperty('-webkit-transform', 'none', 'important');
        searchBox.style.setProperty('border-radius', '0', 'important');
        searchBox.style.setProperty('background', '#08090C', 'important');
        searchBox.style.setProperty('background-color', '#08090C', 'important');
        searchBox.style.setProperty('z-index', '9999999999', 'important');

        document.body.style.overflow = 'hidden';
        document.documentElement.style.overflow = 'hidden';

        const input = searchBox.querySelector('input[name="search"]');
        if (input) {
            setTimeout(function() { input.focus(); }, 50);
        }
    }

    function closeSearchOverlay() {
        const searchBox = document.querySelector('.popup-search-box');
        if (!searchBox) return;

        searchBox.classList.remove('show');
        searchBox.style.setProperty('opacity', '0', 'important');
        searchBox.style.setProperty('visibility', 'hidden', 'important');
        searchBox.style.setProperty('pointer-events', 'none', 'important');

        document.body.style.overflow = '';
        document.documentElement.style.overflow = '';
    }

    document.addEventListener('click', function(e) {
        const searchToggler = e.target.closest('.searchBoxToggler');
        if (searchToggler) {
            e.preventDefault();
            e.stopPropagation();
            openSearchOverlay();
            return;
        }

        const searchClose = e.target.closest('.searchClose');
        if (searchClose) {
            e.preventDefault();
            e.stopPropagation();
            closeSearchOverlay();
            return;
        }

        const searchBox = document.querySelector('.popup-search-box.show');
        if (searchBox && searchBox.contains(e.target) && !e.target.closest('form')) {
            closeSearchOverlay();
            return;
        }

        const themeToggler = e.target.closest('.theme-toggler, .theme-switcher');
        if (themeToggler) {
            e.preventDefault();
            e.stopPropagation();
            const htmlEl = document.documentElement;
            const currentTheme = htmlEl.getAttribute('data-theme');
            if (currentTheme === 'dark') {
                htmlEl.setAttribute('data-theme', 'light');
                htmlEl.classList.remove('dark-theme');
                htmlEl.classList.add('light-theme');
                localStorage.setItem('themePreference', 'light');
            } else {
                htmlEl.setAttribute('data-theme', 'dark');
                htmlEl.classList.remove('light-theme');
                htmlEl.classList.add('dark-theme');
                localStorage.setItem('themePreference', 'dark');
            }
            return;
        }

        const menuToggle = e.target.closest('.th-menu-toggle');
        if (menuToggle) {
            e.preventDefault();
            e.stopPropagation();
            const menuWrapper = document.querySelector('.th-menu-wrapper');
            if (menuWrapper) {
                if (menuWrapper.parentElement !== document.body) {
                    document.body.appendChild(menuWrapper);
                }
                menuWrapper.classList.toggle('th-body-visible');
            }
            return;
        }

        const menuWrapper = document.querySelector('.th-menu-wrapper.th-body-visible');
        if (menuWrapper && menuWrapper.contains(e.target) && !e.target.closest('.th-menu-area')) {
            menuWrapper.classList.remove('th-body-visible');
        }
    }, true);

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeSearchOverlay();
            const menuWrapper = document.querySelector('.th-menu-wrapper');
            if (menuWrapper) menuWrapper.classList.remove('th-body-visible');
        }
    });

    function initTheme() {
        const savedTheme = localStorage.getItem('themePreference');
        const htmlEl = document.documentElement;
        if (savedTheme === 'dark') {
            htmlEl.setAttribute('data-theme', 'dark');
            htmlEl.classList.remove('light-theme');
            htmlEl.classList.add('dark-theme');
        } else if (savedTheme === 'light') {
            htmlEl.setAttribute('data-theme', 'light');
            htmlEl.classList.remove('dark-theme');
            htmlEl.classList.add('light-theme');
        }
    }

    initTheme();

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', moveSearchToBody);
    } else {
        moveSearchToBody();
    }
})();
</script>
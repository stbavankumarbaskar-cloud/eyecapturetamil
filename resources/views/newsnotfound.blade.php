<?php Use App\Models\Category;
Use App\Models\News;

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>I CATCH தமிழ் - News Not Found</title>
        <meta name="robots" content="index, follow" />
        <meta name="keywords" content="Global updates,Politics,Economy,Technology,Breaking news,International affairs,Business trends,Scientific advancements,Climate action initiatives" />
        <meta name="description" content="Today's headlines feature global updates on politics, economy, and technology. Stay informed with breaking news on international affairs, business trends, and scientific advancements. Dive into the latest developments shaping our world, from climate action initiatives to cultural phenomena. Get your daily dose of information with concise summaries of today's top stories." />
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{url('css/plugins.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('css/style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('css/color.css')}}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{asset('img/logo.png')}}">
        <style>
            .preloaderBg {
	  position: fixed;
    z-index: 10; 
    top: 0;
	  background: #fff;
    width: 100%;
    height: 100%;
    text-align: center;
}

.preloader {
    margin-top:115px !important;
    margin: auto;
  	background: url(https://shreetechhub.com/demosite/newstoday/public/img/logo.png) no-repeat center;
    background-size: 150px;
    width: 300px;
    height: 300px;
}


.preloader2 {
  border: 5px solid #f3f3f3;
  border-top: 5px solid #f00;
  border-radius: 50%;
  width: 250px;
  height: 250px;
  animation: spin 1s ease-in-out infinite ;
  position: relative;
  margin: auto;
  top: -280px;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
        </style>
    </head>
    <body>
        <!-- main start  -->
        <div id="main">
            <!-- progress-bar  -->
            @include('includes/preloader')
            <!-- progress-bar end -->
            <!-- header -->
            @include('includes/header')
            <!-- header end  -->
            <!-- wrapper -->
            <div id="wrapper">
                <!-- content    -->
                <div class="content">
                    <div class="breadcrumbs-header fl-wrap">
                        <div class="container">
                            <div class="breadcrumbs-header_url">
                                <a href="#">Home</a><span>News Not Found</span>
                            </div>
                            <div class="scroll-down-wrap">
                                <div class="mousey">
                                    <div class="scroller"></div>
                                </div>
                                <span>Scroll Down To Discover</span>
                            </div>
                        </div>
                        <div class="pwh_bg"></div>
                    </div>
                    <!--section   -->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                   <img src="https://img.freepik.com/free-vector/404-error-with-portals-concept-illustration_114360-7870.jpg?size=626&ext=jpg&ga=GA1.1.44546679.1716422400&semt=ais_user">
                                   <br>
                                   <h2 align="center" style="font-weight: 900;font-size: 20px">Admin Delete This News</h2>
                                   <br>
                                    <div style="margin-top: 20px;">
                                        <a href="{{url('')}}" class="btn btn-danger" >Go Back</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- sidebar   -->
                                    <div class="sidebar-content fl-wrap fixed-bar">
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="box-widget-content">
                                                <div class="search-widget fl-wrap">
                                                    <form action="#">
                                                        <input name="se" id="se12" type="text" class="search" placeholder="Search..." value="" />
                                                        <button class="search-submit2" id="submit_btn12"><i class="far fa-search"></i> </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->						
                                        <!-- box-widget -->
                                        <!--<div class="box-widget fl-wrap">-->
                                        <!--    <div class="box-widget-content">-->
                                        <!--        <div class="banner-widget fl-wrap">-->
                                        <!--            <div class="bg-wrap bg-parallax-wrap-gradien">-->
                                        <!--                <div class="bg  " data-bg="{{url('images/bg/7.jpg')}}"></div>-->
                                        <!--            </div>-->
                                        <!--            <div class="banner-widget_content">-->
                                        <!--                <h5>Visit our awesome merch and souvenir online shop.</h5>-->
                                        <!--                <a href="#" class="btn float-btn color-bg small-btn">Our shop</a>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!-- box-widget  end -->					
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="widget-title">Categories</div>
                                            <div class="box-widget-content">
                                                <ul class="cat-wid-list">
                                                    <?php
                                                        foreach ($category as $categories) {
                                                            $numOfnews = News::where('category',$categories->id)->count();
                                                    ?>
                                                        <li><a href="{{url('category/'.$categories->id)}}">{{$categories->category_name}}</a><span>{{$numOfnews}}</span></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="widget-title">Popular Tags</div>
                                            <div class="box-widget-content">
                                                <div class="tags-widget">
                                                    <?php
                                                        foreach ($category as $categories) {
                                                    ?>
                                                        <a href="{{url('category/'.$categories->id)}}">{{$categories->category_name}}</a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->						
                                        <!-- box-widget -->
                                        <div class="box-widget-content">
                                                <div class="social-widget">
                                                    <a href="https://www.facebook.com/share/vz7XqaoGpgPGvjq8/?mibextid=qi2Omg" target="_blank" class="facebook-soc">
                                                    <i class="fab fa-facebook-f"></i>
                                                    <span class="soc-widget-title">Follow</span>
                                                    
                                                    </a>
                                                    <a href="https://x.com/newstodaytami" target="_blank" class="twitter-soc">
                                                    <i class="fa-brands fa-x-twitter"></i>
                                                    <span class="soc-widget-title">Follow</span>
                                                                                                  
                                                    </a> 
                                                    <a href="#" target="_blank" class="youtube-soc">
                                                    <i class="fab fa-youtube"></i>
                                                    <span class="soc-widget-title">Follow</span>
                                                                                                  
                                                    </a>                                                
                                                    <a href="https://www.instagram.com/newstodaytamilofficial?igsh=ZWhvaHdtamR1NGlj" target="_blank" class="instagram-soc">
                                                    <i class="fab fa-instagram"></i>
                                                    <span class="soc-widget-title">Follow</span>
                                                                                                 
                                                    </a>                                                        
                                                </div>
                                            </div>
                                        <!-- box-widget  end -->						
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="box-widget-content">
                                                <!-- content-tabs-wrap -->
                                                <div class="content-tabs-wrap tabs-act tabs-widget fl-wrap">
                                                    <div class="content-tabs fl-wrap">
                                                        <ul class="tabs-menu fl-wrap no-list-style">
                                                            <li class="current"><a href="#tab-popular"> Popular News </a></li>
                                                            <li><a href="#tab-resent">Resent News</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--tabs -->                       
                                                    <div class="tabs-container">
                                                        <!--tab -->
                                                        <div class="tab">
                                                            <div id="tab-popular" class="tab-content first-tab">
                                                                <div class="post-widget-container fl-wrap">
                                                                    <?php
                                                                        foreach ($popular_news as $popular_all_news) {
                                                                            $most_view_news = News::where('id',$popular_all_news->news_id)->first();
                                                                            if(!empty($most_view_news)) {
                                                                            // echo $most_view_news->id;die();
                                                                    ?>
                                                                        <div class="post-widget-item fl-wrap">
                                                                            <div class="post-widget-item-media">
                                                                                 <a href="{{url('new-Detail/'.$most_view_news->id)}}">
                                                                                    <img src="{{asset('upload/admins/news/'.$most_view_news->image)}}"  alt=""></a>
                                                                            </div>
                                                                            <div class="post-widget-item-content">
                                                                                <h4><a href="{{url('new-Detail/'.$most_view_news->id)}}"><?php echo mb_substr(($most_view_news->title), 0,30) ?>..</a></h4>
                                                                                <ul class="pwic_opt">
                                                                                    <li><span><i class="far fa-clock"></i> <?php echo $most_view_news ->created_at->format('d M Y')?></span></li>
                                                                                    <li><span><i class="far fa-comments-alt"></i> 12</span></li>
                                                                                    <li><span><i class="fal fa-eye"></i> {{$popular_all_news->view}}</span></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    <?php } } ?> 														
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--tab  end-->
                                                        <!--tab -->
                                                        <div class="tab">
                                                            <div id="tab-resent" class="tab-content">
                                                                <div class="post-widget-container fl-wrap">
                                                                   <?php
                                                                        $rcount = 1;
                                                                        foreach ($recentNews as $currentNews) {
                                                                            if($rcount < 6)
                                                                            {
                                                                    ?>
                                                                        <div class="post-widget-item fl-wrap">
                                                                            <div class="post-widget-item-media">
                                                                                <a href="{{url('new-Detail/'.$currentNews->id)}}"><img src="{{asset('upload/admins/news/'.$currentNews->image)}}"  alt=""></a>
                                                                            </div>
                                                                            <div class="post-widget-item-content">
                                                                                <h4><a href="{{url('new-Detail/'.$currentNews->id)}}"><?php echo mb_substr(($currentNews->title), 0,30) ?>..</a></h4>
                                                                                <ul class="pwic_opt">
                                                                                    <li><span><i class="far fa-clock"></i><?php echo $currentNews ->created_at->format('d M Y')?></span></li>
                                                                                    <li><span><i class="far fa-comments-alt"></i> 16</span></li>
                                                                                    <li><span><i class="fal fa-eye"></i> 727</span></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    <?php } $rcount++; } ?> 													
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--tab end-->							
                                                    </div>
                                                    <!--tabs end-->  
                                                </div>
                                                <!-- content-tabs-wrap end -->
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->					
                                    </div>
                                    <!-- sidebar  end -->
                                </div>
                            </div>
                            <div class="limit-box fl-wrap"></div>
                        </div>
                    </section>
                    <!-- section end -->
                    <!-- section  -->
                    
                    <!-- section end -->
                </div>
                <!-- content  end-->
                <!-- footer -->
                @include('includes/footer')
                <!-- footer end-->  			
                
            </div>
            <!-- wrapper end -->	
            <!--register form -->
            <div class="main-register-container">
                <div class="reg-overlay close-reg-form"></div>
                <div class="main-register-holder">
                    <div class="main-register-wrap fl-wrap">
                        <div class="main-register_bg">
                            <div class="bg-wrap">
                                <div class="bg par-elem "  data-bg="images/bg/1.jpg"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="mg_logo"><img src="images/logo2.png" alt=""></div>
                        </div>
                        <div class="main-register tabs-act fl-wrap">
                            <ul class="tabs-menu">
                                <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                                <!-- <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li> -->
                            </ul>
                            <div class="close-modal close-reg-form"><i class="fal fa-times"></i></div>
                            <!--tabs -->
                            <div id="tabs-container">
                                <div class="tab">
                                    <!--tab -->
                                    <div id="tab-1" class="tab-content first-tab">
                                        <div class="custom-form">
                                            <form method="post" name="registerform">
                                                <label>Username or Email Address <span>*</span> </label>
                                                <input name="email" type="text" onClick="this.select()" value="">
                                                <label>Password <span>*</span> </label>
                                                <input name="password" type="password" onClick="this.select()" value="">
                                                <div class="filter-tags">
                                                    <input id="check-a" type="checkbox" name="check" checked>
                                                    <label for="check-a">Remember me</label>
                                                </div>
                                                <div class="lost_password">
                                                    <a href="#">Lost Your Password?</a>
                                                </div>
                                                <div class="clearfix"></div>
                                                <button type="submit" class="log-submit-btn color-bg"><span>Log In</span></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--tab end -->
                                    
                                </div>
                                <!--tabs end -->
                                <!-- <div class="log-separator fl-wrap"><span>or</span></div>
                                <div class="soc-log  fl-wrap">
                                    <p>For faster login or register use your social account.</p>
                                    <a href="#"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="{{url('js/jquery.min.js')}}"></script>
        <script src="{{url('js/plugins.js')}}"></script>
        <script src="{{url('js/scripts.js')}}"></script>
    </body>

<!-- Mirrored from gmag.kwst.net/post-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Apr 2022 08:22:23 GMT -->
</html>
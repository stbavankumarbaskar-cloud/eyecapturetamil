<?php 
use App\Models\News;
use App\Models\Category;

$footer_categories = isset($category) && count($category) > 0 ? $category->take(6) : (class_exists('App\Models\Category') ? Category::take(6)->get() : []);
$footer_recent = isset($recentNews) && count($recentNews) > 0 ? $recentNews->take(2) : (class_exists('App\Models\News') ? News::orderBy('id', 'desc')->take(2)->get() : []);
?>

<footer style="background-color: #090A0E; color: #B8C1D1; padding-top: 60px; padding-bottom: 25px; font-family: 'Poppins', sans-serif; position: relative; z-index: 10;">
    <div class="container">
        <div class="row gy-4">
            <!-- Footer Brand & About -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget" style="margin-bottom: 20px;">
                    <a href="{{url('')}}" style="display: inline-block; margin-bottom: 18px;">
                        <img src="{{asset('assets/img/logo.jpg')}}" alt="I CATCH தமிழ்" style="height: 115px; width: auto; max-width: 100%; border-radius: 6px;">
                    </a>
                    <p style="font-size: 13px; line-height: 1.65; color: #9EA6B5; margin-bottom: 22px;">
                        Magazines cover a wide subjects, including not limited to fashion, lifestyle, health, politics, business, Entertainment, sports, science,
                    </p>
                    <div class="footer-social" style="display: flex; gap: 10px; align-items: center;">
                        <a href="https://www.facebook.com/share/vz7XqaoGpgPGvjq8/?mibextid=qi2Omg" target="_blank" style="width: 36px; height: 36px; border-radius: 50%; background-color: #1A1D26; display: flex; align-items: center; justify-content: center; color: #ffffff; text-decoration: none; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#FF1D50'" onmouseout="this.style.backgroundColor='#1A1D26'">
                            <i class="fab fa-facebook-f" style="font-size: 14px;"></i>
                        </a>
                        <a href="https://x.com/newstodaytami" target="_blank" style="width: 36px; height: 36px; border-radius: 50%; background-color: #1A1D26; display: flex; align-items: center; justify-content: center; color: #ffffff; text-decoration: none; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#FF1D50'" onmouseout="this.style.backgroundColor='#1A1D26'">
                            <i class="fab fa-twitter" style="font-size: 14px;"></i>
                        </a>
                        <a href="https://www.instagram.com/newstodaytamilofficial?igsh=ZWhvaHdtamR1NGlj" target="_blank" style="width: 36px; height: 36px; border-radius: 50%; background-color: #1A1D26; display: flex; align-items: center; justify-content: center; color: #ffffff; text-decoration: none; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#FF1D50'" onmouseout="this.style.backgroundColor='#1A1D26'">
                            <i class="fab fa-linkedin-in" style="font-size: 14px;"></i>
                        </a>
                        <a href="#" target="_blank" style="width: 36px; height: 36px; border-radius: 50%; background-color: #1A1D26; display: flex; align-items: center; justify-content: center; color: #ffffff; text-decoration: none; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#FF1D50'" onmouseout="this.style.backgroundColor='#1A1D26'">
                            <i class="fab fa-whatsapp" style="font-size: 14px;"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Footer Categories -->
            <div class="col-lg-2 col-md-6">
                <div class="footer-widget" style="margin-bottom: 20px;">
                    <h3 style="color: #FFFFFF; font-size: 18px; font-weight: 700; margin-bottom: 22px; position: relative;">Categories</h3>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <?php foreach ($footer_categories as $f_cat) { ?>
                        <li style="margin-bottom: 12px;">
                            <a href="{{url('category/'.$f_cat->id)}}" style="color: #9EA6B5; text-decoration: none; font-size: 14px; transition: color 0.2s ease; display: inline-flex; align-items: center;" onmouseover="this.style.color='#FF1D50'" onmouseout="this.style.color='#9EA6B5'">
                                <i class="fas fa-chevron-right" style="font-size: 10px; margin-right: 10px; color: #9EA6B5;"></i>
                                {{$f_cat->category_name}}
                            </a>
                        </li>
                        <?php } ?>
                        <?php if(count($footer_categories) == 0) { ?>
                        <li style="margin-bottom: 12px;"><a href="{{url('category/1')}}" style="color: #9EA6B5; text-decoration: none; font-size: 14px;"><i class="fas fa-chevron-right" style="font-size: 10px; margin-right: 10px;"></i>Political</a></li>
                        <li style="margin-bottom: 12px;"><a href="{{url('category/2')}}" style="color: #9EA6B5; text-decoration: none; font-size: 14px;"><i class="fas fa-chevron-right" style="font-size: 10px; margin-right: 10px;"></i>Business</a></li>
                        <li style="margin-bottom: 12px;"><a href="{{url('category/3')}}" style="color: #9EA6B5; text-decoration: none; font-size: 14px;"><i class="fas fa-chevron-right" style="font-size: 10px; margin-right: 10px;"></i>Health</a></li>
                        <li style="margin-bottom: 12px;"><a href="{{url('category/4')}}" style="color: #9EA6B5; text-decoration: none; font-size: 14px;"><i class="fas fa-chevron-right" style="font-size: 10px; margin-right: 10px;"></i>Technology</a></li>
                        <li style="margin-bottom: 12px;"><a href="{{url('category/5')}}" style="color: #9EA6B5; text-decoration: none; font-size: 14px;"><i class="fas fa-chevron-right" style="font-size: 10px; margin-right: 10px;"></i>Sports</a></li>
                        <li style="margin-bottom: 12px;"><a href="{{url('category/6')}}" style="color: #9EA6B5; text-decoration: none; font-size: 14px;"><i class="fas fa-chevron-right" style="font-size: 10px; margin-right: 10px;"></i>Entertainment</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

            <!-- Footer Recent Posts -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-widget" style="margin-bottom: 20px;">
                    <h3 style="color: #FFFFFF; font-size: 18px; font-weight: 700; margin-bottom: 22px;">Recent Posts</h3>
                    <div style="display: flex; flex-direction: column; gap: 16px;">
                        <?php foreach($footer_recent as $fr_item) { ?>
                        <div style="display: flex; align-items: center; gap: 14px;">
                            <div style="width: 80px; height: 65px; border-radius: 4px; overflow: hidden; flex-shrink: 0; background-color: #1A1D26;">
                                <a href="{{url('new-Detail/'.$fr_item->id)}}">
                                    <img src="{{asset('upload/admins/news/'.$fr_item->image)}}" alt="{{$fr_item->title}}" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.src='{{asset('assets/img/blog/blog_3_1.jpg')}}'">
                                </a>
                            </div>
                            <div style="flex: 1; min-width: 0;">
                                <h4 style="font-size: 14px; font-weight: 700; line-height: 1.35; margin: 0 0 6px 0;">
                                    <a href="{{url('new-Detail/'.$fr_item->id)}}" style="color: #FFFFFF; text-decoration: none; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; transition: color 0.2s;" onmouseover="this.style.color='#FF1D50'" onmouseout="this.style.color='#FFFFFF'">
                                        {{$fr_item->title}}
                                    </a>
                                </h4>
                                <div style="font-size: 12px; color: #9EA6B5;">
                                    <i class="fal fa-calendar-days" style="margin-right: 5px;"></i>{{$fr_item->created_at->format('d June, Y')}}
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(count($footer_recent) == 0) { ?>
                        <div style="display: flex; align-items: center; gap: 14px;">
                            <div style="width: 80px; height: 65px; border-radius: 4px; overflow: hidden; flex-shrink: 0; background-color: #1A1D26;">
                                <img src="{{asset('assets/img/blog/blog_3_1.jpg')}}" alt="Recent Post" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div style="flex: 1; min-width: 0;">
                                <h4 style="font-size: 14px; font-weight: 700; line-height: 1.35; margin: 0 0 6px 0;">
                                    <a href="#" style="color: #FFFFFF; text-decoration: none;">Equality and justice for Every citizen</a>
                                </h4>
                                <div style="font-size: 12px; color: #9EA6B5;"><i class="fal fa-calendar-days" style="margin-right: 5px;"></i>21 June, 2025</div>
                            </div>
                        </div>
                        <div style="display: flex; align-items: center; gap: 14px;">
                            <div style="width: 80px; height: 65px; border-radius: 4px; overflow: hidden; flex-shrink: 0; background-color: #1A1D26;">
                                <img src="{{asset('assets/img/blog/blog_3_2.jpg')}}" alt="Recent Post" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div style="flex: 1; min-width: 0;">
                                <h4 style="font-size: 14px; font-weight: 700; line-height: 1.35; margin: 0 0 6px 0;">
                                    <a href="#" style="color: #FFFFFF; text-decoration: none;">Key eyes on the latest update of technology</a>
                                </h4>
                                <div style="font-size: 12px; color: #9EA6B5;"><i class="fal fa-calendar-days" style="margin-right: 5px;"></i>22 June, 2025</div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <!-- Footer Popular Tags -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget" style="margin-bottom: 20px;">
                    <h3 style="color: #FFFFFF; font-size: 18px; font-weight: 700; margin-bottom: 22px;">Popular Tags</h3>
                    <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                        <?php 
                        $popular_tags = ['Sports', 'Politics', 'Business', 'Music', 'Food', 'Technology', 'Travels', 'Health', 'Fashions', 'Animal', 'Weather', 'Movies'];
                        foreach($popular_tags as $p_tag) {
                        ?>
                        <a href="{{url('category/1')}}" style="border: 1px solid #232734; border-radius: 4px; padding: 6px 14px; font-size: 13px; color: #9EA6B5; text-decoration: none; transition: all 0.2s ease; background-color: transparent;" onmouseover="this.style.borderColor='#FF1D50'; this.style.color='#FFFFFF'; this.style.backgroundColor='#FF1D50';" onmouseout="this.style.borderColor='#232734'; this.style.color='#9EA6B5'; this.style.backgroundColor='transparent';">
                            {{$p_tag}}
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Copyright & Navigation Bar -->
        <div style="border-top: 1px solid #1A1D26; margin-top: 40px; padding-top: 25px; padding-bottom: 10px;">
            <div class="row align-items-center justify-content-between gy-3">
                <div class="col-md-auto text-center text-md-start">
                    <p style="margin: 0; font-size: 14px; color: #9EA6B5;">
                        Copyright © <?php echo date('Y'); ?> <span style="color: #FF1D50; font-weight: 700;">EYE CATCH தமிழ்</span>. All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-auto text-center text-md-end">
                    <ul style="list-style: none; padding: 0; margin: 0; display: inline-flex; flex-wrap: wrap; gap: 15px; align-items: center; font-size: 14px;">
                        <li><a href="{{url('')}}" style="color: #9EA6B5; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#FF1D50'" onmouseout="this.style.color='#9EA6B5'">Home</a></li>
                        <li style="color: #333846;">|</li>
                        <li><a href="{{url('PrivacyPolicy')}}" style="color: #9EA6B5; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#FF1D50'" onmouseout="this.style.color='#9EA6B5'">About Us</a></li>
                        <li style="color: #333846;">|</li>
                        <li><a href="{{url('PrivacyPolicy')}}" style="color: #9EA6B5; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#FF1D50'" onmouseout="this.style.color='#9EA6B5'">Faq</a></li>
                        <li style="color: #333846;">|</li>
                        <li><a href="{{url('PrivacyPolicy')}}" style="color: #9EA6B5; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#FF1D50'" onmouseout="this.style.color='#9EA6B5'">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
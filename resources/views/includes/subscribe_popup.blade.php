<!-- Flipkart-Style Login & Subscription Modal Popup -->
<div id="subscribe-modal-overlay" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background-color: rgba(0, 0, 0, 0.65); backdrop-filter: blur(4px); -webkit-backdrop-filter: blur(4px); z-index: 99999; display: flex; align-items: center; justify-content: center; opacity: 0; visibility: hidden; transition: opacity 0.3s ease, visibility 0.3s ease; padding: 15px;">
    <div id="subscribe-modal-container" style="background: #ffffff; width: 100%; max-width: 730px; min-height: 450px; border-radius: 8px; box-shadow: 0 20px 50px rgba(0, 0, 0, 0.35); position: relative; overflow: hidden; transform: scale(0.92); transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1); display: flex; flex-wrap: wrap;">
        
        <!-- Close Button (X) -->
        <button id="close-subscribe-modal" type="button" aria-label="Close" style="position: absolute; top: 12px; right: 16px; background: transparent; border: none; font-size: 26px; font-weight: 300; line-height: 1; color: #878787; cursor: pointer; z-index: 10; padding: 4px 8px; border-radius: 50%; transition: color 0.2s;" onmouseover="this.style.color='#000000';" onmouseout="this.style.color='#878787';">
            &times;
        </button>

        <!-- Left Banner Section (Flipkart Style Banner) -->
        <div style="flex: 0 0 280px; width: 280px; background: linear-gradient(180deg, #FF1D50 0%, #C00030 100%); padding: 35px 28px; color: #FFFFFF; display: flex; flex-direction: column; justify-content: space-between; position: relative;">
            <div>
                <h2 style="font-family: 'Poppins', sans-serif; font-size: 24px; font-weight: 700; color: #FFFFFF; margin: 0 0 14px 0; line-height: 1.3;">
                    Login / Subscribe
                </h2>
                <p style="font-family: 'Poppins', sans-serif; font-size: 13.5px; color: rgba(255, 255, 255, 0.88); margin: 0; line-height: 1.6;">
                    Get access to your News Updates, Daily Digests, Exclusive Articles and Subscriptions
                </p>
            </div>
            
            <div style="text-align: center; margin-top: 30px;">
                <div style="background: rgba(255, 255, 255, 0.95); padding: 12px 16px; border-radius: 8px; display: inline-block; box-shadow: 0 8px 20px rgba(0,0,0,0.15);">
                    <img src="{{asset('assets/img/logo.jpg')}}" alt="Eye Catch Media" style="max-height: 65px; width: auto; object-fit: contain;" onerror="this.src='{{asset('images/news-logo.png')}}'">
                </div>
            </div>
        </div>

        <!-- Right Content & Form Section (Flipkart Style Form) -->
        <div style="flex: 1 1 340px; padding: 35px 32px; display: flex; flex-direction: column; justify-content: space-between; background: #FFFFFF; position: relative;">
            
            <!-- Success State Banner (Hidden by default) -->
            <div id="subscribe-success-state" style="display: none; text-align: center; padding: 40px 10px;">
                <div style="width: 70px; height: 70px; background: #10B981; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 34px; margin: 0 auto 20px auto; box-shadow: 0 10px 25px rgba(16, 185, 129, 0.3);">
                    ✓
                </div>
                <h3 style="font-family: 'Poppins', sans-serif; font-size: 22px; font-weight: 700; color: #0F172A; margin: 0 0 10px 0;" id="success-user-title">
                    Subscribed & Logged in!
                </h3>
                <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #64748B; margin: 0;">
                    Your details have been saved to the database. Welcome!
                </p>
            </div>

            <!-- Form State -->
            <div id="subscribe-form-state">
                <form id="subscribe-popup-form" action="{{url('add_subscription')}}" method="post">
                    @csrf
                    
                    <div style="margin-bottom: 16px;">
                        <label style="display: block; font-family: 'Poppins', sans-serif; font-size: 13px; font-weight: 600; color: #212121; margin-bottom: 6px;">
                            Full Name *
                        </label>
                        <input type="text" name="name" required placeholder="Enter Your Full Name" style="width: 100%; height: 44px; padding: 10px 14px; border: 1px solid #E0E0E0; border-radius: 4px; font-size: 14px; color: #212121; outline: none; font-family: 'Poppins', sans-serif; transition: border-color 0.2s;" onfocus="this.style.borderColor='#FF1D50'" onblur="this.style.borderColor='#E0E0E0'">
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-family: 'Poppins', sans-serif; font-size: 13px; font-weight: 600; color: #212121; margin-bottom: 6px;">
                            Email Address *
                        </label>
                        <input type="email" name="emailid" required placeholder="Enter Your Email Address" style="width: 100%; height: 44px; padding: 10px 14px; border: 1px solid #E0E0E0; border-radius: 4px; font-size: 14px; color: #212121; outline: none; font-family: 'Poppins', sans-serif; transition: border-color 0.2s;" onfocus="this.style.borderColor='#FF1D50'" onblur="this.style.borderColor='#E0E0E0'">
                        <div id="subscribe-error-msg" style="color: #FF1D50; font-size: 12px; margin-top: 4px; display: none;"></div>
                    </div>

                    <p style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #878787; line-height: 1.5; margin: 0 0 20px 0;">
                        By continuing, you agree to Eye Catch Tamil's <a href="{{url('PrivacyPolicy')}}" target="_blank" style="color: #FF1D50; text-decoration: none; font-weight: 600;">Terms of Use</a> and <a href="{{url('PrivacyPolicy')}}" target="_blank" style="color: #FF1D50; text-decoration: none; font-weight: 600;">Privacy Policy</a>.
                    </p>

                    <button type="submit" id="subscribe-submit-btn" style="width: 100%; height: 48px; background-color: #FB641B; color: #FFFFFF; border: none; border-radius: 4px; font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 700; letter-spacing: 0.5px; text-transform: uppercase; cursor: pointer; box-shadow: 0 2px 4px 0 rgba(0,0,0,.2); transition: background-color 0.2s;" onmouseover="this.style.backgroundColor='#E05510';" onmouseout="this.style.backgroundColor='#FB641B';">
                        CONTINUE & SUBSCRIBE
                    </button>
                </form>

                <div style="margin-top: 20px; padding-top: 12px; border-top: 1px solid #F0F0F0;">
                    <label style="display: inline-flex; align-items: center; gap: 8px; font-size: 12.5px; color: #878787; cursor: pointer; user-select: none; font-family: 'Poppins', sans-serif;">
                        <input type="checkbox" id="dont-show-subscribe-again" style="accent-color: #FF1D50; width: 15px; height: 15px; cursor: pointer;">
                        <span>I don't want to see this popup again.</span>
                    </label>
                </div>
            </div>

        </div>

    </div>
</div>

<script>
    (function() {
        document.addEventListener('DOMContentLoaded', function() {
            var modalOverlay = document.getElementById('subscribe-modal-overlay');
            var modalContainer = document.getElementById('subscribe-modal-container');
            var closeBtn = document.getElementById('close-subscribe-modal');
            var dontShowCheckbox = document.getElementById('dont-show-subscribe-again');
            var form = document.getElementById('subscribe-popup-form');
            var formState = document.getElementById('subscribe-form-state');
            var successState = document.getElementById('subscribe-success-state');
            var submitBtn = document.getElementById('subscribe-submit-btn');
            var errorMsg = document.getElementById('subscribe-error-msg');
            var userTitle = document.getElementById('success-user-title');

            window.openSubscribeModal = function() {
                if (!modalOverlay) return;
                modalOverlay.style.visibility = 'visible';
                modalOverlay.style.opacity = '1';
                if (modalContainer) {
                    modalContainer.style.transform = 'scale(1)';
                }
            };

            window.closeSubscribeModal = function() {
                if (!modalOverlay) return;
                if (dontShowCheckbox && dontShowCheckbox.checked) {
                    localStorage.setItem('eyecatch_hide_subscribe_popup', 'true');
                }
                modalOverlay.style.opacity = '0';
                if (modalContainer) {
                    modalContainer.style.transform = 'scale(0.92)';
                }
                setTimeout(function() {
                    modalOverlay.style.visibility = 'hidden';
                }, 300);
            };

            // Auto-show after preloader if not hidden
            if (localStorage.getItem('eyecatch_hide_subscribe_popup') !== 'true') {
                setTimeout(window.openSubscribeModal, 2000);
            }

            if (closeBtn) {
                closeBtn.addEventListener('click', window.closeSubscribeModal);
            }

            if (modalOverlay) {
                modalOverlay.addEventListener('click', function(e) {
                    if (e.target === modalOverlay) {
                        window.closeSubscribeModal();
                    }
                });
            }

            // Handle Header Login / Register button click
            document.addEventListener('click', function(e) {
                var loginBtn = e.target.closest('#open-login-modal-btn, .open-subscribe-modal-btn');
                if (loginBtn) {
                    e.preventDefault();
                    window.openSubscribeModal();
                }
            });

            // Form Submit via AJAX to store Name & Email in Database
            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    if (errorMsg) errorMsg.style.display = 'none';
                    if (submitBtn) {
                        submitBtn.disabled = true;
                        submitBtn.innerText = 'SUBMITTING...';
                    }

                    var formData = new FormData(form);

                    fetch(form.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(function(res) { return res.json(); })
                    .then(function(data) {
                        if (data.status === 'success') {
                            localStorage.setItem('eyecatch_hide_subscribe_popup', 'true');
                            if (userTitle && data.user_name) {
                                userTitle.innerText = 'Welcome, ' + data.user_name + '!';
                            }
                            if (formState) formState.style.display = 'none';
                            if (successState) successState.style.display = 'block';
                            setTimeout(function() {
                                window.location.reload();
                            }, 1500);
                        } else {
                            if (errorMsg) {
                                errorMsg.innerText = data.message || 'Something went wrong. Please try again.';
                                errorMsg.style.display = 'block';
                            }
                            if (submitBtn) {
                                submitBtn.disabled = false;
                                submitBtn.innerText = 'CONTINUE & SUBSCRIBE';
                            }
                        }
                    })
                    .catch(function(err) {
                        window.location.reload();
                    });
                });
            }
        });
    })();
</script>

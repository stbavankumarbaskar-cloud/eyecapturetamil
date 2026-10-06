<div id="preloader-overlay" style="position: fixed; top: 0; left: 0; width: 100%; height: 100vh; background-color: #FFFFFF; z-index: 999999; display: flex; align-items: center; justify-content: center; transition: opacity 0.5s ease, visibility 0.5s ease;">
    <!-- website_loader_2.gif reloaded cleanly on every page visit -->
    <div style="text-align: center;">
        <img id="preloader-gif" src="{{asset('assets/img/website_loader_2.gif')}}" alt="Loading..." style="height: 180px; width: auto; max-width: 90vw; object-fit: contain; border-radius: 8px;">
    </div>
</div>

<script> 
    (function() {
        var gif = document.getElementById('preloader-gif');
        if (gif) {
            // Force GIF animation restart from frame 0 by appending timestamp query
            var baseUrl = gif.src.split('?')[0];
            gif.src = baseUrl + '?t=' + new Date().getTime();
        }

        function hidePreloader() {
            var preloader = document.getElementById('preloader-overlay');
            if(preloader) {
                preloader.style.opacity = '0';
                preloader.style.visibility = 'hidden';
                setTimeout(function() { preloader.style.display = 'none'; }, 500);
            }
        }

        // Wait ~1.8 seconds for the GIF eye close-and-open animation cycle to complete before fading out into the site
        setTimeout(hidePreloader, 1800);
    })();
</script>

<!-- Subscription Modal Popup -->
@include('includes/subscribe_popup')


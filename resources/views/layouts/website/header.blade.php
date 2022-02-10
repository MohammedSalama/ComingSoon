<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">

        <h1>{{ $coming -> title }}</h1>
        <h2>{{ $coming -> description	 }}</h2>
        <div class="countdown d-flex justify-content-center" data-count="2023/12/5">
            <div>
                <h3>%d</h3>
                <h4>Days</h4>
            </div>
            <div>
                <h3>%h</h3>
                <h4>Hours</h4>
            </div>
            <div>
                <h3>%m</h3>
                <h4>Minutes</h4>
            </div>
            <div>
                <h3>%s</h3>
                <h4>Seconds</h4>
            </div>
        </div>

        <div class="subscribe">
            <h4>Subscribe now to get the latest updates!</h4>
            @include('message')
            <form action="{{ route('subscribe.store') }}" method="post" >
                @method('POST')
                @csrf
                <div class="subscribe-form">
                    <input type="email" name="email"><input type="submit" value="Subscribe">
                </div>
                <div class="mt-2">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your notification request was sent. Thank you!</div>
                </div>
            </form>
        </div>

        <div class="social-links text-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

    </div>
</header><!-- End #header -->

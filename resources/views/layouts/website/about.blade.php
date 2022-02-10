<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="row content">
            <div class="col-lg-6">
                <h2>EUM IPSAM LABORUM DELENITI VELITENA</h2>
                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                @foreach($about as $about)
                <p>
                   {{$about->description}}
                </p>
                <ul>
                    <li><i class="bi bi-check"></i>  {{$about->title}}</li>

                </ul>
                <p class="fst-italic">
                    {{$about->paragraph}}
                </p>
                @endforeach
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->

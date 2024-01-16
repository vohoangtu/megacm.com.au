@extends("index.layouts.app")

@section("content")
    <section class="p-5 bg-medgray">
        <div class="container">
            <div class="row py-5">
                <div class="row">
                    <p>
                        Mega Construction &amp; Maintenance strives to be the contractor of
                        choice by providing outstanding, high quality and affordable
                        remodelling services, value with honest trades people in an
                        environment of integrity and trust building on our reputation of
                        professionalism, consistency in our services and products,
                        responsiveness to clients and use of innovative and traditional quality
                        solutions. We commit to fulfil all contractual obligations and commit to
                        exceed the expectations of our customers.
                    </p>
                    <p>
                        Mega Construction &amp; Maintenance encourages personal and
                        professional growth of every employee. Management promotes a
                        corporate culture based on performance, accountability, mutual trust,
                        respect of the individual, and commitment to common goals. We are
                        dedicated to providing excellent construction services with our
                        primary concern being quality, safety, integrity, and professionalism.
                    </p>
                </div>
                <div class="row">
                    <p class="fw-medium"><span class="fa fa-star" style="color: #038732"></span> <span class="strong">T</span>eamwork – working together as the Mega Construction &amp;
                        Maintenance family</p>
                    <p class="fw-medium"><span class="fa fa-star" style="color: #038732"></span> <span class="strong">R</span>esponsibility – taking ownership of the task in hand</span></p>
                    <p class="fw-medium"><span class="fa fa-star" style="color: #038732"></span> <span class="strong">U</span>nderstanding – knowing our business and our clients’ business</span></p>
                    <p class="fw-medium"><span class="fa fa-star" style="color: #038732"></span> <span class="strong">S</span>tandards – acting ethically whilst exceeding the brief</span></p>
                    <p class="fw-medium"><span class="fa fa-star" style="color: #038732"></span> <span class="strong">T</span>enacity – approaching challenges through innovative solutions</span></p>
                </div>
            </div>
        </div>
    </section>
    <!--  intro -->
    <section class="p-5 bg-gray">
        <div class="container">
            <div class="main-title text-center">
                <h3 class="h3-title">
                    <span>
                       Our customers love our latest projects
                    </span>
                </h3>
            </div>
            <div class="row no-gutters py-5 px-5">
                <div class="col-sm-6"><img src="gallery/reno-01-big.jpg" class="img-fluid" data-aos="fade-up" data-aos-duration="1500"></div>
                <div class="col-sm-6"><img src="gallery/reno-01-big-b.jpg" class="img-fluid bw" data-aos="fade-down" ></div>
            </div>

            <div class="row no-gutters py-5 px-5">
                <div class="col-sm-6"><img src="gallery/reno-02-big.jpg" class="img-fluid" data-aos="flip-up" data-aos-duration="1500"></div>
                <div class="col-sm-6"><img src="gallery/reno-02-big-b.jpg" class="img-fluid bw" data-aos="flip-down" ></div>
            </div>

            <div class="row no-gutters py-5 px-5">
                <div class="col-sm-6"><img src="gallery/reno-03-big.jpg" class="img-fluid" data-aos="fade-up" data-aos-duration="1500"></div>
                <div class="col-sm-6"><img src="gallery/reno-03-big-b.jpg" class="img-fluid bw" data-aos="fade-down" ></div>
            </div>

            <div class="row no-gutters py-5 px-5">
                <div class="col-sm-6"><img src="gallery/reno-04-big.jpg" class="img-fluid" data-aos="flip-up" data-aos-duration="1500"></div>
                <div class="col-sm-6"><img src="gallery/reno-04-big-b.jpg" class="img-fluid bw" data-aos="flip-down" ></div>
            </div>
            <div class="row no-gutters py-5 px-5">
                <div class="col-sm-12"><img src="gallery/reno-05-big.jpg" class="img-fluid" data-aos="flip-up" data-aos-duration="1500"></div>

            </div>
        </div>
    </section>
@endsection
@push("home.footer.js")
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{asset("plugins/jquery.isotope.min.js")}}"></script>
    <script src="{{asset("plugins/aos.js")}}"></script>
    <script src="{{asset("plugins/jquery.easing.js")}}"></script>
    <script src="{{asset("plugins/waypoints.min.js")}}"></script>
    <script src="{{asset("plugins/jquery.transit.min.js")}}"></script>
    <script src="{{asset("plugins/jquery.imagesLoaded.min.js")}}"></script>
    <script src="{{asset("plugins/modernizr.custom.min.js")}}"></script>


    <script src="{{asset("plugins/jquery.magnific-popup.min.js")}}"></script>

    <script src="{{asset("plugins/jquery.mediaBoxes.js")}}"></script>
    <script>AOS.init();</script>
@endpush
@push("home.head.css")
    @foreach([
    "plugins/animate.css",
    "plugins/aos.css",
    "plugins/magnific-popup.css",
    "plugins/mediaBoxes.css",

] as $css)
        <link rel="stylesheet" href="{{asset($css)}}">
    @endforeach
    <style>
        /*effects*/
        img.bw{ -webkit-filter: grayscale(100%); filter: grayscale(100%);}
        img.bw:hover{/* -webkit-filter: grayscale(0%); *//* filter: grayscale(0%); */}
        .bg-medgray{
            background: #efefef;
        }
    </style>
@endpush

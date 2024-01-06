@extends("index.layouts.app")

@section("content")
    <section class="p-5 bg-medgray">
        <div class="container">
            <div class="row py-5">
                <div class="row">
                    <h5>We pride ourselves in offering the highest level of service and quality, taking full ownership on every project we work on. We handle all design work, building approvals, materials and labour for you. Our team of experts alleviate the stress and hassles normally associated with renovation projects, leaving you to only think about the end result and value added to your home or investment property.</h5>
                </div>
            </div>
        </div>
    </section>

    <!--  intro -->
    <section class="p-5 bg-gray">
        <div class="container">

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

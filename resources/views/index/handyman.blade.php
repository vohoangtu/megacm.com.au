@extends("index.layouts.app")

@section("content")

    <div class="block py-5 bg-grey">
        <div class="container">
            <h3 class="h3-title text-center"><span>Providing professional, reliable, prompt property services and maintenance at affordable rates</span></h3>
            <div class="w-100 d-flex justify-content-evenly my-4">
                <div class="__image">
                    <img class="img-fluid img-300" src="{{ asset("assets/images/handyman/Electricity/417475754_7056461461133162_5732409749125511357_n.jpg") }}" alt="">
                </div>
                <div class="__image">
                    <img class="img-fluid img-300" src="{{ asset("assets/images/handyman/work/418140164_1545046559578056_6786975553914574048_n.jpg") }}" alt="">
                </div>
                <div class="__image">
                    <img class="img-fluid img-300" src="{{ asset("assets/images/handyman/Painting/417946123_341551465451504_7269540125342264255_n.jpg") }}" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="container text-center">
                <div class="row mt-3 mb-2">
                    <div class="col-md-12 p-5 bg-dkgreen">
                        <p class="fw-medium fs-16">
                            We are a team of experienced handymen and trade professionals providing
                            expert property services across the Sydney CBD and inner suburbs. With the
                            specialist handyman services our team of professionals provides, you’ll never
                            need to worry about who to contact when your home or place of business
                            requires reliable property services delivered by a dependable and insured
                            trade professional. We handpick our team members to ensure they’re all
                            expertly qualified, committed to meeting customer expectations and a skilled
                            jack of all trades who can do it all. That means we’re the one point of contact
                            home and business owners in the Sydney CBD require for a wide range of
                            handyman services that includes electricity, plumbing and handyman works.
                        </p>
                    </div>
                    <div class="col-md-4 col-12">
                        <p class="text-center h3-title" style="font-size: 18px;">
                            * 	Trusted, affordable & effective solutions
                        </p>
                    </div>
                    <div class="col-md-4 col-12">
                        <p class="text-center h3-title" style="font-size: 18px;">* No Job Too Small Too Big</p>
                    </div>
                    <div class="col-md-4 col-12">
                        <p class="text-center h3-title" style="font-size: 18px;">
                            * Friendly and accommodating staff
                        </p>
                    </div>
                    <div class="col-md-4 col-12">
                        <p class="text-center h3-title" style="font-size: 18px;">
                            * Reliable and Promp
                        </p>
                    </div>
                    <div class="col-md-4 col-12">
                        <p class="text-center h3-title" style="font-size: 18px;">
                            *  	Quality & Customer focused
                        </p>
                    </div>
                    <div class="col-md-4 col-12">
                        <p class="text-center h3-title" style="font-size: 18px;">
                            *  	Licensed & Insured
                        </p>
                    </div>
                    <div class="col-md-4 col-12">
                        <p class="text-center h3-title" style="font-size: 18px;">
                            *  	Price Competitive
                        </p>
                    </div>
                    <div class="col-md-4 col-12">
                        <p class="text-center h3-title" style="font-size: 18px;">
                            *  	Workmanship 100% guaranteed
                        </p>
                    </div>
                    <div class="col-md-4 col-12">
                        <p class="text-center h3-title" style="font-size: 18px;">
                            *  	Professional and trustworthy handyman
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>


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

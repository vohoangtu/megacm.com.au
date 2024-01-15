@extends("index.layouts.app")

@section("content")
    <section class="p-5 ">
        <div class="container">
            <div class="row py-5">
                <div class="row">
                    <p>
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
                <div class="row">
                    <p><span class="fa fa-check"></span> Trusted, affordable &amp; effective solutions</p>
                    <p><span class="fa fa-check"></span> Reliable and Prompt</p>
                    <p><span class="fa fa-check"></span> Quality &amp; Customer focused</p>

                    <p><span class="fa fa-check"></span> No Job Too Small Too Big</p>
                    <p><span class="fa fa-check"></span> Price Competitive</p>
                    <p><span class="fa fa-check"></span> Licensed &amp; Insured</p>
                    <p><span class="fa fa-check"></span> Workmanship 100% guaranteed</p>
                    <p><span class="fa fa-check"></span> Professional and trustworthy handyman</p>
                    <p><span class="fa fa-check"></span> Friendly and accommodating staff</p>
                    <p class="my-4 fw-bold fs-18">
                        We can do all the odd tasks that you do not have the time for. Call us
                        today!
                    </p>
                </div>
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

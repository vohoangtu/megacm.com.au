@extends("index.layouts.app")

@section("content")
    <div class="block py-5 bg-grey">
        <div class="container">
            <h3 class="h3-title text-center"><span>From concept through completion, we are committed to supreme quality at affordable prices.</span></h3>
            <div class="w-100 d-flex justify-content-evenly my-4">
                <div class="__image">
                    <img class="img-fluid img-300" src="{{ asset("assets/images/renovation/kitchen/418339497_377724654803550_5178368265018832482_n.jpg") }}" alt="">
                </div>
                <div class="__image">
                    <img class="img-fluid img-300" src="{{ asset("assets/images/renovation/bathroom/417469561_916297393418014_7190964236631903554_n.jpg") }}" alt="">
                </div>
                <div class="__image">
                    <img class="img-fluid img-300" src="{{ asset("assets/images/renovation/house/417586887_791193639690997_3030133632775110213_n.jpg") }}" alt="">
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row mt-3 mb-2">
                <div class="col-md-6 col-12">
                    <p class="text-cneter h3-title" style="font-size: 18px;">
                        * Affordably, Competitively Priced
                    </p>
                </div>
                <div class="col-md-6 col-12">
                    <p class="text-cneter h3-title" style="font-size: 18px;">* Fully licenced & Insured</p>
                </div>
                <div class="col-md-6 col-12">
                    <p class="text-cneter h3-title" style="font-size: 18px;">
                        * Friendly Team & Professional
                    </p>
                </div>
                <div class="col-md-6 col-12">
                    <p class="text-cneter h3-title" style="font-size: 18px;">
                        * Free Quotes
                    </p>
                </div>


            </div>
        </div>
    </div>


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
                </div>

            </div>
        </div>
    </section>
    <section class="p-5">
        <div class="container">
 @php
    $kitchens = new \Symfony\Component\Finder\Finder();
    $kitchenGalleryFiles = $kitchens->in(public_path("gallery/renovation/kitchen"))->depth(0)->files();
    $kitchens = [];
    foreach($kitchenGalleryFiles as $file){
        $kitchens[] = [
            'name' => 'Kitchen ',
            'path' => asset("gallery/renovation/kitchen/". $file->getBasename())
        ];
    }
 @endphp
@php
    $bathroom = new \Symfony\Component\Finder\Finder();
    $bathroomGalleryFiles = $bathroom->in(public_path("gallery/renovation/bathroom"))->depth(0)->files();
    $bathrooms = [];
    foreach($bathroomGalleryFiles as $file){
        $bathrooms[] = [
            'name' => 'Bathroom ',
            'path' => asset("gallery/renovation/bathroom/". $file->getBasename())
        ];
    }
@endphp
            @include("components.gallery", [
                'galleryItems' => [
                    'kitchen' => [
                        'title' => 'Kitchen',
                        'images' => $kitchens,
                    ],
                    'bathroom' => [
                        'title' => 'Bathroom',
                        'images' => $bathrooms,
],
            ]]);
        </div>
    </section>
    <section class="p-5 bg-medgray">
        <div class="container">
            <div class="row py-5">
                <div class="row">
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

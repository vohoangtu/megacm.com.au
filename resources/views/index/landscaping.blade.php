@extends("index.layouts.app")

@section("content")
    <div class="block py-5 bg-grey">
        <div class="container">
            <h3 class="h3-title text-center"><span>Landscaping excellence, creative solutions, quality craftsmanship.Landscaping excellence, creative solutions, quality craftsmanship.</span></h3>
            <div class="w-100 d-flex justify-content-evenly flex-wrap my-4">
                <div class="__image mb-3">
                    <img class="img-fluid img-215" src="{{ asset("assets/images/landcaping/concreting/417330652_363457319922254_9043132887892754205_n.jpg") }}" alt="">
                </div>
                <div class="__image mb-3">
                    <img class="img-fluid img-215" src="{{ asset("assets/images/landcaping/Decking_and_Pergolas/418596864_390460013516285_8143846004266457654_n.jpg") }}" alt="">
                </div>
                <div class="__image mb-3">
                    <img class="img-fluid img-215" src="{{ asset("assets/images/landcaping/Fencing/417618974_1088262045543800_2573297400156710242_n.jpg") }}" alt="">
                </div>
                <div class="__image mb-3">
                    <img class="img-fluid img-215" src="{{ asset("assets/images/landcaping/grass/418102661_1579657636180084_3335699406481851053_n.jpg") }}" alt="">
                </div>
                <div class="__image mb-3">
                    <img class="img-fluid img-215" src="{{ asset("assets/images/landcaping/garden/418161290_921222369723315_8451022628557458742_n.jpg") }}" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="container text-center">
                <div class="row mt-3 mb-2">
                    <div class="col-md-12 p-5 bg-dkgreen">
                        <p class="fw-medium fs-16">
                            Your property’s appearance means a lot. It has the power to delight
                            visitors, tenants, residents, customers, and more. Your smart choices
                            can mean reduced liability, better profits, and lasting impressions. At
                            Mega Construction &amp; Maintenance we believe in the power of beautiful,
                            biodiverse landscapes of all scales to regenerate our environment. From
                            the smallest residential garden to large rural properties, we strive to bring
                            nature to people, and to draw people into nature and create havens of
                            biodiversity and food abundance in the landscape. Our mission is simple,
                            to offer high-quality, competitively priced residential and commercial
                            landscapes and maintenance with exceptional workmanship,
                            extraordinary service, and professional integrity. We will constantly
                            evolve through education and innovative ideas to better our company
                            and industry. We will understand and meet the needs of every single
                            customer. We view ourselves as partners with our clients, our
                            employees, our community, and our environment.
                        </p>
                    </div>
                    <div class="col-md-6 col-12">
                        <p class="text-cneter h3-title" style="font-size: 18px;">
                            *  	Long Term Customer Relationship
                        </p>
                    </div>
                    <div class="col-md-6 col-12">
                        <p class="text-cneter h3-title" style="font-size: 18px;">*  	Personal Touch & Fully Qualified Staff</p>
                    </div>
                    <div class="col-md-6 col-12">
                        <p class="text-cneter h3-title" style="font-size: 18px;">
                            *  	Cost Effective Pricing
                        </p>
                    </div>
                    <div class="col-md-6 col-12">
                        <p class="text-cneter h3-title" style="font-size: 18px;">
                            *  	Fully Licenced & Insured
                        </p>
                    </div>
                </div>
            </div>
        </div>

    <section id="lanscaping-services" class="p-lg-5">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-12">
                    <h3 class="green fs-28 mb-4">Service Schedules</h3>
                    <div class="row">
                        <div class="col-md">
                            <ul data-aos="zoom-in-up" class="aos-init aos-animate">
                                <li><img src="images/ic/ic_gardenbeds.png" style="max-width: 25px; margin-right: 10px;">Natural and Synthetic Grass</li>
                                <li><img src="images/ic/ic_retainingwalls.png" style="max-width: 25px; margin-right: 10px;">Retaining wall and Garden Bed</li>
                                <li><img src="images/ic/ic_fencing.png" style="max-width: 25px; margin-right: 10px;"> Fencing</li>
                                <li><img src="images/ic/ic_decking.png" style="max-width: 25px; margin-right: 10px;"> Decking and Pergolas</li>
                                <li><img src="images/ic/ic_concreting.png" style="max-width: 25px; margin-right: 10px;"> Concreting</li>
                            </ul>
                        </div>
                        <div class="col-md">
                            <div class="__image mb-3">
                                <img class="img-fluid" src="{{ asset("assets/images/landcaping/Fencing/417618974_1088262045543800_2573297400156710242_n.jpg") }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>






            </div>



        </div>
    </section>
        @php
            $concretings = new \Symfony\Component\Finder\Finder();
            $concretingGalleryFiles = $concretings->in(public_path("gallery/landscaping/concreting"))->depth(0)->files();
            $concretings = [];
            foreach($concretingGalleryFiles as $file){
                $concretings[] = [
                    'name' => 'Concreting ',
                    'path' => asset("gallery/landscaping/concreting/". $file->getBasename())
                ];
            }
        @endphp
        @php
            $bathroom = new \Symfony\Component\Finder\Finder();
            $bathroomGalleryFiles = $bathroom->in(public_path("gallery/landscaping/decking_pergolas"))->depth(0)->files();
            $deckings = [];
            foreach($bathroomGalleryFiles as $file){
                $deckings[] = [
                    'name' => 'Bathroom ',
                    'path' => asset("gallery/landscaping/decking_pergolas/". $file->getBasename())
                ];
            }
        @endphp

        @php
            $bathroom = new \Symfony\Component\Finder\Finder();
            $bathroomGalleryFiles = $bathroom->in(public_path("gallery/landscaping/fencing"))->depth(0)->files();
            $fencings = [];
            foreach($bathroomGalleryFiles as $file){
                $fencings[] = [
                    'name' => 'Fencing ',
                    'path' => asset("gallery/landscaping/fencing/". $file->getBasename())
                ];
            }
        @endphp

        @php
            $bathroom = new \Symfony\Component\Finder\Finder();
            $bathroomGalleryFiles = $bathroom->in(public_path("gallery/landscaping/garage"))->depth(0)->files();
            $garages = [];
            foreach($bathroomGalleryFiles as $file){
                $garages[] = [
                    'name' => 'Garage ',
                    'path' => asset("gallery/landscaping/garage/". $file->getBasename())
                ];
            }
        @endphp

<div class="container">
    @include("components.gallery", [
            'galleryItems' => [
                'concreting' => [
                    'title' => 'Concreting',
                    'images' => $concretings,
                ],
                'decking' => [
                    'title' => 'Decking & Pergolas',
                    'images' => $deckings,
                ],
                'fencing' => [
                                    'title' => 'Fencing',
                                    'images' => $fencings,
                ],
                'garage' => [
                                    'title' => 'Garage',
                                    'images' => $garages,
                ],
        ]]);
</div>



        <style>
            #lanscaping-services{
                background: #038732;
                color: #fff;
            }
            #lanscaping-services ul{
                list-style-type: none;
            }
            #lanscaping-services ul{
                padding: 0;
                padding-left: 2.2rem;
            }
            #lanscaping-services ul li{
                font-size: 20px;
                margin-bottom: 30px;
            }
            #lanscaping-services .bg-dkgreen{
                background: #efefef;
                color: #333;
                font-size: 14px;
            }
            #lanscaping-services li img{
                filter: brightness(0) invert(1);
            }
        </style>
@endsection


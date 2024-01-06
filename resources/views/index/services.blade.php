@extends("index.layouts.app")
@section("content")
    <div class="block py-5 bg-grey">
        <div class="container">
            <h3 class="h3-title text-center"><span>SUPERIOR CLEANING SERVICE AT A VERY COMPETITIVE PRICE</span></h3>
            <div class="w-100 d-flex justify-content-evenly my-4">
                <div class="__image">
                    <img class="img-fluid" src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning.png" alt="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning.png">
                </div>
                <div class="__image">
                    <img class="img-fluid" src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning-with-maidforyou.png" alt="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning-with-maidforyou.png">
                </div>
                <div class="__image">
                    <img class="img-fluid" src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning-with-us1.png" alt="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning.png">
                </div>
            </div>
            <div class="fl-rich-text">
                At MegaMC, we commit to deliver our promise in making your spaces fresh, shine,
                hassle free - vibe and leaving no corners unturned.  Our team members are thoroughly

                trained in the latest cleaning products, tools, and techniques and take pride in every
                space they clean!
            </div>
        </div>
        <div class="container text-center">
            <div class="row mt-3 mb-2">
                <div class="col-md-6 col-12">
                    <p class="text-cneter h3-title" style="font-size: 18px;">
                        *Bonded &amp; Insured
                    </p>
                </div>
                <div class="col-md-6 col-12">
                    <p class="text-cneter h3-title" style="font-size: 18px;">*200% Satisfaction Guaranteed</p>
                </div>
                <div class="col-md-6 col-12">
                    <p class="text-cneter h3-title" style="font-size: 18px;">
                        *Environmentally Friendly Cleaning
                    </p>
                </div>
                <div class="col-md-6 col-12">
                    <p class="text-cneter h3-title" style="font-size: 18px;">
                        *Fully Police checked
                    </p>
                </div>


            </div>
        </div>
    <div class="block py-5">
        <div class="container mw-1200">
            <h3 class="h3-title text-center">
                    <span>
                        Here's What You Get!
                    </span>
            </h3>
            <div>
                @include("index.components.checklist-tabs")
            </div>
        </div>
    </div>
    <div class="block py-5">
        <div class="container mw-1200">
            <h3 class="h3-title text-center">
                    <span>
                        Our Services
                    </span>
            </h3>
            <div>
                @include("index.components.services")
            </div>
        </div>
    </div>
    <div class="block py-5">
        <div class="container mw-1200">
            <h3 class="h3-title text-center">
                <span>Take Time Off and Leave the Cleaning to Us</span>
            </h3>
            <div class="row">
                <div class="col-lg-6 col-12 order-1">
                    <div class="__image d-lg-flex justify-content-center align-items-center">
                        <img src="{{ asset("images/Why-Choose-Maid-For-Yous-Office-Cleaning-Service.png") }}"
                             class="img-fluid w-480"
                             alt="Why-Choose-Maid-For-Yous-Office-Cleaning-Service.png">
                    </div>
                </div>
                <div class="col-lg-6 col-12 order-0">
                    <p>
                        Take a break and let us handle the cleaning for you. We understand that life can get busy, and cleaning is often the last thing you want to worry about. That's where we come in. Our professional cleaning service is here to make your life easier and your home cleaner.
                    </p>
                    <p>
                        Our experienced team is skilled at tackling dirt, dust, and messes of all kinds. Whether it's your home, office, or any other space, we've got you covered. We use safe and effective cleaning methods and products to ensure your space is spotless and hygienic.
                    </p>
                    <p>
                        With our cleaning service, you can reclaim your time and enjoy a fresh and tidy environment without lifting a finger. Say goodbye to the stress of cleaning chores and hello to a cleaner, more relaxing space. Leave the cleaning to us, so you can focus on the things you love.
                    </p>
                </div>

            </div>
            <div class="text-center my-3">
                <a href="{{ route("home.order.book-now") }}" target="_self" class="btn btn-success btn-book-now">
                    <span class="fl-button-text">BOOK NOW</span>
                </a>
            </div>
        </div>
    </div>

@endsection

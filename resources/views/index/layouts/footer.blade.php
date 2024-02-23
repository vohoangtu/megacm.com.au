<div id="footer">
    <div id="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                    <h3>MOST POPULAR SERVICE LOCATION</h3>
                    <div class="__content">
                        <ul class="sub_min_yellow">
                            @foreach(\App\Facades\MegaCM::locations() as $location)
                                    <li><a href="{{ route("home.cleaning.branch", $location->slug) }}">{{ $location->name }}</a><br></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-12 d-flex justify-content-lg-end">
                   <div class="d-flex flex-column">
                       <div class="textwidget mb-4">
                           <h3>GET IN TOUCH</h3>
                           <p><strong>{{ \App\Facades\MegaCM::title() }}</strong><br>
                               <strong>Phone:</strong> <a href="tel:{{ core()->getSetting("hotline") }}">{{ core()->getSetting("hotline") }}</a><br>
                               <strong>Email:</strong> <a href="mailto:{{ core()->getSetting("email") }}">{{ core()
                               ->getSetting("email") }}</a><br>
                               <strong>ACN:</strong> {{ core()->getSetting("acn") }}<br>
                               <strong>Address: </strong>{{ core()->getSetting("address") }}</p>
                       </div>
                       <div class="textwidget">
                           <h3>Helpful Links</h3>
                           <p>
                               <a href="{{ route("home.index") }}">Home</a><br>
                               <a href="{{ route("home.about") }}">About us</a><br>
{{--                               <a href="{{ route("home.career") }}">Work with us</a><br>--}}
{{--                               <a href="{{ route("home.pricing.index") }}">Pricing</a><br>--}}
                               <a href="{{ route("home.contact") }}">Contact Us</a><br>
                               <a href="{{ route("home.faq.index") }}">FAQS</a><br>
{{--                               <a href="{{ route("home.login") }}">Login</a><br>--}}
                               <a href="https://g.page/r/CXJqCCAQXW6nEBM/review">Reviews</a>
                           </p>
                       </div>
                       <div class="textwidget">
                           <h3>Follow us</h3>
                           <ul class="blog-services d-flex list-unstyled p-0">
                               <li>
                                   <a href="https://www.facebook.com/megacleaningmaintain">
                                       <div class="side-img">
                                           <i class="fab fa-facebook-f"></i>
                                       </div>
                                       <div class="sid_content">FACEBOOK</div>
                                   </a>
                               </li>
                               <li>
                                   <a href="{{url()->to("/")}}">
                                       <div class="side-img">
                                           <i class="fab fa-twitter"></i>
                                       </div>
                                       <div class="sid_content">TWITTER</div>
                                   </a>
                               </li>
                               <li>
                                   <a href="{{url()->to("/")}}">
                                       <div class="side-img">
                                           <i class="fab fa-google"></i>
                                       </div>
                                       <div class="sid_content">GOOGLE</div>
                                   </a>
                               </li>
                           </ul>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer-copyright">
        <div class="container">
            <div class="w-100 text-center py-3">
                Copyright © 2024. experiment version
            </div>
        </div>
    </div>
</div>

<!-- mmenu scripts -->
<script src="{{asset("assets/libs/mmenu/mmenu.js")}}"></script>
<script>
    new Mmenu(document.querySelector("#mmenu"));
    document.addEventListener("click", function (evnt) {
        var anchor = evnt.target.closest('a[href="#/"]');
        if (anchor) {
            alert("Thank you for clicking, but that's a demo link.");
            evnt.preventDefault();
        }
    });
</script>

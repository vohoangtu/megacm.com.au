@php
    $galleryItems = $galleryItems ?? [];
@endphp
<div class="container-fluid p-0">
    <section class="px-0 py-5 bg-dkgray">

        <!--  ================== MEDIA BOXES ================== -->
        <div class="p-5">
            <div class="filters-container">
                <ul class="custom-filter" id="filter2">
                    <li> <a class="selected" href="#" data-filter="*">All</a></li>
                    @foreach($galleryItems as $key => $items)
                        <li><a href="#" data-filter=".{{$key}}">{{ $items['title'] ?? '' }}</a></li>
                    @endforeach
                </ul>

            </div>
        </div>

        <div id="grid2">
            @foreach($galleryItems as $key => $items)
                @foreach($items['images'] ??[] as $item)
                    <div class="media-box {{$key}}">
                        <div class="media-box-image mb-open-popup" data-type="inline">
                            <div data-width="240" data-height="160" data-thumbnail="{{$item['path']}}" ></div>
                            <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="{{$item['path']}}">
                                <div class="media-box-title">{{$item['name']}}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div> <!-- #grid -->

        <!--  ================== END MEDIA BOXES ================== -->

    </section>
</div>

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

    <script>


        $('#grid2').mediaBoxes({
            filterContainer: '#filter2',
            search: '#search2',
            columns: 5,
            overlayEffect: 'direction-aware',
            boxesToLoadStart: 10,
            boxesToLoad: 8,
            horizontalSpaceBetweenBoxes: 18,
            verticalSpaceBetweenBoxes: 18,
        });



    </script>
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

    <style type="text/css">

        /* change the style of the first grid */
        #grid .thumbnail-overlay{
            background: #fff;
            padding: 0 15px;
        }
        #grid .thumbnail-overlay>div.aligment>div.aligment {
            text-align: left; /* FOR HORIZONTAL ALIGN */
        }
        .media-boxes-drop-down{
            float: right;
            margin-left: 8px;
        }


        /* change the style of the second grid */
        .white-popup .media-box-view-image a,
        #grid2 .media-box-date, .white-popup .media-box-date{
            color: #fff;
        }
        .white-popup {
            position: relative;
            background: #FFF;
            padding: 20px;
            width: auto;
            max-width: 500px;
            margin: 20px auto;
        }
        #grid2 .thumbnail-overlay{
            padding: 10px 5px; color: #fff;

        }
        #search2{
            float: right;
        }
        #filter2 li a.selected {
            background: #28ac86;
        }
        #grid2 .thumbnail-overlay>div.aligment>div.aligment {
            text-align: left; /* FOR HORIZONTAL ALIGN */
        }

        .media-boxes-no-more-entries{
            display: none;
        }

        /* style of the footer of each media box */
        .media-box-footer{
            padding: 15px 20px;
            font-size: 11px;
            color: #777;
        }
        .media-box-title{color: #fff}

        /* make your own style of the filter */
        .filters-container{
            margin-bottom: 40px;
        }
        .custom-filter{
            padding: 10px;
            text-align: center;
        }
        .custom-filter li{
            list-style: none;
            display: inline-block;
            margin: 0 10px;
            font-size: 12px;
        }
        .custom-filter li a{
            font-size: 16px;
            text-decoration: none;
        }
        .custom-filter li a:hover{
            color: #4FB222;
        }
        .custom-filter li a.selected{
            color: #4FB222 !important; background: transparent !important;
        }
        .media-boxes-search{background: transparent; border: 1px solid #999}
        .media-box-container{
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;

            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            -o-box-shadow: none;
            -ms-box-shadow: none;
            box-shadow: none;
        }
        .happy-blue{
            background: rgba(33, 187, 180, .8);
        }

        .red{
            background: rgba(229, 59, 44, .8);
        }
        .dark-blue{
            background: rgba(59, 90, 111, .8);
        }
        .turquoise{
            background: rgba(0, 167, 142, .8);
        }
        .blue{
            background: rgba(65, 131, 196, .8);
        }
        .light-gray{
            background: rgba(153, 153, 153, .8);
        }
        .purple{
            background: rgba(141, 108, 171, .8);
        }
        .pink{
            background: rgba(245, 117, 108, .8);
        }
        .palid-green{
            background: rgba(132, 175, 162, .8);
        }


    </style>
@endpush

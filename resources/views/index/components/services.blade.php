<div class="row">
    @foreach([
    'house-cleaning' => [
        'image' => 'Asset-16.png',
        'route' => route("home.services.service", 'house-cleaning'),
        'name' => 'House Cleaning'
    ],
       'office-cleaning' => [
        'image' => 'Asset-18-e1629301145995.png',
        'route' => route("home.services.service", 'office-cleaning'),
        'name' => 'Office Cleaning'
    ],
    'regular-cleaning' => [
        'image' => 'Asset-19-1-e1629301603100.png',
        'route' => route("home.services.service", 'regular-cleaning'),
        'name' => 'Regular Cleaning'
    ],
    'end-of-lease-cleaning' => [
        'image' => 'Asset-20.png',
        'route' => route("home.services.service", 'end-of-lease-cleaning'),
        'name' => 'End of Lease Cleaning'
    ],
    'deep-cleaning' => [
        'image' => 'Asset-25-e1629301452902.png',
        'route' => route("home.services.service", 'deep-cleaning'),
        'name' => 'Deep Cleaning'
    ],
    'construction-cleaning' => [
        'image' => 'Asset-22-e1629301386453.png',
        'route' => route("home.services.service", 'construction-cleaning'),
        'name' => 'Construction Cleaning'
    ],
    'ndis-cleaning' => [
        'image' => 'Asset-23-e1629301508944.png',
        'route' => route("home.services.service", 'ndis-cleaning'),
        'name' => 'NDIS Cleaning'
    ],
    'oven-cleaning' => [
        'image' => 'Asset-26.png',
        'route' => route("home.services.service", 'oven-cleaning'),
        'name' => 'Oven Cleaning'
    ],
] as $key => $service)
        <div class="col-md-3">
            <div class="service-item">
                <div class="_content position-relative">
                    <div class="small_image">
                        <img src="{{ asset("assets/images/". $service['image']) }}" alt="">
                    </div>
                    <h4 class="_title">
                        <a href="{{ $service['route'] }}">
                            <span>{{ $service['name'] }}</span>
                        </a>
                    </h4>
                </div>
            </div>
        </div>
    @endforeach
</div>

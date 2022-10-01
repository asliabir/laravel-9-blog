@extends('frontend.layouts.app')
@section('title') About Page @endsection
@section('content')
<div class="container py-4 my-5">
    <div class="row">
        <div class="col-lg-5 col-md-8">
            <form class="search-form" action="#">
                <div class="input-group">
                    <input type="search" class="form-control bg-transparent shadow-none rounded-0"
                        placeholder="Search here">
                    <div class="input-group-append">
                        <button class="btn" type="submit">
                            <span class="fas fa-search"></span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <img class="img-fluid" src="{{ asset('frontend/images/author.png') }}" alt="">
            <h1 class="text-white add-letter-space my-4">Hi,I’m Alexender Xanidiver Specilized In Blog Writing And
                Colecting</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Metus cum cursus nunc nec velit volutpat
                consequat. Vitae dui, massa viverra nam dui laoreet ipsum. Sagittis sed feugiat blandit adipiscing
                mauris.
                Facilisis dictum in tellus ac turpis. Pretium, facilisis turpis duis pulvinar blandit est. Dolor
                accumsan
                pellentesque ullamcorper volutpat urna arcu. Nisi nulla et mauris et, ultricies odio semper gravida.
                Justo, lorem leo ullamcorper leo ornare phasellus. Dolor tristique sem quam eget tempor aliquet sem
                amet,
                eget. Vitae id mattis consectetur gravida sit lorem donec. Phasellus enim sodales congue varius arcu et,
                pulvinar ultrices. Faucibus nulla massa erat ut. Egestas integer pharetra proin pellentesque tellus quis
                pulvinar mauris. Sed quisque pellentesque platea vel. Proin felis tellus nunc risus tortor, nibh.
                Vulputate mauris fermentum tincidunt diam sed. Vel interdum nisl, pellentesque ante consectetur. At
                praesent lorem placerat nibh nunc. Massa lectus id et amet quam venenatis, in mus. Arcu cras risus est
                porttitor tincidunt posuere feugiat. Sem velit ornare id duis Amet nullam eget mus diam nisl, vel. Sed
                at
                id quam bibendum lacus felis. Porta arcu, nunc ultricies</p>
            <h2 class="text-white add-letter-space my-5">I’m on a mission to change how software is made by peoples of
                republic</h2>
            <ul class="list-unstyled">
                <li class="bullet-list-item mb-4">
                    <h3 class="text-white mb-3 add-letter-space">Building software shouldn't be so hard</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus, donec nunc eros, ullamcorper id
                        feugiat quisque aliquam sagittis. Sem turpis sed viverra massa gravida pharetra. Non dui dolor
                        potenti
                        eu dignissim fusce. Ultrices amet, in curabitur a arcu a lectus morbi id. Iaculis erat sagittis
                        in
                        tortor cursus. Molestie urna eu tortor erat.</p>
                </li>
                <li class="bullet-list-item mb-4">
                    <h3 class="text-white mb-3 add-letter-space">You should get something working on day one</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus, donec nunc eros, ullamcorper id
                        feugiat quisque aliquam sagittis. Sem turpis sed viverra massa gravida pharetra. Non dui dolor
                        potenti
                        eu dignissim fusce. Ultrices amet, in curabitur a arcu a lectus morbi id. Iaculis erat sagittis
                        in
                        tortor cursus. Molestie urna eu tortor erat.</p>
                </li>
                <li class="bullet-list-item mb-4">
                    <h3 class="text-white mb-3 add-letter-space">Don't reimplement the wheel</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus, donec nunc eros, ullamcorper id
                        feugiat quisque aliquam sagittis. Sem turpis sed viverra massa gravida pharetra. Non dui dolor
                        potenti
                        eu dignissim fusce. Ultrices amet, in curabitur a arcu a lectus morbi id. Iaculis erat sagittis
                        in
                        tortor cursus. Molestie urna eu tortor erat.</p>
                </li>
                <li class="bullet-list-item">
                    <h3 class="text-white mb-3 add-letter-space">You should get working on day one</h3>
                    <ol class="pl-0">
                        <li class="mb-2">Sll the Themefisher items are designed to be with the latest , We check all.
                        </li>
                        <li class="mb-2">Comments that threaten or harm the reputation of any person or organization
                        </li>
                        <li class="mb-2">Personal information including, but limited to, email addresses, telephone
                            numbers
                        </li>
                        <li>Any Update come in The technology Customer will get automatic Notification.</li>
                    </ol>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

@push('style')

@endpush

@push('script')
    <script>
        console.log('i\'m pushed script');
    </script>
@endpush

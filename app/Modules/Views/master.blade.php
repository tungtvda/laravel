@include('Templates::header')
<body class="container">
<header >
    <img style="width:100%" src="http://rockstartemplate.com/blogheaders/bannerdesign2.jpg" class="img-responsive">
</header>
<div >
    <div class="col-md-4">
        <ul>
            <li >
                <a href="">Categories</a>
            </li>
            <li >
                <a href="">Products</a>
            </li>
            <li >
                <a href="">Product images</a>
            </li>
        </ul>
    </div>
    <div class="col-md-8">
        <div class="col-md-12">
            @if(\Illuminate\Support\Facades\Session::has('flash_message'))
                <div class="alert">
                    {!! \Illuminate\Support\Facades\Session::get('flash_message') !!}
                </div>
                @endif
        </div>

        @yield('content')
    </div>


</div>
<script>
    $('div.alert').delay(3000).slideUp();
</script>
@include('Templates::footer')
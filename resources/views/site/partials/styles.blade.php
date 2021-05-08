@if (config('settings.site_favicon') != null)
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/'.config('settings.site_favicon')) }}">
@endif
<!-- CSS 
========================= -->

<!-- Plugins CSS -->
<link rel="stylesheet" href="{{asset('frontend')}}/css/plugins.css">

<!-- Main Style CSS -->
<link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{asset('frontend')}}/css/custom.css">

@yield('styles')
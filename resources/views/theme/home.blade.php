@extends('theme.default')

@section('content')

  <!-- Home -->
  <section id="home">

        <!-- Background Video -->
        <video id="home-bg-video" poster="{!! asset('theme/video/solo.jpg') !!}" autoplay loop muted>
            <source src="{!! asset('theme/video/solo.mp4') !!}" type="video/mp4">
            <source src="{!! asset('theme/video/solo.ogv') !!}" type="video/ogg">
            <source src="{!! asset('theme/video/solo.webm') !!}" type="video/webm">
        </video>

        <!-- Overlay -->
        <div id="home-overlay"></div>

        <!-- Home Content -->
        <div id="home-content">

            <div id="home-content-inner" class="text-center">

                <div id="home-heading">
                    <!-- <h1 id="home-heading-1">Digital</h1><br> -->
                    <h1 id="home-heading-2">DAC <span>Interiors</span></h1>
                </div>

                <div id="home-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam in nihil minima unde qui nihil minima.</p>
                </div>

                <div id="home-btn">
                    <a class="btn btn-general btn-home smooth-scroll" href="#about" title="Start Now" role="button">Start Now</a>
                </div>

            </div>

        </div>

        <!-- Arrow Down -->
        <a href="#about" id="arrow-down" class="smooth-scroll">
            <i class="fa fa-angle-down"></i>
        </a>

    </section>
<!-- Home Ends -->

@endsection

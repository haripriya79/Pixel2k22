<!DOCTYPE html>

<html data-wf-page="5d70f6f0c8ca5d73cd4392e2" data-wf-site="5d70f6f0c8ca5de04b4392d5">

<head>
    <meta charset="utf-8" />
    <title>Pixel 2022</title>
    <meta content="Pixel 2022" name="description" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Styles -->
    <link href="{{asset('css/main-script.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/faq.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/registration_form.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/preloader.css') }}" rel="stylesheet">

    <!-- Scripts -->

    <script src="{{ asset('js/preload.js') }}" ></script>
    <script src="{{asset('js/webfont.js')}}" type="text/javascript"></script>

    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Barlow Condensed:regular,500,600,700,800,900", "Barlow:300,regular,italic,500,600,700"]
            }
        });
    </script>
</head>

<script type="text/javascript">
    function userAvailability() {
        let email = $("#email").val();
        $.ajax({
            type:'POST',
            url: '{{ route("emailCheck") }}',
            datatype: 'json',
            data : {
                '_token' : '{{csrf_token()}}',
                'email': email,
            },
            success: function(result){
                $("#user-availability-status1").html(result);
            },
        });
    }
    ! function(o, c) {
        var n = c.documentElement,
            t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }
    (window, document);
</script>
<script>
    function reset() {

        $('#body').css({overflow: 'scroll'});
        document.getElementById("register-form").reset();
        document.getElementById("register-form").style.display = "block";
        document.getElementById("form-done").style.display = "none";
        document.getElementById("form-fail").style.display = "none";

    }

    function save_data() {

        var form_element = document.getElementsByClassName('form_data');

        var form_data = new FormData();
        if (form_element.length != 0) {



            for (var count = 0; count < form_element.length; count++) {
                form_data.append(form_element[count].name, form_element[count].value);

                if (form_element[count].value.length == 0) {
                    return;
                }
            }

            document.getElementById('submit').disabled = true;

            $.ajax({
                type: 'POST',
                url: '{{ route("register") }}',
                datatype: 'json',
                data: {
                    '_token': '{{csrf_token()}}',
                    'name' : form_data.get('name'),
                    'email' : form_data.get('email'),
                    'contact' : form_data.get('contact'),
                    'branch' : form_data.get('branch'),
                    'admnno' : form_data.get('admnno'),
                    'college' : form_data.get('college'),
                    'location' : form_data.get('location'),

                },
                success: function(result) {
                    document.getElementById("register-form").style.display = "none";
                    if(result=="true"){



                        document.getElementById("form-done").style.display = "block";
                    }else{



                        document.getElementById("form-fail").style.display = "block";

                    }
                    document.getElementById("register-form").reset();


                    document.getElementById('submit').disabled = false;



                },
                error: function (request, status, error) {

                    document.getElementById("register-form").reset();

                    document.getElementById("register-form").style.display = "none";
                    document.getElementById("form-fail").style.display = "block";
                    document.getElementById('submit').disabled = false;
                }
            });


        }
    }
</script>
<link href="images/pixel-logo.svg " rel="shortcut icon " type="image/x-icon " />
<link href="images/pixel-logo.svg" rel="apple-touch-icon" />
<style>
    body {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    canvas {
        display: block;
        background: rgb(33, 36, 50);
        position: fixed;
        z-index: -1;
    }

</style>
</head>

<body id="body">

@include('layouts.preload')

<div data-collapse="medium" data-animation="default" data-duration="400" style="opacity: 0; display: flex; flex-direction: row; align-items:
        center;" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
    <div style="display: block;">
        <a href="/" aria-current="page" class="brand white
                logo-absolute
                w-nav-brand w--current">
            <div style="display: flex;flex-direction: row;align-items:
                    center;">
                <img class="logo" src="images/pixel-logo.svg" alt="" srcset="" width="80px">

                <h4 class="uppercase" style="padding-left: 10px;
                        padding-right:
                        10px; color: white;">
                    Pixel <br> 2022
                </h4>


            </div>
        </a>
    </div>
    <nav role="navigation" class="nav-menu w-nav-menu">
        <!-- <div class="nav-menu-wrapper margin-tablet">
            <div class="display-none-mobile">
                <div class="caption font-white">Share</div>
                <div class="separator-line-horiz white"></div>
            </div>
            <a href="https://www.instagram.com/fouroomdotco/" target="_blank" class="icn-social-small facebook w-inline-block"></a>
            <a href="https://www.instagram.com/fouroomdotco/" target="_blank" class="icn-social-small twitter w-inline-block"></a>
            <a href="https://www.instagram.com/fouroomdotco/" target="_blank" class="icn-social-small linkedin w-inline-block"></a>
        </div> -->
        <div class="nav-menu-wrapper" style="margin-left: auto;
                padding-right: 5px;">
            <a href="#about" class="btn navi-1 w-inline-block">
                <div class="btn-label">About</div>
                <div class="btn-hover purple"></div>
            </a>

            <a href="#events" class="btn navi-1 w-inline-block">
                <div class="btn-label">Events</div>
                <div class="btn-hover purple"></div>
            </a>
            <a href="#schedule" class="btn navi-1 w-inline-block">
                <div class="btn-label">Event-Schedule</div>
                <div class="btn-hover purple"></div>
            </a>
            <a href="#gallery" class="btn navi-1 w-inline-block">
                <div class="btn-label">Gallery</div>
                <div class="btn-hover purple"></div>
            </a>
            <a href="#recs" class="btn navi-1 w-inline-block">
                <div class="btn-label">Sponsors</div>
                <div class="btn-hover purple"></div>
            </a>
            <a data-w-id="8320fab2-82fb-d44f-d6ea-a5b42319c9bf" href="#contactUs" class="btn navi-1 w-inline-block">
                <div class="btn-label">Contact Us</div>
                <div class="btn-hover purple"></div>
            </a>
            <a data-w-id="8320fab2-82fb-d44f-d6ea-a5b42319c9bf1" href="#" class="btn navi-1 w-inline-block">
                <div class="btn-label">FAQ</div>
                <div class="btn-hover purple"></div>
            </a>

            <a data-w-id="8320fab2-82fb-d44f-d6ea-a5b42319c9bf2" href="#" class="btn navi-2 w-inline-block" onclick="$('#body').css({overflow: 'hidden'});">
                <div class="bg-color yellow"></div>
                <img src="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/5d73a5847149d55967004dcb_Orion_entrance.svg" alt="" class="btn-icon" />
                <div style="-webkit-transform: translate3d(0, 0, 0)
                        scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                        skew(0, 0);
                        -moz-transform: translate3d(0, 0, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                        -ms-transform: translate3d(0, 0, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                        transform: translate3d(0, 0, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);" class="btn-label">
                    Register Now
                </div>
            </a>
        </div>
    </nav>
    <!-- TODO -->
    <div class="menu-button w-nav-button">
        <div class="w-icon-nav-menu" style="font-size: 40px;"></div>
    </div>
</div>
<div id="tsparticles" style="opacity: 0;" class="main">
    <div class="section-hero">
        <div class="w-layout-grid main-grid">
            <div id="w-node-_2c901486-4706-c71b-80e1-40809d106148-cd4392e2" data-w-id="2c901486-4706-c71b-80e1-40809d106148" class="content centered">
                <h1 class="display-0 margin-paragraph_4x">PIXEL </h1>
                <div class="show-item-onload margin-paragraph">
                    <h2 class="display-2 small">A National Level
                        <span class="marked">Technical
                                Symposium</span>
                    </h2>
                </div>
                <div class="show-item-onload">
                    <div class="show-item-onload">
                        <h5 class="display-3">From the Department of <span style="font-weight: bold;">CSE</span>, Jawaharlal Nehru Technological University, Anantapur </h5>
                    </div>
                </div>
                <div class="register">
                    <a data-w-id="8320fab2-82fb-d44f-d6ea-a5b42319c9bf2" href="#" class="register btn  w-inline-block " style="margin: 2rem;" onclick="$('#body').css({overflow: 'hidden'});">
                        <div class="bg-color yellow"></div>
                        <img src="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/5d73a5847149d55967004dcb_Orion_entrance.svg" alt="" class="btn-icon" />
                        <div style="-webkit-transform: translate3d(0, 0, 0)
                                scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                                skew(0, 0);
                                -moz-transform: translate3d(0, 0, 0) scale3d(1, 1, 1)
                                rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                -ms-transform: translate3d(0, 0, 0) scale3d(1, 1, 1)
                                rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                transform: translate3d(0, 0, 0) scale3d(1, 1, 1)
                                rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);" class="btn-label">
                            Register Now
                        </div>

                    </a>
                </div>

{{--                <div class="video-player">--}}
{{--                    <div class="play-backdrop"></div>--}}
{{--                    <div class="play-button">--}}
{{--                        <svg class="play-circles" viewBox="0 0 152 152">--}}
{{--                            <circle class="play-circle-01" fill="none" stroke="#fff" stroke-width="3" stroke-dasharray="343 343" cx="76" cy="76" r="72.7"/>--}}
{{--                            <circle class="play-circle-02" fill="none" stroke="#fff" stroke-width="3" stroke-dasharray="309 309" cx="76" cy="76" r="65.5"/>--}}
{{--                        </svg>--}}
{{--                        <div class="play-perspective">--}}
{{--                            <button class="play-close"></button>--}}
{{--                            <div class="play-triangle">--}}
{{--                                <div class="play-video">--}}
{{--                                    <iframe width="600" height="400" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>
        </div>

    </div>

    <div class="section">
        <div class="container medium">
            <div class="content centered margin-bottom">
                <div class="w--vertical centered">
                    <div class="section ">
                        <div class="container ">
                            <div class="content centered margin-bottom">
                                <div class="show-item-onscroll">
                                    <h6 class="uppercase introduction font-yellow margin-paragraph_2x">Hosted by
                                    </h6>
                                </div>
                            </div>
                            <div class="show-item-onscroll ">
                                <div class="w-layout-grid grid-conference-info border">
                                    <div id="w-node-_2011552c-4754-9f48-438c-9b6de46fdc03-cd4392e2" class="section padding-2rem">
                                        <div class="content horizontal middle">
                                            <img src="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/5d74eab37a6dfa8086237033_Orion_timekeeping.svg" alt="" class="icn-32" />
                                            <div class="margin-left">
                                                <div>Dates</div>
                                                <h5 class="display-3 font-yellow">April 29–30 2022</h5>

                                            </div>
                                        </div>
                                    </div>
                                    <div id="w-node-_2011552c-4754-9f48-438c-9b6de46fdc09-cd4392e2" class="section padding-2rem">
                                        <div class="line-left"></div>
                                        <div class="content horizontal middle">
                                           
                                                <img src="images/icons/location.svg" alt="" class="icn-32" />
                                            
                                           
                                           
                                            <div class="margin-left">
                                                <div>Location</div>
                                                <h5 class="display-3 font-yellow">JNTUACEA, Anantapur</h5>

                                            </div>
                                        </div>
                                    </div>
                                    <div id="w-node-_2011552c-4754-9f48-438c-9b6de46fdc10-cd4392e2" class="section padding-2rem">
                                        <div class="line-left"></div>
                                        <div class="content horizontal middle">
                                            <img src="images/icons/department.svg" alt="" class="icn-32" />
                                            <div class="margin-left">
                                                <div>Organized by</div>
                                                <h5 class="display-3 font-yellow">Department of CSE</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- partial -->


                </div>
            </div>
        </div>


        <div class="gradient-bottom"></div>
    </div>
    <div class="absolute-hero fixed">
        <div class="hero-cutted-1">
            <div class="hero-cutted-img restaurant_c-hero_1"></div>
        </div>
        <div class="hero-cutted-2">
            <div class="hero-cutted-img restaurant_c-hero_1"></div>
        </div>
        <div class="hero-cutted-3">
            <div class="hero-cutted-img restaurant_c-hero_1"></div>
        </div>
    </div>
    <img src="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/5d7b5aafa7b26e5bd11f709c_shape-bottom-1.svg" alt="" class="img-shape-bottom" />
</div>
<div class="main overflow-hidden bg-dark-grey">
    <div class="section" id="about">
        <div class="w-layout-grid main-grid">
            <div id="w-node-_7eb1babb-3dd0-7d38-92d5-8ebb6bcab5bf-cd4392e2" data-w-id="7eb1babb-3dd0-7d38-92d5-8ebb6bcab5bf" class="section">
                <div class="content centered" >
                    <div data-w-id="7eb1babb-3dd0-7d38-92d5-8ebb6bcab5c1" style="-webkit-transform:translate3d(0, 16PX, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 16PX, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 16PX, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 16PX, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                         class="show-item-onscroll">
                        <h2 class="display-1 small" style="margin: 2rem" mar>About Pixel</h2>
                    </div>
                   
                    
                </div>
                <div data-w-id="7eb1babb-3dd0-7d38-92d5-8ebb6bcab5cd" style="height:0%" class="bg-color-animate dark-purple"></div>
            </div>
            <!-- Working of the play button
                 <a href="#" class="w-inline-block w-lightbox">
                <div class="play-button">
                    <svg class="play-circles" viewBox="0 0 152 152">
                        <circle class="play-circle-01"fill="none"stroke="#fff"stroke-width="3"stroke-dasharray="343
                            343"cx="76"cy="76"r="72.7"/>
                            <circle class="play-circle-02"fill="none"stroke="#fff"stroke-width="3"stroke-dasharray="309
                                309"cx="76"cy="76"r="65.5"/>
                            </svg>
                    <div class="play-perspective">
                        <button class="play-close"></button>
                        <div class="play-triangle">
                            <div class="play-video">
                                <div width="600" height="400" src="https://www.youtube.com/watch?v=Mz86plRUqzo" frameborder="0" allow="autoplay;
                                            encrypted-media" allowfullscreen></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-wrapper small margin-paragraph" style="transform: translate3d(0px, 0px, 0px)
                            scale3d(0.9, 0.9, 1) rotateX(0deg)
                            rotateY(0deg)
                            rotateZ(0deg) skew(0deg, 0deg);
                            transform-style:
                            preserve-3d;">
                    <div class="bg-image programme_3" style="transform:
                                translate3d(0px, 0px, 0px) scale3d(1.2,
                                1.2, 1)
                                rotateX(0deg) rotateY(0deg)
                                rotateZ(0deg)
                                skew(0deg, 0deg); transform-style:
                                preserve-3d;"></div><img src="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/5d7e713a28ecca071bd9fd6a_Orion_play.svg" alt="" class="icn-64"></div>
                <script type="application/json" class="w-json">
                    {
                        "items": [{
                            "type": "video",
                            "originalUrl": "https://www.youtube.com/watch?v=v1M4ydNlgP0",
                            "url": "https://www.youtube.com/watch?v=v1M4ydNlgP0",
                            "html": "<iframe class=\"embedly-embed\" src=\"//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2Fv1M4ydNlgP0%3Ffeature%3Doembed&url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3Dv1M4ydNlgP0&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2Fv1M4ydNlgP0%2Fhqdefault.jpg&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=youtube\" width=\"940\" height=\"528\" scrolling=\"no\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen=\"true\"></iframe>",
                            "thumbnailUrl": "https://i.ytimg.com/vi/v1M4ydNlgP0/hqdefault.jpg",
                            "width": 940,
                            "height": 528
                        }]
                    }
                </script>
            </a> -->

            <!-- <div id="w-node-_7eb1babb-3dd0-7d38-92d5-8ebb6bcab5bf-cd4392e2" data-w-id="7eb1babb-3dd0-7d38-92d5-8ebb6bcab5bf" class="section">
                <div class="content">
                    <img src="images/web/about.png" alt="" srcset="" height="100%" width="100%">
                </div>
                <div data-w-id="7eb1babb-3dd0-7d38-92d5-8ebb6bcab5cd" style="height:0%" class="bg-color-animate
                            dark-purple"></div>
            </div> -->
            <div id="w-node-_7eb1babb-3dd0-7d38-92d5-8ebb6bcab5ce-cd4392e2" data-w-id="7eb1babb-3dd0-7d38-92d5-8ebb6bcab5ce" class="section">
                <div class="content font-dark-grey">
                    <div data-w-id="061d75a7-65e2-9069-ae44-033e61f41b23" style="transform:
                                    translate3d(0px, 0px, 0px) scale3d(1, 1, 1)
                                    rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                                    skew(0deg, 0deg); transform-style:
                                    preserve-3d; opacity: 1;" class="show-item-onscroll">
                    </div>
                    <div data-w-id="7eb1babb-3dd0-7d38-92d5-8ebb6bcab5d0" style="-webkit-transform:translate3d(0,
                                    16PX, 0) scale3d(0.9, 0.9, 1) rotateX(0)
                                    rotateY(0) rotateZ(0) skew(0,
                                    0);-moz-transform:translate3d(0, 16PX, 0)
                                    scale3d(0.9, 0.9,
                                    1) rotateX(0) rotateY(0) rotateZ(0) skew(0,
                                    0);-ms-transform:translate3d(0, 16PX, 0)
                                    scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0)
                                    rotateZ(0) skew(0,
                                    0);transform:translate3d(0, 16PX, 0)
                                    scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0)
                                    rotateZ(0) skew(0, 0);opacity:0" class="show-item-onscroll">
                        <div class="introduction small
                                        margin-paragraph_4x">
                                        Pixel is a National Level Technical Symposium for undergrads and postgrads organised by Department of Computer Science and Engineering, JNTUA College of Engineering, Ananthapuramu. The fest is a high profile event which will lure the students of all colleges in and around the country to uncover their all-round expertise by competing emulously on a large scale that paves the way for all-round development of a budding professional.
                        </div>
                    </div>

                </div>
                <div data-w-id="7eb1babb-3dd0-7d38-92d5-8ebb6bcab5db" style="height:0%" class="bg-color-animate
                                white"></div>
            </div>
        </div>
        <div class="bg-color dark-grey"></div>
    </div>
    <!-----
        About------>
    <!----------
    -->
    <div class="section" id="events">
        <div id="w-node-_061d75a7-65e2-9069-ae44-033e61f41b22-cd4392e2" class="content
                        xs centered">
            <div data-w-id="061d75a7-65e2-9069-ae44-033e61f41b23" style="padding-bottom: 3rem; transform:
                            translate3d(0px, 0px, 0px) scale3d(1, 1, 1)
                            rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg,
                            0deg); transform-style: preserve-3d; opacity: 1;" class="show-item-onscroll">
                <h2 class="display-2">Events<br></h2>
            </div>
        </div>
        <div class="container">
            <div class="item-container show-item-onscroll">
                <div class="img-container">
                    <img src="images/events/codewar.jpeg"style="height: 200px" alt="Event image">
                </div>

                <div class="body-container">
                    <div class="overlay"></div>

                    <div class="event-info">
                        <p class="title">Code Combat</p>
                        <div class="separator"></div>
                        <p class="info">Apr 29,2022</p>
                        <p class="price">Rs.200</p>

                        <!--
                            <div class="additional-info">
                            <p class="info">
                                <i class="fas fa-map-marker-alt"></i> Grand Central Terminal
                            </p>
                            <p class="info">
                                <i class="far fa-calendar-alt"></i> Sat, Sep 19, 10:00 AM EDT
                            </p>

                            <p class="info description">
                                Welcome! Everyone has a unique perspective after reading a book, and we would love you to share yours with us! We meet one Sunday evening
                                <span>more...</span>
                            </p>
                        </div>
                        -->
                    </div>
                    <a href="events/code-combat"><button class="action" style="width: 90%; ">Participate</button></a>
                </div>
            </div>

            <div class="item-container show-item-onscroll">
                <div class="img-container">
                    <img src="images/events/bugging.jpg"style="height: 200px" alt="Event image">
                </div>

                <div class="body-container">
                    <div class="overlay"></div>

                    <div class="event-info">
                        <p class="title">Debugging Apocalypse</p>
                        <div class="separator"></div>
                        <p class="info">Apr 29,2022</p>
                        <p class="price">Rs.200</p>

{{--                        <div class="additional-info">--}}
{{--                            <p class="info">--}}
{{--                                <i class="fas fa-map-marker-alt"></i> 245 W 52nd St, New York--}}
{{--                            </p>--}}
{{--                            <p class="info">--}}
{{--                                <i class="far fa-calendar-alt"></i> Sat, Sep 19, 10:00 AM EDT--}}
{{--                            </p>--}}


{{--                        </div>--}}
                    </div>
                    <a href="events/debug"><button class="action" style="width: 90%; ">Participate</button></a>
                </div>
            </div>

            <div class="item-container show-item-onscroll">
                <div class="img-container">
                    <img src="images/events/gaming.jpg" style="height: 200px"alt="Event image">
                </div>

                <div class="body-container">
                    <div class="overlay"></div>

                    <div class="event-info">
                        <p class="title">Gaming Arena</p>
                        <div class="separator"></div>
                        <p class="info">Apr 29,2022</p>
                        <p class="price">Rs.50-Rs.100</p>

{{--                        <div class="additional-info">--}}
{{--                            <p class="info">--}}
{{--                                <i class="fas fa-map-marker-alt"></i> 245 W 52nd St, New York--}}
{{--                            </p>--}}
{{--                            <p class="info">--}}
{{--                                <i class="far fa-calendar-alt"></i> Sat, Sep 19, 10:00 AM EDT--}}
{{--                            </p>--}}

{{--                            <p class="info description">--}}
{{--                                Welcome! Everyone has a unique perspective after reading a book, and we would love you to share yours with us! We meet one Sunday evening--}}
{{--                                <span>more...</span>--}}
{{--                            </p>--}}
{{--                        </div>--}}
                    </div>
                    <a href="events/gaming"><button class="action" style="width: 90%; ">Participate</button></a>
                </div>
            </div>
            <div class="item-container show-item-onscroll">
                <div class="img-container">
                    <img src="images/events/hackathon.jpeg"style="height: 200px" alt="Event
                                    image">
                </div>

                <div class="body-container">
                    <div class="overlay"></div>

                    <div class="event-info">
                        <p class="title">Hackathon</p>
                        <div class="separator"></div>
                        <p class="info">Apr 29,2022</p>
                        <p class="price">Rs.350</p>

{{--                        <div class="additional-info">--}}
{{--                            <p class="info">--}}
{{--                                <i class="fas fa-map-marker-alt"></i> 245 W 52nd St, New York--}}
{{--                            </p>--}}
{{--                            <p class="info">--}}
{{--                                <i class="far fa-calendar-alt"></i> Sat, Sep 19, 10:00 AM EDT--}}
{{--                            </p>--}}

{{--                            <p class="info description">--}}
{{--                                Welcome! Everyone has a unique perspective after reading a book, and we would love you to share yours with us! We meet one Sunday evening--}}
{{--                                <span>more...</span>--}}
{{--                            </p>--}}
{{--                        </div>--}}
                    </div>
                    <a href="events/hackathon"><button class="action" style="width: 90%; ">Participate</button></a>
                </div>
            </div>

            <div class="item-container show-item-onscroll">
                <div class="img-container">
                    <img src="images/events/memegram.jpg"style="height: 200px" alt="Event
                                    image">
                </div>

                <div class="body-container">
                    <div class="overlay"></div>

                    <div class="event-info">
                        <p class="title">Memegram</p>
                        <div class="separator"></div>
                        <p class="info">Apr 29,2022</p>
                        <p class="price">Free</p>

{{--                        <div class="additional-info">--}}
{{--                            <p class="info">--}}
{{--                                <i class="fas fa-map-marker-alt"></i> 245 W 52nd St, New York--}}
{{--                            </p>--}}
{{--                            <p class="info">--}}
{{--                                <i class="far fa-calendar-alt"></i> Sat, Sep 19, 10:00 AM EDT--}}
{{--                            </p>--}}

{{--                            <p class="info description">--}}
{{--                                Welcome! Everyone has a unique perspective after reading a book, and we would love you to share yours with us! We meet one Sunday evening--}}
{{--                                <span>more...</span>--}}
{{--                            </p>--}}
{{--                        </div>--}}
                    </div>
                    <a href="events/meme-gram"><button class="action" style="width: 90%; ">Participate</button></a>
                </div>
            </div>

            <div class="item-container show-item-onscroll">
                <div class="img-container">
                    <img src="images/events/ppt.jpg"  style="height: 200px" alt="Event image">
                </div>

                <div class="body-container">
                    <div class="overlay"></div>

                    <div class="event-info">
                        <p class="title">Paper Presentation</p>
                        <div class="separator"></div>
                        <p class="info">Apr 29,2022</p>
                        <p class="price">Rs.200-Rs.300</p>

{{--                        <div class="additional-info">--}}
{{--                            <p class="info">--}}
{{--                                <i class="fas fa-map-marker-alt"></i> 245 W 52nd St, New York--}}
{{--                            </p>--}}
{{--                            <p class="info">--}}
{{--                                <i class="far fa-calendar-alt"></i> Sat, Sep 19, 10:00 AM EDT--}}
{{--                            </p>--}}

{{--                            <p class="info description">--}}
{{--                                Welcome! Everyone has a unique perspective after reading a book, and we would love you to share yours with us! We meet one Sunday evening--}}
{{--                                <span>more...</span>--}}
{{--                            </p>--}}
{{--                        </div>--}}
                    </div>
                    <a href="events/paper-presentation"><button class="action" style="width: 90%; ">Participate</button></a>
                </div>
            </div>

            <div class="item-container show-item-onscroll">
                <div class="img-container">
                    <img src="images/events/natyakshetra.jpeg"style="height: 200px" alt="Event image">
                </div>

                <div class="body-container">
                    <div class="overlay"></div>

                    <div class="event-info">
                        <p class="title">Natyakshetra</p>
                        <div class="separator"></div>
                        <p class="info">Apr 29,2022</p>
                        <p class="price">Rs.200-Rs.500</p>

{{--                        <div class="additional-info">--}}
{{--                            <p class="info">--}}
{{--                                <i class="fas fa-map-marker-alt"></i> 245 W 52nd St, New York--}}
{{--                            </p>--}}
{{--                            <p class="info">--}}
{{--                                <i class="far fa-calendar-alt"></i> Sat, Sep 19, 10:00 AM EDT--}}
{{--                            </p>--}}

{{--                            <p class="info description">--}}
{{--                                Welcome! Everyone has a unique perspective after reading a book, and we would love you to share yours with us! We meet one Sunday evening--}}
{{--                                <span>more...</span>--}}
{{--                            </p>--}}
{{--                        </div>--}}
                    </div>
                    <a href="events/natyakshetra"><button class="action" style="width: 90%; ">Participate</button></a>
                </div>
            </div>

            <div class="item-container show-item-onscroll">
                <div class="img-container">
                    <img src="images/events/questionbout.jpeg" style="height: 200px"alt="Event image">
                </div>

                <div class="body-container">
                    <div class="overlay"></div>

                    <div class="event-info">
                        <p class="title">Quizardry</p>
                        <div class="separator"></div>
                        <p class="info">Apr 29,2022</p>
                        <p class="price">Rs.250-Rs.300</p>

{{--                        <div class="additional-info">--}}
{{--                            <p class="info">--}}
{{--                                <i class="fas fa-map-marker-alt"></i> 245 W 52nd St, New York--}}
{{--                            </p>--}}
{{--                            <p class="info">--}}
{{--                                <i class="far fa-calendar-alt"></i> Sat, Sep 19, 10:00 AM EDT--}}
{{--                            </p>--}}

{{--                            <p class="info description">--}}
{{--                                Welcome! Everyone has a unique perspective after reading a book, and we would love you to share yours with us! We meet one Sunday evening--}}
{{--                                <span>more...</span>--}}
{{--                            </p>--}}
{{--                        </div>--}}
                    </div>
                    <a href="events/quiz"><button class="action" style="width: 90%; ">Participate</button></a>
                </div>
            </div>
        </div>
    </div>



    <!-------
       -->

    <div class="section" style="margin-top: 20px;" id="schedule">
        <div class="container">
            <div id="w-node-_061d75a7-65e2-9069-ae44-033e61f41b22-cd4392e2" class="content
                xs centered">
                <div data-w-id="061d75a7-65e2-9069-ae44-033e61f41b23" style="padding-bottom: 3rem; transform:
                    translate3d(0px, 0px, 0px) scale3d(1, 1, 1)
                    rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg,
                    0deg); transform-style: preserve-3d; opacity: 1;" class="show-item-onscroll">
                    <h2 class="display-2">Events Schedule<br></h2>
                </div>
            </div>
            <div class="w-layout-grid grid">
                <div data-duration-in="500" data-duration-out="250" data-easing="ease-in-out-quint" id="w-node-_9722da74-efc3-cfa3-e78e-1753f0ee9974-cd4392e2" data-current="Tab
                                1" class="tab-schedule w-tabs">
                    <div data-w-id="9722da74-efc3-cfa3-e78e-1753f0ee9975" class="tabs-menu
                                    w-tab-menu">
                        <a data-w-tab="Tab 1" data-w-id="9722da74-efc3-cfa3-e78e-1753f0ee9976" class="tab-link
                                        w-inline-block w-tab-link w--current">
                            <div class="line-top-tab"></div>
                            <div>Day 1</div>
                            <div style="width: 10%;" class="line-2"></div>
                        </a>

                        <a data-w-tab="Tab 3" class="tab-link
                                        w-inline-block w-tab-link">
                            <div>Day 2</div>
                            <div class="line-2"></div>
                        </a>
                    </div>
                    <div data-w-id="9722da74-efc3-cfa3-e78e-1753f0ee997f" class="tabs-content-schedule
                                    w-tab-content">
                        <div data-w-tab="Tab 1" class="tab-pane-schedule
                                        w-tab-pane w--tab-active">
                            <div class="section">
                                <div class="bg-color"></div>
                                <div class="content">
                                    <div class="skew">
                                        <h2 class="uppercase
                                                        font-purple
                                                        margin-paragraph_2x">Friday</h2>
                                    </div>
                                     <ul role="list " class="w-list-unstyled ">
                                        <li class="schedule-list ">
                                            <h5 class="display-3 ">Code Combat
                                            </h5>
                                            <div class="font-purple ">9AM</div>
                                        </li>
                                        <li class="schedule-list ">
                                            <h5 class="display-3 ">Debugging</h5>
                                            <div class="font-purple ">10AM–4PM</div>
                                        </li>
                                        <li class="schedule-list ">
                                            <h5 class="display-3 ">Gaming</h5>
                                            <div class="font-purple ">6PM</div>
                                        </li>
                                        <li class="schedule-list ">
                                            <h5 class="display-3 ">Quiz
                                            </h5>
                                            <div class="font-purple ">7PM</div>
                                        </li>
                                        <li class="schedule-list ">
                                            <h5 class="display-3 ">Natyakshetra
                                            </h5>
                                            <div class="font-purple ">8PM</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div data-w-tab="Tab 3" class="tab-pane-schedule
                                        w-tab-pane">
                            <div class="section">
                                <div class="bg-color"></div>
                                <div class="content">
                                    <div class="skew">
                                        <h2 class="uppercase
                                                        font-purple
                                                        margin-paragraph_2x">Saturday</h2>
                                    </div>
                                   <ul role="list " class="w-list-unstyled ">
                                        <li class="schedule-list ">
                                            <h5 class="display-3 ">Gaming
                                            </h5>
                                            <div class="font-purple ">9AM</div>
                                        </li>
                                        <li class="schedule-list ">
                                            <h5 class="display-3 ">Culturals</h5>
                                            <div class="font-purple ">10AM–4PM</div>
                                        </li>
                                        <li class="schedule-list ">
                                            <h5 class="display-3 ">Hackathon</h5>
                                            <div class="font-purple ">6PM</div>
                                        </li>
                                        <li class="schedule-list ">
                                            <h5 class="display-3 ">Paper Presentation
                                            </h5>
                                            <div class="font-purple ">7PM</div>
                                        </li>
                                        <li class="schedule-list ">
                                            <h5 class="display-3 ">Group discussion
                                            </h5>
                                            <div class="font-purple ">8PM</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----
    -->


    <div data-w-id="1ca55bec-30b7-92be-b0b5-3ba969375c1f" class="section
                    _100vh margin-bottom_2x" id="gallery">
        <div class="container centered">

            <div class="content centered ">
                <div data-w-id="2b00f316-c4f8-4f6b-b8ed-44a65612b961" style="-webkit-transform:
                                translate3d(0, 16px, 0) scale3d(0.9, 0.9, 1)
                                rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                -moz-transform: translate3d(0, 16px, 0)
                                scale3d(0.9, 0.9,
                                1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                -ms-transform: translate3d(0, 16px, 0)
                                scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0)
                                rotateZ(0) skew(0, 0); transform: translate3d(0,
                                16px, 0) scale3d(0.9, 0.9, 1) rotateX(0)
                                rotateY(0)
                                rotateZ(0) skew(0, 0); opacity: 0;" class="show-item-onscroll
                                margin-paragraph_2x">
                    <div class="font-yellow uppercase introduction">Our Gallery
                    </div>
                </div>
                <div data-w-id="6890a1a8-87fd-b182-9546-680ab5b4d98e" style="-webkit-transform:
                                translate3d(0, 16px, 0) scale3d(0.9, 0.9, 1)
                                rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                -moz-transform: translate3d(0, 16px, 0)
                                scale3d(0.9, 0.9,
                                1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                -ms-transform: translate3d(0, 16px, 0)
                                scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0)
                                rotateZ(0) skew(0, 0); transform: translate3d(0,
                                16px, 0) scale3d(0.9, 0.9, 1) rotateX(0)
                                rotateY(0)
                                rotateZ(0) skew(0, 0); opacity: 0;" class="show-item-onscroll">
                    <h2 class="display-3">Come participate in 2 days of knowledge filled adventure</h2>
                </div>
                <div class="show-item-onscroll">
                    <h2 class="display-3">interactive events, socializing, network building</h2>
                </div>
                <div class="show-item-onscroll">
                    <h2 class="display-3">and above all having a good laugh laced with the hospitality of the CSE department.
                    </h2>
                </div>
            </div>
        </div>
        <div class="absolute-img-stack">
            <img src="./images/gallery/2.jpg" sizes="(max-width:
                            350px) 47vw, (max-width: 500px) 46vw, (max-width:
                            991px) 45vw, 512px" alt="" class="img-stack-1" />
            <img src="./images/gallery/1.jpg" sizes="(max-width:
                            479px) 47vw, (max-width: 767px) 46vw, (max-width:
                            991px) 45vw, 512px" alt="" class="img-stack-2" />
            <img src="./images/gallery/6.jpg" sizes="(max-width:
                            479px) 47vw, (max-width: 767px) 46vw, (max-width:
                            991px) 45vw, 512px" alt="" class="img-stack-3" />
            <img src="./images/gallery/3.jpg" sizes="(max-width:
                            479px) 47vw, (max-width: 767px) 46vw, (max-width:
                            991px) 45vw, 512px" alt="" class="img-stack-4" />
            <img src="./images/gallery/4.jpg" sizes="(max-width:
                            479px) 47vw, (max-width: 767px) 46vw, (max-width:
                            991px) 45vw, 512px" alt="" class="img-stack-5" />
        </div>
    </div>
    <!------------------------------------------------------------------------------>

    <div class="section">
        <div class="container large">
            <div class="content centered margin-paragraph_4x">
                <div data-w-id="5a60f18f-5444-f682-c6c1-8c98fad62a4f" style="
                        -webkit-transform: translate3d(0, 16px, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                        -moz-transform: translate3d(0, 16px, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                        -ms-transform: translate3d(0, 16px, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                        transform: translate3d(0, 16px, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                        opacity: 0;
                    " class="show-item-onscroll margin-paragraph">
                    <h2 class="display-2">Our &nbsp;<span class="marked purple"> Team</span></h2>
                </div>
            </div>
            <div class="team">
                <a id="w-node-_40a07bba-7c84-960c-7e4d-f3ffb25e61d9-cd4392e2">
                    <div class="content font-white">
                        <div class="show-item-onscroll">
                            <img src="./images/team/k.png" alt="" class="margin-paragraph_2x" style="max-width: 250px;" />
                        </div>
                        <div class="profile-description-shift right-padding" style="margin-top: 2rem;">
                            <div class="show-item-onscroll">
                                <h4 class="uppercase margin-paragraph_half">
                                    Dr.K.Madhavi
                                </h4>
                            </div>
                            <div class="show-item-onscroll">
                                <div class="font-yellow margin-paragraph">Head of CSE Department</div>
                            </div>

                            <div href="#" data-w-id="505fbf65-8f10-cec4-8fca-fc5f367f69bb" style="color: rgb(255, 255, 255); padding-top: 0px;" class="button">
                                <div>CONVENOR</div>

                            </div>
                        </div>
                    </div>

                </a>
                <a id="w-node-_40a07bba-7c84-960c-7e4d-f3ffb25e61d9-cd4392e2">
                    <div class="content font-white">
                        <div class="show-item-onscroll">
                            <img src="./images/team/l.png" alt="" class="margin-paragraph_2x" style="max-width:250px;" />
                        </div>
                        <div class="profile-description-shift right-padding" style="margin-top:2rem;">
                            <div class="show-item-onscroll">
                                <h4 class="uppercase margin-paragraph_half">
                                    Dr.B.Lalitha
                                </h4>
                            </div>
                            <div class="show-item-onscroll">
                                <div class="font-yellow margin-paragraph">Associate Professor</div>
                            </div>

                            <div href="#" data-w-id="505fbf65-8f10-cec4-8fca-fc5f367f69bb" style="color: rgb(255, 255, 255);  padding-top: 0px;" class="button">
                                <div>STAFF COORDINATOR</div>

                            </div>
                        </div>
                    </div>

                </a>
                <a id="w-node-_40a07bba-7c84-960c-7e4d-f3ffb25e61d9-cd4392e2">
                    <div class="content font-white">
                        <div class="show-item-onscroll">
                            <img src="./images/team/j.png" alt="" class="margin-paragraph_2x" style="max-width: 250px;" />
                        </div>
                        <div class="profile-description-shift right-padding" style="margin-top: 2rem;">
                            <div class="show-item-onscroll">
                                <h4 class="uppercase margin-paragraph_half">
                                    Dr.A.P.Siva Kumar
                                </h4>
                            </div>
                            <div class="show-item-onscroll">
                                <div class="font-yellow margin-paragraph">Associate Professor</div>
                            </div>

                            <div href="#" data-w-id="505fbf65-8f10-cec4-8fca-fc5f367f69bb" style="color: rgb(255, 255, 255);  padding-top: 0px;" class="button">
                                <div>STAFF COORDINATOR</div>

                            </div>
                        </div>
                    </div>

                </a>
                <a id="w-node-_40a07bba-7c84-960c-7e4d-f3ffb25e61d9-cd4392e2">
                    <div class="content font-white">
                        <div class="show-item-onscroll">
                            <img src="./images/team/m.png" alt="" class="margin-paragraph_2x" style="max-width: 250px;" />
                        </div>
                        <div class="profile-description-shift right-padding" style="margin-top: 2rem;">
                            <div class="show-item-onscroll">
                                <h4 class="uppercase margin-paragraph_half">
                                    Machavaram Jaswanth
                                </h4>
                            </div>
                            <div class="show-item-onscroll">
                                <div class="font-yellow margin-paragraph">Student</div>
                            </div>

                            <div href="#" data-w-id="505fbf65-8f10-cec4-8fca-fc5f367f69bb" style="color: rgb(255, 255, 255);  padding-top: 0px;" class="button">
                                <div>STUDENT COORDINATOR</div>

                            </div>
                        </div>
                    </div>

                </a>

            </div>
        </div>
    </div>
    <!-------------------------------------------------------------------------------->

    <!-- <div class="container" id="sponsers">
        <div class="section" id="recs">
            <div class="w-layout-grid grid-programme" id="">
                <div id="w-node-_061d75a7-65e2-9069-ae44-033e61f41b22-cd4392e2" class="content
                            xs centered">
                    <div data-w-id="061d75a7-65e2-9069-ae44-033e61f41b23" style="transform:
                                translate3d(0px, 0px, 0px) scale3d(1, 1, 1)
                                rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                                skew(0deg, 0deg); transform-style: preserve-3d;
                                opacity: 1;" class="show-item-onscroll">
                        <h2 class="display-2">Sponsers<br></h2>
                    </div>
                </div>
                <div id="w-node-_061d75a7-65e2-9069-ae44-033e61f41b2a-cd4392e2" class="trigger
                            img-zoom">

                    <div class="img-wrapper small margin-paragraph" style="transform:
                                    translate3d(0px, 0px, 0px) scale3d(0.9, 0.9,
                                    1) rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                                    skew(0deg, 0deg); transform-style:
                                    preserve-3d;">
                        <div class="bg-image programme_1" style="transform:
                                        translate3d(0px, 0px, 0px) scale3d(1.2,
                                        1.2, 1) rotateX(0deg) rotateY(0deg)
                                        rotateZ(0deg) skew(0deg, 0deg);
                                        transform-style: preserve-3d;">
                        </div>

                    </div>


                    <div class="horizontal">
                        <div data-w-id="061d75a7-65e2-9069-ae44-033e61f41b2e" style="transform: translate3d(0px, 0px, 0px)
                                    scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg)
                                    rotateZ(0deg) skew(0deg, 0deg);
                                    transform-style:
                                    preserve-3d; opacity: 1;" class="show-item-onscroll
                                    margin-right">
                            <div class="font-yellow uppercase"> </div>
                        </div>
                        <div data-w-id="061d75a7-65e2-9069-ae44-033e61f41b31" style="transform: translate3d(0px, 0px, 0px)
                                    scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg)
                                    rotateZ(0deg) skew(0deg, 0deg);
                                    transform-style:
                                    preserve-3d; opacity: 1;" class="show-item-onscroll">
                            <div class="font-yellow uppercase"></div>
                            <h4 class="uppercase">Sponser 1</h4>
                        </div>
                    </div>
                </div>

                <div id="w-node-_061d75a7-65e2-9069-ae44-033e61f41b36-cd4392e2" class="trigger img-zoom">
                    <a href="#" class="w-inline-block w-lightbox">
                        <div class="img-wrapper small margin-paragraph" style="transform: translate3d(0px, 0px, 0px)
                                    scale3d(0.9, 0.9, 1) rotateX(0deg)
                                    rotateY(0deg)
                                    rotateZ(0deg) skew(0deg, 0deg);
                                    transform-style:
                                    preserve-3d;">
                            <div class="bg-image programme_1" style="transform:
                                        translate3d(0px, 0px, 0px) scale3d(1.2,
                                        1.2, 1)
                                        rotateX(0deg) rotateY(0deg)
                                        rotateZ(0deg)
                                        skew(0deg, 0deg); transform-style:
                                        preserve-3d;">
                            </div>
                        </div>
                    </a>
                    <div class="horizontal">
                        <div data-w-id="62bd9068-8b9e-8cf0-d261-329df2ea83b8" style="transform: translate3d(0px, 0px, 0px)
                                    scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg)
                                    rotateZ(0deg) skew(0deg, 0deg);
                                    transform-style:
                                    preserve-3d; opacity: 1;" class="show-item-onscroll
                                    margin-right">
                            <div class="font-yellow uppercase"></div>
                        </div>
                        <div data-w-id="62bd9068-8b9e-8cf0-d261-329df2ea83bb" style="transform: translate3d(0px, 0px, 0px)
                                    scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg)
                                    rotateZ(0deg) skew(0deg, 0deg);
                                    transform-style:
                                    preserve-3d; opacity: 1;" class="show-item-onscroll">
                            <div class="font-yellow uppercase"></div>
                            <h4 class="uppercase">Sponser 1
                            </h4>
                        </div>
                    </div>
                </div>
                <div id="w-node-de249962-d2d0-0021-5c4d-fe843a55148c-cd4392e2" class="trigger img-zoom">
                    <a href="#" class="w-inline-block w-lightbox">
                        <div class="img-wrapper small margin-paragraph" style="transform: translate3d(0px, 0px, 0px)
                                    scale3d(0.9, 0.9, 1) rotateX(0deg)
                                    rotateY(0deg)
                                    rotateZ(0deg) skew(0deg, 0deg);
                                    transform-style:
                                    preserve-3d;">
                            <div class="bg-image programme_1" style="transform:
                                        translate3d(0px, 0px, 0px) scale3d(1.2,
                                        1.2, 1)
                                        rotateX(0deg) rotateY(0deg)
                                        rotateZ(0deg)
                                        skew(0deg, 0deg); transform-style:
                                        preserve-3d;"></div>
                        </div>

                    </a>
                    <div class="horizontal">
                        <div data-w-id="de249962-d2d0-0021-5c4d-fe843a551490" style="transform: translate3d(0px, 0px, 0px)
                                    scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg)
                                    rotateZ(0deg) skew(0deg, 0deg);
                                    transform-style:
                                    preserve-3d; opacity: 1;" class="show-item-onscroll
                                    margin-right">
                            <div class="font-yellow uppercase"></div>
                        </div>
                        <div data-w-id="de249962-d2d0-0021-5c4d-fe843a551493" style="transform: translate3d(0px, 0px, 0px)
                                    scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg)
                                    rotateZ(0deg) skew(0deg, 0deg);
                                    transform-style:
                                    preserve-3d; opacity: 1;" class="show-item-onscroll">
                            <div class="font-yellow uppercase"></div>
                            <h4 class="uppercase">Sponser 3</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div>-->


    <!-- venue -->
    <div class="section"><img src="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/5d7b5d4b3a8c25e18e4d155d_shape-bottom-2.svg" alt="" class="img-shape-bottom" />
        <div class="bg-color dark-purple"></div>
        <div id="w-node-_061d75a7-65e2-9069-ae44-033e61f41b22-cd4392e2" class="content
                xs centered">
            <div data-w-id="061d75a7-65e2-9069-ae44-033e61f41b23" style="padding-bottom: 3rem; transform:
                    translate3d(0px, 0px, 0px) scale3d(1, 1, 1)
                    rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg,
                    0deg); transform-style: preserve-3d; opacity: 1;" class="show-item-onscroll">
                <h2 class="display-2">EVENT VENUE
                    <br>
                </h2>
            </div>
        </div>
        <div class="w-layout-grid main-grid">
            <div id="w-node-_147ce491-59b4-98ea-0255-9dd00d53371a-cd4392e2"  class="content centered">
                <div class="show-item-onload
                                            margin-paragraph">
                    <a href="https://goo.gl/maps/xH3ishA95tdCXp157" target="_blank">
                        <img src="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/5d7b8c59f5b5b2ce4abb032e_Orion_world-map.svg" alt="" class="icn-64
                                                margin-paragraph_2x" />
                    </a>


                    <h1 class="display-1 small"><span class="marked">April
                            29–30, 2022</span><br />Anantapuramu</h1>
                </div>
                <div class="show-item-onload
                                                margin-paragraph_4x">
                    <h5 class="display-3">CSE Department, JNTUACEA , Sir Mokshagundam Vishveshwariah Road, <br> Andhra Pradesh 515002
                        <br />
                    </h5>
                </div>
            </div>

        </div>
    </div>
    <!-- footer -->
        @include('layouts.footer')
    <!-- footer end-->
</div>

<!-- <div style="-webkit-transform:translate3d(0, 150%,
                            0)
                            scale3d(1, 1, 1) rotateX(0) rotateY(0)
                            rotateZ(0)
                            skew(0, 0);-moz-transform:translate3d(0, 150%,
                            0)
                            scale3d(1, 1, 1) rotateX(0) rotateY(0)
                            rotateZ(0)
                            skew(0, 0);-ms-transform:translate3d(0, 150%, 0)
                            scale3d(1, 1, 1) rotateX(0) rotateY(0)
                            rotateZ(0)
                            skew(0, 0);transform:translate3d(0, 150%, 0)
                            scale3d(1,
                            1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0,
                            0)" class="announcement-bar-wrapper">
    <div class="announcement-bar">
        <div class="centered-horiz margin-right"><span class="badge-small">HEYY!!</span> we're glad that you're checking out pixel, share us with the world, let's have fun together!.</div>
        <a data-w-id="cffe87ca-212b-0eea-a486-fc1f5b5dd7cf" href="#" class="btn closebtn close-btn w-inline-block"><img src="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/5d7a5d7526acc66065eecb26_btn_close.svg" alt="" class="btn-label" />
            <div class="btn-hover purple"></div>
        </a>
    </div>
    <a data-w-id="cffe87ca-212b-0eea-a486-fc1f5b5dd7cf" href="#" class="btn close-btn
                                    w-inline-block"><img src="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/5d7a5d7526acc66065eecb26_btn_close.svg" alt="" class="btn-label" />
        <div class="btn-hover purple"></div>
    </a>
</div>
</div>
<div style="-webkit-transform:translate3d(140%, 0,
                            0)
                            scale3d(1, 1, 1) rotateX(0) rotateY(0)
                            rotateZ(0)
                            skew(10DEG, 0);-moz-transform:translate3d(140%,
                            0, 0)
                            scale3d(1, 1, 1) rotateX(0) rotateY(0)
                            rotateZ(0)
                            skew(10DEG, 0);-ms-transform:translate3d(140%,
                            0, 0)
                            scale3d(1, 1, 1) rotateX(0) rotateY(0)
                            rotateZ(0)
                            skew(10DEG, 0);transform:translate3d(140%, 0, 0)
                            scale3d(1, 1, 1) rotateX(0) rotateY(0)
                            rotateZ(0)
                            skew(10DEG, 0);display:none" class="details details1">
    <a data-w-id="57b6f287-f8d1-4b12-4aea-8dba3eaaf15e" href="#" class="btn close w-inline-block">
        <div class="btn-label">Close</div>
        <div class="btn-hover purple"></div>
    </a>
    <div class="section scroll">
        <h2 class="display-2 small
                                    margin-paragraph"> Registration1
        </h2>

        <p class="introduction small
                                    margin-paragraph_2x">All you need to know before joining us for this event.
        </p>
        <div class="uppercase font-yellow">What’s included?
        </div>
        <div class="margin-paragraph">Your ticket gives access to the hands-on workshops and intimate nightly discussions. Dinner and drinks will be included each night.</div>
        <div class="uppercase font-yellow">What’s included?
        </div>
        <div class="margin-paragraph">Your ticket gives access to the hands-on workshops and intimate nightly discussions. Dinner and drinks will be included each night.</div>
        <div class="uppercase font-yellow">FAQ</div>
        <div class="margin-paragraph">Your ticket gives access to the hands-on workshops and intimate nightly discussions. Dinner and drinks will be included each night.</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo
            cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo
            cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
    </div>
</div> -->
    <!-- FAQ's Page -->

        @include('layouts.faqs')

    <!-- FAQ's Page end -->
    <!-- Registration  Page -->
        @include('layouts.registration')
    <!-- Registration Page end -->
    <script src="{{asset('js/jquery-3.5.1.min.js')}}?site=5d70f6f0c8ca5de04b4392d5" type="text/javascript" crossorigin="anonymous"></script>
    <script src="{{asset('js/main-script.js')}}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/tsparticles@1.37.4/tsparticles.min.js'></script>
    <script src="{{asset('js/particleJs/app.js')}}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>--}}
{{--<script>--}}
{{--    TweenMax.set(".play-circle-01", {--}}
{{--        rotation: 90,--}}
{{--        transformOrigin: "center"--}}
{{--    })--}}

{{--    TweenMax.set(".play-circle-02", {--}}
{{--        rotation: -90,--}}
{{--        transformOrigin: "center"--}}
{{--    })--}}

{{--    TweenMax.set(".play-perspective", {--}}
{{--        xPercent: 6.5,--}}
{{--        scale: .175,--}}
{{--        transformOrigin: "center",--}}
{{--        perspective: 1--}}
{{--    })--}}

{{--    TweenMax.set(".play-video", {--}}
{{--        visibility: "hidden",--}}
{{--        opacity: 0,--}}
{{--    })--}}

{{--    TweenMax.set(".play-triangle", {--}}
{{--        transformOrigin: "left center",--}}
{{--        transformStyle: "preserve-3d",--}}
{{--        rotationY: 10,--}}
{{--        scaleX: 2--}}
{{--    })--}}

{{--    const rotateTL = new TimelineMax({ paused: true })--}}
{{--        .to(".play-circle-01", .7, {--}}
{{--            opacity: .1,--}}
{{--            rotation: '+=360',--}}
{{--            strokeDasharray: "456 456",--}}
{{--            ease: Power1.easeInOut--}}
{{--        }, 0)--}}
{{--        .to(".play-circle-02", .7, {--}}
{{--            opacity: .1,--}}
{{--            rotation: '-=360',--}}
{{--            strokeDasharray: "411 411",--}}
{{--            ease: Power1.easeInOut--}}
{{--        }, 0)--}}

{{--    const openTL = new TimelineMax({ paused: true })--}}
{{--        .to(".play-backdrop", 1, {--}}
{{--            opacity: .95,--}}
{{--            visibility: "visible",--}}
{{--            ease: Power2.easeInOut--}}
{{--        }, 0)--}}
{{--        .to(".play-close", 1, {--}}
{{--            opacity: 1,--}}
{{--            ease: Power2.easeInOut--}}
{{--        }, 0)--}}
{{--        .to(".play-perspective", 1, {--}}
{{--            xPercent: 0,--}}
{{--            scale: 1,--}}
{{--            ease: Power2.easeInOut--}}
{{--        }, 0)--}}
{{--        .to(".play-triangle", 1, {--}}
{{--            scaleX: 1,--}}
{{--            ease: ExpoScaleEase.config(2, 1, Power2.easeInOut)--}}
{{--        }, 0)--}}
{{--        .to(".play-triangle", 1, {--}}
{{--            rotationY: 0,--}}
{{--            ease: ExpoScaleEase.config(10, .01, Power2.easeInOut)--}}
{{--        }, 0)--}}
{{--        .to(".play-video", 1, {--}}
{{--            visibility: "visible",--}}
{{--            opacity: 1--}}
{{--        }, .5)--}}


{{--    const button = document.querySelector(".play-button")--}}
{{--    const backdrop = document.querySelector(".play-backdrop")--}}
{{--    const close = document.querySelector(".play-close")--}}

{{--    button.addEventListener("mouseover", () => rotateTL.play())--}}
{{--    button.addEventListener("mouseleave", () => rotateTL.reverse())--}}
{{--    button.addEventListener("click", () => openTL.play())--}}
{{--    backdrop.addEventListener("click", () => openTL.reverse())--}}
{{--    close.addEventListener("click", e => {--}}
{{--        e.stopPropagation()--}}
{{--        openTL.reverse()--}}
{{--    })--}}
{{--</script>--}}
</body>

</html>

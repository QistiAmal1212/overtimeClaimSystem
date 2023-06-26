<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        body,
        html {
            height: 100%;
        }

        .nav .open>a,
        .nav .open>a:hover,
        .nav .open>a:focus {
            background-color: transparent;
        }

        /*-------------------------------*/
        /*           Wrappers            */
        /*-------------------------------*/

        #wrapper {
            padding-left: 0;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;

        }

        #wrapper.toggled {
            padding-left: 220px;
        }

        #sidebar-wrapper {
            z-index: 1000;
            left: 220px;
            width: 0;
            height: 100%;
            margin-left: -220px;
            overflow-y: auto;
            overflow-x: hidden;
            background: #1a1a1a;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        #sidebar-wrapper::-webkit-scrollbar {
            display: none;
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 250px;
        }



        #wrapper.toggled #page-content-wrapper {
            position: absolute;
            margin-right: -220px;
        }

        /*-------------------------------*/
        /*     Sidebar nav styles        */
        /*-------------------------------*/
        .navbar {
            padding: 0;
        }

        .sidebar-nav {
            position: absolute;
            top: 0;
            width: 220px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .sidebar-nav li {
            position: relative;
            line-height: 20px;
            display: inline-block;
            width: 100%;
        }

        .sidebar-nav li:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            height: 100%;
            width: 3px;
            background-color: #1c1c1c;
            -webkit-transition: width .2s ease-in;
            -moz-transition: width .2s ease-in;
            -ms-transition: width .2s ease-in;
            transition: width .2s ease-in;

        }

        .sidebar-nav li:first-child a {
            color: #fff;
            background-color: #1a1a1a;
        }

        .sidebar-nav li:nth-child(5n+1):before {
            background-color: #ec1b5a;
        }

        .sidebar-nav li:nth-child(5n+2):before {
            background-color: #79aefe;
        }

        .sidebar-nav li:nth-child(5n+3):before {
            background-color: #314190;
        }

        .sidebar-nav li:nth-child(5n+4):before {
            background-color: #279636;
        }

        .sidebar-nav li:nth-child(5n+5):before {
            background-color: #7d5d81;
        }

        .sidebar-nav li:hover:before,
        .sidebar-nav li.open:hover:before {
            width: 100%;
            -webkit-transition: width .2s ease-in;
            -moz-transition: width .2s ease-in;
            -ms-transition: width .2s ease-in;
            transition: width .2s ease-in;

        }

        .sidebar-nav li a {
            display: block;
            color: #ddd;
            text-decoration: none;
            padding: 15px 15px 15px 30px
        }

        .sidebar-nav li a:hover,
        .sidebar-nav li a:active,
        .sidebar-nav li a:focus,
        .sidebar-nav li.open a:hover,
        .sidebar-nav li.open a:active,
        .sidebar-nav li.open a:focus {
            color: #fff;
            text-decoration: none;
            background-color: transparent;
        }

        .sidebar-header {
            text-align: center;
            font-size: 20px;
            position: relative;
            width: 100%;
            display: inline-block;
            margin-bottom: 50px;
        }

        .sidebar-brand {
            height: 65px;
            position: relative;
            background: #212531;
            background: linear-gradient(to right bottom, #2f3441 50%, #212531 50%);
            padding-top: 1em;
        }

        .sidebar-brand a {
            color: #ddd;
        }

        .sidebar-brand a:hover {
            color: #fff;
            text-decoration: none;
        }

        .dropdown-header {
            text-align: center;
            font-size: 1em;
            color: whitesmoke;
            background: #212531;
            background: linear-gradient(to right bottom, #2f3441 50%, #212531 50%);
        }

        .sidebar-nav .dropdown-menu {
            position: relative;
            width: 100%;
            padding: 0;
            margin: 0;
            border-radius: 0;
            border: none;
            background-color: #222;
            box-shadow: none;
        }

        .dropdown-menu.show {
            top: 0;
        }

        /*Fontawesome icons*/
        .nav.sidebar-nav li a::before {
            font-family: fontawesome;
            content: "\f12e";
            vertical-align: baseline;
            display: inline-block;
            padding-right: 5px;
        }

        a[href*="#home"]::before {
            content: "\f015" !important;
        }

        a[href*="#about"]::before {
            content: "\f129" !important;
        }

        a[href*="#events"]::before {
            content: "\f073" !important;
        }

        a[href*="#events"]::before {
            content: "\f073" !important;
        }

        a[href*="#team"]::before {
            content: "\f0c0" !important;
        }

        a[href*="#works"]::before {
            content: "\f0b1" !important;
        }

        a[href*="#pictures"]::before {
            content: "\f03e" !important;
        }

        a[href*="#videos"]::before {
            content: "\f03d" !important;
        }

        a[href*="#books"]::before {
            content: "\f02d" !important;
        }

        a[href*="#art"]::before {
            content: "\f1fc" !important;
        }

        a[href*="#awards"]::before {
            content: "\f02e" !important;
        }

        a[href*="#services"]::before {
            content: "\f013" !important;
        }

        a[href*="#contact"]::before {
            content: "\f086" !important;
        }

        a[href*="#followme"]::before {
            content: "\f099" !important;
            color: #0084b4;
        }

        /*-------------------------------*/
        /*       Hamburger-Cross         */
        /*-------------------------------*/

        .hamburger {
            position: fixed;
            top: 20px;
            z-index: 999;
            display: block;
            width: 32px;
            height: 32px;
            margin-left: 15px;
            background: transparent;
            border: none;
        }



        .hamburger:hover,
        .hamburger:focus,
        .hamburger:active {
            outline: none;

        }

        .hamburger.is-closed:before {
            content: '';
            display: block;
            width: 100px;
            font-size: 14px;
            color: black;
            line-height: 32px;
            text-align: center;
            opacity: 0;
            -webkit-transform: translate3d(0, 0, 0);
            -webkit-transition: all .35s ease-in-out;
            margin-left: 240px;
        }

        .hamburger.is-closed:hover:before {
            opacity: 1;
            display: block;
            -webkit-transform: translate3d(-100px, 0, 0);
            -webkit-transition: all .35s ease-in-out;
        }

        .hamburger.is-closed .hamb-top,
        .hamburger.is-closed .hamb-middle,
        .hamburger.is-closed .hamb-bottom,
        .hamburger.is-open .hamb-top,
        .hamburger.is-open .hamb-middle,
        .hamburger.is-open .hamb-bottom {
            position: absolute;
            left: 0;
            height: 4px;
            width: 100%;
        }

        .hamburger.is-closed .hamb-top,
        .hamburger.is-closed .hamb-middle,
        .hamburger.is-closed .hamb-bottom {
            background-color: black;

        }

        .hamburger.is-closed .hamb-top {
            top: 5px;
            -webkit-transition: all .35s ease-in-out;
        }

        .hamburger.is-closed .hamb-middle {
            top: 50%;
            margin-top: -2px;
        }

        .hamburger.is-closed .hamb-bottom {
            bottom: 5px;
            -webkit-transition: all .35s ease-in-out;
        }

        .hamburger.is-closed:hover .hamb-top {
            top: 0;
            -webkit-transition: all .35s ease-in-out;
        }

        .hamburger.is-closed:hover .hamb-bottom {
            bottom: 0;
            -webkit-transition: all .35s ease-in-out;
        }

        .hamburger.is-open .hamb-top,
        .hamburger.is-open .hamb-middle,
        .hamburger.is-open .hamb-bottom {
            background-color: black;
        }

        .hamburger.is-open .hamb-top,
        .hamburger.is-open .hamb-bottom {
            top: 50%;
            margin-top: -2px;
            margin-left: 20px;
        }

        .hamburger.is-open .hamb-top {
            -webkit-transform: rotate(45deg);
            -webkit-transition: -webkit-transform .2s cubic-bezier(.73, 1, .28, .08);
        }

        .hamburger.is-open .hamb-middle {
            display: none;
        }

        .hamburger.is-open .hamb-bottom {
            -webkit-transform: rotate(-45deg);
            -webkit-transition: -webkit-transform .2s cubic-bezier(.73, 1, .28, .08);
        }

        .hamburger.is-open:before {
            content: '';
            display: block;
            width: 100px;
            font-size: 14px;
            color: black;
            line-height: 32px;
            text-align: center;
            opacity: 0;
            -webkit-transform: translate3d(0, 0, 0);
            -webkit-transition: all .35s ease-in-out;
        }

        .hamburger.is-open:hover:before {
            opacity: 1;
            display: block;
            -webkit-transform: translate3d(-100px, 0, 0);
            -webkit-transition: all .35s ease-in-out;
        }

        /*-------------------------------*/
        /*            Overlay            */
        /*-------------------------------*/

        .overlay {
            position: fixed;
            display: none;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(250, 250, 250, .8);
            z-index: 1;
        }

    </style>
</head>


<div id="wrapper">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <div class="sidebar-header">

                <a href="#"> <img style="width:300px;height:80px;float:left;margin-left:20px;" src="{{ asset('image/muip.png') }}" /></a></div>

            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('dashboard') }}">Claim info</a></li>
            {{-- <li><a href="{{ url('addNewClaim') }}">Add Claim</a></li> --}}
            <li><a href="{{ url('paymentStatus') }}">Payment Status</a></li>
            {{-- <li><a href="{{ url('report') }}">Report</a></li> --}}
            <li><a href="{{ url('contactUs') }}">Contact Us</a></li>
            <li><a href="{{ url('botAssistant') }}">Bot assistant</a></li>
            <li><a href="{{ url('profile') }}">Profile</a></li>

        </ul>
    </nav>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>

    </div>
    <!-- /#wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var trigger = $('.hamburger')
                , overlay = $('.overlay')
                , isClosed = false;

            trigger.click(function() {
                hamburger_cross();
            });

            function hamburger_cross() {

                if (isClosed == true) {
                    overlay.hide();
                    trigger.removeClass('is-open');
                    trigger.addClass('is-closed');
                    isClosed = false;
                } else {
                    overlay.show();
                    trigger.removeClass('is-closed');
                    trigger.addClass('is-open');
                    isClosed = true;
                }
            }

            $('[data-toggle="offcanvas"]').click(function() {
                $('#wrapper').toggleClass('toggled');
            });
        });

    </script>

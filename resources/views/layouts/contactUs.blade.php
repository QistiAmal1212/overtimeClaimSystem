<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto');

    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-size: cover;
        height: auto;
        font-family: 'Roboto';
    }

    .containerc {
        max-width: 600px;
        height: auto;
        background: #fff;
        margin: 100px auto;
        box-shadow: 0 0 20px rgba(72, 98, 85, 0.6);
        box-sizing: border-box;
        padding: 40px 30px 15px 30px;
        position: relative;
        z-index: 20000;
    }

    p {
        text-align: center;
        letter-spacing: 1px;
        font-size: 45px;
        margin-bottom: 20px;
        color: #486255;
        z-index: 20000;
    }

    .input,
    .msg .area {
        width: 100%;
        padding: 20px;
        box-sizing: border-box;
        margin-bottom: 25px;
        border: 2px solid #e9eaea;
        font-size: 14px;
        border-radius: 5px;
        outline: none;
        transform: all 0.5s ease;
        z-index: 20000;
    }

    .login .input {
        width: 48%;
        float: left;
        margin-right: 4%;
        z-index: 20000;
    }

    .login .input:last-child {
        margin-right: 0;
        z-index: 20000;
    }

    .msg .area {
        height: 200px;
        z-index: 20000;
    }

    .btnc {
        width: 250px;
        background: #486255;
        height: 50px;
        line-height: 50px;
        text-align: center;
        border-radius: 5px;
        margin: 0 auto;
        color: #fff;
        text-transform: uppercase;
        cursor: pointer;
        z-index: 20000;
    }

    .input:focus,
    .msg .area:focus {
        border: 2px solid #486255;
        z-index: 20000;
    }

    ::-webkit-input-placeholder {
        font-family: 'roboto';
        z-index: 20000;
    }

    .phg {
        float: left;
        width: 20%;
        height: 20%;
        margin: 50px 50px;
        z-index: 20000;
    }


    @keyframes move_wave {
        0% {
            transform: translateX(0) translateZ(0) scaleY(1)
        }

        50% {
            transform: translateX(-25%) translateZ(0) scaleY(0.55)
        }

        100% {
            transform: translateX(-50%) translateZ(0) scaleY(1)
        }
    }

    .waveWrapper {
        overflow: hidden;
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        margin: auto;
    }

    .waveWrapperInner {
        position: absolute;
        width: 100%;
        overflow: hidden;
        height: 100%;
        bottom: -1px;
        background-image: linear-gradient(to top, #86377b 20%, #27273c 80%);
    }

    .bgTop {
        z-index: 15;
        opacity: 0.5;
    }

    .bgMiddle {
        z-index: 10;
        opacity: 0.75;
    }

    .bgBottom {
        z-index: 5;
    }

    .wave {
        position: absolute;
        left: 0;
        width: 200%;
        height: 100%;
        background-repeat: repeat no-repeat;
        background-position: 0 bottom;
        transform-origin: center bottom;
    }

    .waveTop {
        background-size: 50% 100px;
    }

    .waveAnimation .waveTop {
        animation: move-wave 3s;
        -webkit-animation: move-wave 3s;
        -webkit-animation-delay: 1s;
        animation-delay: 1s;
    }

    .waveMiddle {
        background-size: 50% 120px;
    }

    .waveAnimation .waveMiddle {
        animation: move_wave 10s linear infinite;
    }

    .waveBottom {
        background-size: 50% 100px;
    }

    .waveAnimation .waveBottom {
        animation: move_wave 15s linear infinite;
    }

    .navv {
        display: none;
    }

</style>

<x-app-layout>
    <br><br><br> <br><br><br>

    <div class="waveWrapper waveAnimation">
        <div class="waveWrapperInner bgTop">
            <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
        </div>
        <div class="waveWrapperInner bgMiddle">
            <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
        </div>
        <div class="waveWrapperInner bgBottom">
            <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
        </div>
        <br>
        <center>
            <div class="containerc">
                <p>CONTACT US</p>

                <div class="login">
                    <input type="text" placeholder="Your Name" class="input">
                    <input type="text" placeholder="Your Email Address" class="input">
                </div>

                <div class="subject">
                    <input type="text" placeholder="Subject" class="input">
                </div>

                <div class="msg">
                    <textarea class="area" placeholder="Leave a Message"></textarea>
                </div>

                <div class="btnc">Send Message</div>
            </div>
        </center>
    </div>

    @include('layouts.sidebar')

    <script>
        $(".btn").click(function() {
            $(".input, .area").val("");
        });

    </script>
</x-app-layout>
<style>
    .hamburger.is-closed .hamb-top,
    .hamburger.is-closed .hamb-middle,
    .hamburger.is-closed .hamb-bottom {
        background-color: white;

    }

    .hamburger.is-open .hamb-top,
    .hamburger.is-open .hamb-middle,
    .hamburger.is-open .hamb-bottom {
        background-color: white;
    }

</style>

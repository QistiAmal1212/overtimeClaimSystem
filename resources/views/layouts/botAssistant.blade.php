<head>
    <link href="https://fonts.googleapis.com/css2?family=Caladea&display=swap" rel="stylesheet">
</head>
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

<style>
    .content-wrapper {
        background: rgba(0, 0, 0, 0.2);
        z-index: 20000;

    }

    .container {
        margin-top: 50px;
        display: flex;
        justify-content: center;
        height: auto;
        z-index: 20000;
    }

    .card {
        background-color: #e5e5e5;
        padding: 20px 50px 20px 50px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        max-width: 800px;
        margin: 0 auto;
        position: relative;
        overflow: hidden;
        opacity: 0;
        animation: fade-in 0.5s ease-in-out forwards;
        z-index: 20000;
    }

    .card:before {
        content: '';
        position: absolute;
        top: -10px;
        left: -10px;
        right: -10px;
        bottom: -10px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        pointer-events: none;
        z-index: 20000;
    }

    @keyframes fade-in {
        0% {
            opacity: 0;
            transform: translateY(-20px);
            z-index: 20000;
        }

        100% {
            opacity: 1;
            transform: translateY(0);
            z-index: 20000;
        }
    }

    .input-field {
        padding: 10px;
        width: 100%;
        margin-bottom: 20px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        z-index: 20000;
    }

    .button {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        font-size: 16px;
        border-radius: 4px;
        transition: background-color 0.3s ease;
        z-index: 20000;
    }

    .button:hover {
        background-color: #45a049;
        z-index: 20000;
    }

    .output {
        margin-top: 20px;
        font-weight: bold;
        text-align: left;
        font-size: 18px;
        white-space: pre-line;
        z-index: 20000;
    }

    #typed-text {
        font-family: "Caladea", sans-serif;

        font-size: 23px;
    }

</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>

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
            <div class="container">

                <div class="card">

                    <center> <img class="image" style="height:200px;width:250px;" src="{{ asset('image/bot.png') }}" alt="Image"></center>

                    <h2 id="typed-text"></h2>

                    <textarea id="inputField" class="input-field" placeholder="Enter your question" style="font-size: 18px;"></textarea>

                    <button onclick="generateWord()" class="button">Ask</button>

                    <div id="output" class="output"></div>
                </div>
            </div>

            <script>
                var typed = new Typed('#typed-text', {
                    strings: ['Hi, my name is QistiBot. How can I assist you?']
                    , typeSpeed: 50
                    , showCursor: false
                , });

                function generateWord() {
                    var input = document.getElementById("inputField").value.toLowerCase();
                    var generatedSteps = "";









                    generatedSteps = "Sorry, I did not available yet for this services.";










                    //kekal di ujung
                    document.getElementById("output").innerText = generatedSteps;

                    if ('speechSynthesis' in window) {
                        const speech = new SpeechSynthesisUtterance(generatedSteps);
                        window.speechSynthesis.speak(speech);
                    }
                }

            </script>
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

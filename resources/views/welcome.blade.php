<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">




    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        .btn {

            height: 40px;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: none;
            position: relative;
            top: -5px;
            background-color: transparent;
            transition: .2s cubic-bezier(0.19, 1, 0.22, 1);
            opacity: 0.6;
        }

        .btn::after {
            content: '';
            border-bottom: 3px double rgb(214, 207, 113);
            width: 0;
            height: 100%;
            position: absolute;
            margin-top: -5px;
            top: 0;
            left: 5px;
            visibility: hidden;
            opacity: 1;
            transition: .2s linear;
        }

        .btn .icon {
            transform: translateX(0%);
            transition: .2s linear;
            animation: attention 1.2s linear infinite;
        }

        .btn:hover::after {
            visibility: visible;
            opacity: 0.7;
            width: 90%;
        }

        .btn:hover {
            letter-spacing: 2px;
            opacity: 1;
        }

        .btn:hover>.icon {
            transform: translateX(30%);
            animation: none;
        }

        @keyframes attention {
            0% {
                transform: translateX(0%);
            }

            50% {
                transform: translateX(30%);
            }
        }

        .card-custom {

            width: calc(100% - 20px);
            margin-left: 10px;
            margin-right: 10px;

            min-height: 200px;


            margin-bottom: 30px;

        }

        .cardrow {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .atas {
            background-color: #f2f3f7;
        }

        .about-element {
            font-family: 'Roboto', sans-serif;
            /* Replace 'Roboto' with your desired Google font */
            font-size: 16px;
            line-height: 1;
            color: #333;
            padding: 3px;
            text-align: justify;

        }

        .counter {
            display: grid;
            display: none;

        }





        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .imglogo2 {
                position: relative;
                top: -800px;
                right: -100px;
                width: 1300px;
                height: 250px;
                float: left;
            }

            .sm\:fixed {
                position: relative;
                height: 70px;
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {}

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }



            .card-custom {
                width: 320px;
                height: 250px;
                margin-top: 50px;
                margin-right: 0px;
                margin-left: 13px;
            }

            /* Apply blur effect to the carousel */
            .carousel-item {
                filter: blur(5px);
                height: 800px;
            }

            /* Remove blur effect on active carousel item */
            .carousel-item.active {
                filter: none;
            }

            .atas {
                background-color: #f2f3f7;
            }

            .counter {
                display: block;
            }

            .card {
                border: none;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                transition: box-shadow 0.3s ease-in-out;
                background-color: #fff;
                border-radius: 8px;
                overflow: hidden;
            }

            .card:hover {
                box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
            }

            .card-body {
                padding: 1.5rem;
                text-align: center;
            }

            .blockquote {
                font-size: 1.4rem;
                line-height: 1.5;
                font-family: 'Caveat', cursive;
                margin-bottom: 1.5rem;
                color: #333;
            }

            .blockquote-footer {
                font-weight: bold;
                font-style: italic;
                color: #888;
                margin-top: 1rem;
            }

            .about-element {
                font-family: 'Roboto', sans-serif;
                /* Replace 'Roboto' with your desired Google font */
                font-size: 20px;
                line-height: 1.5;
                color: #333;
                padding: 20px;
                text-align: justify;

            }

            .arrow-down {
                position: relative;
                margin-top: 20px;
                width: 30px;
                height: 30px;
            }

            .arrow-down::before {
                content: "";
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%) rotate(45deg);
                width: 20px;
                height: 20px;
                border-bottom: 2px solid black;
                border-right: 2px solid black;



            }

            .total {
                font-size: 65px;
                font-family: 'Roboto', sans-serif;

                font-weight: bold;
                color: #333;
                display: flex;
                align-items: center;
                margin-right: 30px;
            }


            .totals {
                font-size: 55px;
                font-family: 'Roboto', sans-serif;

                font-weight: bold;
                color: #333;
                margin-left: 20px;
                display: flex;
                align-items: center;
            }

            .image1 {
                height: 160px;
                margin-left: 0px;
                position: relative;
                bottom: -20px;
            }


            .image2 {
                height: 200px;
                margin-left: 50px;
            }

            .anime {
                display: none;
            }

            .ani-img {
                height: 300px;
                width: 800px;
            }

        }

        .slideshow .slide {
            display: none;
        }

        .slideshow .slide:first-child {
            display: block;
        }



        .tech {
            font-family: 'Kalam', cursive;

            font-size: 35px;
            font-weight: bold;
            margin-bottom: 10px;
        }

    </style>

</head>
<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white atas" style="    background-color: #f2f3f7;">
        @if (Route::has('login'))
        <img style="width:280px;height:70px;float:left;margin-left:20px;" src="{{ asset('image/muip.png') }}" />
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><button class="btn">
                    Login >

                </button></a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><button class="btn">
                    Register >

                </button></a>
            @endif
            @endauth
        </div>


        @endif

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="#carouselExampleControls" data-bs-slide="next">
                        <img class="d-block w-100" src="{{asset('image/c3.png')}}" alt="...">
                    </a>

                </div>
                <div class="carousel-item">
                    <a href="#carouselExampleControls" data-bs-slide="next">
                        <img class="d-block w-100" src="{{asset('image/c4.png')}}" alt="...">
                    </a>
                </div>
            </div>
        </div>

        <div style="width:100%; background-image: url('{{asset('image/about.jpg')}}'); background-repeat: no-repeat; background-size: cover;"><br><br><br>
            <div class="about-element flex justify-center">ABOUT SYSTEM</div>
            <div class="flex justify-center">

                <div class="about-element" style="width:70%;">Our Overtime Claim System simplifies and improves the process of managing overtime claims. It eliminates incomplete fields, writing errors, and calculation mistakes. Our system automates the validation of information, ensuring all required fields are filled correctly.

                    Calculating overtime claims is effortless. The system considers factors like working days, rest days, and public holidays to determine the correct calculation method. Each employee's overtime rate is accurately calculated based on their basic salary. Enjoy a streamlined and user-friendly experience with our Overtime Claim System. Say goodbye to complexities and welcome a simplified approach to managing and processing overtime claims.</div>
            </div>
            <br><br><br>
        </div>

        <div class="row cardrow" data-aos="fade-right" data-aos-offset="180" data-aos-easing="ease-in-sine">
            <div class="col-md-3">
                <!-- Bootstrap Card 1 -->
                <div class="card card-custom card1">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p class="mb-0">"No matter how hard you work, you will not be successful without the help of Allah. Help yourself by asking for the help of Allah"</p><br><br>
                            <footer class="blockquote-footer">Sh Salman</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <!-- Bootstrap Card 2 -->
                <div class="card card-custom">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p class="mb-0">"The path to success is paved with hard work, determination, and reliance on Allah."</p><br><br><br>
                            <footer class="blockquote-footer">Imam Ali</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <!-- Bootstrap Card 3 -->
                <div class="card card-custom">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p class="mb-0">"Strive hard in your work, for surely, hard work is the key to success."</p><br><br><br><br>
                            <footer class="blockquote-footer">Prophet Muhammad (pbuh)</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <!-- Bootstrap Card 4 -->
                <div class="card card-custom">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p class="mb-0">"Hard work, coupled with trust in Allah, is a recipe for success in this life and the hereafter."</p><br><br><br>
                            <footer class="blockquote-footer">Umar ibn Al-Khattab</footer>
                        </blockquote>
                    </div>
                </div>
            </div>

        </div>


        <center>
            <div class="arrow-down"></div>
        </center>



        <div style="display:none;" class="row cardrow anime" data-aos="fade-left" data-aos-offset="180" data-aos-easing="ease-in-sine">
            <div class="col-md-3">
                <!-- Bootstrap Card 3 -->
                <div class="card card-custom">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p class="mb-0">"The road to success comes through hard work, determination, and sacrifice."</p><br><br><br><br>
                            <footer class="blockquote-footer">Dolzinski</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <!-- Bootstrap Card 1 -->
                <div class="card card-custom card1">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p class="mb-0">"Life is not a game of luck. If you wanna win, work hard"</p><br><br><br><br><br>
                            <footer class="blockquote-footer">Admin</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <!-- Bootstrap Card 2 -->
                <div class="card card-custom">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p class="mb-0">"Hardwork betrays none but, but dreams betray many"</p><br><br><br><br><br>
                            <footer class="blockquote-footer">Admin</footer>
                        </blockquote>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <!-- Bootstrap Card 4 -->
                <div class="card card-custom">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p class="mb-0">"Hard work beats talent when talent doesn't work hard."</p><br><br><br><br><br>
                            <footer class="blockquote-footer">Tim Notke</footer>
                        </blockquote>
                    </div>
                </div>
            </div>

        </div>



        <br>
        <br>
        <div class="tech flex justify-center">Technology being use:</div>
        <div style="width:100%; background-image: url('{{asset('image/code5.jpg')}}'); background-repeat: no-repeat; background-size: cover;background-attachment: fixed; "><br>



            <div id="slideshow" class="slideshow">
                <center>
                    <img class="slide2" style="width:170px;height:170px;margin-top:15px;margin-bottom:15px;" src="{{ asset('image/slide.jpg') }}" alt="Slide 1">
                    <img class="slide2" style="width:200px;height:190px;margin-top:5px;margin-bottom:5px;" src="{{ asset('image/slide1.png') }}" alt="Slide 1">
                    <img class="slide2" style="width:200px;height:200px" src="{{ asset('image/slide2.png') }}" alt="Slide 1">
                    <img class="slide2" style="width:230px;height:120px;margin-top:40px;margin-bottom:40px;" src="{{ asset('image/slide3.png') }}" alt="Slide 1">
                    <img class="slide2" style="width:360px;height:190px;margin-top:5px;margin-bottom:5px;" src="{{ asset('image/slide4.png') }}" alt="Slide 1">
                    <img class="slide2" style="width:360px;height:190px;margin-top:5px;margin-bottom:5px;" src="{{ asset('image/slide5.png') }}" alt="Slide 1">
                    <img class="slide2" style="width:270px;height:160px;margin-top:20px;margin-bottom:20px;" src="{{ asset('image/slide10.png') }}" alt="Slide 1">
                    <img class="slide2" style="width:270px;height:160px;margin-top:20px;margin-bottom:20px;" src="{{ asset('image/slide11.jpg') }}" alt="Slide 1">
                    <img class="slide2" style="width:310px;height:160px;margin-top:20px;margin-bottom:20px;" src="{{ asset('image/slide12.png') }}" alt="Slide 1">
                    <img class="slide2" style="width:150px;height:150px;margin-top:25px;margin-bottom:25px;" src="{{ asset('image/slide6.png') }}" alt="Slide 1">
                    <img class="slide2" style="width:150px;height:150px;margin-top:25px;margin-bottom:25px;" src="{{ asset('image/slide7.png') }}" alt="Slide 1">
                    <img class="slide2" style="width:150px;height:150px;margin-top:25px;margin-bottom:25px;" src="{{ asset('image/slide8.png') }}" alt="Slide 1">
                    <img class="slide2" style="width:220px;height:120px;margin-top:40px;margin-bottom:40px;" src="{{ asset('image/slide9.png') }}" alt="Slide 1">

                </center>


            </div>

            <br>
        </div>
        <div class="counter" style="width:100%; "><br><br><br>
            {{-- <div class="total flex justify-center" style=" ">TOTAL</div> --}}
            <div class="flex justify-center">

                <div class="flex "><span style="" class="total">TOTAL:</span><img class="image1" src="{{asset('image/bwh2.png')}}" alt="...">
                    <span style="" id="rowCount" class="totals">1000</span> <img src="{{asset('image/bwh1.png')}}" alt="..." class="image2"><span style="" id="rowCount2" class="totals">1000</span>
                </div>

            </div>
            <br><br><br>
        </div>







        <br>
        <br>
        <br>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200
        , })
        AOS.init();
        window.addEventListener('scroll', function() {
            var element = document.getElementById('scrollAnimation');
            var position = element.getBoundingClientRect();
            var windowHeight = window.innerHeight;

            // Calculate the scroll position when the element is at half height
            var scrollPosition = position.top - (windowHeight / 2);

            // Checking if the scroll position is in the viewport
            if (scrollPosition < 0) {
                element.style.opacity = '1';
                element.setAttribute('data-aos', 'fade-up');
                element.classList.add('aos-animate');
            } else {
                element.style.opacity = '0';
                element.setAttribute('data-aos', '');
                element.classList.remove('aos-animate');
            }
        });





        // Initialize the carousel and set the interval to move automatically
        var carousel = document.querySelector('#carouselExampleControls');
        var bsCarousel = new bootstrap.Carousel(carousel, {
            interval: 5000, // Set the desired interval (in milliseconds)
            pause: false // Set to false to prevent pausing on hover
        });

    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        // Animation function to count from 0 to a target value
        function animateCount(element, targetValue) {
            $({
                count: 0
            }).animate({
                count: targetValue
            }, {
                duration: 5000, // Duration in milliseconds
                easing: 'linear'
                , step: function() {
                    element.text(Math.floor(this.count));
                }
                , complete: function() {
                    element.text(targetValue);
                }
            });
        }

        // Get the elements by their IDs
        const rowCount2Element = $('#rowCount2');
        const rowCountElement = $('#rowCount');

        // Set the target values
        const targetRowCount2 = parseInt(rowCount2Element.text());
        const targetRowCount = parseInt(rowCountElement.text());

        // Animate the counting for each element
        animateCount(rowCount2Element, targetRowCount2);
        animateCount(rowCountElement, targetRowCount);

        // Scroll event handler
        let isCounting = false; // Track if counting is already in progress

        $(window).scroll(function() {
            // Check if the count elements are visible in the viewport
            const windowHeight = $(window).height();
            const elementOffset1 = rowCountElement.offset().top;
            const elementOffset2 = rowCount2Element.offset().top;
            const scrollDistance = $(window).scrollTop();

            if (!isCounting && (scrollDistance + windowHeight >= elementOffset1 || scrollDistance + windowHeight >= elementOffset2)) {
                // Reset the counts and animate again
                if (scrollDistance + windowHeight >= elementOffset1) {
                    rowCountElement.text('0');
                    animateCount(rowCountElement, targetRowCount);
                }
                if (scrollDistance + windowHeight >= elementOffset2) {
                    rowCount2Element.text('0');
                    animateCount(rowCount2Element, targetRowCount2);
                }

                isCounting = true;
            }

            if (scrollDistance + windowHeight < elementOffset1 && scrollDistance + windowHeight < elementOffset2) {
                // Mark counting as stopped when the elements are scrolled out of view
                isCounting = false;
            }
        });

    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".arrow-down").click(function() {
                $(".arrow-down").fadeOut();
                $(".anime").fadeIn();
            });
        });

    </script>




    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var slides = document.getElementsByClassName("slide2");
            for (var i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3000); // Change slide every 2 seconds
        }

    </script>

    @include('layouts.footer')

    </div>

</body>
</html>

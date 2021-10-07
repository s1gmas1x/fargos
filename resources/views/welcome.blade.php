<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fargo's Pizza</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Norican&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }

    </style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="bg-yellow-50 min-h-screen montserrat text-gray-900">
    
    <header id="home" class="flex mx-auto border-b  border-gray-900 bg-opacity-90 bg-red-900">
        <div class="hidden lg:block">
            <svg class="h-64 w-96 text-red-900 absolute -top-10 left-5 flip-horizontally filter drop-shadow-lg" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 650.82 212" stroke="currentColor"><path class="a" d="M650.4,157.66a50.83,50.83,0,0,0-3-12.08,58.52,58.52,0,0,0-13.63-20.73A58.08,58.08,0,0,0,624,117a76.63,76.63,0,0,0-22.82-9.86,100.18,100.18,0,0,0-24.59-3,101.6,101.6,0,0,0-12.34.64l-6.13.67-6.07,1c-1,.18-2,.33-3,.54l-3,.68c-2,.48-4,.89-6,1.42-3.93,1.13-7.9,2.17-11.75,3.54a232.5,232.5,0,0,0-22.72,9L500,124.28c-1.84.87-3.64,1.79-5.46,2.68-.88.42-1.75.86-2.61,1.29-1.53-1.22-3.08-2.41-4.67-3.55a103.58,103.58,0,0,0-12.17-7.4,113.72,113.72,0,0,0-26.49-9.56,140.85,140.85,0,0,0-27.53-3.43,181.1,181.1,0,0,0-27.3,1.45,229.94,229.94,0,0,0-26.47,5c-8.65,2.11-17.12,4.56-25.43,7.21-16.66,5.25-32.64,11.22-48.48,16.37q-47.58,15.85-95.81,29.34c-8,2.36-16.12,4.41-24.2,6.57-4,1.14-8.11,2.06-12.17,3.1s-8.11,2.08-12.19,3c-8.15,1.93-16.3,3.91-24.5,5.7-4.1.9-8.19,1.86-12.3,2.72l-12.33,2.61c-32.94,7-66.26,12.44-100,18.18l.1,3.1c1.83.18,3.65.33,5.48.48l6.55,2c3.83,1.21,7.71,2.24,11.57,3.37s7.76,2.07,11.66,3.07l5.84,1.49L47,220.53q23.52,5.4,47.5,8.66a563.23,563.23,0,0,0,96.54,4.69,572.36,572.36,0,0,0,189-39.35c15-5.92,29.82-12.57,44.28-19.82,3.64-1.76,7.21-3.66,10.78-5.55l5.37-2.83c1.78-1,3.54-2,5.31-2.92q10.59-5.85,21-11.9,6-3.49,12.12-6.91c1.89,1.38,3.75,2.83,5.54,4.36a93.77,93.77,0,0,1,26.29,37.36A86.47,86.47,0,0,1,515.67,232a89.11,89.11,0,0,1-19.87,42.23,97.86,97.86,0,0,1-38.55,28.07c-15,5.94-31.71,7.9-47.56,4a69.61,69.61,0,0,1-11.58-3.77l-2.74-1.31-1.38-.66-1.32-.76L390,298.24l-2.49-1.73-1.25-.88-1.17-1-2.33-2-2.14-2.17-1.07-1.09-.95-1.18-1.9-2.39-1.65-2.57c-.27-.43-.56-.85-.82-1.29l-.68-1.37-1.37-2.75L369.32,279l1.26,3.05.64,1.53c.25.49.52,1,.78,1.45l1.6,2.91,1.89,2.73.95,1.36,1.08,1.26,2.17,2.53,2.39,2.3,1.21,1.16,1.29,1,2.6,2.08,2.75,1.86,1.39.93,1.44.82,2.9,1.63a75.79,75.79,0,0,0,12.31,5,82,82,0,0,0,13,2.83c2.21.2,4.42.54,6.65.58l3.34.13,3.35-.07a94.64,94.64,0,0,0,26.24-4.69,107.74,107.74,0,0,0,44.72-28.81,100.07,100.07,0,0,0,22.48-102.3A113.12,113.12,0,0,0,498.55,134c1.65-.84,3.29-1.7,4.95-2.51l5.36-2.57a231.6,231.6,0,0,1,21.87-9.06c3.69-1.41,7.46-2.48,11.22-3.65,1.88-.55,3.79-1,5.69-1.48l2.85-.72c1-.23,1.92-.38,2.88-.58l5.77-1.12,5.82-.76a95.29,95.29,0,0,1,11.67-.86,98.74,98.74,0,0,1,23.16,2.21,71.15,71.15,0,0,1,21.44,8.5,56.52,56.52,0,0,1,22.48,25.7,46.7,46.7,0,0,1,3.23,11.09,44.41,44.41,0,0,1,.57,5.76l0,2.9c0,1-.18,1.92-.25,2.88a37.51,37.51,0,0,1-3.12,11.12,42.93,42.93,0,0,1-6.4,9.76,40.38,40.38,0,0,1-9,7.59,32.82,32.82,0,0,1-22.78,5,33.52,33.52,0,0,0,23.47-3.8,41.24,41.24,0,0,0,9.7-7.45,44.81,44.81,0,0,0,7.23-10,38.74,38.74,0,0,0,3.87-11.81c.13-1,.33-2,.39-3.09l.16-3.12A49.85,49.85,0,0,0,650.4,157.66ZM462.56,144.1c-7,3.9-14,7.89-21,11.7-1.75.95-3.5,1.93-5.26,2.85L431,161.42c-3.53,1.84-7.05,3.7-10.64,5.41L415,169.46c-1.79.88-3.58,1.75-5.39,2.57l-10.86,5-11,4.71c-3.66,1.55-7.39,3-11.07,4.47q-22.2,8.79-45.08,15.77c-15.22,4.69-30.69,8.54-46.25,12s-31.26,6.23-47.05,8.38-31.69,3.64-47.61,4.58c-8,.51-15.94.73-23.92.92l-12,.08-12-.14q-23.94-.51-47.83-2.93c-15.92-1.51-31.76-3.87-47.52-6.72L41.62,217l-5.89-1.21c-3.92-.81-7.86-1.57-11.75-2.51s-7.84-1.72-11.73-2.71l-5-1.26,5.59.44,6.42.45c2.15.13,4.28.19,6.43.29,4.28.19,8.57.32,12.86.47s8.58.08,12.88.12c8.59.1,17.16-.24,25.76-.47,4.3-.13,8.59-.43,12.88-.66s8.6-.44,12.88-.85l12.86-1.09c4.29-.37,8.55-.93,12.84-1.39,8.57-.86,17.08-2.17,25.62-3.36,4.28-.56,8.51-1.38,12.77-2.07s8.51-1.38,12.74-2.23c8.46-1.66,16.93-3.3,25.35-5.21,16.86-3.69,33.53-8.24,50.05-13.27S288,169.59,304,163.18s31.54-13.33,47-19.25c7.72-3,15.41-5.75,23.16-8.05a203.42,203.42,0,0,1,23.32-5.58,155.06,155.06,0,0,1,23.46-2.23,117.71,117.71,0,0,1,23,1.89,91.73,91.73,0,0,1,21.62,6.78c1.8.85,3.59,1.76,5.34,2.74Q466.72,141.77,462.56,144.1Z" transform="translate(0.05 -125)"/></svg>
        </div>
        <div class="sm:ml-4 md:mx-auto rye text-3xl md:text-4xl p-4 flex flex-col  text-yellow-200 pt-2 text-center filter drop-shadow-lg uppercase">
            <h1 class="">Fargo's</h1>
            <h1>Pizza</h1>
            <h1>CO.</h1>
        </div>
 <div class="hidden lg:block">
            <svg class="h-64 w-96 text-red-900 absolute -top-10 right-5  filter drop-shadow-lg" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 650.82 212" stroke="currentColor"><path class="a" d="M650.4,157.66a50.83,50.83,0,0,0-3-12.08,58.52,58.52,0,0,0-13.63-20.73A58.08,58.08,0,0,0,624,117a76.63,76.63,0,0,0-22.82-9.86,100.18,100.18,0,0,0-24.59-3,101.6,101.6,0,0,0-12.34.64l-6.13.67-6.07,1c-1,.18-2,.33-3,.54l-3,.68c-2,.48-4,.89-6,1.42-3.93,1.13-7.9,2.17-11.75,3.54a232.5,232.5,0,0,0-22.72,9L500,124.28c-1.84.87-3.64,1.79-5.46,2.68-.88.42-1.75.86-2.61,1.29-1.53-1.22-3.08-2.41-4.67-3.55a103.58,103.58,0,0,0-12.17-7.4,113.72,113.72,0,0,0-26.49-9.56,140.85,140.85,0,0,0-27.53-3.43,181.1,181.1,0,0,0-27.3,1.45,229.94,229.94,0,0,0-26.47,5c-8.65,2.11-17.12,4.56-25.43,7.21-16.66,5.25-32.64,11.22-48.48,16.37q-47.58,15.85-95.81,29.34c-8,2.36-16.12,4.41-24.2,6.57-4,1.14-8.11,2.06-12.17,3.1s-8.11,2.08-12.19,3c-8.15,1.93-16.3,3.91-24.5,5.7-4.1.9-8.19,1.86-12.3,2.72l-12.33,2.61c-32.94,7-66.26,12.44-100,18.18l.1,3.1c1.83.18,3.65.33,5.48.48l6.55,2c3.83,1.21,7.71,2.24,11.57,3.37s7.76,2.07,11.66,3.07l5.84,1.49L47,220.53q23.52,5.4,47.5,8.66a563.23,563.23,0,0,0,96.54,4.69,572.36,572.36,0,0,0,189-39.35c15-5.92,29.82-12.57,44.28-19.82,3.64-1.76,7.21-3.66,10.78-5.55l5.37-2.83c1.78-1,3.54-2,5.31-2.92q10.59-5.85,21-11.9,6-3.49,12.12-6.91c1.89,1.38,3.75,2.83,5.54,4.36a93.77,93.77,0,0,1,26.29,37.36A86.47,86.47,0,0,1,515.67,232a89.11,89.11,0,0,1-19.87,42.23,97.86,97.86,0,0,1-38.55,28.07c-15,5.94-31.71,7.9-47.56,4a69.61,69.61,0,0,1-11.58-3.77l-2.74-1.31-1.38-.66-1.32-.76L390,298.24l-2.49-1.73-1.25-.88-1.17-1-2.33-2-2.14-2.17-1.07-1.09-.95-1.18-1.9-2.39-1.65-2.57c-.27-.43-.56-.85-.82-1.29l-.68-1.37-1.37-2.75L369.32,279l1.26,3.05.64,1.53c.25.49.52,1,.78,1.45l1.6,2.91,1.89,2.73.95,1.36,1.08,1.26,2.17,2.53,2.39,2.3,1.21,1.16,1.29,1,2.6,2.08,2.75,1.86,1.39.93,1.44.82,2.9,1.63a75.79,75.79,0,0,0,12.31,5,82,82,0,0,0,13,2.83c2.21.2,4.42.54,6.65.58l3.34.13,3.35-.07a94.64,94.64,0,0,0,26.24-4.69,107.74,107.74,0,0,0,44.72-28.81,100.07,100.07,0,0,0,22.48-102.3A113.12,113.12,0,0,0,498.55,134c1.65-.84,3.29-1.7,4.95-2.51l5.36-2.57a231.6,231.6,0,0,1,21.87-9.06c3.69-1.41,7.46-2.48,11.22-3.65,1.88-.55,3.79-1,5.69-1.48l2.85-.72c1-.23,1.92-.38,2.88-.58l5.77-1.12,5.82-.76a95.29,95.29,0,0,1,11.67-.86,98.74,98.74,0,0,1,23.16,2.21,71.15,71.15,0,0,1,21.44,8.5,56.52,56.52,0,0,1,22.48,25.7,46.7,46.7,0,0,1,3.23,11.09,44.41,44.41,0,0,1,.57,5.76l0,2.9c0,1-.18,1.92-.25,2.88a37.51,37.51,0,0,1-3.12,11.12,42.93,42.93,0,0,1-6.4,9.76,40.38,40.38,0,0,1-9,7.59,32.82,32.82,0,0,1-22.78,5,33.52,33.52,0,0,0,23.47-3.8,41.24,41.24,0,0,0,9.7-7.45,44.81,44.81,0,0,0,7.23-10,38.74,38.74,0,0,0,3.87-11.81c.13-1,.33-2,.39-3.09l.16-3.12A49.85,49.85,0,0,0,650.4,157.66ZM462.56,144.1c-7,3.9-14,7.89-21,11.7-1.75.95-3.5,1.93-5.26,2.85L431,161.42c-3.53,1.84-7.05,3.7-10.64,5.41L415,169.46c-1.79.88-3.58,1.75-5.39,2.57l-10.86,5-11,4.71c-3.66,1.55-7.39,3-11.07,4.47q-22.2,8.79-45.08,15.77c-15.22,4.69-30.69,8.54-46.25,12s-31.26,6.23-47.05,8.38-31.69,3.64-47.61,4.58c-8,.51-15.94.73-23.92.92l-12,.08-12-.14q-23.94-.51-47.83-2.93c-15.92-1.51-31.76-3.87-47.52-6.72L41.62,217l-5.89-1.21c-3.92-.81-7.86-1.57-11.75-2.51s-7.84-1.72-11.73-2.71l-5-1.26,5.59.44,6.42.45c2.15.13,4.28.19,6.43.29,4.28.19,8.57.32,12.86.47s8.58.08,12.88.12c8.59.1,17.16-.24,25.76-.47,4.3-.13,8.59-.43,12.88-.66s8.6-.44,12.88-.85l12.86-1.09c4.29-.37,8.55-.93,12.84-1.39,8.57-.86,17.08-2.17,25.62-3.36,4.28-.56,8.51-1.38,12.77-2.07s8.51-1.38,12.74-2.23c8.46-1.66,16.93-3.3,25.35-5.21,16.86-3.69,33.53-8.24,50.05-13.27S288,169.59,304,163.18s31.54-13.33,47-19.25c7.72-3,15.41-5.75,23.16-8.05a203.42,203.42,0,0,1,23.32-5.58,155.06,155.06,0,0,1,23.46-2.23,117.71,117.71,0,0,1,23,1.89,91.73,91.73,0,0,1,21.62,6.78c1.8.85,3.59,1.76,5.34,2.74Q466.72,141.77,462.56,144.1Z" transform="translate(0.05 -125)"/></svg>
        </div>
        <div class="inline md:hidden mr-6 mt-8 right-0 fixed bg-red-900 bg-opacity-40 border border-gray-900 rounded-lg backdrop-filter backdrop-blur-sm z-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-yellow-200 " fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </div>
    </header>

<div class="sticky top-0 text-center z-10">
    <nav
        class="hidden md:inline-block mx-auto mt-2 py-1 text-sm bg-red-900 bg-opacity-90 border-b-2 border-t-2 border-l border-r rounded-sm border-gray-900 text-yellow-200 backdrop-filter backdrop-blur-sm">
        
        <a class="hover:bg-red-700 border-r border-gray-900 inline-block" href="#home">
            <div class="px-4 op">
                <h3 class="">Home</h3>
            </div>
        </a>
        <a class="hover:bg-red-700 border-r border-gray-900 inline-block" href="#menu">
            <div class="px-4">
                <h3 class="">Menu</h3>
            </div>
        </a>
        <a class="hover:bg-red-700 border-r border-gray-900 inline-block" href="#reservations">
            <div class="px-4">
                <h3 class="">Reservations</h3>
            </div>
        </a>
        <a class="hover:bg-red-700 border-r border-gray-900 inline-block" href="#history">
            <div class="px-4">
                <h3 class="">History</h3>
            </div>
        </a>
        <a class="hover:bg-red-700 border-r border-gray-900 inline-block" href="#gallery">
            <div class="px-4">
                <h3 class="">Gallery</h3>
            </div>
        </a>
        <a class="hover:bg-red-700 inline-block" href="#contact">
            <div class="px-4">
                <h3 class="">Contact</h3>
            </div>
        </a></nav>
</div>

 <img class="w-full h-full object-cover absolute top-0 -z-10 filter sepia blur-sm brightness-200 opacity-20" src="images/fargos.png">
    <main class="flex-grow">
        <section class="" >
           
            <div class="mt-56">
                <div class="text-center filter drop-shadow-lg font-semibold">
                    <h1 class="text-7xl text-center norican inline font-bold">Fargo's is back!</h1>
                    <h4 class="mt-4 text-center ">- Thanks to our wonderful customers!!</h4>
                </div>
            </div>
            <div class="">
                <div>

                    <h4 class="mt-96 text-center filter drop-shadow-lg font-semibold">Handmade pizza, pasta and salad at a Victorian style restaurant.
                        Beer, wine and soft drinks.</h4>
                </div>
            </div>
        </section>
        <div class="">
            <div class="bg-yellow-50">
                <h1 class="text-2xl text-center mt-56 font-bold">A Destination</h1>
                <h4 class="mt-1 mx-12 md:mx-48 text-center">The difference between Fargo's Pizza Co. and those other
                    guys is practically everything! From our glittering Victorian Architecture to our genuine player
                    piano, we are likely the most unique family dining establishment you have ever seen! But looks
                    aren't everything --- so we offer a choice of twenty-five great pizzas, our special pastas,
                    sandwiches and even a salad bar . . . so YOU can make the salad YOU have been waiting for!
                    Compliment your dinner choice with a beverage from our fountain. Then top it off with one of our
                    dessert favorites! The atmosphere is casual, so come as you are, and bring the whole family! We have
                    a Game Room and specialties for Kids.</h4>
            </div>
        </div>


        <section class="font-semibold" id="menu">
            <h1 class="text-5xl text-center norican mt-48 pt-10">Menu</h1>

            <h2 class="text-3xl text-center norican mb-4 mt-8">Pizza</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 md:mx-24 text-center">
                
                <div class="p-4">
                    <h3>1. Plain Cheese</h3>
                </div>
                <div class="p-4">
                    <h3>2. Italian Sausage</h3>
                </div>
                <div class="p-4">
                    <h3>3. Black Olive</h3>
                </div>
                <div class="p-4">
                    <h3>4. Lonesome Stranger</h3>
                    <small>Lean Beef & Fresh Onions</small>
                </div>
                <div class="p-4">
                    <h3>5. Mushroom</h3>
                </div>
                <div class="p-4">
                    <h3>6. Chicken Alfredo</h3>
                    <small>Cream Sauce with Romano, Parmesan & Chicken</small>
                </div>
                <div class="p-4">
                    <h3>7. Pepperoni</h3>
                    <small>Spiced Just Right</small>
                </div>
                <div class="p-4">
                    <h3>8. Mushroom & Sausage</h3>
                </div>
                <div class="p-4">
                    <h3>9. Mushroom & Beef</h3>
                </div>
                <div class="p-4">
                    <h3>10. Pepperoni & Green Pepper</h3>
                </div>
                <div class="p-4">
                    <h3>11. Pepperoni & Sausage</h3>
                </div>
                <div class="p-4">
                    <h3 font->12. Pepperoni & Mushroom</h3>
                </div>
                <div class="p-4">
                    <h3>13. Big Red</h3>
                    <small>Canadian Bacon & Fresh Tomatoes</small>
                </div>
                <div class="p-4">
                    <h3>14. Golden Nugget</h3>
                    <small>Canadian Bacon & Pineapple</small>
                </div>
                <div class="p-4">
                    <h3>15. Fargo's Favorite</h3>
                    <small>Canadian Bacon, Beef & Tomatoes</small>
                </div>
                <div class="p-4">
                    <h3>16. Sophia's Special</h3>
                    <small>Beef, Mushroom, Pepperoni & Salami</small>
                </div>
                <div class="p-4">
                    <h3>17. Barbecue Chicken</h3>
                    <small>Chicken, Barbecue Sauce & Mozzarella</small>
                </div>
                <div class="p-4">
                    <h3>18. Mainliner</h3>
                    <small>Canadian Bacon, Beef & Pepperoni</small>
                </div>
                <div class="p-4">
                    <h3>19. Farmer John</h3>
                    <small>Beef, Mushroom, Green Pepper, Fresh Onion & Tomatoes</small>
                </div>
                <div class="p-4">
                    <h3>20. Combination</h3>
                    <small>Beef, Pepperoni, Salami, Mushroom, Olive & Fresh Onion</small>
                </div>
                <div class="p-4">
                    <h3>21. Super Combination</h3>
                    <small>Beef, Pepperoni, Salami, Mushroom, Olive & Fresh Onion, Canadian Bacon, Green Pepper, Sliced Tomatoes & Cheese</small>
                </div>
                <div class="p-4">
                    <h3>22. Vegetarian</h3>
                    <small>Black Olive, Mushroom, Green Pepper, Fresh Onion & Tomatoes</small>
                </div>
                <div class="p-4">
                    <h3>23. Country Strip Bacon</h3>
                    <small>Country Strip Bacon, Real Bacon Bits & Cheese</small>
                </div>
                <div class="p-4">
                    <h3>24. El Fargorito</h3>
                    <small>Special Sauce, Green Pepper, Onion, Beef, Shredded Lettuce, Cheddar Cheese, Diced Tomatoes & Sliced Black Olives</small>
                </div>
                <div class="p-4">
                    <h3>25. Canadian Bacon</h3>
                </div>
            </div>

            <h2 class="text-3xl text-center norican my-4">Sandwiches</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 md:mx-24 text-center">
                <div class="p-4">
                    <h3>French Dip</h3>
                </div>
                <div class="p-4">
                    <h3>Barbecue Beef & Cheddar</h3>
                </div>
                <div class="p-4">
                    <h3>Bacon Lettuce & Tomato</h3>
                </div>
                <div class="p-4">
                    <h3>Ham & Cheese</h3>
                </div>
                <div class="p-4">
                    <h3>Italian Sub</h3>
                </div>
                <div class="p-4">
                    <h3>Turkey</h3>
                </div>
            </div>

            <h2 class="text-3xl text-center norican my-4">Pasta</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 md:mx-24 text-center">
                <div class="p-4">
                    <h3>Spaghetti with Marinara Sauce</h3>
                </div>
                <div class="p-4">
                    <h3>Spaghetti with Sophia’s Meat Sauce</h3>
                </div>
                <div class="p-4">
                    <h3>Fettuccine Alfredo</h3>
                </div>
                <div class="p-4">
                    <h3>Spaghetti Sampler</h3>
                </div>
                <div class="p-4">
                    <h3>Baked Spaghetti with Marinara Sauce</h3>
                </div>
                <div class="p-4">
                    <h3>Baked Spaghetti with Sophia’s Meat Sauce</h3>
                </div>
                <div class="p-4">
                    <h3>Baked Spaghetti with Alfredo Sauce</h3>
                </div>
            </div>

            <h2 class="text-3xl text-center norican my-4">Salad Bar</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 md:mx-24 text-center">
                <div class="p-4">
                    <h3>Small Salad</h3>
                </div>
                <div class="p-4">
                    <h3>Large Salad</h3>
                </div>
                <div class="p-4">
                    <h3>To Go Salad</h3>
                </div>
            </div>

            <h2 class="text-3xl text-center norican my-4">Soups</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 md:mx-24 text-center">
                <div class="p-4">
                    <h3>Chicken Noodle</h3>
                </div>
                <div class="p-4">
                    <h3>Vegetable Beef</h3>
                </div>
                <div class="p-4">
                    <h3>Potato & Bacon</h3>
                </div>
                <div class="p-4">
                    <h3>Cauliflower & Cheese</h3>
                </div>
                <div class="p-4">
                    <h3>Broccoli & Cheese</h3>
                </div>
            </div>
            <h2 class="text-3xl text-center norican my-4 font-semibold">Beverages</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 md:mx-24 text-center">
                <div class="p-4">
                    <h3>Soft Drinks</h3>
                </div>
                <div class="p-4">
                    <h3>Coffee & Hot Tea</h3>
                </div>
                <div class="p-4">
                    <h3>Iced Tea</h3>
                </div>
                <div class="p-4">
                    <h3>Beer</h3>
                </div>
                <div class="p-4">
                    <h3>Wine</h3>
                </div>
            </div>
            <h2 class="text-3xl text-center norican my-4">Desserts</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 md:mx-24 text-center">
                <div class="p-4">
                    <h3>Ice Cream</h3>
                </div>
                <div class="p-4">
                    <h3>Sundaes</h3>
                </div>
                <div class="p-4">
                    <h3>Floats</h3>
                </div>
                <div class="p-4">
                    <h3>Cakes</h3>
                </div>
            </div>
        </section>
        <section id="reservations" class="font-semibold">
            <h1 class="text-5xl text-center norican mt-48 pt-10">Reservations</h1>
            <p class="text-center mt-12 mx-12">Fargo’s is now taking reservations by phone. Call <a href="tel:+17194735540" class="text-blue-800">(719)473-5540</a> to schedule your
                gathering today. Please call between 11am and 2pm to speak with reservations about our party spaces.</p>
        </section>
        <section id="history" class="font-semibold">
            <h1 class="text-5xl text-center norican mt-48 pt-10">History</h1>
            <div class="mx-4 md:mx-24 mt-12 text-sm font-normal">
                <img class="float-left h-96 m-2" src="images/334.jpg" alt="">
                <p class="mt-2">Two brothers from the “Show Me” State of Missouri have built a living monument to pizza,
                    a veritable showplace, at the foot of Pike’s Peak in the Rocky Mountains.</p>

                <p class="mt-2">Fargo’s Pizza Company brings to life an obscure piece of mountain lore featuring the
                    hard-drinking, straight-shooting, freethinking gambler named Fargo who prowled the mountain towns a
                    hundred years ago until he met the beautiful Sophia.</p>

                <p class="mt-2">Sophia, born to nobility, came to Colorado with her parents who fled Italy to escape
                    political persecution. She fell in love with Fargo and changed his ways. But, alas, they had no
                    means of support. But wait! Sophia had inherited the family’s old Italian recipes. They would open
                    an Italian restaurant and introduce pizza to the Colorado Territory.</p>

                <p class="mt-2">The reason this bit of history is obscure is because the founder of Fargo’s, Leon
                    Gardner, created this story. “Thus, the legend of Fargo and Sophia was born.</p>

                <p class="mt-2">This “legendary” pair have been reproduced in wax and sit at a balcony table overlooking
                    the main floor at Fargo’s, setting the style for all the rest of the authentic memorabilia that was
                    hunted down piece by piece to grace this Old West restaurant that basks in Old World opulence.</p>

                <p class="mt-2">Fargo’s Pizza Company opened in December 1973 with Leon as chairman of the board and his
                    brother, Landon, as president and chief of operations. It’s a sit-down family restaurant with a menu
                    of pizza, pasta, sandwiches, soups, deluxe salad bar and desserts, along with a bar serving beer,
                    wine, soft drinks and coffee.

                    <p class="mt-2">It’s one of the world’s largest family pizza restaurants, seating 500 guests, having
                        a total of 16,000 square feet, and parking for 175 cars.</p>

                    <p class="mt-2">Fargo’s is frequented by busloads of tourists as well as the many military bases,
                        universities, colleges, elementary, junior, high schools, not to mention the many residents of
                        Colorado Springs.</p>

                    <p class="mt-2">Authentic detailing of the Victorian period is carried out in the wooden structure.
                        One hundred and twenty original leaded and stained glass pieces of art as well as countless
                        pieces of authentic artifacts purchased in the Denver and Central City area have been
                        incorporated into the structure itself.</p>

                    <p class="mt-2"> Magic mirrors on the wall tell guests when their orders are ready. This was Leon’s
                        invention before the dawn of personal computers. With a little tinkering and a lot of ingenuity,
                        he came up with a mirror that unobtrusively displayed a number (no flashing neon) when an order
                        was ready. The mirrors are situated in eight locations and are visible from any table.</p>

                    <p class="mt-2">Leon operated Fargo’s on the values of overall image, cleanliness, speed and
                        friendliness of service, price, value accessibility, ease of parking and availability to
                        customers. His family and great management carry on this same tradition.</p>

                    <p class="mt-2">This has been instilled in the employees at Fargo’s. “You don’t give excuses to the
                        public,” said Leon. “You give service.” </p>
            </div>
        </section>
        <section class="h-screen" id="gallery">
            <h1 class="text-5xl text-center norican mt-48 pt-10 font-semibold">Gallery</h1>
        </section>
        <section id="contact" class="">
            <h1 class="text-5xl text-center norican mt-48 pt-10 font-semibold">Contact</h1>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 md:mx-24 text-center font-semibold text-gray-900">
                 <div class="py-8">
                        <h2 class="text-3xl text-center norican my-4">Phone</h2>
                        <p>(719) 473-5540</p> 
                    </div>
                <div class="py-8">
                    
                    <h2 class="text-3xl text-center norican my-4">Social Media</h2>
                    <div class=""><div class="flex flex-row justify-center">
                        <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/fargospizza">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 px-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/></svg>
                        </a>
                   <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/fargospizzacompany/"> 
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 px-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.829 6.302c-.738-.034-.96-.04-2.829-.04s-2.09.007-2.828.04c-1.899.087-2.783.986-2.87 2.87-.033.738-.041.959-.041 2.828s.008 2.09.041 2.829c.087 1.879.967 2.783 2.87 2.87.737.033.959.041 2.828.041 1.87 0 2.091-.007 2.829-.041 1.899-.086 2.782-.988 2.87-2.87.033-.738.04-.96.04-2.829s-.007-2.09-.04-2.828c-.088-1.883-.973-2.783-2.87-2.87zm-2.829 9.293c-1.985 0-3.595-1.609-3.595-3.595 0-1.985 1.61-3.594 3.595-3.594s3.595 1.609 3.595 3.594c0 1.985-1.61 3.595-3.595 3.595zm3.737-6.491c-.464 0-.84-.376-.84-.84 0-.464.376-.84.84-.84.464 0 .84.376.84.84 0 .463-.376.84-.84.84zm-1.404 2.896c0 1.289-1.045 2.333-2.333 2.333s-2.333-1.044-2.333-2.333c0-1.289 1.045-2.333 2.333-2.333s2.333 1.044 2.333 2.333zm-2.333-12c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.958 14.886c-.115 2.545-1.532 3.955-4.071 4.072-.747.034-.986.042-2.887.042s-2.139-.008-2.886-.042c-2.544-.117-3.955-1.529-4.072-4.072-.034-.746-.042-.985-.042-2.886 0-1.901.008-2.139.042-2.886.117-2.544 1.529-3.955 4.072-4.071.747-.035.985-.043 2.886-.043s2.14.008 2.887.043c2.545.117 3.957 1.532 4.071 4.071.034.747.042.985.042 2.886 0 1.901-.008 2.14-.042 2.886z"/></svg>
                    </a>
                </div>
            </div>
                 </div>
                 <div class="py-8">
                    <h2 class="text-3xl text-center norican my-4">Email</h2>
                 </div>
            </div>

        </section>

    </main>

    <footer class=" bg-gray-900 text-3xl text-yellow-200  inset-x-0 bottom-0 p-4 mt-8">
        <div class="flex xl:mx-72">
            <div class="ml-8 mr-auto block">
                <h4 class="text-2xl">Location</h4>
                <p class="text-xs mt-2">2910 E Platte</p>
                <p class="text-xs">Colorado Springs, Colorado 80909</p>
                <p class="text-xs"><a href="tel:+17194735540">(719)473-5540</a></p>
            </div>
            <div class="mr-8 ml-auto block">
                <h4 class="text-2xl">Hours</h4>
                <p class="text-xs mt-2">11am - 9pm</p>
            </div>
        </div>
    </footer>
</body>

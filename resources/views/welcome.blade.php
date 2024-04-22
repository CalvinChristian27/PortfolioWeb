<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calvin Christian Ho</title>
    <link rel="stylesheet" href="{{ asset('animationFirstPage.css') }}">
    <style>
        .container {
            position: relative;
            display: flex;
            align-items: center;
            height: 100vh;
        }

        .image-container {
            position: relative;
            width: 600px;
            height: 800px;
            overflow: hidden;
            margin-right: 3px;
        }

        .image-container img {
            position: absolute;
            left: -100%;
            animation: slideImage 2s forwards;
        }

        .text-container {
            position: relative;
            margin-left: 50px;
            opacity: 0;
            animation: slideText 4s forwards;
        }
        
        @keyframes slideImage {
            100% {
                left: 0;
            }
        }

        @keyframes slideText {
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-container">
            <img src="{{ asset('images/MainProfile.jpg') }}" alt="Main Profile" id="main-image">
        </div>
        <div class="text-container" id="text-container">
            <p style="font-size: 20px; line-height: 2; color: #072bf5;">Hi, Welcome</p>
            <h1 style="font-size: 60px;">My name is Calvin Christian Ho</h1>
            <p style="font-size: 20px">I'm a <span style="font-weight: bold;">programmer</span> that currently studying Computer Science in <a href="https://binus.ac.id/malang/">Bina Nusantara Malang</a>. Interested in</p>
            <p style="font-size: 20px"><span style="font-weight: bold">Game Development, Database, and UI/UX</span>. Other than programming, I also study <span style="font-weight: bold;">Psychology</span> as my</p>
            <p style="font-size: 20px;">hobby to learn how life works and how to handle it. Want to know more about me?</p>
            <a style=" line-height: 4; color: #072bf5;" href="{{ route('Menu') }}">CLICK HERE</a>
        </div>
    </div>
    <script src="{{ asset('scriptFirstPage.js') }}"></script>
</body>
</html>
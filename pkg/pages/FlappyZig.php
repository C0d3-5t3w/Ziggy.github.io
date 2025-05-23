<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
header("Content-Type: text/html; charset=UTF-8");
header("timezone: PMT");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>FlappyZig Game</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            position: fixed;
            width: 100%;
            height: 100%;
            touch-action: none;
        }
    </style>
</head>
<body>
    <div class="game-container">
        <div class="game-overlay"></div>
        <div class="canvas">
        </div>
        <div id="controls" class="game-controls">
            <h3>Controls:</h3>
            <p>Desktop: SPACE to jump, G to shoot</p>
            <p>Mobile: Tap left half to jump, right half to shoot</p>
            <p class="instructions">Tap anywhere to start</p>
        </div>
    </div>
    <script>
        document.addEventListener('touchmove', function(e) {
            e.preventDefault();
        }, { passive: false });
        
        document.addEventListener('DOMContentLoaded', function() {
            const controls = document.getElementById('controls');

            function hideControls() {
                controls.classList.add('fade-out');
                setTimeout(() => {
                    controls.style.display = 'none';
                }, 300);
            }

            document.addEventListener('click', hideControls);
            document.addEventListener('touchstart', hideControls);
            document.addEventListener('keydown', function(event) {
                if (event.code === 'Space') {
                    hideControls();
                }
            });
            
            const gameScript = document.createElement('script');
            gameScript.src = '../assets/js/FlappyZig.js';
            document.body.appendChild(gameScript);
        });
    </script>
    <footer>
        <div class="container">
            <ul class="footer-links">
                <li><a href="../../index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="pictures.html">Pictures</a></li>
                <li><a href="FlappyZig.html">Flappy Zig</a></li>
                <li><a href="znek.html">Znek</a></li>
                <li><a href="ZigWalk.html">ZigWalk</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>

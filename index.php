<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" media="screen" href="main1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.png">
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
    <script>
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyBt7B_guC2BqwSAdTtKvGbRmu57ziqb_RM",
        authDomain: "tchest-0.firebaseapp.com",
        databaseURL: "https://tchest-0.firebaseio.com",
        projectId: "tchest-0",
        storageBucket: "tchest-0.appspot.com",
        messagingSenderId: "381630158312"
    };
    firebase.initializeApp(config);
    </script>
    <script src="main.js"></script>
    <title>Treasure Chest</title>
</head>
<body>
    <div class="container">
        <img id="gif" src="shake.gif" width="400" height="250" 
                onclick="winCount();
                var chestOpen = new Audio('kaching.m4a');
                // var rand = Math.floor(Math.random() * 2) + 1;
                // console.log(rand);
                chestOpen.play();
                chestOpen.currentTime=0;
                this.onclick = null;">
    </div>

    <span id="editText">TAP THE CHEST TO OPEN!!!!</span>

    <br>
    <br>

    <!-- <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" frameborder="0" width="420" height="315">
    </iframe> -->

</body>
</html>
<?php

session_start();//

if(!isset($_SESSION['username'])){
    echo "you are logged out";
    header('locaton:login.php');
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- APlayer CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.css"/>

    <title>MusicStream</title>
    <link rel="icon" href="headphones.png" type="image/png">
   
        <style>
        body{
            background-color: #f7f7f7;
            font-family: 'Trebuchet MS', sans-serif;
        }
        

        ul,
        li {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        a {
            text-decoration: none;
        }

        .profile-wrapper {
            float: left;
            width: 170px;
        }

       

        .profile-wrapper::before {
            content: '';
            position: absolute;
            top: 20px;
            right: 5px;
            border-color: #eee transparent transparent;
            border-width: 6px;
            border-style: solid;
            
        }

       

        .profile {
            float: left;
            border-radius: 2px;
            background:-webkit-linear-gradient(#cc99ff,#99ccff);
        }

        .profile:hover {
            cursor: pointer;
            background: -webkit-linear-gradient(#cc99ff,#99ccff);
        }

        

       

        .profile img {
            width: 85px;
            height: 2%;
            float: left;
            max-height: fit-content;
            border: 1px solid #111;
            border-radius: 2px;
            
           
        }

        /* hide menu */
        .menu {
            display: none;
            clear: both;
            margin: 20px 0 0 0;
        }

        .menu li {
            font-size: 20px;
           
            font-family: 'Trebuchet MS', sans-serif;
            padding: 10px 30px;
        }

        .menu li a {
            color: #555;
        }

        .menu li:hover>a {
            color: #eee;
        }


        /* hover profile show menu */
        .profile:hover .menu {
            display: block;
        }
        #icon{
            width:60px;
            height:60px;
        }
 
        img{
            width: 100%;
            min-height: 10px;
            
        }
        .main{
            padding: 80px 0;
        }
        .col-md-3{
            margin-bottom: 40px;
           
           
        }
        .album-poster{
            position: relative;
            height:250px;
            display: block;
            border-radius: 60px;
            overflow: hidden;
            width:250px;
            box-shadow: 0 15px 35px #3d2173a1;
            transition: all ease 0.4s;
        }
        .album-poster:hover{
            box-shadow: none;
            transform: scale(0.98) translateY(5px);
        }
        h3{
            font-size: 34px;
            font-weight:bold;
            margin-bottom: 34px;
            border-bottom: 4px solid #e6e6e6;
            padding-bottom: 15px;
        }
        p{
            font-size: 15px;
        }
        h4{
            font-size: 16px;
            text-transform: uppercase;
            margin-top: 15px;
            font-weight: 700;
        }
        

        /*default is hide music player*/
        #aplayer{
            position: fixed;
            bottom: -100%;
            left: 0;
            width: 100%;
            margin: 0;
            box-shadow: 0 -2px 2px #dadada;
            background-color: #fff;
            transition: all ease 0.5s;
        }
        #aplayer.showPlayer{
            bottom: 0;
        }

        
        /*MUSIC PLAYER CUSTOMIZING STYLE*/
        span{
            color: #000 !important;
            font-size: 16px;
        }
        .aplayer .aplayer-info .aplayer-controller .aplayer-bar-wrap .aplayer-bar .aplayer-loaded{
            background: #e0e0e0;
            
        }
        .aplayer .aplayer-info .aplayer-controller .aplayer-bar-wrap .aplayer-bar .aplayer-played{
            height: 4px;
            background-color: #2196F3 !important;
        }
        .aplayer .aplayer-info .aplayer-controller .aplayer-bar-wrap .aplayer-bar .aplayer-played .aplayer-thumb{
            background-color: #2196F3 !important;
            height: 4px;
        }

        .aplayer .aplayer-icon{
            width: 20px;
            height: 20px;
        }
        .aplayer .aplayer-info .aplayer-controller .aplayer-time .aplayer-icon path {
            fill: #000;
        }
        .aplayer .aplayer-info .aplayer-music{
            margin-bottom: 5px;
        }
.bottom{
    position: relative;
    background-image: linear-gradient(#cc99ff,#99ccff);
    max-width:60%;
    width:600px;
    height:60px;
    text-align:center;
    font-size:30px;
    font-weight:bold;
    margin:70px 255px;
    border-radius:7px;
    padding: 5px;
}
#top{
    position: absolute;
    background-image: linear-gradient(#cc99ff,#99ccff);
    max-width:100%;
    width:1600px;
    height:70px; 
    color:white;
    padding:5px;
}
#left h3{
    margin:20px;
    float:left;
    font-size:25px;
}
#right{
    font-size:16px;
}
.card-btn:hover span,
.card-btn:active span {
  margin-left: 1.5rem;
}

@media only screen and (max-width: 60em) {
  body {
    padding: 3rem;
  }

  .grid {
    grid-gap: 10px;
  }
}
html {
  font-size: 62.5%;
}
@import url("https://fonts.googleapis.com/css?family=Poppins&display=swap");

.grid {
  display: grid;
  margin-left:10px;
  margin-top:120px;
  width: 110em;
  grid-gap: 5rem;
  grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
  align-items: start;
}

.grid-item {
  background-color: #fff;
  border-radius: 0.4rem;
  overflow: hidden;
  box-shadow: 0 3rem 6rem rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: 0.2s;
}

.grid-item:hover {
  transform: translateY(-0.5%);
  box-shadow: 0 4rem 8rem rgba(0, 0, 0, 0.5);
}

.card-img {
  display: block;
  width: 100%;
  height: 20rem;
  object-fit: cover;
}

.card-content {
  padding: 3rem;
}

.card-header {
  font-size: 3rem;
  font-weight: 500;
  color: #0d0d0d;
  margin-bottom: 1.5rem;
}

.card-text {
  font-size: 1.6rem;
  letter-spacing: 0.1rem;
  line-height: 1.7;
  color: #3d3d3d;
  margin-bottom: 2.5rem;
}

.card-btn {
  display: block;
  width: 100%;
  padding: 1.5rem;
  font-size: 2rem;
  text-align: center;
  color: #3363ff;
  background-color: #d8e0fd;
  border: none;
  border-radius: 0.4rem;
  transition: 0.2s;
  cursor: pointer;
  letter-spacing: 0.1rem;
}

.card-btn span {
  margin-left: 1rem;
  transition: 0.2s;
}

.card-btn:hover,
.card-btn:active {
  background-color: #c2cffc;
}
</style>
       
    </head>
    <body>
    <div id="top">
        <ul class="profile-wrapper">
            <li>
                <!-- user profile -->
                <div class="profile">
                    <img id="icon"
                        src="https://thumbs.dreamstime.com/b/user-profile-icon-creative-trendy-colorful-round-button-illustration-isolated-156511788.jpg"/>
    
    
                    <!-- more menu -->
                    <ul class="menu">
                        <li><?php echo $_SESSION['username']; ?></a></li>
                        <li><a href="changepass.php">Change Password</a></li>
                        <li><a href="subs.php">Subscribe</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="login.php">Log out</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        </div>
        </div>
    <!-- <div id="left"><h3><?php echo $_SESSION['username']; ?>&nbsp;| <a href="login.php"id ="right "style="text-decoration:none; color:white">Logout</a></h3>
    </div>
    </div> -->
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Top Hits</h3>
            </div>
            <div class="col-md-3">
                <a href="javascript:void();" class="album-poster" data-switch="0">
                    <img src="https://i.pinimg.com/236x/be/b7/14/beb714fa5eedf00f2429a416c94043cb.jpg" alt="">
                </a>
                <h4>WAKE UP SID</h4>
                <p>Shankar–Ehsaan–Loy</p>
            </div>
            <div class="col-md-3">
                <a href="#" class="album-poster" data-switch="1">
                    <img src="https://www.bollywoodhungama.com/wp-content/uploads/2017/03/Half-Girlfriend-4.jpg" alt="">
                </a>
                <h4>BAARISH</h4>
                <p>Ash King</p>
            </div>
            <div class="col-md-3">
                <a href="#" class="album-poster" data-switch="2">
                    <img src="https://i.pinimg.com/236x/25/7d/35/257d358033261393e6c341034d70ff73.jpg" alt="">
                </a>
                <h4>AAJA NACHLE</h4>
                <p>Salim–Sulaiman</p>
            </div>
            <div class="col-md-3">
                <a href="#" class="album-poster" data-switch="4">
                    <img src="http://a10.gaanacdn.com/images/albums/91/1841891/crop_480x480_1841891.jpg" alt="">
                </a>
                <h4>KAUN TUJHE</h4>
                <p>ARMAAN MALIK</p>
            </div>

            <div class=" col-md-3">
                <a href="#" class="album-poster" data-switch="5">
                    <img src="https://i.pinimg.com/236x/ac/84/81/ac84817729db2abf6b77f10e2f4bc0e6.jpg" alt="">
                </a>
                <h4>FITOOR</h4>
                <p>Amit Trivedi</p>
        </div>
           
            <div class="col-md-3">
                <a href="#" class="album-poster" data-switch="5">
                    <img src="https://i.pinimg.com/originals/62/6c/4d/626c4d918279e15106c0335610c134c1.jpg" alt="">
                </a>
                <h4>SAWAAR LOON</h4>
                <p>Monali Thakur</p>
            </div>
            <div class="col-md-3">
                <a href="#" class="album-poster">
                    <img src="https://i.pinimg.com/236x/ae/16/c3/ae16c3305643c9e06c55ecdb2fd3eba1.jpg" alt="">
                </a>
                <h4>DIL CHAHTA HAI</h4>
                <p>Shankar–Ehsaan–Loy</p>
            </div>
            <div class="col-md-3">
                <a href="#" class="album-poster">
                    <img src="https://i.pinimg.com/originals/9f/7c/cb/9f7ccbbe6842f9b05b7062ea6429a3d9.jpg" alt="">
                </a>
                <h4>DIL DHADAKNE DO</h4>
                <p>Farhan Akhtar</p>
            </div>
           
        </div>
        <div class="bottom">
    <a href="audio/upload23.php" target="_blank" style="text-decoration:none; color:white">Share Your Music With The World!</a>
    </div>
	<div class="grid">
    <div class="grid-item">
      <div class="card">
        <img class="card-img" src="https://bandzoogle.com/files/3288/bzblog-7ways-artistmanager.jpg" alt="Rome" />
        <div class="card-content">
          <h1 class="card-header">Creater's Corner</h1>
          <p class="card-text">
          </p>
          <button class="card-btn">Visit <span>&rarr;</span></button>
        </div>
      </div>
    </div>
    <div class="grid-item">
      <div class="card">
        <img
          class="card-img"
          src="https://rebootrecording.com/wp-content/uploads/2019/10/artist-management-companies.jpg"
          alt="Grand Canyon"
        />
        <div class="card-content">
          <h1 class="card-header">Juke Box</h1>
          <p class="card-text">
            One of the world's natural wonders, the iconic Grand Canyon draws
            oohs and aahs from visitors perched at the edge of its
            <strong>towering cliffs</strong>.
          </p>
          <button class="card-btn">Visit <span>&rarr;</span></button>
        </div>
      </div>
    </div>
	<div class="grid-item">
      <div class="card">
        <img
          class="card-img"
          src="https://rebootrecording.com/wp-content/uploads/2019/10/artist-management-companies.jpg"
          alt="Grand Canyon"
        />
        <div class="card-content">
          <h1 class="card-header">Hot New In</h1>
          <p class="card-text">
            One of the world's natural wonders, the iconic Grand Canyon draws
            oohs and aahs from visitors perched at the edge of its
            <strong>towering cliffs</strong>.
          </p>
          <button class="card-btn">Visit <span>&rarr;</span></button>
        </div>
      </div>
    </div>
    </div>
   
</div>
   
    <div id="aplayer"></div>
   
    <!-- Jquery Link -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <!-- Bootstrap Link -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- APlayer Jquery link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.js"></script>    

    <script>


        // NOW I CLICK album-poster TO GET CURRENT SONG ID
        $(".album-poster").on('click', function(e){
            var dataSwitchId = $(this).attr('data-switch');
            //console.log(dataSwitchId);

            // and now i use aplayer switch function see
            ap.list.switch(dataSwitchId); //this is static id but i use dynamic

            // aplayer play function
            // when i click any song to play
            ap.play();

            // click to slideUp player see
            $("#aplayer").addClass('showPlayer');
        });

        const ap = new APlayer({
            container: document.getElementById('aplayer'),
            listFolded: true,
            audio: [
            {
                name: 'WAKE UP SID',
                artist: 'Shankar–Ehsaan–Loy',
                url: 'newsongs/wakeup.mp3',
                cover: 'https://i.pinimg.com/236x/be/b7/14/beb714fa5eedf00f2429a416c94043cb.jpg'
            },
            {
                name: 'BAARISH',  // SONG NAME
                artist: 'Ash King', //ARTIST NAME
                url: 'newsongs/baarish.mp3', // PATH NAME AND SONG URL
                cover: 'https://www.bollywoodhungama.com/wp-content/uploads/2017/03/Half-Girlfriend-4.jpg' // COVER IMAGE
            },
            {
                name: 'AAJA NACHLE',
                artist: 'Salim–Sulaiman',
                url: 'newsongs/ajanachle.mp3',
                cover: 'https://i.pinimg.com/236x/25/7d/35/257d358033261393e6c341034d70ff73.jpg',
            },
            {
                name: 'KAUN TUJHE',
                artist: 'ARMAAN MALIK',
                url: 'newsongs/baarish.mp3',
                cover: 'http://a10.gaanacdn.com/images/albums/91/1841891/crop_480x480_1841891.jpg',
            },
            {
                name: 'FITOOR',
                artist: 'Amit Trivedi',
                url: 'newsongs/fitoor.mp3',
                cover: 'https://i.pinimg.com/236x/ac/84/81/ac84817729db2abf6b77f10e2f4bc0e6.jpg',
            },
            {
                name: 'SAWAAR LOO',
                artist: 'Monali Thakur',
                url: 'newsongs/sawaar.mp3',
                cover: 'https://i.pinimg.com/originals/62/6c/4d/626c4d918279e15106c0335610c134c1.jpg',
            },
            {
                name: 'DIL CHAHTA HAI',
                artist: 'Shankar–Ehsaan–Loy',
                url: 'newsongs/dilchahta.mp3',
                cover: 'https://i.pinimg.com/236x/ae/16/c3/ae16c3305643c9e06c55ecdb2fd3eba1.jpg',
            },
            {
                name: 'DIL DHADAKNE DO',
                artist: 'Farhan Akhtar',
                url: 'newsongs/dil.mp3',
                cover: 'https://i.pinimg.com/originals/9f/7c/cb/9f7ccbbe6842f9b05b7062ea6429a3d9.jpg',
            },


            ]
        });
    </script>

    </body>
</html>

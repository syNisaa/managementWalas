<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('landing_page/style.css')}}">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <title>Landing Page</title>
</head>
<body>
    <div class="warp">
        <header>
            <div class="logo">SMK Taruna Bhakti</div>
            <div class="menu">
                <ul>
                    <!-- <li><a href="{{ route('login') }}">Login</a></li> -->
                </ul>
            </div>
        </header>
    </div>

    <div class="container">
        <div class="content">
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore tempore nam nesciunt</h1>
            <div class="btn-group">
                <a href="admin" class="color1">Get Started</a>
                <!-- <a href="#">Learn more</a> -->
            </div>
        </div>
    
        <div class="gif">
            <img src="{{asset('landing_page/blue-office.jpg')}}" style="width: 500px;">
        </div>
    </div>

    <div class="about-title">
        <center>
            <h2>About</h2>
        </center> 
    </div>

    <div class="about">
        <div class="about-inner">
            <p>Lorem, ipsum dolore sit amet consectetur adipisicing elit. Fugiat debitis nihil odio, alias doloribus illum? Natus sunt molestias voluptate at reiciendis doloribus corrupti optio incidunt amet? Cupiditate nemo illo voluptas. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat debitis nihil odio, alias doloribus illum? Natus sunt molestias voluptate at reiciendis doloribus corrupti optio incidunt amet? Cupiditate nemo illo voluptas. Lorem, ipsum dolore sit amet consectetur adipisicing elit. Fugiat debitis nihil odio, alias doloribus illum? Natus sunt molestias voluptate at reiciendis doloribus corrupti optio incidunt amet? Cupiditate nemo illo voluptas. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat debitis nihil odio, alias doloribus illum? Natus sunt molestias voluptate at reiciendis doloribus corrupti optio incidunt amet? Cupiditate nemo illo voluptas.</p>
        </div>
        <div class="about-image">
            <img src="{{asset('landing_page/about-img.png')}}" alt="gambar" style="width: 500px;">
        </div>
    </div>

    <div class="other-title">
        <center>
            <h2>Other</h2>
        </center> 
    </div>

    <div class="other">
        <div class="other-image">
            <img src="{{asset('landing_page/other-img.png')}}" alt="gambar" style="width: 500px;">
        </div>
        <div class="other-inner">
            <p>Lorem, ipsum dolore sit amet consectetur adipisicing elit. Fugiat debitis nihil odio, alias doloribus illum? Natus sunt molestias voluptate at reiciendis doloribus corrupti optio incidunt amet? Cupiditate nemo illo voluptas. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat debitis nihil odio, alias doloribus illum? Natus sunt molestias voluptate at reiciendis doloribus corrupti optio incidunt amet? Cupiditate nemo illo voluptas. Lorem, ipsum dolore sit amet consectetur adipisicing elit. Fugiat debitis nihil odio, alias doloribus illum? Natus sunt molestias voluptate at reiciendis doloribus corrupti optio incidunt amet? Cupiditate nemo illo voluptas. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat debitis nihil odio, alias doloribus illum? Natus sunt molestias voluptate at reiciendis doloribus corrupti optio incidunt amet? Cupiditate nemo illo voluptas.</p>
        </div>
    </div>
</body>
</html>
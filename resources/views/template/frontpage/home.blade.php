<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <title>Landing Page</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Rubik', sans-serif;
}

h1,h2,h3,h4,h5,h6{
    font-family: 'Nunito', sans-serif;
}

p{
    font-family: 'Rubik', sans-serif;
}

header{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 25px 80px;
    background: linear-gradient(to top, transparent);
}

header .logo{
    font-size: 28px;
    font-weight: 600;
    color: #fff;
    float: left;
}

header .menu{
    float: right;
    margin-top: 5px;
}

header ul li{
    display: inline-block;
}

header ul li a{
    text-decoration: none;
    font-size: 16px;
    color: #fff;
    margin: 0 25px;
    font-weight: 300;
    letter-spacing: 1px;
    border-radius: 5rem;
    transition: .2s linear;
}

header ul li a:hover{
    color: #1b5781;
}

.container{
    min-height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-around;
    background-color: #00BCF2;
}

.content{
    color: #fff;
    width: 100%;
    padding-top: .10rem;
    margin-left: 80px;
    margin-top: 90px;
}

.content h1{
    font-size: 48px;
}
.content .btn-group{
    margin-top: 45px;
}

.content a{
    display: inline-block;
    padding: 15px 45px;
    text-decoration: none;
    color: #fff;
    border-radius: 50px;
}

.content a.color1{
    background-color: #1b5781;
}

.gif{
    margin-bottom: .20rem;
    margin-right: 4rem;
    margin-top: 70px;
}

.gif img{
    width: 50vw;
}

.about{
    min-height: 100vh;
    width: 100%;
    display: flex;
    justify-content: space-around;
    background-color: #fff;
    padding-top: 3rem;
    padding-left: 5rem;
    padding-right: 4rem;
}

.about-title h2{
    font-size: 48px;
    padding-top: 2rem;
}

.about-title hr{
    border: none;
    height: 4px;
    width: 150px;
    background-color: #1b5781;
}

.about p{
    padding-top: 1rem;
    font-size: 20px;
    line-height: 2.5rem;
}

.about img{
    width: 50vw;
    padding-top: 3rem;
}

.other{
    min-height: 100vh;
    width: 100%;
    display: flex;
    justify-content: space-around;
    background-color: #00BCF2;
    padding-top: 3rem;
    padding-left: 5rem;
    padding-right: 4rem;
    color: #fff;
}

.other-title h2{
    font-size: 48px;
    padding-top: 2rem;
    background-color: #00BCF2;
    color: #fff;
}

.other-title hr{
    border: none;
    height: 4px;
    width: 150px;
    background-color: #1b5781;
}

.other p{
    padding-top: 1rem;
    font-size: 20px;
    line-height: 2.5rem;
    text-align: right;
}

.other img{
    width: 70vw;
    padding-top: 3rem;
}


</style>
<body>
    <div class="warp">
        <header>
            <div class="logo">SMK Taruna Bhakti</div>
            <div class="menu">
                <ul>
                    {{-- <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li> --}}
                <li><a href="admin">Login</a></li>
                </ul>
            </div>
        </header>
    </div>

    <div class="container">
        <div class="content">
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore tempore nam nesciunt</h1>
            <div class="btn-group">
                <a href="#" class="color1">Get Started</a>
                <a href="#">Learn more</a>
            </div>
        </div>
    
        <div class="gif">
            <img src="{{ asset ('frontpage/img/blue-office.jpg')}}" style="width: 500px;">
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
            <img src="{{ asset ('frontpage/img/about-img.png')}}" alt="gambar" style="width: 500px;">
        </div>
    </div>

    <div class="other-title">
        <center>
            <h2>Other</h2>
        </center> 
    </div>

    <div class="other">
        <div class="other-image">
            <img src="{{ asset ('frontpage/img/other-img.png')}}" alt="gambar" style="width: 500px;">
        </div>
        <div class="other-inner">
            <p>Lorem, ipsum dolore sit amet consectetur adipisicing elit. Fugiat debitis nihil odio, alias doloribus illum? Natus sunt molestias voluptate at reiciendis doloribus corrupti optio incidunt amet? Cupiditate nemo illo voluptas. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat debitis nihil odio, alias doloribus illum? Natus sunt molestias voluptate at reiciendis doloribus corrupti optio incidunt amet? Cupiditate nemo illo voluptas. Lorem, ipsum dolore sit amet consectetur adipisicing elit. Fugiat debitis nihil odio, alias doloribus illum? Natus sunt molestias voluptate at reiciendis doloribus corrupti optio incidunt amet? Cupiditate nemo illo voluptas. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat debitis nihil odio, alias doloribus illum? Natus sunt molestias voluptate at reiciendis doloribus corrupti optio incidunt amet? Cupiditate nemo illo voluptas.</p>
        </div>
    </div>
</body>
</html>
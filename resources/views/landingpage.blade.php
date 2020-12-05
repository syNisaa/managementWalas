<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('landing_page/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <title>Landing Page</title>
</head>
<body>
    <div class="warp">
        <header>
            <div class="logo" style="font-family:Adobe Garamond Pro Bold;">SMK Taruna Bhakti</div>
            <div class="menu">
                <ul>
                    <li style="font-family:Adobe Garamond Pro Bold; font-size:14px;"><a href="{{ route('login') }}" ><b>Login</b></a></li>
                </ul>
            </div>
        </header>
    </div>

    <div class="containe">
        <div class="content">
            <h1 style="font-family: Adobe Fangsong Std R; color:black;"><b>Starbhak Management</b></h1>
            <br><h4 style="font-family: Times New Roman; text-align:justify;">Apa itu Starbhak Management? Starbhak Management adalah aplikasi yang dirancang untuk membantu meringankan tugas walikelas, Yuk simak lebih lanjut!</h4>
            <div class="btn-group">
                <a href="admin" class="color1">Get Manage</a>
                <button class="btn btn-primary" style="margin-left:15px; border-radius:25px;" data-toggle="modal" data-target="#intro">Learn more</button>
            </div>
        </div>
    
        <div class="gif">
            <img src="{{asset('landing_page/set.gif')}}" style="width: 500px;">
        </div>
    </div>

    <div class="about-title">
        <center>
            <h2 style="font-family:Adobe Garamond Pro Bold;">About</h2>
        </center> 
    </div>

    <div class="about">
        <div class="about-inner">
            <p style="text-align:justify; font-family: Times New Roman;">Lorem, ipsum dolore sit amet consectetur adipisicing elit. Fugiat debitis nihil odio, alias doloribus illum? Natus sunt molestias voluptate at reiciendis doloribus corrupti optio incidunt amet? Cupiditate nemo illo voluptas. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat debitis nihil odio, alias doloribus illum? Natus sunt molestias voluptate at reiciendis doloribus corrupti optio incidunt amet? Cupiditate nemo illo voluptas. Lorem, ipsum dolore sit amet consectetur adipisicing elit. Fugiat debitis nihil odio, alias doloribus illum? Natus sunt molestias voluptate at reiciendis doloribus corrupti optio incidunt amet? Cupiditate nemo illo voluptas. Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p><br><br>
        </div>
        <div class="about-image">
            <img src="{{asset('landing_page/manage.gif')}}" alt="gambar" style="width: 500px;">
        </div>
    </div>

    
    
    <footer style="height: auto; text-align:center;">
        <hr>
        Management Walikelas -2020-
        <hr>
    </footer>

<div class="modal" tabindex="-1" id="intro">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Apa itu Management Walas?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe width="460" height="315" src="https://www.youtube.com/embed/M_PEOVMPcik" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
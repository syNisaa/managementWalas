@extends('bagian.sidebar')

@section('content')

<div class="tile_count">
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total User</span>
              <div class="count">User</div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Jadwal</span>
              <div class="count"><a href="/jadwal">Jadwal</a></div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Data ADM</span>
              <div class="count green"><a href="/adm">Adm</a></div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Data Siswa</span>
              <div class="count"><a href="/siswa">Siswa</a></div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Absensi</span>
              <div class="count"><a href="/absen"></a>Absensi</div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Kasus</span>
              <div class="count"><a href="/kasus">Kasus</a></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Management Walikelas <small>S'Manage</small></h3>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                    <span>Oktober 20, 2020 - November 25, 2020</span> <b class="caret"></b>
                    </div>
                  </div>
                </div>

                <div class="col-md-9 col-sm-9 ">
                    <img src="{{asset('dashboard/tech.jpg')}}" alt="" style="width:750px;">
                </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas eligendi sed dignissimos maiores consequatur nam natus, quo modi, itaque doloribus maxime sequi nemo, totam accusamus perspiciatis dolor eaque neque officiis?</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita minus perspiciatis obcaecati eum suscipit, necessitatibus porro incidunt esse nesciunt blanditiis iste dolorem consequuntur a corporis natus illum velit facere omnis!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto sint id ratione incidunt temporibus corporis. Quis vitae, ea libero ab rem hic ratione molestiae, eaque aliquam architecto quisquam possimus praesentium.</p>
              </div>
            </div>

@endsection
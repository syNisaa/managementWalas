@extends('bagian.sidebar')

@section('content')

    <a data-toggle="modal" data-target="#tambah-data" class="btn btn-primary" style="color:white;"><i class="fa fa-plus"></i> Jadwal</a>

    <table class="table table-striped" style="text-align:center; margin-top:2%;">
                    <thead>
                        <tr>
                            <th style="text-align: center">Materi Pertemuan</th>
                            <th style="text-align: center">Tanggal Pertemuan</th>
                            <th style="text-align: center">Jumlah Hadir</th>
                            <th style="text-align: center">Bukti</th>
                            <th style="text-align: center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jadwals as $data)
                        <tr style="text-align: center">
                            <td>{{ $data->materi_pertemuan }}</td>
                            <td>{{ $data->date }}</td>
                            <td>{{ $data->jml_hadir }}</td>
                            <td>
                            <img src="{{ asset ('bukti/'. $data->bukti) }}" alt=" {{ $data->bukti }}" width="100px" height="100px">
                            </td>
                            
                            <td>
                                <div class="icon">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalUpdate{{ $data->id_jadwal }}">Update</button>
                                    <a href="/delete_jadwal/{{ $data->id_jadwal }}" class="btn btn-danger">Delete</a>
                                </div>

                            </td>
                        </tr>
                        <tr>
                        @endforeach
                    </tbody>
                </table>

         <!-- Modal Tambah -->
         <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Input Jadwal</h5>
                        </div>
                        <form class="form-horizontal" action="/add_jadwal" method="post" enctype="multipart/form-data" role="form">
                          {{ csrf_field() }}
                        <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-lg col-sm-2 control-label">Materi Pertemuan</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="materi_pertemuan" placeholder="Materi Pertemuan" @error('materi_pertemuan') is-invalid @enderror>
                                    </div>
                                    @error('materi_pertemuan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-lg col-sm-2 control-label">Tanggal</label>
                                    <div class="col-lg-10">
                                        <input type="date" class="form-control" name="date"  @error('date') is-invalid @enderror>
                                    </div>
                                    @if($errors->has('date'))
                                    <div class="text-danger">
                                        {{ $errors->first('date')}}
                                    </div>
                                    @endif
                                  </div>
    
                                <div class="form-group">
                                    <label class="col-lg col-sm-2 control-label">Jumlah Hadir</label>
                                    <div class="col-lg-10">
                                            <input type="text" class="form-control" name="jml_hadir" placeholder="Jumlah Hadir"  @error('jml_hadir') is-invalid @enderror>
                                            <br>
                                    </div>
                                      @if($errors->has('jml_hadir'))
                                      <div class="text-danger">
                                          {{ $errors->first('jml_hadir')}}
                                      </div>
                                      @endif
                                </div>
                                <br>

                                <div class="col-lg-10">
                                    <select class="custom-select" id="kode" name="kode">
                                        <option selected>Choose...</option>
                                        <option value="1234">XII RPL 1</option>
                                        <option value="4321">XII RPL 2</option>
                                        <option value="123">XI RPL 1</option>
                                    </select>
                                </div>
                                <br>
  
                                <div class="form-group">
                                    <label class="col-lg col-sm-2 control-label">Bukti</label>
                                    <div class="col-lg-10">
                                        <input type="file" name="bukti" placeholder="Bukti">
                                    </div>
                                </div>
                                @if($errors->has('bukti'))
                                    <div class="text-danger">
                                        {{ $errors->first('bukti')}}
                                    </div>
                                @endif
                            
                            </div>
                            
                            <div class="modal-footer">
                                <button class="btn btn-info" type="submit"> Save&nbsp;</button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal"> Cancel</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
              </div>
  

            </div>
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Input Jadwal</h5>
                        </div>
                        <form class="form-horizontal" action="/add_jadwal" method="post" enctype="multipart/form-data" role="form">
                          {{ csrf_field() }}
                        <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-lg col-sm-2 control-label">Materi Pertemuan</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="materi_pertemuan" placeholder="Materi Pertemuan" @error('materi_pertemuan') is-invalid @enderror>
                                    </div>
                                    @error('materi_pertemuan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-lg col-sm-2 control-label">Tanggal</label>
                                    <div class="col-lg-10">
                                        <input type="date" class="form-control" name="date"  @error('date') is-invalid @enderror>
                                    </div>
                                    @if($errors->has('date'))
                                    <div class="text-danger">
                                        {{ $errors->first('date')}}
                                    </div>
                                    @endif
                                  </div>
    
                                  <div class="form-group">
                                      <label class="col-lg col-sm-2 control-label">Jumlah Hadir</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" name="jml_hadir" placeholder="Jumlah Hadir"  @error('jml_hadir') is-invalid @enderror>
                                      </div>
                                      @if($errors->has('jml_hadir'))
                                      <div class="text-danger">
                                          {{ $errors->first('jml_hadir')}}
                                      </div>
                                      @endif
                                  </div>
  
                                <div class="form-group">
                                    <br><label class="col-lg-2 col-sm-2 control-label">Bukti</label>
                                    <div class="col-lg-10">
                                        <input type="file" name="bukti" placeholder="Bukti">
                                    </div>
                                </div>
                                @if($errors->has('bukti'))
                                    <div class="text-danger">
                                        {{ $errors->first('bukti')}}
                                    </div>
                                @endif

                            </div>
                            
                            <div class="modal-footer">
                                <button class="btn btn-info" type="submit"> Save&nbsp;</button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal"> Cancel</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
              </div>
  

            </div>

        <!-- Modal Edit -->
        @foreach($jadwals as $data)

<div class="modal fade" id="modalUpdate{{ $data->id_jadwal }}" tabindex="-1" aria-labelledby="modalUpdate" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Management Walas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/update/{{ $data->id_jadwal }}">

                {{ csrf_field() }}
                {{ method_field('PUT') }}
                
                <div class="form-group">
                    <label class="col-lg col-sm control-label">Materi Pertemuan</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="materi_pertemuan" value="{{$data->materi_pertemuan}}">
                        </div>
                                @error('materi_pertemuan')
                            <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                    <label class="col-lg col-sm control-label">Tanggal</label>
                                    <div class="col-lg-10">
                                        <input type="date" class="form-control" name="date" value="{{$data->date}}">
                                    </div>
                                    @if($errors->has('date'))
                                    <div class="text-danger">
                                        {{ $errors->first('date')}}
                                    </div>
                                    @endif
                                  </div>
    
                                  <div class="form-group">
                                      <label class="col-lg col-sm control-label">Jumlah Hadir</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" name="jml_hadir"  value="{{$data->jml_hadir}}">
                                      </div>
                                      @if($errors->has('jml_hadir'))
                                      <div class="text-danger">
                                          {{ $errors->first('jml_hadir')}}
                                      </div>
                                      @endif
                                    </div>
                            
                            <div class="modal-footer">
                                <button class="btn btn-info" type="submit"> Save&nbsp;</button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal"> Cancel</button>
                            </div>
                
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

        <!-- Modal Delete -->
             
        
    
@endsection

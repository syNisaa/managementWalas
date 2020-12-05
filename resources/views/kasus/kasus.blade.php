@extends('bagian.sidebar')

@section('content')
<button style="margin-top:2%;" class="btn btn-success" data-toggle="modal" data-target="#addData"> Tambah</button>
<a href="/kasus/cetak_pdf" class="btn btn-primary" target="_blank" style="margin-top:2%;">CETAK PDF</a>
 
    <table class="table table-striped" style="text-align:center; margin-top:2%;">
        <thead>
            <tr>
                <th>Nama Siswa </th>
                <th>Jenis Kasus</th>
                <th>Point Kasus</th>
                <th>Tanggal Kasus</th>
                <th>Opsi</th>
            </tr>
        </thead>
    <tbody>
        @foreach($kasussiswa as $k)
            <tr>
                <td>{{ $k->namaSiswa }}</td>
                <td>{{ $k->jenisKasus }}</td>
                <td>{{ $k->point }}</td>
                <td>{{ $k->Tanggal }}</td>
                <td>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#updateData{{ $k->id }}">Update</button>
                    <!-- <button class="btn btn-danger" data-toggle="modal" data-target="#hapusData">Hapus</button> -->
                    <a href="/kasus/hapus/{{ $k-> id }}"><button type="button" class="btn btn-danger">Hapus</button></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

    <!-- Modal -->
    <div class="modal" tabindex="-1" id="addData">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/kasus/tambah">

                {{ csrf_field() }}

                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa">

                    @if($errors->has('nama_siswa'))
                        <div class="text-danger">
                            {{ $errors->first('nama_siswa')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Jenis Kasus</label>
                    <input type="text" name="jenis_kasus" class="form-control" placeholder="Jenis Kasus">

                    @if($errors->has('jenis_kasus'))
                        <div class="text-danger">
                            {{ $errors->first('jenis_kasus')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Point Kasus</label>
                    <input type="text" name="point_kasus" class="form-control" placeholder="Point Kasus">

                    @if($errors->has('point_kasus'))
                        <div class="text-danger">
                            {{ $errors->first('point_kasus')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Tanggal Kasus</label>
                    <input type="date" name="tanggal" class="form-control" placeholder="Tanggal Kasus" id="date">
                </div>

                <div class="input-group mb-3">
                    <select class="custom-select" id="kode" name="kode">
                        <option selected>Choose...</option>
                        <option value="1234">XII RPL 1</option>
                        <option value="4321">XII RPL 2</option>
                        <option value="123">XI RPL 1</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
            </div>
            </div>
        </div>
        </div>

    @foreach($kasussiswa as $k)
    <div class="modal" tabindex="-1" id="hapusData">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Absensi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Yakin anda ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="/kasus/hapus/{{ $k-> id }}"><button type="button" class="btn btn-danger">Hapus</button></a>
            </div>
            </div>
        </div>
    </div>
    @endforeach

    @foreach ($kasussiswa as $k)
    <div class="modal" tabindex="-1" id="updateData{{$k->id}}">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Kasus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/kasus/update/{{$k->id}}" >
                        @csrf
                        @method('put')
                        <div class="form-group">
                        <label>Nama Siswa</label>
                        <input type="text" name="namasiswa" class="form-control" placeholder="Nama Siswa" value=" {{ $k->namaSiswa }}">

                        @if($errors->has('nama_siswa'))
                            <div class="text-danger">
                                {{ $errors->first('nama_siswa')}}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Jenis Kasus</label>
                        <input type="text" name="jeniskasus" class="form-control" placeholder="Jenis Kasus" value=" {{ $k->jenisKasus }}">

                         @if($errors->has('jenis_kasus'))
                            <div class="text-danger">
                                {{ $errors->first('jenis_kasus')}}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Point Kasus</label>
                        <input type="text" name="pointkasus" class="form-control" placeholder="Point Kasus" value=" {{ $k->point }}">

                         @if($errors->has('point_kasus'))
                            <div class="text-danger">
                                {{ $errors->first('point_kasus')}}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Tanggal Kasus</label>
                        <input type="date" name="tanggal" class="form-control" placeholder="Tanggal Kasus" id="tanggal" value=" {{ $k->Tanggal }}">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Perbarui Data</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
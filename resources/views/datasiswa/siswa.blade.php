@extends('bagian.sidebar')

@section('content')
    <table class="table table-striped" style="text-align:center; margin-top:4%;">
        <thead>
            <tr>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>No Handphone</th>
                <th>Email</th>
                <th>Status Siswa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswas as $j)
            <tr>
                <td>{{ $j->nama }}</td>
                <td>{{ $j->kelas }}</td>
                <td>{{ $j->phone }}</td>
                <td>{{ $j->email }}</td>
                <td>{{ $j->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
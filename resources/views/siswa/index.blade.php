@extends('layout')
@section('content')
    <div class="row">
        <div class="com-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel CRUD Siswa</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('siswa.create') }}" class="btn btn-success">Create Siswa</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>Nama Siswa</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th width="280px">Action</th>
        </tr>
        @forelse ($siswa as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->nama_siswa }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->no_telepon }}</td>
            <td>
                <a href="#" class="btn btn-info">Show</a>
                <a href="#" class="btn btn-warning">Update</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">Tidak ada data</td>
            </tr>
        @endforelse
       
    </table>
@endsection
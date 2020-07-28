@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>New Siswa</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('siswa.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Data: </strong>not save <br/>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
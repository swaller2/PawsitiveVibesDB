@extends('layouts.app')

@section('content')
<style>
    form{
        background:#f5f5f5;
        padding:20px;
        border-radius:10px;
    }

    input[type="submit"]{
        background:#0098cb;
        border:0px;
        border-radius:5px;
        color:#fff;
        padding:10px;
        margin:20px auto;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    &emsp;You are logged in!<br><br><br>

                    <div class="container">
                        <div class="content">
                            <h1>File Upload</h1>
                            <form action="{{ URL::to('upload') }}" method="POST" enctype="multipart/form-data">
                                <label>Select image to upload:</label>
                                <input type="file" name="photo" required>
                                <input type="submit" value="Upload" name="submit">
                                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                            </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

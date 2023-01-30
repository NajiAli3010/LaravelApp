@extends('layouts.app')

@section('content')

<div class="container mt-5">

    @if (session()->has('message'))
                    <p class="alert {{ session()->get('alert-class') }}">{{ session()->get('message') }}</p>
                @endif
                
                {{-- Feedback Form --}}
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="align-items-lg-center">Create Feedback </h1>

            <div class="card">

            <div class="container ">


                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
               

                <form action="/home" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1" class="form-label">Subject</label>
                        <input type="text" name="subject" class="form-control" id="exampleFormControlInput1"
                            placeholder="Your name" value="{{ old('subject') }}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Feedback</label>
                        <input class="form-control" name="feedback" id="exampleFormControlTextarea1"
                            rows="3" value="{{ old('feedback') }}">
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">File</label>
                        <input class="form-control" name="file" type="file" id="formFile">
                    </div>

                    <input type="submit" class="btn btn-success mb-3">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

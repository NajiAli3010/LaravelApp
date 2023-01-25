@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}

              <div class="container">
                <form action="/home" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Subject</label>
                        <input type="text" name="subject" class="form-control" id="exampleFormControlInput1" placeholder="Your name">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" name="feedback" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                     <div class="mb-3">
                        <input type="file" class="form-control" aria-label="file example" required>
                        <div class="invalid-feedback">File feedback</div>
                    </div>

                    <input type="submit" class="btn btn-primary mb-3">
                </form>
              </div>
        </div>
    </div>
</div>
@endsection

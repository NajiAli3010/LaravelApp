@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="col-md-12 col-lg-12">


            @foreach ($feeds as $feed)
                <article class="post vt-post">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                            <div class="post-type post-img">
                            </div>
                            <div class="author-info author-info-2">
                                <ul class="list-inline">
                                    <li>
                                        <div class="info">
                                            <p>ID:</p>
                                            <strong>{{ $feed->id }}</strong>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="author-info author-info-2">
                                <ul class="list-inline">
                                    <li>
                                        <div class="info">
                                            <p>Name:</p>
                                            <strong>{{ $feed->user->name }}</strong>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="author-info author-info-2">
                                <ul class="list-inline">
                                    <li>
                                        <div class="info">
                                            <p>UserEmail:</p>
                                            <strong>{{ $feed->user->email }}</strong>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="author-info author-info-2">
                                <ul class="list-inline">
                                    <li>
                                        <div class="info">
                                            <p>Posted on:</p>
                                            <strong>{{ $feed->created_at }}</strong>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="author-info author-info-2">
                                <ul class="list-inline">
                                    <li>
                                        <div class="info">
                                            <p>Time sent:</p>
                                            <strong>{{ $feed->updated_at }}</strong>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="author-info author-info-2">
                                <ul class="list-inline">
                                    <li>
                                        <div class="info">
                                            <p>File:</p>
                                            <a href="{{asset('docs/' . $feed->File)}}" target="_blank">link File</a>
                                            {{-- {{asset('docs/'.$feed->File)}} --}}
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                            <div class="caption">
                                <h2>Subject :</h2>
                                <h3 class="md-heading">{{ $feed->Subject }}</a></h3>
                                <p>{{ $feed->Feedback }} </p>
                            </div>
                        </div>

                </article>

            @endforeach
            <nav aria-label="Page navigation example">


            </nav>


            <div class="clearfix"></div>
            {{$feeds->links()}}
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="col-md-12 col-lg-12">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body booking_card">
                            <div class="">
    
                                <table id="example" class="display responsive wrap cell-border example" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Client ID</th>
                                            <th>Client Created Time</th>
                                            <th>Feedback Created Time</th>
                                            <th>Client Name</th>
                                            <th>Client Email</th>
                                            <th>Feedback Title</th>
                                            <th>Feedback Details</th>
                                            <th>Feedback File Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($feeds as $feed)
                                        <tr>
                                            <td>{{$feed->id}}</td>
                                            <td>{{$feed->user_id}}</td>
                                            <td>{{$feed->user->created_at}}</td>
                                            <td>{{$feed->created_at}}</td>
                                            <td>{{$feed->user->name}}</td>
                                            <td>{{$feed->user->email}}</td>
                                            <td>{{$feed->Subject}}</td>
                                            <td>{{$feed->Feedback}}</td>
                                            <td><a href="{{asset('docs/' . $feed->File)}}" target="_blank">link File</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-scripts')
<script
  src="https://code.jquery.com/jquery-3.6.3.min.js"
  integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
  crossorigin="anonymous"></script>
<script src="{{ URL::to('cdn.datatables.net/1.13.1/js/jquery.dataTables.js') }}"></script>

@endpush
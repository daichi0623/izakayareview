@extends('layouts.reviewtop')
@section('title', '居酒屋の口コミ')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>居酒屋口コミサイト</h2>
            </div>
         </div>
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="{{secure_asset('/img/walk.svg')}}" class="w-75">
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>新着記事</h2>
                    </div>
                    <div class="card-body">
                        <ul>
                            @foreach($words as $word)
                            <li>{{$word->title}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

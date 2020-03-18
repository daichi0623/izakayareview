@extends('layouts.reviewtop')
@section('title', '口コミする')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h2>口コミの投稿</h2>
                <form action="{{ action('Admin\WordController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>s
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                            <input type= "radio" name ="gender" value = "man"><b>男性</b>
                            <input type= "radio" name ="gender" value = "woman"><b>女性</b>
                        </p>
                    </div>
                    <div class="form=group row">
                            <label class="col-md-2">最寄駅</label>
                            <div class="col-md-6">
                            <input type="text" class="form=control" name="position" value="{{ old('position') }}">
                        </div>
                    </div>
                    <div class="form-group">
		                    <label for="food_id" class="">カテゴリー</label>
	                     	<div class="">
			                <select name="food_id" type="text" class="col-md-2">
				            <option></option>
				            <option value="1" name="1">和食</option>
				            <option value="2" name="2">洋食</option>
				            <option value="3" name="3">その他</option>
			               </select>
		                 </div>
   	                 </div>
                    <div class="form-group row">
                        <label class="col-md-2">口コミ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="10">{{ old('body') }}</textarea>
                        </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    
                    {{ csrf_field() }}
                    <div class="form-group row">
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.defalt')

@section('content')
<h2>検索条件を入力してください</h2>
<form action="{{ url('/serch')}}" method="post">
  {{ csrf_field()}}
  {{method_field('get')}}
  <div class="form-group">
    <label>義足ユーザーのための情報</label>
    <input type="text" class="form-control col-md-5" placeholder="検索したいキーワードを入力してください" name="name">
  </div>
  <div class="form-group">
    <label>年齢</label>
    <input type="text" class="form-control col-md-5" placeholder="年齢を入力してください" name="age" value="{{ old("name")}}">
  </div>

  <div class="form-group">
     <label>年齢の条件</label>
     <select class="form-control col-md-5" name="age_condition">
       <option selected value="0">選択...</option>
       <option value="1">以上</option>
       <option value="2">以下</option>
     </select>
   </div>

  <div class="form-group">
     <label>性別</label>
     <select class="form-control col-md-5" name="sex">
       <option selected value="0">選択...</option>
       <option value="1">男</option>
       <option value="2">女</option>
       <option value="3">なし</option>
     </select>
   </div>

  <button type="submit" class="btn btn-primary col-md-5">検索</button>
</form>
@if(session('flash_message'))
<div class="alert alert-primary" role="alert" style="margin-top:50px;">{{ session('flash_message')}}</div>
@endif
<div style="margin-top:50px;">
<h2>すべての情報</h2>
<table class="table">
  <tr>
    <th>義足ユーザーのための情報</th><th>年齢</th><th>性別</th>
  </tr>
@foreach($users as $user)
  <tr>
    <td>{{$user->name}}</td><td>{{$user->age}}</td><td>{{$user->sex}}</td>
  </tr>
@endforeach
</table>
</div>
@endsection


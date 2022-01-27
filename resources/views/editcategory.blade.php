
@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('msg'))
<div class="alert alert-success">{{Session::get('msg')}}</div>
@endif
    <form method="post" action="/updatecategory">
        @csrf()
        <div class="row form-group m-auto col-5">
      Asset name <input type="text" class="form-control" name="name" value="{{$data->name}}"/>
      @if($errors->has('name'))
      <label class="text-danger">{{$errors->first('name')}}</label>
      @endif
      </div>
      <div class="row form-group m-auto col-5">
    Description <textarea class="form-control" name="desc">{{$data->description}} </textarea>
    @if($errors->has('desc'))
      <label class="text-danger">{{$errors->first('desc')}}</label>
      @endif
      </div>
      <input type="hidden" name="uid" value="{{$data->id}}"/>
      <div class="text-center mt-2">
    <input type="submit" class="btn btn-success" value="update"/>
      </div>
    </form>

</div>
@endsection
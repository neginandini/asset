
@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('msg'))
<div class="alert alert-danger">{{Session::get('msg')}}</div>
@endif
    <form method="post" action="/uploadd" enctype="multipart/form-data">
      <h1 class="text-center text-primary">Upload image</h1>
        @csrf()
    
      <div class="row form-group m-auto col-5">
      Image <input type="file" class="form-control" name="image"/>
      @if($errors->has('name'))
      <label class="text-danger">{{$errors->first('name')}}</label>
      @endif
      </div>
      <input type="hidden" value="{{$data->id}}" name="uid"/>
      <div class="text-center mt-2">
    <input type="submit" class="btn btn-success" value="submit"/>
      </div>
    </form>

</div>
@endsection
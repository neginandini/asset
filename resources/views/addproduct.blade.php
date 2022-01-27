
@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('msg'))
<div class="alert alert-danger">{{Session::get('msg')}}</div>
@endif
    <form method="post" action="insertpro" enctype="multipart/form-data">
    <h2 class="text-center text-primary">Add Asset</h2>
        @csrf()
        <div class="row form-group m-auto col-5">
      Asset name <input type="text" class="form-control" name="name"/>
      @if($errors->has('name'))
      <label class="text-danger">{{$errors->first('name')}}</label>
      @endif
      </div>
      <div class="row form-group m-auto col-5">
          Asset Type
      <select name="category" class="form-control">
      <option>Asset Type</option>
        @foreach($data as $i)
        <option value="{{$i->id}}">{{$i->name}}</option>
        @endforeach
        @if($errors->has('category'))
      <label class="text-danger">{{$errors->first('category')}}</label>
      @endif
      </select>
      </div>
      <div class="row form-group m-auto col-5">
      Quantity <input type="number" class="form-control" name="quantity"/>
      @if($errors->has('quantity'))
      <label class="text-danger">{{$errors->first('quantity')}}</label>
      @endif
      </div>
      <div class="row form-group m-auto col-5">
      <h6> status</h6>
      </div>
      <div class="row form-group m-auto col-5">
      <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="status" value="1">Active
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="status" value="0">Inactive
  </label>
</div>
@if($errors->has('status'))
      <label class="text-danger">{{$errors->first('status')}}</label>
      @endif
      </div>
      <div class="row form-group m-auto col-5">
      Image <input type="file" class="form-control" name="image"/>
      @if($errors->has('image'))
      <label class="text-danger">{{$errors->first('image')}}</label>
      @endif
      </div>
      <div class="text-center mt-2">
    <input type="submit" class="btn btn-success" value="submit"/>
      </div>
    </form>

</div>
@endsection
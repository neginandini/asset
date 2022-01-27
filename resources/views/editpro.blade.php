
@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('msg'))
<div class="alert alert-danger">{{Session::get('msg')}}</div>
@endif
    <form method="post" action="/updatepro">
        @csrf()
        <div class="row form-group m-auto col-5">
      Asset name <input type="text" class="form-control" name="name" value="{{$data->name}}"/>
      @if($errors->has('name'))
      <label class="text-danger">{{$errors->first('name')}}</label>
      @endif
      </div>
      <div class="row form-group m-auto col-5">
          Asset Type
      <select name="category" class="form-control">
        <option value="">Asset Type</option>
        @foreach($cat as $i)
        <option value="{{$i->id}}" {{($i->id == $data->category_id)?'selected':''}}>{{$i->name}}</option>
        @endforeach
      </select>
      @if($errors->has('category'))
      <label class="text-danger">{{$errors->first('category')}}</label>
      @endif
      </div>
      <div class="row form-group m-auto col-5">
      Quantity <input type="number" class="form-control" name="quantity" value="{{$data->quantity}}"/>
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
    <input type="radio" class="form-check-input" name="status" value="1" {{($data->status == "1")?'checked':''}}>Active
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="status" value="0" {{($data->status == "0")?'checked':''}}>Inactive
  </label>
</div>
@if($errors->has('status'))
      <label class="text-danger">{{$errors->first('status')}}</label>
      @endif
      </div>
      <input type="hidden" name="uid" value="{{$data->id}}"/>
      <div class="text-center mt-2">
    <input type="submit" class="btn btn-success" value="submit"/>
      </div>
    </form>

</div>
@endsection
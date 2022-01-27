
@extends('layouts.app')

@section('content')
<div class="container">
    <form method="post" action="insertcategory">
    <h2 class="text-center text-primary">Add Category</h2>
        @csrf()
        <div class="row form-group m-auto col-5">
      Asset name <input type="text" class="form-control" name="name"/>
      @if($errors->has('name'))
      <label class="text-danger">{{$errors->first('name')}}</label>
      @endif
      </div>
      <div class="row form-group m-auto col-5">
    Description <textarea class="form-control" name="desc"> </textarea>
    @if($errors->has('desc'))
      <label class="text-danger">{{$errors->first('desc')}}</label>
      @endif
      </div>
      <div class="text-center mt-2">
    <input type="submit" class="btn btn-success" value="submit"/>
      </div>
    </form>

</div>
@endsection
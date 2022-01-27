@extends('layouts.app')
@section('content')
<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="/imge/{{$pro->id}}" class="btn btn-warning">Add Image</a>
                <a href="/assets" class="btn btn-secondary">Back</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
          @foreach($images as $i)
          <img src="{{url('uploads/'.$i->img_path)}}" height="100" width="100"/>
          @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
  @stop
  <!-- /.content-wrapper -->
 
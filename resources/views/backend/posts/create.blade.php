@extends('backend.layout.main')

@section('content')

<strong> Add a new post</strong>

@if(count($errors)>0)

  @foreach ($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
    {{$error}}
  </div>
  @endforeach

@endif
<form class="form"  action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <label  for="title">Add title</label>
  <input type="text" class="form-control mb-2 mr-sm-2" name="title" id="title" placeholder=" title">
  <br></br>

  <label for="content">Add content</label>
  <textarea class="form-control" name="content" id="content" rows="3" placeholder="content"></textarea>
  <br></br>

  <label for="photo">Add photo </label>
  <input type="file" class="form-control-file" name="photo" id="photo">
  <br></br>

  <button type="submit" class="btn btn-primary mb-2">save</button>
</form>

@endsection 
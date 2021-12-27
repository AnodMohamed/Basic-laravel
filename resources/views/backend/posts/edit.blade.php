@extends('backend.layout.main')

@section('content')

<strong> Edit the post</strong>
<form class="form"  action="{{ route('posts.update',['id'=>$posts->id]) }}"  method="POST" enctype="multipart/form-data">
    @csrf
  <label  for="title">Add title</label>
  <input type="text" class="form-control mb-2 mr-sm-2" name="title" id="title" placeholder=" title" value="{{ $posts->title }}">
  <br></br>

  <label for="content">Add content</label>
  <textarea class="form-control" name="content" id="content" rows="3" placeholder="content">{{ $posts->content }}</textarea>
  <br></br>

  <label for="photo">Add photo </label>
  <input type="file" class="form-control-file" name="photo" id="photo">
  <br></br>

  <button type="submit" class="btn btn-primary mb-2">update</button>
</form>

@endsection 
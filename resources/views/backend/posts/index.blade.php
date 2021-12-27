@extends('backend.layout.main')

@section('content')
<h1>index </h1>
<div class="container">
  <!-- Content here -->
  <div class="row">
    @foreach($posts as $post)
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ $post->photo }}" alt="{{ $post->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
                <a href="{{route('posts.edit',['id' => $post->id])}}" class="btn btn-primary">تعديل</a>
                <a href="{{route('posts.destroy',['id' => $post->id])}}" class="btn btn-default">حذف</a>
            </div>
        </div>
    </div>
    @endforeach
  </div>
</div>
@endsection  
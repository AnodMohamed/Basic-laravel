@extends('backend.layout.main')

@section('content')

<form>
    <h1>Contact us </h1>
  <div class="form-group">
    <label for="exampleInputSubject">Subject</label>
    <input type="text" class="form-control" id="exampleInputSubject" aria-describedby="SubjectHelp" placeholder="Subject email">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group form-check">
    <label for="exampleInputEmail1">Content </label>
     <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
@extends("layout_test.app")
@section("content")
<form action="/posts/{{$id}}" method="post">
@csrf
@method("patch")
  <div class="mb-3">
    <label  class="form-label">id</label>
    <input type="text" value="{{$id}}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">title</label>
    <input type="text"  value="{{$title}}" name="title">
  </div>
  <div class="mb-3">
    <label  class="form-label">description</label>
    <input type="text" value="{{$description}}" name="description">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@include("shared.error")
@endsection
@extends("layout_test.app")

@section("content")
<form action="/posts" method="post">
@csrf
  <div class="mb-3">
    <label  class="form-label">title</label>
    <input type="text"  name="title" value="{{ old('title') }}">
  </div>

  <div class="mb-3">
    <label  class="form-label">description</label>
    <input type="text" name="description" value="{{ old('description') }}">
  </div>

  <button type="submit" class="btn btn-primary">add</button>
</form>
@include("shared.error")
@endsection
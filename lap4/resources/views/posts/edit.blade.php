<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
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
</body>
</html>
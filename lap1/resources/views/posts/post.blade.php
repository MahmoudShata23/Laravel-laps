<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
  <td><a href="/create">addpost</a></td>
  <table class="table">
    <tr>

      <th>id</th>
      <th>Name</th>
      <th>Email</th>
      <th>gender</th>

    </tr>

    @foreach ($data as $val)

    <tr>
      <td>{{ $val['id'] }}</td>
      <td>{{ $val['name'] }}</td>
      <td>{{ $val['mail'] }}</td>
      <td>{{ $val['gender'] }}</td>
      <td><a href="/show/{{ $val['id'] }}">show</a></td>
      <td><a href="/edit/{{ $val['id'] }}">edit</a></td>
    </tr>


    @endforeach


  </table>
</body>

</html>
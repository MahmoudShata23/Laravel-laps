<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
<td><a href= "posts/create">addpost</a></td>
<table class="table"> 
    <tr>

            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>created_at</th>
            <th>updated_at</th>
            
    </tr>
  
        @foreach ($data as  $val) 
        
           <tr>
           <td>{{ $val['id'] }}</td>
           <td>{{ $val['title'] }}</td>
           <td>{{ $val['description'] }}</td>
           <td>{{ $val['created_at'] }}</td>
           <td>{{ $val['updated_at'] }}</td>
           <td><a href= "/posts/{{ $val['id'] }}">show</a></td>
           <td><a href= "/posts/{{ $val['id'] }}/edit">edit</a></td>
           
           <td>
                   <form method="post" action="/posts/{{ $val['id'] }}">
                   @csrf
                   @method("delete")
                           <input type="submit" name="delete" value="delete">
                   </form>
           </td>
           </tr>
        
  
        @endforeach
    

</table>
</body>
</html>
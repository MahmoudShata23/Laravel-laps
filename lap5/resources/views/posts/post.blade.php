@extends("layout_test.app")

@section("content")
<td><a href= "posts/create">addpost</a></td>
<table class="table"> 
    <tr>

            <th>id</th>
            <th>user_name</th>
            <th>user_email</th>
            <th>title</th>
            <th>description</th>
            <th>created_at</th>
            <th>updated_at</th>
            
    </tr>
  
        @foreach ($post as  $val) 
        
           <tr>
           <td>{{ $val->id}}</td>
           <td>{{ $val->user->name}}</td>
           <td>{{ $val->user->email}}</td>
           <td>{{ $val['title'] }}</td>
           <td>{{ $val['description'] }}</td>
           <td>{{ $val['created_at'] }}</td>
           <td>{{ $val['updated_at'] }}</td>
           <!--  -->
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
@endsection

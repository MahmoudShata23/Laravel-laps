<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $post=post::all();
        // return $post;
        return view('posts.post', ['post' =>  $post]);

    }

    public function show($id)
    {
        $data=post::find($id);
        return view('posts.show',$data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 
    public function store(StorePostRequest $request)
    {
        
        // $postdir=post::create([
        //       'title' => $request->title,
        //      'description' => $request->description
        //      ""]
        //     );

        // $validated = $request->validate([
        //     'title' => 'required|min:2',
        //     'description' => 'required',
           
        // ]);
        $posts=new post;
        $posts->title = $request->title;
       
        $posts->description = $request->description;
        $posts->user_id = 2;
        // $posts->name =  $user->name;
        $posts->save();
        // return $posts;
    
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postedit=post::find($id);
    
     return view('posts.edit', $postedit);
    }

    public function update(StorePostRequest $request, $id)
    {
        
        $data = post::find($id);
        $data->title = $request->get('title');
        $data->description = $request->get('description');
        $data->save();
 
        return redirect('/posts');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = post::find($id);
        $data->delete(); 
        return redirect('/posts');  
    }
}

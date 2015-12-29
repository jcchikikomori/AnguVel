<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//IMPORTANT when manipulating JSON data using Response()
use App\Comment;
use App\Http\Input;

class CommentController extends Controller
{
    /**
     * Send back all comments as JSON
     *
     * @return Response
     */
    public function index()
    {
        return Response()->json(Comment::get());
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Comment::create(array(
            'author' => $request->input('author'),
            'text' => $request->input('text')
        ));
    
        return Response()->json(array('success' => true));
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Comment::destroy($id);
    
        return Response()->json(array('success' => true));
    }
}

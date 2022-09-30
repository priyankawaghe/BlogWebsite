<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Post;
use App\Models\Postimages;


class ResourceController extends Controller
{

    public function index()
    {
        return view('admin.addPost');
    }

    public function storePost(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'heading' => "required",
            'tag' => "required",
            'details' => 'required',
            'files' => 'required',

        ]);
        if ($validator->fails()) {

            $request->session()->flash('error', 'Some Errors in the form');
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $postData = array('heading' => $request->heading, 'description' => $request->details, 'tag' => $request->tag);
        $data = Post::create($postData);

        if ($request->hasfile('files')) {
            foreach ($request->file('files') as $file) {
                $filename = time() . '-' . $file->getClientOriginalName();
                $file->move(public_path('upload'), $filename);
                $filenew = $filename;
                $imageData = array('post_id' => $data->id, 'images' => $filenew);
                Postimages::create($imageData);
            }
        }
        return back()->with('success', 'Post created successfully!');
    }
}

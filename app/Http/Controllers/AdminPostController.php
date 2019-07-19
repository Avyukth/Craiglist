<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreateRequest;
use App\Photo;
use App\post;
use App\postCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

//use PhpParser\Node\Expr\PostDec;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $posts = post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
//        return view('admin.posts.create');
        if ((Auth::user() != null)) {
            $category = postCategory::pluck('category_type', 'id')->all();
            return view('admin.posts.create', compact('category'));
        } else {
            $posts = post::all();
            return view('admin.posts.index', compact('posts'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(PostCreateRequest $request)
    {
        $input = $request->all();
        if ((Auth::user() != null)) {

            if ($file = $request->file('photo_id')) {

                $name = time() . $file->getClientOriginalName();
                $file->move('images', $name);
                $photo = Photo::create(['file' => $name]);
                $input['photo_id'] = $photo->id;
            }

            post::create($input);
        }

        return redirect('admin/posts');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {

        $posts = post::findOrFail($id);

//        dd(Auth::user());
        if ((Auth::user() != null) and ($posts->users_id == Auth::user()->id)) {
            $category = postCategory::pluck('category_type', 'id')->all();
            return view('admin.posts.edit', compact('posts', 'category'));
        }
        return redirect('admin/posts');


    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $post = post::findOrFail($id);

        $input = $request->all();
        if ($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file' => $name]);
            $input['photo_id'] = $photo->id;
        }
        $post->update($input);
        $post->price = $input['price'];
        $post->users_id = $input['users_id'];

        $post->save();
        return redirect('admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $post = post::findOrFail($id);
        unlink(public_path() . $post->photo->file);
        $post->delete();
        return redirect('/admin/posts');
    }
}

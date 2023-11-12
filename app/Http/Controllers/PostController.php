<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('dashboard.post.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        if ($post) {
            return view('dashboard.post.show', compact('post'));
        } else {
            return back()->with('error', 'Data post tidak ditemukan');
        }
    }

    public function create()
    {
        $users = User::all();
        return view('dashboard.post.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_creator' => 'required|exists:users,id',
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        } else {
            $id = Str::uuid();
            $data = $request->only([
                'id_creator',
                'title',
                'content',
            ]);
            $data['id'] = $id;

            $image = $request->file('image');
            $imageFileName = $id . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('post_images'), $imageFileName);
            $data['image'] = $imageFileName;

            $dataCreated = Post::create($data);
            if ($dataCreated) {
                return redirect(route('index-dashboard-post'))->with('success', 'Post berhasil dibuat.');
            } else {
                return back()->with('error', 'Post gagal dibuat');
            }
        }
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $users = User::all();
        return view('dashboard.post.edit', compact('post', 'users'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_creator' => 'required|exists:users,id',
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        } else {
            $post = Post::find($id);
            if (!$post) {
                return back()->with('error', 'Data post tidak ditemukan');
            } else {
                $data = $request->only([
                    'id_creator',
                    'title',
                    'content',
                ]);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageFileName = $id . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('post_images'), $imageFileName);
                $data['image'] = $imageFileName;

                if (File::exists(public_path('post_images/' . $post->image))) {
                    File::delete(public_path('post_images/' . $post->image));
                }
            }

            $dataUpdated = $post->update($data);
            if ($dataUpdated) {
                return redirect(route('index-dashboard-post'))->with('success', 'Post berhasil diedit.');
            } else {
                return back()->with('error', 'Post gagal diedit');
            }
        }
    }
}

public function destroy($id)
{
    $post = Post::find($id);
    if (!$post) {
        return back()->with('error', 'Data post tidak ditemukan');
    }
    if (File::exists(public_path('post_images/' . $post->image))) {
        File::delete(public_path('post_images/' . $post->image));
    }
    $post->delete();
    return redirect(route('index-dashboard-post'))->with('success', 'Post berhasil dihapus.');
}
}

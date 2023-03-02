<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Alert;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blogs.index', [
            'blogs' => Blogs::latest()->paginate(6),
            'pageTitle' => 'Blogs'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create', ['pageTitle' => 'New Blogs']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([

            // Blog
            'article_title' => 'required',
            'type_content' => 'required',
            'article_content' => 'required',
            'status_content' => 'required',
            'image_content' => 'required',
        ]);


        $data['article_title'] = $request->article_title;
        $data['type_content'] = $request->type_content;
        $data['article_content'] = $request->article_content;
        $data['status_content'] = $request->status_content;
        $data['slug_content'] = Str::slug($request->article_title);
        $data['article_tags'] = '';

        if($request->hasFile('image_content')) {
            $data['image_content'] = $request->file('image_content')->store('blogs', 'public');
        }

        Blogs::create($data);
        Alert::success('Success','Blog created successfully');
        return redirect('./admin/blogs');
        // return redirect('./admin/blogs')->with('message', 'Blog created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Show trash
        if($id == 'trash')
        {
            $blog = DB::table('blogs')
            ->where('deleted_at', '!=', null)
            ->get();
            return view('blogs.trash', [

                'blogs' => $blog,
                'pageTitle' => 'Detail Delete Log']);
        }

        $blog = DB::table('blogs')
                ->where('id', '=', $id)
                ->get();
        if($blog == null)
            {
                return redirect('admin/blogs');
            }

        return view('blogs.show', [
            'blog' => $blog,
            'id' => $id,
            'pageTitle' => 'Detail Blog'
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = DB::table('blogs')
        ->where('id', '=', $id)
        ->get();
        return view('blogs.edit', [
            'blog' => $blog,
            'id' => $id,
            'pageTitle' => 'Edit Blog'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogs $blogs)
    {

        $formFields = $request->validate([

            // Blog
            'article_title' => 'required',
            'type_content' => 'required',
            'article_content' => 'required',
            'status_content' => 'required',
        ]);


        $data['article_title'] = $request->article_title;
        $data['type_content'] = $request->type_content;
        $data['article_content'] = $request->article_content;
        $data['status_content'] = $request->status_content;
        $data['article_tags'] = '';


        if($request->hasFile('image_content')) {
            $data['image_content'] = $request->file('image_content')->store('blogs', 'public');
        }

        $blogs->update($data);


        Alert::success('Success','Blog updated successfully');
        return redirect('./admin/blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['deleted_at'] = date('Y-m-d H:i:s');
        $update = DB::table('blogs')
        ->where('id', $id)
        ->update($data);
        Alert::error('Delete','Blog deleted successfully');
        return redirect('./admin/blogs');
    }
}

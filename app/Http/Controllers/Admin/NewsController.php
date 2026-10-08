<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use GrahamCampbell\ResultType\Success;
use Illuminate\Container\Attributes\Storage as AttributesStorage;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::latest()->get();

        return view(
            'admin.news.index',
            compact('news')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'nullable',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
            'is_published' => 'nullable|boolean',
        ]);

        $validated['slug'] = Str::slug(
            $validated['title']
        );

        if ($request->hasFile('image')) {

            $validated['image'] =
                $request->file('image')
                    ->store('news','public');
        }

        if ($request->boolean('is_published')) {

            $validated['published_at'] = now();

        } else {

            $validated['published_at'] = null;
        }

        News::create($validated);

        return redirect()
            ->route('admin.news.index')
            ->with(
                'success',
                'Berita berhasil ditambahkan.'
            );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $string)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view(
            'admin.edit.news',
            compact('news')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'nullable',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
            'is_published' => 'nullable|boolean',
        ]);

        $validated['slug'] = Str::slug(
            $validated['title']
        );

        if ($request->hasFile('image')) {
            
            if ($news->image) {
                Storage::disk('public')
                    ->delete($news->image);
            }

            $validated['image'] =
                $request->file('image')
                ->store('news','public');
        }

        if ($request->boolean('is_published')) {
            
            if (!$news->published_at) {
                $validated['published_at'] = now();
            }
        } else {
            $validated['published_at'] = null;
        }

        $news->update($validated);

        return redirect()
            ->route('admin.news.index')
            ->with(
                'success',
                'Berita berhasil diperbarui.'
            );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        if ($news->image) {
            Storage::disk('public')
                ->delete($news->image);
        };

        $news->delete();

        return redirect()
            ->route('admin.news.index')
            ->with(
                'success',
                'Berita berhasil dihapus.'
            );
    }
}

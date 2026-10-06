@extends('layouts.app')

@section('title', 'Edit Berita')

@section('content')

<section class="section">

    <div class="container">

        <h1>
            Edit Berita
        </h1>

        <form
            action="{{ route(
                'admin.news.update',
                $news
            ) }}"
            method="POST"
            enctype="multipart/form-data"
            class="admin-form"
        >

            @csrf

            @method('PUT')

            <div class="form-group">

                <label>
                    Judul Berita
                </label>

                <input
                    type="text"
                    name="title"
                    value="{{ old(
                        'title',
                        $news->title
                    ) }}"
                    required
                >

            </div>

            <div class="form-group">

                <label>
                    Ringkasan
                </label>

                <textarea
                    name="excerpt"
                    rows="4"
                >{{ old(
                    'excerpt',
                    $news->excerpt
                ) }}</textarea>

            </div>

            <div class="form-group">

                <label>
                    Isi Berita
                </label>

                <textarea
                    name="content"
                    rows="12"
                    required
                >{{ old(
                    'content',
                    $news->content
                ) }}</textarea>

            </div>

            @if ($news->image)

                <div class="form-group">

                    <p>
                        Gambar saat ini:
                    </p>

                    <img
                        src="{{ asset(
                            'storage/' . $news->image
                        ) }}"
                        alt="{{ $news->title }}"
                        class="preview-image"
                    >

                </div>

            @endif

            <div class="form-group">

                <label>
                    Ganti Gambar
                </label>

                <input
                    type="file"
                    name="image"
                    accept="image/*"
                >

                <small>
                    Kosongkan jika tidak ingin
                    mengganti gambar.
                </small>

            </div>

            <div class="form-group">

                <label class="checkbox-label">

                    <input
                        type="checkbox"
                        name="is_published"
                        value="1"
                        @checked($news->is_published)
                    >

                    Publikasikan berita

                </label>

            </div>

            <button
                type="submit"
                class="btn"
            >
                Simpan Perubahan
            </button>

        </form>

    </div>

</section>

@endsection
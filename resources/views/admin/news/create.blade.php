@extends('layouts.app')

@section('title', 'Tambah Berita')

@section('content')

<section class="section">

    <div class="container">

        <h1>
            Tambah Berita
        </h1>

        <form
            action="{{ route('admin.news.store') }}"
            method="POST"
            enctype="multipart/form-data"
            class="admin-form"
        >

            @csrf

            <div class="form-group">

                <label>
                    Judul Berita
                </label>

                <input
                    type="text"
                    name="title"
                    value="{{ old('title') }}"
                    required
                >

                @error('title')
                    <small class="error">
                        {{ $message }}
                    </small>
                @enderror

            </div>

            <div class="form-group">

                <label>
                    Ringkasan
                </label>

                <textarea
                    name="excerpt"
                    rows="4"
                >{{ old('excerpt') }}</textarea>

            </div>

            <div class="form-group">

                <label>
                    Isi Berita
                </label>

                <textarea
                    name="content"
                    rows="12"
                    required
                >{{ old('content') }}</textarea>

                @error('content')
                    <small class="error">
                        {{ $message }}
                    </small>
                @enderror

            </div>

            <div class="form-group">

                <label>
                    Gambar
                </label>

                <input
                    type="file"
                    name="image"
                    accept="image/*"
                >

                <small>
                    Maksimum 2 MB.
                </small>

                @error('image')
                    <small class="error">
                        {{ $message }}
                    </small>
                @enderror

            </div>

            <div class="form-group">

                <label class="checkbox-label">

                    <input
                        type="checkbox"
                        name="is_published"
                        value="1"
                    >

                    Publikasikan berita

                </label>

            </div>

            <button
                type="submit"
                class="btn"
            >
                Simpan Berita
            </button>

        </form>

    </div>

</section>

@endsection
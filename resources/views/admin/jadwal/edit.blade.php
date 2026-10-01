@extends('layouts.app')

@section('title', 'Edit Jadwal')

@section('content')

<section class="section">

    <div class="container">

        <h1>
            Edit Jadwal Ibadah
        </h1>

        <form
            action="{{ route('jadwal.update', $jadwal) }}"
            method="POST"
        >
        
        @csrf
        @method('PUT')

        <div>
            <label>
                Nama Ibadah
            </label>

            <input
                type="text"
                name="title"
                value="{{ $jadwal->title }}"
                required
            >
        </div>

        <div>
            <label>
                Hari
            </label>

            <input
                type="text"
                name="day"
                value="{{ $jadwal->day }}"
                required
            >
        </div>

        <div>
            <label>
                Jam
            </label>

            <input
                type="time"
                name="time"
                value="{{ $jadwal->time }}"
                required
            >
        </div>

        <div>
            <label>
                Lokasi
            </label>

            <input
                type="text"
                name="location"
                value="{{ $jadwal->location }}"
            >
        </div>

        <div>
            <label>
                Deskripsi
            </label>

            <textarea
                name="description"
            >{{ $jadwal->description }}</textarea>
        </div>

        <button type="submit">
            Simpan Perubahan
        </button>

        </form>

    </div>

</section>

@endsection
@extends('layouts.app')

@section('title', 'Tambah Jadwal')

@section('content')

<section class="section">

    <div class="container">

        <h1>
            Tambah Jadwal Ibadah
        </h1>

        <form
            action="{{ route('jadwal.store') }}"
            method="POST"
        >

            @csrf

            <div>
                <label>
                    Nama Ibadah
                </label>

                <input
                    type="text"
                    name="title"
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
                >
            </div>


            <div>
                <label>
                    Deskripsi
                </label>

                <textarea
                    name="description"
                ></textarea>
            </div>


            <button type="submit">
                Simpan
            </button>

        </form>

    </div>

</section>

@endsection
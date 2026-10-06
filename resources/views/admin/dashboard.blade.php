@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')

<section class="section">

    <div class="container">

        <div class="admin-header">

            <div>
                <p class="section-label">
                    ADMINISTRATOR
                </p>

                <h1>
                    Dashboard
                </h1>

                <p>
                    Selamat datang,
                    {{ auth()->user()->name }}.
                </p>
            </div>

            <form
                action="{{ route('logout') }}"
                method="POST"
            >
                @csrf

                <button
                    type="submit"
                    class="btn"
                >
                    Logout
                </button>
            </form>

        </div>

        <div class="admin-cards">

            <a
                href="{{ route('jadwal.index') }}"
                class="admin-card"
            >
                <h3>
                    Jadwal Ibadah
                </h3>

                <p>
                    Kelola jadwal ibadah
                    jemaat.
                </p>
            </a>

            <a 
                href="{{ route('admin.news.index') }}"
                class="admin-card"
            >
                <h3>
                    Berita
                </h3>

                <p>
                    Kelola berita seputar GPIB Ciseeng.
                </p>
            </a>

            <div class="admin-card">
                <h3>
                    Galeri
                </h3>

                <p>
                    Segera tersedia.
                </p>
            </div>

        </div>

    </div>

</section>

@endsection
@extends('layouts.app')

@section('title', 'Kelola Jadwal Ibadah')

@section('content')

<section class="section">

    <div class="container">

        <h1>
            Kelola Jadwal Ibadah
        </h1>

        <a href="{{ route('jadwal.create') }}">
            + Tambah Jadwal
        </a>

        <div class="admin-table">

            @foreach ($schedules as $schedule)

                <div class="admin-row">

                    <div>
                        <strong>
                            {{ $schedule -> title }}
                        </strong>

                        <br>

                        {{ $schedule -> day }}
                        -
                        {{ \Carbon\Carbon::parse($schedule->time)->format('H.i') }}
                    </div>

                    <div>
                        <a
                             href="{{ route('jadwal.edit', $schedule) }}"
                        >
                            Edit
                        </a>
                        
                        <form
                            href="{{ route('jadwal.edit', $schedule) }}"
                            methode="POST"
                            style="display: inline"
                        >

                            @csrf

                            @method('DELETE')

                            <button type="submit">
                                Hapus
                            </button>

                        </form>
                    
                    </div>

                </div>
            
            @endforeach

        </div>

    </div>

</section>

@endsection
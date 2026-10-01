@extends ('layouts.app')

@section('title', 'Login Admin')

@section('content')

<section class="auth-section">

    <div class="auth-card">

        <div class="auth-header">

            <p class="section-label">
                Administrator
            </p>

            <h1>
                Login
            </h1>

            <p>
                Silakan masuk untuk mengelola website GPIB Ciseeng.
            </p>

        </div>

        @if ($errors->any())
            <div class="alert-error">
                {{ $errors->first() }}
            </div>
        @endif

        <form
            action="{{ route('login.process') }}"
            method="POST"
        >

            @csrf

            <div class="form-group">

                <label for="email">
                    Email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                >

            </div>

            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                >

            </div>

            <button
                type="submit"
                class="btn"
            >
                Masuk
            </button>

        </form>

    </div>

</section>

@endsection
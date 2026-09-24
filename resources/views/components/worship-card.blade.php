<div class="card worship-card">

    <h3>
        {{ $title }}
    </h3>

    <p>
        {{ $day }}
    </p>

    <strong>
        {{ \Carbon\Carbon::parse($time)->format('H.i') }}
        WIB
    </strong>
    
</div>
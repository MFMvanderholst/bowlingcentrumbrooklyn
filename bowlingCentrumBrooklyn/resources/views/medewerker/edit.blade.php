@vite(['resources/css/user-dashboard.css'])

<main>
    <h4>Detail Uitslag</h4>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="medewerker/{id}" method="post">
    @csrf
    @method('PUT')
        <label for="aantalpunten">Aantalpunten: </label>
        <input type="text" name="aantalpunten" id="aantalpunten" value="{{ $points->aantalPunten }}">
        <button type="submit">Wijzigen</button>
    </form>
</main>
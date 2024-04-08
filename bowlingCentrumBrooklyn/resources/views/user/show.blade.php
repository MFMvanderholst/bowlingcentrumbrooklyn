@if ($date == null)
    <p>Er is geen uitslag beschikbaar voor deze geselecteerde datum</p>
    @else
    <table>
        <thead>
            <tr>
                <th>Voornaam</th>
                <th>Tussenvoegsel</th>
                <th>Achternaam</th>
                <th>Aantalpunten</th>
                <th>datum</th>
            </tr>
        </thead>
        <tbody>
            @foreach($persoon as $persoon)
            <tr>
                <td>{{ $persoon->voornaam }}</td>
                <td>{{ $persoon->tussenvoegsel }}</td>
                <td>{{ $persoon->achternaam }}</td>
                @endforeach
                @foreach($points as $points)
                <td>{{ $points->aantalPunten }}</td>
                @endforeach
                @foreach($date as $date)
                <td>{{ $date->datum }}</td>
                @endforeach
            </tr>


        </tbody>
    </table>
@endif
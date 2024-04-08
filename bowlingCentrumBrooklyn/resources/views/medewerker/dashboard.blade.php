@vite(['resources/css/user-dashboard.css'])

<main>
    <h4>Overzicht Spelers</h4>

    <table>
        <thead>
            <tr>
                <th>Naam</th>
                <th>Aantalpunten</th>
                <th>ReserveringsId</th>
                <th>Wijzigen</th>
                
            </tr>
        </thead>
        <tbody>
          
            @foreach($result as $result)
           
            <tr>
                <td>{{ $result->voornaam }} {{ $result->tussenvoegsel }} {{ $result->achternaam }}</td>
                <td>{{ $result->aantalPunten }}</td>
                <td>{{ $result->id }}</td>
                <td><a href="medewerker/{{ $result->id }}/edit"><img src="{{ asset('img/edit.png') }}" alt="edit"></a></td>
            </tr>
            @endforeach
           
          
            
          
        </tbody>
    </table>
</main>
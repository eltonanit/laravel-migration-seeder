@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Treni - Laravel Migration</h1>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Compagnia</th>
                        <th>Stazione partenza</th>
                        <th>Stazione arrivo </th>
                        <th>Orario partenza</th>
                        <th>prario arrivo</th>
                        <th>Codice treno</th>
                        <th>Numero vagoni</th>
                        <th>In orario</th> 
                        <th>Cancellato</th>
                    </tr>
                </theady>
               <tbody>
                 @foreach ($trains as $train)
                 <tr>
                  <td>{{ $train->id }}</td>
                 <td>{{ $train->company }}</td>
                 <td>{{ $train->departure_station }}</td>
                 <td>{{ $train->arrival_station }}</td>
                 <td>{{ $train->departure_time }}</td>
                 <td>{{ $train->arrival_time }}</td>
                 <td>{{ $train->train_code }}</td>
                 <td>{{ $train->train_wagons }}</td>
                 <td>{{ $train->on_time }}</td>
                 <td>{{ $train->cancelled }}</td>
                </tr>
                 @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@extends ('pagPlantilla')

@section ('ttulo')
    <h1 class="display-4">Pagina de galeria </h1>
@endsection

@section ('seccion')
    <h2>Lista </h2>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th $cope="col">Id</th>
                <th $cope="col">Codigo</th>
                <th $cope="col">Apellidos</th>
                <th $cope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($xAlumnos as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->codEst }}</td>
                <td>
                    <a href="{{ route('Estudiante.xDetalle' , $item->id)}}">
                        {{ $item->apeEst }}, {{ $item->nomEst }}</td>
                    </a>
                </td>
                <td>@mdo</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection



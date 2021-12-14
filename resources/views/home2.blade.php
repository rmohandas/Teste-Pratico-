<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Proprietário</th>
      <th scope="col">Modelo</th>
      <th scope="col">Marca</th>
      <th scope="col">Ano</th>
      <th scope="col">Renavam</th>
    </tr>
  </thead>
  <tbody>
  @foreach( $veiculos as $veiculo )
          <option value="{{ $veiculo->modelo }}"></option>
            
  <tr>
      <th scope="row">{{ $veiculo->id }}</th>
      <td>{{ $veiculo->proprietario }}</td>
      <td>{{ $veiculo->modelo }}</td>
      <td>{{ $veiculo->marca }}</td>
      <td>{{ $veiculo->ano }}</td>
      <td>{{ $veiculo->renavam }}</td>
    </tr>
@endforeach   
  </tbody>
</table>

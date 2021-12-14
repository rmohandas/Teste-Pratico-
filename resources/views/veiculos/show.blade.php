<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cadastra Veiculos</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="card">
  <div class="card-header">
    <h5>Administração de veiculos</h5>
  </div>
  <div class="card-body">
    <h5 class="card-title">Atualizar Veiculos</h5>

  <form action="{{ route('alterar_veiculo', ['id' => $veiculo->id]) }} " method="POST">
    @csrf
    <div class="form-goroup">
       
       <label for="exampleInputProprietario">Proprietário:</label>
       <select name="proprietario" class="form-control" aria-label="Default select example" id="exampleInputProprietario" aria-describedby="emailHelp" style="width:50%;" placeholder="Digite o nome do proprietário">
          <option selected>Selecione o proprietário do veiculo</option>
          @foreach( $proprietarios as $proprietario )
          <option value="{{ $veiculo->name }}">{{ $veiculo->name }}</option>
          @endforeach
      </select>   
                
      <label for="exampleInputModelo">Modelo:</label>
      <input type="text" name="modelo" class="form-control" id="exampleInputModelo" aria-describedby="emailHelp" style="width:50%;" value="{{ $veiculo->modelo }}"> <br>

      <label for="exampleInputMarca">Marca:</label>
      <input type="text" name="marca" class="form-control" id="exampleInputMarca" aria-describedby="emailHelp" style="width:50%;" value="{{ $veiculo->marca }}"> <br>

      <label for="exampleInputAno">Ano:</label>
      <input type="text" name="ano" class="form-control" id="exampleInputAno" aria-describedby="emailHelp" style="width:50%;" value="{{ $veiculo->ano }}"> <br>

      <label for="exampleInputRenavam" >Renavam:</label>
      <input type="text" name="renavam" class="form-control" id="exampleInputRenavam" aria-describedby="emailHelp" style="width:50%;" value="{{ $veiculo->renavam }}"> <br>

    </div>
    <button class="btn btn-primary">Salvar</button>                     
  </form>        
    
  </div>
</div>

   <h1></h1>
    
            
                
        
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
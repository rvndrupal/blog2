<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <h2>Enviar Mensaje</h2>
                <form action="{{ route('contacto.store') }}" method="POST">
                        {{ csrf_field() }}
                    {{-- b4-form-group-text y sale todo --}}
                    <div class="form-group">
                      <label for="">Nombre</label>
                      <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" value="{{ old('nombre') }}">   
                      {{ $errors->first('nombre') }}                  
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ old('email') }}">   
                        {{ $errors->first('email') }}                   
                    </div>

                    <div class="form-group">
                        <label for="">Mensaje</label>
                        <textarea name="mensaje" id="" cols="30" rows="10" class="form-control">{{ old('mensaje') }}</textarea>  
                        {{ $errors->first('mensaje') }}                   
                    </div>
                    <div class="form-group">
                           <input type="submit" value="Enviar Formulario" class="btn btn-primary">               
                    </div>
                    
                </form>
            </div>
        </div>

    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Material Design for Bootstrap fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

    <!-- Material Design for Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.0.0-beta.3/dist/css/bootstrap-material-design.min.css" integrity="sha384-k5bjxeyx3S5yJJNRD1eKUMdgxuvfisWKku5dwHQq9Q/Lz6H8CyL89KF52ICpX4cL" crossorigin="anonymous">
  </head>
  <body>
    <div class="row">
            <div class="col-12">
                <div class="card text-white bg-secondary mb-3">
                    <div class="card-body">
                        <img src="{!!asset('img/logo.png')!!}">
                    </div>
                </div>
            </div>    
        </div>
    <div class="container">
        <div class="row">
            <div class="col-6 mt-3">
                <div class="card">
                    <div class="card-body">

                        <h3>Registro de sitios</h3>
                        <p>Todos los campos son obligatorios para el registro</p>

                        {!! Form::open(['route' => 'store','method' => 'POST', 'files' => true]) !!}

                            <div class="form-group">
                                {!! Form::label('Nombre','Nombre del Sitio') !!}
                                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Sitio', 'required']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('Informacion', 'Direccion del sitio')!!}
                                {!! Form::text('informacion',  null, ['class' => 'form-control', 'placeholder' => 'Direccion del sitio','required']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('telefono', 'Telefono del sitio')!!}
                                {!! Form::text('telefono',  null, ['class' => 'form-control', 'placeholder' => 'Telefono del sitio','required']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('admin', 'Nombre del administrador')!!}
                                {!! Form::text('admin',  null, ['class' => 'form-control', 'placeholder' => 'Nombre del administrador','required']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('image', 'Agregar foto del sitio') !!}<br>
                                {!! Form::file('', null, ['class' => 'btn-raised btn btn-success btn-sm']) !!}
                            </div>



                            <div class="form-group ">
                                {!! Form::submit('Enviar datos a la App', ['class'=>'btn btn-raised btn-info']) !!}
                            </div>

                        {!! Form::close() !!}

                        <p>Los datos se solicitan en formulario web y se envian a la aplicacion movil</p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card text-white bg-secondary mb-3">
                    <div class="card-body text-center">
                        <img src="{!!asset('img/logo.png')!!}">
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.5/dist/umd/popper.js" integrity="sha384-KlVcf2tswD0JOTQnzU4uwqXcbAy57PvV48YUiLjqpk/MJ2wExQhg9tuozn5A1iVw" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.0.0-beta.3/dist/js/bootstrap-material-design.js" integrity="sha384-hC7RwS0Uz+TOt6rNG8GX0xYCJ2EydZt1HeElNwQqW+3udRol4XwyBfISrNDgQcGA" crossorigin="anonymous"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
  </body>
</html>
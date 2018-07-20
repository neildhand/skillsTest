<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Skills Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="row">

            {!! Form::open(['method'=>'POST', 'action' => 'DataController@store']) !!}
        
                <div class="form-group">
                    {!! Form::label('product_name', 'Product Name:') !!}

                    {!! Form::text('product_name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('quantity', 'Quantity In Stock:') !!}

                    {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('price', 'Price Per Item:') !!}

                    {!! Form::text('price', null, ['class' => 'form-control']) !!}
                </div>  

        </div>
        
            <div class="form-group">
                {!! Form::submit('Create Data', ['class'=> 'btn btn-primary col-sm-6'])!!}
            </div>
            {!! Form::close() !!}
        </div>
    </body>
</html>

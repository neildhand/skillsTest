<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Skills Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
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
                <div class="form-group">
                    {!! Form::hidden('created_at', now()) !!}
                </div>

        </div>
        
        <div class="form-group">
            {!! Form::submit('Create Data', ['class'=> 'btn btn-primary'])!!}
        </div>
            {!! Form::close() !!}

        <div>

        <div>
            <h1>Data</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity In Stock</th>
                        <th>Price Per Item</th>
                        <th>Date/Time Submitted</th>
                        <th>Total Value of Number</th>
                    </tr>
                </thead>
                <tbody>
                    @if($data_objects)

                        @foreach($data_objects as $object)
                        <tr>
                            <td>{{$object->product_name}}</td>
                            <td>{{$object->quantity}}</td>
                            <td>{{$object->price}}</td>
                            <td>{{$object->created_at}}</td>
                            <td>{{$object->quantity * $object->price}}</td>
                        </tr>
                        @endforeach
                    @else
                        <h1>No Data</h1>
                    @endif
                </tbody>
            </table>
        </div>
        </div>
    </div>

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>

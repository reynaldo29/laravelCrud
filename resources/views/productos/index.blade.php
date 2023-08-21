@extends('productos.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel</h2>
            </div>
            <div class="pull-right">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('productos.create') }}"> Create New Product</a>
            </div>
            </div>
        </div>
    </div>
   

    <table class="table table-bordered">
        <tr>
            <th>N°</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($productos as $producto)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->precio }}</td>
            <td>{{ $producto->stock }}</td>

            <td>
                <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('productos.show',$producto->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('productos.edit',$producto->id) }}">Edit</a>
                    
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
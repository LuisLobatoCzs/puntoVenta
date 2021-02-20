<style>
    .centrarXY {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .centrarY {
        align-items: center;
    }
    .cuadro{
        padding: 25px;
        padding-top: 70px;
    }
    .contorno {
        border-width: 2px;
        border-style: solid;
        border-color: black;
        border-radius: 10px;
    }
</style>
@extends('layouts.app')

@section('content')
<div class="col-12">
    <div class="row justify-content-center">
        <div class="col-xl-5 cuadro">
            <div class="card border-primary mb-3">
                <div class="card-header">
                    Modificar producto
                </div>
                <div class="card-body">
                    <form class="col-12"  method="POST">
                        {{ csrf_field() }} 
                        
                        <div class="form-group">
                            <div class="row centrarY">
                                <label for="codigo" class="col-lg-4 col-xl-4 text-right control-label">Código:</label>
                                <div class="col-lg-7 col-xl-7">
                                    <input id="codigo" placeholder="Modifica código del producto" type="text" class="form-control" name="codigo" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row centrarY">
                                <label for="nombre" class="col-lg-4 col-xl-4 text-right control-label">Nombre:</label>
                                <div class="col-lg-7 col-xl-7">
                                    <input id="nombre" placeholder="Modifica nombre del producto" type="text" class="form-control" name="nombre" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row centrarY">
                                <label for="precioCompra" class="col-lg-4 col-xl-4 text-right control-label">Precio compra:</label>
                                <div class="col-lg-7 col-xl-7">
                                    <input id="precioCompra" placeholder="Modifica precio compra" type="text" class="form-control" name="precioCompra" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row centrarY">
                                <label for="precioVenta" class="col-lg-4 col-xl-4 text-right control-label">Precio venta:</label>
                                <div class="col-lg-7 col-xl-7">
                                    <input id="precioVenta" placeholder="Modifica precio venta" type="text" class="form-control" name="precioVenta" required>
                                </div>
                            </div>
                        </div>   
                        <div class="form-group">
                            <div class="row centrarY">
                                <label for="Categoria" class="col-lg-4 col-xl-4 text-right control-label">Categoría:</label>
                                <div class="col-lg-7 col-xl-7">
                                    <input id="categoria" placeholder="Modifica categoría" type="text" class="form-control" name="Categoria" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row centrarY">
                                <label for="stock" class="col-lg-4 col-xl-4 text-right control-label">Stock:</label>
                                <div class="col-lg-7 col-xl-7">
                                    <input id="Stock" placeholder="Modifica stock" type="text" class="form-control" name="stock" required>
                                </div>
                            </div>
                        </div>               
                        <hr>
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col-11 text-right">
                                    <button class="btn btn-primary btn-block">Guardar</button>                                
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>            
    </div>
</div>

@endsection

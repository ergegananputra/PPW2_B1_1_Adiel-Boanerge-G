<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('superStyle')

    
    @include('sesuatu')
    @yield('simple_navbar')
  
    <h1>Ini adalah halaman index</h1>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga Barang</th>
                    <th scope="col">Stok</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_barang as $barang)
                    <tr>
                        <td scope="row">{{ $barang->id }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->harga }}</td>
                        <td>{{ $barang->stok}}</td>
                    </tr>
                    
                @endforeach


            </tbody>
        </table>
    </div>
    
    
</body>
</html>
@extends('admin.template.base')

@section('content')
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">

       <div class="card">
                    <div class="card-header">
                        Filter
                    </div>
                    <div class="card-body">
                        <form action="{{ url('produk/filter') }}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Nama produk</label>
                                <input type="text" class="form-control" name="nama" value="{{ $nama ?? "" }}">
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label">Stok</label>
                                <input type="text" class="form-control" name="stok" value="{{ $stok ?? "" }}">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">harga min</label>
                                        <input type="text" class="form-control" name="harga_min" value="{{ $harga_min ?? "" }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">harga max</label>
                                        <input type="text" class="form-control" name="harga_max" value="{{ $harga_max ?? "" }}">
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-dark float-right" ><i class="fa fa-search"></i> Filter</button>
                        </form>
                    </div>
                </div>

      <div class="card">
        <div class="card-header border-0">
          <h3 class="mb-0">Data produk
            <a href="{{ url('produk/create') }}" class="btn btn-dark float-right">
              <i class="fa fa-plus"></i>
              Tambah data
            </a>
          </h3>
        </div>
                <!-- Light table -->
        <div class="card-body">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Aksi</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
            </thead>
            <tbody class="list">
            	@foreach ($list_produk as $produk)
             <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                	<div class=" btn-group">

                    <a href="{{ url('produk', $produk->id) }}" class="btn btn-dark">
                      <i class="fa fa-info"></i>
                    </a>
                    <a href="{{ url('produk', $produk->id) }}/edit" class="btn btn-warning">
                      <i class="fa fa-edit"></i>
                    </a>
                     @include('utils.delete', ['url' =>url('produk', $produk->id)])
                  </td>

                  </div>
                <td>{{ $produk->nama }}</td>
                <td>{{ $produk->harga }}</td>
                <td>{{ $produk->stok }}</td>
              </tr>
             @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</div>      


@endsection
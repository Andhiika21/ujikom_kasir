<!DOCTYPE html>
<html lang="en">

<head>

  @include('layouts.head')

</head>
<div id="wrapper">
  @include('layouts.sidebar')
  <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
      
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      
      
      
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        @include('layouts.navbar')
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                
              </div><!-- /.col -->
              <div class="col-sm-6">
                
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <div class="content">
          <div class="row">
            <div class="card card-info card-outline col-8">
              <div class="card-header">

                <div class="card-tools">
                </div>
              </div>
              




        <div class="container-fluid">
          <div class="row">

            <div class="col-md-9" style="max-height: 90vh; overflow-y: auto;">
              <div class="row">

                @foreach ($products as $item)
                <div class="col-4" onclick="pilihProduk({{ json_encode($item) }})">
                <div class="card product-card" data-product-id="{{ $item->id }}" style="width: 10rem;">
                  <img src="{{ asset('uploads/' . $item->gambar) }}" style="width: 100%; height: 100px;" alt="gambar anggota">
                    <div class="card-body">
                    <div class="card-body">
                      <h5 class="card-title"><b>{{ $item->nama }}</b></h5>
                      <p class="card-text badge badge-success">Rp. {{ number_format($item->harga, 0, ',', '.') }}</p>
                    </div>

                        
                    </div>
                </div>
            </div>


                
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card card-info card-outline col-4">
        <div class="card-header">

          <div class="card-tools">
            {{-- <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Produk <i class="fas fa-plus-square"></i></a> --}}
          </div>
        </div>

        <div class="container-fluid">
          <h3>KERANJANG</h3>
          <form action="{{ route('transaksi.store') }}" method="post">
            @csrf

            <div class="main">
              <table class="table">
                <thead>
                  <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Jumlah</th>
                  </tr>
                </thead>
                <tbody id="keranjang">

                </tbody>
              </table>
            </div>
            <div class="main">
              <label for="">Total:</label>
              <div class="form-group">
                <input type="text" name="total" id="total" class="form-control" readonly>
              </div>
              <label for="">Bayar:</label>
              <div class="form-group">
                <input type="text" name="bayar" id="bayar" class="form-control" oninput="(pembayaran())">
              </div>
              <label for="">Kembalian:</label>
              <div class="form-group">
                <input type="text" name="kembalian" id="kembalian" class="form-control" readonly>
              </div>
              <button type="submit" class="btn btn-primary">bayar</button>
            </div>
          </form>
        </div>

        <div class="card-body">

        </div>
      </div>

    </div>

  </div>
  <!-- /.content -->
</div>

</div>
</div>

</div>
<script src="{{ asset('js/transaksi.js') }}"></script>



<!-- Content Wrapper -->
<!-- Main Content -->






<!-- /.content-wrapper -->
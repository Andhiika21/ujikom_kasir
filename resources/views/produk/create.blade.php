<!DOCTYPE html>
<html>
  <head>
  
    @include('layouts.head')
  
  </head>
  <div id="wrapper">
    @include('layouts.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @include('layouts.navbar')
        <div class="content-wrapper">
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
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">

                <h4>Tambah produk</h4>

            </div>
          <div class="card-body">
           <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control mb-3" placeholder="nama" autocomplete="off" autofocus required>
                </div>
            
            <div class="form-group">
              <label for="gambar">Gambar</label>
                <input type="file" name="gambar" accept="image/*" class="form-control" autofocus required>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                      <input type="number" name="harga" class="form-control mb-3" placeholder="harga" autocomplete="off" autofocus required>
                  </div>
                  <div class="form-group">
                    <label for="hpp">Stok</label>
                      <input type="number" name="stok" class="form-control mb-3" placeholder="stok " autocomplete="off" autofocus required>
                  </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
          </div>
          </div>
        </div>
       
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

      </div>
    </div>
  </div>


  
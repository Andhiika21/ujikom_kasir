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

                <h3>Edit Produk</h3>

            </div>
          <div class="card-body">
            <form action="{{ route('produk.update', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <?php //var_dump($data->hj);die; ?>
                <input type="hidden" name="id" class="form-control" value="{{ $data->id }}" required>
                <div class="form-group">
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control mb-3" value="{{ $data->nama }}"" required>
                </div>
            
            <div class="form-group">
              <label for="gambar">Gambar</label>
                <input type="file" name="gambar" accept="image/*" class="form-control" value="{{ $data->gambar }}" required>
                
                  <div class="form-group">
                    <label for="harga">Harga</label>
                      <input type="text" name="harga" class="form-control mb-3" value="{{ $data->harga }}" required>
                  </div>
                  <div class="form-group">
                    <label for="hpp">Stok</label>
                      <input type="text" name="stok" class="form-control mb-3" value="{{ $data->stok }}" required>
                  </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
          </div>
        </div>
       
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->

  <!-- Main Footer -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('layouts.script')

      </div>
    </div>
  </div>

  <!-- C
</body>
</html>
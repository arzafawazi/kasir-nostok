<?php 

include "../config/koneksi.php";
include "../layoutkasir/sidebar.php";

?>




<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">


                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Pesanan</h3>
                            </div>



              <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No Faktur</th>
                                            <th>No Meja</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                      $sql="SELECT DISTINCT nofak, nomeja from pesanan where keterangan!='LUNAS'";
                                      $hasil=mysqli_query($koneksi, $sql);
                                      while($row=mysqli_fetch_array($hasil)){
                                        echo"<tr>
                                        <td>$row[0]</td>
                                        <td>$row[1]</td>
                                        <td>
                                                <a href=tambahpesanan.php?nofak=$row[0]> Tambah Pesanan </a> 
                                        </td>
                                        </tr>";
                                      }
                                      ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>



</div>
<?php include "../layoutkasir/footer.php"; ?>
</div>
</div>
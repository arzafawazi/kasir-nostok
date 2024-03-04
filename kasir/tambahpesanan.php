<?php 
include "../config/koneksi.php";
include "../layoutkasir/sidebar.php";
?>

<?php
    include "../config/koneksi.php";
    $nofak=$_REQUEST['nofak'];
?>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
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



<form action="tambahpesananaction.php" method="post">

          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">


                <div class="form-group">
<?php
                  echo" <label><h2><font color=red> No Faktur : $nofak </font></h2></label> ";
        ?>
                  <input type="hidden" name="nofak" class="form-control select2" style="width: 100%;" <?php echo"value='$nofak'"; ?>>
                </div>
                <div class="form-group">
                    <?php
        include "../config/koneksi.php";    
        $sql = "select * from pesanan where nofak=$nofak";
        $hasil = mysqli_query($koneksi, $sql);
        while($row=mysqli_fetch_Array($hasil)){
            $nomeja=$row[2];
        }
         
                 echo"<label>No Meja : $nomeja </label>";
                 ?>
                  <input type="hidden" name="nomeja" class="form-control select2" style="width: 100%;" <?php echo"value='$nomeja'"; ?>>
                </div>

                <div class="form-group">
                  <label>Kode Menu</label>
                  <select name="kode"class="form-control select2" style="width: 100%;">
            <option> </option>
        <?php
        include"../config/koneksi.php";    
        $sql = "select * from menu";
        $hasil = mysqli_query($koneksi, $sql);
        while($row=mysqli_fetch_Array($hasil)){
          echo"
            <option>$row[1]</option>
          ";
        }
        ?>

                  </select>
                </div>
                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="number" name="jumlah"class="form-control select2" style="width: 100%;">
                </div>
                <!-- /.form-group -->
              </div>
              
          <button type="submit" class="btn btn-block btn-primary">Tambah Pesanan</button>
              <!-- /.col -->
              
              <!-- /.col -->
</form>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Jenis Pesanan</th>
                                            <th>Jumlah Beli</th>
                                            <th>Harga Satuan</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                      $subtotal=0;
                                      $sql="select * from pesanan where nofak='$nofak'";
                                      $hasil=mysqli_query($koneksi, $sql);
                                      while($row=mysqli_fetch_array($hasil)){
                                        echo"<tr>
                                        <td>$row[3]</td>
                                        <td>$row[4]</td>";
                                      $sql1="select nama,harga from menu where nama='$row[3]'";
                                      $hasil1=mysqli_query($koneksi, $sql1);
                                      while($row1=mysqli_fetch_array($hasil1)){
                                            $harga=$row1[1];
                                      }
                                      $total = $row[4] * $harga;
                                      $subtotal=$subtotal + $total;

                                        echo"
                                        <td>$harga</td>
                                        <td>$total</td>
                                        </tr>";
                                      }
                                      ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="3">Total</th>
                                            <?php echo"<th>$subtotal</th>"; ?>
                                        </tr>
                                    </tfoot>
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
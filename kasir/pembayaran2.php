<?php 
include "../layoutkasir/sidebar.php";
include "../config/koneksi.php";
?>

<?php
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
                                </table><br><br>
            <form action=pembayaranaction.php method="post">
            <input type="hidden" name="nofak" <?php echo"value=$nofak"; ?>>
            <button type="submit" class="btn btn-block btn-primary">Transaksi Pembayaran</button>
            </form>
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
<?php include "../layoutkasir/footer.php" ?>
</div>
</div>
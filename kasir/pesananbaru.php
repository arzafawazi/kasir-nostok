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
            <h1>Form Input Pesanan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      
<form action="pesananbaruaction.php" method="post">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Input Pesanan</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">


                <div class="form-group">
        <?php
        include"../config/koneksi.php";    
        $sql = "select distinct nofak from pesanan";
        $hasil = mysqli_query($koneksi, $sql);
        $i=1;
        while($row=mysqli_fetch_Array($hasil)){
          $i++;
        }

                  echo" <label><h2><font color=red> No Faktur : $i </font></h2></label> ";
        ?>
                  <input type="hidden" name="nofak" class="form-control select2" style="width: 100%;" <?php echo"value='$i'"; ?>>
                </div>
                <div class="form-group">
                  <label>No Meja</label>
                  <select name="nomeja"class="form-control select2" style="width: 100%;">
                    <option></option>
                    <?php
                      for ($i=1;$i<=10;$i++)
                        echo"<option> Meja $i </option>";
                    ?>
            <option> </option>
                  </select>
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
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
</form>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




</div>
<?php include "../layoutkasir/footer.php" ?>
</div>
</div>
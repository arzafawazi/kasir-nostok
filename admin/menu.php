<?php 
include "../config/koneksi.php";
include "../layout/sidebar.php";

?>


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Menu Makanan</h1>
        <a href="insertmenu.php"><button class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Insert Data</button></a>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama Menu</th>
                    <th>Harga</th>
                    <th>keterangan</th>
                    <th>Action</th>
                </tr>
               </thead>
               <tbody>
                <?php 
                $sql = "select * from menu";
                $hasil = mysqli_query($koneksi, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                    echo "<tr>
                          <th>$row[1]</th>                    
                          <th>$row[2]</th>                    
                          <th>$row[3]</th>                    
                          <th>$row[4]</th>
                          <th>
                          <a href='editmenu.php?id=$row[0]'>Edit</a>
                          <a href='deletemenuaction.php?id=$row[0]'>Delete</a>
                          </th>                    
                    </tr>";
                }
                ?>
               </tbody>
            </table>
        </div>
    </div>
</div>

</div>

</div>

<?php 
include '../layout/footer.php';
?>

</div>
<?php 
include "../config/koneksi.php";
include "../layoutkasir/sidebar.php";

?>


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Menu Makanan</h1>
        
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
include '../layoutkasir/footer.php';
?>

</div>
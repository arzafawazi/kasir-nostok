<?php 
include '../config/koneksi.php';
include '../layout/sidebar.php';
$id = $_REQUEST['id'];
$sql = "SELECT * FROM menu where id = '$id'";
$hasil = mysqli_query($koneksi, $sql);
while ($row = mysqli_fetch_array($hasil)) {
?>

<div class="col-lg-6"></div>
<div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Insert Data Menu</h6>
                                </div>
                                <div class="card-body">
                                    <form action="editmenuaction.php" method="post">
                                    <div class="form-group">
                                        <label>Kode Menu :</label>
                                        <input type="hidden" name="id" <?php echo "value=$id";?>>
                                            <input type="text" class="form-control form-control-user"
                                                id="kode" aria-describedby="kode"
                                                placeholder="Kode Makanan" name="kode" <?php echo"value=$row[1]";?>>
                                        </div>
                                    <div class="form-group">
                                    <label>Nama Menu :</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="nama" aria-describedby="nama"
                                                placeholder="Nama Menu" name="nama" <?php echo"value=$row[2]";?>>
                                        </div>
                                        <div class="form-group">
                                        <label>Harga :</label>
                                            <input type="Number" class="form-control form-control-user"
                                                id="harga" aria-describedby="username"
                                                placeholder="Harga" name="harga" <?php echo"value=$row[3]";?>>
                                        </div>
                                        <div class="form-group">
                                    <label>Keterangan :</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="nama" aria-describedby="keterangan"
                                                placeholder="Keterangan" name="keterangan" <?php echo"value=$row[4]";?>>
                                        </div>
                                        <button type="submit" class="form-control form-control-user btn btn-primary btn-user btn-block">Insert</button>
                                    </form>
                                </div>
                            </div>


</div>
<?php 
}
include "../layout/footer.php"; ?>
</div>
</div>
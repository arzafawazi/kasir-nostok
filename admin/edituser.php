<?php 
include '../config/koneksi.php';
include '../layout/sidebar.php';
$id = $_REQUEST['id'];
$sql = "SELECT * FROM user where id = '$id'";
$hasil = mysqli_query($koneksi, $sql);
while ($row = mysqli_fetch_array($hasil)) {
?>

<div class="col-lg-6"></div>
<div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Insert Data User</h6>
                                </div>
                                <div class="card-body">
                                    <form action="edituseraction.php" method="post">
                                    <div class="form-group">
                                        <label>Nama :</label>
                                        <input type="hidden" name="id" <?php echo "value=$id";?>>
                                            <input type="text" class="form-control form-control-user"
                                                id="nama" aria-describedby="nama"
                                                placeholder="Nama" name="nama" <?php echo"value=$row[1]";?>>
                                        </div>
                                    <div class="form-group">
                                    <label>Username :</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="username" aria-describedby="username"
                                                placeholder="Username" name="username" <?php echo"value=$row[2]";?>>
                                        </div>
                                        <div class="form-group">
                                        <label>Password :</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="username" aria-describedby="username"
                                                placeholder="Password" name="password" <?php echo"value=$row[3]";?>>
                                        </div>
                                        <div class="form-group">
                                        <label>Level :</label>
                                            <select name="level" id="level" 
                                            class="form-control form-control-user">
                                                <option value="Administrator">Admin</option>
                                                <option value="Kasir">Kasir</option>
                                            </select>
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
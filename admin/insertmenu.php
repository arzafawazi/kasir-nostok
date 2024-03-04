<?php 
include "../config/koneksi.php";
include "../layout/sidebar.php";
?>


<div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Insert Data Menu</h6>
                                </div>
                                <div class="card-body">
                                    <form action="insertmenuaction.php" method="post">
                                    <div class="form-group">
                                    <label>Kode Menu :</label>
                                            <input type="number" class="form-control form-control-user"
                                                id="kode_menu" aria-describedby="kode_menu"
                                                placeholder="Kode Menu" name="kode">
                                        </div>
                                        <div class="form-group">
                                        <label>Nama Menu :</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="nama" aria-describedby="nama"
                                                placeholder="Nama" name="nama">
                                        </div>
                                        <div class="form-group">
                                        <label>Harga :</label>
                                            <input type="number" class="form-control form-control-user"
                                                id="harga" aria-describedby="harga"
                                                placeholder="Harga" name="harga">
                                        </div>
                                        <div class="form-group">
                                        <label>Keterangan :</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="keterangan" aria-describedby="keterangan"
                                                placeholder="Keterangan" name="keterangan">
                                        </div>
                                        <button type="submit" class="form-control form-control-user btn btn-primary btn-user btn-block">Insert</button>
                                    </form>
                                </div>
                            </div>
</div>


<?php 
include "../layout/footer.php";
?>
</div>
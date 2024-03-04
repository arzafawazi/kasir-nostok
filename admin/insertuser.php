<?php 
include "../config/koneksi.php";
include "../layout/sidebar.php";
?>


<div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Insert Data User</h6>
                                </div>
                                <div class="card-body">
                                    <form action="insertuseraction.php" method="post">
                                    <div class="form-group">
                                        <label>Nama :</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="nama" aria-describedby="nama"
                                                placeholder="Nama" name="nama">
                                        </div>
                                    <div class="form-group">
                                    <label>Username :</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="username" aria-describedby="username"
                                                placeholder="Username" name="username">
                                        </div>
                                        <div class="form-group">
                                        <label>Password :</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="username" aria-describedby="username"
                                                placeholder="Password" name="password">
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
include "../layout/footer.php";
?>
</div>
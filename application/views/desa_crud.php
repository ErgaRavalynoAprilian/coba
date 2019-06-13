                <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-12 col-md-10"><i class="fas fa-table"></i> Data Desa</div> 
                        <div class="col-sm-12 col-md-2"><a class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_add_new">Tambah</a></div>
                    </div>
                </div>
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-12" align="center">
                        <b><?php echo $this->session->flashdata('msgdes');?></b>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr> 
                            <th>No Induk Desa</th>
                            <th>Nama Desa</th> 
                            <th>Nama Kepala Desa</th> 
                            <th>Aksi</th> 
                        </tr> 
                        </thead>
                        <tbody>
                            <?php 
                            foreach($desa as $row): 
                            ?>
                            <tr>
                                <td><?php echo $row->username; ?></td>
                                <td><?php echo $row->namadesa; ?></td>
                                <td><?php echo $row->kepaladesa; ?></td>
                                <td>
                                    <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_edit<?php echo $row->username; ?>">Edit</a></div>
                                    <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal_hapus<?php echo $row->username; ?>">Hapus</a></div>
                                </td>
                            </tr>
                            <?php endforeach ?>
                            </tbody>
                     </table>
              </div>
            </div>
          </div>


        </div>
        <!-- /.container-fluid -->

<!-- ============ MODAL ADD =============== -->
<div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Tambah Desa Baru</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/simpandesa'?>">
                <div class="modal-body">
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >No Induk Desa</label>
                        <div class="col-xs-8">
                            <input name="username" class="form-control"  maxlength="10" type="text" placeholder="No Induk Desa..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-8">
                            <input name="password" class="form-control" type="password" placeholder="Password..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Desa</label>
                        <div class="col-xs-8">
                            <input name="namadesa" class="form-control" maxlength="60" type="text" placeholder="Nama Desa..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Kepala Desa</label>
                        <div class="col-xs-8">
                            <input name="kepaladesa" class="form-control" maxlength="60" type="text" placeholder="Nama Kepala Desa..." required>
                        </div>
                    </div>
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn btn-danger btn-sm" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD BARANG-->
<!-- ============ MODAL EDIT =============== -->
            <?php
                 foreach($desa as $row):
            ?>
            <div class="modal fade" id="modal_edit<?php echo $row->username; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Edit Desa</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/edit_desa'?>">
                <div class="modal-body">
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >No Induk Desa</label>
                        <div class="col-xs-8">
                            <input name="username" class="form-control" maxlength="10" value="<?php echo $row->username; ?>" readonly type="text" placeholder="No Induk Desa..." required>
                            <input type="hidden" name="password" value="<?php echo $row->password; ?>">
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Desa</label>
                        <div class="col-xs-8">
                            <input name="namadesa" class="form-control" maxlength="60" value="<?php echo $row->namadesa; ?>" type="text" placeholder="Nama Desa..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Kepala Desa</label>
                        <div class="col-xs-8">
                            <input name="kepaladesa" class="form-control" maxlength="60" value="<?php echo $row->kepaladesa; ?>" type="text" placeholder="Nama Kepala Desa..." required>
                        </div>
                    </div>
 
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning btn-sm" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-primary btn-sm">Perbarui</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <?php endforeach ?>
<!--END MODAL EDIT-->
        <?php
            foreach($desa as $row):
        ?>
<!-- ============ MODAL HAPUS =============== -->
        <div class="modal fade" id="modal_hapus<?php echo $row->username; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Hapus Desa</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/hapus_desa/'?><?php echo $row->username; ?>">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus kegiatan<b>
                    <br>
                    <?php echo $row->namadesa; ?></b></p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="username" value="<?php echo $row->username; ?>">
                    <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-danger">Hapus</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <?php endforeach;?>
<!--END MODAL HAPUS -->
<div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-12 col-md-10"><i class="fas fa-table"></i> Data Kegiatan</div> 
                        <div class="col-sm-12 col-md-2"><a class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_add_new">Tambah</a></div>
                    </div>
                </div>
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-12" align="center">
                        <b><?php echo $this->session->flashdata('msgkeg');?></b>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr> 
                            <th>Kode Kegiatan</th>
                            <th>Nama Kegiatan</th> 
                            <th>Aksi</th> 
                        </tr> 
                        </thead>
                        <tbody>
                            <?php 
                            foreach($kegiatan as $row):
                            ?>
                            <tr>
                                <td><?php echo $row->kd_kegiatan; ?></td>
                                <td><?php echo $row->nama_kegiatan; ?></td>
                                <td>
                                    <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_edit<?php echo $row->kd_kegiatan; ?>">Edit</a></div>
                                    <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal_hapus<?php echo $row->kd_kegiatan; ?>">Hapus</a></div>
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

<!-- ============ MODAL TAMBAH =============== -->
        <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Tambah Kegiatan Baru</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/simpankegiatan'?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kode Kegiatan</label>
                        <div class="col-xs-8">
                            <input name="kd_kegiatan" class="form-control" maxlength="4" type="text" placeholder="Kode Kegiatan..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Kegiatan</label>
                        <div class="col-xs-8">
                            <input name="nama_kegiatan" class="form-control" maxlength="100" type="text" placeholder="Nama Kegiatan..." required>
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
        <!--END MODAL TAMBAH-->

<!-- ============ MODAL EDIT =============== -->
            <?php
                 foreach($kegiatan as $row):
            ?>
            <div class="modal fade" id="modal_edit<?php echo $row->kd_kegiatan; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Edit Kegiatan</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/edit_kegiatan'?>">
                <div class="modal-body">
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kode Kegiatan</label>
                        <div class="col-xs-8">
                            <input name="kd_kegiatan" class="form-control" maxlength="4" value="<?php echo $row->kd_kegiatan; ?>" readonly type="text" placeholder="Kode Kegiatan..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Kegiatan</label>
                        <div class="col-xs-8">
                            <input name="nama_kegiatan" class="form-control" maxlength="100" value="<?php echo $row->nama_kegiatan; ?>" type="text" placeholder="Nama Kegiatan..." required>
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
            foreach($kegiatan as $row):
        ?>
<!-- ============ MODAL HAPUS =============== -->
        <div class="modal fade" id="modal_hapus<?php echo $row->kd_kegiatan; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Hapus Kegiatan</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/hapus_kegiatan/'?><?php echo $row->kd_kegiatan; ?>">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus kegiatan<b>
                    <br>
                    <?php echo $row->nama_kegiatan; ?></b></p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="kd_kegiatan" value="<?php echo $row->kd_kegiatan; ?>">
                    <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-danger">Hapus</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <?php endforeach;?>
<!--END MODAL HAPUS -->
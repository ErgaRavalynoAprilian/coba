<div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-12 col-md-10"><i class="fas fa-table"></i> Data Sumberdana</div> 
                        <div class="col-sm-12 col-md-2"><a class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_add_new">Tambah</a></div>
                    </div>
                </div>
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-12" align="center">
                        <b><?php echo $this->session->flashdata('msgdana');?></b>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr> 
                            <th>Kode Sumber Dana</th>
                            <th>Nama Sumber Dana</th> 
                            <th>Aksi</th> 
                        </tr> 
                        </thead>
                        <tbody>
                            <?php 
                            foreach($sumberdana as $row): 
                            ?>
                            <tr>
                                <td><?php echo $row->kd_sumdana; ?></td>
                                <td><?php echo $row->nama_sumdana; ?></td>
                                <td>
                                    <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_edit<?php echo $row->kd_sumdana; ?>">Edit</a></div>
                                    <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal_hapus<?php echo $row->kd_sumdana; ?>">Hapus</a></div>
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

<!-- ============ MODAL ADD BARANG =============== -->
<div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Tambah Sumber Dana Baru</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/simpansumberdana'?>">
                <div class="modal-body">
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kode Sumber Dana</label>
                        <div class="col-xs-8">
                            <input name="kd_sumdana" class="form-control" maxlength="4" type="text" placeholder="Kode Sumber Dana..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Sumber Dana</label>
                        <div class="col-xs-8">
                            <input name="nama_sumdana" class="form-control" maxlength="60" type="text" placeholder="Nama Sumber Dana..." required>
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
                 foreach($sumberdana as $row):
            ?>
            <div class="modal fade" id="modal_edit<?php echo $row->kd_sumdana; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Edit Sumber Dana</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/edit_sumberdana'?>">
                <div class="modal-body">
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kode Sumber Dana</label>
                        <div class="col-xs-8">
                            <input name="kd_sumdana" class="form-control" maxlength="4" value="<?php echo $row->kd_sumdana; ?>" readonly type="text" placeholder="Kode Sumber Dana..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Sumber Dana</label>
                        <div class="col-xs-8">
                            <input name="nama_sumdana" class="form-control" maxlength="100" value="<?php echo $row->nama_sumdana; ?>" type="text" placeholder="Nama Sumber Dana..." required>
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
            foreach($sumberdana as $row):
        ?>
<!-- ============ MODAL HAPUS =============== -->
        <div class="modal fade" id="modal_hapus<?php echo $row->kd_sumdana; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Hapus Sumber Dana</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/hapus_sumberdana/'?><?php echo $row->kd_sumdana; ?>">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus kegiatan<b>
                    <br>
                    <?php echo $row->nama_sumdana; ?></b></p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="kd_kegiatan" value="<?php echo $row->kd_sumdana; ?>">
                    <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-danger">Hapus</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <?php endforeach;?>
<!--END MODAL HAPUS -->
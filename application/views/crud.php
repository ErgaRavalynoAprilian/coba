			<div class="card mb-3">
				<div class="card-header">
                    <div class="row">
                        <div class="col-sm-12 col-md-10"><i class="fas fa-table"></i> 
                        Data Pembangunan  <?php echo $desa['0']->namadesa; ?>
                        </div> 
                        <div class="col-sm-12 col-md-2">
                            <a class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_add_new">Tambah</a></div>
                    </div>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr> 
                            <th>No</th>
                            <th>Nama Desa</th> 
                            <th>Kegiatan</th> 
                            <th>Jumlah Dana</th> 
                            <th>Sumber Dana</th>
							<th>Aksi</th>
                        </tr> 
                        </thead>
                        <tbody>
                        	<?php 
                            $id = 1;
                            foreach((array)$pembangunan as $row): 
                            ?>
                            <tr>
                                <td><?php echo $id++ ?></td>
                                <td><?php echo $row->namadesa; ?></td>
                                <td><?php echo $row->nama_kegiatan; ?></td>
                                <td><?php echo nominal($row->jml_dana); ?></td>
                                <td><?php echo $row->nama_sumdana;?></td>
								<td>
                                    <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_edit<?php echo $row->kd_pembangunan; ?>">Edit</a></div>
                                    <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal_hapus<?php echo $row->kd_pembangunan; ?>">Hapus</a></div>
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
                <h3 class="modal-title" id="myModalLabel">Tambah Pembangunan Baru</h3>
            </div>
            
            <form class="form-horizontal" method="post" action="<?php echo base_url().'desa/simpan'?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >No Induk Desa</label>
                        <div class="col-xs-8">
                            <input name="username" class="form-control" maxlength="10" type="text" readonly placeholder="No Induk Desa..." value="<?php echo $desa['0']->username;?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Kegiatan</label>
                        <div class="col-xs-8">
							<select name="kd_kegiatan" id="kd_kegiatan" class="form-control" required>
                            <option value="">-PILIH-</option>
                            <?php
								foreach((array)$kegiatan as $row):
							?>
							<option value="<?php echo $row->kd_kegiatan;?>"><?php echo $row->nama_kegiatan;?></option>
							<?php endforeach;?>
							</select>
						</div>
                    </div>
 
					<div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah Dana</label>
                        <div class="col-xs-8">
                            <input name="jml_dana" class="form-control" maxlength="12" type="text" placeholder="Jumlah Dana..." onkeypress="return hanyaAngka(event)" required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Sumber Dana</label>
                        <div class="col-xs-8">
							<select name="kd_sumdana" id="kd_sumdana" class="form-control" required>
                            <option value="">-PILIH-</option>
                            <?php
								foreach((array)$sumberdana as $row):
							?>
							<option value="<?php echo $row->kd_sumdana;?>"><?php echo $row->nama_sumdana;?></option>
							<?php endforeach;?>
							</select>
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

<!-- ============ MODAL Edit =============== -->
            <?php 
                foreach((array)$pembangunan as $row): 
            ?>
            <div class="modal fade" id="modal_edit<?php echo $row->kd_pembangunan; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Edit Data Pembangunan</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'desa/edit'?>">
                <div class="modal-body">
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >No Induk Desa</label>
                        <div class="col-xs-8">
                            <input name="username" class="form-control" maxlength="10" type="text" readonly value="<?php echo $row->username; ?>" placeholder="No Induk Desa..." required>
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Kegiatan</label>
                        <div class="col-xs-8">
							<select name="kd_kegiatan" id="kd_kegiatan" class="form-control">
                            <option value="<?php echo $row->kd_kegiatan;?>"><?php echo $row->nama_kegiatan;?></option>
							<?php
								foreach((array)$kegiatan as $keg):
							?>
							<option value="<?php echo $keg->kd_kegiatan;?>"><?php echo $keg->nama_kegiatan;?></option>
							<?php endforeach;?>
                            </select>
						</div>
                    </div>
                    
					<div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah Dana</label>
                        <div class="col-xs-8">
                            <input name="jml_dana" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="12" type="text" value="<?php echo $row->jml_dana;?>" placeholder="Jumlah Dana..." required>                         
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Sumber Dana</label>
                        <div class="col-xs-8">
							<select name="kd_sumdana" id="kd_sumdana" class="form-control">
                            <option value="<?php echo $row->kd_sumdana;?>"><?php echo $row->nama_sumdana;?></option>
							<?php
								foreach((array)$sumberdana as $dana):
							?>
							<option value="<?php echo $dana->kd_sumdana;?>"><?php echo $dana->nama_sumdana;?></option>
							<?php endforeach;?>
                            </select>
						</div>
                    </div>
                </div>
 
                <div class="modal-footer">
                    <input type="hidden" name="kd_pembangunan" value="<?php echo $row->kd_pembangunan; ?>">
                    <button class="btn btn-danger btn-sm" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <?php endforeach ?>
        <!--END MODAL Edit-->
        <?php
            foreach($pembangunan as $row):
        ?>
<!-- ============ MODAL HAPUS =============== -->
        <div class="modal fade" id="modal_hapus<?php echo $row->kd_pembangunan; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Hapus Pembanguan</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'desa/hapus/'?><?php echo $row->kd_pembangunan; ?>">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus pembangunan ini<b>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="kd_kegiatan" value="<?php echo $row->kd_pembangunan; ?>">
                    <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-danger">Hapus</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <?php endforeach;?>
<!--END MODAL HAPUS -->
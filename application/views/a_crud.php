            <div class="card mb-3">
                <div class="card-header">
                <i class="fas fa-table"></i>
                Data Pembanguanan</div>
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
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                     </table>
              </div>
            </div>
          </div>


        </div>
        <!-- /.container-fluid -->

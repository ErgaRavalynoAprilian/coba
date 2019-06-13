        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Chandra & Murni Sistem Informasi Pembangunan</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Anda Yakin ingin Log Out.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url();?>admin/logout">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url();?>assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url();?>assets/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url();?>assets/js/demo/datatables-demo.js"></script>
    <script src="<?php echo base_url();?>assets/js/demo/chart-area-demo.js"></script>

    <script type="text/javascript">
          <?php
              foreach($data as $data){
                  $namadesa[] = $data->namadesa;
                  $jml_dana[] = (float) $data->jml_dana;
              }
          ?>
          // Set new default font family and font color to mimic Bootstrap's default styling
          Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
          Chart.defaults.global.defaultFontColor = '#292b2c';

          // Bar Chart Example
          var ctx = document.getElementById("myBarChart");
          var myLineChart = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: <?php echo json_encode($namadesa);?>,
              datasets: [{
                label: "Revenue",
                backgroundColor: "rgba(2,117,216,1)",
                borderColor: "rgba(2,117,216,1)",
                data: <?php echo json_encode($jml_dana);?>,
              }],
            },
            options: {
              scales: {
                xAxes: [{
                  gridLines: {
                    display: false
                  },
                  ticks: {
                    maxTicksLimit: 22
                  }
                }],
                yAxes: [{
                  ticks: {
                    maxTicksLimit: 5,
                    min: 0,
                    max: 1000000000
                  },
                  gridLines: {
                    display: true
                  },

                }],
              },
              legend: {
                display: false
              }
            }
          });

    </script>

  </body>

</html>

  <!-- jQuery -->
  <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="assets/vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="assets/vendors/nprogress/nprogress.js"></script>

  <script src="assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
  <script src="assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
  <script src="assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
  <script src="assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
  <script src="assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
  <script src="assets/vendors/jszip/dist/jszip.min.js"></script>
  <script src="assets/vendors/pdfmake/build/pdfmake.min.js"></script>
  <script src="assets/vendors/pdfmake/build/vfs_fonts.js"></script>
  <!-- Chart.js -->
  <script src="assets/vendors/Chart.js/dist/Chart.min.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="assets/build/js/custom.min.js"></script>

  <?php
  // Barang Perlengkapan
  $brgPer = grafikBarang()[0];
  $jmlPer = grafikBarang()[1];

  ?>
  <script>
    $(document).ready(function() {
      if ($('#BerPer').length) {

        var ctx = document.getElementById("BerPer");
        var mybarChart = new Chart(ctx, {
          type: 'horizontalBar',
          data: {
            labels: ["<?= implode('   ","', $brgPer); ?>   "],
            datasets: [{
              label: '# Jumlah',
              backgroundColor: "#26B99A",

              data: [<?= implode(',', $jmlPer); ?>],
            }]
          },

          options: {
            elements: {
              rectangle: {
                borderWidth: 2,
                borderColor: "transparent",
                borderSkipped: 'left'
              }
            },
            scales: {
              xAxes: [{
                ticks: {
                  beginAtZero: true
                }
              }]
            }
          }
        });

      }
    })
  </script>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Provinsi', 3],
          ['Nasional', 1],
          ['Internasionals', 2]
        ]);

        // Set chart options
        var options = {'title':'How Much Pizza I Ate Last Night',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <div id="chart_div"></div>
        <?php echo $this->session->flashdata('notif') ?>
        <button type="submit" data-toggle="modal" data-target="#modal_add_new" class="btn btn-md btn-success">Tambah Prestasi</button>
        <hr>
        <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Mahasiswa</th>
                    <th>Predikat</th>
                    <th>Tingkat</th>
                    <th>Tahun</th>
                    <th>Kegiatan</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                    foreach($data_prestasi as $hasil){ 
                ?>

                  <tr>
                    <td><?php echo $hasil->mahasiswa ?></td>
                    <td><?php echo $hasil->predikat ?></td>
                    <td><?php echo $hasil->tingkat ?></td>
                    <td><?php echo $hasil->tahun ?></td>
                    <td><?php echo $hasil->kegiatan ?></td>
                  </tr>

                <?php } ?>

                </tbody>
              </table>
        </div>
        <div class="modal fade" tabindex="-1" id="modal_add_new" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Tambah Prestasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               <!-- konten form -->
               <?php echo form_open('prestasi/simpan') ?>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Mahasiswa</label>
                  <input type="text" name="mahasiswa" class="form-control" id="exampleFormControlInput1" placeholder="Mahasiswa" required>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Tingkat</label>
                  <select name="tingkat" class="form-control" id="exampleFormControlSelect1">
                    <option value="Internasional">Internasional</option>
                    <option value="Nasional">Nasional</option>
                    <option value="Provinsi">Provinsi</option>
                    <option value="Kabupaten">Kabupaten</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect2">Predikat</label>
                  <select name="predikat" class="form-control" id="exampleFormControlSelect2">
                    <option value="Juara 1">Juara 1</option>
                    <option Value="Juara 2">Juara 2</option>
                    <option value="Juara 3">Juara 3</option>
                    <option value="Harapan 1">Harapan 1</option>
                    <option value="Harapan 2">Harapan 2</option>
                    <option value="Harapan 3">Harapan 3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Tahun</label>
                  <select class="form-control" name="tahun">
                      <?php
                      $thn_skr = date('Y');
                      for ($x = $thn_skr; $x >= 2010; $x--) {
                      ?>
                          <option  class="form-control" value="<?php echo $x ?>"><?php echo $x ?></option>
                      <?php
                      }
                      ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Kegiatan</label>
                  <textarea name="kegiatan" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              </div>
              <?php echo form_close() ?>
               <!-- konten form -->
            </div>
          </div>
        </div>
    </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>

<script>
    $('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>
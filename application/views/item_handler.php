<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Prestasi</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/components.css">

</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="#" class="navbar-brand sidebar-gone-hide">Jurusan Pendidikan Teknik Elektronika dan Informatika</a>
        <div class="navbar-nav">
          <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"></a>
        </div>
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
        </div>
      </nav>

      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Pendidikan Teknik Informatika</span></a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="card">
              <div class="card-header">
                <h4>Edit Prestasi</h4>
              </div>
              <div class="card-body">
                <?php echo form_open('prestasi/update') ?>
                    <input type="hidden" name="id" value="<?php echo $data_prestasi->id?>"></input>
                    <div class="form-group">
                        <label for="mhs">Mahasiswa</label>
                        <input value="<?php echo $data_prestasi->mahasiswa?>" type="text" name="mahasiswa" class="form-control" id="mhs" placeholder="Mahasiswa" required>
                    </div>
                    <div class="form-group">
                         <label for="tgkt">Tingkat</label>
                            <select name="tingkat" class="form-control select2" id="tgkt">
                                <option selected value="<?php echo $data_prestasi->tingkat?>"><?php echo $data_prestasi->tingkat?></option>
                                <option value="Internasional">Internasional</option>
                                <option value="Nasional">Nasional</option>
                                <option value="Provinsi">Provinsi</option>
                             </select>
                    </div>
                    <div class="form-group">
                        <label for="predkt">Predikat</label>
                            <select name="predikat" class="form-control select2" id="predkt">
                                <option value="<?php echo $data_prestasi->predikat?>"><?php echo $data_prestasi->predikat?></option>
                                <option value="Juara 1">Juara 1</option>
                                <option Value="Juara 2">Juara 2</option>
                                <option value="Juara 3">Juara 3</option>
                                <option value="Harapan 1">Harapan 1</option>
                                <option value="Harapan 2">Harapan 2</option>
                                <option value="Harapan 3">Harapan 3</option>
                                <option value="Favorite">Favorite</option>
                                <option value="Finalis">Finalis</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label>Tahun</label>
                            <select class="form-control select2" name="tahun">
                                <option value="<?php echo $data_prestasi->tahun?>"><?php echo $data_prestasi->tahun?></option>
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
                        <label for="kgt">Kegiatan</label>
                        <textarea value="<?php echo $data_prestasi->kegiatan?>" name="kegiatan" class="form-control mb-0" id="kgt" rows="3" required><?php echo $data_prestasi->kegiatan?></textarea>
                    </div>
                    <div class="form-group buttons">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </div>
                <?php echo form_close() ?>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2019 <div class="bullet"></div> By <a href="http://dstwn.id">Dwi Setiawan</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo base_url();?>/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/select.bootstrap4.min.js"></script>

  <!-- Template JS File -->
  <script src="<?php echo base_url();?>/assets/js/scripts.js"></script>
  <script src="<?php echo base_url();?>/assets/js/custom.js"></script>

  <!-- Template JS File -->

</body>
</html>

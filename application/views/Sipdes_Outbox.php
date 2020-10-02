  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pengumuman</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengumuman</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <!-- form start -->
 <form role="form" method="post" action="<?php
				echo base_url('index.php/SipdesMaster/Pengumuman/')?>" >
                <div class="card-body">

                <div class="form-group">
                    <label for="nama">Nomor</label>
                    <input type="text" class="form-control" name="nomor" id="exampleInputEmail1" placeholder="Enter Hal">
                  </div>

                  <div class="form-group">
                    <label for="nama">Sifat</label>
                    <input type="text" class="form-control" name="sifat" id="exampleInputEmail1" placeholder="Enter Hal">
                  </div>

                  <div class="form-group">
                    <label for="nama">Perihal</label>
                    <input type="text" class="form-control" name="hal" id="exampleInputEmail1" placeholder="Enter Hal">
                  </div>
                  <div class="form-group">
                    <label for="">Isi</label>
                    <input type="text" class="form-control" name="isi" id="exampleInputPassword1" placeholder="Enter ISI">
                  
                <div class="form-group">
                <label for="">Tempat</label>
                <input type="text" class="form-control" name="tempat" id="exampleInputPassword1" placeholder="Enter Lokasi">
              </div>
                <div class="form-group">
                  <label>Tanggal</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" class="form-control"  name="tanggal"  placeholder="Enter Tanggal">
                  </div>
                </div>
                <div class="form-group">
                    <label for="nama">Pembuat</label>
                    <input type="text" class="form-control" name="pembuat" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
                 <!-- /.input group -->
                 <div class="form-group">
                  <label>Kirim Ke</label>
                  <select class="form-control select2" style="width: 100%;" name="penerima">
                  <option selected="selected" value="kasi Pemerintahan">kasi Pemerintahan</option>
                    <option value="RT">RT</option>
                    <option value="RW">RW</option>
                    <option value="Karang taruna">Karang taruna</option>
                    <option value="PKK">PKK</option>
                    <option value="Kasi Keuangan">Kasi Keuangan</option>
                    <option value="Sekertaris Desa">Sekertaris Desa</option>
                    
                    
                  </select>
                </div>
                
                <!---/.select-->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Kirim dan Backup</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
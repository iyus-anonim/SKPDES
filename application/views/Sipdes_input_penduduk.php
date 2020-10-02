  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Input data pegawai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Input Data Pegawai</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <!-- form start -->
 <div class="card-body">
                  
 
 <form role="form" method="post" action="<?php
				echo base_url('index.php/SipdesMaster/inputdatapenduduk/')?>" >
              
                 
    
                  <div class="form-group">
                    <label for="nama">Nama lengkap</label>
                    <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="">Nomor Handphone</label>
                    <input type="text" class="form-control" name="Nohp" id="exampleInputPassword1" placeholder="Enter Nomor HP">
                  </div>
               

                <div class="form-group">
                  <label>Jabatan</label>
                  <select class="form-control select2" style="width: 100%;" name="Jabatan">
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
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
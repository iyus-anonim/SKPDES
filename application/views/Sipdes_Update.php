  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ubah Data Pegawai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>index.php/SipdesDashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url()?>index.php/SipdesDashboard/showdataall">Data Penduduk</a></li>
              <li class="breadcrumb-item active">Ubah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- tampil data -->
  
 <!-- form start -->
 <form role="form" method="post" action="<?php
				echo base_url('index.php/SipdesMaster/Edit_Penduduk/')?>" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $hsl[0]->idSData_penduduk?>">
                 
                  
                  <div class="form-group">
                    <label for="nama">Nama lengkap</label>
                    <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Enter Name" value="<?php echo $hsl[0]->SNama_Penduduk?>">
                  </div>
                  <div class="form-group">
                    <label for="">Nomor Handphone</label>
                    <input type="text" class="form-control" name="Nohp" id="exampleInputPassword1" placeholder="Enter Nomor HP" value="<?php echo $hsl[0]->SNomor_Hp?>">
                  </div>
               

                <div class="form-group">
                  <label>Jabatan</label>
                  <select class="form-control select2" style="width: 100%;" name="Jabatan" value="<?php echo $hsl->SJabatan?>>
                    <option selected="selected" value="Sekertaris">Sekertaris</option>
                    <option value="RT">RT</option>
                    <option value="RW">RW</option>
                    <option value="Karang taruna">Karang taruna</option>
                    <option value="PKK">PKK</option>
                    <option value="KAUR">KAUR</option>
                    
                  </select>
                </div>

              
                <!---/.select-->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
            
               
                     
                <button type="submit" class="btn btn-primary">edit</button>
              

                </div>
              </form>
              
            </div>
            <!-- /.card -->
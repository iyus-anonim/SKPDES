  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>index.php/SipdesDashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url()?>index.php/SipdesDashboard/profil">Profil</a></li>
              <li class="breadcrumb-item active">Edit User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- tampil data -->
  
 <!-- form start -->
 <form role="form" method="post" action="<?php
				echo base_url('index.php/SipdesMaster/Editdata')?>" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $this->session->userdata("id"); ?>">
                 
                  
                  <div class="form-group">
                    <label for="nama">Nama lengkap</label>
                    <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Enter Name" value="">
                  </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <select class="form-control select2" style="width: 100%;" name="Jabatan" value="">
                    <option selected="selected" value="Sekertaris Desa">Sekertaris Desa</option>
                    <option value="Kaur Kesejahtraan">Kaur Kesejahtraan</option>
                    <option value="Karang taruna">Karang taruna</option>
                    <option value="KEPALA DESA">Kepala Desa</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="nama">Username</label>
                    <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="Enter New Username" value="">
                  </div>
                  <div class="form-group">
                    <label for="nama">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputEmail1" placeholder="Enter New Name" value="">
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
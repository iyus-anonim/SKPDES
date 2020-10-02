<section class="content-wrapper">
     
     
     

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
               

                <h3 class="profile-username text-center"><?php echo $this->session->userdata("username"); ?></h3>

               

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Nama Lengkap</b> <a class="float-right"><?php echo $this->session->userdata("nama"); ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Jabatan</b> <a class="float-right"><?php echo $this->session->userdata("jabatan"); ?></a>
                  </li>
                  
                </ul>
                      

                <a href="<?php echo base_url('index.php/SipdesDashboard/Edituser')?>" class="btn btn-primary btn-block"><b>Edit Profil</b></a>
                <a href="<?php echo base_url('index.php/SipdesLogin/logout')?>" class="btn btn-primary btn-block"><b>Logout</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
        
         
    </section>
    <!-- /.content -->
<script type="text/javascript">
 $(document).ready(function() {
 $('#contoh').dataTable();
 });
 </script>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>index.php/SipdesDashboard/indexSU/">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 
   
<div class="card">
            <div class="card-header">
              <h3 class="card-title">User</h3><br>
               <!-- SEARCH FORM -->
    <form class="form-inline ml-1" action="<?php echo base_url('index.php/SipdesMaster/searchpegawai'); ?>"method="post">
      <div class="input-group input-group-sm">
        <input class="form-control" type="search" name="cari" placeholder="Cari Nama Pegawai" aria-label="Search">
        <div class="input-group-append">
          <button class="Button" type="submit">
         
            <i class="fas fa-search"></i>
          </button>
        </div>
        <!-- button hapus-->
        
      </div>
    </form>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                
                  <th>Username </th>
                  <th>Password</th>
                  
                  <th>aksi</th>

                </tr>
                </thead>
                <tbody>
                        <?php 
                        $no=1;
                        foreach($isi as $p)
                       { ?>
                        <tr>
                            <td><?php echo $no++?></td>
                            
                  
                            <td><?php echo $p->Susername?></td>
                            <td><?php echo $p->Spassword?></td>
                          
                            <td>
                            
                            <a href="<?php echo base_url('index.php/SipdesMaster/deleteuser/'.$p->id_Slogin) ?>" class="btn btn-primary">delete</a>
                            </td>
                            
                        </tr>
                        <?php } ?>
                        
                </tbody>
            </table>
        </div>
    </div>
</div>      

<!--styel-->
<script src="<?php echo base_url('assets/dashboard/plugins/jquery/jquery.js'); ?>"></script>
 <script src="<?php echo base_url('assets/dashboard/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<!--/.styel-->

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
            <h1 class="m-0 text-dark">PESAN MASUK</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>index.php/SipdesDashboard">Home</a></li>
              <li class="breadcrumb-item active">Pesan Masuk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 
   
<div class="card">
            <div class="card-header">
         
               <!-- SEARCH FORM -->
    <form class="form-inline ml-1">
      <div class="input-group input-group-sm">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
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
                  <th>Pesan</th>
                  <th>pengirim</th>
                 
                  <th>Detail</th>

                </tr>
                </thead>
                <tbody>
                        <?php 
                        $no=1;
                        foreach($hsl as $p){ ?>
                        <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo $p->TextDecoded?></td>
                           
                            <td><?php echo $p->SenderNumber?></td>
                      
                            <td><a href="<?php echo base_url('index.php/SipdesMaster/deletedatainbox/'.$p->ID) ?>" class="btn btn-primary">Hapus</a>
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
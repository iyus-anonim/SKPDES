
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
            <h1 class="m-0 text-dark">PENGUMUMAN</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>index.php/SipdesDashboard">Home</a></li>
              <li class="breadcrumb-item active">Pengumuman</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 
   
<div class="card">
            <div class="card-header">
              <h3 class="card-title">Pengumuman</h3><br>
               <!-- SEARCH FORM -->
    <form class="form-inline ml-1" action="<?php echo base_url('index.php/SipdesMaster/searchpengumuman/'); ?>" method="post">
      <div class="input-group input-group-sm">
        <input class="form-control" name="cari" type="search" placeholder="Search" aria-label="Search">
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
                  <th>Nomor surat</th>
                  <th>Perihal </th>
                  <th>Sifat</th>
                  <th>Isi Surat</th>
                  <th>Tempat</th>
                  <th>Tanggal</th>
                  <th>Pengirim</th>
                  <th>Detail</th>
                  <th>aksi</th>

                </tr>
                </thead>
                <tbody>
                        <?php 
                        $no=1;
                        foreach($hsl as $p){ ?>
                        <tr>
                            <td><?php echo $no++?></td>
                            
                            <td><?php echo $p->SNoSurat?></td>
                            <td><?php echo $p->Ssifat?></td>
                            <td><?php echo $p->SHal?></td>
                            <td><?php echo $p->SisiSurat?></td>
                            <td><?php echo $p->STempat?></td>
                            <td><?php echo $p->STanggal?></td>
                            <td><?php echo $p->SPengirim?></td>
                            <td><a href="<?php echo base_url('index.php/SipdesDashboard/print/'.$p->idnew_table) ?>" class="btn btn-primary">Print</a>
                            </td>
                            <td><a href="<?php echo base_url('index.php/SipdesMaster/deletepengumuman/'.$p->idnew_table) ?>" class="btn btn-primary">delete</a>
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

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
<!--content -->
<div class="box box-solid box-warning">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-plus"></i> <i class="fa fa-book"></i> Tambah Anggota</h3>
    <div class="box-tools pull-right">
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
   <div class="box-body">

  
    <!--show error message here -->
  <div class="form-group"></div>
	<form class="form-horizontal" method="post"  action="<?php echo base_url(); ?>petugas/Pinjam/create" role="form">
              <div class="box-body">
                <div class="form-group">
                 <label class="col-sm-2 control-label">Anggota</label>
                 <div class="col-sm-5">
		               <select name="id_anggota" class="js-example-basic-single form-control" data-placeholder="Klik untuk memilih">
		  				<option value="">&nbsp;</option>
		  				<?php	foreach($data_anggota->result_array() as $op)
        						{
        						?>
        						<option value="<?php echo $op['id_anggota'];?>"><?php echo $op['nama'];?></option>
        						<?php
        						}
        						?>
        						</select>
		      		</div>
               <button type="submit" name="button" value="cek" class="btn btn-success"><i class="glyphicon glyphicon-file"></i> Record Peminjaman</button>
              </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Kembali</label>
                  <div class="col-sm-4">
                    <input data-provide="datepicker" class="bootstrap-datepicker" name="tgl_kembali">
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
              </div>
              <div class="col-sm-4">
                  <div class="btn-group">
                   <button type="reset" class="btn btn-info"><i class="fa fa-refresh"></i>Reset</button>
				</div>
                   <div class="btn-group">
                   <button type="submit"  name="button" value="simpan" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button>
                  </div>
              </div>
              <!-- /.box-footer -->
            </form>
  </div>
  <div class="box-footer">
    <td>
     <div align ="Right"> <a  href="<?php echo base_url(); ?>petugas/Pinjam"  class="btn btn-danger" role="button" data-toggle="tooltip" title="Kembali"></i>Back</a></div>
  </td>
  </div>
  <div class="box-footer">
    Menambah Data Aanggota Perpustakaan, isi form diatas untuk menambahkan data Anggota. 
  </div><!-- box-footer -->
</div><!-- /.box -->



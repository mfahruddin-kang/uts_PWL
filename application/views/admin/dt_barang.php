<h3><span class="glyphicon glyphicon-briefcase"></span>  Data Barang</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Barang</button>
<br/>
<br/>
<div class="col-md-12">
  <table class="col-md-2">
    <tr>
      <td>Jumlah Record</td>    
      <td></td>
    </tr>
    <tr>
      <td>Jumlah Halaman</td> 
      <td></td>
    </tr>
  </table>
  <a style="margin-bottom:10px" href="lap_barang.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
</div>
<form action="cari_act.php" method="get">
  <div class="input-group col-md-5 col-md-offset-7">
    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
    <input type="text" class="form-control" placeholder="Cari barang di sini .." aria-describedby="basic-addon1" name="cari"> 
  </div>
</form>
<br/>
<table class="table table-hover">
  <tr>
    <th class="col-md-1">No</th>
    <th class="col-md-4">Nama Barang</th>
    <th class="col-md-3">Harga Jual</th>
    <th class="col-md-1">Jumlah</th>
    <th class="col-md-3">Opsi</th>
  </tr>
</table>
<ul class="pagination">               
    </ul>
<!-- modal input -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Tambah Barang Baru</h4>
      </div>
      <div class="modal-body">
        <form action="tmb_brg_act.php" method="post">
          <div class="form-group">
            <label>Nama Barang</label>
            <input name="nama" type="text" class="form-control" placeholder="Nama Barang ..">
          </div>
          <div class="form-group">
            <label>Jenis</label>
            <input name="jenis" type="text" class="form-control" placeholder="Jenis Barang ..">
          </div>
          <div class="form-group">
            <label>Suplier</label>
            <input name="suplier" type="text" class="form-control" placeholder="Suplier ..">
          </div>
          <div class="form-group">
            <label>Harga Modal</label>
            <input name="modal" type="text" class="form-control" placeholder="Modal per unit">
          </div>  
          <div class="form-group">
            <label>Harga Jual</label>
            <input name="harga" type="text" class="form-control" placeholder="Harga Jual per unit">
          </div>  
          <div class="form-group">
            <label>Jumlah</label>
            <input name="jumlah" type="text" class="form-control" placeholder="Jumlah">
          </div>                                  

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Simpan">
        </div>
      </form>
    </div>
  </div>
</div>
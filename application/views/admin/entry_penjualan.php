<h3><span class="glyphicon glyphicon-transfer"></span>Data Barang Terjual</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-pencil"></span>  Entry</button>
<form action="" method="get">
  <div class="input-group col-md-5 col-md-offset-7">
    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
    <select type="submit" name="tanggal" class="form-control" onchange="">
      <option>Pilih tanggal ..</option>    
    </select>
  </div>

</form>
<br/>
<a style="margin-bottom:10px" href="" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
<table class="table">
  <tr>
    <th>No</th>
    <th>Tanggal</th>
    <th>Nama Barang</th>
    <th>Harga Terjual /pc</th>
    <th>Total Harga</th>
    <th>Jumlah</th>     
    <th>Laba</th>     
    <th>Opsi</th>
  </tr>
  <tr>
    <td colspan="7">Total Pemasukan</td>
  </tr>
</table>

<!-- modal input -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Tambah Penjualan
        </div>
        <div class="modal-body">        
          <form action="barang_laku_act.php" method="post">
            <div class="form-group">
              <label>Tanggal</label>
              <input name="tgl" type="text" class="form-control" id="tgl" autocomplete="off">
            </div>  
            <div class="form-group">
              <label>Nama Barang</label>                
              <select class="form-control" name="nama">

                  <option value=""</option>

              </select>

            </div>                  
            <div class="form-group">
              <label>Harga Jual / unit</label>
              <input name="harga" type="text" class="form-control" placeholder="Harga" autocomplete="off">
            </div>  
            <div class="form-group">
              <label>Jumlah</label>
              <input name="jumlah" type="text" class="form-control" placeholder="Jumlah" autocomplete="off">
            </div>                                  

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <input type="reset" class="btn btn-danger" value="Reset">                       
            <input type="submit" class="btn btn-primary" value="Simpan">
          </div>
        </form>
      </div>
    </div>
  </div>
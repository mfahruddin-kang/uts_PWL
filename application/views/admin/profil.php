<!-- Start Collapse Konten Utama --> <div class="panel-collapse collapse in" id="main_konten"> <link rel="stylesheet" type="text/css" href="https://elearning.unisnu.ac.id/assets/css/pref.css"> <div class="card hovercard"> <div class="card-background"> <div id="foto_bg" class="card-bkimg"></div> </div> <div class="useravatar"> <div id="foto"></div> </div> <div class="card-info"> <span class="card-title">MUHAMMAD FAHRUDDIN, </span> </div> </div> <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="..."> <div class="btn-group" role="group"> <button type="button" id="Lprofil" class="btn bg-green" href="#profil" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <div class="hidden-xs">Profile Preference</div> </button> </div> <div class="btn-group" role="group"> <button type="button" id="Lpassword" class="btn btn-default btn-flat" href="#pass" data-toggle="tab"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> <div class="hidden-xs">Reset Password</div> </button> </div> <div class="btn-group" role="group"> <button type="button" id="Lwifi" class="btn btn-default btn-flat" href="#wifi" data-toggle="tab"><span class="glyphicon glyphicon-signal" aria-hidden="true"></span> <div class="hidden-xs">Password Wifi</div> </button> </div> <div class="btn-group" role="group"> <button type="button" id="Ltg" class="btn btn-default btn-flat" href="#tg" data-toggle="tab"> <span class="glyphicon glyphicon-send "></span>&nbsp; <div class="hidden-xs">Aplikasi Telegram</div> </button> </div> <!-- <div class="btn-group" role="group"> <button type="button" id="Linfo" class="btn btn-default btn-flat" href="#info_unisnu" data-toggle="tab"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> <div class="hidden-xs">Aplikasi UConv</div> </button> </div> --> <div class="btn-group" role="group"> <button type="button" id="Lprofil" class="btn btn-default btn-flat" href="#camera" data-toggle="tab" disabled><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> <div class="hidden-xs">Foto Profil</div> </button> </div> </div> <div class="panel panel-default"> <div class="panel-body"> <div class="tab-content"> <div class="tab-pane fade in active" id="profil"> <form action="https://elearning.unisnu.ac.id/#" class="form-horizontal" id="fPref" method="post" accept-charset="utf-8"> <div class="form-group"> <label class="col-sm-4 control-label">Nama</label> <div class="col-sm-8"> <p class="form-control-static"><b>MUHAMMAD FAHRUDDIN, (181240000824)</b></p> </div> </div> <div class="form-group"> <label class="col-sm-4 control-label">Tempat, Tanggal Lahir</label> <div class="col-sm-8"> <p class="form-control-static">JEPARA, 25 Juli 2000</p> </div> </div> <div class="form-group"> <label class="col-sm-4 control-label">Login Sebagai</label> <div class="col-sm-8"> <p class="form-control-static">MAHASISWA</p> </div> </div> <div class="form-group"> <label for="alamat" class="col-sm-4 control-label">Alamat</label> <div class="col-sm-6"> <textarea name="alamat" cols="40" rows="4" id="alamat" maxlength="254" class="form-control" placeholder="Alamat" >NGABUL</textarea> </div> </div> <div class="form-group"> <label for="email" class="col-sm-4 control-label">Email</label> <div class="col-sm-4"> <input type="text" name="email" value="muhammadfahruddin76@gmail.com" id="email" maxlength="128" class="form-control" placeholder="Email" size="20" /> <span class="help-block"></span> </div> </div> <div class="form-group"> <label for="hp" class="col-sm-4 control-label">No Handphone</label> <div class="col-sm-3"> <input type="text" name="hp" value="0895328710789" id="hp" maxlength="18" class="form-control" placeholder="No Handphone" size="20" onkeyup="this.value=characterControl(this.value);" /> <span class="help-block"></span> </div> </div> <div class="form-group"> <label for="tema" class="col-sm-4 control-label">Warna Tema</label> <div class="col-sm-3"> <select name="tema" class="form-control"> <option value=""></option> <option value="skin-red">Merah</option> <option value="skin-green" selected="selected">Hijau</option> <option value="skin-black">Hitam</option> <option value="skin-blue">Biru</option> <option value="skin-purple">Purple</option> <option value="skin-yellow">Kuning</option> </select> <span class="help-block"></span> </div> </div> <div class="form-group"> <label class="col-sm-4 control-label"></label> <div class="col-sm-5"> <button type="submit" name="btnSimpan" id="btnSimpan" class="btn btn-default btn-flat"> <span class="glyphicon glyphicon-save "></span>&nbsp; &nbsp; Simpan </button> </div> </div> </form> </div> <div class="tab-pane fade in" id="pass"> <form action="https://elearning.unisnu.ac.id/#" class="form-horizontal" id="fPass" method="post" accept-charset="utf-8"> <div class="form-group"> <label for="pass1" class="col-sm-4 control-label">Password Baru</label> <div class="col-sm-4"> <input type="password" name="pass1" value="" id="pass1" maxlength="30" class="form-control" placeholder="Password Baru" size="30" /> <span class="help-block"></span> </div> </div> <div class="form-group"> <label for="pass2" class="col-sm-4 control-label">Konfirmasi Password</label> <div class="col-sm-4"> <input type="password" name="pass2" value="" id="pass2" maxlength="30" class="form-control" placeholder="Konfirmasi Password" size="30" /> <span class="help-block"></span> </div> </div> <div class="form-group"> <label class="col-sm-4 control-label"></label> <div class="col-sm-5"> <button type="submit" name="btnPass" id="btnPass" class="btn btn-default btn-flat"> <span class="glyphicon glyphicon-save "></span>&nbsp; &nbsp; Ubah Password </button> </div> </div> </form> </div> <div class="tab-pane fade in" id="wifi"> <form action="https://elearning.unisnu.ac.id/#" class="form-horizontal" id="fWifi" method="post" accept-charset="utf-8"> <div class="form-group"> <label for="wifi1" class="col-sm-4 control-label">Password Baru</label> <div class="col-sm-4"> <input type="password" name="wifi1" value="" id="wifi1" maxlength="30" class="form-control" placeholder="Password Baru" size="30" /> <span class="help-block"></span> </div> </div> <div class="form-group"> <label for="wifi2" class="col-sm-4 control-label">Konfirmasi Password</label> <div class="col-sm-4"> <input type="password" name="wifi2" value="" id="wifi2" maxlength="30" class="form-control" placeholder="Konfirmasi Password" size="30" /> <span class="help-block"></span> </div> </div> <div class="form-group"> <label class="col-sm-4 control-label"></label> <div class="col-sm-5"> <button type="submit" name="btnWifi" id="btnWifi" class="btn btn-default btn-flat"> <span class="glyphicon glyphicon-save "></span>&nbsp; &nbsp; Ubah Password Wifi </button> </div> </div> </form> </div> <div class="tab-pane fade in" id="tg"> <div id="isi_tg"></div> </div> <div class="tab-pane fade in" id="info_unisnu"> <form action="https://elearning.unisnu.ac.id/#" class="form-horizontal" id="fInfo" method="post" accept-charset="utf-8"> <input type="hidden" name="status" value="" /> <div class="form-group"> <label for="" class="col-sm-9 control-label">Akun UConv belum dibuat, silahkan isi password kemudian simpan</label> <label for="infoUsername" class="col-sm-4 control-label">Username</label> <div class="col-sm-5"> <input type="text" name="infoUsername" value="181240000824" id="infoUsername" maxlength="32" class="form-control" placeholder="username" size="20" disabled="disabled" /> <span class="help-block"></span> </div> </div> <div class="form-group"> <label for="info1" class="col-sm-4 control-label">Password Baru</label> <div class="col-sm-5"> <input type="password" name="info1" value="" id="info1" maxlength="30" class="form-control" placeholder="Password Baru" size="30" /> <span class="help-block"></span> </div> </div> <div class="form-group"> <label for="info2" class="col-sm-4 control-label">Konfirmasi Password</label> <div class="col-sm-5"> <input type="password" name="info2" value="" id="info2" maxlength="30" class="form-control" placeholder="Konfirmasi Password" size="30" /> <span class="help-block"></span> </div> </div> <div class="form-group"> <label class="col-sm-4 control-label"></label> <div class="col-sm-5"> <button type="submit" name="btnInfo" id="btnInfo" class="btn btn-default btn-flat"> <span class="glyphicon glyphicon-save "></span>&nbsp; &nbsp; Simpan </button> <!-- <a href="https://elearning.unisnu.ac.id/media/info_unisnu.apk" class="btn btn-flat btn-default"><span class="fa fa-android"></span> &nbsp; Download Aplikasi</a> --> </div> </div> </form> </div> <div class="tab-pane fade in" id="camera"> <button id="foto_profil" class="btn btn-default btn-flat btn-lg"><span class="glyphicon glyphicon-camera "></span>&nbsp;&nbsp;Ganti Foto Profil</button> </div> </div> </div> <div class="panel-footer"></div> </div> <!-- Start modal upload --> <div class="modal fade" id="mFoto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="false"> <div class="modal-dialog modal-sm"> <div class="modal-content"> <div class="modal-header bg-green"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove-circle "></span>&nbsp;</button> <h4 class="modal-title" id="myModalLabel">Upload Foto</h4> </div> <div class="modal-body"> <form action="https://elearning.unisnu.ac.id/#" class="form-horizontal" id="fUpload" enctype="multipart/form-data" method="post" accept-charset="utf-8"> <div class="form-group"> <label for="f0" class="col-sm-4 control-label">File Foto</label> <div class="col-sm-8"> <div class="btn btn-default btn-flat btn-file"> <i class="fa fa-paperclip"></i> File Foto <input type="file" id="f0" name="f0"/> </div> <p class="help-block">File Max. 1M</p> <span class="help-block"></span> </div> </div> </div> <div class="modal-footer bg-gray"> <div class="btn-group"> <a href="javascript:void()" id="btnUpload" class="btn bg-green">Upload</a> <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancel</button> </div> </div> </form> </div> </div> </div> <!-- End modal upload --> <script type="text/javascript">
	var controller = 'master/profil/';
	var files;
	$(document).ready(function () {
		load_foto();
		$('#fPref').on('submit', update_profil);
		$('#foto_profil').click(function () {
			$('#mFoto').modal('show');
		});
		$('input[type=file]').on('change', prepareUpload);
		$('#btnUpload').on('click', uploadFiles);
		$('#mFoto').on('hidden.bs.modal', function (e) {
			$('#fUpload')[0].reset();
		});
		$('#fPass').on('submit', reset_password);
		$(".btn-pref .btn").click(function () {
		  $(".btn-pref .btn").removeClass("bg-green").addClass("btn-default btn-flat");
		  // $(".tab").addClass("active"); // instead of this do the below
		  $(this).removeClass("btn-default btn-flat").addClass("bg-green");
		});
		$('#fWifi').on('submit', reset_wifi);
		$('#fInfo').on('submit', reset_info);
		$('#Linfo').on('click', function () {
			$('.form-group').removeClass('has-error');
			$('.help-block').empty();
			$('#fInfo')[0].reset();
			if ($('[name="status"]').val()=="") {
				$.notify({message:'Untuk mendaftar Aplikasi UConv isi username dan password kemudian klik "Simpan" !'},{type:'info'});
			}else{
				$.notify({message:'Untuk mereset password Aplikasi UConv isi password kemudian klik "Simpan" !'},{type:'info'});
			}
		});
		$('#Ltg').on('click', load_tg);
	});

	function load_tg() {
		$('#btnTg').button("loading");
		var a0 = {
			'req': 'load_tg',
		}
		_post(a0, controller, function (data) {
			$('#isi_tg').html(data.isi);
			$('#btnTg').button("reset");
		});		
	}

	function reset_info(event) {
		event.stopPropagation();
		event.preventDefault();
		$('.form-group').removeClass('has-error');
		$('.help-block').empty();
		if ($('#info1').val() == $('#info2').val()) {
			$('#btnInfo').button('loading');
			url_post = base_url + controller + "reset_info";
			$.ajax({
				url : url_post,
				type: "POST",
				data: $('#fInfo').serialize(),
				dataType: "JSON",
				success: function(data)
				{
					if(data.status){
						location.reload();
						$.notify({message:'Data berhasil disimpan !'},{type:'success'});
					}else{
						if (data.error) {
							$.notify({message: data.error},{type:'danger'});
						}else{
							for (var i = 0; i < data.inputerror.length; i++){
								$('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error');
								$('[name="'+data.inputerror[i]+'"]').next(".help-block").text(data.error_string[i]);
							}
						}
					}
					$('#btnInfo').button('reset');
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					$.notify('Error saving data');
					$('#btnInfo').button('reset');
				}
			});
		}else{
			$.notify({message:'Password yang anda masukkan tidak sesuai !'},{type:'danger'});
		}
	}

	function reset_wifi(event) {
		event.stopPropagation();
		event.preventDefault();
		$('.form-group').removeClass('has-error');
		$('.help-block').empty();
		if ($('#wifi1').val() == $('#wifi2').val()) {
			$('.form-group').removeClass('has-error');
			$('.help-block').empty();
			$('#btnWifi').button('loading');
			url_post = base_url + controller + "reset_wifi";
			$.ajax({
				url : url_post,
				type: "POST",
				data: $('#fWifi').serialize(),
				dataType: "JSON",
				success: function(data)
				{
					if(data.status){
						$('#fWifi')[0].reset();
						$.notify('Password wifi berhasil direset !');
					}else{
						for (var i = 0; i < data.inputerror.length; i++){
							$('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error');
							$('[name="'+data.inputerror[i]+'"]').next(".help-block").text(data.error_string[i]);
						}
					}
				$('#btnWifi').button('reset');
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					$.notify('Error saving data');
					$('#btnWifi').button('reset');
				}
			});
		}else{
			$.notify('Password yang anda masukkan tidak sesuai !');
		}
	}

	function reset_password(event) {
		if ($('#pass1').val() == $('#pass2').val()) {
		  event.stopPropagation();
		  event.preventDefault();
		  $('.form-group').removeClass('has-error');
		  $('.help-block').empty();
		  $('#btnPass').button('loading');
		  url_post = base_url + controller + "reset_password";
		  $.ajax({
		      url : url_post,
		      type: "POST",
		      data: $('#fPass').serialize(),
		      dataType: "JSON",
		      success: function(data)
		      {
		        if(data.status){
		        	$('#fPass')[0].reset();
		          $.notify('Password anda berhasil direset !');
		        }else{
		          for (var i = 0; i < data.inputerror.length; i++){
		            $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error');
		            $('[name="'+data.inputerror[i]+'"]').next(".help-block").text(data.error_string[i]);
		          }
		        }
		        $('#btnPass').button('reset');
		      },
		      error: function (jqXHR, textStatus, errorThrown)
		      {
		        $.notify('Error adding / update data');
		        $('#btnPass').button('reset');
		      }
		  });
		}else{
		  event.stopPropagation();
		  event.preventDefault();
			$.notify('Password yang anda masukkan tidak sesuai !');
		}
	}

	function load_foto() {
		$.get(base_url + controller + "load_foto", function (data) {
			$("#foto").html(data);
			$("#foto_bg").html(data);
		});
	}

	function update_profil(event) {
	  event.stopPropagation();
	  event.preventDefault();
	  $('.form-group').removeClass('has-error');
	  $('.help-block').empty();
	  $('#btnSimpan').button('loading');
	  url_post = base_url + controller + "update_profil";
	  $.ajax({
	      url : url_post,
	      type: "POST",
	      data: $('#fPref').serialize(),
	      dataType: "JSON",
	      success: function(data)
	      {
	        $.notify('Data berhasil diupdate !');
	        $('#btnSimpan').button('reset');
	      },
	      error: function (jqXHR, textStatus, errorThrown)
	      {
	        $.notify('Error adding / update data');
	        $('#btnSimpan').button('reset');
	      }
	  });
	}

	function prepareUpload(event)
	{
	  files = event.target.files;
	}

	function uploadFiles()
	{
	  if (files) {
	    $('#btnUpload').button('loading');
	    var data = new FormData();
	    $.each(files, function(key, value)
	    {
	      data.append(key, value);
	    });

	    $.ajax({
	      url: base_url + controller + "upload",
	      type: 'POST',
	      data: data,
	      cache: false,
	      dataType: 'json',
	      processData: false,
	      contentType: false,
	      success: function(data)
	      {
	        if(data.status){
	          $('#mFoto').modal('hide');
	          load_foto();
	        }else{
	          $.notify('Upload Gagal, ' + data.error);
	        }
	        $('#btnUpload').button('reset');
	      },
	      error: function(jqXHR, textStatus, errorThrown){
	        $.notify('Upload Gagal, ' + textStatus);
	        $('#btnUpload').button('reset');
	      }
	    });
	  }else{
	    $.notify('Anda belum memilih dokumen yang akan diupload !');
	  }
	}
</script> </div> <!-- End Collapse Konten Utama -->
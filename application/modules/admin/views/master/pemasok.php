<div class="box">
	<div class="box-header">
		<h3 class="box-title">Pemasok / Supplier</h3>
	</div>
	<div class="box-body">
  <!--
		<p>
			<button class="btn btn-primary" id="btnPemasok">Tambah Data Supplier</button>
		</p>	
  -->

<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->

<!--
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 
-->

<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-iso.css');?>" /> 
<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" />


<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<div id="pemasok" class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">

<?php
$attributes = array('id' => 'frmPemasok',
                    'class' => 'form-horizontal');
echo form_open('admin/master/pemasok/tambah', $attributes);
?>
     <div class="form-group ">
      <label class="control-label requiredField" for="kode_pemasok">
       Kode Pemasok
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="kode_pemasok" name="kode_pemasok" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="nama_pemasok">
       Nama Pemasok
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-bars">
        </i>
       </div>
	      <input class="form-control" id="nama_pemasok" name="nama_pemasok" type="text"/>
      </div>      
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="alamatpemasok">
       Alamat
       <span class="asteriskField">
        *
       </span>
      </label>
	      <input class="form-control" id="alamatpemasok" name="alamatpemasok" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="emailpemasok">
       Email
      </label>
      <input class="form-control" id="emailpemasok" name="emailpemasok" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="notelppemasok">
       No Telp
      </label>
      <input class="form-control" id="notelppemasok" name="notelppemasok" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="faxpemasok">
       Fax
      </label>
      <input class="form-control" id="faxpemasok" name="faxpemasok" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="namakontakp">
       Nama Kontak
      </label>
      <input class="form-control" id="namakontakp" name="namakontakp" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="nohpkontakp">
       No Kontak
      </label>
      <input class="form-control" id="nohpkontakp" name="nohpkontakp" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="kota">
       Kota
      </label>
      <input class="form-control" id="kota" name="kota" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="provinsi">
       Provinsi
      </label>
      <input class="form-control" id="provinsi" name="provinsi" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="kode_pos">
       Kode Pos
      </label>
      <input class="form-control" id="kode_pos" name="kode_pos" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="website">
       Website
      </label>
      <input class="form-control" id="website" name="website" type="text"/>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary" name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
    </div>
</div>
</div>
</div>

	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#frmPemasok')
        .formValidation({
	        framework: 'bootstrap',
	        icon: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },
	        fields: {
	            kode_pemasok: {
	                validators: {
	                    notEmpty: {
	                        message: 'This field is required'
	                    }
	                }
	            },
	            nama_pemasok: {
	                validators: {
	                    notEmpty: {
	                        message: 'This field is required'
	                    }
	                }
	            },
	            alamatpemasok: {
	                validators: {
	                    notEmpty: {
	                        message: 'This field is required'
	                    }
	                }
	            },
              namakontakp: {
                  validators: {
                      notEmpty: {
                          message: 'This field is required'
                      }
                  }
              },
              nohpkontakp: {
                  validators: {
                      notEmpty: {
                          message: 'This field is required'
                      }
                  }
              },
              kota: {
                  validators: {
                      notEmpty: {
                          message: 'This field is required'
                      }
                  }
              },
              provinsi: {
                  validators: {
                      notEmpty: {
                          message: 'This field is required'
                      }
                  }
              },
	            kode_pos: {
	                validators: {
	                    integer: {
		                	min: 5,
		                	max: 5,
	                        message: 'The value is not number'
	                    }
	                }
	            }	            
	        }
        })
        .on('success.form.fv', function(e) {
            e.preventDefault();
            var $form = $(e.target),                  
                bv    = $form.data('formValidation'); 
            $.post($form.attr('action'), $form.serialize(), function(result) {
                $form.parents('.bootbox').modal('hide');
            }, 'json');
        });

    $('#btnPemasok').on('click', function() {
        bootbox
            .dialog({
                title: 'Data Pelanggan',
                message: $('#pelanggan'),
                show: false 
            })
            .on('shown.bs.modal', function() {
                $('#pelanggan').show();                           
                $('#frmPemasok').formValidation('resetForm', true); 
            })
            .on('hide.bs.modal', function(e) {
                $('#pelanggan').hide().appendTo('body');
            })
            .modal('show');
    });

});	
</script>

<!-- https://formden.com/form-builder/ -->
<script src="<?php echo base_url('assets/js/bootbox.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/formValidation.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.scrollUp.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/scroll-fix.js');?>"></script>
<script src="<?php echo base_url('assets/js/numeric.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.number.min.js');?>"></script>

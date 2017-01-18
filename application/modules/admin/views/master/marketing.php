<div class="box">
	<div class="box-header">
		<h3 class="box-title">Marketing</h3>
	</div>
	<div class="box-body">
		<p>
			<button class="btn btn-primary" id="btnMarketing">Tambah Data Marketing</button>
		</p>	


<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-iso.css');?>" /> 
<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" />


<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<div id="marketing" class="bootstrap-iso" style="display: none;">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">

	<form id="frmMarketing" method="post" action="<?php echo base_url('admin/master/marketing/tambah');?>" class="form-horizontal">
     <div class="form-group ">
      <label class="control-label requiredField" for="kode_marketing">
       Kode Marketing
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-barcode">
        </i>
       </div>      
      <input class="form-control" id="kode_marketing" name="kode_marketing" type="text"/>
     </div>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="nama">
       Nama Marketing
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-bars">
        </i>
       </div>
	      <input class="form-control" id="nama" name="nama" type="text"/>
      </div>      
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="alamat">
       Alamat
       <span class="asteriskField">
        *
       </span>
      </label>
	      <input class="form-control" id="alamat" name="alamat" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="no_hp">
       No HP
      </label>
      <input class="form-control" id="no_hp" name="no_hp" type="text"/>
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
	$("#no_hp").ForceNumericOnly().number(true);	
	$("#kode_pos").ForceNumericOnly().number(true);	
    $('#frmMarketing')
        .formValidation({
	        framework: 'bootstrap',
	        icon: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },
	        fields: {
	            kode_marketing: {
	                validators: {
	                    notEmpty: {
	                        message: 'This field is required'
	                    }
	                }
	            },
	            nama: {
	                validators: {
	                    notEmpty: {
	                        message: 'This field is required'
	                    }
	                }
	            },
	            kode_pos: {
	                validators: {
	                    notEmpty: {
	                        message: 'This field is required'
	                    }
	                }
	            },
	            alamat: {
	                validators: {
	                    notEmpty: {
	                        message: 'This field is required'
	                    }
	                }
	            },
	            no_hp: {
	                validators: {
	                    integer: {
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

    $('#btnMarketing').on('click', function() {
        bootbox
            .dialog({
                title: 'Data Marketing',
                message: $('#marketing'),
                show: false 
            })
            .on('shown.bs.modal', function() {
                $('#marketing').show();                           
                $('#frmMarketing').formValidation('resetForm', true); 
            })
            .on('hide.bs.modal', function(e) {
                $('#marketing').hide().appendTo('body');
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


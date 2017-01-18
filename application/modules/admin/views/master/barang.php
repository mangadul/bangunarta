<div class="box">
	<div class="box-header">
		<h3 class="box-title">Barang</h3>
	</div>
	<div class="box-body">
  <!--
		<p>
			<button class="btn btn-primary" id="btnBarang">Tambah Data Barang</button>
		</p>	
    -->

<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-iso.css');?>" /> 
<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) 
style="display: none;"
-->
<div id="barang" class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">

<?php
$attributes = array('class' => 'form-horizontal',
                'id' => 'frmBarang');
echo form_open('admin/master/barang/tambah', $attributes);
?>                            

     <div class="form-group ">
      <label class="control-label requiredField" for="kode_barang">
       Kode Barang
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-barcode">
        </i>
       </div>
       <input class="form-control" id="kode_barang" name="kode_barang" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="nama_barang">
       Nama Barang
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-bars">
        </i>
       </div>
       <input class="form-control" id="nama_barang" name="nama_barang" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="harga_pokok">
       Harga Pokok
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-usd">
        </i>
       </div>
       <input class="form-control" id="harga_pokok" name="harga_pokok" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="harga_jual">
       Harga Jual
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-usd">
        </i>
       </div>
       <input class="form-control" id="harga_jual" name="harga_jual" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="stok">
       Stok
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="stok" name="stok" type="text"/>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="submit" type="submit">
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
	$("#harga_jual").ForceNumericOnly().number(true,2);
	$("#harga_pokok").ForceNumericOnly().number(true,2);
	$("#stok").ForceNumericOnly().number(true);
    $('#frmBarang')
        .formValidation({
	        framework: 'bootstrap',
	        icon: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },
	        fields: {
	            kode_barang: {
	                validators: {
	                    notEmpty: {
	                        message: 'This field is required'
	                    }
	                }
	            },
	            nama_barang: {
	                validators: {
	                    notEmpty: {
	                        message: 'This field is required'
	                    }
	                }
	            },
	            harga_pokok: {
	                validators: {
	                    notEmpty: {
	                        message: 'This field is required'
	                    }
	                }
	            },
	            harga_jual: {
	                validators: {	                        
	                    integer: {message: 'The value is not number'
	                    }
	                }
	            },            
	            stok: {
	                validators: {	                        
	                    integer: {message: 'The value is not number'
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

    $('#btnBarang').on('click', function() {
        bootbox
            .dialog({
                title: 'Data Barang',
                message: $('#barang'),
                show: false 
            })
            .on('shown.bs.modal', function() {
                $('#barang').show();                       
                $('#frmBarang').formValidation('resetForm', true); 
            })
            .on('hide.bs.modal', function(e) {
                $('#barang').hide().appendTo('body');
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

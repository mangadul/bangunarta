<div class="box">
  <div class="box-header">
    <h3 class="box-title">Diskon / Promo</h3>
  </div>
  <div class="box-body">
  <!--
    <p>
      <button class="btn btn-primary" id="btnKaryawan">Tambah Data Karyawan</button>
    </p>  
    -->


<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-iso.css');?>" /> 
<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/js/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>" />


<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<div id="diskon" class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">

<?php
$attributes = array('id' => 'frmDiskon',
                    'class' => 'form-horizontal');
echo form_open('admin/master/diskon/tambah', $attributes);
?>

     <div class="form-group ">
      <label class="control-label requiredField" for="kode_promo">
       Kode Promo
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-barcode">
        </i>
       </div>      
      <input class="form-control" id="kode_promo" name="kode_promo" type="text"/>
     </div>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="nama_promo">
       Nama Promo
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-bars">
        </i>
       </div>
        <input class="form-control" id="nama_promo" name="nama_promo" type="text"/>
      </div>      
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="besar_diskon">
       Diskon (dalam persen)
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="besar_diskon" name="besar_diskon" type="text"/>
     </div>           
     <div class="form-group ">  
      <label class="control-label requiredField" for="tgl_awal_promo">
       Tanggal Awal Promo
       <span class="asteriskField">
        *
       </span>
      </label>
      <div id="tgl_awal_promo" class="input-group date">
          <input readonly name="tgl_awal_promo" type="text" class="form-control">
          <div class="input-group-addon">
              <span class="glyphicon glyphicon-th"></span>
          </div>
      </div>          
     </div>
     <div class="form-group ">  
      <label class="control-label requiredField" for="tgl_akhir_promo">
       Tanggal Berakhir Promo
       <span class="asteriskField">
        *
       </span>
      </label>
      <div id="tgl_akhir_promo" class="input-group date">
          <input readonly name="tgl_akhir_promo" type="text" class="form-control">
          <div class="input-group-addon">
              <span class="glyphicon glyphicon-th"></span>
          </div>
      </div>          
     </div>
     <div class="form-group ">
      <label class="control-label " for="is_aktif">
       Status Promo
      </label>
      <input class="form-control" id="is_aktif" name="is_aktif" type="text"/>
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
  $("#besar_diskon").ForceNumericOnly().number();  
  $('#frmDiskon')
        .formValidation({
          framework: 'bootstrap',
          icon: {
              valid: 'glyphicon glyphicon-ok',
              invalid: 'glyphicon glyphicon-remove',
              validating: 'glyphicon glyphicon-refresh'
          },
          fields: {
              kode_promo: {
                  validators: {
                      notEmpty: {
                          message: 'This field is required'
                      }
                  }
              },
              nama_promo: {
                  validators: {
                      notEmpty: {
                          message: 'This field is required'
                      }
                  }
              },
              tgl_akhir_promo: {
                  validators: {
                      notEmpty: {
                          message: 'This field is required'
                      }
                  }
              },
              tgl_awal_promo: {
                  validators: {
                      notEmpty: {
                          message: 'This field is required'
                      }
                  }
              },
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

    /*
    $('#btnKaryawan').on('click', function() {
        bootbox
            .dialog({
                title: 'Data Karyawan',
                message: $('#karyawan'),
                show: false 
            })
            .on('shown.bs.modal', function() {
                $('#karyawan').show();                           
                $('#frmDiskon').formValidation('resetForm', true); 
            })
            .on('hide.bs.modal', function(e) {
                $('#karyawan').hide().appendTo('body');
            })
            .modal('show');
    });
    */

    $('#tgl_awal_promo input').datepicker({
        format: "yyyy-mm-dd",
        language: "id",
        todayBtn: true,
        todayHighlight: true,         
        autoclose: true
    });

    $('#tgl_akhir_promo input').datepicker({
        format: "yyyy-mm-dd",
        language: "id",
        todayBtn: true,
        todayHighlight: true,         
        autoclose: true
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
<script src="<?php echo base_url('assets/js/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');?>"></script>

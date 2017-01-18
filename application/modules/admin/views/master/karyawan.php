<div class="box">
  <div class="box-header">
    <h3 class="box-title">Karyawan</h3>
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

<div id="karyawan" class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">

<?php
$attributes = array('id' => 'frmKaryawan',
                    'class' => 'form-horizontal');
echo form_open('admin/master/karyawan/tambah', $attributes);
?>
<!--
  <form id="frmMarketing" method="post" action="<?php echo base_url('admin/master/karyawan/tambah');?>" class="form-horizontal">
-->
     <div class="form-group ">
      <label class="control-label requiredField" for="kode_pegawai">
       Kode Pegawai
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-barcode">
        </i>
       </div>      
      <input class="form-control" id="kode_pegawai" name="kode_pegawai" type="text"/>
     </div>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="fullname">
       Nama Lengkap
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-bars">
        </i>
       </div>
        <input class="form-control" id="fullname" name="fullname" type="text"/>
      </div>      
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="no_ktp">
       No KTP
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="no_ktp" name="no_ktp" type="text"/>
     </div>           
     <div class="form-group ">
      <label class="control-label requiredField" for="alamat_lengkap">
       Alamat
       <span class="asteriskField">
        *
       </span>
      </label>
        <input class="form-control" id="alamat_lengkap" name="alamat_lengkap" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="tempat_lahir">
       Tempat Lahir
       <span class="asteriskField">
        *
       </span>
      </label>
        <input class="form-control" id="tempat_lahir" name="tempat_lahir" type="text"/>
     </div>
     <div class="form-group ">  
      <label class="control-label requiredField" for="tgl_lahir">
       Tanggal Lahir
       <span class="asteriskField">
        *
       </span>
      </label>
      <div id="tgl_lahir" class="input-group date">
          <input readonly name="tgl_lahir" type="text" class="form-control">
          <div class="input-group-addon">
              <span class="glyphicon glyphicon-th"></span>
          </div>
      </div>          
     </div>
     <div class="form-group ">
      <label class="control-label " for="alamat_email">
       Email
      </label>
      <input class="form-control" id="alamat_email" name="alamat_email" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="nohp">
       No HP
      </label>
      <input class="form-control" id="nohp" name="nohp" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="desa">
       Desa
      </label>
      <input class="form-control" id="desa" name="desa" type="text"/>
     </div>     
     <div class="form-group ">
      <label class="control-label " for="kec">
       Kecamatan
      </label>
      <input class="form-control" id="kec" name="kec" type="text"/>
     </div>     
     <div class="form-group ">
      <label class="control-label " for="kota">
       Kota
      </label>
      <input class="form-control" id="kota" name="kota" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="prov">
       Provinsi
      </label>
      <input class="form-control" id="prov" name="prov" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="kode_pos">
       Kode Pos
      </label>
      <input class="form-control" id="kode_pos" name="kode_pos" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="id_status_karyawan">
       Status Pegawai
      </label>
      <input class="form-control" id="id_status_karyawan" name="id_status_karyawan" type="text"/>
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
  $("#nohp").ForceNumericOnly().number();  
  $("#no_ktp").ForceNumericOnly().number();  
  $("#kode_pos").ForceNumericOnly().number(true); 
    $('#frmKaryawan')
        .formValidation({
          framework: 'bootstrap',
          icon: {
              valid: 'glyphicon glyphicon-ok',
              invalid: 'glyphicon glyphicon-remove',
              validating: 'glyphicon glyphicon-refresh'
          },
          fields: {
              kode_pegawai: {
                  validators: {
                      notEmpty: {
                          message: 'This field is required'
                      }
                  }
              },
              fullname: {
                  validators: {
                      notEmpty: {
                          message: 'This field is required'
                      }
                  }
              },
              no_ktp: {
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
              tempat_lahir: {
                  validators: {
                      notEmpty: {
                          message: 'This field is required'
                      }
                  }
              },
              tgl_lahir: {
                  validators: {
                      notEmpty: {
                          message: 'This field is required'
                      }
                  }
              },
              alamat_lengkap: {
                  validators: {
                      notEmpty: {
                          message: 'This field is required'
                      }
                  }
              },
              desa: {
                  validators: {
                      notEmpty: {
                          message: 'This field is required'
                      }
                  }
              },
              kec: {
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
              prov: {
                  validators: {
                      notEmpty: {
                          message: 'This field is required'
                      }
                  }
              },
              nohp: {
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
                $('#frmKaryawan').formValidation('resetForm', true); 
            })
            .on('hide.bs.modal', function(e) {
                $('#karyawan').hide().appendTo('body');
            })
            .modal('show');
    });
    */

    $('#tgl_lahir input').datepicker({
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

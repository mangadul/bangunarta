<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css">

<div class="box">
	<div class="box-header">
		<h3 class="box-title">Pelanggan</h3>
	</div>
	<div class="box-body">
		<p>
			<button class="btn btn-primary" id="btnPelanggan">Tambah Data Pelanggan</button>
		</p>	

<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->

<!--
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 
-->

<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-iso.css');?>" /> 
<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" />


<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<div id="pelanggan" class="bootstrap-iso" style="display: none;">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">

<?php
$attributes = array('class' => 'form-horizontal',
                'id' => 'frmPelanggan');
echo form_open('admin/master/tambah_pelanggan', $attributes);
?>                            
     <div class="form-group ">
      <label class="control-label requiredField" for="nama_toko">
       Nama Toko
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="nama_toko" name="nama_toko" type="text"/>
     </div>  
     <div class="form-group ">
      <label class="control-label requiredField" for="kode_pelanggan">
       Kode Pelanggan
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="kode_pelanggan" name="kode_pelanggan" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="nama_pelanggan">
       Nama Pelanggan
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-bars">
        </i>
       </div>
	      <input class="form-control" id="nama_pelanggan" name="nama_pelanggan" type="text"/>
      </div>      
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="alamatp">
       Alamat
       <span class="asteriskField">
        *
       </span>
      </label>
	      <input class="form-control" id="alamatp" name="alamatp" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="notelpp">
       No Telp
      </label>
      <input class="form-control" id="notelpp" name="notelpp" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="faxp">
       Fax
      </label>
      <input class="form-control" id="faxp" name="faxp" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="emailp">
       Email
      </label>
      <input class="form-control" id="emailp" name="emailp" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="kontakp">
       Nama Kontak
       <span class="asteriskField">
        *
       </span>      
      </label>
      <input class="form-control" id="kontakp" name="kontakp" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="nokontakp">
       No Kontak
       <span class="asteriskField">
        *
       </span>             
      </label>
      <input class="form-control" id="nokontakp" name="nokontakp" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="kotap">
       Kota
       <span class="asteriskField">
        *
       </span>             
      </label>
      <input class="form-control" id="kotap" name="kotap" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="provp">
       Provinsi
       <span class="asteriskField">
        *
       </span>             
      </label>
      <input class="form-control" id="provp" name="provp" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="kodeposp">
       Kode Pos
       <span class="asteriskField">
        *
       </span>             
      </label>
      <input class="form-control" id="kodeposp" name="kodeposp" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="websitep">
       Website
      </label>
      <input class="form-control" id="websitep" name="websitep" type="text"/>
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

<div class="panel panel-default">
<div class="panel-body">
      <table id="tblPelanggan">
        <thead>
          <tr>
            <th>Order#</th>
            <th>Order Dt</th>
            <th>Status</th>
            <th>Customer</th>
            <th>Contact</th>
            <th>Credit Limit</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
</div>
</div>

<!-- body -->
	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    var JS_BASE_URL = "<?php echo base_url();?>";
    $("#kodeposp").ForceNumericOnly().number();    
    $('#frmPelanggan')
        .formValidation({
	        framework: 'bootstrap',
	        icon: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },
	        fields: {
              nama_toko: {
                  validators: {
                      notEmpty: {
                          message: 'This field is required'
                      }
                  }
              },
	            kode_pelanggan: {
	                validators: {
	                    notEmpty: {
	                        message: 'This field is required'
	                    }
	                }
	            },
	            nama_pelanggan: {
	                validators: {
	                    notEmpty: {
	                        message: 'This field is required'
	                    }
	                }
	            },
	            alamatp: {
	                validators: {
	                    notEmpty: {
	                        message: 'This field is required'
	                    }
	                }
	            },
              kontakp: {
                  validators: {
                      notEmpty: {
                          message: 'This field is required'
                      }
                  }
              },
              nokontakp: {
                  validators: {
                      notEmpty: {
                          message: 'This field is required'
                      }
                  }
              },
              kotap: {
                  validators: {
                      notEmpty: {
                          message: 'This field is required'
                      }
                  }
              },
              provp: {
                  validators: {
                      notEmpty: {
                          message: 'This field is required'
                      }
                  }
              },
	            kodeposp: {
	                validators: {
                      stringLength: {
                          message: 'Maksimum 5 karakter',
                          max: 5,
                          min: 5
                      },                    
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
                bootbox.alert(result, function(){ 
                  console.log('This was logged in the callback!'); 
                  $form.parents('.bootbox').modal('hide');
                });                
            }, 'json');
        });

    $('#btnPelanggan').on('click', function() {
        bootbox
            .dialog({
                title: 'Data Pelanggan',
                message: $('#pelanggan'),
                show: false 
            })
            .on('shown.bs.modal', function() {
                $('#pelanggan').show(function(){
                  $('#frmPelanggan').formValidation('resetForm', true);                   
                });                           
            })
            .on('hide.bs.modal', function(e) {
                $('#pelanggan').hide().appendTo('body');
            })
            .modal('show');
    });

  //wait till the page is fully loaded before loading table
  var dt = $("#tblPelanggan").DataTable({
        headers: {
            '<?php echo $this->security->get_csrf_token_name();?>': '<?php echo $this->security->get_csrf_hash();?>'
        },
        processing: true,
        serverSide: true,
        ajax: {
            "url": JS_BASE_URL + "/admin/Masterdata/pelanggan",
            "type": "POST",
            "data": function (d) {
                  d.<?php echo $this->security->get_csrf_token_name();?> = '<?php echo $this->security->get_csrf_hash();?>';
              }            
        },
        columns: [
          { data: "o.orderNumber" },
          { data: "o.orderDate" },
          { data: "o.status" },
          { data: "c.customerName" },
          { data: "$.contactNameFull" },
          { data: "c.creditLimit" }
        ]
  });
  
  //load up the column search plugin.  the data table above needs to be constructed using DataTable and not dataTable for
  //this to work.  Otherwise a JS error will occur.  
  new $.fn.dataTable.DtServerColSearch(dt, {
    select: [
      {
        name: "o.status",
        options: [
          "|--All--",
          // this could omit the pipe and just be "shipped" since they are the same.  I have left them both for sake of example.  This is useful if the DB is holding
          // a flag, but you want to display something useful to the user.  For example "S|Shipped".
          "Shipped|Shipped",
          "Cancelled|Cancelled"
        ],
        header: false // we specified our own using --All-- 
      }
    ]
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
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/js/datatables.colsearch.js');?>"></script>

<table id="example" class="display" width="100%" cellspacing="0">
   <thead>
      <tr>
         <th>First name</th>
         <th>Last name</th>
         <th>Position</th>
         <th>Office</th>
         <th>Start date</th>
         <th>Salary</th>
      </tr>
   </thead>
   <tfoot>
      <tr>
         <th>First name</th>
         <th>Last name</th>
         <th>Position</th>
         <th>Office</th>
         <th>Start date</th>
         <th>Salary</th>
      </tr>
   </tfoot>
</table>
<script src="//code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.1.0/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/select/1.1.0/js/dataTables.select.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/editor/js/dataTables.editor.min.js" type="text/javascript"></script>

<!--
<script src="<?php echo base_url(); ?>/assets/editor/js/custom.js" type="text/javascript"></script>
-->

<script type="text/javascript">
var editor; // use a global for the submit and return data rendering in the examples
 
$(document).ready(function() {
    editor = new $.fn.dataTable.Editor( {
        "ajax": "Ajax/Staff",
        "table": "#example",
        "fields": [ {
                "label": "First name:",
                "name": "first_name"
            }, {
                "label": "Last name:",
                "name": "last_name"
            }, {
                "label": "Position:",
                "name": "position"
            }, {
                "label": "Office:",
                "name": "office"
            }, {
                "label": "Extension:",
                "name": "extn"
            }, {
                "label": "Start date:",
                "name": "start_date",
                "type": "datetime"
            }, {
                "label": "Salary:",
                "name": "salary"
            }
        ]
    } );
 
    $('#example').DataTable( {
        dom: "Bfrtip",
        ajax: {
            url: "Ajax/Staff",
            type: "POST"
        },
        serverSide: true,
        columns: [
            { data: "first_name" },
            { data: "last_name" },
            { data: "position" },
            { data: "office" },
            { data: "start_date" },
            { data: "salary", render: $.fn.dataTable.render.number( ',', '.', 0, '$' ) }
        ],
        select: true,
        buttons: [
            { extend: "create", editor: editor },
            { extend: "edit",   editor: editor },
            { extend: "remove", editor: editor }
        ]
    } );
} );   
</script>
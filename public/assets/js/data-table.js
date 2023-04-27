$(function() {
  'use strict';

  $(function() {
    $('#dataTableExample').DataTable({
        // lengthChange: false,
        // "processing": true,
        // paging: false,
        dom: '',
        // buttons: [ 'print', 'excel', 'pdf',  ]
    } );

    

    $('#dataTableExample').each(function() {
      var datatable = $(this);
      // SEARCH - Add the placeholder for Search and Turn this into in-line form control
      var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
      search_input.attr('placeholder', 'Cari ');
      search_input.removeClass('form-control-sm');
      // LENGTH - Inline-Form control
      var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
      // length_sel.removeClass('form-control-sm');
      table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0) .btn' );
    });
  });


  $(function() {
    $('#rekap').DataTable({
        lengthChange: true,
        dom: 'Blfrtip',
         buttons: [{
                    extend: 'print',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4]
                    }
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4]
                    }
                },
                {
                    extend: 'pdf',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4]
                    }
                }
            ],
    } );

    

    $('#rekap').each(function() {
      var datatable = $(this);
      // SEARCH - Add the placeholder for Search and Turn this into in-line form control
      var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
      search_input.attr('placeholder', 'Cari ');
      search_input.removeClass('form-control-sm');
      // LENGTH - Inline-Form control
      var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
      // length_sel.removeClass('form-control-sm');
      table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0) .btn' );
    });
  });

});



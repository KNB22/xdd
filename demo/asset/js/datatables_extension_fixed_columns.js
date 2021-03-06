/* ------------------------------------------------------------------------------
*
*  # Fixed Columns extension for Datatables
*
*  Specific JS code additions for datatable_extension_fixed_columns.html page
*
*  Version: 1.0
*  Latest update: Aug 1, 2015
*
* ---------------------------------------------------------------------------- */

$(function() {

    // Table setup
    // ------------------------------

    // Setting datatable defaults
    $.extend( $.fn.dataTable.defaults, {
        columnDefs: [{ 
            orderable: false,
            width: 'auto',
            height: 'auto',
            targets: [ 5 ]
        }],
        dom: '<"datatable-header"fl><"datatable-scroll datatable-scroll-wrap"t><"datatable-footer"ip>',
        language: {
            search: '<span>Filter:</span> _INPUT_',
            lengthMenu: '<span>Show:</span> _MENU_',
            paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
        }
    });


    // Left fixed column example
    $('.datatable-fixed-left').DataTable({
        columnDefs: [
            { 
                orderable: false,
                targets: [5]
            },
            { 
                width: "auto",
                targets: [0]
            },
            { 
                width: "auto",
                targets: [1]
            },
            { 
                width: "auto",
                targets: [5, 6]
            },
            { 
                width: "auto",
                targets: [4]
            }
        ],
        scrollX: true,
        scrollY: '350px',
        scrollCollapse: true,
        fixedColumns: true
    });


   
    
    // Initialize
    var table = $('.datatable-fixed-complex').DataTable({
        autoWidth: false,
        columnDefs: [
            { 
                orderable: false,
                targets: [5]
            },
            { 
                width: "250px",
                targets: [0]
            },
            { 
                width: "250px",
                targets: [1]
            },
            { 
                width: "200px",
                targets: [5, 6]
            },
            { 
                width: "100px",
                targets: [4]
            }
        ],
        scrollX: true,
        scrollY: '450px',
        scrollCollapse: true,
        fixedColumns: true
    });

    // Adjust columns on window resize
    setTimeout(function() {
        $(window).on('resize', function () {
            table.columns.adjust();
        });
    }, 200);



    // External table additions
    // ------------------------------

    // Add placeholder to the datatable filter option
    $('.dataTables_filter input[type=search]').attr('placeholder','Type to filter...');


    // Enable Select2 select for the length option
    $('.dataTables_length select').select2({
        minimumResultsForSearch: Infinity,
        width: 'auto'
    });
    
});

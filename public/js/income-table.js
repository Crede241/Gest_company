// project data table
$(document).ready(function() {
    $('#myProjectTable')
        .addClass( 'nowrap' )
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });
    $('.deleterow').on('click',function(){
        var tablename = $(this).closest('table').DataTable();
        tablename
            .row( $(this)
                .parents('tr') )
            .remove()
            .draw();

    } );
});
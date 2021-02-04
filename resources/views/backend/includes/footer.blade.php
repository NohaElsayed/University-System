<!-- Jquery Core Js -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> <!-- sript-->
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{asset('assets/bundles/morphingsearchscripts.bundle.js')}}"></script> <!-- Main top morphing search -->

<script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script> <!-- Sparkline Plugin Js -->
<script src="{{asset('assets/plugins/chartjs/Chart.bundle.min.js')}}"></script> <!-- Chart Plugins Js -->
{{-- <script src="{{asset('assets/plugins/jquery/jquery-3.1.0.min.js')}}"></script> --}}
<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js -->
<script src="{{asset('assets/js/pages/charts/sparkline.min.js')}}"></script>
<script src="{{asset('assets/js/pages/index.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script> <!-- sript-->
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script> <!-- sript-->
<script src="{{asset('assets/js/script.js')}}"></script> <!-- sript-->
<script src="{{asset('assets/js/toastr.min.js')}}"></script> <!-- sript-->
@if(    Session()->has('success'))
<script>
    toastr.success("{{ Session()->get('success')}}")
</script>
@endif
</body>
</html>

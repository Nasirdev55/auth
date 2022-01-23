<script src="{{asset('theme/js/modernizr.min.js')}}"></script>
<script src="{{asset('theme/js/jquery.min.js')}}"></script>
<script src="{{asset('theme/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('theme/js/jquery.datetimepicker.js')}}"></script>
<script src="{{asset('theme/js/jquery-ui.js')}}"></script>

<script src="{{asset('theme/js/popper.min.js')}}"></script>
<script src="{{asset('theme/js/bootstrap.min.js')}}"></script>

<script src="{{asset('theme/js/detect.js')}}"></script>
<script src="{{asset('theme/js/fastclick.js')}}"></script>
<script src="{{asset('theme/js/jquery.nicescroll.js')}}"></script>

<script src="{{asset('theme/js/toastr.min.js')}}"></script>
<!-- App js -->
<script src="{{asset('theme/js/script.js')}}"></script>

<!-- BEGIN Java Script for this page -->
<script src="{{asset('theme/js/chart.min.js')}}"></script>
<script src="{{asset('theme/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('theme/js/dataTables.bootstrap4.min.js')}}"></script>

<!-- Counter-Up-->
<script src="{{asset('theme/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('theme/js/jquery.counterup.min.js')}}"></script>

<script>
    $(document).ready(function () {
// data-tables
        $('#example1').DataTable();

// counter-up
        $('.counter').counterUp({
            delay: 10,
            time: 600
        });
    });
</script>


<script>
    function blockUi(){
        $.blockUI({
            css: {
                border: 'none',
                padding: '15px',
                backgroundColor: '#000',
                '-webkit-border-radius': '10px',
                '-moz-border-radius': '10px',
                opacity: .5,
                color: '#fff'
            }
        });
    }


    function successMsg(_msg){
        window.toastr.success(_msg);
    }

    function errorMsg(_msg){
        window.toastr.error(_msg);
    }

    function warningMsg(_msg){
        window.toastr.warning(_msg);
    }


</script>



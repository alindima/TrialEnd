<script>
    @if(Session::has('error_danger'))
        swal("Oops", "{{ Session::get('error_danger') }}", "error");
    @endif

    @if(Session::has('error_success'))
        swal("Great", "{{ Session::get('error_success') }}", "success");
    @endif

    @if(Session::has('error_info'))
        swal("Info", "{{ Session::get('error_info') }}", "info");
    @endif
</script>
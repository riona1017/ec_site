<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(session('success_message'))
        $(function () {
            toastr.success("{{ session('success_message') }}");
        });
    @endif

    @if(session('delete_message'))
        $(function () {
            toastr.error("{{ session('delete_message') }}");
        });
    @endif
</script>
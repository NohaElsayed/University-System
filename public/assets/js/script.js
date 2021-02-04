$(document).ready(function() {
    $(document).ready(function() {
        // alert('hello');
        $('#departments,#students').DataTable();
    });


    // search button

    $('#search').keyup(function() {
        var key = $(this).val();
        if (key != '') {
            $.ajax({
                url: "{{ route('search.products')}}", //action
                method: "POST", //method
                data: {
                    '_token': "{{  csrf_token() }}",
                    'k': key
                },
                success: function(response) {
                    $('.show_result').show();
                    $('.show_result').html(response);
                }

            });
        } else {
            $('.show_result').hide();
        }

    });
});
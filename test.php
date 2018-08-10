@section('pagesjs')
<script type="application/javascript">
    $(function () {

        $(document.body).on("change",".reviews_is_activated",function (e)
        {
            e.preventDefault();
            var reviews_id = $(this).data('reviews-id');
            var token = "{{ csrf_token() }}";

            if ($(this).is(':checked')){var type = 1; var type_text = "Activate";}
            else{var type = 0; var type_text = "Deactivate";}

            swal({
                title: "Are you sure?",
                text: "You want to "+type_text+" the Review!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, "+type_text+" it!",
                cancelButtonText: "No, cancel please!",
                closeOnConfirm: false,
                closeOnCancel: false,
                showLoaderOnConfirm: true,
            }, function (isConfirm)
            {
                if (isConfirm) {
                    $.ajax(
                        {
                            url: "{{ url("/admin/reviews/is_activated/" ) }}/"+reviews_id+"/"+type,
                            type: 'GET',
                            dataType: "JSON",
                            data: {
                                "id": reviews_id,
                                "_method": 'GET',
                                "_token": token,
                                "type": type,
                            },
                            success: function (result)
                            {
                                if(result.data == "success")
                                {
                                    if (isConfirm)
                                    {
                                        swal({
                                            title: type_text+"d",
                                            text: "Your action on Review done.",
                                            type: "success"
                                        },function() {
                                            location.reload();
                                        });
                                    }
                                }
                                else
                                {
                                    swal({
                                        title: "Cancelled",
                                        text: "You have cancelled the action!",
                                        type: "error"
                                    },function() {
                                        location.reload();
                                    });
                                }
                            }
                        });
                } else {
                    swal({
                        title: "Cancelled",
                        text: "You have cancelled the action!",
                        type: "error"
                    },function() {
                        location.reload();

                    });
                }
            });
        });
    });
</script>
@stop
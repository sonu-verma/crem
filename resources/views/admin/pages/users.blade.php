@extends('admin.layouts.main')

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.26.11/sweetalert2.min.css" rel="stylesheet">
    @endsection

@section('content')
<!-- page content -->

{{$sdadfsdfsd}}

<div class="right_col" role="main">
    <div class="">

        <div class="page-title">
            <div class="title_left">
                <h3>Users</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                      <a href="{{ url('users/create') }}" class="btn btn-default" type="button">Add Users</a>
                    </div>
                </div>
            </div>
            @if(Session::has('message'))
                <p class="alert alert-info">{{ Session::get('message') }}</p>
            @endif
        </div>


        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Email Id</th>
                                <th>Created On</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at}}</td>
                                <td><a href="{{url("users/$user->id/edit")}}">Edit</a> | <a href="javascript:void(0)" class="deleteUser" data-id="{{$user->id}}">Delete</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

@endsection


@section('script')

    <!-- Datatables -->
    <script src="{{ asset('public/externalcss/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/externalcss/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/externalcss/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('public/externalcss/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/externalcss/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('public/externalcss/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('public/externalcss/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('public/externalcss/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('public/externalcss/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('public/externalcss/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('public/externalcss/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('public/externalcss/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('public/externalcss/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('public/externalcss/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('public/externalcss/pdfmake/build/vfs_fonts.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.26.11/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.deleteUser').click(function (e) {

                e.preventDefault();
                var id = $(this).attr('data-id');

                const swalWithBootstrapButtons = swal.mixin({
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false,
                })

                swalWithBootstrapButtons({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {

                    var _token = "{{ csrf_token() }}";

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url         : "{{url('/users/')}}"+"/"+id,
                        type        : 'post',
                        data        :   {
                            '_token':_token,
                            '_method':'delete'
                        },
                        beforeSend : function() {

                        },
                        complete   : function() {

                        },
                        success    : function(resp)
                        {

                            if (resp.status === true) {
                                swalWithBootstrapButtons(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                                location.reload();
                            } else {
                                swalWithBootstrapButtons(
                                    'Cancelled',
                                    'Your imaginary file is safe :)',
                                    'error'
                                )
                            }

                            console.log(resp);
                        }
                    });

                } else if (
                    // Read more about handling dismissals
                result.dismiss === swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            });
//                Swal('Hello world!');


            });
        });
    </script>

@endsection
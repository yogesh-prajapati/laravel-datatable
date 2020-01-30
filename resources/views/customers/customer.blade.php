@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jquery.dataTables.css') }}">

@endsection

@section('content')
    <div class="container">
        <div class="row" >
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Customers</div>

                    <div class="panel-body">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    {{-- <th>Email</th> --}}
                                    <th>City</th>
                                    {{-- <th>Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-md-offset-4" id="detail">
                              
            </div>

        </div>
        {{-- {{ $customers }} --}}
    </div>
@endsection

@section('javascripts')
    <script type="text/javascript" charset="utf8" src="{{ URL::asset('js/jquery.dataTables.js') }}"></script>
    <script>
        $(document).ready( function () {
           var dt = $('#datatable').DataTable({
                "processing": true,
                "serverSide": true,
                "data": null,
                "ajax": "{{ route('api.customers.index') }}",
                "columns": [
                    { "data": "first_name" },
                    { "data": "last_name" },
                    { "data": "city"},
                ]
            });
            $('#datatable').on('click', 'tr', function () {
            var customer = dt.row(this).data();
            console.log(customer);
            var tableData = 
            '<table><tr><td>Id :</td><td>'+customer.id+'</td></tr>';
            tableData += '<tr><td>First Name :</td><td>'+customer.first_name+'</td></tr>';
            tableData += '<tr><td>Last Name :</td><td>'+customer.last_name+'</td></tr>';
            tableData += '<tr><td>Email :</td><td>'+customer.email+'</td></tr>';
            tableData += '<tr><td>city :</td><td>'+customer.city+'</td></tr>';
            $('#detail').html(tableData);
            });

            
        });

        

    </script>
@endsection

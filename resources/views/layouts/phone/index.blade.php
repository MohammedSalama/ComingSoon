@extends('layouts.admin.master')
@section('css')
@endsection

@section('title')
    phone
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6"> phone <h4 class="mb-0"> </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color"> phone </a></li>
                    <li class="breadcrumb-item active">Settings</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    @include('message')
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Phone</th>
                                <th>Processes</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($phone as $phone)
                                <tr>
                                    <td>{{ $loop -> iteration }}</td>
                                    <td>{{ $phone ->phone }}</td>
                                    <td>
                                        <button class="btn btn-success btn-sm" title="Edit" data-toggle="modal"
                                                data-target="#Editphone{{$phone->id}}" ><i
                                                class="fa fa-edit"></i></button>

{{--                                        <button class="btn btn-danger btn-sm" data-phone_id="{{$phone->id}}"--}}
{{--                                                data-toggle="modal" data-target="#deletedphone"><i--}}
{{--                                                class="fa fa-trash"></i></button>--}}

                                        @include('layouts.phone.edit')
{{--                                        @include('layouts.phone.deleted')--}}


                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
{{--    <script>--}}
{{--        $('#deletedphone').on('show.bs.modal', function (event) {--}}
{{--            var button = $(event.relatedTarget)--}}
{{--            var phone_id = button.data('phone_id')--}}
{{--            var modal = $(this)--}}
{{--            modal.find('.modal-body #phone_id').val(phone_id);--}}
{{--        })--}}
{{--    </script>--}}

@endsection

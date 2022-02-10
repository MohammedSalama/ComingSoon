@extends('layouts.admin.master')
@section('css')
@endsection

@section('title')
    Contact Us
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6"> Contact Us <h4 class="mb-0"> </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color"> Contact Us </a></li>
                    <li class="breadcrumb-item active">Settings</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
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
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Processes</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contact as $contact)
                                <tr>
                                    <td>{{ $loop -> iteration }}</td>
                                    <td>{{ $contact -> name }}</td>
                                    <td>{{ $contact -> email }}</td>
                                    <th>{{ $contact -> subject }}</th>
                                    <th>{{ $contact -> message }}</th>
                                    <td>
                                        <button class="btn btn-danger btn-sm" data-contact_id="{{$contact->id}}"
                                                data-toggle="modal" data-target="#deletedcontact"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach

                            @include('layouts.contact.deleted')

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
    <script>
        $('#deletedcontact').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var contact_id = button.data('contact_id')
            var modal = $(this)
            modal.find('.modal-body #contact_id').val(contact_id);
        })
    </script>
@endsection

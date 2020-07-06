@extends('layouts.app')
@section('title', 'DUCNGUYEN | Project')
@push('page-styles')
<link rel="stylesheet" href="{{asset('lib/iCheck/all.css')}}">
<link rel="stylesheet" href="{{asset('lib/datatables/css/dataTables.bootstrap4.min.css')}}">
@endpush

@section('content')
<div class="content-wrapper">
    
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{__('messages.project_list')}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active">Project List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
   
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 connectedSortable ui-sortable">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <form role="form">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <a href="">
                                            <Button type="button" class="btn  btn-primary float-right">{{ __('messages.add_new') }}</Button>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-6"> </div>
                                </div>

                            </form>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="projectTable" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Stocks</th>
                                            <th>Customer</th>                                           
                                            <th>Price</th>
                                            <th>Description</th>                                         
                                            <th></th>                                           
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer"></div>
                    </div>                 
                </div>             
            </div>           
        </div>
    </section>
    <!-- /.content -->

    <!-- confirm dialog-->
    <div class="modal fade" id="confirmDeleteRate" tabindex="-1" role="dialog" aria-labelledby="modelLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Confirm delete
                </div>
                <div id="confirmMessage" class="modal-body">
                    Do you want to delete this project ?
                </div>
                <input type="hidden" id="projectId" value="">
                <div class="modal-footer">
                    <button type="button" id="btnDelete" class="btn  btn-primary btn-outline-danger">
                        Delete
                    </button>
                    <button type="button" id="btnCancel" class="btn btn-cancel" data-dismiss="modal">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('page-scripts')

<script src="{{asset('lib/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('lib/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('lib/slimScroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('lib/fastclick/fastclick.js')}}"></script>
<script src="{{asset('js/right-bar.js')}}"></script>
<script src="{{asset('lib/iCheck/icheck.min.js')}}"></script>
<script src="{{asset('lib/bootstrap-menu/BootstrapMenu.min.js')}}"></script>
<script src="{{asset('lib/moment/moment.js')}}"></script>

@endpush

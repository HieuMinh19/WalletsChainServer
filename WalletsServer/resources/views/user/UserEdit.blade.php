@extends('layouts.app')
@section('title', 'DUCNGUYEN | Edit User')
@push('page-styles')
<link rel="stylesheet" href="{{asset('lib/iCheck/all.css')}}">
<link rel="stylesheet" href="{{asset('lib/datepicker/datepicker3.css')}}">
@endpush

@section('content')
<div class="content-wrapper">
   
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{__('messages.user.edit_user')}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('project')}}">Home</a></li>
                        <li class="breadcrumb-item active">{{__('messages.user.edit_user')}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
              
                        <div class="card-body">
                            <!-- Form -->
                            <form role="form" id="projectForm" action="{{route('storeproject')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group required">
                                            <label for="name" class="control-label">{{__('messages.project.name')}}</label>
                                            <div class="input-group">
                                                <input type="text" id="name" name="name" class="form-control" placeholder="name" maxlength="5" value="{{old('project_code')}}" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5">
                                        <div class="form-group required">
                                            <label for="stocks" class="control-label">{{__('messages.project.stock')}} </label>
                                            <div>
                                                <input type="text" id="stocks" name="stocks" class="form-control" placeholder="Project Name" maxlength="255" value="{{old('project_name')}}" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group required">
                                            <label for="price" class="control-label">{{__('messages.project.price')}}</label>
                                            <div class="input-group">
                                                <input type="text" id="price" name="price" class="form-control" placeholder="Project Price" maxlength="5" value="{{old('project_price')}}" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5">
                                        <div class="form-group required">
                                            <label for="description" class="control-label">{{__('messages.project.price')}}</label>
                                            <textarea class="form-control" id="description" name="description" class="form-control" placeholder="Project Description" maxlength="5" value="{{old('project_description')}}" autocomplete="off" rows="3" placeholder="Enter ..."></textarea>
                                        </div>
                                    </div>
                                </div>     

                                <br />
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <div class="form-group">
                                            <a href="{{url('listproject')}}">
                                                <Button type="button" class="btn  btn-primary btn-outline-danger">{{__('messages.cancel')}}</Button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-2"></div>
                                    <div class="col-md-5 col-5">
                                        <Button type="submit" id="createNewProject" class="btn  btn-primary ">{{__('messages.create')}}</Button>
                                    </div>
                                </div>
                            </form>

                            <div id="processing" class="submitForm_processing" style="display: none;">
                                <div class="spinner-grow text-primary" role="status"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i><br> Loading...</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <div class="modal fade" id="eModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" id="Cancel" class="btn  btn-primary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" id="OK" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@push('page-scripts')
<script src="{{asset('js/right-bar.js')}}"></script>
<script src="{{asset('lib/iCheck/icheck.min.js')}}"></script>
<script src="{{asset('lib/datepicker/bootstrap-datepicker.js')}}"></script>
<script>
</script>
<script type="text/javascript">
</script>

@endpush

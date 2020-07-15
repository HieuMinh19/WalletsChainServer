@extends('layouts.app')
@section('title', 'DUCNGUYEN | List Project')
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
        <p>home controller</p>
    </section>

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
<script>
    
</script>
@endpush

@extends('layouts.backend.app')
@section('breadcrums')
<div class="breadcrumbs-area clearfix">
    <ul class="breadcrumbs pull-left">
        <li><a href="{{route('vendor.index')}}">Vendor</a></li>
        <li><span>Create</span></li>
    </ul>
</div>
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('backend/assets/tagsinput/dist/bootstrap-tagsinput.css')}}">
<style>
    .bootstrap-tagsinput .tag {
        margin-right: 2px;
        color: white;
        background-color: #c79b39;
        padding: 3px;
        border-radius: 3px;
    }
    .bootstrap-tagsinput {
        width:100%;
    }
</style>
@endsection
@section('content')
<div class="main-content-inner">
    <!-- sales report area start -->
    <div class="sales-report-area  mb-5">
        <div class="row">
        	<div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Create Vendor</h4>
                        <p class="text-muted font-14 mb-4">Add detail to Vendor</p>
                        <form method="post" action="{{route('vendor.store')}}" enctype="multipart/form-data">
                            @csrf
                        
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Name</label>
                            <input class="form-control" name="name" type="text" value="{{old('name')}}" id="example-text-input">
                            <div class="text-danger">
                                @if ($errors->has('name'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email-input" class="col-form-label">Email</label>
                            <input class="form-control" name="email" type="email" value="{{old('email')}}" id="example-email-input">
                            <div class="text-danger">
                                @if ($errors->has('email'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-tel-input" class="col-form-label">Phone</label>
                            <input data-role="tagsinput" class="form-control" name="phone" type="tel" value="{{old('phone')}}"  placeholder="98012xxxxx, 98420XXXXX"> 
                            <div class="text-danger">
                                @if ($errors->has('phone'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-search-input" class="col-form-label">Address</label>
                            <input class="form-control" name="address" type="text" value="{{old('address')}}" id="example-search-input">
                            <div class="text-danger">
                                @if ($errors->has('address'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-datetime-local-input" class="col-form-label">Image</label>
                            <input class="form-control" name="image" type="file" id="image">
                            <div class="text-danger">
                                @if ($errors->has('image'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="example-datetime-local-input" class="col-form-label"></label>
                            <button type="submit" class="btn btn-primary btn-xs mb-3"><i class="ti-harddrive"></i> Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    	</div>
    </div>
</div>

@endsection
@section('script')
<script src="{{asset('backend/assets/tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
@endsection
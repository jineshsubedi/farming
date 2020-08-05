@extends('layouts.backend.app')
@section('breadcrums')
<div class="breadcrumbs-area clearfix">
    <ul class="breadcrumbs pull-left">
        <li><a href="{{route('vendor.index')}}">Order</a></li>
        <li><span>Create</span></li>
    </ul>
</div>
@endsection
@section('content')
<div class="main-content-inner">
    <!-- sales report area start -->
    <div class="sales-report-area  mb-5">
        <div class="row">
        	<div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Create Order</h4>
                        <p class="text-muted font-14 mb-4">Add detail to Order</p>
                        <form method="post" action="{{route('vendor_order.save')}}" enctype="multipart/form-data" id="orderCreateForm">
                            @csrf
                        <input type="hidden" name="vendor_id" value="{{$vendor->id}}">
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Title</label>
                            <input class="form-control" name="title" type="text" value="{{old('title')}}" id="example-text-input">
                            <div class="text-danger">
                                @if ($errors->has('title'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-date-input" class="col-form-label">Date</label>
                            <input class="form-control" name="date" type="date" value="{{old('date')}}" id="example-date-input">
                            <div class="text-danger">
                                @if ($errors->has('date'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-tel-input" class="col-form-label">quantity</label>
                            <input class="form-control" name="quantity" type="text" value="{{old('quantity')}}"> 
                            <div class="text-danger">
                                @if ($errors->has('quantity'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-search-input" class="col-form-label">Unit Cost</label>
                            <input class="form-control" name="unit_cost" type="text" value="{{old('unit_cost')}}" id="example-search-input">
                            <div class="text-danger">
                                @if ($errors->has('unit_cost'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('unit_cost') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-search-input" class="col-form-label">Total Cost</label>
                            <input class="form-control" name="total_cost" type="text" value="{{old('total_cost')}}" id="example-search-input">
                            <div class="text-danger">
                                @if ($errors->has('total_cost'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('total_cost') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-datetime-local-input" class="col-form-label"></label>
                            <button type="submit" name="submitAction" value="1" class="btn btn-primary btn-xs mb-3"><i class="ti-harddrive"></i> Submit</button>
                            <button type="submit" name="submitAction" value="2" class="btn btn-info btn-xs mb-3"><i class="ti-harddrive"></i> Submit and Exit</button>
                            <button type="button" class="btn btn-warning btn-xs mb-3" id="resetButton"><i class="ti-cut"></i> Reset</button>
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
<script>
    $('#resetButton').click(function(){
        $('#orderCreateForm')[0].reset();
    })
</script>
@endsection

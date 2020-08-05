@extends('layouts.backend.app')
@section('breadcrums')
<div class="breadcrumbs-area clearfix">
    <ul class="breadcrumbs pull-left">
        <li><a href="{{route('vendor.index')}}">Vendor</a></li>
        <li><span>Index</span></li>
    </ul>
</div>
@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
@endsection
@section('content')
<div class="main-content-inner">
    <!-- sales report area start -->
    <div class="sales-report-area mb-5">
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <a href="#collpase1" class="pull-right" data-toggle="collapse"><i class="ti-move"></i></a>
                    <h4>Vendor Expense Detail</h4>
                </div>
                <div class="card-body" id="collpase1">
                    <div id="ambarchart4" data-toggle="collapse" aria-expanded="true"></div>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('vendor.create')}}" class="btn btn-xs btn-primary pull-right"><i class="ti-plus"></i> Add New</a>
                        <h4 class="header-title">Vendor's List</h4>
                        <div class="data-tables">
                            <table id="vendor_list" class="text-center">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Image</th>
                                        <th>Total Cost</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($total = 0)
                                    @foreach($vendors as $vendor)
                                    @php($v_total = \App\Models\VendorOrder::getTotalExpense($vendor->id))
                                    @php($total = $total + $v_total)
                                    <tr>
										<td>{{$vendor->name}}</td>                                    	
										<td>{{$vendor->email}}</td>                                    	
										<td>{{$vendor->address}}</td>                                    	
										<td>
											@php($phones = explode(',', $vendor->phone))
											@foreach($phones as $phone)
											<a href="tel:{{$phone}}" class="badge bg-primary" style="padding:5px; border-radius: 3px; background-color: #c79b39; color:white">{{$phone}}</a>
											@endforeach
										</td>                                    	
										<td>
											@if($vendor->image)
												<a href="{{asset('images/'.$vendor->image)}}" target="_blank"><img src="{{asset('images/'.$vendor->image)}}" alt="" width="100px;"></a>
											@endif
										</td>
                                        <td>
                                            {{$v_total}}
                                        </td>
										<td>
											<form method="post" action="{{route('vendor.destroy', $vendor->id)}}">
												{!! csrf_field() !!}
												{!! method_field('DELETE') !!}
												<!-- <a href="{{route('vendor.show', $vendor->id)}}" class="btn btn-xs btn-info"><i class="ti-eye"></i></a> -->
												<a href="{{route('vendor_order.index', $vendor->id)}}" class="btn btn-xs btn-success"><i class="ti-shopping-cart"></i></a>
												<a href="{{route('vendor.edit', $vendor->id)}}" class="btn btn-xs btn-warning"><i class="ti-pencil-alt"></i></a>
												<button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')"><i class="ti-trash"></i></button>
											</form>
										</td>                                   	
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <th colspan="5" class="text-right">Total Sum</th>
                                        <th colspann="2">
                                            {{$total}}
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-right">
                            	{{$vendors->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
    </div>
</div>

@endsection
@section('script')
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<script>
	$('#vendor_list').DataTable({
		paging: false,
	});
</script>

<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script src="{{asset('backend/assets/js/bar-chart.js')}}"></script>
<script>
    if ($('#ambarchart4').length) {
    var chart = AmCharts.makeChart("ambarchart4", {
        "type": "serial",
        "theme": "light",
        "marginRight": 70,
        "dataProvider": [
        @foreach($vendors as $v)
        @php($expense = \App\Models\VendorOrder::getTotalExpense($v->id))
        {
            "country": "{{$v->name}}",
            "visits": "{{$expense}}",
            "color": "#8918FE"
        }, 
        @endforeach
        ],
        "valueAxes": [{
            "axisAlpha": 0,
            "position": "left",
            "title": false
        }],
        "startDuration": 1,
        "graphs": [{
            "balloonText": "<b>[[category]]: [[value]]</b>",
            "fillColorsField": "color",
            "fillAlphas": 0.9,
            "lineAlpha": 0.2,
            "type": "column",
            "valueField": "visits"
        }],
        "chartCursor": {
            "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
        },
        "categoryField": "country",
        "categoryAxis": {
            "gridPosition": "start",
            "labelRotation": 45
        },
        "export": {
            "enabled": false
        }

    });
}
</script>
@endsection
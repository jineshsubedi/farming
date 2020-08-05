@extends('layouts.backend.app')
@section('breadcrums')
<div class="breadcrumbs-area clearfix">
    <ul class="breadcrumbs pull-left">
        <li><a href="{{route('vendor.index')}}">Vendor</a></li>
        <li><span>Order</span></li>
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
                    <h4>{{$vendor->name}} Expense Detail</h4>
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
                        <a href="{{route('vendor_order.create', $vendor->id)}}" class="btn btn-xs btn-primary pull-right"><i class="ti-plus"></i> Add New</a>
                        <h4 class="header-title">Order's List</h4>
                        <div class="data-tables">
                            <table id="order_list" class="text-center">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>Quantity</th>
                                        <th>Unit Cost</th>
                                        <th>Total Cost</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr>
										<td>{{$order->title}}</td>                                    	
										<td>{{\Carbon\Carbon::parse($order->date)->format('d M, Y')}}</td>                                    	
										<td>{{$order->quantity}}</td>                                    	
										<td>{{$order->unit_cost}}</td>                                    	
										<td>{{$order->total_cost}}</td>    
										<td>
											<form method="post" action="{{route('vendor_order.delete', $order->id)}}">
												{!! csrf_field() !!}
												{!! method_field('DELETE') !!}
												
												<button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')"><i class="ti-trash"></i></button>
											</form>
										</td>                                   	
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="text-right">
                            	{{$orders->links()}}
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
	$('#order_list').DataTable({
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
        @foreach($orders as $order)
        @php($vendor_name = \App\Models\Vendor::getName($order->vendor_id))
        {
            "country": "{{$vendor_name}}",
            "visits": "{{$order->total_cost}}",
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
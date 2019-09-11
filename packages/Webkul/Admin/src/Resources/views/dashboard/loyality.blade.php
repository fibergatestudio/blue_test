@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.dashboard.title') }}
@stop

@section('content-wrapper')
<div class="content full-page dashboard">
    <div class="page-header">
        <div class="page-title">
            <h1>Loyality Program</h1>
        </div>

        <div class="page-action">
            <date-filter></date-filter>
        </div>
    </div>

    <div class="page-content">
        <div class="dashboard-stats">
            <div class="dashboard-card">
                <div class="title">
                    Total Generated Points
                </div>

                <div class="data">
                {{ $total_customers_points }}
                    <span class="progress">

                            <span class="icon graph-down-icon"></span>
                            <span class="icon graph-up-icon"></span>
                            
                    </span>
                </div>
            </div>
            <div class="dashboard-card">
                <div class="title">
                    Total Used Points
                </div>

                <div class="data">
                {{ $total_customers_used_points }}
                    <span class="progress">
                            
                            <span class="icon graph-down-icon"></span>
                            <span class="icon graph-up-icon"></span>
                            
                    </span>
                </div>
            </div>
            <div class="dashboard-stats">
                <div class="dashboard-card">
                        <form action="{{ url('admin/loyality/apply_points_value') }}" method="POST">
                        @csrf()
                            <div class="title">
                            Points Value
                            </div>
                            <div class="control-group">
                                1 Point = 
                                <input style="width:100px;" id="point" type="number" name="points_value" value="{{ $points_value }}" class="control"></input> $
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                </div>
            </div>
            <div class="dashboard-stats">
                <div class="dashboard-card">
                    <form action="{{ url('admin/loyality/apply_percentage') }}" method="POST">
                    @csrf()
                        <div class="title">
                            Payout %
                        </div>

                        <div class="control-group">
                            <input style="width:100px;" id="point" type="number" name="payout_percentage" value="{{ $payout_percentage }}" class="control"></input>
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="grid-container"><div id="datagrid-filters" class="filter-row-one">
     <div class="dropdown-filters">
    <div class="dropdown-toggle">
    </div> <div class="dropdown-list dropdown-container" style="display: none;"></div></div></div> <div class="filter-row-two"></div> 
    <table class="table"><!----> 
        <thead>
            <tr style="height: 65px;">
                <th class="grid_head">
                    ID
                </th> <th class="grid_head">
                    SKU
                </th> <th class="grid_head">
                    Name
                </th> <th class="grid_head">
                    Price
                </th>
            </tr>
        </thead> 
        <tbody>
            <tr>
                <!-- <td data-value="ID">1</td> <td data-value="Sub Total">$222.00</td> 
                <td data-value="Grand Total">$222.00</td> 
                <td data-value="Order Date">2019-08-23 17:02:15</td> 
                <td data-value="Channel Name">Default</td> 
                <td data-value="Status"><span class="badge badge-md badge-warning">Pending</span></td> 
                <td data-value="Billed To">Ihor Mega</td> <td data-value="Shipped To">Ihor Mega</td> 
                <td data-value=" Actions" class="actions" style="width: 100px;">
                <div class="action"><a href="http://localhost/blue_bird/public/admin/sales/orders/view/1" data-method="GET" data-action="http://localhost/blue_bird/public/admin/sales/orders/view/1" data-token="VNBOWPH3bhLgmJNKYtuwPskwbIm2iMhtWCX3lbJm"><span class="icon eye-icon"></span></a></div></td> -->
            </tr>
        </tbody>
    </table>
</div>
</div>





@endsection
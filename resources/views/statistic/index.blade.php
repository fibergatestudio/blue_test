@extends('admin::layouts.master')

@section('page_title')
    Statistic
@stop

@section('content-wrapper')

<div class="content full-page dashboard">
        <div class="page-header">
            <div class="page-title">
                <h1>Statistic</h1>
            </div>

            <div class="page-action">
                <date-filter></date-filter>
            </div>
        </div>

        <div class="page-content">

            <div class="dashboard-stats">

                <div class="dashboard-card">
                    <div class="title">
                        Clients
                    </div>

                    <div class="data">
                    {{ $customer_count }}
                        <span class="progress">

                                <span class="icon graph-down-icon"></span>
                                <span class="icon graph-up-icon"></span>
                               
                        </span>
                    </div>
                </div>

                <div class="dashboard-card">
                    <div class="title">
                        Orders
                    </div>

                    <div class="data">
                    {{ $total_orders }}
                        <span class="progress">
                                <span class="icon graph-down-icon"></span>
                                <span class="icon graph-up-icon"></span>
                               
                        </span>
                    </div>
                </div>

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
            </div>
            
            <div class="dashboard-stats">

                <div class="dashboard-card">
                    <div class="title">
                        Total Sell Sum
                    </div>

                    <div class="data">
                        {{ $total_orders_sum }}
                        <span class="progress">
                                
                                <span class="icon graph-down-icon"></span>
                                <span class="icon graph-up-icon"></span>
                               
                        </span>
                    </div>
                </div>
                <div class="dashboard-card">
                    <div class="title">
                        Average Sell Sum
                    </div>

                    <div class="data">
                        {{ $average_sell_sum }}
                        <span class="progress">
                                
                                <span class="icon graph-down-icon"></span>
                                <span class="icon graph-up-icon"></span>
                               
                        </span>
                    </div>
                </div>
                <div class="dashboard-card">
                    <div class="title">
                        Sell by Category
                    </div>

                    <div class="data">
                        <span class="progress">
                                32
                                <span class="icon graph-down-icon"></span>
                                <span class="icon graph-up-icon"></span>
                            
                        </span>
                    </div>
                </div>
                
            </div>

                <div class="graph-stats">

                    <div class="left-card-container graph">
                        <div class="card">
                            <div class="card-title" style="margin-bottom: 30px;">
                                Sell Graph
                            </div>

                            <div class="card-info">

                                <canvas id="myChart" style="width: 100%; height: 87%"></canvas>

                            </div>
                        </div>
                    </div>

                    <div class="right-card-container category">
                        <div class="card">
                            <div class="card-title">
                                Top Sells
                            </div>

                            <div class="card-info">
                                <ul>



                                        <li>
                                            <a href="">
                                                <div class="description">
                                                    <div class="name">
                                                       
                                                    </div>

                                                    <div class="info">
                                                  
                                                        &nbsp;.&nbsp;
                                                  
                                                    </div>
                                                </div>

                                                <span class="icon angle-right-icon"></span>
                                            </a>
                                        </li>



                                </ul>



                                    <div class="no-result-found">

                                        <i class="icon no-result-icon"></i>
                                        <p></p>

                                    </div>


                            </div>
                        </div>
                    </div>

                    </div>
                    <div class="graph-stats">
                        <b>Filtered Statistic</b>
                        <table>
                            <thead>
                            
                            </thead>

                            <tbody>
                            
                            </tbody>

                        
                        </table>
                    </div>
        </div>


@stop

@push('scripts')
@endpush
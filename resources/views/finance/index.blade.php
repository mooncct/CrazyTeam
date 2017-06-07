@extends('layouts.crazyteam')
@section('nav')
    <a href="{{ url('/finance') }}" class="list-group-item active">Finance</a>
@endsection
@section('link')
    <li><a href="{{ url('/finance/create') }}">Create</a></li>
@endsection

@section('content')
    <div class="form-inline">
        <div class="form-group">
            <label for="">开始时间</label>
            <input type="date" class="form-control _screenStart" value="{{ date('Y-m-01', strtotime(date("Y-m-d"))) }}" id="">
        </div>
        <div class="form-group">
            <label for="">结束时间</label>
            <input type="date" class="form-control _screenEnd" value="{{ date('Y-m-d') }}" id="">
        </div>
        <button type="button" class="btn btn-default">筛选</button>
        <button onclick="location='{{ url('/finance/create') }}';" type="button" class="btn btn-default">添加</button>
        <button type="button" class="btn btn-default _QuicklyClick" data-target="#myModal" data-toggle="modal">快速结清</button>


    </div>

    <div class="page-header">
        <h3>概况 </h3>
    </div>




    <div class="table-responsive">
        <table class="table table-hover ">
            <thead>
            <th>未结清总支出:<span class="text-primary _moneySum">{{ Numbers($moneySum[0]->moneySum,2,2) }}</span>￥</th>
            <th></th>
            <th></th>
            </thead>
            <tbody>
            @foreach($money as $money)
                <tr class="">
                    <td>{{ $money['name'] }}</td>
                    <td>{{ $money['money'] }}￥</td>

                    <td>
                        <button type="button" class="btn btn-default btn-xs">结清</button>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="page-header">
        <h3>简单账单</h3>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-condensed">
            <thead>
            <tr>
                <th>支出</th>
                <th>订单</th>
                <th>用户</th>
                <th>状态</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($finance as $finance)
                <tr>
                    <th scope="row">{{ $finance->amount }}</th>
                    <td>{{ $finance->name }}</td>
                    <td>catho,jojo</td>
                    <td>@if($finance->users==1)已结清@else未结清@endif</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs  btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Edit</a></li>
                                <li><a href="#">Del</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Settle</a></li>
                            </ul>
                        </div>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>


@endsection




@section('js')
    <script src="{{ asset('js/finance/index.js') }}"></script>
@endsection








<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">快速结清</h4>
            </div>
            <div class="modal-body">
                M同学
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary _Quickly" data-dismiss="modal" data-url="{{ url('/finance/create') }}">结清</button>
            </div>
        </div>
    </div>
</div>
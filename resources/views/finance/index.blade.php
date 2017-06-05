@extends('layouts.crazyteam')
@section('nav')
    <a href="{{ url('/finance') }}" class="list-group-item active">Finance</a>
@endsection
@section('link')
    <li><a href="{{ url('/finance/create') }}">Create</a></li>
@endsection

@section('content')



        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">筛选条件</label>
            <div class="col-sm-2">

                <input type="datetime-local" name="end"
                       value="{{ date('Y-m-d', strtotime(date('Y-m-01', strtotime(date("Y-m-d")))." +1 month -1 day")) }}T22:00:01"
                       class="form-control"
                       aria-label="Amount (to the nearest dollar)">

            </div>
            <div class="col-sm-2">
            <button type="button" class="btn btn-default">筛选</button>
            </div>
        </div>
    <div class="page-header">
        <h3>概况</h3>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-warning" style="width: 30%"><span
                    class="">未结清￥100</span>
        </div>
        <div class="progress-bar progress-bar-info" style="width: 30%"><span
                    class="">已经请￥100</span>
        </div>
        <div class="progress-bar progress-bar-danger" style="width: 40%"><span
                    class="">总消费￥100</span>
        </div>
    </div>
    <div class="page-header">
        <h3>未结清 <small>点击姓名快速结清</small></h3>
    </div>

    <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
            <span class="">Catho：100.00￥</span>
        </div>
    </div>

    <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
            <span class="">Jojo:100.00￥</span>
        </div>
    </div>

    <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
            <span class="">Madeline:100.00￥</span>
        </div>
    </div>
    <div class="page-header">
        <h3>简单账单</h3>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Amount</th>
                <th>Name</th>
                <th>Describe</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($finance as $finance)
                <tr class="warning">
                    <th scope="row">{{ $finance->amount }}</th>
                    <td>{{ $finance->name }}</td>
                    <td>catho,jojo</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs  btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

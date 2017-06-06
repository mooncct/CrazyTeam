@extends('layouts.crazyteam')

@section('nav')
    <a href="{{ url('/finance') }}" class="list-group-item active">Finance</a>
@endsection

@section('link')
    <li><a href="{{ url('/finance/create') }}">Create</a></li>
@endsection

@section('content')



    <div class="page-header">
        <h1>Create Finance</h1>
    </div>
    <form class="form-horizontal" action="{{ url('/finance/create') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Amount</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <div class="input-group-addon">￥</div>
                    <input type="text" name="amount" class="form-control"
                           id="exampleInputAmount" placeholder="0">

                </div>
                @if($errors->has('amount'))
                    {{ $errors->first('amount') }}
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">

                <input type="text" name="name" class="form-control"
                       placeholder="The new consumer">
            </div>
        </div>


        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Start time</label>
            <div class="col-sm-10">

                <input type="datetime-local" VALUE="{{ date("Y-m-d") }}T{{ date("m:s:i") }}" name="start"
                       class="form-control"
                       aria-label="Amount (to the nearest dollar)">

            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">End time</label>
            <div class="col-sm-10">

                <input type="datetime-local" name="end"
                       value="{{ date('Y-m-d', strtotime(date('Y-m-01', strtotime(date("Y-m-d")))." +1 month -1 day")) }}T22:00:01"
                       class="form-control"
                       aria-label="Amount (to the nearest dollar)">

            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Details</label>
            <div class="col-sm-10">
                @foreach($users as $users )
                    <label class="checkbox-inline">
                        <input type="checkbox" name="details[]" checked id="inlineCheckbox1" value="{{ $users->id }}"> {{ $users->name
                     }}
                    </label>

                @endforeach
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Describe</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="3" name="describe"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default btn-info">Create</button>
                <button type="button" onclick="location='{{ url('/finance') }}';" class="btn btn-default">Cancel</button>
            </div>
        </div>
    </form>


@endsection

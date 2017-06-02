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
                    <input type="text" name="amount" class="form-control" id="exampleInputAmount" placeholder="Amount">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">

                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="cate shopping..." aria-label="Close">
                @if($errors->has('name'))
                    {{ $errors->first('name') }}
                @endif
            </div>
        </div>


        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Start time</label>
            <div class="col-sm-10">

                <input type="datetime-local" name="start_at" class="form-control"
                       aria-label="Amount (to the nearest dollar)">

            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">End time</label>
            <div class="col-sm-10">

                <input type="datetime-local" name="end_at" value="2017-07-01T22:00:00" class="form-control"
                       aria-label="Amount (to the nearest dollar)">

            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Participant</label>
            <div class="col-sm-10">
                <label class="checkbox-inline">
                    <input type="checkbox" name="details" checked id="inlineCheckbox1" value="1"> Catho
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" name="details" checked id="inlineCheckbox2" value="2"> Jojo
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" name="details" checked id="inlineCheckbox3" value="3"> Madeline
                </label>
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
                <button type="submit" class="btn btn-default">Cancel</button>
            </div>
        </div>
    </form>


@endsection

@extends('layouts.crazyteam')
@section('nav')
<a href="{{ url('/finance') }}" class="list-group-item active">Finance</a>
@endsection
@section('link')
    <li><a href="{{ url('/finance/create') }}">Create</a></li>
@endsection

@section('content')



    <div class="page-header">
        <h1>Progress bars</h1>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-success" style="width: 35%"><span
                    class="">35% Complete (success)</span>
        </div>
        <div class="progress-bar progress-bar-warning" style="width: 20%"><span
                    class="sr-only">20% Complete (warning)</span>
        </div>
        <div class="progress-bar progress-bar-danger" style="width: 10%"><span
                    class="sr-only">10% Complete (danger)</span>
        </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
            <span class="sr-only">40% Complete (success)</span>
        </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45"
             aria-valuemin="0" aria-valuemax="100" style="width: 45%">
            <span class="sr-only">45% Complete</span>
        </div>
    </div>
    <div class="page-header">
        <h1>Section title</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
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

<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">FIMM Prototype</a>
        </div>
        <ul class="nav navbar-nav">
            {{--            <li class="active"><a href="#">Home</a></li>--}}
            {{--            <li><a href="#">Page 1</a></li>--}}
            {{--            <li><a href="#">Page 2</a></li>--}}
            {{--            <li><a href="#">Page 3</a></li>--}}
        </ul>
    </div>
</nav>
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <h4>Consultant</h4>
            <ul class="nav nav-pills nav-stacked">
                <li class="{{ Route::currentRouteName() == 'consultant.list' ? "active" : "" }}"><a href="{{ route('consultant.list') }}">List</a></li>
                <li class="{{ Route::currentRouteName() == 'consultant.create' ? "active" : "" }}"><a href="{{ route('consultant.create') }}">Register</a></li>
{{--                <li class="{{ Route::currentRouteName() == 'system.index' ? "active" : "" }}"><a href="{{ route('system.index') }}">System Logs</a></li>--}}
            </ul><br>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Blog..">
                <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
            </div>
        </div>

        <div class="col-sm-9">
            @yield('content')
        </div>
    </div>
</div>
@include('includes.footer')
</body>
</html>

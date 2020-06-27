@extends('layouts.consultant')

@section('content')
    <h1>Self-Registration / List Consultant</h1>
    <hr>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th colspan="3">Fullname</th>
                    <th colspan="2">Identity Card/Passport</th>
                    <th colspan="2">Tel.No</th>
                    <th colspan="2">Email</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>###</td>
                    <td colspan="3">Amirul Aiman Bin Abdullah</td>
                    <td colspan="2">941114037261</td>
                    <td colspan="2">014-5047396</td>
                    <td colspan="2">aiman_amirul@example.com</td>
                    <td colspan="btn-group">
                        <button type="button" class="btn btn-info">
                            <span class="glyphicon glyphicon-square-info"></span>
                        </button>
                        <button type="button" class="btn btn-warning">
                            <span class="glyphicon glyphicon-trash"></span>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

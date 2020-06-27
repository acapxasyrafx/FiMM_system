@extends('layouts.consultant')

@section('content')
    <h1>Self-Registration</h1>
    <hr>
    <div class="container">
        <form method="POST" action="{{ route('consultant.store') }}">
            @csrf
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="pill" href="#application">Application</a></li>
                <li><a data-toggle="pill" href="#documents">Supported Documents</a></li>
            </ul>
            <div class="tab-content">
                <div id="application" class="tab-pane fade in active">
                    <div class="form-group">
                        <label for="name">Fullname:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="ic">Identity Number/Passport:</label>
                        <input type="text" class="form-control" id="ic" name="ic" required>
                    </div>
                    <div class="form-group">
                        <label for="tel_num">Tel No.:</label>
                        <input type="text" class="form-control" id="tel_num" name="tel_num" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" requried>
                    </div>
                    <div class="form-group">
                        <label for="education">Highest Education Qualification:</label>
                        <select name="education" id="education" class="form-control" required>
                            <option value="">--SELECT--</option>
                            <option value="SPM">SPM</option>
                            <option value="STPM">STPM</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Post-graduate">Post-graduate</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <textarea name="address" id="address" cols="30" rows="10" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="postcode">Postcode:</label>
                        <input type="text" class="form-control" id="postcode" name="postcode" required>
                    </div>
                    <div class="form-group">
                        <label for="state">State:</label>
                        <select name="state" id="state" class="form-control" required>
                            <option value="">--SELECT--</option>
                            <option value="Sabah">Sabah</option>
                            <option value="Sarawak">Sarawak</option>
                            <option value="Selangor">Selangor</option>
                            <option value="Johor">Johor</option>
                            <option value="Penang">Penang</option>
                            <option value="Kedah">Kedah</option>
                            <option value="Perak">Perak</option>
                            <option value="Pahang">Pahang</option>
                            <option value="Perlis">Perlis</option>
                            <option value="Kelantan">Kelantan</option>
                            <option value="Terengganu">Terengganu</option>
                            <option value="Melaka">Melaka</option>
                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                        </select>
                    </div>
                </div>
                <div id="documents" class="tab-pane fade">
                    <table class="table">
                        <thead>
                        <tr>
                            <th colspan="4">Document</th>
                            <th>Upload</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="4">Cover Letter</td>
                            <td><input type="file" class="form-control" id="cv" name="file[]"></td>
                        </tr>
                        <tr>
                            <td colspan="4">Board of Director Resolution</td>
                            <td><input type="file" class="form-control" id="resolution" name="file[]"></td>
                        </tr>
                        <tr>
                            <td colspan="4">Declaration signed by Director</td>
                            <td><input type="file" class="form-control" id="declaration" name="file[]"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <button type="submit" class="btn btn-submit">Submit</button>
        </form>
    </div>
@endsection

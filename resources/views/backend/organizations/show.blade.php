@extends('layouts.backend') @section('title',$module.'Details') @section('head',$module) @section('content')

<div class="col-xl-12 col-md-12">
    <div class="card table-card">
        <div class="card-header">
            <h5>{{$module}}</h5>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Name</th>
                                    <td>{{$data['record']->name}}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{$data['record']->address}}</td>
                                </tr>
                                <tr>
                                    <th>Website</th>
                                    <td>{{$data['record']->website}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$data['record']->email}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{$data['record']->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Contact Person Name</th>
                                    <td>{{$data['record']->contact_person_name}}</td>
                                </tr>
                                <tr>
                                    <th>Contact Person email</th>
                                    <td>{{$data['record']->contact_person_phone}}</td>
                                </tr>
                                <tr>
                                    <th>Contact Person phone</th>
                                    <td>{{$data['record']->contact_person_phone}}</td>
                                </tr>
                                <tr>
                                    <th>Logo</th>
                                    <td>{{$data['record']->logo}}</td>
                                </tr>
                                <tr>
                                    <th>Created By</th>
                                    <td>{{$data['record']->createdBy->name}}</td>
                                </tr>
                                <tr>
                                    <th>Updated By</th>
                                    <td>
                                        @if(!empty($data['record']->updated_by))
                                        {{$data['record']->updatedBy->name}}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{$data['record']->created_at}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
</div>

<!-- /.content -->
@endsection @section('js') @endsection

@extends('layouts.backend') @section('title',$module.'Details') @section('head',$module) @section('content')

<div class="col-xl-12 col-md-12">
    <div class="card table-card">
        <div class="card-header">
            <h5>{{$module}}
                <a href="{{route($base_route.'create')}}" class="btn btn-info">Create</a>
                <a href="{{route($base_route.'index')}}" class="btn btn-info">List</a>
                <a href="{{route($base_route.'edit',$data['record']->id)}}"class="btn btn-warning">Edit</a>
                <a href="{{route($base_route.'trash')}}" class="btn btn-danger">Trash</a>
            </h5>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <td>{{$data['record'] ->id}}</td>
                                </tr>

                                <tr>
                                    <th>Project</th>
                                    <td>{{$data['record'] ->projectId->title}}</td>
                                </tr>

                                <tr>
                                    <th>Meeting Date</th>
                                    <td>{{$data['record'] ->meeting_date}}</td>
                                </tr>

                                <tr>
                                    <th>Topic</th>
                                    <td>{{$data['record'] ->topic}}</td>
                                </tr>

                                <tr>
                                    <th>Feedback</th>
                                    <td>{{$data['record'] ->feedback}}</td>
                                </tr>

                                <tr>
                                    <th>Next Meeting Target</th>
                                    <td>{{$data['record'] ->next_meeting_target}}</td>
                                </tr>

                                <tr>
                                    <th>Supervisor Approval Key</th>
                                    <td>
                                        @if($data['record']->supervisor_approval_key==1)
                                            <span class="text-success">Approved</span>
                                        @else
                                            <span class="text-danger"> Not Approved</span>
                                        @endif
                                    </td>
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
                                        @else
                                            Not Updated
                                        @endif
                                    </td>
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

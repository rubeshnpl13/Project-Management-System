@extends('layouts.backend') @section('title',$module.'Details') @section('head',$module) @section('content')

    <div class="col-xl-12 col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>{{$module}}
                    <a href="{{route($base_route.'create')}}" class="btn btn-info">Create</a>
                    <a href="{{route($base_route.'index')}}" class="btn btn-info">List</a>
                    <a href="{{route($base_route.'edit',$data['record']->id)}}"class="btn btn-warning">Edit</a>
                    <a href="{{route($base_route.'trash')}}" class="btn btn-warning">Trash</a>
                </h5>
            </div>
            <div class="col-xl-12 col-md-12">
                <div class="row">
                    <div class="col-md-12">

                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table">
                                    
                                    <tr>
                                        <th>Project</th>
                                        <td>{{$data['record'] ->project->title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Student</th>
                                        <td>{{$data['record'] ->student->name}}</td>
                                    </tr>
                                   
                                    <tr>
                                        <th>Created At</th>
                                        <td>{{$data['record'] ->created_at}}</td>

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
@endsection 
@section('js') 
@endsection

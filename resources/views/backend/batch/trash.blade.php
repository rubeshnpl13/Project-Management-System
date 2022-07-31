@extends('layouts.backend') @section('title',$module.'List') @section('head',$module) @section('content')

<div class="col-xl-12 col-md-12">
    <div class="card table-card">
        <div class="card-header">
            <h5>Projects
                <a href="{{route($base_route.'create')}}" class="btn btn-info">Create</a>

            </h5>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Year</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data['records'] as $record)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$record->year}}</td>
                                       
                                
                                        <td>
                                            <form action="{{route($base_route.'restore',$record->id)}}" method="post" style="display:inline-block">
                                                @csrf
                                                <input type="submit" class="btn btn-primary" value="Restore">
                                            </form>
                                            <form action="{{route($base_route.'force_delete',$record->id)}}" method="post" style="display:inline-block">
                                                @method("delete") @csrf
                                                <input type="submit" class="btn btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
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
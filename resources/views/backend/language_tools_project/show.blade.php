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
                                        <th>Language</th>
                                        <td>{{$data['record']->language}}</td>
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

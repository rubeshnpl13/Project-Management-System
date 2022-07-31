@extends('layouts.S_backend')
@section('title',$module)
@section('head',$module)
@section('content')

    <div class="pcoded-main-container">
        <div class="main-body">
            <div class="row">
                <div class="col-sm-10">
                    <div class="card">
                        <div class="card-header">
                            <h5>{{$data['record']->name}}'s layout</h5>
                        </div>
                        <div class="card-body">
                            {{--             main body                    --}}


                            <div class="alert alert-info mb-0" role="alert">
                                @if($data['log'])
                                    <span>Yo have logs data</span>
                                @else
                                    <span>Yo have  no logs data</span>
                                @endif
                            </div>

                            <div>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add logs</button>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <h4 class="modal-title">Logs Form</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Some text in the modal.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                            </div>


                            {{--             main body  ends                 --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


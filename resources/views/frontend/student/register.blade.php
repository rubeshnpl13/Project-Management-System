<!DOCTYPE html>
<html lang="en">

<head>

    <title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<div class="auth-wrapper">
    <div class="auth-content col-md-7">
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                        <img src="assets/images/logo-dark.png" alt="" class="img-fluid mb-4">
                        <h4 class="mb-3 f-w-400">Signin</h4>
                        {!!Form::open(['route' => [$base_route.'doregister'],'method'=>'post'])!!}
                        <div class="form-group">
                            {!!Form::label('name','Student Name')!!}
                            {!!Form::text('name',null,['class'=> 'form-control','placeholder'=>'Student Name'])!!}
                            @error('semester')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            
                            <div class="form-group">
                                {!!Form::label('email','Email')!!}
                                {!!Form::email ('email',null,['class'=> 'form-control','placeholder'=>'Email'])!!}
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                {!!Form::label('passsword','Passsword')!!}
                                {!!Form::password('passsword',null,['class'=> 'form-control','placeholder'=>'Password'])!!}
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                {!!Form::label('batch_id','Select Batch')!!}
                                {!!Form::select ('batch_id',$data['batch'],null,['class'=> 'form-control'])!!}
                                @error('program_id')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                {!!Form::label('program_id','Select Program')!!}
                                {!!Form::select ('program_id',$data['program'],null,['class'=> 'form-control'])!!}
                                @error('program_id')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                {!!Form::label('semester','Semester')!!}
                                {!!Form::selectRange('semester', 7,8,null,['class'=> 'form-control','placeholder'=>'Select Semester'])!!}
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="card-footer">
                                {!!Form::submit("Register",['class'=>'btn btn-success'])!!}
                                
                            </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('assets/js/vendor-all.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/ripple.js')}}"></script>
<script src="{{asset('assets/js/pcoded.min.js')}}"></script>
</body>
</html>

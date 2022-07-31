<div class="col-md-12">
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
    <div class="form-group">
        {!!Form::label('enroll_year','Enroll Year')!!}
        {!!Form::text ('enroll_year',null,['class'=> 'form-control','placeholder'=>'Enroll Year'])!!}
        @error('code')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>


</div>
<div class="card-footer">
    {!!Form::submit($button .''.$module,['class'=>'btn btn-success'])!!}
    {!!Form::reset('Clear'.''.$module,['class'=>'btn btn-danger'])!!}
</div>

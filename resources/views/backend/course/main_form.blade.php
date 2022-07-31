<div class="col-md-12">

    <div class="form-group">
        {!!Form::label('program_id','Select Program')!!}
        {!!Form::select ('program_id',$data['programs'],null,['class'=> 'form-control'])!!}
        @error('program_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        {!!Form::label('semester','Semester Number')!!}
        {!!Form::number ('semester',null,['class'=> 'form-control','placeholder'=>'Semester Number'])!!}
        @error('semester')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        {!!Form::label('name','Course Name')!!}
        {!!Form::text ('name',null,['class'=> 'form-control','placeholder'=>'Course Name'])!!}
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        {!!Form::label('code','Course Code')!!}
        {!!Form::text ('code',null,['class'=> 'form-control','placeholder'=>'Course Code'])!!}
        @error('code')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('status','Status')!!} <br>
        {!!Form::radio('status','1',null)!!}Active
        {!!Form::radio('status','0',true)!!}Deactive
        @error('status')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

</div>
    <div class="card-footer">
        {!!Form::submit($button .''.$module,['class'=>'btn btn-success'])!!}
        {!!Form::reset('Clear'.''.$module,['class'=>'btn btn-danger'])!!}
    </div>

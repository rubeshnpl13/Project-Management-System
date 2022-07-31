<div class="col-md-12">

    <div class="form-group">
        {!!Form::label('supervisor_type_id','Select Supervisor Type')!!}
        {!!Form::select('supervisor_type_id',$data['supervisor_types'],null,['class'=> 'form-control'])!!}
        @error('supervisor_type_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        {!!Form::label('name','Name')!!}
        {!!Form::text('name',null,['class'=> 'form-control','placeholder'=>'Name'])!!}
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    
   

<div class="card-footer">
    {!!Form::submit($button .''.$module,['class'=>'btn btn-success'])!!}
    {!!Form::reset('Clear'.''.$module,['class'=>'btn btn-danger'])!!}
</div>
</div>
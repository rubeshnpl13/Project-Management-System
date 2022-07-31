<div class="col-md-12">

    <div class="form-group">
        {!!Form::label('batch_id','Select Batch')!!}
        {!!Form::select ('batch_id',$data['batch'],null,['class'=> 'form-control'])!!}
        @error('program_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('supervisor_id','Select Supervisor')!!}
        {!!Form::select ('supervisor_id',$data['supervisor'],null,['class'=> 'form-control'])!!}
        @error('supervisor_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
   
    <div class="form-group">
        {!!Form::label('organization_id','Select Organization')!!}
        {!!Form::select ('organization_id',$data['organization'],null,['class'=> 'form-control'])!!}
        @error('program_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    

    <div class="form-group">
        {!!Form::label('title','Title')!!}
        {!!Form::text ('title',null,['class'=> 'form-control','placeholder'=>'Title'])!!}
        @error('semester')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    

</div>
    <div class="card-footer">
        {!!Form::submit($button .''.$module,['class'=>'btn btn-success'])!!}
        {!!Form::reset('Clear'.''.$module,['class'=>'btn btn-danger'])!!}
    </div>

<div class="col-md-12">

    <div class="form-group">
        {!!Form::label('project_id','Select Project')!!}
        {!!Form::select ('project_id',$data['project'],null,['class'=> 'form-control'])!!}
        @error('program_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('language_tool_id','Select Language Tools')!!}
        {!!Form::select ('language_tool_id',$data['language_tool'],null,['class'=> 'form-control'])!!}
        @error('supervisor_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="card-footer">
        {!!Form::submit($button .''.$module,['class'=>'btn btn-success'])!!}
        {!!Form::reset('Clear'.''.$module,['class'=>'btn btn-danger'])!!}
    </div>

<div class="col-md-12">

    <div class="form-group">
        {!!Form::label('evaluation_criteria_id','Select evaluation criteria')!!}
        {!!Form::select('evaluation_criteria_id',$data['evaluation_criterias'],null,['class'=> 'form-control'])!!}
        @error('evaluation_criteria_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('project_id','Select Project')!!}
        {!!Form::select('project_id',$data['projects'],null,['class'=> 'form-control'])!!}
        @error('project_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('marks','Marks')!!}
        {!!Form::number('marks',null,['class'=> 'form-control','placeholder'=>'Title'])!!}
        @error('marks')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
   
    {{-- <div class="form-group">
        {!!Form::label('status','Status')!!} <br>
        {!!Form::radio('status','1',null)!!}Active
        {!!Form::radio('status','0',true)!!}Deactive
        @error('status')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div> --}}
</div>
<div class="card-footer">
    {!!Form::submit($button .''.$module,['class'=>'btn btn-success'])!!}
    {!!Form::reset('Clear'.''.$module,['class'=>'btn btn-danger'])!!}
</div>

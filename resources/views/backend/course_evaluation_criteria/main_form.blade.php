<div class="col-md-12">
    
    <div class="form-group">
        {!!Form::label('course_id','Select Course')!!}
        {!!Form::select('course_id',$data['courses'],null,['class'=> 'form-control'])!!}
        @error('course_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('evaluation_criteria_id','Select Evaluatio Criteria')!!}
        {!!Form::select('evaluation_criteria_id',$data['evaluation_criterias'],null,['class'=> 'form-control'])!!}
        @error('evaluation_criteria_id')
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

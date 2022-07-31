<div class="col-md-12">
    <div class="form-group">
        {!!Form::label('batch_id','Select Batch')!!}
        {!!Form::select ('batch_id',$data['batches'],null,['class'=> 'form-control'])!!}
        @error('batch_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    
   <div class="form-group">
   {!!Form::label('course','Course')!!} 
    {!!Form::select ('course_id[]',$data['courses'],null, ['class'=> 'form-control','placeholder'=>'Select course','multiple'=>'multiple'])!!}
     
   </div>
</div>
<div class="card-footer">
    {!!Form::submit($button .''.$module,['class'=>'btn btn-success'])!!}
    {!!Form::reset('Clear'.''.$module,['class'=>'btn btn-danger'])!!}
</div>

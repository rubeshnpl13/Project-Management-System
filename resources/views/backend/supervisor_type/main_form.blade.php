<div class="col-md-12">
    <div class="form-group">
        {!!Form::label('title','Title')!!}
        {!!Form::text('title',null,['class'=> 'form-control','placeholder'=>'Title'])!!}
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    
   

<div class="card-footer">
    {!!Form::submit($button .''.$module,['class'=>'btn btn-success'])!!}
    {!!Form::reset('Clear'.''.$module,['class'=>'btn btn-danger'])!!}
</div>
</div>
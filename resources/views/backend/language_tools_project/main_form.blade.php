<div class="col-md-12">
    <div class="form-group">
        {!!Form::label('language','Language')!!}
        {!!Form::text ('language',null,['class'=> 'form-control','placeholder'=>'Language'])!!}
        @error('language')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="card-footer">
        {!!Form::submit($button .''.$module,['class'=>'btn btn-success'])!!}
        {!!Form::reset('Clear'.''.$module,['class'=>'btn btn-danger'])!!}
    </div>

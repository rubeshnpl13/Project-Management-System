<div class="col-md-12">
    <div class="form-group">
        {!!Form::label('title','Title')!!}
        {!!Form::text ('title',null,['class'=> 'form-control','placeholder'=>'Title'])!!}
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('no_of_semester','No of Semester')!!}
        {!!Form::number ('no_of_semester',null,['class'=> 'form-control','placeholder'=>'No of Semester'])!!}
        @error('title')
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

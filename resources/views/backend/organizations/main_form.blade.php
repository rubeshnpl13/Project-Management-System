<div class="col-md-12">
    <div class="form-group">
        {!!Form::label('name','Name')!!}
        {!!Form::text ('name',null,['class'=> 'form-control','placeholder'=>'Name'])!!}
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('address','Address')!!}
        {!!Form::text ('address',null,['class'=> 'form-control','placeholder'=>'Address'])!!}
        @error('address')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('website','Website')!!}
        {!!Form::url('website',null,['class'=> 'form-control','placeholder'=>'Website'])!!}
        @error('website')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('email','Email')!!}
        {!!Form::email ('email',null,['class'=> 'form-control','placeholder'=>'Email'])!!}
        @error('email')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('phone','Phone')!!}
        {!!Form::text ('phone',null,['class'=> 'form-control','placeholder'=>'Phone'])!!}
        @error('phone')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('contact_person_name','Contact Person Name')!!}
        {!!Form::text ('contact_person_name',null,['class'=> 'form-control','placeholder'=>'Contact Person Name'])!!}
        @error('contact_person_name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('contact_person_email','Contact Person Email')!!}
        {!!Form::text ('contact_person_email',null,['class'=> 'form-control','placeholder'=>'Contact Person Email'])!!}
        @error('contact_person_email')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('contact_person_phone','Contact Person Phone')!!}
        {!!Form::text ('contact_person_phone',null,['class'=> 'form-control','placeholder'=>'Contact Person Phone'])!!}
        @error('contact_person_name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('logo','Logo')!!}
        {!!Form::file('logo',null,['class'=> 'form-control','placeholder'=>'Logo'])!!}
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

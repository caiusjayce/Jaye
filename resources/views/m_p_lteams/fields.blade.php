<!-- Yourname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('yourName', 'Yourname:') !!}
    {!! Form::text('yourName', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Birthdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Birthdate', 'Birthdate:') !!}
    {!! Form::text('Birthdate', null, ['class' => 'form-control','id'=>'Birthdate']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#Birthdate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Address', 'Address:') !!}
    {!! Form::text('Address', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Teamname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('teamName', 'Teamname:') !!}
    {!! Form::text('teamName', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Teamrole Field -->
<div class="form-group col-sm-6">
    {!! Form::label('teamRole', 'Teamrole:') !!}
    {!! Form::text('teamRole', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>
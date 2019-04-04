
<div class="from-group col-md-6">
    {!! Form::label('name','Nombre') !!}

    {!! Form::text('name', null, ['class' => 'form-control']) !!}

</div>

<div class="from-group col-md-6">
        {!! Form::label('user_name','Nombre de usuario') !!}

        {!! Form::text('user_name', null, ['class' => 'form-control']) !!}

    </div>


<div class="from-group col-md-6">
    {!! Form::label('email','Email') !!}

    {!! Form::email('email', null, ['class' => 'form-control']) !!}

</div>
<div class="from-group col-md-6">
    {!! Form::label('password','Password') !!}

      {!! Form::password('password', array('class' => 'form-control')) !!}

</div>
<hr>

<h3>Lista de roles</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach ($roles as $role )
        <li>
            <label>
               {{   Form::checkbox('roles[]', $role->id, null) }}
               {{ $role->name }}
               <em>( {{ $role->description ?: 'N/A' }})</em>
            </label>
        </li>

        @endforeach

    </ul>
</div>


<div class="from-group">

    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}

</div>

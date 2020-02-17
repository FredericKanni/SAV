a bourrer ds des dropdown menu ds un form pour le formulaise

@foreach ($types as $type )
<p>
    {{$type->type}}
</p>

@endforeach
@foreach ($users as $user )
<p>
    {{$user->name}}
</p>

@endforeach

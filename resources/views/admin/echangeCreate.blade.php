



<select name="type"  >
        @foreach ($types as $type )
        <option value="{{$type->id}}">{{$type->type}}</option>
        @endforeach
      </select>



      <select name="user">
            @foreach ($users as $user )
            <option value=" {{$user->id}}"> {{$user->name}}</option>
            @endforeach
          </select>


          <select name="client" size="1">
                @foreach ($clients as $client )
                <option value=" {{$client->id}}"> ({{$client->id}}) {{$client->nom}} {{$client->prenom}}</option>
                @endforeach
              </select>

              <input type="date" name="date" id="">
              <input type="test" name="commentaire" id="">


              

<form method="post">
{{ csrf_field() }}
    <input type="text" name="test" id="test" >
    <select name="maliste">

            @foreach ($users as $user )
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
          </select>
    <input type="submit" value="testio">

</form>
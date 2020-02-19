


@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">liste des  echanges</div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">type</th>
                        <th scope="col">user_id + user_name</th>
                        <th scope="col">commentaire</th>
                        <th scope="col">clients</th>
                       <th scope="col"> {{-- Action --}}

                          <a href="/echange/create"><button class="btn btn-success">ajouter un echange</button></a>
                        </th>
                       
                      </tr>
                    </thead>
                    <tbody>
                      
                        echanges   @foreach ($echanges as $echange )
                     
                      <tr>
                        <th scope="row">{{$echange-> id}}</th>
                    
                        <td>{{$echange-> type-> type}}</td>
                        <td>({{$echange-> user_id}})     {{$echange-> user-> name}} </td>
                        <td>{{$echange->commentaire}}  </td>
                        <td>({{$echange-> client_id}})     {{$echange-> client-> nom}} </td>
                        <td>
                            <a href="/client/{{$echange-> client_id}}"><button class="btn btn-warning">voir la fiche</button></a>
                    
                         
                      </td>
                      </tr>
                      @endforeach 
                   
                    </tbody>
                  </table>


              
            </div>
        </div>
    </div>
</div>
@endsection


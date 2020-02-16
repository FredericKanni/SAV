@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">fiche client de {{$client-> nom}}  {{$client-> prenom}} </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Penom</th>
                        <th scope="col">Tel</th>
                        <th scope="col">Mail</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                      
                    
                     
                      <tr>
                        <th scope="row">{{$client-> id}}</th>
                        <td>{{$client-> nom}}</td>
                        <td>{{$client-> prenom}}</td>
                        <td>{{$client-> tel}}</td>
                        <td>{{$client-> mail}}</td>
                        <td>
                        
                    
                         
                      </td>
                      </tr>
                          
                   
                    </tbody>
                  </table>


              
            </div>
        </div>
    </div>
</div>
@endsection

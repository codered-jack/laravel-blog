@extends('layouts.app')

@section('content')
           <div class="col-md-3">
               <div class="panel-info">
                   <div class="panel-heading text-center">
                       POSTED 
                   </div>
                   <div class="panel-body">
                       <h1 class="text-center">
                            {{$posts_count}}
                       </h1>
                   </div>
               </div>
           </div>

            <div class="col-md-3">
               <div class="panel-danger">
                   <div class="panel-heading text-center">
                      THRASHED POST 
                   </div>
                   <div class="panel-body">
                       <h1 class="text-center">
                            {{$trashed_count}}
                       </h1>
                   </div>
               </div>
           </div>

            <div class="col-md-3">
               <div class="panel-success">
                   <div class="panel-heading text-center">
                      USERS
                   </div>
                   <div class="panel-body">
                       <h1 class="text-center">
                            {{$users_count}}
                       </h1>
                   </div>
               </div>
           </div>

            <div class="col-md-3">
               <div class="panel-info">
                   <div class="panel-heading text-center">
                      CATEGORIES 
                   </div>
                   <div class="panel-body">
                       <h1 class="text-center">
                           {{$categories_count}} 
                       </h1>
                   </div>
               </div>
           </div>
@endsection

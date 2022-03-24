@extends('layouts.main')

@section('style')
    
@endsection

@section('content')
    
 @forelse ($trains as $train)
     <div class="container bg-black text-white">
         <h3>{{ $train->stazione_partenza }}</h3>
         <h3>{{ $train->stazione_arrivo}}</h3>
     </div>
 @empty
     
 @endforelse
@endsection
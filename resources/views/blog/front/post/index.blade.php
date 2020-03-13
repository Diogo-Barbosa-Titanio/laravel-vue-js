@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">Título</div>
            <div class="col">Publicado</div>
            <div class="col">Início</div>
            <div class="col">Encerramento</div>
        </div>
        @foreach($posts as $post)
         <div class="row">
             <div class="col">{{ $post->title }}</div>
             <div class="col">{{ $post->published == 1 ? 'Publicado' : 'Não publicado' }}</div>
             <div class="col">{{ $post->start }}</div>
             <div class="col">{{ $post->finish }}</div>
         </div>
        @endforeach

    </div>
@endsection

@extends('layouts.app')
@section('content')
  <h3>Albums</h3>
  @if(count($albums) > 0)
    <?php
      $colcount = count($albums);
      $i = 1;
    ?>
    <div id="albums">
      <div class="row grid-x text-center">
        @foreach($albums as $album)
          @if($i == $colcount)
            <div class="cell medium-4 columns end">
              <a href="/albums/{{$album->id}}">
                <img id="album_pic" class="thumbnail" src="storage/album_covers/{{$album->cover_image}}" height="400px" alt="{{$album->name}}">
              </a>
              <br>
              <h4>{{$album->name}}</h4>
          @else
            <div class="cell medium-4 columns">
              <a href="/albums/{{$album->id}}">
                <img id="album_pic" class="thumbnail" src="storage/album_covers/{{$album->cover_image}}" height="400px" alt="{{$album->name}}">
              </a>
              <br>
              <h4>{{$album->name}}</h4>
          @endif
          @if($i % 3 == 0)
            </div>
      </div>
            <div class="row grid-x text-center">
            @else
            </div>
            @endif
          <?php $i++; ?>
        @endforeach
  @else
    <p>No Albums To Display</p>
  @endif
@endsection

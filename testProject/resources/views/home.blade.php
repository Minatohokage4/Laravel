@extends('template')

@section('content')
  <div class="content">
    <div class="row">
      <h2>Your reminder </h2>
      <div class="row">
        <div class="well">
          <span>Buy milk</span>
          <a class ='btn btn-success pull-right'>Delete</a>
        </div>

      </div>
    </div>
      @include('component.NewReminder')
  </div>

@endsection

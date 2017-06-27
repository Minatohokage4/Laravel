@extends('template')
@section('content')

<div class="content">
  <div class="row">
    <h2>Your reminder </h2>
    <div class="row">
      @foreach ($reminders as $reminder)
      <div class="well">
        <span>{{$reminder -> body}}</span>
        <a class='btn btn-success pull-right'>Success</a>
      </div>
    @endforeach
    </div>
  </div>
  @include('component.NewReminder')
</div>

@endsection

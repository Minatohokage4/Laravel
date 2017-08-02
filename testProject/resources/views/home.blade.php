@extends('template')
@section('content')

<div class="content">
  <div class="row">
    <h2>Your reminder </h2>
    <div class="row">
      @foreach ($reminders as $reminder)
      <div class="well">
        <span>{{$reminder -> body}}</span>
        {{--<a class='btn btn-success pull-right'>Success</a>--}}
        <form class="" action="/reminder/delete" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="id" value="{{$reminder->id}}">
          <input type="submit" class='btn btn-success' value="Finis"></input>
        </form>
      </div>
    @endforeach
    </div>
  </div>
  @include('component.NewReminder')
</div>

@endsection

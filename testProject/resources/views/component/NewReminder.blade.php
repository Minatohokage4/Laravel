<form method="post" action="/reminder/new">
  <div class="form-group">
    <label>Reminder</label>
    <textarea name="reminder" rows="8" cols="80" class="form-control"></textarea>
  </div>

  <div class="form-group">
    {{ csrf_field() }}
    <input type="submit" class='btn btn-primary ' name="" value="create new reminder">
  </div>
</form>

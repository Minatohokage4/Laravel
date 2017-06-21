<div class="form-group">

  <label>Reminder</label>

  <form method="post" action="/reminder/new">
    <textarea name="reminder" rows="8" cols="80"></textarea>
  </form>

</div>

<div class="form-group">
  {{ csrf_field() }}
  <input type="submit" class='btn btn-success' name="" value="create new reminder">
</div>

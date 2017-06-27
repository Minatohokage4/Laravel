<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/app.css">
  <title>MyProfile</title>
</head>

<body>
  <div class="container">
    <div class="col-md-6">
      <img class="img-responsive" src="/images/arm.jpg" alt="profile" height="250">
    </div>
    <div class="col-md-6">
      <h1>Name : {{$name}}</h1>
      <h1>Department : {{$department}}</h1>
      <h1>Skill : {{$skill}}</h1>
      <h1>Status : {{$status }}</h1>
    </div>

  </div>
</body>

</html>

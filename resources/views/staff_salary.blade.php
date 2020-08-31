<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Salary</h2>
  <p>All Salary See Here</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Sr.</th>
        <th>Employee name</th>
        <th>Salary</th>
        <th>Created</th>
        <th>U</pdatedth>
      </tr>
    </thead>
    <tbody>
@foreach($salary as $sel)
    </tbody>
    <tr>
    <td>{{$sel->id}} </td>
    <td> {{$sel->ename}} </td>
    <td>{{$sel->selary}}  </td>
    <td>{{$sel->created_at}}  </td>
    <td>{{$sel->updated_at}}  </td>
@endforeach
    </tr>
  </table>
</div>

</body>
</html>

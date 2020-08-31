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
  <h2>Expenses</h2>
  <p>All Expenses See Here</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Sr.</th>
        <th>Expense Type</th>
        <th>Amount</th>
        <th>Price</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    @foreach($expenses as $expen)
      <tr>
      <td>{{$expen->id}}</td>
       <td>{{$expen->name}}</td>
       <td>{{$expen->amount}}</td>
       <td>{{$expen->description}}</td>
       <td>{{date('d M Y H:i',strtotime($expen->created_at)) }}</td>
    @endforeach
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>

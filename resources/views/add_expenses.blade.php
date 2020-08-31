<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Add your expenses here</title>
</head>
<body>
<div class="container">
<h1 class="display1 text-center">Add your Expenses Here</h1>
<form action="{{route('expense.store')}}" method="POST">
   @csrf
    <div class="form-group">
      <label for="name">Expense type</label>
      <input type="text" class="form-control" id="email" placeholder="Enter expense type" name="name">
    </div>
    <div class="form-group">
      <label for="amount">Amount</label>
      <input type="text" class="form-control" id="amount" placeholder="Enter amount" name="amount">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  
</body>
</html>
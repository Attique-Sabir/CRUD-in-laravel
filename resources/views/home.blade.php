@extends('layouts.app')

@section('content')
<div class="container">
    <a href="addexpenses" class="btn btn-primary">
    Add Expenses</a>


    <a href="{{route('AddSalary')}}" type="button" class="btn btn-primary">
    Add Selary</a>

    @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
    
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

  
</div>

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

    <td><a href="{{route('edit', $sel->id )}}"  class="btn btn-primary">Edit</a></td>
    
    <td>
    <form method="post" action="{{route('delete', $sel->id )}}">
    @method('delete')
    @csrf
    <button type="submit"  class="btn btn-danger">Delete</button></td>
    </form>
    </tr>
    @endforeach
    </table>




</div>
</div>
@endsection


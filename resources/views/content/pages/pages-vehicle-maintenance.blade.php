@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Dashboard')

@section('content')
<head>
  <title>Driver Maintenance</title>
</head>
<body>
  <div class="card" style="width: 40rem;">
    <div class="card-body">
      <h5 class="card-title">Issues List</h5>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Vehicle ID</th>
            <th scope="col">Maintenance Date</th>
            <th scope="col">Issues</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>

@endsection

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th width="80px">@sortablelink('id')</th>
        <th>@sortablelink('name')</th>
        <th>@sortablelink('email')</th>
        <th>@sortablelink('phone')</th>
        <th>@sortablelink('role')</th>
        <th>@sortablelink('created_at')</th>
      </tr>
    </thead>
    <tbody>
      @if($all->count() > 0)
      @foreach($all as $key => $row)
      <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->name }}</td>
        <td>{{ $row->email }}</td>
        <td>{{ $row->phone }}</td>
        <td>{{ $row->role }}</td>
        <td>{{ $row->created_at }}</td>
      </tr>
      @endforeach
      @endif
    </tbody>
    {!! $all->appends(\Request::except('page'))->render() !!}
  </table>
</div>

</body>
</html>

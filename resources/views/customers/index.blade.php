<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <style>
    .center {
      text-align: center;
    }

  </style>
</head>

<body>

  <div class="container">

    <h2 class="center">
      Customers
    </h2>

    <form action="{{ route('employee-import') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="mb-3">
        <label for="formFile" class="form-label">Default file input example</label>
        <input name="formFile" class="form-control" type="file" id="formFile">
      </div>

      <button type="submit" class="btn btn-primary mb-3">
        Submit
      </button>

    </form>

    @if (session('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card">
      <div class="card-body">

        <table class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Customer_id</th>
              <th>Name</th>
              <th>Gender</th>
              <th>Address</th>
              <th>Phone Number</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($customers as $customer)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $customer->customer_id }}</td>
              <td>{{ $customer->name }}</td>
              <td>{{ $customer->gender }}</td>
              <td>{{ $customer->address }}</td>
              <td>{{ $customer->phone_number }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

</body>

</html>

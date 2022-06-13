<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>State Edit</title>
</head>
<body>
    <div class="container mt-5">

        <a class="btn btn-secondary" href="/admin/category">Back</a>
        <h2 class="mt-4">Edit Book State</h2>
        <ul>
            <li>0: will <span class="text-danger">desabled</span> from shop page but the publisher <b>can change</b> this option</li>
            <li>1: will <span class="text-danger">appear </span> in shop page and the publisher<b> can change</b> this option</li>
            <li>2: will <span class="text-danger">desabled </span> from shop page and the publisher <b>can't change</b> this option</li>
        </ul>
    <form action="/admin/book/edit/{{$book->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label class="form-label">Book State</label>
          <select class="form-select" name="state" aria-label="state of the book">
            <option selected value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Edit State</button>
      </form>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
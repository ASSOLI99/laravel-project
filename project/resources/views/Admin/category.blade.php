<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="{{asset('assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/app-dark.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.png')}}" type="image/png">

<link rel="stylesheet" href="{{asset('assets/css/shared/iconly.css')}}">

</head>

<body>
    <div id="app">
        @include('Admin.Admin_common.sidebar')
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

<div class="page-heading">
    @if(session()->has('message'))
    <div class="alert alert-primary" role="alert">
        {{session('message')}}
      </div>

@endif
    <h3><a href="/dashboard">Dashboard</a><span> / Category</span></h3>
</div>
<section class="section">
    <div class="row" id="table-head">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Category</h4>
                    <h4 class="card-title"><a href="/admin/category/create" class="btn btn-primary mt-3">Add Catregory</a></h4>

                </div>
                <div class="card-content">
                    <!-- table head dark -->
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    
                              
                                <tr>
                                    <td class="text-bold-500">{{$category['image']}}</td>
                                    <td>{{$category['name']}}</td>
                                    <td>
                                        <div>
                                            <a class="btn btn-primary" href="/admin/category/edit/{{$category['id']}}/edit">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <form method="POST" action="/admin/category/delete/{{$category['id']}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash3-fill"></i> Delete</button>
                                            </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        @include('Admin.Admin_common.footer')
        </div>
    </div>
    <script src="{{asset('assets/js/app.js')}}"></script>

<script src="{{asset('assets/js/pages/dashboard.js')}}"></script>

</body>

</html>

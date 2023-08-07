<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-sm">
                <a class="navbar-brand" href="#" style="color:white"> A-Ortho </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsobleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar=toggler=icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}" style="color: white"> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/customer')}}" style="color: white"> Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/customer/view')}}" style="color: white"> Customer</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
      <div class="container">
        <a href="{{route('customer.create')}}">
        <!-- <a href="{{url('/')}}/customer"> -->
        <button class="btn btn-primary d-inline-block m-2 float-right">Add</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>ID</th>
                    <th>Email</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->customer_id}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->state}}</td>
                    <td>{{$customer->country}}</td>
                    <td>
                        @if($customer->status == '1')
                        <a href="">
                            <span class="badge badge-success">Active</span>
                        </a>
                        @else
                        <a href="">
                            <span class="badge badge-danger">InActive</span>
                        </a>
                        @endif    
                    </td>
                    <td>                
                            <a href="{{route('customer.delete', ['id' => $customer->customer_id])}}"><button class="btn btn-danger">Delete</button></a>
                            <a href="{{route('customer.edit',['id' => $customer->customer_id])}}"><button class="btn btn-primary">Edit</button></a>              
                    </td>
                    <!-- <td>                
                            <a href="{{url('/customer/delete/')}}/{{$customer->customer_id}}"><button class="btn btn-danger">Delete</button></a>
                            <button class="btn btn-primary">Edit</button>                 
                    </td> -->

                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    
  </body>
</html>
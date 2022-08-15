<?php
   use App\Http\Controllers\ProductController;
   $total = 0;
   if (Session::has('user')) {
     $total = ProductController::cartItem();
   }
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Ecommerce</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/orders">Order</a>
          </li>
        </ul>
        <ul style="list-style: none;" class="d-flex">
            <li>
                <a href="/cartList" style="text-decoration: none; color:black;">
                    Cart({{$total}})
                </a>
            </li>
            @if (Session::has('user'))
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{Session::get('user')->name}}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/logout">logout</a></li>
              </ul>
            </li>
            @else
            <li>
              <a href="/login" class="btn btn-danger" style="text-decoration: none; color:black;">
                  login
              </a>
            <li>
              <a href="/register" class="btn btn-outline-danger" style="text-decoration: none; color:black;">
                  register
              </a>
            </li>
            @endif
        </ul>
      </div>
    </div>
  </nav>
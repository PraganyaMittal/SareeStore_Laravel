@extends('layouts.app')
@section('content')
<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
      <h2 class="page-title">My Account</h2>
      <div class="row">
        <div class="col-lg-3">
          @include('user.account-nav')
        </div>
        <div class="col-lg-9">
          <div class="page-content my-account__dashboard">
            <p>Hello <strong>{{ Auth::user()->name }}</strong></p>
            <p>Your account details:</p>
            <ul>
              <li><strong>Name:</strong> {{ Auth::user()->name }}</li>
              <li><strong>Email:</strong> {{ Auth::user()->email }}</li>
              <li><strong>Phone:</strong> {{ Auth::user()->mobile }}</li> <!-- Assuming you have mobile in the user model -->
            </ul>
            <p>From your account dashboard you can view your <a class="underline-link" href="{{ route('user.orders') }}">recent orders</a>,<a class="underline-link" href="{{ route('wishlist.index') }}">See you whishlist</a>, and <a class="underline-link" href="{{ route('cart.index') }}">Add to cart.</a></p>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
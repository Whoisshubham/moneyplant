@extends('frontend.layouts.app')
@section('content')
<style>
    body {
        font-family: ui-sans-serif !important;
    }

    .form-control:focus {
        color: var(--bs-body-color);
        background-color: var(--bs-body-bg);
        /* border-color: #86b7fe; */
        outline: 0;
        box-shadow: none;
    }

    .custom-btn1 {
        color: #fff;
        /* Red color */
        background-color: #dc3545;
        border: 1px solid #fff;
        border-radius: 0%;
        /* Transparent outline */
    }

    .custom-btn1:hover {
        background-color: #fff;
        /* Red color on hover */
        color: #dc3545;
        border: 1px solid #dc3545;
        border-radius: 0%;
        /* White text on hover */
    }

    .custom-btn2 {
        color: #fff;
        /* Red color */
        background-color: transparent;
        border: 1px solid #fff;
        border-radius: 0%;
        /* Transparent outline */
    }

    .custom-btn2:hover {
        background-color: #dc3545;
        /* Red color on hover */
        color: #fff;
        border: 1px solid #fff;
        border-radius: 0%;
        /* White text on hover */
    }
</style>
  <!-- Main Content  -->
  <section style="margin-top: 30%;" class="container">
    <div style="height: 50vh;">
        <h1> Page Comming Soon...</h1>
    </div>
</section>


<!-- ContactFrom  end -->
@endsection
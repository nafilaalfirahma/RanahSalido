@extends('layouts.layout')

@section('content')
<br>
<div class="container mt-5">
   <br>
   <h1 class="text-center">Admin Page</h1>
   <h2 class="text-center">Login</h2>

   <!-- Form Login -->
   <form method="POST" action="{{ route('login') }}">
       @csrf 

       <div class="mb-3">
           <label for="email" class="form-label">Email</label>
           <input type="email" class="form-control" id="email" name="email" required>
       </div>
       <div class="mb-3">
           <label for="password" class="form-label">Password</label>
           <input type="password" class="form-control" id="password" name="password" required>
       </div>
       <br>
       <a type="submit" class="btn btn-success" href="{{ route('adminPage')}}">Login</a>
   </form>

   <!-- Session Error belum login -->
   @if (session('error'))
       <script type="text/javascript">
           alert("{{ session('error') }}");
       </script>
   @endif

   @if ($errors->any())
       <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
       </div>
   @endif

@endsection


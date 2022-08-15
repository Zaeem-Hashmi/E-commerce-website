@include('master')
@include('header')
    <div class="container">
        <h1 class="text-center pt-5">Login Page</h1>
        <form action="/login" method="POST" class="d-flex flex-column col-4 offset-sm-4 py-5">
            @csrf
            <label for="email">Email</label>
            <input type="email" placeholder="test@test.com" name="email">
            <br>
            <br>
            <label for="password">Password</label>
            <input type="password" name="password">
            <br>
            <br>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

@include('footer')
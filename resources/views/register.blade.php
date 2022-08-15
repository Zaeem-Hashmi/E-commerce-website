@include('master')
@include('header')
    <div class="container">
        <h1 class="text-center pt-4">Register yourself</h1>
        <form action="/register" method="POST" class="d-flex flex-column col-4 offset-sm-4 py-5">
            @csrf
            <label for="name">Name</label>
            <input type="text" placeholder="Name" name="name">
            <br>
            <br>
            <label for="email">Email</label>
            <input type="email" placeholder="test@test.com" name="email">
            <br>
            <br>
            <label for="password">Password</label>
            <input type="password" name="password">
            <br>
            <br>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

@include('footer')
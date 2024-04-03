<h1>Login Page</h1>
<form action="{{ route('login.post') }}" method="POST">
    @csrf
    @method('POST')
    <input type="email" name="email" placeholder="Email">
    @error('email')
        {{ $message }}
    @enderror
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>

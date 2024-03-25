<h1>Registration Page</h1>
<form action="{{ route('register.post') }}" method="POST">
    @csrf
    @method('POST')
    <input type="text" placeholder="first name" name="fname">
    <input type="text" placeholder="last name" name="lname">
    <input type="text" placeholder="city" name="city">
    <input type="text" placeholder="state" name="state">
    <input type="text" placeholder="zip" name="zip">
    <input type="email" placeholder="email" name="email">
    <input type="password" placeholder="password" name="password">
    <input type="submit" value="Register">
</form>

@props(['username' => null])

@if ($username == null)
    <a href="/">Login</a> |
@else
    <a href="/">Logout</a> |
@endif

@if ($username != null)
    <a href="/dashboard?username={{ $username }}">Dashboard</a> |
    <a href="/profile?username={{ $username }}">Profile</a> |
    <a href="/pengelolaan?username={{ $username }}">Pengelolaan</a>
@else
    <a href="/dashboard">Dashboard</a> |
    <a href="/profile">Profile</a> |
    <a href="/pengelolaan">Pengelolaan</a>
@endif
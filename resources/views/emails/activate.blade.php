<h1>
    Verify your email account
</h1>
<p>
    <a href="{{ route('user.activate', [$user->id, $user->activate_token]) }}">Activate</a>
</p>
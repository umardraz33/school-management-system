@component('mail::message')
Hello {{$user->name}},
<p>We understand it Happen.</p>
@component('mail::button', ['url' => url('reset/'.$user->remember_token.'?email='.urlencode($user->email))])
Reset Your Password
@endcomponent
<p>if in case you have any issue to recovering your password, please contact us.</p>
Thanks
<br>
{{config('app.name')}}
@endcomponent
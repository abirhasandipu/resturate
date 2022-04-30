
<h3>The list of users</h3>

@foreach($users as $user)
    <p>{{$user->name}} ----- {{$user->email}}</p>
@endforeach



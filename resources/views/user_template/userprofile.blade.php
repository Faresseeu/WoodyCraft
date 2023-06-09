@extends('user_template.layouts.user_profile_template')
@section('profilecontent')

    @foreach($users as $user) @endforeach
    <h1>Profile</h1>

    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

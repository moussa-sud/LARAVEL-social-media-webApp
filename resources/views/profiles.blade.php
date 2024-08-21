@extends('components.layout')

@section('content')
   
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Bio</th>
            <th>Actions</th>
        </tr>

        @foreach ($profiles as $profile)
            <tr>
                <td>{{ $profile->id }}</td>
                <td>{{ $profile->name }}</td>
                <td>{{ $profile->email }}</td>
                <td>{{ $profile->bio }}  </td>


 {{-- from here the authentication should be applyed--}}


                <td>

                    <form action="{{ route('home.show', $profile->id) }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm">View Profile</button>
                    </form>
    
                </td>

 {{-- to here the authentication should be applyed--}}




            </tr>
        @endforeach

    </table>
    {{$profiles->links()}}

    @endsection
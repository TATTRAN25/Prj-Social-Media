@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form method="get">
                <input type="text" name="search_bar" id="search_bar">
                <input type="submit" value="Search">
            </form>
            @if (count($users) > 0)
            <ul>
                @foreach ($users as $user)
                    <li>{{$user->name}}</li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')

@if (Auth::check())
    <?php $user = Auth::user(); ?>
    <h1>タスク一覧</h1>
    <div class="row">
        
        @if (count($tasks) > 0)
            @include('tasks.tasks', ['tasks' => $tasks])
        @endif
    </div>

    {!! link_to_route('tasks.create', '新規タスクの投稿') !!}
@else
    
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Tasklists</h1>
            {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endif
@endsection
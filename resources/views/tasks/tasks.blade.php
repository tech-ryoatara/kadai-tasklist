<ul class="media-list">
@foreach ($tasks as $task)
    <?php $user = $task->user; ?>
    <li class="media">
        <div class="media-body">
            <div>
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $task->created_at }}</span>
                {!! link_to_route('tasks.edit', 'このタスクの編集', ['id' => $task->id]) !!}
            </div>
            <div>
            <ul>
                <p>status: {{ $task->status}}</p>
                <p>タスク: {{ $task->content }}</p>
             </ul>  
            </div>
        </div>
    </li>
@endforeach
</ul>
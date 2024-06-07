<h1>List of tasks</h1>
<div>
    @forelse($tasks as $task)
    <div>
        <a href="{{ route('tasks.show',['id'=> $task->id])}}">{{$task->title}}</a>
    </div>
    @empty
    <div>There are no tasks</div>
    @endforelse
</div>



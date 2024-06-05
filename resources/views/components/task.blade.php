<body>
<div class="task">
    <div class="task-title">Название: {{ $item->title }}</div>
    <div class="task-description">Описание: {{ $item->description }}</div>
    <form method="post" action="{{ route('removeTask', $item->id) }}">
        @csrf
        <button type="submit" class="btn-admin">Удалить задачу</button>
    </form>
</div>
</body>

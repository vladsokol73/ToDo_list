@extends("layouts.app")

@section("title", 'Профиль')

@section("content")
    <body>
    @auth()
        <div class="buttons">
            <button
                onclick="window.location.href = '{{ route('addTask') }}'"
                type="button" class="btn-admin">
                Добавить задачу
            </button>

            <div>
                <h1 class="page-title">Все задачи</h1>
                @each('components.task', $tasks, 'item')
            </div>
        </div>
    @endauth
    </body>
@endsection

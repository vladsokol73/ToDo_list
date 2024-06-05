@extends("layouts.app")

@section("title")
    Добавление задачи
@endsection

@section('content')
    <h1 class="mb-4">Добавить задачу</h1>
    <div class="container">
        <form method="post" action="{{ route('saveTask') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="margin-top: 10px">
                <input type="text" class="form-control" name="title" placeholder="название задачи"
                       required minlength="3" maxlength="35" value="{{ old('title') ?? '' }}">
            </div>

            <div class="form-group" style="margin-top: 10px">
                <input type="text" class="form-control" name="description" placeholder="описание задачи"
                       required minlength="3" maxlength="35" value="{{ old('description') ?? '' }}">
            </div>

            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection

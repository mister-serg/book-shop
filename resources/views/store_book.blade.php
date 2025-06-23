<form method = 'POST' action="{{ route('books.store') }}" multiple="">
@csrf
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
        </div>
    @endif
    Название:
    <input type="text" name="title" id="title" required>
    <br>
    Обложка:
    <input type="file" name="cover" id="cover">
    <br>
    Описание:
    <input type="text" name="description" id="description">
    <br>
    Год издания:
    <input type="number" name="publication_year" id="publication_year" required>
    <br>
    Жанр (id):
    <input type="text" name="genre_id" id="genre_id" required>
    <br>
    Автор (id):
    <input type="text" name="author_id" id="author_id" required>
    <br>
    Цена:
    <input type="number" name="price" id="price" required>
    <br>
    Количество:
    <input type="number" name="count" id="count" required>
    <br>
    <input type="submit" value="create">
</form>

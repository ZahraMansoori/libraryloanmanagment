<tr>
    <td>{{ $book->id }}</td>
    <td>{{ $book->name }}</td>
    <td>{{ $book->author }}</td>
    <td>{{ $book->pub_year}}</td>
    <td>{{ $book->pub_name}}</td>
    <td>{{ $book->translator_name}}</td>
    <td>{{ $book->category}}</td>
    <td>{{ $book->num}}</td>
    <td style="text-align: center">
        <a href="{{ route('admin.bookEdit',[$book->id]) }}">ویرایش |</a>
        <a href="{{ route('admin.bookDelete',[$book-> id ]) }}"> حذف</a>
    </td>

</tr>
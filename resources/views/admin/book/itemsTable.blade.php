<tr>
    <td>{{ $book->id }}</td>
    <td>{{ $book->name }}</td>
    <td>{{ $book->pub_year}}</td>
    <td>{{ $book->pub_name}}</td>
    <td>{{ $book->translator_name}}</td>
    <td>{{ $book->category}}</td>
    <td>{{ $book->price}}</td>
    <td style="text-align: center">
        <a href="{{ route('admin.bookEdit',[$user->id]) }}">ویرایش |</a>
        <a href="{{ route('admin.bookDelete',[$user-> id ]) }}"> حذف</a>
    </td>

</tr>
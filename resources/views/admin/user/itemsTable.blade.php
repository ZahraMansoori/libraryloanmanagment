<tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email}}</td>
    <td style="text-align: center">
        <a href="{{ route('admin.userEdit',[$user->id]) }}">ویرایش  |</a>
        <a href="{{ route('admin.userDelete',[$user-> id ]) }}">  حذف  </a>
        <a href="{{ route('admin.loanControl',[$user-> id ]) }}">|  کتاب ها</a>
    </td>

</tr>
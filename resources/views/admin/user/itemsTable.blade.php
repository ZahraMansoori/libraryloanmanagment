<tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email}}</td>
    <td style="text-align: center">
       @include('admin.user.operation',$user)  </td>

</tr>
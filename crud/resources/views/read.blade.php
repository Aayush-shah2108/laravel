<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<body class="antialiased">
    <table>
        <th>
            <tr>
            <td> Id </td>
            <td>&nbsp; created </td>
            <td>&nbsp; Action </td>
            <td>&nbsp; name </td>

            </tr>
        </th>
        @foreach ($readArr as $ra)
        <tr>
        <td> {{$ra->id}} </td>
        <td> &nbsp; {{$ra->created_at}} </td>
        <td> &nbsp; {{$ra->updated_at}} </td>
        <td>&nbsp; {{$ra->name}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>
@extends('layouts.app')

@section('title','1-1 Relationshi in Husband Wife')

@section('content')
    <table border="2">
        <tr>
            <th>Husband</th>
            <th>Wife</th>
            <th>
                Action/
                <a href="{{ route('husband-wife.create') }}"><button>Add New Pair</button></a>
            </th>
        </tr>

        @foreach ($husbands as $husband )
        <tr>
            <td>{{ $husband->name }}</td>
            <td>{{ $husband->wife ? $husband->wife->name : 'No Wife' }}</td>
            <td>
                <button>Edit</button>
                <button>Delete</button>
            </td>
        </tr>
        @endforeach

    </table>
@endsection



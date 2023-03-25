@extends('layouts.app')

@section('title','1-1 Relationshi in Husband Wife')

@section('content')
    <table border="2">
        <tr>
            <th>Husband </th>
            <th>Wife </th>
            <th>
                Action/
                <a href="{{ route('husband-wife.create') }}"><button>Add New Pair</button></a>
            </th>
        </tr>
        <tr>
            <td colspan="3"> @include('husband-wife.search-husband') </td>
        </tr>

        @if ($husbands->isEmpty())
            <tr>
               <td colspan="3"> @include('husband-wife.no-data-available') </td>
            </tr>

        @elseif (!$husbands->isEmpty())
                @foreach ($husbands as $husband )
                <tr>
                    <td>{{ $husband->name }}</td>
                    <td>{{ $husband->wife ? $husband->wife->name : 'No Wife' }}</td>
                    <td>
                        <a href="{{ route('husband-wife.edit',$husband->id) }}"><button>Edit</button></a>
                        <button>Delete</button>
                    </td>
                </tr>
                @endforeach

        @endif

    </table>
@endsection



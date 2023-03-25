@extends('layouts.app')

@section('title','Edit Husband Wife New Pair')

@section('content')

    <form action="{{ route('husband-wife.update',$husband->id) }}" method="post">
        @csrf
        @method('PATCH')
        <table border='2'>
            <tr>
                <th>Husband</th>
                <th>Wife</th>
                <th rowspan="2"><button type="submit">Update</button></th>
            </tr>
            <tr>
                <td><input type="text" name="husband_name" id="" value="{{ $husband->name }}"></td>
                <td><input type="text" name="wife_name" id="" value="{{ $husband->wife->name }}"></td>
            </tr>
        </table>
    </form>

@endsection
